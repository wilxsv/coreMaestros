<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlEquipo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Ctlequipo controller.
 *
 */
class CtlEquipoController extends Controller
{
    /**
     * Lists all ctlEquipo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $repository = $this->getDoctrine()->getRepository('MaestroModeloBundle:CtlEstablecimiento');
		$query = $repository->createQueryBuilder('p')->where('p.estadoSchema = 1 AND p.enableSchema = 1')->addOrderBy('p.registroSchema', 'ASC')->getQuery();
		$establecimiento = $query->getResult();

        $ctlEquipos = $em->getRepository('MaestroModeloBundle:CtlEquipo')->findAll();

        return $this->render('ctlequipo/index.html.twig', array(
            'ctlEquipos' => $ctlEquipos, 'stablecimiento' => $establecimiento,
        ));
    }

    /**
     * Creates a new ctlEquipo entity.
     *
     */
    public function newAction(Request $request)
    {
		$session = $request->getSession();

        $ctlEquipo = new Ctlequipo();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlEquipoType', $ctlEquipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $ctlEquipo->setEstablecimiento( $session->get('id') );
            $em->persist($ctlEquipo);
            $em->flush($ctlEquipo);
            $request->getSession()->getFlashBag()->add('success', 'Equipo creado');

            return $this->redirectToRoute('eco_show', array('id' => $ctlEquipo->getId()));
        }

        return $this->render('ctlequipo/new.html.twig', array(
            'ctlEquipo' => $ctlEquipo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlEquipo entity.
     *
     */
    public function showAction(CtlEquipo $ctlEquipo)
    {
        $deleteForm = $this->createDeleteForm($ctlEquipo);

        return $this->render('ctlequipo/show.html.twig', array(
            'ctlEquipo' => $ctlEquipo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlEquipo entity.
     *
     */
    public function editAction(Request $request, CtlEquipo $ctlEquipo)
    {
        $deleteForm = $this->createDeleteForm($ctlEquipo);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlEquipoType', $ctlEquipo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $request->getSession()->getFlashBag()->add('success', 'Equipo actualizado');

            return $this->redirectToRoute('eco_edit', array('id' => $ctlEquipo->getId()));
        }

        return $this->render('ctlequipo/edit.html.twig', array(
            'ctlEquipo' => $ctlEquipo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlEquipo entity.
     *
     */
    public function deleteAction(Request $request, CtlEquipo $ctlEquipo)
    {
        $form = $this->createDeleteForm($ctlEquipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlEquipo);
            $em->flush($ctlEquipo);
            $request->getSession()->getFlashBag()->add('error', 'Equipo eliminado');
        }

        return $this->redirectToRoute('eco_index');
    }

    /**
     * Creates a form to delete a ctlEquipo entity.
     *
     * @param CtlEquipo $ctlEquipo The ctlEquipo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlEquipo $ctlEquipo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eco_delete', array('id' => $ctlEquipo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
