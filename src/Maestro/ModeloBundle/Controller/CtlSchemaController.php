<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlSchema;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctlschema controller.
 *
 */
class CtlSchemaController extends Controller
{
    /**
     * Lists all ctlSchema entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlSchemas = $em->getRepository('MaestroModeloBundle:CtlSchema')->findAll();

        return $this->render('ctlschema/index.html.twig', array(
            'ctlSchemas' => $ctlSchemas,
        ));
    }

    /**
     * Finds and displays a ctlSchema entity.
     *
     */
    public function showAction(CtlSchema $ctlSchema)
    {

        return $this->render('ctlschema/show.html.twig', array(
            'ctlSchema' => $ctlSchema,
        ));
    }
}
