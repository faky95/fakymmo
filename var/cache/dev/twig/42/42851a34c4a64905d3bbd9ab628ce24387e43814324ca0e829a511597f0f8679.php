<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6553952dd97e557650ecf3cd253427cb18b7dc8c2b018422b78fe39374729b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfc7c393ee94b16ff0c65c69f7e21969c983d04181547547688b7380e3af9b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc7c393ee94b16ff0c65c69f7e21969c983d04181547547688b7380e3af9b8f->enter($__internal_dfc7c393ee94b16ff0c65c69f7e21969c983d04181547547688b7380e3af9b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c057bce011b27f1b9c3c46cbc3ff92dec2e5c6a5406b642809f3eb48a135999e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c057bce011b27f1b9c3c46cbc3ff92dec2e5c6a5406b642809f3eb48a135999e->enter($__internal_c057bce011b27f1b9c3c46cbc3ff92dec2e5c6a5406b642809f3eb48a135999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfc7c393ee94b16ff0c65c69f7e21969c983d04181547547688b7380e3af9b8f->leave($__internal_dfc7c393ee94b16ff0c65c69f7e21969c983d04181547547688b7380e3af9b8f_prof);

        
        $__internal_c057bce011b27f1b9c3c46cbc3ff92dec2e5c6a5406b642809f3eb48a135999e->leave($__internal_c057bce011b27f1b9c3c46cbc3ff92dec2e5c6a5406b642809f3eb48a135999e_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3fc68dd3c90270c72cf6b79333f9755ba04bfdc542339c1602ebe02482a5d7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc68dd3c90270c72cf6b79333f9755ba04bfdc542339c1602ebe02482a5d7fe->enter($__internal_3fc68dd3c90270c72cf6b79333f9755ba04bfdc542339c1602ebe02482a5d7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c0a47c12523f310ddd9d5da652669497db4aa7ce2248462f54438f846592ee7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a47c12523f310ddd9d5da652669497db4aa7ce2248462f54438f846592ee7a->enter($__internal_c0a47c12523f310ddd9d5da652669497db4aa7ce2248462f54438f846592ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c0a47c12523f310ddd9d5da652669497db4aa7ce2248462f54438f846592ee7a->leave($__internal_c0a47c12523f310ddd9d5da652669497db4aa7ce2248462f54438f846592ee7a_prof);

        
        $__internal_3fc68dd3c90270c72cf6b79333f9755ba04bfdc542339c1602ebe02482a5d7fe->leave($__internal_3fc68dd3c90270c72cf6b79333f9755ba04bfdc542339c1602ebe02482a5d7fe_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b0db86e40f387e0d47ccca4771a1204206d90cd09fa867fc58a4467fa6c360e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0db86e40f387e0d47ccca4771a1204206d90cd09fa867fc58a4467fa6c360e->enter($__internal_2b0db86e40f387e0d47ccca4771a1204206d90cd09fa867fc58a4467fa6c360e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fa7bb7db0eef78403b3cd83950423fd90a3ce0ffbab6da09f946e1bb51de78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa7bb7db0eef78403b3cd83950423fd90a3ce0ffbab6da09f946e1bb51de78f->enter($__internal_9fa7bb7db0eef78403b3cd83950423fd90a3ce0ffbab6da09f946e1bb51de78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9fa7bb7db0eef78403b3cd83950423fd90a3ce0ffbab6da09f946e1bb51de78f->leave($__internal_9fa7bb7db0eef78403b3cd83950423fd90a3ce0ffbab6da09f946e1bb51de78f_prof);

        
        $__internal_2b0db86e40f387e0d47ccca4771a1204206d90cd09fa867fc58a4467fa6c360e->leave($__internal_2b0db86e40f387e0d47ccca4771a1204206d90cd09fa867fc58a4467fa6c360e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
