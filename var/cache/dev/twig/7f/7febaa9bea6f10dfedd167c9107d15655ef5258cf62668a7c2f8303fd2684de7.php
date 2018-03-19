<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7d35560c94ac08b11251be8dd77f574f30c93abc60f2da238b1665874ec97a08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f57496c46783aeb5247cbf768b70276fb09a965457b24a7c7d78ec3cdeb9e550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57496c46783aeb5247cbf768b70276fb09a965457b24a7c7d78ec3cdeb9e550->enter($__internal_f57496c46783aeb5247cbf768b70276fb09a965457b24a7c7d78ec3cdeb9e550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_b6d606a77ecd9df28300773dfc740893216a619ec752022ad032c09f1340a4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d606a77ecd9df28300773dfc740893216a619ec752022ad032c09f1340a4da->enter($__internal_b6d606a77ecd9df28300773dfc740893216a619ec752022ad032c09f1340a4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f57496c46783aeb5247cbf768b70276fb09a965457b24a7c7d78ec3cdeb9e550->leave($__internal_f57496c46783aeb5247cbf768b70276fb09a965457b24a7c7d78ec3cdeb9e550_prof);

        
        $__internal_b6d606a77ecd9df28300773dfc740893216a619ec752022ad032c09f1340a4da->leave($__internal_b6d606a77ecd9df28300773dfc740893216a619ec752022ad032c09f1340a4da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34ffca8f5e88160a7593e036c4d5ce765cab61d09408e0a76abb23e428ff5a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ffca8f5e88160a7593e036c4d5ce765cab61d09408e0a76abb23e428ff5a9f->enter($__internal_34ffca8f5e88160a7593e036c4d5ce765cab61d09408e0a76abb23e428ff5a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_189a644ee56661240823854e23ded33b5bb0380864befd89683d6646e5762cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189a644ee56661240823854e23ded33b5bb0380864befd89683d6646e5762cfc->enter($__internal_189a644ee56661240823854e23ded33b5bb0380864befd89683d6646e5762cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_189a644ee56661240823854e23ded33b5bb0380864befd89683d6646e5762cfc->leave($__internal_189a644ee56661240823854e23ded33b5bb0380864befd89683d6646e5762cfc_prof);

        
        $__internal_34ffca8f5e88160a7593e036c4d5ce765cab61d09408e0a76abb23e428ff5a9f->leave($__internal_34ffca8f5e88160a7593e036c4d5ce765cab61d09408e0a76abb23e428ff5a9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
