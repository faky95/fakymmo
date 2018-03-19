<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_85033ba2e071cd0e87aa62add8d0c5c2b62466670d3301191c965dd23768c4be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_227dfe650589dfbafde534fb439b2e1326284f84bf6e0e939fb3f3733a9c2383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227dfe650589dfbafde534fb439b2e1326284f84bf6e0e939fb3f3733a9c2383->enter($__internal_227dfe650589dfbafde534fb439b2e1326284f84bf6e0e939fb3f3733a9c2383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_9e46befe8f2e3fbae3fcc14633e7b17b4bda06ac748af3c65a5de3987ebfcae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e46befe8f2e3fbae3fcc14633e7b17b4bda06ac748af3c65a5de3987ebfcae7->enter($__internal_9e46befe8f2e3fbae3fcc14633e7b17b4bda06ac748af3c65a5de3987ebfcae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_227dfe650589dfbafde534fb439b2e1326284f84bf6e0e939fb3f3733a9c2383->leave($__internal_227dfe650589dfbafde534fb439b2e1326284f84bf6e0e939fb3f3733a9c2383_prof);

        
        $__internal_9e46befe8f2e3fbae3fcc14633e7b17b4bda06ac748af3c65a5de3987ebfcae7->leave($__internal_9e46befe8f2e3fbae3fcc14633e7b17b4bda06ac748af3c65a5de3987ebfcae7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
