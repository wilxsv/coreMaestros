<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlProducto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlproducto controller.
 *
 */
class CtlProductoController extends Controller
{
    /**
     * Lists all ctlProducto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlProductos = $em->getRepository('MaestroModeloBundle:CtlProducto')->findAll();

        return $this->render('ctlproducto/index.html.twig', array(
            'ctlProductos' => $ctlProductos,
        ));
    }

    /**
     * Creates a new ctlProducto entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlProducto = new Ctlproducto();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlProductoType', $ctlProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlProducto);
            $em->flush($ctlProducto);

            return $this->redirectToRoute('producto_show', array('id' => $ctlProducto->getId()));
        }

        return $this->render('ctlproducto/new.html.twig', array(
            'ctlProducto' => $ctlProducto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlProducto entity.
     *
     */
    public function showAction(CtlProducto $ctlProducto)
    {
        $deleteForm = $this->createDeleteForm($ctlProducto);

        return $this->render('ctlproducto/show.html.twig', array(
            'ctlProducto' => $ctlProducto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlProducto entity.
     *
     */
    public function editAction(Request $request, CtlProducto $ctlProducto)
    {
        $deleteForm = $this->createDeleteForm($ctlProducto);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlProductoType', $ctlProducto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('producto_edit', array('id' => $ctlProducto->getId()));
        }

        return $this->render('ctlproducto/edit.html.twig', array(
            'ctlProducto' => $ctlProducto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlProducto entity.
     *
     */
    public function deleteAction(Request $request, CtlProducto $ctlProducto)
    {
        $form = $this->createDeleteForm($ctlProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlProducto);
            $em->flush($ctlProducto);
        }

        return $this->redirectToRoute('producto_index');
    }

    /**
     * Creates a form to delete a ctlProducto entity.
     *
     * @param CtlProducto $ctlProducto The ctlProducto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlProducto $ctlProducto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('producto_delete', array('id' => $ctlProducto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
