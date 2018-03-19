<?php

/* FKImmoBundle:Admin:contrat.html.twig */
class __TwigTemplate_5fa9e047dc649f68dddde3f186395300eefc6c3956326eb3c034d6f12546597d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "FKImmoBundle:Admin:contrat.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88849327090407d8604c473b95ef76fc100368406f80a342e690ea79eeedf08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88849327090407d8604c473b95ef76fc100368406f80a342e690ea79eeedf08f->enter($__internal_88849327090407d8604c473b95ef76fc100368406f80a342e690ea79eeedf08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:contrat.html.twig"));

        $__internal_e7e9febc37635a73b17a7bb59efdcfa6528a65fa81ae5d94c77f784e3aa0c029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e9febc37635a73b17a7bb59efdcfa6528a65fa81ae5d94c77f784e3aa0c029->enter($__internal_e7e9febc37635a73b17a7bb59efdcfa6528a65fa81ae5d94c77f784e3aa0c029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88849327090407d8604c473b95ef76fc100368406f80a342e690ea79eeedf08f->leave($__internal_88849327090407d8604c473b95ef76fc100368406f80a342e690ea79eeedf08f_prof);

        
        $__internal_e7e9febc37635a73b17a7bb59efdcfa6528a65fa81ae5d94c77f784e3aa0c029->leave($__internal_e7e9febc37635a73b17a7bb59efdcfa6528a65fa81ae5d94c77f784e3aa0c029_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_ea791cd903ec6848c31d4fb6d24172d1bc1757b506087e41ba173eb917c48865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea791cd903ec6848c31d4fb6d24172d1bc1757b506087e41ba173eb917c48865->enter($__internal_ea791cd903ec6848c31d4fb6d24172d1bc1757b506087e41ba173eb917c48865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_025b66c19c35bb9542ed9c7d83eab6edbd880a674f1e098ae92ceb03a282eccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025b66c19c35bb9542ed9c7d83eab6edbd880a674f1e098ae92ceb03a282eccb->enter($__internal_025b66c19c35bb9542ed9c7d83eab6edbd880a674f1e098ae92ceb03a282eccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "<h1 style=\"text-align:center;text-decoration:underline;\">  Contrat </h1>

    <div class=\"card\">
        
        <div class=\"card-body\">
            <h2 class=\"card-title\" style=\"text-align:center;text-decoration:underline;\">Informations locataire </h2>
            <div class=\"card-text\">
                <h3> CNI : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "numeropiece", array()), "html", null, true);
        echo " </h3>
                <h3> Nom : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "nomcomplet", array()), "html", null, true);
        echo " </h3>
                <h3> Login : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "login", array()), "html", null, true);
        echo "</h3>
                <h3> Email : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "email", array()), "html", null, true);
        echo "</h3>
                <h3> Telephone : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "phone", array()), "html", null, true);
        echo "</h3>
                </br>
                <h2 class=\"card-title\" style=\"text-align:center;text-decoration:underline;\">Informations Bien </h2>
                <h3> Bien : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "nombien", array()), "html", null, true);
        echo " </h3>
                <h3> Description : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "description", array()), "html", null, true);
        echo " </h3>
                <h3> Prix : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "prixlocation", array()), "html", null, true);
        echo "</h3>
                <h3> Localite : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "localite", array()), "html", null, true);
        echo "</h3>
                </br>
            <form method=\"POST\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdf", array("id" => $this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "id", array()))), "html", null, true);
        echo "\">
        <h3>   Caution </h3> <input type=\"number\" name=\"caution\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "Bien", array()), "prixlocation", array()), "html", null, true);
        echo "\"><br>
        <h3>   Mensualite </h3> <input type=\"number\" name=\"mensualite\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "Bien", array()), "prixlocation", array()), "html", null, true);
        echo "\"><br>
        <h3>  Total  </h3> <input type=\"number\" name=\"total\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "Bien", array()), "prixlocation", array()) * 2), "html", null, true);
        echo "\"><br>
        <h3> Terme du Contrat </h3>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["texte"] ?? $this->getContext($context, "texte")));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 30
            echo "            <textarea>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "texte", array()), "html", null, true);
            echo "</textarea><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            <strong>
            <input type=\"checkbox\" name=\"duree\"> contrat d'une durée d'un an
            </strong><br>
            <strong>Accepter </strong>: <input type=\"radio\" name=\"ra\" id=\"oui\" >
        <strong> Refuser </strng>: <input type=\"radio\" name=\"ra\" id=\"non\"><br>

            <input class=\"btn btn-info\" type=\"submit\" name=\"submit\" value=\"Enregistrer\" id=\"enregister\" >
            </form>
       
            </div>
           
        </div>
    </div>

  




";
        // line 51
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "
";
        
        $__internal_025b66c19c35bb9542ed9c7d83eab6edbd880a674f1e098ae92ceb03a282eccb->leave($__internal_025b66c19c35bb9542ed9c7d83eab6edbd880a674f1e098ae92ceb03a282eccb_prof);

        
        $__internal_ea791cd903ec6848c31d4fb6d24172d1bc1757b506087e41ba173eb917c48865->leave($__internal_ea791cd903ec6848c31d4fb6d24172d1bc1757b506087e41ba173eb917c48865_prof);

    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57fddbde40f745b75de23e96aeb4a5682a2d11201b2ade5f2963238a48b671fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fddbde40f745b75de23e96aeb4a5682a2d11201b2ade5f2963238a48b671fe->enter($__internal_57fddbde40f745b75de23e96aeb4a5682a2d11201b2ade5f2963238a48b671fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_24d82f47026651d0765b7c224112f228740373f2727ff95240d9f9be3d245f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d82f47026651d0765b7c224112f228740373f2727ff95240d9f9be3d245f10->enter($__internal_24d82f47026651d0765b7c224112f228740373f2727ff95240d9f9be3d245f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 52
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
.card
{
   
   width:500px;
   margin-left:500px;
   margin-top:20px;
  
   box-shadow:10px 10px 10px ;
 
}

</style>
";
        
        $__internal_24d82f47026651d0765b7c224112f228740373f2727ff95240d9f9be3d245f10->leave($__internal_24d82f47026651d0765b7c224112f228740373f2727ff95240d9f9be3d245f10_prof);

        
        $__internal_57fddbde40f745b75de23e96aeb4a5682a2d11201b2ade5f2963238a48b671fe->leave($__internal_57fddbde40f745b75de23e96aeb4a5682a2d11201b2ade5f2963238a48b671fe_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_050d0d3b6aae7daf52eb0e24d577cfe420a0bf43f8ff104517ead89bf562d7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050d0d3b6aae7daf52eb0e24d577cfe420a0bf43f8ff104517ead89bf562d7c9->enter($__internal_050d0d3b6aae7daf52eb0e24d577cfe420a0bf43f8ff104517ead89bf562d7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0c6486de9cbb30ce67558b0a5654b529005e49b0023a23535e050cc1c6bfed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6486de9cbb30ce67558b0a5654b529005e49b0023a23535e050cc1c6bfed4c->enter($__internal_0c6486de9cbb30ce67558b0a5654b529005e49b0023a23535e050cc1c6bfed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
\$(document).ready(function()
{
    
  \$('input:submit').prop(\"disabled\" , true);
  \$('#oui').on('click',function()
  {
       \$('input:submit').prop(\"disabled\" , false);
  });
  \$('#non').on('click',function()
  {
      \$('input:submit').prop(\"disabled\" , true);
  });
});
</script>
";
        
        $__internal_0c6486de9cbb30ce67558b0a5654b529005e49b0023a23535e050cc1c6bfed4c->leave($__internal_0c6486de9cbb30ce67558b0a5654b529005e49b0023a23535e050cc1c6bfed4c_prof);

        
        $__internal_050d0d3b6aae7daf52eb0e24d577cfe420a0bf43f8ff104517ead89bf562d7c9->leave($__internal_050d0d3b6aae7daf52eb0e24d577cfe420a0bf43f8ff104517ead89bf562d7c9_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 69,  202 => 68,  177 => 52,  168 => 51,  157 => 86,  155 => 68,  152 => 67,  150 => 51,  129 => 32,  120 => 30,  116 => 29,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  51 => 5,  42 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}

{# {% block title %}Détail-Contrat{% endblock %} #}
{% block main %}
<h1 style=\"text-align:center;text-decoration:underline;\">  Contrat </h1>

    <div class=\"card\">
        
        <div class=\"card-body\">
            <h2 class=\"card-title\" style=\"text-align:center;text-decoration:underline;\">Informations locataire </h2>
            <div class=\"card-text\">
                <h3> CNI : {{reservations.client.numeropiece}} </h3>
                <h3> Nom : {{reservations.client.nomcomplet}} </h3>
                <h3> Login : {{reservations.client.login}}</h3>
                <h3> Email : {{reservations.client.email}}</h3>
                <h3> Telephone : {{reservations.client.phone}}</h3>
                </br>
                <h2 class=\"card-title\" style=\"text-align:center;text-decoration:underline;\">Informations Bien </h2>
                <h3> Bien : {{reservations.bien.nombien}} </h3>
                <h3> Description : {{reservations.bien.description}} </h3>
                <h3> Prix : {{reservations.bien.prixlocation}}</h3>
                <h3> Localite : {{reservations.bien.localite}}</h3>
                </br>
            <form method=\"POST\" action=\"{{path('pdf',{'id':reservations.id})}}\">
        <h3>   Caution </h3> <input type=\"number\" name=\"caution\" value=\"{{ reservations.Bien.prixlocation}}\"><br>
        <h3>   Mensualite </h3> <input type=\"number\" name=\"mensualite\" value=\"{{ reservations.Bien.prixlocation}}\"><br>
        <h3>  Total  </h3> <input type=\"number\" name=\"total\" value=\"{{ reservations.Bien.prixlocation * 2}}\"><br>
        <h3> Terme du Contrat </h3>
            {% for text in texte %}
            <textarea>{{text.texte}}</textarea><br>
            {% endfor %}
            <strong>
            <input type=\"checkbox\" name=\"duree\"> contrat d'une durée d'un an
            </strong><br>
            <strong>Accepter </strong>: <input type=\"radio\" name=\"ra\" id=\"oui\" >
        <strong> Refuser </strng>: <input type=\"radio\" name=\"ra\" id=\"non\"><br>

            <input class=\"btn btn-info\" type=\"submit\" name=\"submit\" value=\"Enregistrer\" id=\"enregister\" >
            </form>
       
            </div>
           
        </div>
    </div>

  




{% block stylesheets %}
{{ parent() }}
<style>
.card
{
   
   width:500px;
   margin-left:500px;
   margin-top:20px;
  
   box-shadow:10px 10px 10px ;
 
}

</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
\$(document).ready(function()
{
    
  \$('input:submit').prop(\"disabled\" , true);
  \$('#oui').on('click',function()
  {
       \$('input:submit').prop(\"disabled\" , false);
  });
  \$('#non').on('click',function()
  {
      \$('input:submit').prop(\"disabled\" , true);
  });
});
</script>
{% endblock %}

{% endblock %}", "FKImmoBundle:Admin:contrat.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/contrat.html.twig");
    }
}
