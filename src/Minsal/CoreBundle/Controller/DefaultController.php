<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MinsalCoreBundle:Default:index.html.twig');
    }
    
    public function feedAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('MinsalSuministroBundle:MntSchema');
		$query = $repository->createQueryBuilder('p')->where('p.id > 1')->addOrderBy('p.id', 'DESC')->getQuery();
		$ctlSchemas = $query->getResult();
		
        return $this->render('MinsalCoreBundle:Default:feed.html.twig', array('ctlSchemas' => $ctlSchemas));
    }
}
