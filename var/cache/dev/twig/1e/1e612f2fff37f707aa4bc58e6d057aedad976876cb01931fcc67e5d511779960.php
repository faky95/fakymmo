<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_aad7bdb8bad585303c30ad2cba73483a4dad8155197b7cf3998e1764a36ef4e0 extends Twig_Template
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
        $__internal_b0db687e8a88259f1c411f0a826096a78d5702c07f3c30eb73a148b2d0fe7413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0db687e8a88259f1c411f0a826096a78d5702c07f3c30eb73a148b2d0fe7413->enter($__internal_b0db687e8a88259f1c411f0a826096a78d5702c07f3c30eb73a148b2d0fe7413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_20af892b9b779aaa604e0c4750fabaa7660feb1da033cccd714545b69e886ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20af892b9b779aaa604e0c4750fabaa7660feb1da033cccd714545b69e886ae7->enter($__internal_20af892b9b779aaa604e0c4750fabaa7660feb1da033cccd714545b69e886ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_b0db687e8a88259f1c411f0a826096a78d5702c07f3c30eb73a148b2d0fe7413->leave($__internal_b0db687e8a88259f1c411f0a826096a78d5702c07f3c30eb73a148b2d0fe7413_prof);

        
        $__internal_20af892b9b779aaa604e0c4750fabaa7660feb1da033cccd714545b69e886ae7->leave($__internal_20af892b9b779aaa604e0c4750fabaa7660feb1da033cccd714545b69e886ae7_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
