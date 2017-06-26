<?php

namespace Maestro\CoreBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlSchema;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaestroCoreBundle:Default:index.html.twig');
    }

    public function ayudaAction()
    {
        return $this->render('MaestroCoreBundle:Default:ayuda.html.twig');
    }

    public function schemaAction()
    {
        return $this->render('MaestroCoreBundle:Default:schema.html.twig');
    }

    public function feedAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlSchema');
		$query = $repository->createQueryBuilder('p')->where('p.id > 1')->addOrderBy('p.id', 'DESC')->getQuery();
		$ctlSchemas = $query->getResult();
		
        return $this->render('MaestroCoreBundle:Default:feed.html.twig', array('ctlSchemas' => $ctlSchemas));
    }

    public function syslogAction()
    {
        return $this->render('MaestroCoreBundle:Default:syslog.html.twig');
    }
}
