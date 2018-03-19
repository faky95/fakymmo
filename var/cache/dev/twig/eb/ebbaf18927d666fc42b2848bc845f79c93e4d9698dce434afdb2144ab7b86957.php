<?php

/* FKImmoBundle:Admin:Res.html.twig */
class __TwigTemplate_e0eb465c36155ab23e7b06e25e83dc5362f0811f32484a521c244f5ffefccffc extends Twig_Template
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
        $__internal_9450692df28395928ec0d5a85a60f19f4ea51967270e7e544ee41c6aca324728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9450692df28395928ec0d5a85a60f19f4ea51967270e7e544ee41c6aca324728->enter($__internal_9450692df28395928ec0d5a85a60f19f4ea51967270e7e544ee41c6aca324728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:Res.html.twig"));

        $__internal_703a055a5badfd01316ba9d3b8cbfb8c1cb93ab25fb9a1e354a6e8d00a8caa7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703a055a5badfd01316ba9d3b8cbfb8c1cb93ab25fb9a1e354a6e8d00a8caa7f->enter($__internal_703a055a5badfd01316ba9d3b8cbfb8c1cb93ab25fb9a1e354a6e8d00a8caa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:Res.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9450692df28395928ec0d5a85a60f19f4ea51967270e7e544ee41c6aca324728->leave($__internal_9450692df28395928ec0d5a85a60f19f4ea51967270e7e544ee41c6aca324728_prof);

        
        $__internal_703a055a5badfd01316ba9d3b8cbfb8c1cb93ab25fb9a1e354a6e8d00a8caa7f->leave($__internal_703a055a5badfd01316ba9d3b8cbfb8c1cb93ab25fb9a1e354a6e8d00a8caa7f_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_004a5945a2a8da30465103116a4894d39f499b55999412a9702c43e05690c134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004a5945a2a8da30465103116a4894d39f499b55999412a9702c43e05690c134->enter($__internal_004a5945a2a8da30465103116a4894d39f499b55999412a9702c43e05690c134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a48b703c8a256d1fa18a37ab97409eaecabae01824819545321aac64751a73b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48b703c8a256d1fa18a37ab97409eaecabae01824819545321aac64751a73b6->enter($__internal_a48b703c8a256d1fa18a37ab97409eaecabae01824819545321aac64751a73b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_a48b703c8a256d1fa18a37ab97409eaecabae01824819545321aac64751a73b6->leave($__internal_a48b703c8a256d1fa18a37ab97409eaecabae01824819545321aac64751a73b6_prof);

        
        $__internal_004a5945a2a8da30465103116a4894d39f499b55999412a9702c43e05690c134->leave($__internal_004a5945a2a8da30465103116a4894d39f499b55999412a9702c43e05690c134_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_072f36adab648f45ca6ab15133726648417bf9bb5565f402a9c9a5376c0379d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072f36adab648f45ca6ab15133726648417bf9bb5565f402a9c9a5376c0379d5->enter($__internal_072f36adab648f45ca6ab15133726648417bf9bb5565f402a9c9a5376c0379d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8b66d04a4cebd6058bae1c88deff13766274253a994cff972b5f3f519eff8b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b66d04a4cebd6058bae1c88deff13766274253a994cff972b5f3f519eff8b32->enter($__internal_8b66d04a4cebd6058bae1c88deff13766274253a994cff972b5f3f519eff8b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_8b66d04a4cebd6058bae1c88deff13766274253a994cff972b5f3f519eff8b32->leave($__internal_8b66d04a4cebd6058bae1c88deff13766274253a994cff972b5f3f519eff8b32_prof);

        
        $__internal_072f36adab648f45ca6ab15133726648417bf9bb5565f402a9c9a5376c0379d5->leave($__internal_072f36adab648f45ca6ab15133726648417bf9bb5565f402a9c9a5376c0379d5_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d80b3a8d75ef3b1207b9c4330e32f16b6425fe22d18d44ad554deee3f6d1dcb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80b3a8d75ef3b1207b9c4330e32f16b6425fe22d18d44ad554deee3f6d1dcb3->enter($__internal_d80b3a8d75ef3b1207b9c4330e32f16b6425fe22d18d44ad554deee3f6d1dcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b68e905ed06d73cf2036ddb3ccf6d7b33ea1cb0e83ac5994b57ac7c0df33f3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68e905ed06d73cf2036ddb3ccf6d7b33ea1cb0e83ac5994b57ac7c0df33f3ee->enter($__internal_b68e905ed06d73cf2036ddb3ccf6d7b33ea1cb0e83ac5994b57ac7c0df33f3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b68e905ed06d73cf2036ddb3ccf6d7b33ea1cb0e83ac5994b57ac7c0df33f3ee->leave($__internal_b68e905ed06d73cf2036ddb3ccf6d7b33ea1cb0e83ac5994b57ac7c0df33f3ee_prof);

        
        $__internal_d80b3a8d75ef3b1207b9c4330e32f16b6425fe22d18d44ad554deee3f6d1dcb3->leave($__internal_d80b3a8d75ef3b1207b9c4330e32f16b6425fe22d18d44ad554deee3f6d1dcb3_prof);

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
