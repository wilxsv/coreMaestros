<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Maestro\ModeloBundle\Entity\CtlEstablecimiento;
use Maestro\ModeloBundle\Entity\CtlAcceso;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * Fosuser controller.
 *
 */
class FosUserController extends Controller
{
    /**
     * Lists all fosUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fosUsers = $em->getRepository('MaestroModeloBundle:FosUser')->findAll();

        return $this->render('fosuser/index.html.twig', array(
            'fosUsers' => $fosUsers,
        ));
    }

    /**
     * Creates a new fosUser entity.
     *
     */
    public function newAction(Request $request)
    {
		$formFactory = $this->get('fos_user.group.form.factory');

        $fosUser = new Fosuser();
        $form = $this->createForm('Maestro\ModeloBundle\Form\FosUserType', $fosUser);
        $form->handleRequest($request);
        $tmp = '';

        if ($form->isSubmitted() && $form->isValid()) {/*
            $em = $this->getDoctrine()->getManager();
            $fosUser->setRoles('');
            $em = $this->getDoctrine()->getManager();
         	$rol = $em->getRepository('MaestroModeloBundle:CtlRol')->find( $form->get('roles')->getData() );
            $fosUser->addRole($rol->getNombreRol());
            $em->persist($fosUser);
            $em->flush($fosUser);*/

            //return $this->redirectToRoute('admin_users_show', array('id' => $fosUser->getId())); php app/console fos:user:promote testuser ROLE_ADMIN
            $last_line = system('cd .. && php app/console fos:user:create '.$form->get('username')->getData().' '.$form->get('email')->getData().' '.$form->get('password')->getData() , $retval);
            $tmp = '<hr />Last line of the output: ' . $last_line . '<hr />Return value: ' 	;
            if (!$retval){
//	         $last_line = system('cd .. && php app/console fos:user:create '.$form->get('username')->getData().' '.$form->get('email')->getData().' '.$form->get('password')->getData() , $retval);
			}
        }

        return $this->render('fosuser/new.html.twig', array(
            'fosUser' => $fosUser,
            'form' => $form->createView(), 'tmp' => $tmp 
        ));
    }

    /**
     * Finds and displays a fosUser entity.
     *
     */
    public function showAction(FosUser $fosUser)
    {
        $deleteForm = $this->createDeleteForm($fosUser);

        return $this->render('fosuser/show.html.twig', array(
            'fosUser' => $fosUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fosUser entity.
     *
     */
    public function editAction(Request $request, FosUser $fosUser)
    {        
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\FosUserType', $fosUser);
        $editForm->handleRequest($request);
        
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			/*
			$em = $this->getDoctrine()->getManager();
			$fosUser = $em->getRepository('MaestroModeloBundle:FosUser')->findByUsername( $editForm->get('username')->getData());
			if (!$fosUser) {
				throw $this->createNotFoundException("Error");
			}
			$fosUser->setFullname($editForm->get('fullname')->getData());
            $fosUser->setEstablecimiento($editForm->get('establecimiento')->getData());
			
			$em->flush();
            */
            $em = $this->getDoctrine()->getManager();
         	/*$rol = $em->getRepository('MaestroModeloBundle:CtlRol')->find( $editForm->get('roles')->getData() );
         	if ( $rol->getNombreRol() != 'ROLE_DEFAULT'){
				$fosUser->addRole($rol->getNombreRol());
			}else {
				$user->addRole("ROLE_U");
			}*/
			$fosUser->setFullname($editForm->get('fullname')->getData());
            $fosUser->setEstablecimiento($editForm->get('establecimiento')->getData());
            //$fosUser->setRoles("a:0:{}");
            $em->persist($fosUser);
            $em->flush($fosUser);
           
            //$userManager = $this->get('fos_user.user_manager');
            //$fosUser->addRole('ROLE_ADM');
            //$userManager->updateUser($fosUser);
			
            return $this->redirectToRoute('admin_users_edit', array('id' => $fosUser->getId()));
        }
//        $editForm->add('roles', 'entity',array('label'  => 'Roles :', 'class' => 'MaestroModeloBundle:CtlRol', 'required' => false, 'multiple' => false,));
        

        return $this->render('fosuser/edit.html.twig', array(
            'fosUser' => $fosUser,
            'edit_form' => $editForm->createView(),
        ));
    }
    
    public function getRolesNames(){
		return array(
			"ROLE_AGREGA" => "ROLE_AGREGA",
			"ROLE_VALIDA" => "ROLE_VALIDA",
			"ROLE_HABILITA" => "ROLE_HABILITA",        
		);
	}

    /**
     * Deletes a fosUser entity.
     *
     */
    public function deleteAction(Request $request, FosUser $fosUser)
    {
        $form = $this->createDeleteForm($fosUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $last_line = system('cd .. && php app/console fos:user:deactivate '.$form->get('username')->getData() , $retval);
            //$tmp = '<hr />Last line of the output: ' . $last_line . '<hr />Return value: ' . $retval;
            if (!$retval){
				
			}
        }

        return $this->redirectToRoute('admin_users_index');
    }

    /**
     * Creates a form to delete a fosUser entity.
     *
     * @param FosUser $fosUser The fosUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FosUser $fosUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_users_delete', array('id' => $fosUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

	public function getExistingRoles()
	{
		$roleHierarchy = $this->container->getParameter('security.role_hierarchy.roles');
		$roles = array_keys($roleHierarchy);

		foreach ($roles as $role) {
			$theRoles[$role] = $role;
		}
		return $theRoles;
	}
}
