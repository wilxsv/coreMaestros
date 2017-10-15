<?php

namespace Minsal\SuministroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Minsal\SuministroBundle\Entity\MntInsumo;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class DefaultController extends Controller
{
	public $agrega = false;
	public $valida = false;
	
    public function indexAction()
    {
		$auth_checker = $this->get('security.authorization_checker');
		
		if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
			$this->setAccess($auth_checker);
		}

        return $this->render('MinsalSuministroBundle:Default:index.html.twig', array('mntInsumos' => null,'agrega' => $this->agrega,));
    }
    
    public function setAccess($rol){
		//$grupos
		$em = $this->getDoctrine()->getManager();
		$data = '0';
		
		$roles =  $em->createQueryBuilder()
			->select('g.id, g.nombreGrupo, r.nombreRol')
			->from('MinsalSuministroBundle:CtlGrupo', 'g')
			->innerJoin('g.roles','r')
			->getQuery()
			->getArrayResult();
		foreach ($roles as $rolt) {	
			if ( $rol->isGranted( $rolt["nombreRol"] ) ){
				$data .= ','.$rolt["id"];
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
		$this->get('session')->set('accion', $roles);
		$this->get('session')->set('agrega', $data);
		
	}
    
}
