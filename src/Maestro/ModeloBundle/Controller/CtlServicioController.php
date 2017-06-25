<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlServicio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlservicio controller.
 *
 */
class CtlServicioController extends Controller
{
    /**
     * Lists all ctlServicio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlServicios = $em->getRepository('MaestroModeloBundle:CtlServicio')->findAll();

        return $this->render('ctlservicio/index.html.twig', array(
            'ctlServicios' => $ctlServicios,
        ));
    }

    /**
     * Creates a new ctlServicio entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlServicio = new Ctlservicio();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlServicioType', $ctlServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlServicio);
            $em->flush($ctlServicio);
            $request->getSession()->getFlashBag()->add('success', 'Servicio creado');

            return $this->redirectToRoute('servicio_show', array('id' => $ctlServicio->getId()));
        }

        return $this->render('ctlservicio/new.html.twig', array(
            'ctlServicio' => $ctlServicio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlServicio entity.
     *
     */
    public function showAction(CtlServicio $ctlServicio)
    {
        $deleteForm = $this->createDeleteForm($ctlServicio);

        return $this->render('ctlservicio/show.html.twig', array(
            'ctlServicio' => $ctlServicio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlServicio entity.
     *
     */
    public function editAction(Request $request, CtlServicio $ctlServicio)
    {
        $deleteForm = $this->createDeleteForm($ctlServicio);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlServicioType', $ctlServicio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $request->getSession()->getFlashBag()->add('success', 'Servicio actualizado');

            return $this->redirectToRoute('servicio_edit', array('id' => $ctlServicio->getId()));
        }

        return $this->render('ctlservicio/edit.html.twig', array(
            'ctlServicio' => $ctlServicio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlServicio entity.
     *
     */
    public function deleteAction(Request $request, CtlServicio $ctlServicio)
    {
        $form = $this->createDeleteForm($ctlServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlServicio);
            $em->flush($ctlServicio);
            $request->getSession()->getFlashBag()->add('error', 'Servicio eliminado');
        }

        return $this->redirectToRoute('servicio_index');
    }

    /**
     * Creates a form to delete a ctlServicio entity.
     *
     * @param CtlServicio $ctlServicio The ctlServicio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlServicio $ctlServicio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('servicio_delete', array('id' => $ctlServicio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
