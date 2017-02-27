<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlTipoEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctltipoestablecimiento controller.
 *
 */
class CtlTipoEstablecimientoController extends Controller
{
    /**
     * Lists all ctlTipoEstablecimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlTipoEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlTipoEstablecimiento')->findAll();

        return $this->render('ctltipoestablecimiento/index.html.twig', array(
            'ctlTipoEstablecimientos' => $ctlTipoEstablecimientos,
        ));
    }

    /**
     * Creates a new ctlTipoEstablecimiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlTipoEstablecimiento = new Ctltipoestablecimiento();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlTipoEstablecimientoType', $ctlTipoEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlTipoEstablecimiento);
            $em->flush($ctlTipoEstablecimiento);

            return $this->redirectToRoute('tipoestablecimiento_show', array('id' => $ctlTipoEstablecimiento->getId()));
        }

        return $this->render('ctltipoestablecimiento/new.html.twig', array(
            'ctlTipoEstablecimiento' => $ctlTipoEstablecimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlTipoEstablecimiento entity.
     *
     */
    public function showAction(CtlTipoEstablecimiento $ctlTipoEstablecimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlTipoEstablecimiento);

        return $this->render('ctltipoestablecimiento/show.html.twig', array(
            'ctlTipoEstablecimiento' => $ctlTipoEstablecimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlTipoEstablecimiento entity.
     *
     */
    public function editAction(Request $request, CtlTipoEstablecimiento $ctlTipoEstablecimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlTipoEstablecimiento);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlTipoEstablecimientoType', $ctlTipoEstablecimiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipoestablecimiento_edit', array('id' => $ctlTipoEstablecimiento->getId()));
        }

        return $this->render('ctltipoestablecimiento/edit.html.twig', array(
            'ctlTipoEstablecimiento' => $ctlTipoEstablecimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlTipoEstablecimiento entity.
     *
     */
    public function deleteAction(Request $request, CtlTipoEstablecimiento $ctlTipoEstablecimiento)
    {
        $form = $this->createDeleteForm($ctlTipoEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlTipoEstablecimiento);
            $em->flush($ctlTipoEstablecimiento);
        }

        return $this->redirectToRoute('tipoestablecimiento_index');
    }

    /**
     * Creates a form to delete a ctlTipoEstablecimiento entity.
     *
     * @param CtlTipoEstablecimiento $ctlTipoEstablecimiento The ctlTipoEstablecimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlTipoEstablecimiento $ctlTipoEstablecimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoestablecimiento_delete', array('id' => $ctlTipoEstablecimiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
