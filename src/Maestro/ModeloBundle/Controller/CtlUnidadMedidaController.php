<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlUnidadMedida;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlunidadmedida controller.
 *
 */
class CtlUnidadMedidaController extends Controller
{
    /**
     * Lists all ctlUnidadMedida entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlUnidadMedidas = $em->getRepository('MaestroModeloBundle:CtlUnidadMedida')->findAll();

        return $this->render('ctlunidadmedida/index.html.twig', array(
            'ctlUnidadMedidas' => $ctlUnidadMedidas,
        ));
    }

    /**
     * Creates a new ctlUnidadMedida entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlUnidadMedida = new Ctlunidadmedida();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlUnidadMedidaType', $ctlUnidadMedida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlUnidadMedida);
            $em->flush($ctlUnidadMedida);

            return $this->redirectToRoute('unidad_medida_show', array('id' => $ctlUnidadMedida->getId()));
        }

        return $this->render('ctlunidadmedida/new.html.twig', array(
            'ctlUnidadMedida' => $ctlUnidadMedida,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlUnidadMedida entity.
     *
     */
    public function showAction(CtlUnidadMedida $ctlUnidadMedida)
    {
        $deleteForm = $this->createDeleteForm($ctlUnidadMedida);

        return $this->render('ctlunidadmedida/show.html.twig', array(
            'ctlUnidadMedida' => $ctlUnidadMedida,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlUnidadMedida entity.
     *
     */
    public function editAction(Request $request, CtlUnidadMedida $ctlUnidadMedida)
    {
        $deleteForm = $this->createDeleteForm($ctlUnidadMedida);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlUnidadMedidaType', $ctlUnidadMedida);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('unidad_medida_edit', array('id' => $ctlUnidadMedida->getId()));
        }

        return $this->render('ctlunidadmedida/edit.html.twig', array(
            'ctlUnidadMedida' => $ctlUnidadMedida,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlUnidadMedida entity.
     *
     */
    public function deleteAction(Request $request, CtlUnidadMedida $ctlUnidadMedida)
    {
        $form = $this->createDeleteForm($ctlUnidadMedida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlUnidadMedida);
            $em->flush($ctlUnidadMedida);
        }

        return $this->redirectToRoute('unidad_medida_index');
    }

    /**
     * Creates a form to delete a ctlUnidadMedida entity.
     *
     * @param CtlUnidadMedida $ctlUnidadMedida The ctlUnidadMedida entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlUnidadMedida $ctlUnidadMedida)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unidad_medida_delete', array('id' => $ctlUnidadMedida->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
