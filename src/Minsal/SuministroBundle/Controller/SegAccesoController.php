<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\SegAcceso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Segacceso controller.
 *
 */
class SegAccesoController extends Controller
{
    /**
     * Lists all segAcceso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $segAccesos = $em->getRepository('MinsalSuministroBundle:SegAcceso')->findAll();

        return $this->render('segacceso/index.html.twig', array(
            'segAccesos' => $segAccesos,
        ));
    }

    /**
     * Creates a new segAcceso entity.
     *
     */
    public function newAction(Request $request)
    {
        $segAcceso = new Segacceso();
        $form = $this->createForm('Minsal\SuministroBundle\Form\SegAccesoType', $segAcceso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($segAcceso);
            $em->flush();

            return $this->redirectToRoute('admin_accesos_show', array('id' => $segAcceso->getId()));
        }

        return $this->render('segacceso/new.html.twig', array(
            'segAcceso' => $segAcceso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a segAcceso entity.
     *
     */
    public function showAction(SegAcceso $segAcceso)
    {
        $deleteForm = $this->createDeleteForm($segAcceso);

        return $this->render('segacceso/show.html.twig', array(
            'segAcceso' => $segAcceso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing segAcceso entity.
     *
     */
    public function editAction(Request $request, SegAcceso $segAcceso)
    {
        $deleteForm = $this->createDeleteForm($segAcceso);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\SegAccesoType', $segAcceso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_accesos_edit', array('id' => $segAcceso->getId()));
        }

        return $this->render('segacceso/edit.html.twig', array(
            'segAcceso' => $segAcceso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a segAcceso entity.
     *
     */
    public function deleteAction(Request $request, SegAcceso $segAcceso)
    {
        $form = $this->createDeleteForm($segAcceso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($segAcceso);
            $em->flush();
        }

        return $this->redirectToRoute('admin_accesos_index');
    }

    /**
     * Creates a form to delete a segAcceso entity.
     *
     * @param SegAcceso $segAcceso The segAcceso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SegAcceso $segAcceso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_accesos_delete', array('id' => $segAcceso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
