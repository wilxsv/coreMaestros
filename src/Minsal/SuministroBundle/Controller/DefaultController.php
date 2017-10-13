<?php

namespace Minsal\SuministroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Minsal\SuministroBundle\Entity\MntInsumo;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {      
		$em = $this->getDoctrine()->getManager();

        $mntInsumos = null;//$em->getRepository('MinsalSuministroBundle:MntInsumo')->findByEnableSchema(1);
        return $this->render('MinsalSuministroBundle:Default:index.html.twig', array('mntInsumos' => $mntInsumos,));
    }
    
}
