<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_5a4ea35722618800cc2ed0e9e5b1ec8bd1d3ac17ece4431f2e4fca1a78f3d400 extends Twig_Template
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
        $__internal_56a1e5394fc01972355d809d2371bb11c8322c8fde068ff5fc6397c8d35c42b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a1e5394fc01972355d809d2371bb11c8322c8fde068ff5fc6397c8d35c42b3->enter($__internal_56a1e5394fc01972355d809d2371bb11c8322c8fde068ff5fc6397c8d35c42b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_a9ad3400cda1aa87fe525d1ae5d033b8e54a3b96c53ad9ac9b73c7f5aad0ce12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ad3400cda1aa87fe525d1ae5d033b8e54a3b96c53ad9ac9b73c7f5aad0ce12->enter($__internal_a9ad3400cda1aa87fe525d1ae5d033b8e54a3b96c53ad9ac9b73c7f5aad0ce12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_56a1e5394fc01972355d809d2371bb11c8322c8fde068ff5fc6397c8d35c42b3->leave($__internal_56a1e5394fc01972355d809d2371bb11c8322c8fde068ff5fc6397c8d35c42b3_prof);

        
        $__internal_a9ad3400cda1aa87fe525d1ae5d033b8e54a3b96c53ad9ac9b73c7f5aad0ce12->leave($__internal_a9ad3400cda1aa87fe525d1ae5d033b8e54a3b96c53ad9ac9b73c7f5aad0ce12_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_datetime.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
