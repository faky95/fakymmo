<?php

/* FKImmoBundle:Admin:viewType.html.twig */
class __TwigTemplate_b155d8ea1e0fd3baaecad81f1854ddc0a3de532db34126570ab191d9add3277c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "FKImmoBundle:Admin:viewType.html.twig", 2);
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
        $__internal_cac4ca408630bc438c80b39d6140a160976bb6a7038f1f9a8622ba9b4c5309e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac4ca408630bc438c80b39d6140a160976bb6a7038f1f9a8622ba9b4c5309e0->enter($__internal_cac4ca408630bc438c80b39d6140a160976bb6a7038f1f9a8622ba9b4c5309e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:viewType.html.twig"));

        $__internal_7f64e91ee4ab69331252d7d27153f380a4d950a8526714209deefc48e3a51254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f64e91ee4ab69331252d7d27153f380a4d950a8526714209deefc48e3a51254->enter($__internal_7f64e91ee4ab69331252d7d27153f380a4d950a8526714209deefc48e3a51254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:viewType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac4ca408630bc438c80b39d6140a160976bb6a7038f1f9a8622ba9b4c5309e0->leave($__internal_cac4ca408630bc438c80b39d6140a160976bb6a7038f1f9a8622ba9b4c5309e0_prof);

        
        $__internal_7f64e91ee4ab69331252d7d27153f380a4d950a8526714209deefc48e3a51254->leave($__internal_7f64e91ee4ab69331252d7d27153f380a4d950a8526714209deefc48e3a51254_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_586911dc06d9f632a51d884b4dfbddfdc9e3adee83b1502bd3f5d3b8173121cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586911dc06d9f632a51d884b4dfbddfdc9e3adee83b1502bd3f5d3b8173121cf->enter($__internal_586911dc06d9f632a51d884b4dfbddfdc9e3adee83b1502bd3f5d3b8173121cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4c096a94f6142101f62e74a05026225b5b401775a465fff68e4bfa723b986188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c096a94f6142101f62e74a05026225b5b401775a465fff68e4bfa723b986188->enter($__internal_4c096a94f6142101f62e74a05026225b5b401775a465fff68e4bfa723b986188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "

<link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

 ";
        
        $__internal_4c096a94f6142101f62e74a05026225b5b401775a465fff68e4bfa723b986188->leave($__internal_4c096a94f6142101f62e74a05026225b5b401775a465fff68e4bfa723b986188_prof);

        
        $__internal_586911dc06d9f632a51d884b4dfbddfdc9e3adee83b1502bd3f5d3b8173121cf->leave($__internal_586911dc06d9f632a51d884b4dfbddfdc9e3adee83b1502bd3f5d3b8173121cf_prof);

    }

    // line 12
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f5f976d14d2b76d2ea06ac718c0edbce0c5c53c281b6f79108719beb8f6de8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f976d14d2b76d2ea06ac718c0edbce0c5c53c281b6f79108719beb8f6de8c3->enter($__internal_f5f976d14d2b76d2ea06ac718c0edbce0c5c53c281b6f79108719beb8f6de8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_f87e19b346c5f65b8c21f2367d31c4506ab97597660f61e235375cfbaf9b0813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87e19b346c5f65b8c21f2367d31c4506ab97597660f61e235375cfbaf9b0813->enter($__internal_f87e19b346c5f65b8c21f2367d31c4506ab97597660f61e235375cfbaf9b0813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 13
        echo "<div class=\"container\">
<div class=\"col-12 \">
<table class=\"table\" id=\"table_id\" >
<h1 id=\"type\">Tableau Type de Bien</h1>

<thead>
<tr>
<th>Id</th>
<th>nom</th>
</tr>

</thead>
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["em"]) {
            // line 26
            echo "<tbody>
<tr>

<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "nomtype", array()), "html", null, true);
            echo "</td>

</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['em'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
 <style>
 
 #table_id{
     position:relative;
     left:300px;
     top:100px;
     width:800px;
 }
 #type{
     position:relative;
     left:300px;
     top:100px;
 }
 </style>

</tbody>
</table>
</div>

</div>
";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "
";
        
        $__internal_f87e19b346c5f65b8c21f2367d31c4506ab97597660f61e235375cfbaf9b0813->leave($__internal_f87e19b346c5f65b8c21f2367d31c4506ab97597660f61e235375cfbaf9b0813_prof);

        
        $__internal_f5f976d14d2b76d2ea06ac718c0edbce0c5c53c281b6f79108719beb8f6de8c3->leave($__internal_f5f976d14d2b76d2ea06ac718c0edbce0c5c53c281b6f79108719beb8f6de8c3_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84db2f6e983c08d2bbb86937b9ccaa99d64758c90f489949b261ee56427a72dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84db2f6e983c08d2bbb86937b9ccaa99d64758c90f489949b261ee56427a72dd->enter($__internal_84db2f6e983c08d2bbb86937b9ccaa99d64758c90f489949b261ee56427a72dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f3d4e0d8fa66d160dc525aa3543a6d4e8c8371f78055c98c4c9a2f7fe67a18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3d4e0d8fa66d160dc525aa3543a6d4e8c8371f78055c98c4c9a2f7fe67a18e->enter($__internal_7f3d4e0d8fa66d160dc525aa3543a6d4e8c8371f78055c98c4c9a2f7fe67a18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsakimo/akimo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7f3d4e0d8fa66d160dc525aa3543a6d4e8c8371f78055c98c4c9a2f7fe67a18e->leave($__internal_7f3d4e0d8fa66d160dc525aa3543a6d4e8c8371f78055c98c4c9a2f7fe67a18e_prof);

        
        $__internal_84db2f6e983c08d2bbb86937b9ccaa99d64758c90f489949b261ee56427a72dd->leave($__internal_84db2f6e983c08d2bbb86937b9ccaa99d64758c90f489949b261ee56427a72dd_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:viewType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 88,  159 => 58,  150 => 57,  139 => 90,  137 => 57,  114 => 36,  102 => 30,  98 => 29,  93 => 26,  89 => 25,  75 => 13,  66 => 12,  51 => 5,  42 => 4,  11 => 2,);
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
<h1 id=\"type\">Tableau Type de Bien</h1>

<thead>
<tr>
<th>Id</th>
<th>nom</th>
</tr>

</thead>
{% for em in types %}
<tbody>
<tr>

<td>{{em.id}}</td>
<td>{{em.nomtype}}</td>

</tr>


{%  endfor %}

 <style>
 
 #table_id{
     position:relative;
     left:300px;
     top:100px;
     width:800px;
 }
 #type{
     position:relative;
     left:300px;
     top:100px;
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


", "FKImmoBundle:Admin:viewType.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/viewType.html.twig");
    }
}
