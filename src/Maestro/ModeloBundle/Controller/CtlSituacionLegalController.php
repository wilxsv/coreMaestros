<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlSituacionLegal;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlsituacionlegal controller.
 *
 */
class CtlSituacionLegalController extends Controller
{
    /**
     * Lists all ctlSituacionLegal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlSituacionLegals = $em->getRepository('MaestroModeloBundle:CtlSituacionLegal')->findAll();

        return $this->render('ctlsituacionlegal/index.html.twig', array(
            'ctlSituacionLegals' => $ctlSituacionLegals,
        ));
    }

    /**
     * Creates a new ctlSituacionLegal entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlSituacionLegal = new Ctlsituacionlegal();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlSituacionLegalType', $ctlSituacionLegal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlSituacionLegal);
            $em->flush($ctlSituacionLegal);
            $request->getSession()->getFlashBag()->add('success', 'Situacion Legal creada');

            return $this->redirectToRoute('situacionlegal_show', array('id' => $ctlSituacionLegal->getId()));
        }

        return $this->render('ctlsituacionlegal/new.html.twig', array(
            'ctlSituacionLegal' => $ctlSituacionLegal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlSituacionLegal entity.
     *
     */
    public function showAction(CtlSituacionLegal $ctlSituacionLegal)
    {
        $deleteForm = $this->createDeleteForm($ctlSituacionLegal);

        return $this->render('ctlsituacionlegal/show.html.twig', array(
            'ctlSituacionLegal' => $ctlSituacionLegal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlSituacionLegal entity.
     *
     */
    public function editAction(Request $request, CtlSituacionLegal $ctlSituacionLegal)
    {
        $deleteForm = $this->createDeleteForm($ctlSituacionLegal);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlSituacionLegalType', $ctlSituacionLegal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $request->getSession()->getFlashBag()->add('success', 'Situacion Legal actualizada');

            return $this->redirectToRoute('situacionlegal_edit', array('id' => $ctlSituacionLegal->getId()));
        }

        return $this->render('ctlsituacionlegal/edit.html.twig', array(
            'ctlSituacionLegal' => $ctlSituacionLegal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlSituacionLegal entity.
     *
     */
    public function deleteAction(Request $request, CtlSituacionLegal $ctlSituacionLegal)
    {
        $form = $this->createDeleteForm($ctlSituacionLegal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlSituacionLegal);
            $em->flush($ctlSituacionLegal);
            $request->getSession()->getFlashBag()->add('error', 'Situacion Legal eliminada');
        }

        return $this->redirectToRoute('situacionlegal_index');
    }

    /**
     * Creates a form to delete a ctlSituacionLegal entity.
     *
     * @param CtlSituacionLegal $ctlSituacionLegal The ctlSituacionLegal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlSituacionLegal $ctlSituacionLegal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('situacionlegal_delete', array('id' => $ctlSituacionLegal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
