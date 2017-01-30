<?php

namespace Maestro\ModeloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaestroModeloBundle:Default:index.html.twig');
    }
}
