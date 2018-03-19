<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_82b3dd5438ca8260d26de838cd3e182ae69a5abe9db7da595c1c6a8f6ef125e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_b9aaef96d0e27807ddd21870c48ef60f32d68177d7dd449967cd859a6f3c7ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9aaef96d0e27807ddd21870c48ef60f32d68177d7dd449967cd859a6f3c7ca0->enter($__internal_b9aaef96d0e27807ddd21870c48ef60f32d68177d7dd449967cd859a6f3c7ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_19024c0d8ba33343a2c1ece9ac705537f92af7f8189e3a3f2352d802362d9a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19024c0d8ba33343a2c1ece9ac705537f92af7f8189e3a3f2352d802362d9a5c->enter($__internal_19024c0d8ba33343a2c1ece9ac705537f92af7f8189e3a3f2352d802362d9a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9aaef96d0e27807ddd21870c48ef60f32d68177d7dd449967cd859a6f3c7ca0->leave($__internal_b9aaef96d0e27807ddd21870c48ef60f32d68177d7dd449967cd859a6f3c7ca0_prof);

        
        $__internal_19024c0d8ba33343a2c1ece9ac705537f92af7f8189e3a3f2352d802362d9a5c->leave($__internal_19024c0d8ba33343a2c1ece9ac705537f92af7f8189e3a3f2352d802362d9a5c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bf7f56e51fafd727ee2b3dc7a6dbe169d6ce33456f6f68cb781980992ea83d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf7f56e51fafd727ee2b3dc7a6dbe169d6ce33456f6f68cb781980992ea83d1->enter($__internal_5bf7f56e51fafd727ee2b3dc7a6dbe169d6ce33456f6f68cb781980992ea83d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ecc6a050c412af6ac7d8f81422dd461c4920603d4cfb4465c20f9b1c527d0762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc6a050c412af6ac7d8f81422dd461c4920603d4cfb4465c20f9b1c527d0762->enter($__internal_ecc6a050c412af6ac7d8f81422dd461c4920603d4cfb4465c20f9b1c527d0762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ecc6a050c412af6ac7d8f81422dd461c4920603d4cfb4465c20f9b1c527d0762->leave($__internal_ecc6a050c412af6ac7d8f81422dd461c4920603d4cfb4465c20f9b1c527d0762_prof);

        
        $__internal_5bf7f56e51fafd727ee2b3dc7a6dbe169d6ce33456f6f68cb781980992ea83d1->leave($__internal_5bf7f56e51fafd727ee2b3dc7a6dbe169d6ce33456f6f68cb781980992ea83d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
