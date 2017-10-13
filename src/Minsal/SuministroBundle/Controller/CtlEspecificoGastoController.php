<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\CtlEspecificoGasto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlespecificogasto controller.
 *
 */
class CtlEspecificoGastoController extends Controller
{
    /**
     * Lists all ctlEspecificoGasto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlEspecificoGastos = $em->getRepository('MinsalSuministroBundle:CtlEspecificoGasto')->findAll();

        return $this->render('ctlespecificogasto/index.html.twig', array(
            'ctlEspecificoGastos' => $ctlEspecificoGastos,
        ));
    }

    /**
     * Creates a new ctlEspecificoGasto entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlEspecificoGasto = new Ctlespecificogasto();
        $form = $this->createForm('Minsal\SuministroBundle\Form\CtlEspecificoGastoType', $ctlEspecificoGasto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlEspecificoGasto);
            $em->flush();

            return $this->redirectToRoute('uaci_especficogasto_show', array('id' => $ctlEspecificoGasto->getId()));
        }

        return $this->render('ctlespecificogasto/new.html.twig', array(
            'ctlEspecificoGasto' => $ctlEspecificoGasto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlEspecificoGasto entity.
     *
     */
    public function showAction(CtlEspecificoGasto $ctlEspecificoGasto)
    {
        $deleteForm = $this->createDeleteForm($ctlEspecificoGasto);

        return $this->render('ctlespecificogasto/show.html.twig', array(
            'ctlEspecificoGasto' => $ctlEspecificoGasto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlEspecificoGasto entity.
     *
     */
    public function editAction(Request $request, CtlEspecificoGasto $ctlEspecificoGasto)
    {
        $deleteForm = $this->createDeleteForm($ctlEspecificoGasto);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\CtlEspecificoGastoType', $ctlEspecificoGasto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('uaci_especficogasto_edit', array('id' => $ctlEspecificoGasto->getId()));
        }

        return $this->render('ctlespecificogasto/edit.html.twig', array(
            'ctlEspecificoGasto' => $ctlEspecificoGasto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlEspecificoGasto entity.
     *
     */
    public function deleteAction(Request $request, CtlEspecificoGasto $ctlEspecificoGasto)
    {
        $form = $this->createDeleteForm($ctlEspecificoGasto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlEspecificoGasto);
            $em->flush();
        }

        return $this->redirectToRoute('uaci_especficogasto_index');
    }

    /**
     * Creates a form to delete a ctlEspecificoGasto entity.
     *
     * @param CtlEspecificoGasto $ctlEspecificoGasto The ctlEspecificoGasto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlEspecificoGasto $ctlEspecificoGasto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('uaci_especficogasto_delete', array('id' => $ctlEspecificoGasto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
