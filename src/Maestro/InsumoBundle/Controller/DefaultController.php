<?php

namespace Maestro\InsumoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaestroInsumoBundle:Default:index.html.twig');
    }

    public function codificacionAction()
    {
        return $this->render('MaestroInsumoBundle:Default:codificacion.html.twig');
    }
}
