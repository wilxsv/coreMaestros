<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlEstablecimiento;
use Maestro\ModeloBundle\Entity\CtlAcceso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Query\ResultSetMapping;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
            $ctlEstablecimiento->setEstadoSchema(1);
            $ctlEstablecimiento->setEnableSchema(0);
            $ctlEstablecimiento->setDetalleSchema( $this->setDetalleSchema( $form->get('detalleSchema')->getData() ) );
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
        $denegaForm = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);

        return $this->render('ctlestablecimiento/show.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'denega_form' => $denegaForm->createView(),
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
        $denegaForm = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $editForm->handleRequest($request);
        $denegaForm->handleRequest($request);
        $deleteForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			
			/*if ($editForm->get('enableSchema')->getData() == 1 || $editForm->get('estadoSchema')->getData() == 1)
				exit(0);
			*/
            $ctlEstablecimiento->setIpUserSchema($request->getClientIp());
            $ctlEstablecimiento->setRegistroSchema(new \DateTime('now'));
            $ctlEstablecimiento->setDetalleSchema( $this->setDetalleSchema( $editForm->get('detalleSchema')->getData() ) );
            if ($editForm->get('estadoSchema')->getData() == 1){
				$ctlEstablecimiento->setEstadoSchema( 1 );
				$ctlEstablecimiento->setEnableSchema( 0 );
			}elseif ($editForm->get('enableSchema')->getData() == 1){
				$ctlEstablecimiento->setEstadoSchema( 1 );
				$ctlEstablecimiento->setEnableSchema( 1 );
			}elseif ($editForm->get('enableSchema')->getData() == -1 OR $editForm->get('estadoSchema')->getData() == -1){
				$ctlEstablecimiento->setEstadoSchema( -1 );
				$ctlEstablecimiento->setEnableSchema( -1 );
			}
            $this->getDoctrine()->getManager()->flush();
            $this->sendMessage("Actualizacion en establecimiento" , "El establecimiento tiene nuevos comentarios, por favor revisa en el sistema los cambios.", $this->getMailbyIdUser(  $ctlEstablecimiento->getUserIdSchema() ) );
            return $this->redirectToRoute('maestro_homepage');
        }

        return $this->render('ctlestablecimiento/edit.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'denega_form' => $deleteForm->createView(),
            'nombre' => $ctlEstablecimiento->getNombre()
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
        //Para la parte publica
		$sql = "WITH RECURSIVE path(nombre, path, parent, id, parent_id, direccion, telefono) AS (
		 SELECT nombre, '/', NULL, id, id_establecimiento_padre, direccion, telefono FROM ctl_establecimiento WHERE id = 1038
		 UNION
		 SELECT ctl_establecimiento.nombre, parentpath.path || CASE parentpath.path WHEN '/' THEN '' ELSE '/' END || ctl_establecimiento.nombre, parentpath.path, ctl_establecimiento.id, ctl_establecimiento.id_establecimiento_padre, ctl_establecimiento.direccion, ctl_establecimiento.telefono
		 FROM ctl_establecimiento, path as parentpath
		 WHERE ctl_establecimiento.id_establecimiento_padre = parentpath.id)
		SELECT * FROM path";
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MaestroModeloBundle:CtlEstablecimiento', 'e');
		$rsm->addFieldResult('e','nombre','nombre');
		$rsm->addFieldResult('e','path','direccion');
		$rsm->addFieldResult('e','telefono','telefono');
		$rsm->addFieldResult('e','codestab_consumos','codestabConsumos');
		$rsm->addFieldResult('e','id','id');
		$rsm->addFieldResult('e','idmicrored','idmicrored');
		$rsm->addFieldResult('e','id_establecimiento_padre','idEstablecimientoPadre');
		$nq = $this->getDoctrine()->getManager()->createNativeQuery($sql, $rsm);
		$establecimientos = $nq->getArrayResult();
		
		
        $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findByEnableSchema(1);
        $repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
		$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = -1 OR p.enableSchema = -1')->addOrderBy('p.registroSchema', 'ASC')->getQuery();
		$denegados = $query->getResult();
		$pendientes = '';
        $auth_checker = $this->get('security.authorization_checker');
        if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
			$this->setMenu( $auth_checker );
		}
		
        if($auth_checker->isGranted('ROLE_VALIDA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 0 AND p.enableSchema = 0')->addOrderBy('p.registroSchema', 'ASC')->getQuery();
			$pendientes = $query->getResult();
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 0')->addOrderBy('p.registroSchema', 'ASC')->getQuery();
			$enviados = $query->getResult();
			return $this->render('ctlestablecimiento/validaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes,'enviados' => $enviados, 'denegados' => $denegados));
		} elseif ($auth_checker->isGranted('ROLE_HABILITA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 0')->addOrderBy('p.registroSchema', 'ASC')->getQuery();
			$pendientes = $query->getResult();
			return $this->render('ctlestablecimiento/habilitaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes, 'denegados' => $denegados));
		} elseif ($auth_checker->isGranted('ROLE_AGREGA')){
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.userIdSchema = '.$this->getUser()->getId().' AND p.estadoSchema = 0 AND p.enableSchema = 0')->addOrderBy('p.registroSchema', 'ASC')->getQuery();
			$pendientes = $query->getResult();
			$repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
			$query = $repository->createQueryBuilder('p')->where('p.userIdSchema = '.$this->getUser()->getId())->addOrderBy('p.registroSchema', 'ASC')->getQuery();
			$personal = $query->getResult();
			return $this->render('ctlestablecimiento/agregaPerfil.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos,'pendientes' => $pendientes,'personal' => $personal, 'denegados' => $denegados));
		} else
			return $this->render('ctlestablecimiento/public.html.twig', array('ctlEstablecimientos' => $ctlEstablecimientos, 'listado' => $establecimientos));
		
 
        
    }
    
    private function setMenu( $rol ){
		$em = $this->getDoctrine()->getManager();
        
        $list = '';
        $pass = '';
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
		FROM ctl_acceso a INNER JOIN ctl_permisos AS p ON (a.id = p.acceso_id) INNER JOIN ctl_rol AS r ON (r.id = p.rol_id) ORDER BY a.orden_acceso ASC;
		',
        $rsm
    );
    $acceso = $nq->getArrayResult();
		$i = 0;
		foreach ($acceso as $accesos) {	
			$pass = $pass.$accesos['pathAcceso'].'/';
			$roles = $em->getRepository('MaestroModeloBundle:CtlRol')->findById($accesos['id']);
			foreach ($roles as $rolt) {	
			$i++;
				if ( $rol->isGranted( $rolt->getNombreRol() ) ){
					$pass = $pass.$rolt->getNombreRol().'/';
					$url = $this->generateUrl($accesos['pathAcceso'], array());//$this->generateUrl($accesos->getPathAcceso(), UrlGeneratorInterface::ABSOLUTE_URL);
					$list = $list.'<li><a href="'.$url.'"><i class="icon-double-angle-right"></i> '.$accesos['nombreAcceso'].'</a></li>';	
				}
			}
			$i++;
			
		}
		$this->get('session')->set('numero', $i );
		if (strlen($list) > 5 ){
			$list = ''.$list.'';
		}
		
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
		return "<nodo><id>$id</id><fecha>".date("d-m-Y h:i:s A")."</fecha><msg>$new</msg></nodo>";		
	}
}
