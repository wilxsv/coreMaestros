<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlPrestacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlprestacion controller.
 *
 */
class CtlPrestacionController extends Controller
{
    /**
     * Lists all ctlPrestacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlPrestacions = $em->getRepository('MaestroModeloBundle:CtlPrestacion')->findAll();

        return $this->render('ctlprestacion/index.html.twig', array(
            'ctlPrestacions' => $ctlPrestacions,
        ));
    }

    /**
     * Creates a new ctlPrestacion entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlPrestacion = new Ctlprestacion();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlPrestacionType', $ctlPrestacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlPrestacion);
            $em->flush($ctlPrestacion);
            $request->getSession()->getFlashBag()->add('success', 'Prestación creada');

            return $this->redirectToRoute('prestacion_show', array('id' => $ctlPrestacion->getId()));
        }

        return $this->render('ctlprestacion/new.html.twig', array(
            'ctlPrestacion' => $ctlPrestacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlPrestacion entity.
     *
     */
    public function showAction(CtlPrestacion $ctlPrestacion)
    {
        $deleteForm = $this->createDeleteForm($ctlPrestacion);

        return $this->render('ctlprestacion/show.html.twig', array(
            'ctlPrestacion' => $ctlPrestacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlPrestacion entity.
     *
     */
    public function editAction(Request $request, CtlPrestacion $ctlPrestacion)
    {
        $deleteForm = $this->createDeleteForm($ctlPrestacion);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlPrestacionType', $ctlPrestacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $request->getSession()->getFlashBag()->add('success', 'Prestacion Actualizada');

            return $this->redirectToRoute('prestacion_edit', array('id' => $ctlPrestacion->getId()));
        }

        return $this->render('ctlprestacion/edit.html.twig', array(
            'ctlPrestacion' => $ctlPrestacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlPrestacion entity.
     *
     */
    public function deleteAction(Request $request, CtlPrestacion $ctlPrestacion)
    {
        $form = $this->createDeleteForm($ctlPrestacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlPrestacion);
            $em->flush($ctlPrestacion);
            $request->getSession()->getFlashBag()->add('error', 'Prestacion eliminada');
        }

        return $this->redirectToRoute('prestacion_index');
    }

    /**
     * Creates a form to delete a ctlPrestacion entity.
     *
     * @param CtlPrestacion $ctlPrestacion The ctlPrestacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlPrestacion $ctlPrestacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prestacion_delete', array('id' => $ctlPrestacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
