<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_be618040168d5de075098cc93a85e48d35509c886d6f823697b524bb999eb396 extends Twig_Template
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
        $__internal_c03e4518c5ad3c36d8fdaac0b9ac7b62fa762f736b86decd6eac295952e617f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c03e4518c5ad3c36d8fdaac0b9ac7b62fa762f736b86decd6eac295952e617f1->enter($__internal_c03e4518c5ad3c36d8fdaac0b9ac7b62fa762f736b86decd6eac295952e617f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_7afff1363b083d03aaef77dddb2b615911b402bf7f974da496db34af7b28ee3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afff1363b083d03aaef77dddb2b615911b402bf7f974da496db34af7b28ee3f->enter($__internal_7afff1363b083d03aaef77dddb2b615911b402bf7f974da496db34af7b28ee3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_c03e4518c5ad3c36d8fdaac0b9ac7b62fa762f736b86decd6eac295952e617f1->leave($__internal_c03e4518c5ad3c36d8fdaac0b9ac7b62fa762f736b86decd6eac295952e617f1_prof);

        
        $__internal_7afff1363b083d03aaef77dddb2b615911b402bf7f974da496db34af7b28ee3f->leave($__internal_7afff1363b083d03aaef77dddb2b615911b402bf7f974da496db34af7b28ee3f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
