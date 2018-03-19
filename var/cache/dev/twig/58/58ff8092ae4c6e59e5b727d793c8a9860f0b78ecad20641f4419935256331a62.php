<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_215804932c5d58576a08693bdae6b66c0700b51478716785ad7b2c0e250a535a extends Twig_Template
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
        $__internal_14c4bcc31ef6ed994ee95fd832f0ac1f848ea8a2ffc3842aaf13c3d31137fbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c4bcc31ef6ed994ee95fd832f0ac1f848ea8a2ffc3842aaf13c3d31137fbcf->enter($__internal_14c4bcc31ef6ed994ee95fd832f0ac1f848ea8a2ffc3842aaf13c3d31137fbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        $__internal_cfb9ad7365ba731a997782fef4a6f7ade07c5cd7758d374fd472e21d1e881cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb9ad7365ba731a997782fef4a6f7ade07c5cd7758d374fd472e21d1e881cd7->enter($__internal_cfb9ad7365ba731a997782fef4a6f7ade07c5cd7758d374fd472e21d1e881cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_14c4bcc31ef6ed994ee95fd832f0ac1f848ea8a2ffc3842aaf13c3d31137fbcf->leave($__internal_14c4bcc31ef6ed994ee95fd832f0ac1f848ea8a2ffc3842aaf13c3d31137fbcf_prof);

        
        $__internal_cfb9ad7365ba731a997782fef4a6f7ade07c5cd7758d374fd472e21d1e881cd7->leave($__internal_cfb9ad7365ba731a997782fef4a6f7ade07c5cd7758d374fd472e21d1e881cd7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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
", "@EasyAdmin/default/field_date.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
