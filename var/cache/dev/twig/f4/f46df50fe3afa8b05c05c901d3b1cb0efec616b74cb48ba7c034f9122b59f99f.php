<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_eb9d2f509bcc20d15a41950548efb0796c86f605b24c9ecf92a6dfd7eaac3c2f extends Twig_Template
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
        $__internal_6e293c45c760ae0df5673148a847467f4e891735daa786c52c6c0861b4830241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e293c45c760ae0df5673148a847467f4e891735daa786c52c6c0861b4830241->enter($__internal_6e293c45c760ae0df5673148a847467f4e891735daa786c52c6c0861b4830241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_e187853c0c86b6a9e60cf8b5e73ca3f18b23c3ad6ec378de159bb2b073aa7cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e187853c0c86b6a9e60cf8b5e73ca3f18b23c3ad6ec378de159bb2b073aa7cc5->enter($__internal_e187853c0c86b6a9e60cf8b5e73ca3f18b23c3ad6ec378de159bb2b073aa7cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_6e293c45c760ae0df5673148a847467f4e891735daa786c52c6c0861b4830241->leave($__internal_6e293c45c760ae0df5673148a847467f4e891735daa786c52c6c0861b4830241_prof);

        
        $__internal_e187853c0c86b6a9e60cf8b5e73ca3f18b23c3ad6ec378de159bb2b073aa7cc5->leave($__internal_e187853c0c86b6a9e60cf8b5e73ca3f18b23c3ad6ec378de159bb2b073aa7cc5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
