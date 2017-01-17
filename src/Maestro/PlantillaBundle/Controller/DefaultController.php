<?php

namespace Maestro\PlantillaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaestroPlantillaBundle:Default:index.html.twig');
    }
}
