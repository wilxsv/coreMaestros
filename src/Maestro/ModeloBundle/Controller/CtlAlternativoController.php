<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlAlternativo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlalternativo controller.
 *
 */
class CtlAlternativoController extends Controller
{
    /**
     * Lists all ctlAlternativo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlAlternativos = $em->getRepository('MaestroModeloBundle:CtlAlternativo')->findAll();

        return $this->render('ctlalternativo/index.html.twig', array(
            'ctlAlternativos' => $ctlAlternativos,
        ));
    }

    /**
     * Creates a new ctlAlternativo entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlAlternativo = new Ctlalternativo();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlAlternativoType', $ctlAlternativo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlAlternativo);
            $em->flush($ctlAlternativo);

            return $this->redirectToRoute('alternativo_show', array('id' => $ctlAlternativo->getId()));
        }

        return $this->render('ctlalternativo/new.html.twig', array(
            'ctlAlternativo' => $ctlAlternativo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlAlternativo entity.
     *
     */
    public function showAction(CtlAlternativo $ctlAlternativo)
    {
        $deleteForm = $this->createDeleteForm($ctlAlternativo);

        return $this->render('ctlalternativo/show.html.twig', array(
            'ctlAlternativo' => $ctlAlternativo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlAlternativo entity.
     *
     */
    public function editAction(Request $request, CtlAlternativo $ctlAlternativo)
    {
        $deleteForm = $this->createDeleteForm($ctlAlternativo);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlAlternativoType', $ctlAlternativo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('alternativo_edit', array('id' => $ctlAlternativo->getId()));
        }

        return $this->render('ctlalternativo/edit.html.twig', array(
            'ctlAlternativo' => $ctlAlternativo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlAlternativo entity.
     *
     */
    public function deleteAction(Request $request, CtlAlternativo $ctlAlternativo)
    {
        $form = $this->createDeleteForm($ctlAlternativo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlAlternativo);
            $em->flush($ctlAlternativo);
        }

        return $this->redirectToRoute('alternativo_index');
    }

    /**
     * Creates a form to delete a ctlAlternativo entity.
     *
     * @param CtlAlternativo $ctlAlternativo The ctlAlternativo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlAlternativo $ctlAlternativo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alternativo_delete', array('id' => $ctlAlternativo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
