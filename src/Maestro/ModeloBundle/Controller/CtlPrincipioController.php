<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlPrincipio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlprincipio controller.
 *
 */
class CtlPrincipioController extends Controller
{
    /**
     * Lists all ctlPrincipio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlPrincipios = $em->getRepository('MaestroModeloBundle:CtlPrincipio')->findAll();

        return $this->render('ctlprincipio/index.html.twig', array(
            'ctlPrincipios' => $ctlPrincipios,
        ));
    }

    /**
     * Creates a new ctlPrincipio entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlPrincipio = new Ctlprincipio();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlPrincipioType', $ctlPrincipio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlPrincipio);
            $em->flush($ctlPrincipio);

            return $this->redirectToRoute('principio_show', array('id' => $ctlPrincipio->getId()));
        }

        return $this->render('ctlprincipio/new.html.twig', array(
            'ctlPrincipio' => $ctlPrincipio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlPrincipio entity.
     *
     */
    public function showAction(CtlPrincipio $ctlPrincipio)
    {
        $deleteForm = $this->createDeleteForm($ctlPrincipio);

        return $this->render('ctlprincipio/show.html.twig', array(
            'ctlPrincipio' => $ctlPrincipio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlPrincipio entity.
     *
     */
    public function editAction(Request $request, CtlPrincipio $ctlPrincipio)
    {
        $deleteForm = $this->createDeleteForm($ctlPrincipio);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlPrincipioType', $ctlPrincipio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('principio_edit', array('id' => $ctlPrincipio->getId()));
        }

        return $this->render('ctlprincipio/edit.html.twig', array(
            'ctlPrincipio' => $ctlPrincipio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlPrincipio entity.
     *
     */
    public function deleteAction(Request $request, CtlPrincipio $ctlPrincipio)
    {
        $form = $this->createDeleteForm($ctlPrincipio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlPrincipio);
            $em->flush($ctlPrincipio);
        }

        return $this->redirectToRoute('principio_index');
    }

    /**
     * Creates a form to delete a ctlPrincipio entity.
     *
     * @param CtlPrincipio $ctlPrincipio The ctlPrincipio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlPrincipio $ctlPrincipio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('principio_delete', array('id' => $ctlPrincipio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
