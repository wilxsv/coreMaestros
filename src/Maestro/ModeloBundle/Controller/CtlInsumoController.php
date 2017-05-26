<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlInsumo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Maestro\ModeloBundle\Entity\CtlAcceso;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Query\ResultSetMapping;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Ctlinsumo controller.
 *
 */
class CtlInsumoController extends Controller
{
    /**
     * Lists all ctlInsumo entities.
     *
     */
    public function indexAction($type = 3)
    {
        $em = $this->getDoctrine()->getManager();
        $ctlInsumos = $em->getRepository('MaestroModeloBundle:CtlInsumo')->findByEnableSchema(1);
        $auth_checker = $this->get('security.authorization_checker');
        $valida = "";
        $habilita = "";
        $denegados = "";
        if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
	        $denegados = $em->getRepository('MaestroModeloBundle:CtlInsumo')->findByEnableSchema(-1);
			$this->setMenu( $auth_checker );
			if ($auth_checker->isGranted('ROLE_HABILITA')){
				$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlInsumo');
				$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 0')->getQuery();
				$habilita = $query->getResult();
			}
		}


        
		return $this->render('ctlinsumo/public.html.twig', array(
			'ctlInsumos' => $ctlInsumos,
			'valida' => $valida, 
			'habilita' => $habilita, 
			'denegados' => $denegados
		));
    }

    /**
     * Creates a new ctlInsumo entity.
     *
     */
    public function newAction(Request $request, $type = 0)
    {
        $ctlInsumo = new Ctlinsumo();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoType', $ctlInsumo);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            
            $ctlInsumo->SetCodigoSinab(0);
            $ctlInsumo->setCodificacionInsumo(0);
            $ctlInsumo->setCodigoSinabExt(0);
            $ctlInsumo->setListadoOficial(FALSE);
            $ctlInsumo->setEstadoSchema(0);
            
            $ctlInsumo->setRegistroSchema(new \DateTime('now'));
            $ctlInsumo->setUserIdSchema($this->getUser()->getId());
            $ctlInsumo->setIpUserSchema($request->getClientIp());
            $ctlInsumo->setEstadoSchema(0);
            $ctlInsumo->setEnableSchema(0);
            $ctlInsumo->setDetalleSchema( $this->setDetalleSchema( $form->get('detalleSchema')->getData() ) );

            $em->persist($ctlInsumo);
            $em->flush($ctlInsumo);

            return $this->redirectToRoute('insumo_index', array('type' => 0));
        }//elseif ($type == 0) { return $this->redirectToRoute('insumo_index');        }

        if ($type == 2){ $view = 'ctlinsumo/medicamento.html.twig'; }
        if ($type == 6){ $view = 'ctlinsumo/general.html.twig'; }
        if ($type == 0){ $view = 'ctlinsumo/new.html.twig'; }
        return $this->render($view, array(
            'ctlInsumo' => $ctlInsumo,
            'form' => $form->createView(),
            'tipo' => "Tipo insumo",
        ));
    }

    /**
     * Finds and displays a ctlInsumo entity.
     *
     */
    public function showAction(CtlInsumo $ctlInsumo)
    {
        $deleteForm = $this->createDeleteForm($ctlInsumo);

        return $this->render('ctlinsumo/show.html.twig', array(
            'ctlInsumo' => $ctlInsumo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlInsumo entity.
     *
     */
    public function editAction(Request $request, CtlInsumo $ctlInsumo)
    {
        $deleteForm = $this->createDeleteForm($ctlInsumo);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoType', $ctlInsumo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('insumo_edit', array('id' => $ctlInsumo->getId()));
        }

        return $this->render('ctlinsumo/edit.html.twig', array(
            'ctlInsumo' => $ctlInsumo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlInsumo entity.
     *
     */
    public function deleteAction(Request $request, CtlInsumo $ctlInsumo)
    {
        $form = $this->createDeleteForm($ctlInsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlInsumo);
            $em->flush($ctlInsumo);
        }

        return $this->redirectToRoute('insumo_index');
    }

    /**
     * Creates a form to delete a ctlInsumo entity.
     *
     * @param CtlInsumo $ctlInsumo The ctlInsumo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlInsumo $ctlInsumo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('insumo_delete', array('id' => $ctlInsumo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Creates a new ctlInsumo entity.
     *
     */
     public function medicoAction(Request $request, $type)
     {
         $ctlInsumo = new Ctlinsumo();
         $form = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoType', $ctlInsumo);
         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $em->persist($ctlInsumo);
             $em->flush($ctlInsumo);

             return $this->redirectToRoute('insumo_show', array('id' => $ctlInsumo->getId()));
         }

         return $this->render('ctlinsumo/medico.html.twig', array(
             'ctlInsumo' => $ctlInsumo,
             'form' => $form->createView(),
         ));
     }

   public function medicamentoAction(Request $request, $type)
   {
     $ctlInsumo = new Ctlinsumo();
     $form = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoMedSolicitudType', $ctlInsumo);
     $form->handleRequest($request);

     if ($form->isSubmitted() && $form->isValid()) {
         $em = $this->getDoctrine()->getManager();
         $em->persist($ctlInsumo);
         $em->flush($ctlInsumo);

         return $this->redirectToRoute('insumo_show', array('id' => $ctlInsumo->getId()));
     }

     return $this->render('ctlinsumo/medicamento.html.twig', array(
        'ctlInsumo' => $ctlInsumo,
         'form' => $form->createView(),
     ));
    }
    
    public function publicAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ctlInsumos = $em->getRepository('MaestroModeloBundle:CtlInsumo')->findByEnableSchema(1);
        $auth_checker = $this->get('security.authorization_checker');
        $valida = "";
        $habilita = "";
        $denegados = "";
        if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
	        $denegados = $em->getRepository('MaestroModeloBundle:CtlInsumo')->findByEnableSchema(-1);
			$this->setMenu( $auth_checker );
			if ($auth_checker->isGranted('ROLE_HABILITA')){
				$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlInsumo');
				$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 0')->getQuery();
				$habilita = $query->getResult();
			}
		}


        
		return $this->render('ctlinsumo/public.html.twig', array(
			'ctlInsumos' => $ctlInsumos,
			'valida' => $valida, 
			'habilita' => $habilita, 
			'denegados' => $denegados
		));
    }

    /**
     *  @Security("has_role('IS_AUTHENTICATED_ANONYMOUSLY')")
     */
    public function homeAction()
    {
		
        $em = $this->getDoctrine()->getManager();
        $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByEnableSchema(1);
        $denegados = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByEnableSchema(-1);
        $pendientes = '';
        $auth_checker = $this->get('security.authorization_checker');
        if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
			$this->setMenu( $auth_checker );
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 0 AND p.enableSchema = 0')->getQuery();
		}
		
        if($auth_checker->isGranted('ROLE_VALIDA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 0 AND p.enableSchema = 0')->getQuery();
			$pendientes = $query->getResult();
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 0')->getQuery();
			$enviados = $query->getResult();
			return $this->render('ctlestablecimiento/validaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes,'enviados' => $enviados, 'denegados' => $denegados));
		} elseif ($auth_checker->isGranted('ROLE_HABILITA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 0')->getQuery();
			$pendientes = $query->getResult();
			return $this->render('ctlestablecimiento/habilitaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes, 'denegados' => $denegados));
		} elseif ($auth_checker->isGranted('ROLE_AGREGA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.userIdSchema = '.$this->getUser()->getId().' AND p.estadoSchema = 0 AND p.enableSchema = 0')->getQuery();
			$pendientes = $query->getResult();
			$personal = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByUserIdSchema( $this->getUser()->getId() );
			
			return $this->render('ctlestablecimiento/agregaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes,'personal' => $personal, 'denegados' => $denegados));
		} else
			return $this->render('ctlestablecimiento/public.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos));
		
 
        
    }
    
    private function setMenu( $rol ){
		$em = $this->getDoctrine()->getManager();
        
        $list = '';
        $pass = '';
		$sql = "SELECT c0_.visible_acceso AS visible_acceso0, c0_.nombre_acceso AS nombre_acceso1, c0_.path_acceso AS path_acceso2, c1_.nombre_rol AS nombre_rol3 
				FROM ctl_acceso c0_ INNER JOIN ctl_permisos AS p ON (c0_.id = p.acceso_id) INNER JOIN ctl_rol AS c1_ ON (c1_.id = p.rol_id) 
				GROUP BY c0_.visible_acceso, c0_.nombre_acceso, c0_.path_acceso, c1_.nombre_rol, c0_.orden_acceso ORDER BY c0_.orden_acceso ASC";
		
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MaestroModeloBundle:CtlAcceso', 'a');
		$rsm->addFieldResult('a','path_acceso','pathAcceso');
		$rsm->addFieldResult('a','id','id');
		$rsm->addFieldResult('a','visible_acceso','visibleAcceso');
		$rsm->addFieldResult('a','orden_acceso','ordenAcceso');
		$rsm->addFieldResult('a','nombre_acceso','nombreAcceso');
		
		$nq = $this->getDoctrine()->getManager()
					->createNativeQuery('
						SELECT a.path_acceso, a.visible_acceso, a.orden_acceso, r.id , a.nombre_acceso
						FROM ctl_acceso a INNER JOIN ctl_permisos AS p ON (a.id = p.acceso_id) INNER JOIN ctl_rol AS r ON (r.id = p.rol_id) ORDER BY a.orden_acceso ASC;',
			$rsm);
		$acceso = $nq->getArrayResult();
		foreach ($acceso as $accesos) {	
			$pass = $pass.$accesos['pathAcceso'].'/';
			$roles = $em->getRepository('MaestroModeloBundle:CtlRol')->findById($accesos['id']);
			foreach ($roles as $rolt) {	
				if ( $rol->isGranted( $rolt->getNombreRol() ) ){
					$pass = $pass.$rolt->getNombreRol().'/';
					$url = $this->generateUrl($accesos['pathAcceso'], array());//$this->generateUrl($accesos->getPathAcceso(), UrlGeneratorInterface::ABSOLUTE_URL);
					$list = $list.'<li><a href="'.$url.'"><i class="icon-double-angle-right"></i> '.$accesos['nombreAcceso'].'</a></li>';	
				}
			}
			
		}
		/*
		if (strlen($list) > 5 ){
			//$list = '<li><a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text">  Opciones</span><b class="arrow icon-angle-down"></b></a><ul class="submenu">'.$list.'</ul></li>';
		}
		*/
		$this->get('session')->set('menu', $list);
		$this->get('session')->set('pass', $pass);
	}
	
	private function setSchema(){
		return $data;
	}
	
	private function sendMessage($titulo, $mensaje, $para){
		$message = \Swift_Message::newInstance()
        ->setSubject($titulo)
        ->setFrom('todasconsultoras@yandex.com')
        ->setTo($para)
        ->setBody( $this->renderView( 'Emails/actualizacion.html.twig', array('mensaje' => $mensaje)), 'text/html');
                /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
		$this->get('mailer')->send($message);
	}
	
	private function getMailbyIdUser( $idUser ){
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('MaestroModeloBundle:FosUser')->findById( $idUser );
		foreach ($user as $u) {	
			return $u->getEmailCanonical();//;
		}
		return "admin@salud.gob.sv";
	}
	
	private function setDetalleSchema( $new ){
		$id = $this->getUser()->getId();
		return "<nodo><id>$id</id><fecha>".date("Y-m-d H:i:s")."</fecha><msg>$new</msg></nodo>";		
	}
}
