<?php

namespace FK\ImmoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use FK\ImmoBundle\Entity\Client;
use FK\ImmoBundle\Entity\Proprietaire;

class ApiController extends Controller
{
     /**
     * @Route("/addprop", name="addproprio")
     * @Method({"POST"})
    */
    public function addproprioAction(Request $request)
    
    {
        
        $data=$request->getContent();
      
        $prop = $this->get('jms_serializer')->deserialize($data, 'FK\ImmoBundle\Entity\Proprietaire', 'json');
        $em = $this->getDoctrine()->getManager();

        $em->persist($prop);
        $em->flush();

        return new Response('', Response::HTTP_CREATED);
                
    }
    /**
     * @Route("/proprio", name="allproprio")
     * @Method({"GET"})
    */
 public function allproprioAction()

 {
    $client = $this->getDoctrine()->getRepository('FKImmoBundle:Proprietaire')->findAll();
    if(count($client)==0)
    {
        $response =array(
            "code"=>false,
            "msg"=>"liste vide pas de clients",
            "error"=>null,
            "data"=>null);
            return new JsonResponse($response);
    }
    
        $data = $this->get('jms_serializer')->serialize($client, 'json');
        $response =array(
            "code"=>true,
            "msg"=>"liste des client",
            "error"=>null,
            "data"=>json_decode($data));
            
            return new JsonResponse($response,Response::HTTP_OK );
    
 }

/**
* @Route("/proprio/{id}", name="prop")
* @Method({"GET"})
*/
public function propAction(Proprietaire $client)
{
    $data = $this->get('jms_serializer')->serialize($client, 'json');
    $response = new Response($data);
    $response->headers->set('Content-Type', 'application/json');
    return $response;
}

// /**
// * @Route("prop/{id}", name="propshow")
// */
// public function propshowAction()
//  {

//     $prop = new Proprietaire();
//     $prop
//      ->setNumpiece('785')
//      ->setNomComplet('kali');

//     $data = $this->get('jms_serializer')->serialize($prop, 'json');
//     $response = new Response($data);
//     $response->headers->set('Content-Type', 'application/json');
//     return $response;
// }

   
 

    // public function deleteAction (Proprietaire $prop)
    // {
    //   $em=$this->getDoctrine()->getManager();
    //   $proprio=$em->getRepository('FKImmoBundle:Proprietaire')->findOneBy($prop);
    //   $em->remove($proprio);
    //   $em->flush();
    //     return new Response()
        

    // }
}
