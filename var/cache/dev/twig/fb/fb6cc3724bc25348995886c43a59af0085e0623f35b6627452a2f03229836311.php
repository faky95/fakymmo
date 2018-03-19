<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ef95e15a598fcafd01646356f7b3c663690d2893159b0f86152a322eb4fe9952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_add91cfb0ad3dc672836615db4555ee57ded3b02c64d924f437b70acff74fc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add91cfb0ad3dc672836615db4555ee57ded3b02c64d924f437b70acff74fc7b->enter($__internal_add91cfb0ad3dc672836615db4555ee57ded3b02c64d924f437b70acff74fc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_ebf2319c1abf246aed793b7d65de55a439f62b686a5c77a43e60de12924149a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf2319c1abf246aed793b7d65de55a439f62b686a5c77a43e60de12924149a2->enter($__internal_ebf2319c1abf246aed793b7d65de55a439f62b686a5c77a43e60de12924149a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add91cfb0ad3dc672836615db4555ee57ded3b02c64d924f437b70acff74fc7b->leave($__internal_add91cfb0ad3dc672836615db4555ee57ded3b02c64d924f437b70acff74fc7b_prof);

        
        $__internal_ebf2319c1abf246aed793b7d65de55a439f62b686a5c77a43e60de12924149a2->leave($__internal_ebf2319c1abf246aed793b7d65de55a439f62b686a5c77a43e60de12924149a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a82d9ab9a65d947a0c431642631a3d6e84ead9aa5ef298c022104c6cdb0c059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a82d9ab9a65d947a0c431642631a3d6e84ead9aa5ef298c022104c6cdb0c059->enter($__internal_5a82d9ab9a65d947a0c431642631a3d6e84ead9aa5ef298c022104c6cdb0c059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91838e1c47c71120ead20eacbccd183ccf425804f016bc48c7f3dd3ef496f37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91838e1c47c71120ead20eacbccd183ccf425804f016bc48c7f3dd3ef496f37b->enter($__internal_91838e1c47c71120ead20eacbccd183ccf425804f016bc48c7f3dd3ef496f37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_91838e1c47c71120ead20eacbccd183ccf425804f016bc48c7f3dd3ef496f37b->leave($__internal_91838e1c47c71120ead20eacbccd183ccf425804f016bc48c7f3dd3ef496f37b_prof);

        
        $__internal_5a82d9ab9a65d947a0c431642631a3d6e84ead9aa5ef298c022104c6cdb0c059->leave($__internal_5a82d9ab9a65d947a0c431642631a3d6e84ead9aa5ef298c022104c6cdb0c059_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
