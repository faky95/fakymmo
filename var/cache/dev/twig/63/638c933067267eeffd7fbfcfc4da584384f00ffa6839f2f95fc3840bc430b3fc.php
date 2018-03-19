<?php

/* FKImmoBundle:Agent:propo.html.twig */
class __TwigTemplate_721cd1735fbf770cbd94004531cb742decb33fe6860b3eb066a7b3de4720ae7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout1.html.twig", "FKImmoBundle:Agent:propo.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9ed845b133e79d9fa937afd4c5429268229e17ce2fe9a70a5d4901f214326ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ed845b133e79d9fa937afd4c5429268229e17ce2fe9a70a5d4901f214326ad->enter($__internal_b9ed845b133e79d9fa937afd4c5429268229e17ce2fe9a70a5d4901f214326ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Agent:propo.html.twig"));

        $__internal_30f62aa83bea40c98356b70b8e80d2a20f62491602e7d5748be681c0e6d669ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f62aa83bea40c98356b70b8e80d2a20f62491602e7d5748be681c0e6d669ef->enter($__internal_30f62aa83bea40c98356b70b8e80d2a20f62491602e7d5748be681c0e6d669ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Agent:propo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9ed845b133e79d9fa937afd4c5429268229e17ce2fe9a70a5d4901f214326ad->leave($__internal_b9ed845b133e79d9fa937afd4c5429268229e17ce2fe9a70a5d4901f214326ad_prof);

        
        $__internal_30f62aa83bea40c98356b70b8e80d2a20f62491602e7d5748be681c0e6d669ef->leave($__internal_30f62aa83bea40c98356b70b8e80d2a20f62491602e7d5748be681c0e6d669ef_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c76610942fdd7ea006275d7ce19335c857b0325064b2ec92cf7c7db7babf2961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76610942fdd7ea006275d7ce19335c857b0325064b2ec92cf7c7db7babf2961->enter($__internal_c76610942fdd7ea006275d7ce19335c857b0325064b2ec92cf7c7db7babf2961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3f150cb0572f4cabc1006f203a20019d25d8620f872f8e2bea8d0a92778e91f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f150cb0572f4cabc1006f203a20019d25d8620f872f8e2bea8d0a92778e91f2->enter($__internal_3f150cb0572f4cabc1006f203a20019d25d8620f872f8e2bea8d0a92778e91f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
 <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

";
        
        $__internal_3f150cb0572f4cabc1006f203a20019d25d8620f872f8e2bea8d0a92778e91f2->leave($__internal_3f150cb0572f4cabc1006f203a20019d25d8620f872f8e2bea8d0a92778e91f2_prof);

        
        $__internal_c76610942fdd7ea006275d7ce19335c857b0325064b2ec92cf7c7db7babf2961->leave($__internal_c76610942fdd7ea006275d7ce19335c857b0325064b2ec92cf7c7db7babf2961_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_bd21f810dd23ed2275ab49221dafe59a128caf7cf4950a1a4b749756cbd9bd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd21f810dd23ed2275ab49221dafe59a128caf7cf4950a1a4b749756cbd9bd7a->enter($__internal_bd21f810dd23ed2275ab49221dafe59a128caf7cf4950a1a4b749756cbd9bd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6e8448cddcc00b6e94f278de802a2a0c33c984a690678e31d6fa80dd64c56717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8448cddcc00b6e94f278de802a2a0c33c984a690678e31d6fa80dd64c56717->enter($__internal_6e8448cddcc00b6e94f278de802a2a0c33c984a690678e31d6fa80dd64c56717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        echo " 
  ";
        // line 15
        echo "  <div class=\"tab\">




<table class=\"table table-striped table-bordered\" id=\"datatable\">
  <thead class=\"\"style=\"background-color:#04295e;\">
    <tr>
      <th scope=\"col\" class=\"thead\">Nom Proprietaire</th>
      <th scope=\"col\" class=\"thead\">Email</th>
      <th scope=\"col\"class=\"thead\">Phone</th>
      <th scope=\"col\"class=\"thead\">Code banque</th>
      <th scope=\"col\"class=\"thead\">Type Bien</th>
      <th scope=\"col\"class=\"thead\">Localite Bien</th>
       <th scope=\"col\"class=\"thead\">Bien proposé</th>
        <th scope=\"col\"class=\"thead\">Description</th>
        <th scope=\"col\"class=\"thead\">Montant Voulu</th>
        <th scope=\"col\"class=\"thead\">Actions</th>
      
    </tr>
  </thead>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["propositions"] ?? $this->getContext($context, "propositions")));
        foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
            // line 37
            echo "<tr class=\"tbod\">
    ";
            // line 39
            echo "    <td style=\"color:black;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "proprietaire", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "email", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "phone", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "codebanque", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "localite", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "nombien", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "description", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
    ";
            // line 55
            echo "    <td style=\"display:flex;justify-content:space-between;\">
        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute($context["proposition"], "id", array()))), "html", null, true);
            echo "\">Accepter </a>
        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["proposition"], "id", array()))), "html", null, true);
            echo "\">Edit </a>
        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["proposition"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
    </td>
 

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo " 
</table>
</div>
<style>
 .img
 {
     width:70px;

 }

 #datatable{
     
     margin-left:250px;
     margin-top:100px;
     width:1000px;
 }
 #Res{
     position:relative;
     top:100px;
     text-align:center;
 }
 .thead
 {
     color:white;
 }
 .tab
 {
     margin-top:100px;
 }

 </style>
 ";
        
        $__internal_6e8448cddcc00b6e94f278de802a2a0c33c984a690678e31d6fa80dd64c56717->leave($__internal_6e8448cddcc00b6e94f278de802a2a0c33c984a690678e31d6fa80dd64c56717_prof);

        
        $__internal_bd21f810dd23ed2275ab49221dafe59a128caf7cf4950a1a4b749756cbd9bd7a->leave($__internal_bd21f810dd23ed2275ab49221dafe59a128caf7cf4950a1a4b749756cbd9bd7a_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d459f6b3dfef8b6882a8c45104a91462a68b9aacbadd9ece0501e5fb2ca8d20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d459f6b3dfef8b6882a8c45104a91462a68b9aacbadd9ece0501e5fb2ca8d20b->enter($__internal_d459f6b3dfef8b6882a8c45104a91462a68b9aacbadd9ece0501e5fb2ca8d20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f12a75461f7ff27bc466a2d3d6b0fe305127753dbf00e767e5d851dea9d6d2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12a75461f7ff27bc466a2d3d6b0fe305127753dbf00e767e5d851dea9d6d2fd->enter($__internal_f12a75461f7ff27bc466a2d3d6b0fe305127753dbf00e767e5d851dea9d6d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script
  src=\"https://code.jquery.com/jquery-3.3.1.js\"
  integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
  crossorigin=\"anonymous\"></script>           
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>        
 <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script> 

        <!-- Datatable init js -->
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 124
        echo "
        ";
        // line 136
        echo "   <script>
    \$(document).ready(function()
    {
       
            \$('#datatable').DataTable();
    });
   </script>



 ";
        
        $__internal_f12a75461f7ff27bc466a2d3d6b0fe305127753dbf00e767e5d851dea9d6d2fd->leave($__internal_f12a75461f7ff27bc466a2d3d6b0fe305127753dbf00e767e5d851dea9d6d2fd_prof);

        
        $__internal_d459f6b3dfef8b6882a8c45104a91462a68b9aacbadd9ece0501e5fb2ca8d20b->leave($__internal_d459f6b3dfef8b6882a8c45104a91462a68b9aacbadd9ece0501e5fb2ca8d20b_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Agent:propo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 136,  312 => 124,  307 => 121,  301 => 118,  297 => 117,  293 => 116,  289 => 115,  285 => 114,  281 => 113,  277 => 112,  273 => 111,  269 => 110,  265 => 109,  261 => 108,  257 => 107,  253 => 106,  249 => 105,  245 => 104,  236 => 98,  227 => 97,  186 => 64,  174 => 58,  170 => 57,  166 => 56,  163 => 55,  159 => 47,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  126 => 39,  123 => 37,  119 => 36,  96 => 15,  85 => 13,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout1.html.twig\" %}
{% block stylesheet %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
 <link href=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/plugins/datatables/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

{% endblock %}

 {% block main %} 
  {# <h1 id=\"Res\"> Tableau Reservation en cours </h1> #}
  <div class=\"tab\">




<table class=\"table table-striped table-bordered\" id=\"datatable\">
  <thead class=\"\"style=\"background-color:#04295e;\">
    <tr>
      <th scope=\"col\" class=\"thead\">Nom Proprietaire</th>
      <th scope=\"col\" class=\"thead\">Email</th>
      <th scope=\"col\"class=\"thead\">Phone</th>
      <th scope=\"col\"class=\"thead\">Code banque</th>
      <th scope=\"col\"class=\"thead\">Type Bien</th>
      <th scope=\"col\"class=\"thead\">Localite Bien</th>
       <th scope=\"col\"class=\"thead\">Bien proposé</th>
        <th scope=\"col\"class=\"thead\">Description</th>
        <th scope=\"col\"class=\"thead\">Montant Voulu</th>
        <th scope=\"col\"class=\"thead\">Actions</th>
      
    </tr>
  </thead>
{% for proposition in propositions %}
<tr class=\"tbod\">
    {# <td>{{reservation.id}}</td> #}
    <td style=\"color:black;\">{{proposition.proprietaire}}</td>
    <td style=\"color:black;\">{{proposition.proprietaire.email}}</td>
    <td style=\"color:black;\">{{proposition.proprietaire.phone}}</td>
    <td style=\"color:black;\">{{proposition.proprietaire.codebanque}}</td>
    <td style=\"color:black;\">{{proposition.bien.typebien}}</td>
    <td style=\"color:black;\">{{proposition.bien.localite}}</td>
    <td style=\"color:black;\">{{proposition.bien.nombien}}</td>
    <td style=\"color:black;\">{{proposition.bien.description}}</td>
    <td style=\"color:black;\">{{proposition.bien.prixlocation}}</td>
    {# <td>   
        {% for image in reservation.bien.images %}
                        
             <img src=\"{{asset('images/'~image.image)}}\"class=\"img\">
                       
         {% endfor %}
    </td> #}
    <td style=\"display:flex;justify-content:space-between;\">
        <a href=\"{{path('contrat',{'id':proposition.id})}}\">Accepter </a>
        <a href=\"{{path('edit',{'id':proposition.id})}}\">Edit </a>
        <a href=\"{{path('delete',{'id':proposition.id})}}\">Delete</a>
    </td>
 

</tr>
{% endfor %}
 
</table>
</div>
<style>
 .img
 {
     width:70px;

 }

 #datatable{
     
     margin-left:250px;
     margin-top:100px;
     width:1000px;
 }
 #Res{
     position:relative;
     top:100px;
     text-align:center;
 }
 .thead
 {
     color:white;
 }
 .tab
 {
     margin-top:100px;
 }

 </style>
 {% endblock %}

 {% block javascripts %}
{{ parent() }}
<script
  src=\"https://code.jquery.com/jquery-3.3.1.js\"
  integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
  crossorigin=\"anonymous\"></script>           
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>        
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

        {# <script type=\"text/javascript\">
            \$(document).ready(function()
            {
                 \$('#datatable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"{{ asset('assets/plugins/datatables/json/scroller-demo.json')}}\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-fixed-header').DataTable( { fixedHeader: true } ); 
            } );
            TableManageButtons.init();
   </script> #}
   <script>
    \$(document).ready(function()
    {
       
            \$('#datatable').DataTable();
    });
   </script>



 {% endblock %}
 ", "FKImmoBundle:Agent:propo.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Agent/propo.html.twig");
    }
}
