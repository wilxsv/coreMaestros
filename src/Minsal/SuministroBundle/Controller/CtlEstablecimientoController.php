<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\CtlEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctlestablecimiento controller.
 *
 */
class CtlEstablecimientoController extends Controller
{
    /**
     * Lists all ctlEstablecimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlEstablecimientos = $em->getRepository('MinsalSuministroBundle:CtlEstablecimiento')->findAll();

        return $this->render('ctlestablecimiento/index.html.twig', array(
            'ctlEstablecimientos' => $ctlEstablecimientos,
        ));
    }

    /**
     * Finds and displays a ctlEstablecimiento entity.
     *
     */
    public function showAction(CtlEstablecimiento $ctlEstablecimiento)
    {

        return $this->render('ctlestablecimiento/show.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
        ));
    }
}
