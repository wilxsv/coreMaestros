<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\MntInsumo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Mntinsumo controller.
 *
 */
class MntInsumoController extends Controller
{
    /**
     * Lists all mntInsumo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mntInsumos = $em->getRepository('MinsalSuministroBundle:MntInsumo')->findAll();

        return $this->render('mntinsumo/index.html.twig', array(
            'mntInsumos' => $mntInsumos,
        ));
    }

    /**
     * Creates a new mntInsumo entity.
     *
     */
    public function newAction(Request $request)
    {
        $mntInsumo = new Mntinsumo();
        $form = $this->createForm('Minsal\SuministroBundle\Form\MntInsumoType', $mntInsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            
            $mntInsumo->setNombreLargoInsumo($mntInsumo->getNombreGenericoInsumo() );
            $mntInsumo->setCodigoSinabExt(0);
            $mntInsumo->setListadoOficial(FALSE);
            $mntInsumo->setVenInsumo(3);
            $mntInsumo->setProcesadoInsumo(0);
            
            
            $mntInsumo->setRegistroSchema(new \DateTime('now'));
            $mntInsumo->setUserIdSchema($this->getUser()->getId());
            $mntInsumo->setUserIpSchema($request->getClientIp());
            $mntInsumo->setEstadoSchema(0);
            $mntInsumo->setEnableSchema(0);
            $mntInsumo->setDetalleSchema( '' );
            $request->getSession()->getFlashBag()->add('success', 'Solicitud generada con exito');
            
            $em->persist($mntInsumo);
            $em->flush();

            return $this->redirectToRoute('productos_show', array('id' => $mntInsumo->getId()));
        }

        return $this->render('mntinsumo/new.html.twig', array(
            'mntInsumo' => $mntInsumo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mntInsumo entity.
     *
     */
    public function showAction(MntInsumo $mntInsumo)
    {
        $deleteForm = $this->createDeleteForm($mntInsumo);

        return $this->render('mntinsumo/show.html.twig', array(
            'mntInsumo' => $mntInsumo,
            'medicamento' => false,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mntInsumo entity.
     *
     */
    public function editAction(Request $request, MntInsumo $mntInsumo)
    {
        $deleteForm = $this->createDeleteForm($mntInsumo);
        $editForm = $this->createForm('Minsal\SuministroBundle\Form\MntInsumoType', $mntInsumo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $request->getSession()->getFlashBag()->add('success', 'Producto actualizado con exito');

            return $this->redirectToRoute('productos_edit', array('id' => $mntInsumo->getId()));
        }

        return $this->render('mntinsumo/edit.html.twig', array(
            'mntInsumo' => $mntInsumo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mntInsumo entity.
     *
     */
    public function deleteAction(Request $request, MntInsumo $mntInsumo)
    {
        $form = $this->createDeleteForm($mntInsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mntInsumo);
            $em->flush();
        }

        return $this->redirectToRoute('productos_index');
    }

    /**
     * Creates a form to delete a mntInsumo entity.
     *
     * @param MntInsumo $mntInsumo The mntInsumo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MntInsumo $mntInsumo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productos_delete', array('id' => $mntInsumo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
        
    public function jsonAction()
    {
		$em = $this->getDoctrine()->getManager();
		
		$dql = "SELECT i.codigoMinsalInsumo, i.nombreLargoInsumo, n.nombreNivelUso, u.nombreUnidad, g.nombreGrupo
			FROM  MinsalSuministroBundle:MntInsumo i 
			JOIN i.nivelUso n
			JOIN i.unidadMedidad u
			JOIN i.grupo g
			WHERE i.enableSchema = 1";
        $query = $em->createQuery($dql);
        $array = $query->getArrayResult();
        return new JsonResponse(array('data' => $array));
    }
}
