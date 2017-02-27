<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlDependenciaEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctldependenciaestablecimiento controller.
 *
 */
class CtlDependenciaEstablecimientoController extends Controller
{
    /**
     * Lists all ctlDependenciaEstablecimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlDependenciaEstablecimientos = $em->getRepository('MaestroModeloBundle:CtlDependenciaEstablecimiento')->findAll();

        return $this->render('ctldependenciaestablecimiento/index.html.twig', array(
            'ctlDependenciaEstablecimientos' => $ctlDependenciaEstablecimientos,
        ));
    }

    /**
     * Creates a new ctlDependenciaEstablecimiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlDependenciaEstablecimiento = new Ctldependenciaestablecimiento();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlDependenciaEstablecimientoType', $ctlDependenciaEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlDependenciaEstablecimiento);
            $em->flush($ctlDependenciaEstablecimiento);

            return $this->redirectToRoute('dependencia_show', array('id' => $ctlDependenciaEstablecimiento->getId()));
        }

        return $this->render('ctldependenciaestablecimiento/new.html.twig', array(
            'ctlDependenciaEstablecimiento' => $ctlDependenciaEstablecimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlDependenciaEstablecimiento entity.
     *
     */
    public function showAction(CtlDependenciaEstablecimiento $ctlDependenciaEstablecimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlDependenciaEstablecimiento);

        return $this->render('ctldependenciaestablecimiento/show.html.twig', array(
            'ctlDependenciaEstablecimiento' => $ctlDependenciaEstablecimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlDependenciaEstablecimiento entity.
     *
     */
    public function editAction(Request $request, CtlDependenciaEstablecimiento $ctlDependenciaEstablecimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlDependenciaEstablecimiento);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlDependenciaEstablecimientoType', $ctlDependenciaEstablecimiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dependencia_edit', array('id' => $ctlDependenciaEstablecimiento->getId()));
        }

        return $this->render('ctldependenciaestablecimiento/edit.html.twig', array(
            'ctlDependenciaEstablecimiento' => $ctlDependenciaEstablecimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlDependenciaEstablecimiento entity.
     *
     */
    public function deleteAction(Request $request, CtlDependenciaEstablecimiento $ctlDependenciaEstablecimiento)
    {
        $form = $this->createDeleteForm($ctlDependenciaEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlDependenciaEstablecimiento);
            $em->flush($ctlDependenciaEstablecimiento);
        }

        return $this->redirectToRoute('dependencia_index');
    }

    /**
     * Creates a form to delete a ctlDependenciaEstablecimiento entity.
     *
     * @param CtlDependenciaEstablecimiento $ctlDependenciaEstablecimiento The ctlDependenciaEstablecimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlDependenciaEstablecimiento $ctlDependenciaEstablecimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dependencia_delete', array('id' => $ctlDependenciaEstablecimiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
