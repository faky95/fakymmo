<?php

/* FKImmoBundle:Api:all.html.twig */
class __TwigTemplate_a9ddf429e44b68dbd9b177ab44803beaa540e50277c1d01ec22b91279cec0783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FKImmoBundle:Api:all.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ddce875c5160606051cf6f655274fb6a934c1c255dff48dbcbd2c7c1a5817e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ddce875c5160606051cf6f655274fb6a934c1c255dff48dbcbd2c7c1a5817e8->enter($__internal_2ddce875c5160606051cf6f655274fb6a934c1c255dff48dbcbd2c7c1a5817e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Api:all.html.twig"));

        $__internal_f8d930768755e2017200e435173805827261bbd3928833d9389c858944d0a0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d930768755e2017200e435173805827261bbd3928833d9389c858944d0a0b1->enter($__internal_f8d930768755e2017200e435173805827261bbd3928833d9389c858944d0a0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Api:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ddce875c5160606051cf6f655274fb6a934c1c255dff48dbcbd2c7c1a5817e8->leave($__internal_2ddce875c5160606051cf6f655274fb6a934c1c255dff48dbcbd2c7c1a5817e8_prof);

        
        $__internal_f8d930768755e2017200e435173805827261bbd3928833d9389c858944d0a0b1->leave($__internal_f8d930768755e2017200e435173805827261bbd3928833d9389c858944d0a0b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c999292db06e6b5ee4648366aa67271afe55a89be69abbdad5964171a1c276b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c999292db06e6b5ee4648366aa67271afe55a89be69abbdad5964171a1c276b8->enter($__internal_c999292db06e6b5ee4648366aa67271afe55a89be69abbdad5964171a1c276b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c24c6f00a9fe4327905f71aa45925aa73d6a2181dbce35708c94cc2dbe565eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24c6f00a9fe4327905f71aa45925aa73d6a2181dbce35708c94cc2dbe565eb6->enter($__internal_c24c6f00a9fe4327905f71aa45925aa73d6a2181dbce35708c94cc2dbe565eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FKImmoBundle:Api:all";
        
        $__internal_c24c6f00a9fe4327905f71aa45925aa73d6a2181dbce35708c94cc2dbe565eb6->leave($__internal_c24c6f00a9fe4327905f71aa45925aa73d6a2181dbce35708c94cc2dbe565eb6_prof);

        
        $__internal_c999292db06e6b5ee4648366aa67271afe55a89be69abbdad5964171a1c276b8->leave($__internal_c999292db06e6b5ee4648366aa67271afe55a89be69abbdad5964171a1c276b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f9da883dd17e2b5db2bd5a0308aa6dfb395e1c3128021cb022d422f76035a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9da883dd17e2b5db2bd5a0308aa6dfb395e1c3128021cb022d422f76035a25->enter($__internal_5f9da883dd17e2b5db2bd5a0308aa6dfb395e1c3128021cb022d422f76035a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f919b7b972597f595c55aab5bef06cb5499b981d76e4be588eda449c61fdf189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f919b7b972597f595c55aab5bef06cb5499b981d76e4be588eda449c61fdf189->enter($__internal_f919b7b972597f595c55aab5bef06cb5499b981d76e4be588eda449c61fdf189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Api:all page</h1>
";
        
        $__internal_f919b7b972597f595c55aab5bef06cb5499b981d76e4be588eda449c61fdf189->leave($__internal_f919b7b972597f595c55aab5bef06cb5499b981d76e4be588eda449c61fdf189_prof);

        
        $__internal_5f9da883dd17e2b5db2bd5a0308aa6dfb395e1c3128021cb022d422f76035a25->leave($__internal_5f9da883dd17e2b5db2bd5a0308aa6dfb395e1c3128021cb022d422f76035a25_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Api:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}FKImmoBundle:Api:all{% endblock %}

{% block body %}
<h1>Welcome to the Api:all page</h1>
{% endblock %}
", "FKImmoBundle:Api:all.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Api/all.html.twig");
    }
}
