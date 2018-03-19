<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_206b2e850e540b9c466f2975bfe3a6e9dbca3540be80758efa52096fe8bbe708 extends Twig_Template
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
        $__internal_409bb2ee1e15cc2685349badbfcb6a6e4c1434705b613c26ff66202ba746b725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409bb2ee1e15cc2685349badbfcb6a6e4c1434705b613c26ff66202ba746b725->enter($__internal_409bb2ee1e15cc2685349badbfcb6a6e4c1434705b613c26ff66202ba746b725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_81578bc32b695db48018da282e6d50eacc663909232450a9dfc1e18247535218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81578bc32b695db48018da282e6d50eacc663909232450a9dfc1e18247535218->enter($__internal_81578bc32b695db48018da282e6d50eacc663909232450a9dfc1e18247535218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_409bb2ee1e15cc2685349badbfcb6a6e4c1434705b613c26ff66202ba746b725->leave($__internal_409bb2ee1e15cc2685349badbfcb6a6e4c1434705b613c26ff66202ba746b725_prof);

        
        $__internal_81578bc32b695db48018da282e6d50eacc663909232450a9dfc1e18247535218->leave($__internal_81578bc32b695db48018da282e6d50eacc663909232450a9dfc1e18247535218_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
", "EasyAdminBundle:default:field_integer.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
