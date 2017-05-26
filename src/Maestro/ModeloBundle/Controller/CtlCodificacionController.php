<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlCodificacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlcodificacion controller.
 *
 */
class CtlCodificacionController extends Controller
{
    /**
     * Lists all ctlCodificacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlCodificacions = $em->getRepository('MaestroModeloBundle:CtlCodificacion')->findAll();

        return $this->render('ctlcodificacion/index.html.twig', array(
            'ctlCodificacions' => $ctlCodificacions,
        ));
    }

    /**
     * Creates a new ctlCodificacion entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlCodificacion = new Ctlcodificacion();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlCodificacionType', $ctlCodificacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlCodificacion);
            $em->flush($ctlCodificacion);

            return $this->redirectToRoute('codificacion_show', array('id' => $ctlCodificacion->getId()));
        }

        return $this->render('ctlcodificacion/new.html.twig', array(
            'ctlCodificacion' => $ctlCodificacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlCodificacion entity.
     *
     */
    public function showAction(CtlCodificacion $ctlCodificacion)
    {
        $deleteForm = $this->createDeleteForm($ctlCodificacion);

        return $this->render('ctlcodificacion/show.html.twig', array(
            'ctlCodificacion' => $ctlCodificacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlCodificacion entity.
     *
     */
    public function editAction(Request $request, CtlCodificacion $ctlCodificacion)
    {
        $deleteForm = $this->createDeleteForm($ctlCodificacion);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlCodificacionType', $ctlCodificacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('codificacion_edit', array('id' => $ctlCodificacion->getId()));
        }

        return $this->render('ctlcodificacion/edit.html.twig', array(
            'ctlCodificacion' => $ctlCodificacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlCodificacion entity.
     *
     */
    public function deleteAction(Request $request, CtlCodificacion $ctlCodificacion)
    {
        $form = $this->createDeleteForm($ctlCodificacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlCodificacion);
            $em->flush($ctlCodificacion);
        }

        return $this->redirectToRoute('codificacion_index');
    }

    /**
     * Creates a form to delete a ctlCodificacion entity.
     *
     * @param CtlCodificacion $ctlCodificacion The ctlCodificacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlCodificacion $ctlCodificacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('codificacion_delete', array('id' => $ctlCodificacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
