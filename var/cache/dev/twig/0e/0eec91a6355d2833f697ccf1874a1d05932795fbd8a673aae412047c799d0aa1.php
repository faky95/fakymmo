<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_38490eadb75d958a9b23ae934f5e29ae1187196cef3124a54e3e60f43bea03ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b4b1b2445aeb458ea1b13f3b0ab1b0033eae837290aeeaa5e1c6b83014f96b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4b1b2445aeb458ea1b13f3b0ab1b0033eae837290aeeaa5e1c6b83014f96b0->enter($__internal_2b4b1b2445aeb458ea1b13f3b0ab1b0033eae837290aeeaa5e1c6b83014f96b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2bf3f3a38670a99f797ee679013c2ad9e720f4eeb0c0883ca889d68ae95ca4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf3f3a38670a99f797ee679013c2ad9e720f4eeb0c0883ca889d68ae95ca4ec->enter($__internal_2bf3f3a38670a99f797ee679013c2ad9e720f4eeb0c0883ca889d68ae95ca4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4b1b2445aeb458ea1b13f3b0ab1b0033eae837290aeeaa5e1c6b83014f96b0->leave($__internal_2b4b1b2445aeb458ea1b13f3b0ab1b0033eae837290aeeaa5e1c6b83014f96b0_prof);

        
        $__internal_2bf3f3a38670a99f797ee679013c2ad9e720f4eeb0c0883ca889d68ae95ca4ec->leave($__internal_2bf3f3a38670a99f797ee679013c2ad9e720f4eeb0c0883ca889d68ae95ca4ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6967ead2f35a3e003315ad9cdb1b55a674b511abefcb8bb102d4c24974c4e938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6967ead2f35a3e003315ad9cdb1b55a674b511abefcb8bb102d4c24974c4e938->enter($__internal_6967ead2f35a3e003315ad9cdb1b55a674b511abefcb8bb102d4c24974c4e938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92152665e147c6eb1bcdfeea0bdeacf6fa7e451bcb406114f1e49643b11911e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92152665e147c6eb1bcdfeea0bdeacf6fa7e451bcb406114f1e49643b11911e0->enter($__internal_92152665e147c6eb1bcdfeea0bdeacf6fa7e451bcb406114f1e49643b11911e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_92152665e147c6eb1bcdfeea0bdeacf6fa7e451bcb406114f1e49643b11911e0->leave($__internal_92152665e147c6eb1bcdfeea0bdeacf6fa7e451bcb406114f1e49643b11911e0_prof);

        
        $__internal_6967ead2f35a3e003315ad9cdb1b55a674b511abefcb8bb102d4c24974c4e938->leave($__internal_6967ead2f35a3e003315ad9cdb1b55a674b511abefcb8bb102d4c24974c4e938_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_556a76799fcc14ac8eee0fe4888a3ed48c15fa2606562680adec665d4a83aa4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556a76799fcc14ac8eee0fe4888a3ed48c15fa2606562680adec665d4a83aa4a->enter($__internal_556a76799fcc14ac8eee0fe4888a3ed48c15fa2606562680adec665d4a83aa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c33c160d05ef0209abcf767ef93295cae2481f1df488193cb2c0c96008dc393a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33c160d05ef0209abcf767ef93295cae2481f1df488193cb2c0c96008dc393a->enter($__internal_c33c160d05ef0209abcf767ef93295cae2481f1df488193cb2c0c96008dc393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c33c160d05ef0209abcf767ef93295cae2481f1df488193cb2c0c96008dc393a->leave($__internal_c33c160d05ef0209abcf767ef93295cae2481f1df488193cb2c0c96008dc393a_prof);

        
        $__internal_556a76799fcc14ac8eee0fe4888a3ed48c15fa2606562680adec665d4a83aa4a->leave($__internal_556a76799fcc14ac8eee0fe4888a3ed48c15fa2606562680adec665d4a83aa4a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
