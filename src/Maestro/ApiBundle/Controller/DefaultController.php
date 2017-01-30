<?php

namespace Maestro\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaestroApiBundle:Default:index.html.twig');
    }
}
