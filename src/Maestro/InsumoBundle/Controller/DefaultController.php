<?php

namespace Maestro\InsumoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaestroInsumoBundle:Default:index.html.twig');
    }
}
