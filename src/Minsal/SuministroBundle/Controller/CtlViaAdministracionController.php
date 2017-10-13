<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\CtlViaAdministracion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlviaadministracion controller.
 *
 */
class CtlViaAdministracionController extends Controller
{
    /**
     * Lists all ctlViaAdministracion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlViaAdministracions = $em->getRepository('MinsalSuministroBundle:CtlViaAdministracion')->findAll();

        return $this->render('ctlviaadministracion/index.html.twig', array(
            'ctlViaAdministracions' => $ctlViaAdministracions,
        ));
    }

    /**
     * Creates a new ctlViaAdministracion entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlViaAdministracion = new Ctlviaadministracion();
        $form = $this->createForm('Minsal\SuministroBundle\Form\CtlViaAdministracionType', $ctlViaAdministracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlViaAdministracion);
            $em->flush();

            return $this->redirectToRoute('viaadministracion_show', array('id' => $ctlViaAdministracion->getId()));
        }

        return $this->render('ctlviaadministracion/new.html.twig', array(
            'ctlViaAdministracion' => $ctlViaAdministracion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlViaAdministracion entity.
     *
     */
    public function showAction(CtlViaAdministracion $ctlViaAdministracion)
    {
        $deleteForm = $this->createDeleteForm($ctlViaAdministracion);

        return $this->render('ctlviaadministracion/show.html.twig', array(
            'ctlViaAdministracion' => $ctlViaAdministracion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlViaAdministracion entity.
     *
     */
    public function editAction(Request $request, CtlViaAdministracion $ctlViaAdministracion)
    {
        $deleteForm = $this->createDeleteForm($ctlViaAdministracion);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\CtlViaAdministracionType', $ctlViaAdministracion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('viaadministracion_edit', array('id' => $ctlViaAdministracion->getId()));
        }

        return $this->render('ctlviaadministracion/edit.html.twig', array(
            'ctlViaAdministracion' => $ctlViaAdministracion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlViaAdministracion entity.
     *
     */
    public function deleteAction(Request $request, CtlViaAdministracion $ctlViaAdministracion)
    {
        $form = $this->createDeleteForm($ctlViaAdministracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlViaAdministracion);
            $em->flush();
        }

        return $this->redirectToRoute('viaadministracion_index');
    }

    /**
     * Creates a form to delete a ctlViaAdministracion entity.
     *
     * @param CtlViaAdministracion $ctlViaAdministracion The ctlViaAdministracion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlViaAdministracion $ctlViaAdministracion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('viaadministracion_delete', array('id' => $ctlViaAdministracion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
