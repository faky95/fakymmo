<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_c72429bbd657f7fd9b7483f9d8da755508301c82ea8e25464b8107385eda928e extends Twig_Template
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
        $__internal_1a12a1a0b99484a02ec5a9cad73b1420aa1761e7ca76d5e52e19695d6b56bf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a12a1a0b99484a02ec5a9cad73b1420aa1761e7ca76d5e52e19695d6b56bf08->enter($__internal_1a12a1a0b99484a02ec5a9cad73b1420aa1761e7ca76d5e52e19695d6b56bf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_f4a8e6ce33eae44016d4a7aac95b8984353052f3ed39703a17129c4aac6018ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a8e6ce33eae44016d4a7aac95b8984353052f3ed39703a17129c4aac6018ea->enter($__internal_f4a8e6ce33eae44016d4a7aac95b8984353052f3ed39703a17129c4aac6018ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        
        $__internal_1a12a1a0b99484a02ec5a9cad73b1420aa1761e7ca76d5e52e19695d6b56bf08->leave($__internal_1a12a1a0b99484a02ec5a9cad73b1420aa1761e7ca76d5e52e19695d6b56bf08_prof);

        
        $__internal_f4a8e6ce33eae44016d4a7aac95b8984353052f3ed39703a17129c4aac6018ea->leave($__internal_f4a8e6ce33eae44016d4a7aac95b8984353052f3ed39703a17129c4aac6018ea_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_864ccf2d660e6ed1e52762f189f4106ebb96c7bc845739220c74f059aff07838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864ccf2d660e6ed1e52762f189f4106ebb96c7bc845739220c74f059aff07838->enter($__internal_864ccf2d660e6ed1e52762f189f4106ebb96c7bc845739220c74f059aff07838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c957993bc2b4a87f5ef4be941d838a919468d32d586905acf39648bdd708e178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c957993bc2b4a87f5ef4be941d838a919468d32d586905acf39648bdd708e178->enter($__internal_c957993bc2b4a87f5ef4be941d838a919468d32d586905acf39648bdd708e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">

";
        
        $__internal_c957993bc2b4a87f5ef4be941d838a919468d32d586905acf39648bdd708e178->leave($__internal_c957993bc2b4a87f5ef4be941d838a919468d32d586905acf39648bdd708e178_prof);

        
        $__internal_864ccf2d660e6ed1e52762f189f4106ebb96c7bc845739220c74f059aff07838->leave($__internal_864ccf2d660e6ed1e52762f189f4106ebb96c7bc845739220c74f059aff07838_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
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
</style>", "@FOSUser/Security/login_content.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
