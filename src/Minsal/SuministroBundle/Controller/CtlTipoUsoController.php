<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\CtlTipoUso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctltipouso controller.
 *
 */
class CtlTipoUsoController extends Controller
{
    /**
     * Lists all ctlTipoUso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlTipoUsos = $em->getRepository('MinsalSuministroBundle:CtlTipoUso')->findAll();

        return $this->render('ctltipouso/index.html.twig', array(
            'ctlTipoUsos' => $ctlTipoUsos,
        ));
    }

    /**
     * Creates a new ctlTipoUso entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlTipoUso = new Ctltipouso();
        $form = $this->createForm('Minsal\SuministroBundle\Form\CtlTipoUsoType', $ctlTipoUso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlTipoUso);
            $em->flush();

            return $this->redirectToRoute('tipouso_show', array('id' => $ctlTipoUso->getId()));
        }

        return $this->render('ctltipouso/new.html.twig', array(
            'ctlTipoUso' => $ctlTipoUso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlTipoUso entity.
     *
     */
    public function showAction(CtlTipoUso $ctlTipoUso)
    {
        $deleteForm = $this->createDeleteForm($ctlTipoUso);

        return $this->render('ctltipouso/show.html.twig', array(
            'ctlTipoUso' => $ctlTipoUso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlTipoUso entity.
     *
     */
    public function editAction(Request $request, CtlTipoUso $ctlTipoUso)
    {
        $deleteForm = $this->createDeleteForm($ctlTipoUso);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\CtlTipoUsoType', $ctlTipoUso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipouso_edit', array('id' => $ctlTipoUso->getId()));
        }

        return $this->render('ctltipouso/edit.html.twig', array(
            'ctlTipoUso' => $ctlTipoUso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlTipoUso entity.
     *
     */
    public function deleteAction(Request $request, CtlTipoUso $ctlTipoUso)
    {
        $form = $this->createDeleteForm($ctlTipoUso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlTipoUso);
            $em->flush();
        }

        return $this->redirectToRoute('tipouso_index');
    }

    /**
     * Creates a form to delete a ctlTipoUso entity.
     *
     * @param CtlTipoUso $ctlTipoUso The ctlTipoUso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlTipoUso $ctlTipoUso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipouso_delete', array('id' => $ctlTipoUso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
