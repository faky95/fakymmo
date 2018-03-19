<?php

/* FKImmoBundle:Admin:agent.html.twig */
class __TwigTemplate_80b58328c96a5fc2aac6d79676bad7ca2464a045419bc92ce224c836ebbc0763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FKImmoBundle:Admin:agent.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5614d0edd93d687af4e9b67b23d3acca3da412d39b35a1ce47e0ccffada75fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5614d0edd93d687af4e9b67b23d3acca3da412d39b35a1ce47e0ccffada75fd7->enter($__internal_5614d0edd93d687af4e9b67b23d3acca3da412d39b35a1ce47e0ccffada75fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:agent.html.twig"));

        $__internal_9df9bb588df5285e258247f022f6327c4874953795aa952e5cbd013744ff5150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df9bb588df5285e258247f022f6327c4874953795aa952e5cbd013744ff5150->enter($__internal_9df9bb588df5285e258247f022f6327c4874953795aa952e5cbd013744ff5150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:agent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5614d0edd93d687af4e9b67b23d3acca3da412d39b35a1ce47e0ccffada75fd7->leave($__internal_5614d0edd93d687af4e9b67b23d3acca3da412d39b35a1ce47e0ccffada75fd7_prof);

        
        $__internal_9df9bb588df5285e258247f022f6327c4874953795aa952e5cbd013744ff5150->leave($__internal_9df9bb588df5285e258247f022f6327c4874953795aa952e5cbd013744ff5150_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a72abde17cc15da1d01d7d649d866eb290e4762ea97ac9dfd77db6bc6669d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a72abde17cc15da1d01d7d649d866eb290e4762ea97ac9dfd77db6bc6669d3->enter($__internal_11a72abde17cc15da1d01d7d649d866eb290e4762ea97ac9dfd77db6bc6669d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73427ce0f9220e46945808e3cfa011e9a12a4b5d0e30a41a9f454de342a72ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73427ce0f9220e46945808e3cfa011e9a12a4b5d0e30a41a9f454de342a72ff2->enter($__internal_73427ce0f9220e46945808e3cfa011e9a12a4b5d0e30a41a9f454de342a72ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_73427ce0f9220e46945808e3cfa011e9a12a4b5d0e30a41a9f454de342a72ff2->leave($__internal_73427ce0f9220e46945808e3cfa011e9a12a4b5d0e30a41a9f454de342a72ff2_prof);

        
        $__internal_11a72abde17cc15da1d01d7d649d866eb290e4762ea97ac9dfd77db6bc6669d3->leave($__internal_11a72abde17cc15da1d01d7d649d866eb290e4762ea97ac9dfd77db6bc6669d3_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block body %}

{% endblock %}", "FKImmoBundle:Admin:agent.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/agent.html.twig");
    }
}
