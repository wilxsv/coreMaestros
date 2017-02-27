<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlCanton;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlcanton controller.
 *
 */
class CtlCantonController extends Controller
{
    /**
     * Lists all ctlCanton entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlCantons = $em->getRepository('MaestroModeloBundle:CtlCanton')->findAll();

        return $this->render('ctlcanton/index.html.twig', array(
            'ctlCantons' => $ctlCantons,
        ));
    }

    /**
     * Creates a new ctlCanton entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlCanton = new Ctlcanton();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlCantonType', $ctlCanton);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlCanton);
            $em->flush($ctlCanton);

            return $this->redirectToRoute('canton_show', array('id' => $ctlCanton->getId()));
        }

        return $this->render('ctlcanton/new.html.twig', array(
            'ctlCanton' => $ctlCanton,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlCanton entity.
     *
     */
    public function showAction(CtlCanton $ctlCanton)
    {
        $deleteForm = $this->createDeleteForm($ctlCanton);

        return $this->render('ctlcanton/show.html.twig', array(
            'ctlCanton' => $ctlCanton,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlCanton entity.
     *
     */
    public function editAction(Request $request, CtlCanton $ctlCanton)
    {
        $deleteForm = $this->createDeleteForm($ctlCanton);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlCantonType', $ctlCanton);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('canton_edit', array('id' => $ctlCanton->getId()));
        }

        return $this->render('ctlcanton/edit.html.twig', array(
            'ctlCanton' => $ctlCanton,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlCanton entity.
     *
     */
    public function deleteAction(Request $request, CtlCanton $ctlCanton)
    {
        $form = $this->createDeleteForm($ctlCanton);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlCanton);
            $em->flush($ctlCanton);
        }

        return $this->redirectToRoute('canton_index');
    }

    /**
     * Creates a form to delete a ctlCanton entity.
     *
     * @param CtlCanton $ctlCanton The ctlCanton entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlCanton $ctlCanton)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('canton_delete', array('id' => $ctlCanton->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
