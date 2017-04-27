<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlMunicipio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctlmunicipio controller.
 *
 */
class CtlMunicipioController extends Controller
{
    /**
     * Lists all ctlMunicipio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlMunicipios = $em->getRepository('MaestroModeloBundle:CtlMunicipio')->findAll();

        return $this->render('ctlmunicipio/index.html.twig', array(
            'ctlMunicipios' => $ctlMunicipios,
        ));
    }

    /**
     * Finds and displays a ctlMunicipio entity.
     *
     */
    public function showAction(CtlMunicipio $ctlMunicipio)
    {

        return $this->render('ctlmunicipio/show.html.twig', array(
            'ctlMunicipio' => $ctlMunicipio,
        ));
    }
}
