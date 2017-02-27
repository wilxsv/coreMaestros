<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlRecursoHumano;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlrecursohumano controller.
 *
 */
class CtlRecursoHumanoController extends Controller
{
    /**
     * Lists all ctlRecursoHumano entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlRecursoHumanos = $em->getRepository('MaestroModeloBundle:CtlRecursoHumano')->findAll();

        return $this->render('ctlrecursohumano/index.html.twig', array(
            'ctlRecursoHumanos' => $ctlRecursoHumanos,
        ));
    }

    /**
     * Creates a new ctlRecursoHumano entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlRecursoHumano = new Ctlrecursohumano();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlRecursoHumanoType', $ctlRecursoHumano);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlRecursoHumano);
            $em->flush($ctlRecursoHumano);

            return $this->redirectToRoute('recurso_show', array('id' => $ctlRecursoHumano->getId()));
        }

        return $this->render('ctlrecursohumano/new.html.twig', array(
            'ctlRecursoHumano' => $ctlRecursoHumano,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlRecursoHumano entity.
     *
     */
    public function showAction(CtlRecursoHumano $ctlRecursoHumano)
    {
        $deleteForm = $this->createDeleteForm($ctlRecursoHumano);

        return $this->render('ctlrecursohumano/show.html.twig', array(
            'ctlRecursoHumano' => $ctlRecursoHumano,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlRecursoHumano entity.
     *
     */
    public function editAction(Request $request, CtlRecursoHumano $ctlRecursoHumano)
    {
        $deleteForm = $this->createDeleteForm($ctlRecursoHumano);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlRecursoHumanoType', $ctlRecursoHumano);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recurso_edit', array('id' => $ctlRecursoHumano->getId()));
        }

        return $this->render('ctlrecursohumano/edit.html.twig', array(
            'ctlRecursoHumano' => $ctlRecursoHumano,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlRecursoHumano entity.
     *
     */
    public function deleteAction(Request $request, CtlRecursoHumano $ctlRecursoHumano)
    {
        $form = $this->createDeleteForm($ctlRecursoHumano);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlRecursoHumano);
            $em->flush($ctlRecursoHumano);
        }

        return $this->redirectToRoute('recurso_index');
    }

    /**
     * Creates a form to delete a ctlRecursoHumano entity.
     *
     * @param CtlRecursoHumano $ctlRecursoHumano The ctlRecursoHumano entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlRecursoHumano $ctlRecursoHumano)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recurso_delete', array('id' => $ctlRecursoHumano->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
