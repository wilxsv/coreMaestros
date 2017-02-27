<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\Syslog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Syslog controller.
 *
 */
class SyslogController extends Controller
{
    /**
     * Lists all syslog entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $syslogs = $em->getRepository('MaestroModeloBundle:Syslog')->findAll();

        return $this->render('syslog/index.html.twig', array(
            'syslogs' => $syslogs,
        ));
    }

    /**
     * Finds and displays a syslog entity.
     *
     */
    public function showAction(Syslog $syslog)
    {

        return $this->render('syslog/show.html.twig', array(
            'syslog' => $syslog,
        ));
    }
}
