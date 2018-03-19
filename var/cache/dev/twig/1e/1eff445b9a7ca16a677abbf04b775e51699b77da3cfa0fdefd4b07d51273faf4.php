<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_72273d380f7c995e5214aedc39cbc3047d6e2cd07680d3cb850aa76197a3bde0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_65655f94923171b460653b99bce939c00976755ded41d0694a315b95ffa9b335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65655f94923171b460653b99bce939c00976755ded41d0694a315b95ffa9b335->enter($__internal_65655f94923171b460653b99bce939c00976755ded41d0694a315b95ffa9b335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_245e779a3e4582bd2688e9c862bfb73f4b414bbcb525d6a05553d201be8b9257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245e779a3e4582bd2688e9c862bfb73f4b414bbcb525d6a05553d201be8b9257->enter($__internal_245e779a3e4582bd2688e9c862bfb73f4b414bbcb525d6a05553d201be8b9257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65655f94923171b460653b99bce939c00976755ded41d0694a315b95ffa9b335->leave($__internal_65655f94923171b460653b99bce939c00976755ded41d0694a315b95ffa9b335_prof);

        
        $__internal_245e779a3e4582bd2688e9c862bfb73f4b414bbcb525d6a05553d201be8b9257->leave($__internal_245e779a3e4582bd2688e9c862bfb73f4b414bbcb525d6a05553d201be8b9257_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aaa3977a6611f615de19c1e0dc36d78d25b60ae1d577554201981da84e78080b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa3977a6611f615de19c1e0dc36d78d25b60ae1d577554201981da84e78080b->enter($__internal_aaa3977a6611f615de19c1e0dc36d78d25b60ae1d577554201981da84e78080b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_553dbd44445d2f44f1f9f7886aa3b48b18c2aada556b98e692f2b7b55256b598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553dbd44445d2f44f1f9f7886aa3b48b18c2aada556b98e692f2b7b55256b598->enter($__internal_553dbd44445d2f44f1f9f7886aa3b48b18c2aada556b98e692f2b7b55256b598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_553dbd44445d2f44f1f9f7886aa3b48b18c2aada556b98e692f2b7b55256b598->leave($__internal_553dbd44445d2f44f1f9f7886aa3b48b18c2aada556b98e692f2b7b55256b598_prof);

        
        $__internal_aaa3977a6611f615de19c1e0dc36d78d25b60ae1d577554201981da84e78080b->leave($__internal_aaa3977a6611f615de19c1e0dc36d78d25b60ae1d577554201981da84e78080b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
