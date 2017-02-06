<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlPrograma;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlprograma controller.
 *
 */
class CtlProgramaController extends Controller
{
    /**
     * Lists all ctlPrograma entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlProgramas = $em->getRepository('MaestroModeloBundle:CtlPrograma')->findAll();

        return $this->render('ctlprograma/index.html.twig', array(
            'ctlProgramas' => $ctlProgramas,
        ));
    }

    /**
     * Creates a new ctlPrograma entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlPrograma = new Ctlprograma();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlProgramaType', $ctlPrograma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlPrograma);
            $em->flush($ctlPrograma);

            return $this->redirectToRoute('programa_show', array('id' => $ctlPrograma->getId()));
        }

        return $this->render('ctlprograma/new.html.twig', array(
            'ctlPrograma' => $ctlPrograma,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlPrograma entity.
     *
     */
    public function showAction(CtlPrograma $ctlPrograma)
    {
        $deleteForm = $this->createDeleteForm($ctlPrograma);

        return $this->render('ctlprograma/show.html.twig', array(
            'ctlPrograma' => $ctlPrograma,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlPrograma entity.
     *
     */
    public function editAction(Request $request, CtlPrograma $ctlPrograma)
    {
        $deleteForm = $this->createDeleteForm($ctlPrograma);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlProgramaType', $ctlPrograma);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('programa_edit', array('id' => $ctlPrograma->getId()));
        }

        return $this->render('ctlprograma/edit.html.twig', array(
            'ctlPrograma' => $ctlPrograma,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlPrograma entity.
     *
     */
    public function deleteAction(Request $request, CtlPrograma $ctlPrograma)
    {
        $form = $this->createDeleteForm($ctlPrograma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlPrograma);
            $em->flush($ctlPrograma);
        }

        return $this->redirectToRoute('programa_index');
    }

    /**
     * Creates a form to delete a ctlPrograma entity.
     *
     * @param CtlPrograma $ctlPrograma The ctlPrograma entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlPrograma $ctlPrograma)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('programa_delete', array('id' => $ctlPrograma->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
