<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\CtlUnidadDespacho;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlunidaddespacho controller.
 *
 */
class CtlUnidadDespachoController extends Controller
{
    /**
     * Lists all ctlUnidadDespacho entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlUnidadDespachos = $em->getRepository('MinsalSuministroBundle:CtlUnidadDespacho')->findAll();

        return $this->render('ctlunidaddespacho/index.html.twig', array(
            'ctlUnidadDespachos' => $ctlUnidadDespachos,
        ));
    }

    /**
     * Creates a new ctlUnidadDespacho entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlUnidadDespacho = new Ctlunidaddespacho();
        $form = $this->createForm('Minsal\SuministroBundle\Form\CtlUnidadDespachoType', $ctlUnidadDespacho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlUnidadDespacho);
            $em->flush();

            return $this->redirectToRoute('unidaddespacho_show', array('id' => $ctlUnidadDespacho->getId()));
        }

        return $this->render('ctlunidaddespacho/new.html.twig', array(
            'ctlUnidadDespacho' => $ctlUnidadDespacho,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlUnidadDespacho entity.
     *
     */
    public function showAction(CtlUnidadDespacho $ctlUnidadDespacho)
    {
        $deleteForm = $this->createDeleteForm($ctlUnidadDespacho);

        return $this->render('ctlunidaddespacho/show.html.twig', array(
            'ctlUnidadDespacho' => $ctlUnidadDespacho,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlUnidadDespacho entity.
     *
     */
    public function editAction(Request $request, CtlUnidadDespacho $ctlUnidadDespacho)
    {
        $deleteForm = $this->createDeleteForm($ctlUnidadDespacho);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\CtlUnidadDespachoType', $ctlUnidadDespacho);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('unidaddespacho_edit', array('id' => $ctlUnidadDespacho->getId()));
        }

        return $this->render('ctlunidaddespacho/edit.html.twig', array(
            'ctlUnidadDespacho' => $ctlUnidadDespacho,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlUnidadDespacho entity.
     *
     */
    public function deleteAction(Request $request, CtlUnidadDespacho $ctlUnidadDespacho)
    {
        $form = $this->createDeleteForm($ctlUnidadDespacho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlUnidadDespacho);
            $em->flush();
        }

        return $this->redirectToRoute('unidaddespacho_index');
    }

    /**
     * Creates a form to delete a ctlUnidadDespacho entity.
     *
     * @param CtlUnidadDespacho $ctlUnidadDespacho The ctlUnidadDespacho entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlUnidadDespacho $ctlUnidadDespacho)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unidaddespacho_delete', array('id' => $ctlUnidadDespacho->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
