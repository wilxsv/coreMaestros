<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlPresentacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlpresentacion controller.
 *
 */
class CtlPresentacionController extends Controller
{
    /**
     * Lists all ctlPresentacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlPresentacions = $em->getRepository('MaestroModeloBundle:CtlPresentacion')->findAll();

        return $this->render('ctlpresentacion/index.html.twig', array(
            'ctlPresentacions' => $ctlPresentacions,
        ));
    }

    /**
     * Creates a new ctlPresentacion entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlPresentacion = new Ctlpresentacion();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlPresentacionType', $ctlPresentacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlPresentacion);
            $em->flush($ctlPresentacion);

            return $this->redirectToRoute('presentacion_show', array('id' => $ctlPresentacion->getId()));
        }

        return $this->render('ctlpresentacion/new.html.twig', array(
            'ctlPresentacion' => $ctlPresentacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlPresentacion entity.
     *
     */
    public function showAction(CtlPresentacion $ctlPresentacion)
    {
        $deleteForm = $this->createDeleteForm($ctlPresentacion);

        return $this->render('ctlpresentacion/show.html.twig', array(
            'ctlPresentacion' => $ctlPresentacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlPresentacion entity.
     *
     */
    public function editAction(Request $request, CtlPresentacion $ctlPresentacion)
    {
        $deleteForm = $this->createDeleteForm($ctlPresentacion);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlPresentacionType', $ctlPresentacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('presentacion_edit', array('id' => $ctlPresentacion->getId()));
        }

        return $this->render('ctlpresentacion/edit.html.twig', array(
            'ctlPresentacion' => $ctlPresentacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlPresentacion entity.
     *
     */
    public function deleteAction(Request $request, CtlPresentacion $ctlPresentacion)
    {
        $form = $this->createDeleteForm($ctlPresentacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlPresentacion);
            $em->flush($ctlPresentacion);
        }

        return $this->redirectToRoute('presentacion_index');
    }

    /**
     * Creates a form to delete a ctlPresentacion entity.
     *
     * @param CtlPresentacion $ctlPresentacion The ctlPresentacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlPresentacion $ctlPresentacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('presentacion_delete', array('id' => $ctlPresentacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
