<?php

namespace FK\ImmoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AK\ImmobilierBundle\Entity\Reservation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FK\ImmoBundle\Entity\Contrat;
use FK\ImmoBundle\Form\ContratType;
use FK\ImmoBundle\Entity\Paiement;
use FK\ImmoBundle\Entity\Type;
use FK\ImmoBundle\Entity\Bien;
use FK\ImmoBundle\Form\BienType;

class AdminController extends Controller
{
	/**
     * @Route("/agent")
     */
    public function agentAction()
    {
        return $this->render('FKImmoBundle:Admin:agent.html.twig', array(
            
        ));
    }

       /**
     * @Route("/calendrier", name="calendrier")
     */
    public function calendrierAction()
    {
        return $this->render('FKImmoBundle:Admin:calendrier.html.twig', array(
            // ...
        ));
    }

         /**
     * @Route("/addbien", name="addbien")
     */
      public function addbienAction(Request $request)
    {
        $bien= new Bien();
        $formbien= $this->createForm(BienType::class,$bien);


        $em1 = $this->getDoctrine()->getManager();

        $Type = $em1->getRepository('FKImmoBundle:Type')->findAll();

        $em2 = $this->getDoctrine()->getManager();

       $Localite = $em2->getRepository('FKImmoBundle:Localite')->findAll();



        // if ($request->isMethod('POST')) {
        //     $formUser->HandleRequest($request);
        //     if ($formUser->isValid()) {
        //     $em= $this->getDoctrine()->getManager();
        //     $user->setPassword("passe");
        //     $user->setEtat(0);
        //     $em->persist($user);
        //     $em->flush();
        //     return $this->redirectToRoute('list');
        //     }
        // }

        return $this->render('FKImmoBundle:Admin:addbien.html.twig',
        array("form"=>$formbien->createView(), 'types'=>$Type , 'localite'=>$Localite
         ));

    }

     /**
     * @Route("/viewBien", name="viewBien")
     */

    public function viewBienAction()
    {
        $em1 = $this->getDoctrine()->getManager();

        $Type = $em1->getRepository('FKImmoBundle:Type')->findAll();

        $em2 = $this->getDoctrine()->getManager();

       $Localite = $em2->getRepository('FKImmoBundle:Localite')->findAll();


        $repository=$this
        ->getDoctrine ()
        ->getManager()
        ->getRepository('FKImmoBundle:Bien');

        $listBien=$repository->findAll();
        return $this->render('FKImmoBundle:Admin:viewBien.html.twig', array(
             'biens' => $listBien,'types' => $Type,'localites' => $Localite
        // ...
    ));

    }


/**
     * @Route("/viewType", name="viewType")
     */

    public function viewTypeAction()
    {
        
       $em = $this->getDoctrine()->getManager();
       $Type = $em->getRepository('FKImmoBundle:Type')->findAll();
        return $this->render('FKImmoBundle:Admin:viewType.html.twig', array(
             'types' => $Type

             ));
       
    }

    /**
     * @Route("/viewLocalte", name="viewLocalite")
     */

    public function viewLocaliteAction()
    {
        
       $em = $this->getDoctrine()->getManager();
       $Localite = $em->getRepository('FKImmoBundle:Localite')->findAll();
        return $this->render('FKImmoBundle:Admin:viewLocalite.html.twig', array(
             'localite' => $Localite

             ));
       
    }



	   /**
     * @Route("/administrateur", name="viewReserve")
     */
	public function viewReserveAction()
	{
		$em=$this->getDoctrine()->getManager();
        $listReserve=$em->getRepository('FKImmoBundle:Reservation')->findBy(['etat'=>0]);
        return $this->render('FKImmoBundle:Admin:Res.html.twig', array(
          'reservations'=>$listReserve
        ));
	} 
	 /**
     * @Route("/administrateur/details/{id}", name="detail")
     */
	public function detailAction(Request $request,$id)
    {
        
        $em = $this
        ->getDoctrine()
        ->getManager();
        $reservation= $em->getRepository('FKImmoBundle:Reservation')->find($id);
        
        return $this->render('FKImmoBundle:Admin:details.html.twig', array(
            'details'=> $reservation
        ));
    }

     /**
     * @Route("/administrateur/contrat/{id}", name="contrat")
    */
public function contratAction(Request $request,$id)
{
    $em = $this
    ->getDoctrine()
    ->getManager();
    $reservation= $em->getRepository('FKImmoBundle:Reservation')->find($id);
    //$bien= $em->getRepository('FKImmoBundle:Bien')->find($id);
    $texte= $em->getRepository('FKImmoBundle:Texte')->findAll();

    // $em1 = $this
    // ->getDoctrine()
    // ->getManager();
            if ($request->isMethod('POST'))
            {
                 $em = $this
                 ->getDoctrine()
                 ->getManager();
                 $client= $reservation->getClient();
               

                 $listbien = $reservation->getBien();

                $duree=$request->get('duree');
                $mensualite=$request->get('mensualite');
                $total=$request->get('total');
                $contrat= new Contrat();
                $contrat->setDateContrat(new \DateTime());
                $contrat->setCaution($reservation->getBien()->getPrixlocation());
                $contrat->setDuree("1 an renouvelable");
                $contrat->setBien($reservation->getBien());
                 $contrat->setClient($reservation->getClient());
                $em->persist($contrat);
                $em->flush();




          if ($contrat)
          {
            $em->persist($contrat);
                $paiement = new Paiement();
                $paiement->setDatePaiement($contrat->getDateContrat());
                $paiement->setMontant($total);
                $paiement->setPeriode(new \DateTime());
                $paiement->setContrat($contrat);
                $em->persist($paiement);
                $em->flush();


           }

       }

       if ($request->isMethod('GET')) 
       {
            extract($_GET);
            $reservation->setEtat("1");

            $em->persist($reservation);
            $em->flush();

        }
        if ($request->isMethod('GET'))
        {
                        extract($_GET);
                       $bien= $reservation->setBien($reservation->getBien()->setEtat("1"));
                        $em->persist($bien);
                        $em ->flush();

        }



    return $this->render('FKImmoBundle:Admin:contrat.html.twig', array(
        'reservations'=> $reservation, 'texte'=>$texte
    ));


}  
 /**
     * @Route("/pdf/{id}", name="pdf")
     */
   public function pdfAction(Request $request,$id)
    {
        
       
         $client = $this->getDoctrine()->getManager()
         ->getRepository('FKImmoBundle:Reservation');
          $reservataire= $client->find($id); 
        $snappy = $this->get('knp_snappy.pdf');
        


         $html=$this->renderView('FKImmoBundle:Admin:pdf.html.twig',array('client'=>$reservataire));


        $filename = 'ContratPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
            
              
      
      
    }



}
