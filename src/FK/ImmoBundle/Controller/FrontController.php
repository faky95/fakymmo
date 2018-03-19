<?php

namespace FK\ImmoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use FK\ImmoBundle\Entity\Bien;
use FK\ImmoBundle\Entity\Image;
use FK\ImmoBundle\Form\BienType;
use Symfony\Component\HttpFoundation\Response;
use FK\ImmoBundle\Entity\Client;
use FK\ImmoBundle\Form\ClientType;
use FK\ImmoBundle\Entity\Reservation;
use FK\ImmoBundle\Entity\Proprietaire;
use FK\ImmoBundle\Entity\Localite;
use FK\ImmoBundle\Entity\Type;
use FK\ImmoBundle\Entity\Proposition;

class FrontController extends Controller
{
	/**
     * @Route("/front", name="fk_immo")
    */
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
				$listBien=$em->getRepository('FKImmoBundle:Bien')->findAll();
			}
			else 
			{
				$listBien=$em->getRepository('FKImmoBundle:Bien')->findBiens($localite,$type,$prixlocation);

			}
			// else
			// {
			// 	 $listBien=$em->createNotFoundException('aucyn bien pour ce critère');
			// }

		}
		else
		{
			$listBien=$em->getRepository('FKImmoBundle:Bien')->findAll();
			// $image=$listBien->getImages();
			// $response = new StreamedResponse(function () use ($image)
			// {
   //      		echo stream_get_contents($image);
   // 			});
   // 			$image=$response->headers->set('Content-Type', 'image/png');
		}

		$listType=$em->getRepository('FKImmoBundle:Type')->findAll();

		$listLocalite=$em->getRepository('FKImmoBundle:Localite')->findAll();

		return $this->render('FKImmoBundle:Front:view.html.twig',array(
			'types'=>$listType,'localites'=>$listLocalite,'biens'=>$listBien));
    }

       /**
     * @Route("/front/reserver/{id}", name="reserver")
     */

    public function reserverAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $listbien = $em->getRepository('FKImmoBundle:Bien')->find($id);	
       // $listbien = $em->getRepository('AKImmobilierBundle:Bien')->findAll();
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        if ($request->isMethod('POST')) 
        {
            if (isset($_POST['submit']))
            {
                $login=$request->get('login');
                $pass=$request->get('password');
                $user = $em->getRepository('FKImmoBundle:Client')
                ->findBy(['login' => $login, 'password' => $pass]);
                if ($user) 
                {
                    $reserv = new Reservation();
                    //$client=$em->getRepository('AKImmobilierBundle:Client')->findBy(array('id'=>$user));
                    $reserv->setDateReservation(new \DateTime());
                    $reserv->setEtat(0);
                    $reserv->setClient($user);
                    $reserv->setBien($listbien);
                    $em->persist($reserv);
                    $em->flush();

                    return $this->render('FKImmoBundle:Front:confirm.html.twig');
                }
            } 
            else
             {
                $form->HandleRequest($request);
                if ($form->isValid()) {
                    $em->persist($client);

                    $reserv = new Reservation();
                    $reserv->setDateReservation(new \DateTime());
                    $reserv->setEtat(0);
                    $reserv->setClient($client);
                    $reserv->setBien($listbien);
                    $em->persist($reserv);
                    $em->flush();
                }

                return $this->render('FKImmoBundle:Front:confirm.html.twig');
            }
        }

        return $this->render('FKImmoBundle:Front:reserver.html.twig', array(
            'biens' => $listbien, 'form' => $form->createView(),
        ));
    }

       /**
     * @Route("/front/proprio", name="proprio")
     */
      public function insertProprio(Request $request)
      {
            $proprio=new Proprietaire ();
            //$typebien=new Type();
            //$localite=new Localite();
            $em=$this->getDoctrine()->getManager();
            $type=$em->getRepository('FKImmoBundle:Type')->findAll();
            $local=$em->getRepository('FKImmoBundle:Localite')->findAll();
            
            if($request->isMethod('POST'))
        {
                if(isset($_POST['save']))
                {
                    $numpiece=$request->get('numpiece');
                    $nomComplet=$request->get('nomComplet');
                    $login=$request->get('login');
                    $email=$request->get('email');
                    $adresse=$request->get('adresse');
                    $phone=$request->get('phone');
                    $password=$request->get('password');
                    $codebanque=$request->get('codebanque');
                   
                   
                    
                    $proprio->setNumpiece($numpiece);
                    $proprio->setNomComplet($nomComplet);
                    $proprio->setLogin($login);
                    $proprio->setEmail($email);
                    $proprio->setAdresse($adresse);
                    $proprio->setPhone($phone);
                    $proprio->setPassword($password);
                    $proprio->setCodebanque($codebanque);
                    $em->persist($proprio);
                    $em->flush();
                  
                    if($proprio)
                    {
                        $bien=new Bien();

                    //    $typebien=new Type();
                        $localite=new Localite();
                        $local=$localite->getId();
                    // $typebien= $bien->getTypebien();
                    // $localite= $bien->getLocalite();

                        $localite=new Localite ();

                        $nombien=$request->get('nombien');
                        $description=$request->get('description');
                        $montantProprio=$request->get('montantProprio');
                        $typebien=$request->get('type');
                       // $localite=$request->get('localite');
    
                        $bien->setNombien($nombien);
                        $bien->setDescription($description);
                        $bien->setEtat(2);
                        $bien->setPrixlocation($montantProprio);
                        $bien->setProprietaire($proprio);
                        // $bien->setTypebien($typebien);
                        // $bien->setLocalite($local);
                        $em->persist($bien);
                        $em->flush();
                    }
                    if($bien && $proprio)
                    {
                        
                        $proposition= new Proposition();
                        $proposition->setDateProposition(new \DateTime());
                        $proposition->setEtat(0);
                        $proposition->setProprietaire($proprio);
                        $proposition->setBien($bien);
                        $em->persist($proposition);
                        $em->flush();
                        return $this->redirectToRoute('fk_immo');
                    }
              
                }
              
                // return $this->render('FKImmoBundle:Front:proprio.html.twig', array(
            
                // ));

                  
        }
       
        return $this->render('FKImmoBundle:Front:proprio.html.twig', array(
            'types'=>$type,'locals'=>$local
            ));
        
       
         

      } 
       
         

	
}
