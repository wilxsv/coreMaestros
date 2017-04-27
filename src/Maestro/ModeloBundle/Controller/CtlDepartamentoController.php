<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlDepartamento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctldepartamento controller.
 *
 */
class CtlDepartamentoController extends Controller
{
    /**
     * Lists all ctlDepartamento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlDepartamentos = $em->getRepository('MaestroModeloBundle:CtlDepartamento')->findAll();

        return $this->render('ctldepartamento/index.html.twig', array(
            'ctlDepartamentos' => $ctlDepartamentos,
        ));
    }

    /**
     * Finds and displays a ctlDepartamento entity.
     *
     */
    public function showAction(CtlDepartamento $ctlDepartamento)
    {

        return $this->render('ctldepartamento/show.html.twig', array(
            'ctlDepartamento' => $ctlDepartamento,
        ));
    }
}
