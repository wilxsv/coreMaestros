<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlConcentracion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlconcentracion controller.
 *
 */
class CtlConcentracionController extends Controller
{
    /**
     * Lists all ctlConcentracion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlConcentracions = $em->getRepository('MaestroModeloBundle:CtlConcentracion')->findAll();

        return $this->render('ctlconcentracion/index.html.twig', array(
            'ctlConcentracions' => $ctlConcentracions,
        ));
    }

    /**
     * Creates a new ctlConcentracion entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlConcentracion = new Ctlconcentracion();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlConcentracionType', $ctlConcentracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlConcentracion);
            $em->flush($ctlConcentracion);

            return $this->redirectToRoute('concentracion_show', array('id' => $ctlConcentracion->getId()));
        }

        return $this->render('ctlconcentracion/new.html.twig', array(
            'ctlConcentracion' => $ctlConcentracion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlConcentracion entity.
     *
     */
    public function showAction(CtlConcentracion $ctlConcentracion)
    {
        $deleteForm = $this->createDeleteForm($ctlConcentracion);

        return $this->render('ctlconcentracion/show.html.twig', array(
            'ctlConcentracion' => $ctlConcentracion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlConcentracion entity.
     *
     */
    public function editAction(Request $request, CtlConcentracion $ctlConcentracion)
    {
        $deleteForm = $this->createDeleteForm($ctlConcentracion);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlConcentracionType', $ctlConcentracion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('concentracion_edit', array('id' => $ctlConcentracion->getId()));
        }

        return $this->render('ctlconcentracion/edit.html.twig', array(
            'ctlConcentracion' => $ctlConcentracion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlConcentracion entity.
     *
     */
    public function deleteAction(Request $request, CtlConcentracion $ctlConcentracion)
    {
        $form = $this->createDeleteForm($ctlConcentracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlConcentracion);
            $em->flush($ctlConcentracion);
        }

        return $this->redirectToRoute('concentracion_index');
    }

    /**
     * Creates a form to delete a ctlConcentracion entity.
     *
     * @param CtlConcentracion $ctlConcentracion The ctlConcentracion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlConcentracion $ctlConcentracion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('concentracion_delete', array('id' => $ctlConcentracion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
