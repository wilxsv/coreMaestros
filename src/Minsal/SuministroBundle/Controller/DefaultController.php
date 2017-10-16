<?php

namespace Minsal\SuministroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Minsal\SuministroBundle\Entity\MntInsumo;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class DefaultController extends Controller
{
	public $agrega = false;
	public $valida = false;
	
    public function indexAction()
    {
		$agrega = null;
		$valida = null;
		$habilita = null;
		$denegados = null;
		$auth_checker = $this->get('security.authorization_checker');
		
		if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
			$this->setAccess($auth_checker);
			$repository = $this->getDoctrine()->getRepository('MinsalSuministroBundle:MntInsumo');
			$query = $repository->createQueryBuilder('i')->where('i.estadoSchema = -1 OR i.enableSchema = -1')->addOrderBy('i.registroSchema', 'ASC')->getQuery();
			$denegados = $query->getResult();
			if ($this->agrega or $this->valida){
				$query = $repository->createQueryBuilder('i')->where('i.estadoSchema = 0 AND i.enableSchema = 0')->addOrderBy('i.registroSchema', 'ASC')->getQuery();
				$agrega = $query->getResult();				
			}
			if ($auth_checker->isGranted('ROLE_UNABAST') or $this->valida){
				$query = $repository->createQueryBuilder('i')->where('i.estadoSchema = 1 AND i.enableSchema = 0')->addOrderBy('i.registroSchema', 'ASC')->getQuery();
				$habilita = $query->getResult();
			}
		}
		return $this->render('MinsalSuministroBundle:Default:index.html.twig', array('agregados' => $agrega, 'valida' => $valida, 'habilitados' => $habilita, 'denegados' => $denegados));
    }
    
    public function setAccess($rol){
		//$grupos
		$em = $this->getDoctrine()->getManager();
		$data = '0';
		$menu = '';
		$val = '0';
		
		$roles =  $em->createQueryBuilder()->select('g.id, r.nombreRol')->from('MinsalSuministroBundle:CtlGrupo', 'g')->innerJoin('g.roles','r')->getQuery()->getArrayResult();
		$valid =  $em->createQueryBuilder()->select('s.id, r.nombreRol')->from('MinsalSuministroBundle:CtlSuministro', 's')->innerJoin('s.rolValidaSuministro','r')->getQuery()->getArrayResult();
		$menus =  $em->createQueryBuilder()->select('a.nombreAcceso, a.pathAcceso, r.nombreRol')->from('MinsalSuministroBundle:SegAcceso', 'a')
		->innerJoin('a.role','r')->getQuery()->getArrayResult();
		foreach ($roles as $rolt) {	
			if ( $rol->isGranted( $rolt["nombreRol"] ) ){
				$data .= ','.$rolt["id"];
				$this->agrega = true;
				/*
				$data['accion'] = 'valida';
				$this->get('session')->set('accionvalida', TRUE );
				$this->get('session')->set('validasuministro', $rolt["nombreSuministro"] );
				$data['suministro'] = $rolt["nombreSuministro"];
				$this->get('session')->set('accion', 'valida');
				$this->get('session')->set('suministro', $rolt["nombreSuministro"]);
				$lista .= $rolt["id"].",";*/
			}
		}
		foreach ($valid as $rolt) {	
			if ( $rol->isGranted( $rolt["nombreRol"] ) ){
				$val .= ','.$rolt["id"];
				$this->valida = true;
			}
		}
		foreach ($menus as $m) {	
			if ( $rol->isGranted( $m["nombreRol"] ) ){
				$url = $this->generateUrl($m['pathAcceso'], array());
				$menu .= '<li><a href="'.$url.'" class="waves-effect"><i class="mdi " ></i><span class="hide-menu">'.$m["nombreAcceso"].'</span></a></li>';
			}
		}
		$this->get('session')->set('valida', $val);
		$this->get('session')->set('agrega', $data);
		$this->get('session')->set('menu', $menu);
		
	}
    
}
