<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_1d4208e28c97aafdf261add63af814327652c065a0773be554c9ec12a09c8388 extends Twig_Template
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
        $__internal_999b9e525394cf7b8e5d716df5fb7460bc817867423fa90ffa8a864224924b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999b9e525394cf7b8e5d716df5fb7460bc817867423fa90ffa8a864224924b3e->enter($__internal_999b9e525394cf7b8e5d716df5fb7460bc817867423fa90ffa8a864224924b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_d1cb90264d30b9b1d7d937b99f1a2df8eb72da3a867268a110ee5b47198dd6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cb90264d30b9b1d7d937b99f1a2df8eb72da3a867268a110ee5b47198dd6e8->enter($__internal_d1cb90264d30b9b1d7d937b99f1a2df8eb72da3a867268a110ee5b47198dd6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_999b9e525394cf7b8e5d716df5fb7460bc817867423fa90ffa8a864224924b3e->leave($__internal_999b9e525394cf7b8e5d716df5fb7460bc817867423fa90ffa8a864224924b3e_prof);

        
        $__internal_d1cb90264d30b9b1d7d937b99f1a2df8eb72da3a867268a110ee5b47198dd6e8->leave($__internal_d1cb90264d30b9b1d7d937b99f1a2df8eb72da3a867268a110ee5b47198dd6e8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
