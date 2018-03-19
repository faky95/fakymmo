<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_e5e820a3dfe34ba0950bca8d965d7a740515c6f5098aded481c78e5855d5d907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00d4b1a1d86315e0176cac167db7ff6826fd98fbb035f107958a6a778dd63f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d4b1a1d86315e0176cac167db7ff6826fd98fbb035f107958a6a778dd63f8e->enter($__internal_00d4b1a1d86315e0176cac167db7ff6826fd98fbb035f107958a6a778dd63f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_ce9fad7fa703417a11aa413335fad65e9a012917faabe9457031edace921415a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9fad7fa703417a11aa413335fad65e9a012917faabe9457031edace921415a->enter($__internal_ce9fad7fa703417a11aa413335fad65e9a012917faabe9457031edace921415a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        $this->displayBlock('style', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "<div class=\"container\">
<h1 class=\"text-center\">Page d'Authentification</h1>

<i class=\"fas fa-user fa-10x\" id=\"fu\"></i>
<form id=\"formu\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 16
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 17
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 19
        echo "
<div class=\"col-lg-6\">

<div class=\"form-group\">

<label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />

</div>

</div>

<div class=\"col-lg-6\">
<div class=\"form-group\">

<label for=\"password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
<input class=\"form-control\"  type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

</div>

</div>


    
    
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"btn btn-success btn-sm\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"se connecter\" />
   <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\" text-white btn  btn-sm btn-info\"> s'inscrire</a>

</form>
</div>

<style>
#formu{
    position:relative;
    left:350px;
}
#fu{
     position:relative;
     top:180px;
     left:150px;
}
</style>";
        
        $__internal_00d4b1a1d86315e0176cac167db7ff6826fd98fbb035f107958a6a778dd63f8e->leave($__internal_00d4b1a1d86315e0176cac167db7ff6826fd98fbb035f107958a6a778dd63f8e_prof);

        
        $__internal_ce9fad7fa703417a11aa413335fad65e9a012917faabe9457031edace921415a->leave($__internal_ce9fad7fa703417a11aa413335fad65e9a012917faabe9457031edace921415a_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_b7d1048adee5a6edb1c2a7d2017f52af0e8ebf6c769660200bf43ad75139dab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d1048adee5a6edb1c2a7d2017f52af0e8ebf6c769660200bf43ad75139dab7->enter($__internal_b7d1048adee5a6edb1c2a7d2017f52af0e8ebf6c769660200bf43ad75139dab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_a0d1d27ede3dbc79bb07eb4ec3bb1f2a565004495ed05718bb7fcdda62261442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d1d27ede3dbc79bb07eb4ec3bb1f2a565004495ed05718bb7fcdda62261442->enter($__internal_a0d1d27ede3dbc79bb07eb4ec3bb1f2a565004495ed05718bb7fcdda62261442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">

";
        
        $__internal_a0d1d27ede3dbc79bb07eb4ec3bb1f2a565004495ed05718bb7fcdda62261442->leave($__internal_a0d1d27ede3dbc79bb07eb4ec3bb1f2a565004495ed05718bb7fcdda62261442_prof);

        
        $__internal_b7d1048adee5a6edb1c2a7d2017f52af0e8ebf6c769660200bf43ad75139dab7->leave($__internal_b7d1048adee5a6edb1c2a7d2017f52af0e8ebf6c769660200bf43ad75139dab7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 3,  125 => 2,  99 => 47,  94 => 45,  80 => 34,  68 => 25,  64 => 24,  57 => 19,  51 => 17,  49 => 16,  45 => 15,  39 => 11,  33 => 9,  31 => 8,  28 => 7,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block style %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">

{% endblock %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"container\">
<h1 class=\"text-center\">Page d'Authentification</h1>

<i class=\"fas fa-user fa-10x\" id=\"fu\"></i>
<form id=\"formu\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

<div class=\"col-lg-6\">

<div class=\"form-group\">

<label for=\"username\">{{ 'security.login.username'|trans }}</label>
<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />

</div>

</div>

<div class=\"col-lg-6\">
<div class=\"form-group\">

<label for=\"password\">{{ 'security.login.password'|trans }}</label>
<input class=\"form-control\"  type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

</div>

</div>


    
    
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    <input class=\"btn btn-success btn-sm\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"se connecter\" />
   <a href=\"{{ path('fos_user_registration_register') }}\" class=\" text-white btn  btn-sm btn-info\"> s'inscrire</a>

</form>
</div>

<style>
#formu{
    position:relative;
    left:350px;
}
#fu{
     position:relative;
     top:180px;
     left:150px;
}
</style>", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
