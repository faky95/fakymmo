<?php

namespace FK\ImmoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FK\ImmoBundle\Entity\Contrat;
use FK\ImmoBundle\Entity\Proposition;
use FK\ImmoBundle\Form\PropositionType;

class AgentController extends Controller
{
    /**
     * @Route("/propo",name="viewPropo")
     */
    public function viewPropoAction()
    {
            $em=$this->getDoctrine()->getManager();
            $listpropo=$em->getRepository('FKImmoBundle:Proposition')->findBy(['etat'=>0]);
            return $this->render('FKImmoBundle:Agent:propo.html.twig', array(
              'propositions'=>$listpropo
            ));
         
    }

         /**
     * @Route("/contrat/{id}", name="contrat")
    */
public function validcontratAction(Request $request,$id)
{
    $em = $this
    ->getDoctrine()
    ->getManager();
    $proposition= $em->getRepository('FKImmoBundle:Proposition')->find($id);
    //$bien= $em->getRepository('FKImmoBundle:Bien')->find($id);
    $texte= $em->getRepository('FKImmoBundle:Texte')->findAll();

  
            
              

               // $duree=$request->get('duree');
                $contrat= new Contrat();
                $contrat->setDateContrat(new \DateTime());
                $contrat->setCaution(0);
                $contrat->setDuree("CDI");
                $contrat->setBien($proposition->getBien());
                $contrat->setProprietaire($proposition->getProprietaire());
                $em->persist($contrat);
                $em->flush();

                if($contrat)
                {

                    $proprietaire = $this->getDoctrine()->getManager()
                    ->getRepository('FKImmoBundle:Proposition');
                    $propo= $proprietaire->find($id); 
                    $snappy = $this->get('knp_snappy.pdf');
                    


                    $html=$this->renderView('FKImmoBundle:Agent:pdf1.html.twig',array('proprio'=>$propo));


                    $filename = 'ContratProprietairePDF';

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
      /**
     * @Route("/edit/{id}", name="edit")
    */
public function editAction (Request $request,$id)
{
    $propo=$this->getDoctrine()
    ->getManager()
    ->getRepository('FKImmoBundle:Proposition')
    ->find($id);
   // echo count($user->getRoles());
    $formpropo=$this->createForm(PropositionType::class,$propo);
    if($request->isMethod('POST'))
    {
        $formpropo->handleRequest($request);
        if($formpropo->isValid())
        {
            $this->getDoctrine()
            ->getManager()
            ->flush();
            return $this->redirectToRoute('viewPropo');
        }
    }
    return $this->render('FKImmoBundle:Agent:edit.html.twig', array(
        'form'=>$formpropo->createView()
    ));
        
}
  /**
     * @Route("/delete/{id}", name="delete")
    */
public function deleteAction (Proposition $propo)
{
  $em=$this->getDoctrine()->getManager();
  $em->remove($propo);
  $em->flush();
    return $this->redirectToRoute('viewPropo');
    

}

}
