<?php

namespace Maestro\CoreBundle\Controller;

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
        return $this->render('MaestroCoreBundle:Default:feed.html.twig');
    }

    public function syslogAction()
    {
        return $this->render('MaestroCoreBundle:Default:syslog.html.twig');
    }
}
