<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_78e47f33a5da72c6d0b38a6a21d184e3d3b72699852e2cbba5c486b73d041d6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_a6467281250b7f57145802eb78ed07cf89e75bc4ca31738b2bbc7cb2114a1803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6467281250b7f57145802eb78ed07cf89e75bc4ca31738b2bbc7cb2114a1803->enter($__internal_a6467281250b7f57145802eb78ed07cf89e75bc4ca31738b2bbc7cb2114a1803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_b913964032c3c096523ec4d18e3f23ba2ac47a2b33511aac6017ad3730ae9c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b913964032c3c096523ec4d18e3f23ba2ac47a2b33511aac6017ad3730ae9c2e->enter($__internal_b913964032c3c096523ec4d18e3f23ba2ac47a2b33511aac6017ad3730ae9c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6467281250b7f57145802eb78ed07cf89e75bc4ca31738b2bbc7cb2114a1803->leave($__internal_a6467281250b7f57145802eb78ed07cf89e75bc4ca31738b2bbc7cb2114a1803_prof);

        
        $__internal_b913964032c3c096523ec4d18e3f23ba2ac47a2b33511aac6017ad3730ae9c2e->leave($__internal_b913964032c3c096523ec4d18e3f23ba2ac47a2b33511aac6017ad3730ae9c2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_862a65101be69bc8036ab2f0b1b4aa56fdc4acfd32825dc858bf897dcd0362aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862a65101be69bc8036ab2f0b1b4aa56fdc4acfd32825dc858bf897dcd0362aa->enter($__internal_862a65101be69bc8036ab2f0b1b4aa56fdc4acfd32825dc858bf897dcd0362aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3c49083b602113381d9a6008c85f61d1680ae2681f6b8f022fe39eb6ba3d9045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c49083b602113381d9a6008c85f61d1680ae2681f6b8f022fe39eb6ba3d9045->enter($__internal_3c49083b602113381d9a6008c85f61d1680ae2681f6b8f022fe39eb6ba3d9045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3c49083b602113381d9a6008c85f61d1680ae2681f6b8f022fe39eb6ba3d9045->leave($__internal_3c49083b602113381d9a6008c85f61d1680ae2681f6b8f022fe39eb6ba3d9045_prof);

        
        $__internal_862a65101be69bc8036ab2f0b1b4aa56fdc4acfd32825dc858bf897dcd0362aa->leave($__internal_862a65101be69bc8036ab2f0b1b4aa56fdc4acfd32825dc858bf897dcd0362aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
