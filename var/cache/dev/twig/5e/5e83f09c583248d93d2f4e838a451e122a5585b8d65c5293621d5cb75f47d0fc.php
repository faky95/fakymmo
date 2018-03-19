<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_6db57c690676bd1710b3e7a5f4646a4fdf6eec95b5d1c5704c5a2dec7cfde738 extends Twig_Template
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
        $__internal_527a8cb6e1dc491d0d6d42950d08bc66f0104607e608ca460d255174d0f50496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527a8cb6e1dc491d0d6d42950d08bc66f0104607e608ca460d255174d0f50496->enter($__internal_527a8cb6e1dc491d0d6d42950d08bc66f0104607e608ca460d255174d0f50496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_9313d028119cadcdffb6992277c502b31290a22cd84240e90e4c5cfe56c9b6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9313d028119cadcdffb6992277c502b31290a22cd84240e90e4c5cfe56c9b6c2->enter($__internal_9313d028119cadcdffb6992277c502b31290a22cd84240e90e4c5cfe56c9b6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_527a8cb6e1dc491d0d6d42950d08bc66f0104607e608ca460d255174d0f50496->leave($__internal_527a8cb6e1dc491d0d6d42950d08bc66f0104607e608ca460d255174d0f50496_prof);

        
        $__internal_9313d028119cadcdffb6992277c502b31290a22cd84240e90e4c5cfe56c9b6c2->leave($__internal_9313d028119cadcdffb6992277c502b31290a22cd84240e90e4c5cfe56c9b6c2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
