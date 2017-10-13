<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\CtlNivelUso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlniveluso controller.
 *
 */
class CtlNivelUsoController extends Controller
{
    /**
     * Lists all ctlNivelUso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlNivelUsos = $em->getRepository('MinsalSuministroBundle:CtlNivelUso')->findAll();

        return $this->render('ctlniveluso/index.html.twig', array(
            'ctlNivelUsos' => $ctlNivelUsos,
        ));
    }

    /**
     * Creates a new ctlNivelUso entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlNivelUso = new Ctlniveluso();
        $form = $this->createForm('Minsal\SuministroBundle\Form\CtlNivelUsoType', $ctlNivelUso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlNivelUso);
            $em->flush();

            return $this->redirectToRoute('niveluso_show', array('id' => $ctlNivelUso->getId()));
        }

        return $this->render('ctlniveluso/new.html.twig', array(
            'ctlNivelUso' => $ctlNivelUso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlNivelUso entity.
     *
     */
    public function showAction(CtlNivelUso $ctlNivelUso)
    {
        $deleteForm = $this->createDeleteForm($ctlNivelUso);

        return $this->render('ctlniveluso/show.html.twig', array(
            'ctlNivelUso' => $ctlNivelUso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlNivelUso entity.
     *
     */
    public function editAction(Request $request, CtlNivelUso $ctlNivelUso)
    {
        $deleteForm = $this->createDeleteForm($ctlNivelUso);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\CtlNivelUsoType', $ctlNivelUso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('niveluso_edit', array('id' => $ctlNivelUso->getId()));
        }

        return $this->render('ctlniveluso/edit.html.twig', array(
            'ctlNivelUso' => $ctlNivelUso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlNivelUso entity.
     *
     */
    public function deleteAction(Request $request, CtlNivelUso $ctlNivelUso)
    {
        $form = $this->createDeleteForm($ctlNivelUso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlNivelUso);
            $em->flush();
        }

        return $this->redirectToRoute('niveluso_index');
    }

    /**
     * Creates a form to delete a ctlNivelUso entity.
     *
     * @param CtlNivelUso $ctlNivelUso The ctlNivelUso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlNivelUso $ctlNivelUso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('niveluso_delete', array('id' => $ctlNivelUso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
