<?php

/* FKImmoBundle:Admin:pdf.html.twig */
class __TwigTemplate_b1c3f8c692916b9279fa988ac6f4c5592ebfb740007f024dfc0ec2bbbdb771e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a82afdf47640d7b52a4cde336dd2751f51dddd083cbe733d8707561f2fd54af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82afdf47640d7b52a4cde336dd2751f51dddd083cbe733d8707561f2fd54af7->enter($__internal_a82afdf47640d7b52a4cde336dd2751f51dddd083cbe733d8707561f2fd54af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:pdf.html.twig"));

        $__internal_23ae76ba57d92e51727411d57468a5bbab4adcef866c27294e2a30f7bac8f7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ae76ba57d92e51727411d57468a5bbab4adcef866c27294e2a30f7bac8f7b7->enter($__internal_23ae76ba57d92e51727411d57468a5bbab4adcef866c27294e2a30f7bac8f7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:pdf.html.twig"));

        // line 1
        echo "
                 <h4 class=\"card-title\" style=\"text-align:center;text-decoration:underline;\">CONTRAT LOCATION </h4>
        
                 <p class=\"card-text\">
                           <h3>Vue la loi n° 89-462 du 6 juillet 1989
          modifiée par la loi n° 94-624 du 21 juillet 1994 et par la loi n° 2002-73 du 18 janvier</h3>
                    <strong> Entre les soussigné : </strong>
                         Mrs ou Mme : <strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "client", array()), "nomcomplet", array()), "html", null, true);
        echo "</strong> </br> 
         Dont le numéro de téléphone est : <strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "client", array()), "phone", array()), "html", null, true);
        echo "</strong></br>  
         Avec comme Email : <strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "client", array()), "email", array()), "html", null, true);
        echo "</strong></br>

         CI-APRÈS DÉNOMMÉ LE LOCATAIRE, d'autre part l'Agence immobilier AK1/2 IMMO. 
        Il a été arrêté et convenu ce qui suit, le bailleur louant les locaux et équipements ci-après, désignés, au locataire qui les accepte aux conditions suivantes. Le locataire déclare bien connaître les lieux loués pour les avoir visités.
                 <h3> DÉSIGNATION</h3>
              Le bien <strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "bien", array()), "nombien", array()), "html", null, true);
        echo " </strong> <br>
              dont la description est <strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "bien", array()), "description", array()), "html", null, true);
        echo "</strong> <br>
              se trouvant à <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "bien", array()), "localite", array()), "html", null, true);
        echo " </strong> <br>
               1) <strong> DÉPÔT DE GARANTIE </strong> <br>
          Le montant du dépôt de garantie est indiqué aux CONDITIONS PARTICULIÈRES du présent contrat. Il ne peut excéder deux mois du loyer principal. 
          Il n'est ni révisable ni productif d'intérêt. 
          Il est destiné à être remboursé au locataire sortant dans les DEUX MOIS de son départ effectif, déduction faite des sommes restant dues au bailleur ou dont celui-ci pourrait être tenu au lieu et place du locataire. 
          A défaut de restitution dans le délai prévu, le solde du dépôt de garantie restant dû au locataire est productif d'intérêts courant au taux légal. <br>
          2)<strong> CAUTIONNEMENT </strong> <br>
          Le bailleur peut souhaiter qu'un tiers se porte caution en garantissant l'exécution des obligations du contrat de location en cas de défaillance éventuelle du locataire. 
          Le tiers qui se porte caution doit indiquer de sa main sur l'acte de caution le montant du loyer, les conditions de sa révision, le cas échéant, reconnaître la nature et l'importance de l'engagement, indiquer la durée de l'engagement. 
          A défaut d'indication de durée, ou si celle-ci est stipulée indéterminée la caution peut résilier unilatéralement son engagement. Cette résiliation après avoir été notifiée au bailleur prend effet au terme du contrat de location, soit à la fin du contrat initial, ou renouvelé, ou tacitement reconduit. <br>
          3)<strong> CLAUSE RÉSOLUTOIRE </strong> <br> 
          Il est expressément convenu qu'à défaut de paiement au terme convenu de tout ou partie du loyer des charges, du dépôt de garantie, et DEUX MOIS après un commandement de payer demeuré infructueux, la présente location sera résiliée de plein droit si bon semble au bailleur, sans aucune formalité judiciaire. 
          Un commandement visant le défaut d'assurance des risques locatifs aura les mêmes effets passé le délai d'UN MOIS. L'occupant déchu de ses droits locatifs qui se refusera à restituer les lieux, pourra être expulsé sur simple ordonnance du juge des référés, exécutoire par provision nonobstant appel. <br>
          4)<strong> CLAUSE PÉNALE </strong> <br>
          En cas de non paiement du loyer ou de ses accessoires et dès le premier acte d'huissier, le locataire devra payer en sus des frais de recouvrement et sans préjudice de l'application de I article 700 du Nouveau Code de Procédure Civile, une indemnité égale à dix pour cent de la totalité des sommes dues au bailleur. 
          En cas d'occupation des lieux après la cessation du bail, il sera dû par l'occupant jusqu'à son expulsion, une indemnité égale au double du loyer et des charges contractuels. 
          En cas de résiliation du bail aux torts du locataire, le dépôt de garantie restera acquis au bailleur à titre d'indemnité conventionnelle. <br>
          5)<strong> ÉTAT DES LIEUX </strong> <br>
          A défaut d'état d'entrée ou de sortie des lieux établi volontairement et contradictoirement, la partie la plus diligente est en droit d'en faire dresser un par huissier, à frais partagés. 
          A défaut d'état des lieux, la présomption de l'article 1731 du Code Civil ne peut être invoquée par celle des parties qui a fait obstacle à son établissement. 
          Pendant le premier mois de la période de chauffe, le locataire peut demander que l'état des lieux soit complété par l'état des éléments de chauffage. <br>
          6)<strong> ÉLECTION DE DOMICILE </strong> <br>
          Pour l'exécution des obligations visées au présent contrat, le bailleur fait élection de domicile en sa demeure et le locataire dans les lieux loués. <br>
          7)<strong> FRAIS ET HONORAIRES </strong> <br>
          Tous les frais et honoraires de négociation, de rédaction, d'enregistrement, d'état des lieux, sont supportés par moitié entre les parties et payables directement par chacune d'elles au mandataire ou prestataire de service. 


                 </p>
              
            
        
";
        
        $__internal_a82afdf47640d7b52a4cde336dd2751f51dddd083cbe733d8707561f2fd54af7->leave($__internal_a82afdf47640d7b52a4cde336dd2751f51dddd083cbe733d8707561f2fd54af7_prof);

        
        $__internal_23ae76ba57d92e51727411d57468a5bbab4adcef866c27294e2a30f7bac8f7b7->leave($__internal_23ae76ba57d92e51727411d57468a5bbab4adcef866c27294e2a30f7bac8f7b7_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  54 => 16,  50 => 15,  42 => 10,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
                 <h4 class=\"card-title\" style=\"text-align:center;text-decoration:underline;\">CONTRAT LOCATION </h4>
        
                 <p class=\"card-text\">
                           <h3>Vue la loi n° 89-462 du 6 juillet 1989
          modifiée par la loi n° 94-624 du 21 juillet 1994 et par la loi n° 2002-73 du 18 janvier</h3>
                    <strong> Entre les soussigné : </strong>
                         Mrs ou Mme : <strong>{{client.client.nomcomplet}}</strong> </br> 
         Dont le numéro de téléphone est : <strong>{{client.client.phone}}</strong></br>  
         Avec comme Email : <strong>{{client.client.email}}</strong></br>

         CI-APRÈS DÉNOMMÉ LE LOCATAIRE, d'autre part l'Agence immobilier AK1/2 IMMO. 
        Il a été arrêté et convenu ce qui suit, le bailleur louant les locaux et équipements ci-après, désignés, au locataire qui les accepte aux conditions suivantes. Le locataire déclare bien connaître les lieux loués pour les avoir visités.
                 <h3> DÉSIGNATION</h3>
              Le bien <strong> {{client.bien.nombien}} </strong> <br>
              dont la description est <strong> {{client.bien.description}}</strong> <br>
              se trouvant à <strong>{{client.bien.localite}} </strong> <br>
               1) <strong> DÉPÔT DE GARANTIE </strong> <br>
          Le montant du dépôt de garantie est indiqué aux CONDITIONS PARTICULIÈRES du présent contrat. Il ne peut excéder deux mois du loyer principal. 
          Il n'est ni révisable ni productif d'intérêt. 
          Il est destiné à être remboursé au locataire sortant dans les DEUX MOIS de son départ effectif, déduction faite des sommes restant dues au bailleur ou dont celui-ci pourrait être tenu au lieu et place du locataire. 
          A défaut de restitution dans le délai prévu, le solde du dépôt de garantie restant dû au locataire est productif d'intérêts courant au taux légal. <br>
          2)<strong> CAUTIONNEMENT </strong> <br>
          Le bailleur peut souhaiter qu'un tiers se porte caution en garantissant l'exécution des obligations du contrat de location en cas de défaillance éventuelle du locataire. 
          Le tiers qui se porte caution doit indiquer de sa main sur l'acte de caution le montant du loyer, les conditions de sa révision, le cas échéant, reconnaître la nature et l'importance de l'engagement, indiquer la durée de l'engagement. 
          A défaut d'indication de durée, ou si celle-ci est stipulée indéterminée la caution peut résilier unilatéralement son engagement. Cette résiliation après avoir été notifiée au bailleur prend effet au terme du contrat de location, soit à la fin du contrat initial, ou renouvelé, ou tacitement reconduit. <br>
          3)<strong> CLAUSE RÉSOLUTOIRE </strong> <br> 
          Il est expressément convenu qu'à défaut de paiement au terme convenu de tout ou partie du loyer des charges, du dépôt de garantie, et DEUX MOIS après un commandement de payer demeuré infructueux, la présente location sera résiliée de plein droit si bon semble au bailleur, sans aucune formalité judiciaire. 
          Un commandement visant le défaut d'assurance des risques locatifs aura les mêmes effets passé le délai d'UN MOIS. L'occupant déchu de ses droits locatifs qui se refusera à restituer les lieux, pourra être expulsé sur simple ordonnance du juge des référés, exécutoire par provision nonobstant appel. <br>
          4)<strong> CLAUSE PÉNALE </strong> <br>
          En cas de non paiement du loyer ou de ses accessoires et dès le premier acte d'huissier, le locataire devra payer en sus des frais de recouvrement et sans préjudice de l'application de I article 700 du Nouveau Code de Procédure Civile, une indemnité égale à dix pour cent de la totalité des sommes dues au bailleur. 
          En cas d'occupation des lieux après la cessation du bail, il sera dû par l'occupant jusqu'à son expulsion, une indemnité égale au double du loyer et des charges contractuels. 
          En cas de résiliation du bail aux torts du locataire, le dépôt de garantie restera acquis au bailleur à titre d'indemnité conventionnelle. <br>
          5)<strong> ÉTAT DES LIEUX </strong> <br>
          A défaut d'état d'entrée ou de sortie des lieux établi volontairement et contradictoirement, la partie la plus diligente est en droit d'en faire dresser un par huissier, à frais partagés. 
          A défaut d'état des lieux, la présomption de l'article 1731 du Code Civil ne peut être invoquée par celle des parties qui a fait obstacle à son établissement. 
          Pendant le premier mois de la période de chauffe, le locataire peut demander que l'état des lieux soit complété par l'état des éléments de chauffage. <br>
          6)<strong> ÉLECTION DE DOMICILE </strong> <br>
          Pour l'exécution des obligations visées au présent contrat, le bailleur fait élection de domicile en sa demeure et le locataire dans les lieux loués. <br>
          7)<strong> FRAIS ET HONORAIRES </strong> <br>
          Tous les frais et honoraires de négociation, de rédaction, d'enregistrement, d'état des lieux, sont supportés par moitié entre les parties et payables directement par chacune d'elles au mandataire ou prestataire de service. 


                 </p>
              
            
        
", "FKImmoBundle:Admin:pdf.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/pdf.html.twig");
    }
}
