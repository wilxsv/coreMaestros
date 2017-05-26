<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlMicrored;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlmicrored controller.
 *
 */
class CtlMicroredController extends Controller
{
    /**
     * Lists all ctlMicrored entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlMicroreds = $em->getRepository('MaestroModeloBundle:CtlMicrored')->findAll();

        return $this->render('ctlmicrored/index.html.twig', array(
            'ctlMicroreds' => $ctlMicroreds,
        ));
    }

    /**
     * Creates a new ctlMicrored entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlMicrored = new Ctlmicrored();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlMicroredType', $ctlMicrored);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $ctlMicrored->SetIdUsuarioReg($this->getUser()->getId());
            $ctlMicrored->SetIdUsuarioMod($this->getUser()->getId());
            $ctlMicrored->SetFechaHoraReg(new \DateTime('now'));
            $ctlMicrored->SetFechaHoraMod(new \DateTime('now'));
            $ctlMicrored->SetCodigoc3(0);
            
            $em->persist($ctlMicrored);
            $em->flush($ctlMicrored);

            return $this->redirectToRoute('red_show', array('id' => $ctlMicrored->getId()));
        }

        return $this->render('ctlmicrored/new.html.twig', array(
            'ctlMicrored' => $ctlMicrored,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlMicrored entity.
     *
     */
    public function showAction(CtlMicrored $ctlMicrored)
    {
        $deleteForm = $this->createDeleteForm($ctlMicrored);

        return $this->render('ctlmicrored/show.html.twig', array(
            'ctlMicrored' => $ctlMicrored,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlMicrored entity.
     *
     */
    public function editAction(Request $request, CtlMicrored $ctlMicrored)
    {
        $deleteForm = $this->createDeleteForm($ctlMicrored);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlMicroredType', $ctlMicrored);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('red_edit', array('id' => $ctlMicrored->getId()));
        }

        return $this->render('ctlmicrored/edit.html.twig', array(
            'ctlMicrored' => $ctlMicrored,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlMicrored entity.
     *
     */
    public function deleteAction(Request $request, CtlMicrored $ctlMicrored)
    {
        $form = $this->createDeleteForm($ctlMicrored);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlMicrored);
            $em->flush($ctlMicrored);
        }

        return $this->redirectToRoute('red_index');
    }

    /**
     * Creates a form to delete a ctlMicrored entity.
     *
     * @param CtlMicrored $ctlMicrored The ctlMicrored entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlMicrored $ctlMicrored)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('red_delete', array('id' => $ctlMicrored->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
