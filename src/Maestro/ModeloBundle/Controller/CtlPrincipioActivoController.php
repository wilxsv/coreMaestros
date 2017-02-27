<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlPrincipioActivo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlprincipioactivo controller.
 *
 */
class CtlPrincipioActivoController extends Controller
{
    /**
     * Lists all ctlPrincipioActivo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlPrincipioActivos = $em->getRepository('MaestroModeloBundle:CtlPrincipioActivo')->findAll();

        return $this->render('ctlprincipioactivo/index.html.twig', array(
            'ctlPrincipioActivos' => $ctlPrincipioActivos,
        ));
    }

    /**
     * Creates a new ctlPrincipioActivo entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlPrincipioActivo = new Ctlprincipioactivo();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlPrincipioActivoType', $ctlPrincipioActivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlPrincipioActivo);
            $em->flush($ctlPrincipioActivo);

            return $this->redirectToRoute('principio_activo_show', array('id' => $ctlPrincipioActivo->getId()));
        }

        return $this->render('ctlprincipioactivo/new.html.twig', array(
            'ctlPrincipioActivo' => $ctlPrincipioActivo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlPrincipioActivo entity.
     *
     */
    public function showAction(CtlPrincipioActivo $ctlPrincipioActivo)
    {
        $deleteForm = $this->createDeleteForm($ctlPrincipioActivo);

        return $this->render('ctlprincipioactivo/show.html.twig', array(
            'ctlPrincipioActivo' => $ctlPrincipioActivo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlPrincipioActivo entity.
     *
     */
    public function editAction(Request $request, CtlPrincipioActivo $ctlPrincipioActivo)
    {
        $deleteForm = $this->createDeleteForm($ctlPrincipioActivo);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlPrincipioActivoType', $ctlPrincipioActivo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('principio_activo_edit', array('id' => $ctlPrincipioActivo->getId()));
        }

        return $this->render('ctlprincipioactivo/edit.html.twig', array(
            'ctlPrincipioActivo' => $ctlPrincipioActivo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlPrincipioActivo entity.
     *
     */
    public function deleteAction(Request $request, CtlPrincipioActivo $ctlPrincipioActivo)
    {
        $form = $this->createDeleteForm($ctlPrincipioActivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlPrincipioActivo);
            $em->flush($ctlPrincipioActivo);
        }

        return $this->redirectToRoute('principio_activo_index');
    }

    /**
     * Creates a form to delete a ctlPrincipioActivo entity.
     *
     * @param CtlPrincipioActivo $ctlPrincipioActivo The ctlPrincipioActivo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlPrincipioActivo $ctlPrincipioActivo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('principio_activo_delete', array('id' => $ctlPrincipioActivo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
