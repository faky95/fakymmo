<?php

/* FKImmoBundle:Admin:Res.html.twig */
class __TwigTemplate_d43bd205ed791fad267d04b9ac122352accdb17f9c896291cca00f37782e1112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout1.html.twig", "FKImmoBundle:Admin:Res.html.twig", 1);
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
        $__internal_603140575e8d3ef42a7ad4388151d3a816605a5ff9ad9f2e1c776968de1ca9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603140575e8d3ef42a7ad4388151d3a816605a5ff9ad9f2e1c776968de1ca9bb->enter($__internal_603140575e8d3ef42a7ad4388151d3a816605a5ff9ad9f2e1c776968de1ca9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:Res.html.twig"));

        $__internal_71d51dc6e8c317e3e279294ae03ffe829b92788602ba16d2dd427dcfc30d6fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d51dc6e8c317e3e279294ae03ffe829b92788602ba16d2dd427dcfc30d6fcd->enter($__internal_71d51dc6e8c317e3e279294ae03ffe829b92788602ba16d2dd427dcfc30d6fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:Res.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_603140575e8d3ef42a7ad4388151d3a816605a5ff9ad9f2e1c776968de1ca9bb->leave($__internal_603140575e8d3ef42a7ad4388151d3a816605a5ff9ad9f2e1c776968de1ca9bb_prof);

        
        $__internal_71d51dc6e8c317e3e279294ae03ffe829b92788602ba16d2dd427dcfc30d6fcd->leave($__internal_71d51dc6e8c317e3e279294ae03ffe829b92788602ba16d2dd427dcfc30d6fcd_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ce29b5503ca02675e92babae3a575c00bf8474764abc502d7a653843b57e5272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce29b5503ca02675e92babae3a575c00bf8474764abc502d7a653843b57e5272->enter($__internal_ce29b5503ca02675e92babae3a575c00bf8474764abc502d7a653843b57e5272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_0544a7840843c4a1b459157004c2857343f6c1c52baa9c9ebecb122023f572cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0544a7840843c4a1b459157004c2857343f6c1c52baa9c9ebecb122023f572cf->enter($__internal_0544a7840843c4a1b459157004c2857343f6c1c52baa9c9ebecb122023f572cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_0544a7840843c4a1b459157004c2857343f6c1c52baa9c9ebecb122023f572cf->leave($__internal_0544a7840843c4a1b459157004c2857343f6c1c52baa9c9ebecb122023f572cf_prof);

        
        $__internal_ce29b5503ca02675e92babae3a575c00bf8474764abc502d7a653843b57e5272->leave($__internal_ce29b5503ca02675e92babae3a575c00bf8474764abc502d7a653843b57e5272_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_289e6f5531e3c3333d7fb3919682bc425def9222d005e9c6c90201f03676bf21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289e6f5531e3c3333d7fb3919682bc425def9222d005e9c6c90201f03676bf21->enter($__internal_289e6f5531e3c3333d7fb3919682bc425def9222d005e9c6c90201f03676bf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1114d271385a8e936833843e7e6f407a974d8b505f39875caa979dae9540cc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1114d271385a8e936833843e7e6f407a974d8b505f39875caa979dae9540cc1d->enter($__internal_1114d271385a8e936833843e7e6f407a974d8b505f39875caa979dae9540cc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        echo " 
  ";
        // line 15
        echo "  <div class=\"tab\">




<table class=\"table table-striped table-bordered\" id=\"datatable\">
  <thead class=\"\"style=\"background-color:#04295e;\">
    <tr>
      <th scope=\"col\" class=\"thead\">Nom Client</th>
      <th scope=\"col\" class=\"thead\">Adresse Client</th>
      <th scope=\"col\"class=\"thead\">Nom Bien</th>
      <th scope=\"col\"class=\"thead\">Localite Bien</th>
      <th scope=\"col\"class=\"thead\">Type Bien</th>
      <th scope=\"col\"class=\"thead\">Prix Location</th>
       <th scope=\"col\"class=\"thead\">Image</th>
        <th scope=\"col\"class=\"thead\">Actions</th>
      
    </tr>
  </thead>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 35
            echo "<tr class=\"tbod\">
    ";
            // line 37
            echo "    <td style=\"color:black;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "client", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adresse", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "nombien", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "localite", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</td>
    <td style=\"color:black;\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
    <td>   
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                echo "                        
             <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">
                       
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    </td>
    <td>
        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">Details </a>
    </td>
 

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        
        $__internal_1114d271385a8e936833843e7e6f407a974d8b505f39875caa979dae9540cc1d->leave($__internal_1114d271385a8e936833843e7e6f407a974d8b505f39875caa979dae9540cc1d_prof);

        
        $__internal_289e6f5531e3c3333d7fb3919682bc425def9222d005e9c6c90201f03676bf21->leave($__internal_289e6f5531e3c3333d7fb3919682bc425def9222d005e9c6c90201f03676bf21_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebc276dd497e11ec6009288f80e519e4b609e25bd32bef639f2385a9bfbe7de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc276dd497e11ec6009288f80e519e4b609e25bd32bef639f2385a9bfbe7de7->enter($__internal_ebc276dd497e11ec6009288f80e519e4b609e25bd32bef639f2385a9bfbe7de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_012aca05e20a5e2f75a70785422afb9be684642a9cc1f09afe6ddb919f36fffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012aca05e20a5e2f75a70785422afb9be684642a9cc1f09afe6ddb919f36fffc->enter($__internal_012aca05e20a5e2f75a70785422afb9be684642a9cc1f09afe6ddb919f36fffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script
  src=\"https://code.jquery.com/jquery-3.3.1.js\"
  integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
  crossorigin=\"anonymous\"></script>           
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>        
 <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script> 

        <!-- Datatable init js -->
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 117
        echo "
        ";
        // line 129
        echo "   <script>
    \$(document).ready(function()
    {
        alert('k')
            \$('#datatable').DataTable();
    });
   </script>



 ";
        
        $__internal_012aca05e20a5e2f75a70785422afb9be684642a9cc1f09afe6ddb919f36fffc->leave($__internal_012aca05e20a5e2f75a70785422afb9be684642a9cc1f09afe6ddb919f36fffc_prof);

        
        $__internal_ebc276dd497e11ec6009288f80e519e4b609e25bd32bef639f2385a9bfbe7de7->leave($__internal_ebc276dd497e11ec6009288f80e519e4b609e25bd32bef639f2385a9bfbe7de7_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:Res.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 129,  308 => 117,  303 => 114,  297 => 111,  293 => 110,  289 => 109,  285 => 108,  281 => 107,  277 => 106,  273 => 105,  269 => 104,  265 => 103,  261 => 102,  257 => 101,  253 => 100,  249 => 99,  245 => 98,  241 => 97,  232 => 91,  223 => 90,  182 => 57,  170 => 51,  166 => 49,  157 => 46,  154 => 45,  150 => 44,  145 => 42,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  124 => 37,  121 => 35,  117 => 34,  96 => 15,  85 => 13,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
      <th scope=\"col\" class=\"thead\">Nom Client</th>
      <th scope=\"col\" class=\"thead\">Adresse Client</th>
      <th scope=\"col\"class=\"thead\">Nom Bien</th>
      <th scope=\"col\"class=\"thead\">Localite Bien</th>
      <th scope=\"col\"class=\"thead\">Type Bien</th>
      <th scope=\"col\"class=\"thead\">Prix Location</th>
       <th scope=\"col\"class=\"thead\">Image</th>
        <th scope=\"col\"class=\"thead\">Actions</th>
      
    </tr>
  </thead>
{% for reservation in reservations %}
<tr class=\"tbod\">
    {# <td>{{reservation.id}}</td> #}
    <td style=\"color:black;\">{{reservation.client}}</td>
    <td style=\"color:black;\">{{reservation.client.adresse}}</td>
    <td style=\"color:black;\">{{reservation.bien.nombien}}</td>
    <td style=\"color:black;\">{{reservation.bien.localite}}</td>
    <td style=\"color:black;\">{{reservation.bien.typebien}}</td>
    <td style=\"color:black;\">{{reservation.bien.prixlocation}}</td>
    <td>   
        {% for image in reservation.bien.images %}
                        
             <img src=\"{{asset('images/'~image.image)}}\"class=\"img\">
                       
         {% endfor %}
    </td>
    <td>
        <a href=\"{{path('detail',{'id':reservation.id})}}\">Details </a>
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
        alert('k')
            \$('#datatable').DataTable();
    });
   </script>



 {% endblock %}
 ", "FKImmoBundle:Admin:Res.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/Res.html.twig");
    }
}
