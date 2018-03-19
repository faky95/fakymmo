<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_e695ef2770d37790508ae27aeaf5b714a7db1ea9d81b4cc132fa5d061b76371a extends Twig_Template
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
        $__internal_b91b1bb4ecf763dd2a4597c26f583f4d7f6eaf452226c6a698987df3b1509440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91b1bb4ecf763dd2a4597c26f583f4d7f6eaf452226c6a698987df3b1509440->enter($__internal_b91b1bb4ecf763dd2a4597c26f583f4d7f6eaf452226c6a698987df3b1509440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_c7481221692ec9622be96c5ba0b4ddaa3c5ed5016ba26c91310fd5b4b89e2201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7481221692ec9622be96c5ba0b4ddaa3c5ed5016ba26c91310fd5b4b89e2201->enter($__internal_c7481221692ec9622be96c5ba0b4ddaa3c5ed5016ba26c91310fd5b4b89e2201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_b91b1bb4ecf763dd2a4597c26f583f4d7f6eaf452226c6a698987df3b1509440->leave($__internal_b91b1bb4ecf763dd2a4597c26f583f4d7f6eaf452226c6a698987df3b1509440_prof);

        
        $__internal_c7481221692ec9622be96c5ba0b4ddaa3c5ed5016ba26c91310fd5b4b89e2201->leave($__internal_c7481221692ec9622be96c5ba0b4ddaa3c5ed5016ba26c91310fd5b4b89e2201_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_guid.html.twig");
    }
}
