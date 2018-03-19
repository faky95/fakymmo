<?php

/* FKImmoBundle:Front:proprio.html.twig */
class __TwigTemplate_552f0def626edd56dff19aca0ce125b69498bd5585192aba536c86d4911eb3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "FKImmoBundle:Front:proprio.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'aside' => array($this, 'block_aside'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddd341330889519de1996a82df89aace9067945b1ab480014a3b492ffb16c995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd341330889519de1996a82df89aace9067945b1ab480014a3b492ffb16c995->enter($__internal_ddd341330889519de1996a82df89aace9067945b1ab480014a3b492ffb16c995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:proprio.html.twig"));

        $__internal_fa3769cb6d0c9bd2d107f74c39af53137ec40901383ff704ca9df8ebccbea186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3769cb6d0c9bd2d107f74c39af53137ec40901383ff704ca9df8ebccbea186->enter($__internal_fa3769cb6d0c9bd2d107f74c39af53137ec40901383ff704ca9df8ebccbea186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:proprio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd341330889519de1996a82df89aace9067945b1ab480014a3b492ffb16c995->leave($__internal_ddd341330889519de1996a82df89aace9067945b1ab480014a3b492ffb16c995_prof);

        
        $__internal_fa3769cb6d0c9bd2d107f74c39af53137ec40901383ff704ca9df8ebccbea186->leave($__internal_fa3769cb6d0c9bd2d107f74c39af53137ec40901383ff704ca9df8ebccbea186_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a208d2a67bcd83318611dba06f1814bd70b350a626f215488c870603049c82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a208d2a67bcd83318611dba06f1814bd70b350a626f215488c870603049c82b->enter($__internal_0a208d2a67bcd83318611dba06f1814bd70b350a626f215488c870603049c82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31cc04a093ae78b9577c3f04209db366d1a81c7a930e50fe0247412de7471ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cc04a093ae78b9577c3f04209db366d1a81c7a930e50fe0247412de7471ecb->enter($__internal_31cc04a093ae78b9577c3f04209db366d1a81c7a930e50fe0247412de7471ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

 ";
        
        $__internal_31cc04a093ae78b9577c3f04209db366d1a81c7a930e50fe0247412de7471ecb->leave($__internal_31cc04a093ae78b9577c3f04209db366d1a81c7a930e50fe0247412de7471ecb_prof);

        
        $__internal_0a208d2a67bcd83318611dba06f1814bd70b350a626f215488c870603049c82b->leave($__internal_0a208d2a67bcd83318611dba06f1814bd70b350a626f215488c870603049c82b_prof);

    }

    // line 8
    public function block_aside($context, array $blocks = array())
    {
        $__internal_1a60c34edd1b65ab87369b08f9cf58970db81e5ddfa7dc2734d8f9b7049ffa98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a60c34edd1b65ab87369b08f9cf58970db81e5ddfa7dc2734d8f9b7049ffa98->enter($__internal_1a60c34edd1b65ab87369b08f9cf58970db81e5ddfa7dc2734d8f9b7049ffa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_b16d5d520830662fae353eefdee7b985808a9b22ff1689accf4902387209e3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16d5d520830662fae353eefdee7b985808a9b22ff1689accf4902387209e3e0->enter($__internal_b16d5d520830662fae353eefdee7b985808a9b22ff1689accf4902387209e3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 9
        echo "<div class=\"container\">
<div class=\"row\">
    <form class=\"col-md-6\" method=\"POST\">

    <div class=\"col-md-6\" >
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Numero Piece</label>
            <input type=\"number\" class=\"form-control\"  name=\"numpiece\" required=\"required\">
            
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Nom Complet</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"ENTER YOUR NAME\" name=\"nomComplet\" >
        
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Email address</label>
            <input type=\"email\" class=\"form-control\" placeholder=\"ENTER YOUR MAIL\" name=\"email\">
             
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Login</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"ENTER YOUR USERNAME\"name=\"login\">
          
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Password</label>
            <input type=\"password\" class=\"form-control\" placeholder=\"ENTER YOUR PASSWORD\" name=\"password\">
            
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Phone</label>
            <input type=\"number\" class=\"form-control\" placeholder=\"ENTER YOUR PHONE\" name=\"phone\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Code Banque</label>
            <input type=\"number\" class=\"form-control\" name=\"codebanque\">
        </div>
        </div>
        <div class=\"col-md-6 \" style=\"position:relative;left:300px;\">
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Nom Bien</label>
            <input type=\"text\" class=\"form-control\"  name=\"nombien\" required=\"required\">
            
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Montant Voulu</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"ENTER YOUR NAME\" name=\"montantProprio\">
        
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Type Bien</label>
                <select name=\"typebien\">
                    <option value=\"\"></option>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 64
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "nomtype", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "             </select>             
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Localite</label>
                <select name=\"localite\">
                    <option value=\"\"></option>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locals"] ?? $this->getContext($context, "locals")));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 73
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "nomlocal", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </select>          
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Description</label>
          <textarea class=\"form-control\" id=\"description\" name=\"description\" type=\"text\"></textarea>           
         </div>
      
   
        <input type=\"submit\" class=\"btn btn-primary\" value=\"ENREGISTRER\" name=\"save\" id=\"save\">
    </form>
</div>
</div>
  ";
        
        $__internal_b16d5d520830662fae353eefdee7b985808a9b22ff1689accf4902387209e3e0->leave($__internal_b16d5d520830662fae353eefdee7b985808a9b22ff1689accf4902387209e3e0_prof);

        
        $__internal_1a60c34edd1b65ab87369b08f9cf58970db81e5ddfa7dc2734d8f9b7049ffa98->leave($__internal_1a60c34edd1b65ab87369b08f9cf58970db81e5ddfa7dc2734d8f9b7049ffa98_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d51f2c3ec96b03baa4653b3d64aeee567519914b54282daed6c005c4312c331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d51f2c3ec96b03baa4653b3d64aeee567519914b54282daed6c005c4312c331->enter($__internal_8d51f2c3ec96b03baa4653b3d64aeee567519914b54282daed6c005c4312c331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e61f93c1d3896585b3fc67a06159f4cbf0646a5159041693482dbeb50338a9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61f93c1d3896585b3fc67a06159f4cbf0646a5159041693482dbeb50338a9eb->enter($__internal_e61f93c1d3896585b3fc67a06159f4cbf0646a5159041693482dbeb50338a9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
    <script>
    \$(document).ready(function()
    {
        \$('#save').on('click',function()
        {
            alert('Proposition prise en compte!!! Merci');
        });
    });
    </script>
 ";
        
        $__internal_e61f93c1d3896585b3fc67a06159f4cbf0646a5159041693482dbeb50338a9eb->leave($__internal_e61f93c1d3896585b3fc67a06159f4cbf0646a5159041693482dbeb50338a9eb_prof);

        
        $__internal_8d51f2c3ec96b03baa4653b3d64aeee567519914b54282daed6c005c4312c331->leave($__internal_8d51f2c3ec96b03baa4653b3d64aeee567519914b54282daed6c005c4312c331_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Front:proprio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 91,  194 => 90,  172 => 75,  161 => 73,  157 => 72,  149 => 66,  138 => 64,  134 => 63,  78 => 9,  69 => 8,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
 {% block stylesheets %}
  {{ parent() }} 
    <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

 {% endblock %}

{% block aside %}
<div class=\"container\">
<div class=\"row\">
    <form class=\"col-md-6\" method=\"POST\">

    <div class=\"col-md-6\" >
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Numero Piece</label>
            <input type=\"number\" class=\"form-control\"  name=\"numpiece\" required=\"required\">
            
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Nom Complet</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"ENTER YOUR NAME\" name=\"nomComplet\" >
        
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Email address</label>
            <input type=\"email\" class=\"form-control\" placeholder=\"ENTER YOUR MAIL\" name=\"email\">
             
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Login</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"ENTER YOUR USERNAME\"name=\"login\">
          
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Password</label>
            <input type=\"password\" class=\"form-control\" placeholder=\"ENTER YOUR PASSWORD\" name=\"password\">
            
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Phone</label>
            <input type=\"number\" class=\"form-control\" placeholder=\"ENTER YOUR PHONE\" name=\"phone\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Code Banque</label>
            <input type=\"number\" class=\"form-control\" name=\"codebanque\">
        </div>
        </div>
        <div class=\"col-md-6 \" style=\"position:relative;left:300px;\">
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Nom Bien</label>
            <input type=\"text\" class=\"form-control\"  name=\"nombien\" required=\"required\">
            
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Montant Voulu</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"ENTER YOUR NAME\" name=\"montantProprio\">
        
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Type Bien</label>
                <select name=\"typebien\">
                    <option value=\"\"></option>
                    {% for type in types %}
                        <option value=\"{{ type.id}}\">{{type.nomtype}}</option>
                    {% endfor %}
             </select>             
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Localite</label>
                <select name=\"localite\">
                    <option value=\"\"></option>
                    {% for local in locals %}
                        <option value=\"{{ local.id}}\">{{local.nomlocal}}</option>
                    {% endfor %}
                </select>          
        </div>
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Description</label>
          <textarea class=\"form-control\" id=\"description\" name=\"description\" type=\"text\"></textarea>           
         </div>
      
   
        <input type=\"submit\" class=\"btn btn-primary\" value=\"ENREGISTRER\" name=\"save\" id=\"save\">
    </form>
</div>
</div>
  {% endblock %} 


 {% block javascripts %}
    <script src=\"{{asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
    <script>
    \$(document).ready(function()
    {
        \$('#save').on('click',function()
        {
            alert('Proposition prise en compte!!! Merci');
        });
    });
    </script>
 {% endblock %}", "FKImmoBundle:Front:proprio.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Front/proprio.html.twig");
    }
}
