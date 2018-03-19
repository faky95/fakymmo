<?php

namespace AK\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AK\ImmobilierBundle\Entity\Typebien;
use AK\ImmobilierBundle\Form\TypebienType;
use Symfony\Component\HttpFoundation\Response;
use AK\ImmobilierBundle\Entity\Bien;
use AK\ImmobilierBundle\Form\BienType;
use AK\ImmobilierBundle\Entity\Image;
use AK\ImmobilierBundle\Entity\Localite;
use AK\ImmobilierBundle\Form\LocaliteType;
use AK\ImmobilierBundle\Entity\Client;
use AK\ImmobilierBundle\Form\ClientType;
use AK\ImmobilierBundle\Entity\Reservation;
use AK\ImmobilierBundle\Entity\Contrat;
use AK\ImmobilierBundle\Form\ContratType;
use AK\ImmobilierBundle\Entity\Paiement;
use AK\ImmobilierBundle\Form\PaiementType;
use AK\ImmobilierBundle\Entity\TextContrat;
use AK\ImmobilierBundle\Entity\Proprietaire;
use AK\ImmobilierBundle\Form\ProprietaireType;
use AK\ImmobilierBundle\Entity\Proposition;
use AK\ImmobilierBundle\Entity\Bienencours;
use AK\ImmobilierBundle\Form\BienencoursType;

class FrontController extends Controller
{
  
    public function viewBienAction()
    {
        $em1 = $this->getDoctrine()->getManager();

        $Type = $em1->getRepository('AKImmobilierBundle:Typebien')->findAll();

        $em2 = $this->getDoctrine()->getManager();

       $Localite = $em2->getRepository('AKImmobilierBundle:Localite')->findAll();


        //$em = $this->getDoctrine()->getManager();
        $repository=$this
        ->getDoctrine ()
        ->getManager()
        ->getRepository('AKImmobilierBundle:Bien');
        
       
        $listBien=$repository->findAll();
        return $this->render('AKImmobilierBundle:Front:layout.html.twig', array(
             'biens' => $listBien,'types' => $Type,'localites' => $Localite
        // ...
    ));
       
       
    }

    public function listAction(Request $request)
	{
		 
		$em=$this->getDoctrine()->getManager();

		if($request->isMethod('POST'))
		{
			$localite=$request->get('localite');
			$type=$request->get('type');
			$prixlocation=$request->get('prixlocation');

			if($localite=='' && $type=='' && $prixlocation=='')
			{
				$listBien=$em->getRepository('AKImmobilierBundle:Bien')->findAll();
			}
			else 
			{
				$listBien=$em->getRepository('AKImmobilierBundle:Bien')->findBiens($localite,$type,$prixlocation);

			}
			// else
			// {
			// 	 $listBien=$em->createNotFoundException('aucyn bien pour ce critère');
			// }

		}
		else
		{
			$listBien=$em->getRepository('AKImmobilierBundle:Bien')->findAll();
			// $image=$listBien->getImages();
			// $response = new StreamedResponse(function () use ($image)
			// {
   //      		echo stream_get_contents($image);
   // 			});
   // 			$image=$response->headers->set('Content-Type', 'image/png');
		}

		$listType=$em->getRepository('AKImmobilierBundle:TypeBien')->findAll();

		$listLocalite=$em->getRepository('AKImmobilierBundle:Localite')->findAll();

		return $this->render('AKImmobilierBundle:Front:view.html.twig',array(
			'types'=>$listType,'localites'=>$listLocalite,'biens'=>$listBien));
    }
  
    public function searchBienAction(Request $request)
    {
    
        if( $request->isMethod('POST')) 
        {
            $localite=$request->get('localite');
            $typebien=$request->get('typebien');
            $prixlocation=$request->get('prixlocation');
            $rechercher=$request->get('rechercher');
            
            $bienRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AKImmobilierBundle:Bien');
            $biens = $bienRepo->findBiens($localite, $typebien, $prixlocation );

            return $this->render('AKImmobilierBundle:Front:search_bien.html.twig', array(
                'biens' => $biens
            // ...
            ));
        } 
            
    }


    public function localiteAction()
    {
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
        $local = $bienRepo->getLocalite();
      return $local;
    }

    public function ImageAction()
    {
       //$image=new Image();
        //$image=$bien->getImages();
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
         $image = $bienRepo->findImage();
      return $image;
    }

    public function typeAction()
    {
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
        $type = $bienRepo->gettype();
      return $type;
      
    }

   
    public function reserverAction(Request $request,$id)
    {
         
       $em = $this->getDoctrine()->getManager();
       $listbien = $em->getRepository('AKImmobilierBundle:Bien')->find($id);
       $client = new Client();
       $form = $this->createForm(ClientType::class, $client);

       if ($request->isMethod('POST')) 
       {
           if (isset($_POST['submit']))
            {
               $user = $em->getRepository('AKImmobilierBundle:Client')
               ->findBy(['email' => $_POST['login'], 'motdepasse' => $_POST['password']]);
               if ($user) {
                   $reserve = new Reservation();
                   $reserve->setDateReservation(new \DateTime());
                   $reserve->setEtat(0);
                   $reserve->setClient($user);
                   $reserve->setBien($listbien);
                   $em->persist($reserve);
                   $em->flush();

                   return $this->render('AKImmobilierBundle:Front:confirm.html.twig');
               }
           } 
           else
            {
               $form->HandleRequest($request);
               if ($form->isValid()) 
               {
                   $em->persist($client);

                   $reserv = new Reservation();
                   $reserv->setDateReservation(new \DateTime());
                   $reserv->setEtat(0);
                   $reserv->setClient($client);
                   $reserv->setBien($listbien);
                   $em->persist($reserv);
                   $em->flush();
               }

               return $this->render('AKImmobilierBundle:Front:confirm.html.twig');
           }
       }

       return $this->render('AKImmobilierBundle:Front:reserver.html.twig', array(
           'biens' => $listbien, 'form' => $form->createView(),
       ));
   
 }
 public function reservateBienAction()
    {
        return $this->render('AKImmobilierBundle:Front:reservate_bien.html.twig', array(
            // ...
        ));
    }
   
    public function detailsAction(Request $request){
        $em = $this
        ->getDoctrine()
        ->getManager();
        $reservations = $em->getRepository('AKImmobilierBundle:Reservation')->findAll();    
        return $this->render('AKImmobilierBundle:Front:details.html.twig', array(
        'reservations' => $reservations,
            ));
        }
    public function detailclientAction(Request $request,$id)
    {
        $em = $this
        ->getDoctrine()
        ->getManager();
        $reservation= $em->getRepository('AKImmobilierBundle:Reservation')->find($id);
        return $this->render('AKImmobilierBundle:Front:detailclient.html.twig', array(
            'reservations'=> $reservation
        ));

    }
    public function contratAction(Request $request,$id){
                $em = $this
        ->getDoctrine()
        ->getManager();
        $reservation= $em->getRepository('AKImmobilierBundle:Reservation')->find($id);

                if ($request->isMethod('POST'))
                {
                     $em = $this
                     ->getDoctrine()
                     ->getManager();
                     $client= $reservation->getClient();
                    //  echo $reservation->getClient()->getId()."-";
                    // echo $reservation->getBien()->getId();

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
                    $paiement = new Paiement();
                    $paiement->setDatePaiement(new \DateTime());
                    $paiement->setMontant($total);
                    $paiement->setPeriode("fevrier 2019");
                    $paiement->setContrat($contrat);
                    $em->persist($paiement);
                    $em->flush();


               }

           }



        return $this->render('AKImmobilierBundle:Front:contrat.html.twig', array(
            'reservations'=> $reservation
        ));
                        $em = $this
        ->getDoctrine()
        ->getManager();
        $reservation= $em->getRepository('AKImmobilierBundle:Reservation')->FindBy(array('id' => $id ));
        $text= $em->getRepository('AKImmobilierBundle:TextContrat')->FindAll();
                if ($request->isMethod('POST')){
            extract($_POST);
            $em = $this->getDoctrine()->getManager();
            $contrat = new Contrat();
            $contrat->setDateContrat(new \DateTime('now'));
            $contrat->setCaution($em->getRepository('AKImmobilierBundle:Bien')->find($id)->getPrixlocation()); 
            $contrat->setDuree("1 an");
            $contrat->setBien($em->getRepository('AKImmobilierBundle:Bien')->find($id));
            $em->persist($contrat);
            $em->flush();

            if ($contrat)
              {
                    $paiement = new Paiement();
                    $paiement->setDatePaiement(new \DateTime('now'));
                    $paiement->setMontant($em->getRepository('AKImmobilierBundle:Bien')->find($id)->getPrixlocation()); 
                    $paiement->setPeriode("fevrier 2019");
                    $paiement->setContrat($contrat);
                    $em->persist($paiement);
                    $em->flush();


               }
        }
         return $this->render('AKImmobilierBundle:Front:contrat.html.twig', array(
                                         'reservations' => $reservation, 'text' => $text
           ));

}

public function bienAction()
{
    return $this->render('AKImmobilierBundle:Front:bien.html.twig');
}

public function evolutionAction()
{
    return $this->render('AKImmobilierBundle:Front:evolution.html.twig');
}

public function registbienAction(Request $request)
    {
        $prop = new Proprietaire();
        $em = $this->getDoctrine()->getManager();
       // $bienencours = $em->getRepository('AKImmobilierBundle:Bienencours')->find($id);
       $propo= $em->getRepository('AKImmobilierBundle:Proprietaire');
       $form = $this->createForm(ProprietaireType::class, $prop);

       if ($request->isMethod('POST'))
       {
           if (isset($_POST['submit']))
            {
               $user = $em->getRepository('AKImmobilierBundle:Proprietaire')
               ->findBy(['email' => $_POST['login'], 'motdepasse' => $_POST['password']]);
               if ($user) {
                   $proposition = new Proposition();
                   $proposition->setDateprop(new \DateTime());
                   //$proposition->setEtat(0);
                   $proposition->setProprietaire($user);
                   //$proposition->setBienencours($bienencours);
                   $em->persist($proposition);
                   $em->flush();

                   return $this->redirectToRoute('enregistrerbien', array('id' => $proposition->getId()));
               }
           }
           else
            {
               $form->HandleRequest($request);
               if ($form->isValid())
               {
                   $em->persist($prop);

                   $proposition = new Proposition();
                   $proposition->setDateprop(new \DateTime());
                   //$proposition->setEtat(0);
                   $proposition->setProprietaire($prop);
                   //$proposition->setBienencours($bienencours);
                   $em->persist($proposition);
                   $em->flush();
               }

               return $this->redirectToRoute('enregistrerbien', array('id' => $proposition->getId()));
           }
       }

       return $this->render('AKImmobilierBundle:Front:registbien.html.twig', array(
           /* 'bienencours' => $bienencours */'form' => $form->createView(),
       ));

  }

  public function enregistrerbienAction(Request $request,$id)
  {
    $bien = new Bienencours();
    $em = $this->getDoctrine()->getManager();
    $proprietaire = $em-> getRepository('AKImmobilierBundle:Proprietaire')->find($id);
    $bienencours = $em->getRepository('AKImmobilierBundle:Bienencours')->find($id);
   $form = $this->createForm(BienencoursType::class, $bien);

   if ($request->isMethod('POST'))
   {
       if (isset($_POST['submit']))
        {
            
            $bien = new Bienencours();
            $proprietaire = $em-> getRepository('AKImmobilierBundle:Proprietaire')->find($id);
                //$bienencours->setDateprop(new \DateTime());
                //$proposition->setEtat(0);
                $bien->setProprietaire($proprietaire);
                //$bienencours->setBienencours($bienencours);
                //$bien->setEtat();
                $em->persist($bien);
                $em->flush();
 
                //return $this->redirectToRoute('enregistrerbien', array('id' => $proposition->getId()));
        }
       else
        {
           $form->HandleRequest($request);
           if ($form->isValid())
           {
               $em->persist($bien);

               $proposition = new Proposition();
               $proposition->setDateprop(new \DateTime());
               //$proposition->setEtat(0);
               $proposition->setProprietaire($proprietaire);
               $proposition->setBienencours($bienencours);
               $em->persist($proposition);
               $em->flush();
           }

           //return $this->redirectToRoute('enregistrerbien', array('id' => $proposition->getId()));
       }
   }

   return $this->render('AKImmobilierBundle:Front:enregistrerbien.html.twig', array(
       'bienencours' => $bienencours,'form' => $form->createView(),
   ));

  }

  public function viewAction(Request $request)
{
   	 
		$em=$this->getDoctrine()->getManager();

		if($request->isMethod('POST'))
		{
			$localite=$request->get('localite');
			$type=$request->get('type');
			$prixlocation=$request->get('prixlocation');

			if($localite=='' && $type=='' && $prixlocation=='')
			{
				$listBien=$em->getRepository('AKImmobilierBundle:Bien')->findAll();
			}
			else 
			{
				$listBien=$em->getRepository('AKImmobilierBundle:Bien')->findBiens($localite,$type,$prixlocation);

			}
			// else
			// {
			// 	 $listBien=$em->createNotFoundException('aucyn bien pour ce critère');
			// }

		}
		else
		{
			$listBien=$em->getRepository('AKImmobilierBundle:Bien')->findAll();
			// $image=$listBien->getImages();
			// $response = new StreamedResponse(function () use ($image)
			// {
   //      		echo stream_get_contents($image);
   // 			});
   // 			$image=$response->headers->set('Content-Type', 'image/png');
		}

		$listType=$em->getRepository('AKImmobilierBundle:Typebien')->findAll();

		$listLocalite=$em->getRepository('AKImmobilierBundle:Localite')->findAll();

		return $this->render('AKImmobilierBundle:Front:view.html.twig',array(
			'types'=>$listType,'localites'=>$listLocalite,'biens'=>$listBien));
    
}


/* public function ajaxLocaliteAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $localites = $em->getRepository('AKImmobilierBundle:Localite')->findAll();

    $lib = array();

    foreach ($localites as $key => $value) {
        $lib[] = array('nom' => $value->getLibelle(), 'id' => $value->getId());
    }

    return new JsonResponse($lib);
}


public function ajaxtypeAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $types = $em->getRepository('AKImmobilierBundle:Typebien')->findAll();

    $type = array();

    foreach ($types as $key => $value) {
        $type[] = array('nom' => $value->getLibelle(), 'id' => $value->getId());
    }

    return new JsonResponse($type);
}

public function ajaxAddSelectAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    if ($request->isMethod('POST')) {
        if ($request->get('Classe') == 'Localite') {
            $insert = new Localite();
        } else {
            $insert = new Typebien();
            $insert->setNiveau(0);
        }

        $insert->setLibelle($request->get('libelle'));
        $em->persist($insert);
        $em->flush();
    }

    return new Response('ok');
} */

}
   


