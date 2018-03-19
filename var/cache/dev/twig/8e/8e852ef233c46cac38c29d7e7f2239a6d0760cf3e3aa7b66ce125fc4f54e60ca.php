<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_10a2e1e27907755b9fc80f14974ccbbd65a4dc2d7f1cda36d4780e3e1b441539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_505db2cef9c8ab7b9259798469e927f3bc5b707e4a0b600531bc213af1d5853b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505db2cef9c8ab7b9259798469e927f3bc5b707e4a0b600531bc213af1d5853b->enter($__internal_505db2cef9c8ab7b9259798469e927f3bc5b707e4a0b600531bc213af1d5853b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_b093c7513690db4712f1af7e35d163389818f1ec751e72a79cc9a595d1b44bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b093c7513690db4712f1af7e35d163389818f1ec751e72a79cc9a595d1b44bbc->enter($__internal_b093c7513690db4712f1af7e35d163389818f1ec751e72a79cc9a595d1b44bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_505db2cef9c8ab7b9259798469e927f3bc5b707e4a0b600531bc213af1d5853b->leave($__internal_505db2cef9c8ab7b9259798469e927f3bc5b707e4a0b600531bc213af1d5853b_prof);

        
        $__internal_b093c7513690db4712f1af7e35d163389818f1ec751e72a79cc9a595d1b44bbc->leave($__internal_b093c7513690db4712f1af7e35d163389818f1ec751e72a79cc9a595d1b44bbc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61ce35fd61ba865b9a73f7e3d5aff05db9d86c6d2dbc29b1281336c75be9736b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ce35fd61ba865b9a73f7e3d5aff05db9d86c6d2dbc29b1281336c75be9736b->enter($__internal_61ce35fd61ba865b9a73f7e3d5aff05db9d86c6d2dbc29b1281336c75be9736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a4c9a421577f3859bbc4f562045f0efc4d323e75be3cc1eba36b0f8e5690be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4c9a421577f3859bbc4f562045f0efc4d323e75be3cc1eba36b0f8e5690be2->enter($__internal_8a4c9a421577f3859bbc4f562045f0efc4d323e75be3cc1eba36b0f8e5690be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8a4c9a421577f3859bbc4f562045f0efc4d323e75be3cc1eba36b0f8e5690be2->leave($__internal_8a4c9a421577f3859bbc4f562045f0efc4d323e75be3cc1eba36b0f8e5690be2_prof);

        
        $__internal_61ce35fd61ba865b9a73f7e3d5aff05db9d86c6d2dbc29b1281336c75be9736b->leave($__internal_61ce35fd61ba865b9a73f7e3d5aff05db9d86c6d2dbc29b1281336c75be9736b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
