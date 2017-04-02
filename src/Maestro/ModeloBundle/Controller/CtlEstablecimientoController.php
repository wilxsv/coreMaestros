<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlEstablecimiento;
use Maestro\ModeloBundle\Entity\CtlAcceso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Ctlestablecimiento controller.
 *
 */
class CtlEstablecimientoController extends Controller
{
    /**
     * Lists all ctlEstablecimiento entities.
     *
     */
    public function indexAction($type = 0)
    {
        $em = $this->getDoctrine()->getManager();
        if ($type == 3) { $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByIdTipoEstablecimiento(38); }//se muestra mapa
        elseif ($type == 1) { $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByEstadoSchema(0); }//se muestra los no verificados
        elseif ($type == 2) { $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByEstadoSchema(1); }//se muestran los no habilitados
        elseif ($type == 0) { $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByEnableSchema(1); }//se muestran ecos
        else { $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByEnableSchema(1); }

        return $this->render('ctlestablecimiento/index.html.twig', array(
            'ctlEstablecimientos' => $ctlEstablecimientos,
        ));
    }

    /**
     * Creates a new ctlEstablecimiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlEstablecimiento = new Ctlestablecimiento();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $ctlEstablecimiento->setRegistroSchema(new \DateTime('now'));
            $ctlEstablecimiento->setUserIdSchema($this->getUser()->getId());
            $ctlEstablecimiento->setIpUserSchema($request->getClientIp());
            $ctlEstablecimiento->setEstadoSchema(0);
            $ctlEstablecimiento->setEnableSchema(0);
            $em->persist($ctlEstablecimiento);
            $em->flush($ctlEstablecimiento);

            return $this->redirectToRoute('establecimiento_show', array('id' => $ctlEstablecimiento->getId()));
        }

        return $this->render('ctlestablecimiento/agrega.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlEstablecimiento entity.
     *
     */
    public function showAction(CtlEstablecimiento $ctlEstablecimiento)
    {
        $deleteForm = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);

        return $this->render('ctlestablecimiento/show.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlEstablecimiento entity.
     *
     */
    public function editAction(Request $request, CtlEstablecimiento $ctlEstablecimiento)
    {
        $deleteForm = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $editForm->handleRequest($request);
        $deleteForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			/*
            $ctlEstablecimiento->setRegistroSchema(new \DateTime('now'));
            $ctlEstablecimiento->setUserIdSchema($this->getUser()->getId());
            $ctlEstablecimiento->setIpUserSchema($request->getClientIp());
            */
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('maestro_homepage');
        }

        return $this->render('ctlestablecimiento/edit.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlEstablecimiento entity.
     *
     */
    public function deleteAction(Request $request, CtlEstablecimiento $ctlEstablecimiento)
    {
        $form = $this->createDeleteForm($ctlEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlEstablecimiento);
            $em->flush($ctlEstablecimiento);
        }

        return $this->redirectToRoute('establecimiento_index');
    }

    /**
     * Creates a form to delete a ctlEstablecimiento entity.
     *
     * @param CtlEstablecimiento $ctlEstablecimiento The ctlEstablecimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlEstablecimiento $ctlEstablecimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('establecimiento_delete', array('id' => $ctlEstablecimiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Lists all public ctlEstablecimiento.
     *
     */
    public function homeAction()
    {
		
        $em = $this->getDoctrine()->getManager();
        $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByEnableSchema(1);
        $pendientes = '';
        $auth_checker = $this->get('security.authorization_checker');
        if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
			$this->setMenu( $auth_checker );
		}
        if($auth_checker->isGranted('ROLE_VALIDA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 0 AND p.enableSchema = 0')->getQuery();
			$pendientes = $query->getResult();
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 0')->getQuery();
			$enviados = $query->getResult();
			return $this->render('ctlestablecimiento/validaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes,'enviados' => $enviados));
		} elseif ($auth_checker->isGranted('ROLE_HABILITA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 0')->getQuery();
			$pendientes = $query->getResult();
			return $this->render('ctlestablecimiento/habilitaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes));
		} elseif ($auth_checker->isGranted('ROLE_AGREGA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.userIdSchema = '.$this->getUser()->getId().' AND p.estadoSchema = 0 AND p.enableSchema = 0')->getQuery();
			$pendientes = $query->getResult();
			$personal = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByUserIdSchema( $this->getUser()->getId() );
			
			return $this->render('ctlestablecimiento/agregaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes,'personal' => $personal));
		} else
			return $this->render('ctlestablecimiento/public.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos));
		
 
        
    }
    
    private function setMenu( $rol ){
		$em = $this->getDoctrine()->getManager();
        $acceso = $em->getRepository('MaestroModeloBundle:CtlAcceso')->findBy(array(), array('ordenAcceso' => 'ASC'));
        $list = '';
        $pass = '';
        foreach ($acceso as $accesos) {
			if( $rol->isGranted($accesos->getRolAccesoId()) ){
				$pass = $pass.$accesos->getPathAcceso().'/';
				if ( $accesos->getVisibleAcceso() == TRUE ){
					$url = $this->generateUrl($accesos->getPathAcceso(), array());//$this->generateUrl($accesos->getPathAcceso(), UrlGeneratorInterface::ABSOLUTE_URL);
					$list = $list.'<li><a href="'.$url.'"><i class="icon-double-angle-right"></i> '.$accesos->getNombreAcceso().'</a></li>';
				}
			}
		}
		if (strlen($list) > 5 ){
			$list = '<li><a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text">  Opciones</span><b class="arrow icon-angle-down"></b></a><ul class="submenu">'.$list.'</ul></li>';
		}
		
		$this->get('session')->set('menu', $list);
		$this->get('session')->set('pass', $pass);
	}
	
	private function setSchema(){
		return $data;
	}
}
