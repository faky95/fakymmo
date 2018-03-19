<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_973039fe45d38a7bf7f604788226fdcb4210ea069263d28d03a33d4a5033bba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_852d67f492112585fdd65b78b86f3a333a0ad5fccae776c9c08bb8e911b3bd7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852d67f492112585fdd65b78b86f3a333a0ad5fccae776c9c08bb8e911b3bd7c->enter($__internal_852d67f492112585fdd65b78b86f3a333a0ad5fccae776c9c08bb8e911b3bd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_264beb20707f9877ce61341380cfb491b8973dbef2686e19845e97dee53dfb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264beb20707f9877ce61341380cfb491b8973dbef2686e19845e97dee53dfb23->enter($__internal_264beb20707f9877ce61341380cfb491b8973dbef2686e19845e97dee53dfb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_852d67f492112585fdd65b78b86f3a333a0ad5fccae776c9c08bb8e911b3bd7c->leave($__internal_852d67f492112585fdd65b78b86f3a333a0ad5fccae776c9c08bb8e911b3bd7c_prof);

        
        $__internal_264beb20707f9877ce61341380cfb491b8973dbef2686e19845e97dee53dfb23->leave($__internal_264beb20707f9877ce61341380cfb491b8973dbef2686e19845e97dee53dfb23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12f5a034980e083a5e5985220dcff0019c25aec82d124f03bd746568248d50b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f5a034980e083a5e5985220dcff0019c25aec82d124f03bd746568248d50b4->enter($__internal_12f5a034980e083a5e5985220dcff0019c25aec82d124f03bd746568248d50b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99431e719b0898d64cf91705917aec74d65228f44fa5abbba48f9fc3fa4cdf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99431e719b0898d64cf91705917aec74d65228f44fa5abbba48f9fc3fa4cdf97->enter($__internal_99431e719b0898d64cf91705917aec74d65228f44fa5abbba48f9fc3fa4cdf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_99431e719b0898d64cf91705917aec74d65228f44fa5abbba48f9fc3fa4cdf97->leave($__internal_99431e719b0898d64cf91705917aec74d65228f44fa5abbba48f9fc3fa4cdf97_prof);

        
        $__internal_12f5a034980e083a5e5985220dcff0019c25aec82d124f03bd746568248d50b4->leave($__internal_12f5a034980e083a5e5985220dcff0019c25aec82d124f03bd746568248d50b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
