<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_677c041acd6e3be786b5929df5be446e9c9b5454963bff51c7e99f3e623a3253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0defd595490c77a2378a9b8b89ea7df923c32b43876ca8cecea1a493034e2350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0defd595490c77a2378a9b8b89ea7df923c32b43876ca8cecea1a493034e2350->enter($__internal_0defd595490c77a2378a9b8b89ea7df923c32b43876ca8cecea1a493034e2350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9997fe71e979095fa2134debd7baaaab7410ecdaae3fcf45210f868ba2573d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9997fe71e979095fa2134debd7baaaab7410ecdaae3fcf45210f868ba2573d12->enter($__internal_9997fe71e979095fa2134debd7baaaab7410ecdaae3fcf45210f868ba2573d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0defd595490c77a2378a9b8b89ea7df923c32b43876ca8cecea1a493034e2350->leave($__internal_0defd595490c77a2378a9b8b89ea7df923c32b43876ca8cecea1a493034e2350_prof);

        
        $__internal_9997fe71e979095fa2134debd7baaaab7410ecdaae3fcf45210f868ba2573d12->leave($__internal_9997fe71e979095fa2134debd7baaaab7410ecdaae3fcf45210f868ba2573d12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bd6a30cbae7d1225d6a1b409420d0d7331943dfd0a89e905a48c94353873373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd6a30cbae7d1225d6a1b409420d0d7331943dfd0a89e905a48c94353873373->enter($__internal_7bd6a30cbae7d1225d6a1b409420d0d7331943dfd0a89e905a48c94353873373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f88101455e4f4fe41e21662c9ae3a386e685edc28a030e970360735823c7dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f88101455e4f4fe41e21662c9ae3a386e685edc28a030e970360735823c7dd5->enter($__internal_7f88101455e4f4fe41e21662c9ae3a386e685edc28a030e970360735823c7dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7f88101455e4f4fe41e21662c9ae3a386e685edc28a030e970360735823c7dd5->leave($__internal_7f88101455e4f4fe41e21662c9ae3a386e685edc28a030e970360735823c7dd5_prof);

        
        $__internal_7bd6a30cbae7d1225d6a1b409420d0d7331943dfd0a89e905a48c94353873373->leave($__internal_7bd6a30cbae7d1225d6a1b409420d0d7331943dfd0a89e905a48c94353873373_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdeb1f13fd40f0b5a1c876405feaadfbc894ec37ddc26a75dcccad723b8a4b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdeb1f13fd40f0b5a1c876405feaadfbc894ec37ddc26a75dcccad723b8a4b3f->enter($__internal_fdeb1f13fd40f0b5a1c876405feaadfbc894ec37ddc26a75dcccad723b8a4b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ff9e8527581c13fad5863ee63fd470f9cb71b4a3df4e94402c2ec9c870d604a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff9e8527581c13fad5863ee63fd470f9cb71b4a3df4e94402c2ec9c870d604a->enter($__internal_0ff9e8527581c13fad5863ee63fd470f9cb71b4a3df4e94402c2ec9c870d604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0ff9e8527581c13fad5863ee63fd470f9cb71b4a3df4e94402c2ec9c870d604a->leave($__internal_0ff9e8527581c13fad5863ee63fd470f9cb71b4a3df4e94402c2ec9c870d604a_prof);

        
        $__internal_fdeb1f13fd40f0b5a1c876405feaadfbc894ec37ddc26a75dcccad723b8a4b3f->leave($__internal_fdeb1f13fd40f0b5a1c876405feaadfbc894ec37ddc26a75dcccad723b8a4b3f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
