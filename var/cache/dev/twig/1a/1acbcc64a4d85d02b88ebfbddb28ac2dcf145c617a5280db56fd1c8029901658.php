<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_e9c2243abbb7ffdb88b2052a962f19449dd5afddde98711c2b003f099f49b078 extends Twig_Template
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
        $__internal_4788ebe94a6456947816de59c3c8c1443280bbad3bfa02388967a9368b4dd5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4788ebe94a6456947816de59c3c8c1443280bbad3bfa02388967a9368b4dd5dc->enter($__internal_4788ebe94a6456947816de59c3c8c1443280bbad3bfa02388967a9368b4dd5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        $__internal_c24ae5d7d404dc48613be1216dd025d572c93fd3d9f8c23dbe7a81d932ec944d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24ae5d7d404dc48613be1216dd025d572c93fd3d9f8c23dbe7a81d932ec944d->enter($__internal_c24ae5d7d404dc48613be1216dd025d572c93fd3d9f8c23dbe7a81d932ec944d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_4788ebe94a6456947816de59c3c8c1443280bbad3bfa02388967a9368b4dd5dc->leave($__internal_4788ebe94a6456947816de59c3c8c1443280bbad3bfa02388967a9368b4dd5dc_prof);

        
        $__internal_c24ae5d7d404dc48613be1216dd025d572c93fd3d9f8c23dbe7a81d932ec944d->leave($__internal_c24ae5d7d404dc48613be1216dd025d572c93fd3d9f8c23dbe7a81d932ec944d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "@EasyAdmin/default/field_integer.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
