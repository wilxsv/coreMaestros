<?php

namespace Maestro\ModeloBundle\Controller;

use Maestro\ModeloBundle\Entity\CtlAcceso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlacceso controller.
 *
 */
class CtlAccesoController extends Controller
{
    /**
     * Lists all ctlAcceso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlAccesos = $em->getRepository('MaestroModeloBundle:CtlAcceso')->findAll();

        return $this->render('ctlacceso/index.html.twig', array(
            'ctlAccesos' => $ctlAccesos,
        ));
    }

    /**
     * Creates a new ctlAcceso entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlAcceso = new Ctlacceso();
        $form = $this->createForm('Maestro\ModeloBundle\Form\CtlAccesoType', $ctlAcceso);
        $form->handleRequest($request);
        
                
        $availableApiRoutes = [];
		foreach ($this->container->get('router')->getRouteCollection()->all() as $name => $route) {
			$route = $route->compile();
			$availableApiRoutes[] = ["name" => $name];//, "variables" => $route->getVariables()
		}

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlAcceso);
            $em->flush($ctlAcceso);

            return $this->redirectToRoute('acceso_show', array('id' => $ctlAcceso->getId()));
        }

        return $this->render('ctlacceso/new.html.twig', array(
            'ctlAcceso' => $ctlAcceso,
            'form' => $form->createView(), 'routes' => $availableApiRoutes,
        ));
    }

    /**
     * Finds and displays a ctlAcceso entity.
     *
     */
    public function showAction(CtlAcceso $ctlAcceso)
    {
        $deleteForm = $this->createDeleteForm($ctlAcceso);

        return $this->render('ctlacceso/show.html.twig', array(
            'ctlAcceso' => $ctlAcceso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlAcceso entity.
     *
     */
    public function editAction(Request $request, CtlAcceso $ctlAcceso)
    {
        $deleteForm = $this->createDeleteForm($ctlAcceso);
        $editForm = $this->createForm('Maestro\ModeloBundle\Form\CtlAccesoType', $ctlAcceso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('acceso_edit', array('id' => $ctlAcceso->getId()));
        }

        return $this->render('ctlacceso/edit.html.twig', array(
            'ctlAcceso' => $ctlAcceso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlAcceso entity.
     *
     */
    public function deleteAction(Request $request, CtlAcceso $ctlAcceso)
    {
        $form = $this->createDeleteForm($ctlAcceso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlAcceso);
            $em->flush($ctlAcceso);
        }

        return $this->redirectToRoute('acceso_index');
    }

    /**
     * Creates a form to delete a ctlAcceso entity.
     *
     * @param CtlAcceso $ctlAcceso The ctlAcceso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlAcceso $ctlAcceso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('acceso_delete', array('id' => $ctlAcceso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
