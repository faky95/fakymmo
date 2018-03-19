<?php

/* FKImmoBundle:Admin:viewLocalite.html.twig */
class __TwigTemplate_e50da8f1972e7de4f31d3eccc5850c49ff7094b88e18679aac9fd187c10b92eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "FKImmoBundle:Admin:viewLocalite.html.twig", 2);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ba929000c2ad3c9ea480d9399ad4c4321b0465bc2030c9dbbf3ded4a3c33a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba929000c2ad3c9ea480d9399ad4c4321b0465bc2030c9dbbf3ded4a3c33a55->enter($__internal_7ba929000c2ad3c9ea480d9399ad4c4321b0465bc2030c9dbbf3ded4a3c33a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:viewLocalite.html.twig"));

        $__internal_9b33289417d7b7173323a9d302c26fe83683c9746630c0a7b1b5290e2800322d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b33289417d7b7173323a9d302c26fe83683c9746630c0a7b1b5290e2800322d->enter($__internal_9b33289417d7b7173323a9d302c26fe83683c9746630c0a7b1b5290e2800322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:viewLocalite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba929000c2ad3c9ea480d9399ad4c4321b0465bc2030c9dbbf3ded4a3c33a55->leave($__internal_7ba929000c2ad3c9ea480d9399ad4c4321b0465bc2030c9dbbf3ded4a3c33a55_prof);

        
        $__internal_9b33289417d7b7173323a9d302c26fe83683c9746630c0a7b1b5290e2800322d->leave($__internal_9b33289417d7b7173323a9d302c26fe83683c9746630c0a7b1b5290e2800322d_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9d2b80a4309d01d590632b531c58114cd783b96998490467846d00326f365383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2b80a4309d01d590632b531c58114cd783b96998490467846d00326f365383->enter($__internal_9d2b80a4309d01d590632b531c58114cd783b96998490467846d00326f365383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2478a0761ea42b89cb466801d2c32e7a5ecfb64a50ada974f815b7ec44e80181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2478a0761ea42b89cb466801d2c32e7a5ecfb64a50ada974f815b7ec44e80181->enter($__internal_2478a0761ea42b89cb466801d2c32e7a5ecfb64a50ada974f815b7ec44e80181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "

<link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

 ";
        
        $__internal_2478a0761ea42b89cb466801d2c32e7a5ecfb64a50ada974f815b7ec44e80181->leave($__internal_2478a0761ea42b89cb466801d2c32e7a5ecfb64a50ada974f815b7ec44e80181_prof);

        
        $__internal_9d2b80a4309d01d590632b531c58114cd783b96998490467846d00326f365383->leave($__internal_9d2b80a4309d01d590632b531c58114cd783b96998490467846d00326f365383_prof);

    }

    // line 12
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ca873fbb935a3da6d6ac813ec8d1d6b1d6fd039cd73025c9411af74e2aee1aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca873fbb935a3da6d6ac813ec8d1d6b1d6fd039cd73025c9411af74e2aee1aaf->enter($__internal_ca873fbb935a3da6d6ac813ec8d1d6b1d6fd039cd73025c9411af74e2aee1aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_2172e609f2ed362ce0c90997f05933c608a800f86638053ef3153de201e7d42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2172e609f2ed362ce0c90997f05933c608a800f86638053ef3153de201e7d42e->enter($__internal_2172e609f2ed362ce0c90997f05933c608a800f86638053ef3153de201e7d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 13
        echo "<div class=\"container\">
<div class=\"col-12 \">

<table class=\"table\" id=\"table_id\" >
<thead>
<tr>
<th>Id</th>
<th>nom</th>
</tr>

</thead>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localite"] ?? $this->getContext($context, "localite")));
        foreach ($context['_seq'] as $context["_key"] => $context["em"]) {
            // line 25
            echo "<tbody>
<tr>

<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "nomlocal", array()), "html", null, true);
            echo "</td>

</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['em'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "<style>
 
 #table_id{
     position:relative;
     left:300px;
     top:200px;
     width:800px;
 }
 </style>
</tbody>
</table>
</div>

</div>
";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
";
        
        $__internal_2172e609f2ed362ce0c90997f05933c608a800f86638053ef3153de201e7d42e->leave($__internal_2172e609f2ed362ce0c90997f05933c608a800f86638053ef3153de201e7d42e_prof);

        
        $__internal_ca873fbb935a3da6d6ac813ec8d1d6b1d6fd039cd73025c9411af74e2aee1aaf->leave($__internal_ca873fbb935a3da6d6ac813ec8d1d6b1d6fd039cd73025c9411af74e2aee1aaf_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f751fbc0766ef50d159b2589beb9fa095feaf9571db15d85315019c60c4bdfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f751fbc0766ef50d159b2589beb9fa095feaf9571db15d85315019c60c4bdfa4->enter($__internal_f751fbc0766ef50d159b2589beb9fa095feaf9571db15d85315019c60c4bdfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4b2161ae437d9d130025f0af35d7ac531b3ccae284a18b7a3e8e30f5b11ae93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b2161ae437d9d130025f0af35d7ac531b3ccae284a18b7a3e8e30f5b11ae93->enter($__internal_d4b2161ae437d9d130025f0af35d7ac531b3ccae284a18b7a3e8e30f5b11ae93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
<script type=\"text/javascript\">
   \$(document).ready(function(){
       \$('#table_id').DataTable( {
           \"language\":{
                        \"sProcessing\":     \"Traitement en cours...\",
                        \"sSearch\":         \"Rechercher&nbsp;:\",
                        \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                        \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                        \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                        \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                        \"sInfoPostFix\":    \"\",
                        \"sLoadingRecords\": \"Chargement en cours...\",
                        \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                        \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
                        \"oPaginate\": {
                            \"sFirst\":      \"Premier\",
                            \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                            \"sNext\":       \"Suivant\",
                            \"sLast\":       \"Dernier\"
                        },
                        \"oAria\": {
                            \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                            \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                        }
                    }
       });
   })
   </script>
     <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsakimo/akimo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d4b2161ae437d9d130025f0af35d7ac531b3ccae284a18b7a3e8e30f5b11ae93->leave($__internal_d4b2161ae437d9d130025f0af35d7ac531b3ccae284a18b7a3e8e30f5b11ae93_prof);

        
        $__internal_f751fbc0766ef50d159b2589beb9fa095feaf9571db15d85315019c60c4bdfa4->leave($__internal_f751fbc0766ef50d159b2589beb9fa095feaf9571db15d85315019c60c4bdfa4_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:viewLocalite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 80,  151 => 50,  142 => 49,  131 => 82,  129 => 49,  113 => 35,  101 => 29,  97 => 28,  92 => 25,  88 => 24,  75 => 13,  66 => 12,  51 => 5,  42 => 4,  11 => 2,);
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
{% extends \"::layout.html.twig\" %}

{% block stylesheet %}
{{ parent() }}

<link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

 {% endblock %}


{% block contenu %}
<div class=\"container\">
<div class=\"col-12 \">

<table class=\"table\" id=\"table_id\" >
<thead>
<tr>
<th>Id</th>
<th>nom</th>
</tr>

</thead>
{% for em in localite %}
<tbody>
<tr>

<td>{{em.id}}</td>
<td>{{em.nomlocal}}</td>

</tr>


{%  endfor %}
<style>
 
 #table_id{
     position:relative;
     left:300px;
     top:200px;
     width:800px;
 }
 </style>
</tbody>
</table>
</div>

</div>
{% block javascripts %}
{{ parent() }}
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
<script type=\"text/javascript\">
   \$(document).ready(function(){
       \$('#table_id').DataTable( {
           \"language\":{
                        \"sProcessing\":     \"Traitement en cours...\",
                        \"sSearch\":         \"Rechercher&nbsp;:\",
                        \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                        \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                        \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                        \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                        \"sInfoPostFix\":    \"\",
                        \"sLoadingRecords\": \"Chargement en cours...\",
                        \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                        \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
                        \"oPaginate\": {
                            \"sFirst\":      \"Premier\",
                            \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                            \"sNext\":       \"Suivant\",
                            \"sLast\":       \"Dernier\"
                        },
                        \"oAria\": {
                            \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                            \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                        }
                    }
       });
   })
   </script>
     <script type=\"text/javascript\" src=\"{{ asset('jsakimo/akimo.js') }}\"></script>
{% endblock %}

{% endblock %}


", "FKImmoBundle:Admin:viewLocalite.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/viewLocalite.html.twig");
    }
}
