<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlInsumo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlinsumo controller.
 *
 */
class CtlInsumoController extends Controller
{
    /**
     * Lists all ctlInsumo entities.
     *
     */
    public function indexAction($type = 3)
    {
        $em = $this->getDoctrine()->getManager();
        if ($type == 0){ $ctlInsumos = $em->getRepository('MaestroModeloBundle:CtlInsumo')->findAll(); }
        elseif ($type == 1) { $ctlInsumos = $em->getRepository('MaestroModeloBundle:CtlInsumo')->findByEstadoSchema(0); }
        elseif ($type == 2) { $ctlInsumos = $em->getRepository('MaestroModeloBundle:CtlInsumo')->find('enableSchema = 0'); }
        elseif ($type == 3) { $ctlInsumos = $em->getRepository('MaestroModeloBundle:CtlInsumo')->findByEnableSchema(1); }

        return $this->render('ctlinsumo/index.html.twig', array(
            'ctlInsumos' => $ctlInsumos, 'type' => $type,
        ));
    }

    /**
     * Creates a new ctlInsumo entity.
     *
     */
    public function newAction(Request $request, $type = 0)
    {
        $ctlInsumo = new Ctlinsumo();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoType', $ctlInsumo);
        if ($type == 2){ $form = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoType', $ctlInsumo); }
        elseif ($type == 6){ $form = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoGralType', $ctlInsumo); }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlInsumo);
            $em->flush($ctlInsumo);

            return $this->redirectToRoute('insumo_index', array('type' => 0));
        }//elseif ($type == 0) { return $this->redirectToRoute('insumo_index');        }

        if ($type == 2){ $view = 'ctlinsumo/medicamento.html.twig'; }
        if ($type == 6){ $view = 'ctlinsumo/general.html.twig'; }
        if ($type == 0){ $view = 'ctlinsumo/new.html.twig'; }
        return $this->render($view, array(
            'ctlInsumo' => $ctlInsumo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlInsumo entity.
     *
     */
    public function showAction(CtlInsumo $ctlInsumo)
    {
        $deleteForm = $this->createDeleteForm($ctlInsumo);

        return $this->render('ctlinsumo/show.html.twig', array(
            'ctlInsumo' => $ctlInsumo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlInsumo entity.
     *
     */
    public function editAction(Request $request, CtlInsumo $ctlInsumo)
    {
        $deleteForm = $this->createDeleteForm($ctlInsumo);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoType', $ctlInsumo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('insumo_edit', array('id' => $ctlInsumo->getId()));
        }

        return $this->render('ctlinsumo/edit.html.twig', array(
            'ctlInsumo' => $ctlInsumo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlInsumo entity.
     *
     */
    public function deleteAction(Request $request, CtlInsumo $ctlInsumo)
    {
        $form = $this->createDeleteForm($ctlInsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlInsumo);
            $em->flush($ctlInsumo);
        }

        return $this->redirectToRoute('insumo_index');
    }

    /**
     * Creates a form to delete a ctlInsumo entity.
     *
     * @param CtlInsumo $ctlInsumo The ctlInsumo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlInsumo $ctlInsumo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('insumo_delete', array('id' => $ctlInsumo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Creates a new ctlInsumo entity.
     *
     */
     public function medicoAction(Request $request, $type)
     {
         $ctlInsumo = new Ctlinsumo();
         $form = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoType', $ctlInsumo);
         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $em->persist($ctlInsumo);
             $em->flush($ctlInsumo);

             return $this->redirectToRoute('insumo_show', array('id' => $ctlInsumo->getId()));
         }

         return $this->render('ctlinsumo/medico.html.twig', array(
             'ctlInsumo' => $ctlInsumo,
             'form' => $form->createView(),
         ));
     }

   public function medicamentoAction(Request $request, $type)
   {
     $ctlInsumo = new Ctlinsumo();
     $form = $this->createForm('Maestro\ModeloBundle\Form\CtlInsumoMedSolicitudType', $ctlInsumo);
     $form->handleRequest($request);

     if ($form->isSubmitted() && $form->isValid()) {
         $em = $this->getDoctrine()->getManager();
         $em->persist($ctlInsumo);
         $em->flush($ctlInsumo);

         return $this->redirectToRoute('insumo_show', array('id' => $ctlInsumo->getId()));
     }

     return $this->render('ctlinsumo/medicamento.html.twig', array(
        'ctlInsumo' => $ctlInsumo,
         'form' => $form->createView(),
     ));
 }
}
