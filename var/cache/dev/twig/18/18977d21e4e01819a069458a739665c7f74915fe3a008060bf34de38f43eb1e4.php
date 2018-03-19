<?php

/* FKImmoBundle:Admin:viewBien.html.twig */
class __TwigTemplate_d7432d91eb1d8238159be492ef61347b9df4591b2f14b37bb2920ee14a06e2ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "FKImmoBundle:Admin:viewBien.html.twig", 2);
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
        $__internal_a4cbf6cde0682ebd31637ec5144048e696ca84ebace5b329b693217205e225d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cbf6cde0682ebd31637ec5144048e696ca84ebace5b329b693217205e225d4->enter($__internal_a4cbf6cde0682ebd31637ec5144048e696ca84ebace5b329b693217205e225d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:viewBien.html.twig"));

        $__internal_b7172000f90d2f7ea08619989c3de877147c39a88f8fb4ef3d88cc05343e5429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7172000f90d2f7ea08619989c3de877147c39a88f8fb4ef3d88cc05343e5429->enter($__internal_b7172000f90d2f7ea08619989c3de877147c39a88f8fb4ef3d88cc05343e5429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:viewBien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4cbf6cde0682ebd31637ec5144048e696ca84ebace5b329b693217205e225d4->leave($__internal_a4cbf6cde0682ebd31637ec5144048e696ca84ebace5b329b693217205e225d4_prof);

        
        $__internal_b7172000f90d2f7ea08619989c3de877147c39a88f8fb4ef3d88cc05343e5429->leave($__internal_b7172000f90d2f7ea08619989c3de877147c39a88f8fb4ef3d88cc05343e5429_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e42cc01bd6bbd80bafe717f5d8d88f45504ce866ff376774008c5400fd2a6f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42cc01bd6bbd80bafe717f5d8d88f45504ce866ff376774008c5400fd2a6f71->enter($__internal_e42cc01bd6bbd80bafe717f5d8d88f45504ce866ff376774008c5400fd2a6f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_c00677f21fa65afcfe793bef95a035e0ca0aa383ddb2fa8bf1696ee4dd079521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00677f21fa65afcfe793bef95a035e0ca0aa383ddb2fa8bf1696ee4dd079521->enter($__internal_c00677f21fa65afcfe793bef95a035e0ca0aa383ddb2fa8bf1696ee4dd079521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<!-- DataTables -->
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


<link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

 ";
        
        $__internal_c00677f21fa65afcfe793bef95a035e0ca0aa383ddb2fa8bf1696ee4dd079521->leave($__internal_c00677f21fa65afcfe793bef95a035e0ca0aa383ddb2fa8bf1696ee4dd079521_prof);

        
        $__internal_e42cc01bd6bbd80bafe717f5d8d88f45504ce866ff376774008c5400fd2a6f71->leave($__internal_e42cc01bd6bbd80bafe717f5d8d88f45504ce866ff376774008c5400fd2a6f71_prof);

    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_bb05bd0d9d968eb33872447d1e5b3574f1fd5dd3c1479ee3653f8476f380e64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb05bd0d9d968eb33872447d1e5b3574f1fd5dd3c1479ee3653f8476f380e64f->enter($__internal_bb05bd0d9d968eb33872447d1e5b3574f1fd5dd3c1479ee3653f8476f380e64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_c5248cecc41a7c965896544f85db447ea752084d0262336bf8400c55b4e0d3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5248cecc41a7c965896544f85db447ea752084d0262336bf8400c55b4e0d3cf->enter($__internal_c5248cecc41a7c965896544f85db447ea752084d0262336bf8400c55b4e0d3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 20
        echo "<div class=\"container\">
<h1 style=\"text-align:center;margin-top:10px;\"> Voici la liste des Biens </h1>
<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addbien");
        echo "\">Ajouter Bien </a>
<div class=\"col-12 \">

";
        // line 26
        echo "
<table class=\"table\" id=\"datatable\" >
<thead>
<tr>
<th>nom</th>
<th>prix</th>
<th>description</th>
<th>localite</th>
<th>type</th>
<th>Image</th>
</tr>
</thead>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 39
            echo "<tbody>
<tr>

<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "localite", array()), "html", null, true);
            echo "</td>
<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
 <td>
    
 ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 50
                echo "   <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
 </td> 
 ";
            // line 58
            echo "  <style>
 .img
 {
     width:100px;
 }
 #datatable{
     position:relative;
     left:300px;
     width:1000px;
 }
 .titre{
    text-align:center;
 }
 .container{
     position:relative;
     top:100px;
 }
 </style>


</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</tbody>
</table>
</div>

</div>
";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "
";
        
        $__internal_c5248cecc41a7c965896544f85db447ea752084d0262336bf8400c55b4e0d3cf->leave($__internal_c5248cecc41a7c965896544f85db447ea752084d0262336bf8400c55b4e0d3cf_prof);

        
        $__internal_bb05bd0d9d968eb33872447d1e5b3574f1fd5dd3c1479ee3653f8476f380e64f->leave($__internal_bb05bd0d9d968eb33872447d1e5b3574f1fd5dd3c1479ee3653f8476f380e64f_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91e642743f547b56c70dac01b6ce219591cd64b340579d9a157c80305be00194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e642743f547b56c70dac01b6ce219591cd64b340579d9a157c80305be00194->enter($__internal_91e642743f547b56c70dac01b6ce219591cd64b340579d9a157c80305be00194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_873c11f9488f8947849a3d837081ab62cadf039f3c48f0c0566b374b19905717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873c11f9488f8947849a3d837081ab62cadf039f3c48f0c0566b374b19905717->enter($__internal_873c11f9488f8947849a3d837081ab62cadf039f3c48f0c0566b374b19905717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <!-- Datatables-->
 
         <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatable init js -->
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 111
        echo "
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/json/scroller-demo.json"), "html", null, true);
        echo "\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>
     ";
        
        $__internal_873c11f9488f8947849a3d837081ab62cadf039f3c48f0c0566b374b19905717->leave($__internal_873c11f9488f8947849a3d837081ab62cadf039f3c48f0c0566b374b19905717_prof);

        
        $__internal_91e642743f547b56c70dac01b6ce219591cd64b340579d9a157c80305be00194->leave($__internal_91e642743f547b56c70dac01b6ce219591cd64b340579d9a157c80305be00194_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:viewBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 117,  301 => 111,  296 => 108,  290 => 105,  286 => 104,  282 => 103,  278 => 102,  274 => 101,  270 => 100,  266 => 99,  262 => 98,  258 => 97,  254 => 96,  250 => 95,  246 => 94,  242 => 93,  238 => 92,  234 => 91,  228 => 88,  219 => 87,  208 => 124,  206 => 87,  199 => 82,  170 => 58,  166 => 53,  156 => 50,  152 => 49,  146 => 46,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  125 => 39,  121 => 38,  107 => 26,  101 => 22,  97 => 20,  88 => 19,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  51 => 5,  42 => 4,  11 => 2,);
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
<!-- DataTables -->
        <link href=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/plugins/datatables/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />


<link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

 {% endblock %}


{% block contenu %}
<div class=\"container\">
<h1 style=\"text-align:center;margin-top:10px;\"> Voici la liste des Biens </h1>
<a href=\"{{path('addbien')}}\">Ajouter Bien </a>
<div class=\"col-12 \">

{# <h1 class=\"titre\"><u> liste des biens</u></h1> #}

<table class=\"table\" id=\"datatable\" >
<thead>
<tr>
<th>nom</th>
<th>prix</th>
<th>description</th>
<th>localite</th>
<th>type</th>
<th>Image</th>
</tr>
</thead>
{% for bien in biens %}
<tbody>
<tr>

<td>{{bien.nombien}}</td>
<td>{{bien.prixlocation }}</td>
<td>{{bien.description}}</td>
<td>{{bien.localite}}</td>
<td>{{bien.typebien}}</td>
 <td>
    
 {% for image in bien.images %}
   <img src=\"{{asset('images/'~image.image)}}\"class=\"img\">

{% endfor %}

 </td> 
 {# <td>
 <a href=\"{{path('reserver')}}\">RESERVER</a>
 </td> #}
  <style>
 .img
 {
     width:100px;
 }
 #datatable{
     position:relative;
     left:300px;
     width:1000px;
 }
 .titre{
    text-align:center;
 }
 .container{
     position:relative;
     top:100px;
 }
 </style>


</tr>


{%endfor%}
</tbody>
</table>
</div>

</div>
{% block javascripts %}
{{ parent() }}
 <!-- Datatables-->
 
         <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/dataTables.buttons.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/jszip.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/pdfmake.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/vfs_fonts.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/buttons.html5.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/buttons.print.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/dataTables.fixedHeader.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/datatables/dataTables.scroller.min.js')}}\"></script>

        <!-- Datatable init js -->
        <script src=\"{{ asset('assets/pages/datatables.init.js')}}\"></script>

        {# <script src=\"{{ asset('assets/js/jquery.app.js')}}\"></script> #}

        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"{{ asset('assets/plugins/datatables/json/scroller-demo.json')}}\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>
     {# <script type=\"text/javascript\" src=\"{{ asset('jsakimo/akimo.js')}}\"></script> #}
{% endblock %}

{% endblock %}


", "FKImmoBundle:Admin:viewBien.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/viewBien.html.twig");
    }
}
