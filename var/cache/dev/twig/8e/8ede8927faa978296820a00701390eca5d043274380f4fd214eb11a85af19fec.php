<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_2faec5a2e9193499ecce1c3c31ae1b6a70111b761464227f57edff26654b2761 extends Twig_Template
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
        $__internal_8525245ec4ddbf34936506bbecca676f2953867422c2cf81e30247ed9c16f84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8525245ec4ddbf34936506bbecca676f2953867422c2cf81e30247ed9c16f84b->enter($__internal_8525245ec4ddbf34936506bbecca676f2953867422c2cf81e30247ed9c16f84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_1088b753937649f630814df2c9e8f30d3d0a173a658d2e8aa44a82976e127fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1088b753937649f630814df2c9e8f30d3d0a173a658d2e8aa44a82976e127fbf->enter($__internal_1088b753937649f630814df2c9e8f30d3d0a173a658d2e8aa44a82976e127fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_8525245ec4ddbf34936506bbecca676f2953867422c2cf81e30247ed9c16f84b->leave($__internal_8525245ec4ddbf34936506bbecca676f2953867422c2cf81e30247ed9c16f84b_prof);

        
        $__internal_1088b753937649f630814df2c9e8f30d3d0a173a658d2e8aa44a82976e127fbf->leave($__internal_1088b753937649f630814df2c9e8f30d3d0a173a658d2e8aa44a82976e127fbf_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
", "EasyAdminBundle:default:field_smallint.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
