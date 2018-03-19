<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_13d3c2649235474de7f5cd7e0f8ce04269b98ad0c09c3216b1edd703225d41e9 extends Twig_Template
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
        $__internal_9b29aed0ff9563fbace47698fe7f2d47669f9e66f332dd3f0a387e319a076270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b29aed0ff9563fbace47698fe7f2d47669f9e66f332dd3f0a387e319a076270->enter($__internal_9b29aed0ff9563fbace47698fe7f2d47669f9e66f332dd3f0a387e319a076270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_3b5bc00346021ffeaf1d0ae8e86293259daa78bb90b59fef4dd8c199dbbee69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5bc00346021ffeaf1d0ae8e86293259daa78bb90b59fef4dd8c199dbbee69b->enter($__internal_3b5bc00346021ffeaf1d0ae8e86293259daa78bb90b59fef4dd8c199dbbee69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_9b29aed0ff9563fbace47698fe7f2d47669f9e66f332dd3f0a387e319a076270->leave($__internal_9b29aed0ff9563fbace47698fe7f2d47669f9e66f332dd3f0a387e319a076270_prof);

        
        $__internal_3b5bc00346021ffeaf1d0ae8e86293259daa78bb90b59fef4dd8c199dbbee69b->leave($__internal_3b5bc00346021ffeaf1d0ae8e86293259daa78bb90b59fef4dd8c199dbbee69b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
", "@EasyAdmin/default/field_string.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
