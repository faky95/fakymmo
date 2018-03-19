<?php

/* FKImmoBundle:Admin:details.html.twig */
class __TwigTemplate_4876c95608c3d091e373210b112b196fac3c216d3fb79b18238d444668057bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "FKImmoBundle:Admin:details.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdae9b07fa11a672a19c0356a004267c666f5a8d9becc4c0546dcd844463616d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdae9b07fa11a672a19c0356a004267c666f5a8d9becc4c0546dcd844463616d->enter($__internal_fdae9b07fa11a672a19c0356a004267c666f5a8d9becc4c0546dcd844463616d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:details.html.twig"));

        $__internal_1df6c05e517a9abe63376ca2a5628a91b7ab04ab458e54e1c43f62d443d4ed2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df6c05e517a9abe63376ca2a5628a91b7ab04ab458e54e1c43f62d443d4ed2c->enter($__internal_1df6c05e517a9abe63376ca2a5628a91b7ab04ab458e54e1c43f62d443d4ed2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdae9b07fa11a672a19c0356a004267c666f5a8d9becc4c0546dcd844463616d->leave($__internal_fdae9b07fa11a672a19c0356a004267c666f5a8d9becc4c0546dcd844463616d_prof);

        
        $__internal_1df6c05e517a9abe63376ca2a5628a91b7ab04ab458e54e1c43f62d443d4ed2c->leave($__internal_1df6c05e517a9abe63376ca2a5628a91b7ab04ab458e54e1c43f62d443d4ed2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29fb355a7f926ff0d22211b2116a642d6f31d41b8fb4c5e65ad6a7c4967f658f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fb355a7f926ff0d22211b2116a642d6f31d41b8fb4c5e65ad6a7c4967f658f->enter($__internal_29fb355a7f926ff0d22211b2116a642d6f31d41b8fb4c5e65ad6a7c4967f658f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40131e9be1d42b57498e65c456af62047fda70c06291c77b30fe71579ed761ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40131e9be1d42b57498e65c456af62047fda70c06291c77b30fe71579ed761ff->enter($__internal_40131e9be1d42b57498e65c456af62047fda70c06291c77b30fe71579ed761ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-location";
        
        $__internal_40131e9be1d42b57498e65c456af62047fda70c06291c77b30fe71579ed761ff->leave($__internal_40131e9be1d42b57498e65c456af62047fda70c06291c77b30fe71579ed761ff_prof);

        
        $__internal_29fb355a7f926ff0d22211b2116a642d6f31d41b8fb4c5e65ad6a7c4967f658f->leave($__internal_29fb355a7f926ff0d22211b2116a642d6f31d41b8fb4c5e65ad6a7c4967f658f_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_5f73683ad10557419e21a16144c4c16718ff0ffaae39cc3ff4bca9ea827e8726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f73683ad10557419e21a16144c4c16718ff0ffaae39cc3ff4bca9ea827e8726->enter($__internal_5f73683ad10557419e21a16144c4c16718ff0ffaae39cc3ff4bca9ea827e8726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7e23fccf0dfd7daafc8aa96895f6615b3bf1639c2df12e3e4e6fbbef190e9592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e23fccf0dfd7daafc8aa96895f6615b3bf1639c2df12e3e4e6fbbef190e9592->enter($__internal_7e23fccf0dfd7daafc8aa96895f6615b3bf1639c2df12e3e4e6fbbef190e9592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "

  <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i> Information Client</i></center></h4>
  </div>
  
  <div class=\"card-body\">
  

    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> Nom du Client : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Client", array()), "nomcomplet", array()), "html", null, true);
        echo "  </p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> Numero piece  : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Client", array()), "numeropiece", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> Adresse   : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Client", array()), "adresse", array()), "html", null, true);
        echo " </p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> Telephone  :";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Client", array()), "phone", array()), "html", null, true);
        echo " </p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Login:";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Client", array()), "login", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Email :";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Client", array()), "email", array()), "html", null, true);
        echo "</p></i><br>
  </div>

   
  
  
 
  
  
  </div>
 <div class=\"col-lg-6\">
<div class=\"card\" style=\" height:400px;\">
  <div class=\"card-header\" style=\"background:lightgrey;opacity:0.5\">
  <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>  Information Bien</i></center></h4>
  </div>
  <div class=\"card-body\">
    
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Nom du Bien : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Bien", array()), "nombien", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Type de Bien : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Bien", array()), "typebien", array()), "nomtype", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Localite : ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Bien", array()), "Localite", array()), "nomlocal", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Description : ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Bien", array()), "description", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Prix-Location :";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "Bien", array()), "prixlocation", array()), "html", null, true);
        echo "</p></i><br>
  </div>
  
</div>


</div>
</div>
<div class=\"row\" style=\"margin-bottom:20px;\">
  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "bien", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 49
            echo "                        
             <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
            echo "\"class=\"img\">
                       
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "


<div class=\"row\" style=\"margin-bottom:30px;\">
<div class=\"col-lg-4\" ></div>
<div class=\"col-lg-2\" >
<a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewReserve");
        echo "\">
<input type=\"submit\" value=\"Retour\" class=\"btn btn-primary\" style=\"width:150px;\">
</a>
<a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute(($context["details"] ?? $this->getContext($context, "details")), "id", array()))), "html", null, true);
        echo "\"> 
<input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" style=\"width:150px;\"></div>
</a>
</div>
</div> 
";
        
        $__internal_7e23fccf0dfd7daafc8aa96895f6615b3bf1639c2df12e3e4e6fbbef190e9592->leave($__internal_7e23fccf0dfd7daafc8aa96895f6615b3bf1639c2df12e3e4e6fbbef190e9592_prof);

        
        $__internal_5f73683ad10557419e21a16144c4c16718ff0ffaae39cc3ff4bca9ea827e8726->leave($__internal_5f73683ad10557419e21a16144c4c16718ff0ffaae39cc3ff4bca9ea827e8726_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 62,  170 => 59,  162 => 53,  153 => 50,  150 => 49,  146 => 48,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %}Détail-location{% endblock %}
{% block main %}


  <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i> Information Client</i></center></h4>
  </div>
  
  <div class=\"card-body\">
  

    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> Nom du Client : {{ details.Client.nomcomplet }}  </p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> Numero piece  : {{ details.Client.numeropiece }}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> Adresse   : {{details.Client.adresse }} </p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> Telephone  :{{details.Client.phone }} </p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Login:{{details.Client.login}}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Email :{{ details.Client.email}}</p></i><br>
  </div>

   
  
  
 
  
  
  </div>
 <div class=\"col-lg-6\">
<div class=\"card\" style=\" height:400px;\">
  <div class=\"card-header\" style=\"background:lightgrey;opacity:0.5\">
  <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>  Information Bien</i></center></h4>
  </div>
  <div class=\"card-body\">
    
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Nom du Bien : {{ details.Bien.nombien }}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Type de Bien : {{ details.Bien.typebien.nomtype }}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Localite : {{details.Bien.Localite.nomlocal }}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Description : {{ details.Bien.description}}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Prix-Location :{{details.Bien.prixlocation}}</p></i><br>
  </div>
  
</div>


</div>
</div>
<div class=\"row\" style=\"margin-bottom:20px;\">
  {% for image in details.bien.images %}
                        
             <img src=\"{{asset('images/'~image.image)}}\"class=\"img\">
                       
         {% endfor %}



<div class=\"row\" style=\"margin-bottom:30px;\">
<div class=\"col-lg-4\" ></div>
<div class=\"col-lg-2\" >
<a href=\"{{path('viewReserve')}}\">
<input type=\"submit\" value=\"Retour\" class=\"btn btn-primary\" style=\"width:150px;\">
</a>
<a href=\"{{path('contrat',{'id':details.id})}}\"> 
<input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" style=\"width:150px;\"></div>
</a>
</div>
</div> 
{% endblock %}", "FKImmoBundle:Admin:details.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/details.html.twig");
    }
}
