<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Fosuser controller.
 *
 */
class FosUserController extends Controller
{
    /**
     * Lists all fosUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fosUsers = $em->getRepository('MaestroModeloBundle:FosUser')->findAll();

        return $this->render('fosuser/index.html.twig', array(
            'fosUsers' => $fosUsers,
        ));
    }

    /**
     * Finds and displays a fosUser entity.
     *
     */
    public function showAction(FosUser $fosUser)
    {

        return $this->render('fosuser/show.html.twig', array(
            'fosUser' => $fosUser,
        ));
    }
}
