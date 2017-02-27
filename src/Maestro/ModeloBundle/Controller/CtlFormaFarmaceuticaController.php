<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlFormaFarmaceutica;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlformafarmaceutica controller.
 *
 */
class CtlFormaFarmaceuticaController extends Controller
{
    /**
     * Lists all ctlFormaFarmaceutica entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlFormaFarmaceuticas = $em->getRepository('MaestroModeloBundle:CtlFormaFarmaceutica')->findAll();

        return $this->render('ctlformafarmaceutica/index.html.twig', array(
            'ctlFormaFarmaceuticas' => $ctlFormaFarmaceuticas,
        ));
    }

    /**
     * Creates a new ctlFormaFarmaceutica entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlFormaFarmaceutica = new Ctlformafarmaceutica();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlFormaFarmaceuticaType', $ctlFormaFarmaceutica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlFormaFarmaceutica);
            $em->flush($ctlFormaFarmaceutica);

            return $this->redirectToRoute('formafarmaceutica_show', array('id' => $ctlFormaFarmaceutica->getId()));
        }

        return $this->render('ctlformafarmaceutica/new.html.twig', array(
            'ctlFormaFarmaceutica' => $ctlFormaFarmaceutica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlFormaFarmaceutica entity.
     *
     */
    public function showAction(CtlFormaFarmaceutica $ctlFormaFarmaceutica)
    {
        $deleteForm = $this->createDeleteForm($ctlFormaFarmaceutica);

        return $this->render('ctlformafarmaceutica/show.html.twig', array(
            'ctlFormaFarmaceutica' => $ctlFormaFarmaceutica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlFormaFarmaceutica entity.
     *
     */
    public function editAction(Request $request, CtlFormaFarmaceutica $ctlFormaFarmaceutica)
    {
        $deleteForm = $this->createDeleteForm($ctlFormaFarmaceutica);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlFormaFarmaceuticaType', $ctlFormaFarmaceutica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formafarmaceutica_edit', array('id' => $ctlFormaFarmaceutica->getId()));
        }

        return $this->render('ctlformafarmaceutica/edit.html.twig', array(
            'ctlFormaFarmaceutica' => $ctlFormaFarmaceutica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlFormaFarmaceutica entity.
     *
     */
    public function deleteAction(Request $request, CtlFormaFarmaceutica $ctlFormaFarmaceutica)
    {
        $form = $this->createDeleteForm($ctlFormaFarmaceutica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlFormaFarmaceutica);
            $em->flush($ctlFormaFarmaceutica);
        }

        return $this->redirectToRoute('formafarmaceutica_index');
    }

    /**
     * Creates a form to delete a ctlFormaFarmaceutica entity.
     *
     * @param CtlFormaFarmaceutica $ctlFormaFarmaceutica The ctlFormaFarmaceutica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlFormaFarmaceutica $ctlFormaFarmaceutica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formafarmaceutica_delete', array('id' => $ctlFormaFarmaceutica->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
