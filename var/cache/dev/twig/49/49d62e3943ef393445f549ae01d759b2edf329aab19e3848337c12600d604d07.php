<?php

/* FKImmoBundle:Front:confirm.html.twig */
class __TwigTemplate_7e5822bf6374bc42d38c4c381136773c5a85eedb0ef35fa30dd08b8790de5d6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FKImmoBundle:Front:confirm.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d6947d1df657a5b3353ce6ac613f3634ff4990a223ed949fc30be3c7e6c4bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6947d1df657a5b3353ce6ac613f3634ff4990a223ed949fc30be3c7e6c4bb3->enter($__internal_9d6947d1df657a5b3353ce6ac613f3634ff4990a223ed949fc30be3c7e6c4bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:confirm.html.twig"));

        $__internal_44c3bc21351a08265f316ab6b57eca72a8f081c16bea618acdc1573d44ed44d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c3bc21351a08265f316ab6b57eca72a8f081c16bea618acdc1573d44ed44d4->enter($__internal_44c3bc21351a08265f316ab6b57eca72a8f081c16bea618acdc1573d44ed44d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6947d1df657a5b3353ce6ac613f3634ff4990a223ed949fc30be3c7e6c4bb3->leave($__internal_9d6947d1df657a5b3353ce6ac613f3634ff4990a223ed949fc30be3c7e6c4bb3_prof);

        
        $__internal_44c3bc21351a08265f316ab6b57eca72a8f081c16bea618acdc1573d44ed44d4->leave($__internal_44c3bc21351a08265f316ab6b57eca72a8f081c16bea618acdc1573d44ed44d4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_af0501fb78a52ef4433a50af76ca72516311956c20d391237d7b86f41a0a853b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0501fb78a52ef4433a50af76ca72516311956c20d391237d7b86f41a0a853b->enter($__internal_af0501fb78a52ef4433a50af76ca72516311956c20d391237d7b86f41a0a853b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dbcfde34fe32394eec052de5c188ac0d725845995fd567e2f7b633ef7247875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbcfde34fe32394eec052de5c188ac0d725845995fd567e2f7b633ef7247875->enter($__internal_0dbcfde34fe32394eec052de5c188ac0d725845995fd567e2f7b633ef7247875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
 <h1> welcome </h1>
 <p> reservation prise en compte </p>
";
        
        $__internal_0dbcfde34fe32394eec052de5c188ac0d725845995fd567e2f7b633ef7247875->leave($__internal_0dbcfde34fe32394eec052de5c188ac0d725845995fd567e2f7b633ef7247875_prof);

        
        $__internal_af0501fb78a52ef4433a50af76ca72516311956c20d391237d7b86f41a0a853b->leave($__internal_af0501fb78a52ef4433a50af76ca72516311956c20d391237d7b86f41a0a853b_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Front:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  11 => 1,);
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


 {% block body %} 
 <h1> welcome </h1>
 <p> reservation prise en compte </p>
{% endblock %}", "FKImmoBundle:Front:confirm.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Front/confirm.html.twig");
    }
}
