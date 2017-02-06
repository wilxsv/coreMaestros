<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlLog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctllog controller.
 *
 */
class CtlLogController extends Controller
{
    /**
     * Lists all ctlLog entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlLogs = $em->getRepository('MaestroModeloBundle:CtlLog')->findAll();

        return $this->render('ctllog/index.html.twig', array(
            'ctlLogs' => $ctlLogs,
        ));
    }

    /**
     * Finds and displays a ctlLog entity.
     *
     */
    public function showAction(CtlLog $ctlLog)
    {

        return $this->render('ctllog/show.html.twig', array(
            'ctlLog' => $ctlLog,
        ));
    }
}
