<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\CtlRol;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlrol controller.
 *
 */
class CtlRolController extends Controller
{
    /**
     * Lists all ctlRol entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlRols = $em->getRepository('MinsalSuministroBundle:CtlRol')->findAll();

        return $this->render('ctlrol/index.html.twig', array(
            'ctlRols' => $ctlRols,
        ));
    }

    /**
     * Creates a new ctlRol entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlRol = new Ctlrol();
        $form = $this->createForm('Minsal\SuministroBundle\Form\CtlRolType', $ctlRol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlRol);
            $em->flush();

            return $this->redirectToRoute('admin_roles_show', array('id' => $ctlRol->getId()));
        }

        return $this->render('ctlrol/new.html.twig', array(
            'ctlRol' => $ctlRol,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlRol entity.
     *
     */
    public function showAction(CtlRol $ctlRol)
    {
        $deleteForm = $this->createDeleteForm($ctlRol);

        return $this->render('ctlrol/show.html.twig', array(
            'ctlRol' => $ctlRol,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlRol entity.
     *
     */
    public function editAction(Request $request, CtlRol $ctlRol)
    {
        $deleteForm = $this->createDeleteForm($ctlRol);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\CtlRolType', $ctlRol);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_roles_edit', array('id' => $ctlRol->getId()));
        }

        return $this->render('ctlrol/edit.html.twig', array(
            'ctlRol' => $ctlRol,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlRol entity.
     *
     */
    public function deleteAction(Request $request, CtlRol $ctlRol)
    {
        $form = $this->createDeleteForm($ctlRol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlRol);
            $em->flush();
        }

        return $this->redirectToRoute('admin_roles_index');
    }

    /**
     * Creates a form to delete a ctlRol entity.
     *
     * @param CtlRol $ctlRol The ctlRol entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlRol $ctlRol)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_roles_delete', array('id' => $ctlRol->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
