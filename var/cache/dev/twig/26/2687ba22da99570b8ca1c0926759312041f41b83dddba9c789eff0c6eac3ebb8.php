<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9e7d495ac621006dbc7b745e6e0ed09fc4194c875a65379320c1fd9273f49a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9d3674067cf283003e5fbb333b6476433aaa2f5a620510900a0b920217c1623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d3674067cf283003e5fbb333b6476433aaa2f5a620510900a0b920217c1623->enter($__internal_b9d3674067cf283003e5fbb333b6476433aaa2f5a620510900a0b920217c1623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1d7f8b2e659c27e319dc171ce195ac638f7e2a96c7c6d85ddabd51f09d9e08d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7f8b2e659c27e319dc171ce195ac638f7e2a96c7c6d85ddabd51f09d9e08d3->enter($__internal_1d7f8b2e659c27e319dc171ce195ac638f7e2a96c7c6d85ddabd51f09d9e08d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d3674067cf283003e5fbb333b6476433aaa2f5a620510900a0b920217c1623->leave($__internal_b9d3674067cf283003e5fbb333b6476433aaa2f5a620510900a0b920217c1623_prof);

        
        $__internal_1d7f8b2e659c27e319dc171ce195ac638f7e2a96c7c6d85ddabd51f09d9e08d3->leave($__internal_1d7f8b2e659c27e319dc171ce195ac638f7e2a96c7c6d85ddabd51f09d9e08d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d36f0115ee5a96dd7511adbe5674f85d7b70a4829b54298cd28d38bc36665f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36f0115ee5a96dd7511adbe5674f85d7b70a4829b54298cd28d38bc36665f08->enter($__internal_d36f0115ee5a96dd7511adbe5674f85d7b70a4829b54298cd28d38bc36665f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fec5dcbc7ca7ee806b77af2a7bd1f31a78fdcaadf65d2408eb263b8fb6810daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec5dcbc7ca7ee806b77af2a7bd1f31a78fdcaadf65d2408eb263b8fb6810daf->enter($__internal_fec5dcbc7ca7ee806b77af2a7bd1f31a78fdcaadf65d2408eb263b8fb6810daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fec5dcbc7ca7ee806b77af2a7bd1f31a78fdcaadf65d2408eb263b8fb6810daf->leave($__internal_fec5dcbc7ca7ee806b77af2a7bd1f31a78fdcaadf65d2408eb263b8fb6810daf_prof);

        
        $__internal_d36f0115ee5a96dd7511adbe5674f85d7b70a4829b54298cd28d38bc36665f08->leave($__internal_d36f0115ee5a96dd7511adbe5674f85d7b70a4829b54298cd28d38bc36665f08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
