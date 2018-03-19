<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_f2194983ecfff39d15c05d441d20538ac500d24738a6eafa11952b79fc617db3 extends Twig_Template
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
        $__internal_b61a3179d0e6a3e3614aee2ca8f210b1e5f049a266d2a71e86a490a09a90090b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61a3179d0e6a3e3614aee2ca8f210b1e5f049a266d2a71e86a490a09a90090b->enter($__internal_b61a3179d0e6a3e3614aee2ca8f210b1e5f049a266d2a71e86a490a09a90090b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_63cc39e25828ee95cde9a580601801eb4b63e80ec8953f785530cc7b9c6e48ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cc39e25828ee95cde9a580601801eb4b63e80ec8953f785530cc7b9c6e48ca->enter($__internal_63cc39e25828ee95cde9a580601801eb4b63e80ec8953f785530cc7b9c6e48ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_b61a3179d0e6a3e3614aee2ca8f210b1e5f049a266d2a71e86a490a09a90090b->leave($__internal_b61a3179d0e6a3e3614aee2ca8f210b1e5f049a266d2a71e86a490a09a90090b_prof);

        
        $__internal_63cc39e25828ee95cde9a580601801eb4b63e80ec8953f785530cc7b9c6e48ca->leave($__internal_63cc39e25828ee95cde9a580601801eb4b63e80ec8953f785530cc7b9c6e48ca_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
", "EasyAdminBundle:default:field_text.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
