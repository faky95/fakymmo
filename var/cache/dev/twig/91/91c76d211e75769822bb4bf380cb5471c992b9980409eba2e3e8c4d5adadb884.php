<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_b03af8098ab00c8e546203926d8fcb870799f98b8bb8c3534afefa348bca7e58 extends Twig_Template
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
        $__internal_5db51be18c000660faafa621793af1daaa8c7a3bf37ef69f99dc99f9a6341df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db51be18c000660faafa621793af1daaa8c7a3bf37ef69f99dc99f9a6341df4->enter($__internal_5db51be18c000660faafa621793af1daaa8c7a3bf37ef69f99dc99f9a6341df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_3368e0d05e17b81752d0ef0a870a7a3dc734835620f0a35006af071deaeec067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3368e0d05e17b81752d0ef0a870a7a3dc734835620f0a35006af071deaeec067->enter($__internal_3368e0d05e17b81752d0ef0a870a7a3dc734835620f0a35006af071deaeec067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_5db51be18c000660faafa621793af1daaa8c7a3bf37ef69f99dc99f9a6341df4->leave($__internal_5db51be18c000660faafa621793af1daaa8c7a3bf37ef69f99dc99f9a6341df4_prof);

        
        $__internal_3368e0d05e17b81752d0ef0a870a7a3dc734835620f0a35006af071deaeec067->leave($__internal_3368e0d05e17b81752d0ef0a870a7a3dc734835620f0a35006af071deaeec067_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
