<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_94512d3c228f787f9c7962ee443a5f5c74da2d5d2c7af52f9a08167fb41f37f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c622e9e9156ecfa77de6e860b2367aa20d3881e0eb5110cdf791f24b96244e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c622e9e9156ecfa77de6e860b2367aa20d3881e0eb5110cdf791f24b96244e89->enter($__internal_c622e9e9156ecfa77de6e860b2367aa20d3881e0eb5110cdf791f24b96244e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_12aacb4d7554bd6e16640c089121728664142524f658be11875c03342d275703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12aacb4d7554bd6e16640c089121728664142524f658be11875c03342d275703->enter($__internal_12aacb4d7554bd6e16640c089121728664142524f658be11875c03342d275703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c622e9e9156ecfa77de6e860b2367aa20d3881e0eb5110cdf791f24b96244e89->leave($__internal_c622e9e9156ecfa77de6e860b2367aa20d3881e0eb5110cdf791f24b96244e89_prof);

        
        $__internal_12aacb4d7554bd6e16640c089121728664142524f658be11875c03342d275703->leave($__internal_12aacb4d7554bd6e16640c089121728664142524f658be11875c03342d275703_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06682031c285ab1bcd2f4e987a076078f61d659995d2d2f646b3e89c8cb4fbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06682031c285ab1bcd2f4e987a076078f61d659995d2d2f646b3e89c8cb4fbe5->enter($__internal_06682031c285ab1bcd2f4e987a076078f61d659995d2d2f646b3e89c8cb4fbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_952f90e9e2e1dbaf0a37a1827738cdbd9a49c89d5c54f27d2dcd7f9f66ab27f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952f90e9e2e1dbaf0a37a1827738cdbd9a49c89d5c54f27d2dcd7f9f66ab27f6->enter($__internal_952f90e9e2e1dbaf0a37a1827738cdbd9a49c89d5c54f27d2dcd7f9f66ab27f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_952f90e9e2e1dbaf0a37a1827738cdbd9a49c89d5c54f27d2dcd7f9f66ab27f6->leave($__internal_952f90e9e2e1dbaf0a37a1827738cdbd9a49c89d5c54f27d2dcd7f9f66ab27f6_prof);

        
        $__internal_06682031c285ab1bcd2f4e987a076078f61d659995d2d2f646b3e89c8cb4fbe5->leave($__internal_06682031c285ab1bcd2f4e987a076078f61d659995d2d2f646b3e89c8cb4fbe5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
