<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlNivelUso;
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

        $ctlNivelUsos = $em->getRepository('MaestroModeloBundle:CtlNivelUso')->findAll();

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
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlNivelUsoType', $ctlNivelUso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlNivelUso);
            $em->flush($ctlNivelUso);

            return $this->redirectToRoute('nivel_uso_show', array('id' => $ctlNivelUso->getId()));
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
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlNivelUsoType', $ctlNivelUso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nivel_uso_edit', array('id' => $ctlNivelUso->getId()));
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
            $em->flush($ctlNivelUso);
        }

        return $this->redirectToRoute('nivel_uso_index');
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
            ->setAction($this->generateUrl('nivel_uso_delete', array('id' => $ctlNivelUso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
