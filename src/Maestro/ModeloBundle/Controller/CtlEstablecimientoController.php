<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlestablecimiento controller.
 *
 */
class CtlEstablecimientoController extends Controller
{
    /**
     * Lists all ctlEstablecimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlEstablecimiento')->findAll();

        return $this->render('ctlestablecimiento/index.html.twig', array(
            'ctlEstablecimientos' => $ctlEstablecimientos,
        ));
    }

    /**
     * Creates a new ctlEstablecimiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlEstablecimiento = new Ctlestablecimiento();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlEstablecimiento);
            $em->flush($ctlEstablecimiento);

            return $this->redirectToRoute('establecimiento_show', array('id' => $ctlEstablecimiento->getId()));
        }

        return $this->render('ctlestablecimiento/new.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlEstablecimiento entity.
     *
     */
    public function showAction(CtlEstablecimiento $ctlEstablecimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlEstablecimiento);

        return $this->render('ctlestablecimiento/show.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlEstablecimiento entity.
     *
     */
    public function editAction(Request $request, CtlEstablecimiento $ctlEstablecimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlEstablecimiento);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('establecimiento_edit', array('id' => $ctlEstablecimiento->getId()));
        }

        return $this->render('ctlestablecimiento/edit.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlEstablecimiento entity.
     *
     */
    public function deleteAction(Request $request, CtlEstablecimiento $ctlEstablecimiento)
    {
        $form = $this->createDeleteForm($ctlEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlEstablecimiento);
            $em->flush($ctlEstablecimiento);
        }

        return $this->redirectToRoute('establecimiento_index');
    }

    /**
     * Creates a form to delete a ctlEstablecimiento entity.
     *
     * @param CtlEstablecimiento $ctlEstablecimiento The ctlEstablecimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlEstablecimiento $ctlEstablecimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('establecimiento_delete', array('id' => $ctlEstablecimiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Agrega y asocia nuevo establecimiento.
     *
     */
    public function agregaAction(Request $request)
    {
        $ctlEstablecimiento = new Ctlestablecimiento();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlEstablecimientoEcoType', $ctlEstablecimiento);
        $form->handleRequest($request);

        return $this->render('ctlestablecimiento/agrega.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'form' => $form->createView(),
        ));
    }
}