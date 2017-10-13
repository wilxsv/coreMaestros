<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\FosGroup;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Fosgroup controller.
 *
 */
class FosGroupController extends Controller
{
    /**
     * Lists all fosGroup entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fosGroups = $em->getRepository('MinsalSuministroBundle:FosGroup')->findAll();

        return $this->render('fosgroup/index.html.twig', array(
            'fosGroups' => $fosGroups,
        ));
    }

    /**
     * Creates a new fosGroup entity.
     *
     */
    public function newAction(Request $request)
    {
        $fosGroup = new Fosgroup();
        $form = $this->createForm('Minsal\SuministroBundle\Form\FosGroupType', $fosGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fosGroup);
            $em->flush();

            return $this->redirectToRoute('admin_grupos_show', array('id' => $fosGroup->getId()));
        }

        return $this->render('fosgroup/new.html.twig', array(
            'fosGroup' => $fosGroup,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fosGroup entity.
     *
     */
    public function showAction(FosGroup $fosGroup)
    {
        $deleteForm = $this->createDeleteForm($fosGroup);

        return $this->render('fosgroup/show.html.twig', array(
            'fosGroup' => $fosGroup,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fosGroup entity.
     *
     */
    public function editAction(Request $request, FosGroup $fosGroup)
    {
        $deleteForm = $this->createDeleteForm($fosGroup);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\FosGroupType', $fosGroup);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_grupos_edit', array('id' => $fosGroup->getId()));
        }

        return $this->render('fosgroup/edit.html.twig', array(
            'fosGroup' => $fosGroup,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fosGroup entity.
     *
     */
    public function deleteAction(Request $request, FosGroup $fosGroup)
    {
        $form = $this->createDeleteForm($fosGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fosGroup);
            $em->flush();
        }

        return $this->redirectToRoute('admin_grupos_index');
    }

    /**
     * Creates a form to delete a fosGroup entity.
     *
     * @param FosGroup $fosGroup The fosGroup entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FosGroup $fosGroup)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_grupos_delete', array('id' => $fosGroup->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
