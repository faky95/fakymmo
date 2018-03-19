<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_bec64ab51830c5ee391a688534598047e717342fcbe46bb1bb7f18b6000be612 extends Twig_Template
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
        $__internal_b51af9ec6c7a9f435b5cd384dc79006df02fa8a2caf07c3313d50dbad5192057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51af9ec6c7a9f435b5cd384dc79006df02fa8a2caf07c3313d50dbad5192057->enter($__internal_b51af9ec6c7a9f435b5cd384dc79006df02fa8a2caf07c3313d50dbad5192057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_d4dcdd8720d25ce10ab715bc0e28233b1e5e12625ba5febc0664bcf20fae3903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4dcdd8720d25ce10ab715bc0e28233b1e5e12625ba5febc0664bcf20fae3903->enter($__internal_d4dcdd8720d25ce10ab715bc0e28233b1e5e12625ba5febc0664bcf20fae3903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_b51af9ec6c7a9f435b5cd384dc79006df02fa8a2caf07c3313d50dbad5192057->leave($__internal_b51af9ec6c7a9f435b5cd384dc79006df02fa8a2caf07c3313d50dbad5192057_prof);

        
        $__internal_d4dcdd8720d25ce10ab715bc0e28233b1e5e12625ba5febc0664bcf20fae3903->leave($__internal_d4dcdd8720d25ce10ab715bc0e28233b1e5e12625ba5febc0664bcf20fae3903_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
