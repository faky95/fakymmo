<?php

/* FKImmoBundle:Front:view.html.twig */
class __TwigTemplate_701ac0d987eb9fed6b89f728396a6686b2a7b7c748afb61fdf67b5c4038f78ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FKImmoBundle:Front:view.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f333da1ea41f68dfb8f59290e75d05d6909d804c614903b90fdbf918c77a0bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f333da1ea41f68dfb8f59290e75d05d6909d804c614903b90fdbf918c77a0bcc->enter($__internal_f333da1ea41f68dfb8f59290e75d05d6909d804c614903b90fdbf918c77a0bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:view.html.twig"));

        $__internal_be6ddd371fa0b642b906dacfa40401c5486787a5fcad9a199144ad4a043057e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6ddd371fa0b642b906dacfa40401c5486787a5fcad9a199144ad4a043057e6->enter($__internal_be6ddd371fa0b642b906dacfa40401c5486787a5fcad9a199144ad4a043057e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f333da1ea41f68dfb8f59290e75d05d6909d804c614903b90fdbf918c77a0bcc->leave($__internal_f333da1ea41f68dfb8f59290e75d05d6909d804c614903b90fdbf918c77a0bcc_prof);

        
        $__internal_be6ddd371fa0b642b906dacfa40401c5486787a5fcad9a199144ad4a043057e6->leave($__internal_be6ddd371fa0b642b906dacfa40401c5486787a5fcad9a199144ad4a043057e6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f5e3a344c01b774cb950c8c7b0a81dd99c5163cbd3023b11682a52b57f6ec52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5e3a344c01b774cb950c8c7b0a81dd99c5163cbd3023b11682a52b57f6ec52->enter($__internal_9f5e3a344c01b774cb950c8c7b0a81dd99c5163cbd3023b11682a52b57f6ec52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5f796bdd589f9f56257ca9717cdd65780fc53deb19514421869529700136e728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f796bdd589f9f56257ca9717cdd65780fc53deb19514421869529700136e728->enter($__internal_5f796bdd589f9f56257ca9717cdd65780fc53deb19514421869529700136e728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
.search
{
\twidth:700px;
\tbackground-color:white;
\tmargin-top:50px;
\tmargin-left:190px;
\theight:90px;
\tbox-shadow:10px 10px 10px ;
}
.btn
{
\t
\tbackground-image:url('../fonts/cherche.png');
\theight:90px;
\twidth:100px;
\tmargin-left:50px;

\t
}
";
        // line 29
        echo "</style>
";
        
        $__internal_5f796bdd589f9f56257ca9717cdd65780fc53deb19514421869529700136e728->leave($__internal_5f796bdd589f9f56257ca9717cdd65780fc53deb19514421869529700136e728_prof);

        
        $__internal_9f5e3a344c01b774cb950c8c7b0a81dd99c5163cbd3023b11682a52b57f6ec52->leave($__internal_9f5e3a344c01b774cb950c8c7b0a81dd99c5163cbd3023b11682a52b57f6ec52_prof);

    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        $__internal_1b6337a202d9749d32be03df4bcafd6b54059d97b6a6bc44cbcf027b6e13f0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6337a202d9749d32be03df4bcafd6b54059d97b6a6bc44cbcf027b6e13f0ab->enter($__internal_1b6337a202d9749d32be03df4bcafd6b54059d97b6a6bc44cbcf027b6e13f0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_eb892ef0bcec1709127721a539205c4561d0ec4988de609cc36b4d236f0cb22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb892ef0bcec1709127721a539205c4561d0ec4988de609cc36b4d236f0cb22c->enter($__internal_eb892ef0bcec1709127721a539205c4561d0ec4988de609cc36b4d236f0cb22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        echo " 
\t<div class=\"Main-agile\">
\t\t<!-- banner -->
\t\t<div id=\"home\" class=\"w3ls-banner\"> 
\t\t\t<!-- banner-text -->
\t\t\t<div class=\"w3layouts-banner-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"agileits-banner-info\">
\t\t\t\t\t\t<span>Finding Your House is Much </span>
\t\t\t\t\t\t<div class=\"rw-words rw-words-1\">
\t\t\t\t\t\t\t<span>Easier now!</span>
\t\t\t\t\t\t\t<span>Best Estate</span>
\t\t\t\t\t\t\t<span>Happiness</span>
\t\t\t\t\t\t\t<span>Wonder</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t\t <div class=\"agileits_w3layouts_more menu__item\">
\t\t\t\t\t\t\t<form method=\"post\"action=\"\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top:10px;\">Type de biens</h5>
\t\t\t\t\t\t\t\t\t<select name=\"type\" style=\"margin-top:10px;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">  </option> 
\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "nomtype", array()), "html", null, true);
            echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top:10px;\">Localite</h5>
\t\t\t\t\t\t\t\t\t<select name=\"localite\" style=\"margin-top:10px;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">  </option> 
\t\t\t\t\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 65
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "nomlocal", array()), "html", null, true);
            echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top:10px;\">Budget</h5>
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"prixlocation\" style=\"margin-top:10px;\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"search\" value=\"\" class=\"btn\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</form> 
\t\t\t\t\t\t\t";
        // line 84
        echo "\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t<div class=\"clearfix\"> </div>
\t<!-- //banner-text -->
</div>\t

";
        
        $__internal_eb892ef0bcec1709127721a539205c4561d0ec4988de609cc36b4d236f0cb22c->leave($__internal_eb892ef0bcec1709127721a539205c4561d0ec4988de609cc36b4d236f0cb22c_prof);

        
        $__internal_1b6337a202d9749d32be03df4bcafd6b54059d97b6a6bc44cbcf027b6e13f0ab->leave($__internal_1b6337a202d9749d32be03df4bcafd6b54059d97b6a6bc44cbcf027b6e13f0ab_prof);

    }

    // line 96
    public function block_aside($context, array $blocks = array())
    {
        $__internal_0231d22343e1514c6687874d961bacf3252b2ef3b358cc10228563376351c660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0231d22343e1514c6687874d961bacf3252b2ef3b358cc10228563376351c660->enter($__internal_0231d22343e1514c6687874d961bacf3252b2ef3b358cc10228563376351c660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_d00553c734f5f9daaa8b2ee252aacbe9e6f3b3fe3f7a9d8f8545d0fbc6b7ad70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00553c734f5f9daaa8b2ee252aacbe9e6f3b3fe3f7a9d8f8545d0fbc6b7ad70->enter($__internal_d00553c734f5f9daaa8b2ee252aacbe9e6f3b3fe3f7a9d8f8545d0fbc6b7ad70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 97
        echo "<div class=\"container\"> 
\t\t<h3 class=\"w3l-title\">Our Gallery</h3>
\t</div>
<div id=\"gallery\" class=\"gallery\" style=\"display:flex;\"> 
\t
\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 103
            echo "\t<div class=\"agileinfo-gallery-row\" >
\t\t";
            // line 105
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 106
                echo "\t\t\t
\t\t\t
\t\t\t<a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\" alt=\"\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
                echo "\"/> 
\t\t\t\t<div class=\"agile-figcaption\" style=\"margin-top:-20px;\">
\t\t\t\t  
\t\t\t\t  <p>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
                echo " <br> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "localite", array()), "html", null, true);
                echo " <br> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
                echo "FCFA</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t\t <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
                echo "\"><button><span class=\"violet\">RESERVER</span></button></a>

\t\t\t
\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t";
            // line 121
            echo "\t\t<div class=\"clearfix\"> </div>
\t</div> 
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "</div> 

";
        
        $__internal_d00553c734f5f9daaa8b2ee252aacbe9e6f3b3fe3f7a9d8f8545d0fbc6b7ad70->leave($__internal_d00553c734f5f9daaa8b2ee252aacbe9e6f3b3fe3f7a9d8f8545d0fbc6b7ad70_prof);

        
        $__internal_0231d22343e1514c6687874d961bacf3252b2ef3b358cc10228563376351c660->leave($__internal_0231d22343e1514c6687874d961bacf3252b2ef3b358cc10228563376351c660_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Front:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 124,  267 => 121,  265 => 120,  254 => 115,  244 => 112,  236 => 109,  232 => 108,  228 => 106,  223 => 105,  220 => 103,  216 => 102,  209 => 97,  200 => 96,  179 => 84,  172 => 78,  161 => 68,  151 => 66,  148 => 65,  144 => 64,  136 => 58,  126 => 56,  123 => 55,  119 => 54,  86 => 31,  75 => 29,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block stylesheets %}
{{ parent ()}}
<style>
.search
{
\twidth:700px;
\tbackground-color:white;
\tmargin-top:50px;
\tmargin-left:190px;
\theight:90px;
\tbox-shadow:10px 10px 10px ;
}
.btn
{
\t
\tbackground-image:url('../fonts/cherche.png');
\theight:90px;
\twidth:100px;
\tmargin-left:50px;

\t
}
{# .img
{
\twidth:200%;
} #}
</style>
{% endblock %}
 {% block main %} 
\t<div class=\"Main-agile\">
\t\t<!-- banner -->
\t\t<div id=\"home\" class=\"w3ls-banner\"> 
\t\t\t<!-- banner-text -->
\t\t\t<div class=\"w3layouts-banner-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"agileits-banner-info\">
\t\t\t\t\t\t<span>Finding Your House is Much </span>
\t\t\t\t\t\t<div class=\"rw-words rw-words-1\">
\t\t\t\t\t\t\t<span>Easier now!</span>
\t\t\t\t\t\t\t<span>Best Estate</span>
\t\t\t\t\t\t\t<span>Happiness</span>
\t\t\t\t\t\t\t<span>Wonder</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t\t <div class=\"agileits_w3layouts_more menu__item\">
\t\t\t\t\t\t\t<form method=\"post\"action=\"\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top:10px;\">Type de biens</h5>
\t\t\t\t\t\t\t\t\t<select name=\"type\" style=\"margin-top:10px;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">  </option> 
\t\t\t\t\t\t\t\t\t\t\t{% for type in types %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{type.id}}\" > {{type.nomtype}} </option>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top:10px;\">Localite</h5>
\t\t\t\t\t\t\t\t\t<select name=\"localite\" style=\"margin-top:10px;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">  </option> 
\t\t\t\t\t\t\t\t\t\t\t{% for localite in localites %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{localite.id}}\" > {{localite.nomlocal}} </option>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top:10px;\">Budget</h5>
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"prixlocation\" style=\"margin-top:10px;\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"search\" value=\"\" class=\"btn\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{# <img type=\"submit\" col-md-3 col-sm-3 col-xs-6 w3gallery-gridssrc=\"{{asset('fonts/cherche.png')}}\" class=\"btn\" name=\"search\"> #}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</form> 
\t\t\t\t\t\t\t{# <a href=\"#\" class=\"menu__link\" data-toggle=\"modal\" data-target=\"#myModal\">Learn More</a> #}
\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t<div class=\"clearfix\"> </div>
\t<!-- //banner-text -->
</div>\t

{% endblock %}
{% block aside %}
<div class=\"container\"> 
\t\t<h3 class=\"w3l-title\">Our Gallery</h3>
\t</div>
<div id=\"gallery\" class=\"gallery\" style=\"display:flex;\"> 
\t
\t{% for bien in biens %}
\t<div class=\"agileinfo-gallery-row\" >
\t\t{# <div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\"> #}
\t\t\t{% for image in bien.images %}
\t\t\t
\t\t\t
\t\t\t<a href=\"{{asset('images/'~image.image)}}\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"{{asset('images/'~image.image)}}\" alt=\"\" title=\"{{bien.typebien}}\"/> 
\t\t\t\t<div class=\"agile-figcaption\" style=\"margin-top:-20px;\">
\t\t\t\t  
\t\t\t\t  <p>{{bien.nombien}} <br> {{bien.localite}} <br> {{bien.prixlocation}}FCFA</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t\t <a href=\"{{path('reserver', {'id':bien.id})}}\"><button><span class=\"violet\">RESERVER</span></button></a>

\t\t\t
\t\t\t
\t\t\t{% endfor %}
\t\t{# </div> #}
\t\t<div class=\"clearfix\"> </div>
\t</div> 
\t{% endfor %}
</div> 

{% endblock %}", "FKImmoBundle:Front:view.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Front/view.html.twig");
    }
}
