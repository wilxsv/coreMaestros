<?php

namespace Minsal\SuministroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Minsal\SuministroBundle\Entity\MntInsumo;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class DefaultController extends Controller
{
    public function indexAction()
    {      
		$em = $this->getDoctrine()->getManager();
		
		if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
			
		}

        return $this->render('MinsalSuministroBundle:Default:index.html.twig', array('mntInsumos' => null,));
    }
    
}
