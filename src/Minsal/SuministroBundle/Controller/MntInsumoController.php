<?php

namespace Minsal\SuministroBundle\Controller;

use Minsal\SuministroBundle\Entity\MntInsumo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
        $dql = "SELECT 
			FROM mnt_insumo AS I
			INNER JOIN ctl_grupo AS SG ON SG.id = I.grupo_id
			INNER JOIN ctl_grupo AS G ON G.id = SG.grupo_id
			INNER JOIN ctl_suministro AS S ON S.id = G.suministro_id
			INNER JOIN ctl_codificacion as C ON C.id = S.codificacion_suministro";
		$persona = $em->createQuery( $dql )->getResult();
		
		$json = '{  "data": [';
		foreach ($persona as $i) {
			$json .= '["Tiger Nixon","System Architect","Edinburgh","5421","2011/04/25","$320,800"],';
        }
        $json .= '[]]}';
        
		
		$response = new Response();

$r = '{
  "data": [
    [
      "Tiger Nixon",
      "System Architect",
      "Edinburgh",
      "5421",
      "2011/04/25",
      "$320,800"
    ],
    [
      "Garrett Winters",
      "Accountant",
      "Tokyo",
      "8422",
      "2011/07/25",
      "$170,750"
    ],
    [
      "Ashton Cox",
      "Junior Technical Author",
      "San Francisco",
      "1562",
      "2009/01/12",
      "$86,000"
    ],
    [
      "Cedric Kelly",
      "Senior Javascript Developer",
      "Edinburgh",
      "6224",
      "2012/03/29",
      "$433,060"
    ],
    [
      "Airi Satou",
      "Accountant",
      "Tokyo",
      "5407",
      "2008/11/28",
      "$162,700"
    ],
    [
      "Brielle Williamson",
      "Integration Specialist",
      "New York",
      "4804",
      "2012/12/02",
      "$372,000"
    ],
    [
      "Herrod Chandler",
      "Sales Assistant",
      "San Francisco",
      "9608",
      "2012/08/06",
      "$137,500"
    ],
    [
      "Rhona Davidson",
      "Integration Specialist",
      "Tokyo",
      "6200",
      "2010/10/14",
      "$327,900"
    ],
    [
      "Colleen Hurst",
      "Javascript Developer",
      "San Francisco",
      "2360",
      "2009/09/15",
      "$205,500"
    ],
    [
      "Sonya Frost",
      "Software Engineer",
      "Edinburgh",
      "1667",
      "2008/12/13",
      "$103,600"
    ],
    [
      "Jena Gaines",
      "Office Manager",
      "London",
      "3814",
      "2008/12/19",
      "$90,560"
    ],
    [
      "Quinn Flynn",
      "Support Lead",
      "Edinburgh",
      "9497",
      "2013/03/03",
      "$342,000"
    ],
    [
      "Charde Marshall",
      "Regional Director",
      "San Francisco",
      "6741",
      "2008/10/16",
      "$470,600"
    ],
    [
      "Haley Kennedy",
      "Senior Marketing Designer",
      "London",
      "3597",
      "2012/12/18",
      "$313,500"
    ],
    [
      "Tatyana Fitzpatrick",
      "Regional Director",
      "London",
      "1965",
      "2010/03/17",
      "$385,750"
    ],
    [
      "Michael Silva",
      "Marketing Designer",
      "London",
      "1581",
      "2012/11/27",
      "$198,500"
    ],
    [
      "Paul Byrd",
      "Chief Financial Officer (CFO)",
      "New York",
      "3059",
      "2010/06/09",
      "$725,000"
    ],
    [
      "Gloria Little",
      "Systems Administrator",
      "New York",
      "1721",
      "2009/04/10",
      "$237,500"
    ],
    [
      "Bradley Greer",
      "Software Engineer",
      "London",
      "2558",
      "2012/10/13",
      "$132,000"
    ],
    [
      "Dai Rios",
      "Personnel Lead",
      "Edinburgh",
      "2290",
      "2012/09/26",
      "$217,500"
    ],
    [
      "Jenette Caldwell",
      "Development Lead",
      "New York",
      "1937",
      "2011/09/03",
      "$345,000"
    ],
    [
      "Yuri Berry",
      "Chief Marketing Officer (CMO)",
      "New York",
      "6154",
      "2009/06/25",
      "$675,000"
    ],
    [
      "Caesar Vance",
      "Pre-Sales Support",
      "New York",
      "8330",
      "2011/12/12",
      "$106,450"
    ],
    [
      "Doris Wilder",
      "Sales Assistant",
      "Sidney",
      "3023",
      "2010/09/20",
      "$85,600"
    ],
    [
      "Angelica Ramos",
      "Chief Executive Officer (CEO)",
      "London",
      "5797",
      "2009/10/09",
      "$1,200,000"
    ],
    [
      "Gavin Joyce",
      "Developer",
      "Edinburgh",
      "8822",
      "2010/12/22",
      "$92,575"
    ],
    [
      "Jennifer Chang",
      "Regional Director",
      "Singapore",
      "9239",
      "2010/11/14",
      "$357,650"
    ],
    [
      "Brenden Wagner",
      "Software Engineer",
      "San Francisco",
      "1314",
      "2011/06/07",
      "$206,850"
    ],
    [
      "Fiona Green",
      "Chief Operating Officer (COO)",
      "San Francisco",
      "2947",
      "2010/03/11",
      "$850,000"
    ],
    [
      "Shou Itou",
      "Regional Marketing",
      "Tokyo",
      "8899",
      "2011/08/14",
      "$163,000"
    ],
    [
      "Michelle House",
      "Integration Specialist",
      "Sidney",
      "2769",
      "2011/06/02",
      "$95,400"
    ],
    [
      "Suki Burks",
      "Developer",
      "London",
      "6832",
      "2009/10/22",
      "$114,500"
    ],
    [
      "Prescott Bartlett",
      "Technical Author",
      "London",
      "3606",
      "2011/05/07",
      "$145,000"
    ],
    [
      "Gavin Cortez",
      "Team Leader",
      "San Francisco",
      "2860",
      "2008/10/26",
      "$235,500"
    ],
    [
      "Martena Mccray",
      "Post-Sales support",
      "Edinburgh",
      "8240",
      "2011/03/09",
      "$324,050"
    ],
    [
      "Unity Butler",
      "Marketing Designer",
      "San Francisco",
      "5384",
      "2009/12/09",
      "$85,675"
    ],
    [
      "Howard Hatfield",
      "Office Manager",
      "San Francisco",
      "7031",
      "2008/12/16",
      "$164,500"
    ],
    [
      "Hope Fuentes",
      "Secretary",
      "San Francisco",
      "6318",
      "2010/02/12",
      "$109,850"
    ],
    [
      "Vivian Harrell",
      "Financial Controller",
      "San Francisco",
      "9422",
      "2009/02/14",
      "$452,500"
    ],
    [
      "Timothy Mooney",
      "Office Manager",
      "London",
      "7580",
      "2008/12/11",
      "$136,200"
    ],
    [
      "Jackson Bradshaw",
      "Director",
      "New York",
      "1042",
      "2008/09/26",
      "$645,750"
    ],
    [
      "Olivia Liang",
      "Support Engineer",
      "Singapore",
      "2120",
      "2011/02/03",
      "$234,500"
    ],
    [
      "Bruno Nash",
      "Software Engineer",
      "London",
      "6222",
      "2011/05/03",
      "$163,500"
    ],
    [
      "Sakura Yamamoto",
      "Support Engineer",
      "Tokyo",
      "9383",
      "2009/08/19",
      "$139,575"
    ],
    [
      "Thor Walton",
      "Developer",
      "New York",
      "8327",
      "2013/08/11",
      "$98,540"
    ],
    [
      "Finn Camacho",
      "Support Engineer",
      "San Francisco",
      "2927",
      "2009/07/07",
      "$87,500"
    ],
    [
      "Serge Baldwin",
      "Data Coordinator",
      "Singapore",
      "8352",
      "2012/04/09",
      "$138,575"
    ],
    [
      "Zenaida Frank",
      "Software Engineer",
      "New York",
      "7439",
      "2010/01/04",
      "$125,250"
    ],
    [
      "Zorita Serrano",
      "Software Engineer",
      "San Francisco",
      "4389",
      "2012/06/01",
      "$115,000"
    ],
    [
      "Jennifer Acosta",
      "Junior Javascript Developer",
      "Edinburgh",
      "3431",
      "2013/02/01",
      "$75,650"
    ],
    [
      "Cara Stevens",
      "Sales Assistant",
      "New York",
      "3990",
      "2011/12/06",
      "$145,600"
    ],
    [
      "Hermione Butler",
      "Regional Director",
      "London",
      "1016",
      "2011/03/21",
      "$356,250"
    ],
    [
      "Lael Greer",
      "Systems Administrator",
      "London",
      "6733",
      "2009/02/27",
      "$103,500"
    ],
    [
      "Jonas Alexander",
      "Developer",
      "San Francisco",
      "8196",
      "2010/07/14",
      "$86,500"
    ],
    [
      "Shad Decker",
      "Regional Director",
      "Edinburgh",
      "6373",
      "2008/11/13",
      "$183,000"
    ],
    [
      "Michael Bruce",
      "Javascript Developer",
      "Singapore",
      "5384",
      "2011/06/27",
      "$183,000"
    ],
    [
      "Donna Snider",
      "Customer Support",
      "New York",
      "4226",
      "2011/01/25",
      "$112,000"
    ]
  ]
}';
	$response->setContent($r);
 $response->headers->set('Content-Type', 'application/json');
 return $response;
		/*$em = $this->getDoctrine()->getManager();

        $mntInsumos = null;//$em->getRepository('MinsalSuministroBundle:MntInsumo')->findByEnableSchema(1);
        return $this->render('MinsalSuministroBundle:Default:index.html.twig', array('mntInsumos' => $mntInsumos,));*/
    }
}
