<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
        
 //       ->add('roles', 'choice', array('choices' => $this->getExistingRoles(), 'data' => $group->getRoles()));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fosUser);
            $em->flush($fosUser);

            return $this->redirectToRoute('admin_users_show', array('id' => $fosUser->getId()));
        }

        return $this->render('fosuser/new.html.twig', array(
            'fosUser' => $fosUser,
            'form' => $form->createView(),
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
        $fosUser = new Fosuser();
        		/*
		$formFactory = $this->get('fos_user.group.form.factory');


        $editForm = $this->createForm('Maestro\ModeloBundle\Form\FosUserType', $fosUser)
        ->add('roles', 'choice', array(
        'choices' => $this->getRolesNames(), //$this->getExistingRoles(),
        'label' => 'Roles',
//        'expanded' => true,
        'multiple' => true,
  //      'mapped' => true,
    ));*/
		$editForm = $this->createForm('Maestro\ModeloBundle\Form\FosUserType', $fosUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_users_edit', array('id' => $fosUser->getId()));
        }

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
            $em = $this->getDoctrine()->getManager();
            $em->remove($fosUser);
            $em->flush($fosUser);
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