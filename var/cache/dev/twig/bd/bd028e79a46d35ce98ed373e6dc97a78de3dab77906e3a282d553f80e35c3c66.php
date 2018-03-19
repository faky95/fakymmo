<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_63fcd2ed186dcd3adbbfd1fc93efb00c7737fd7d4e622f42bc1ab53774e82217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_79bc4ebde670ee4bc4ae13c1981759b1434b9d67bb627b06ffe1a0f93f3f71a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bc4ebde670ee4bc4ae13c1981759b1434b9d67bb627b06ffe1a0f93f3f71a2->enter($__internal_79bc4ebde670ee4bc4ae13c1981759b1434b9d67bb627b06ffe1a0f93f3f71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_21d1573ca3e4a963ff27f489239f016cf4eec4cbb1ad93cf71ebcb42124bc6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d1573ca3e4a963ff27f489239f016cf4eec4cbb1ad93cf71ebcb42124bc6f6->enter($__internal_21d1573ca3e4a963ff27f489239f016cf4eec4cbb1ad93cf71ebcb42124bc6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79bc4ebde670ee4bc4ae13c1981759b1434b9d67bb627b06ffe1a0f93f3f71a2->leave($__internal_79bc4ebde670ee4bc4ae13c1981759b1434b9d67bb627b06ffe1a0f93f3f71a2_prof);

        
        $__internal_21d1573ca3e4a963ff27f489239f016cf4eec4cbb1ad93cf71ebcb42124bc6f6->leave($__internal_21d1573ca3e4a963ff27f489239f016cf4eec4cbb1ad93cf71ebcb42124bc6f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0ce3e36bdcdb21bca2256b7c8ddd699fd6404d8f29dcb7a5bc9fd8dcd88019a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ce3e36bdcdb21bca2256b7c8ddd699fd6404d8f29dcb7a5bc9fd8dcd88019a->enter($__internal_a0ce3e36bdcdb21bca2256b7c8ddd699fd6404d8f29dcb7a5bc9fd8dcd88019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_96fb065895a4fe2d91ec0eeefd2f7309ee3489ff98e8b9f430291d46a29ef439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fb065895a4fe2d91ec0eeefd2f7309ee3489ff98e8b9f430291d46a29ef439->enter($__internal_96fb065895a4fe2d91ec0eeefd2f7309ee3489ff98e8b9f430291d46a29ef439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_96fb065895a4fe2d91ec0eeefd2f7309ee3489ff98e8b9f430291d46a29ef439->leave($__internal_96fb065895a4fe2d91ec0eeefd2f7309ee3489ff98e8b9f430291d46a29ef439_prof);

        
        $__internal_a0ce3e36bdcdb21bca2256b7c8ddd699fd6404d8f29dcb7a5bc9fd8dcd88019a->leave($__internal_a0ce3e36bdcdb21bca2256b7c8ddd699fd6404d8f29dcb7a5bc9fd8dcd88019a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
