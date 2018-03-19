<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_5ca0f6b14dddc6385919e939e204bfbea52f96f5a5d90b03fda0170c2232c2ff extends Twig_Template
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
        $__internal_5855f15561d74d40af94963434b7290affc46420cae87a5800331fb7964584f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5855f15561d74d40af94963434b7290affc46420cae87a5800331fb7964584f1->enter($__internal_5855f15561d74d40af94963434b7290affc46420cae87a5800331fb7964584f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_de6600f492ef180eb83f2c0077bc647b42bcffe20358784104db6400deb7497c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6600f492ef180eb83f2c0077bc647b42bcffe20358784104db6400deb7497c->enter($__internal_de6600f492ef180eb83f2c0077bc647b42bcffe20358784104db6400deb7497c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_5855f15561d74d40af94963434b7290affc46420cae87a5800331fb7964584f1->leave($__internal_5855f15561d74d40af94963434b7290affc46420cae87a5800331fb7964584f1_prof);

        
        $__internal_de6600f492ef180eb83f2c0077bc647b42bcffe20358784104db6400deb7497c->leave($__internal_de6600f492ef180eb83f2c0077bc647b42bcffe20358784104db6400deb7497c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
", "EasyAdminBundle:default:field_float.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
