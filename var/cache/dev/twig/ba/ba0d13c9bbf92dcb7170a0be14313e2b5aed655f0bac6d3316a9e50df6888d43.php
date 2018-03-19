<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ddf3c95d7de11e30add2e395832ea8cb750ef9087b0508fbd36d3ebaf6dcbd6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a754af2fe59bedd32e2406686587e7a9c66e82e9d8440614a919ca0e88ca9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a754af2fe59bedd32e2406686587e7a9c66e82e9d8440614a919ca0e88ca9d9->enter($__internal_6a754af2fe59bedd32e2406686587e7a9c66e82e9d8440614a919ca0e88ca9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c6a1a881693a0f69d90e0dcf95fb96646b9791f97debbade0dbd44f0f9613f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a1a881693a0f69d90e0dcf95fb96646b9791f97debbade0dbd44f0f9613f25->enter($__internal_c6a1a881693a0f69d90e0dcf95fb96646b9791f97debbade0dbd44f0f9613f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a754af2fe59bedd32e2406686587e7a9c66e82e9d8440614a919ca0e88ca9d9->leave($__internal_6a754af2fe59bedd32e2406686587e7a9c66e82e9d8440614a919ca0e88ca9d9_prof);

        
        $__internal_c6a1a881693a0f69d90e0dcf95fb96646b9791f97debbade0dbd44f0f9613f25->leave($__internal_c6a1a881693a0f69d90e0dcf95fb96646b9791f97debbade0dbd44f0f9613f25_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8409ccdef8e20b2ac5e7a9973a88c7efe8dbbfc782d30e0e1bc13f7b803bcb37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8409ccdef8e20b2ac5e7a9973a88c7efe8dbbfc782d30e0e1bc13f7b803bcb37->enter($__internal_8409ccdef8e20b2ac5e7a9973a88c7efe8dbbfc782d30e0e1bc13f7b803bcb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_882772ac2913579f24020830f7dd7c05a56a7103c1355080e8a5c29f26c3fb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882772ac2913579f24020830f7dd7c05a56a7103c1355080e8a5c29f26c3fb7f->enter($__internal_882772ac2913579f24020830f7dd7c05a56a7103c1355080e8a5c29f26c3fb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_882772ac2913579f24020830f7dd7c05a56a7103c1355080e8a5c29f26c3fb7f->leave($__internal_882772ac2913579f24020830f7dd7c05a56a7103c1355080e8a5c29f26c3fb7f_prof);

        
        $__internal_8409ccdef8e20b2ac5e7a9973a88c7efe8dbbfc782d30e0e1bc13f7b803bcb37->leave($__internal_8409ccdef8e20b2ac5e7a9973a88c7efe8dbbfc782d30e0e1bc13f7b803bcb37_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0aaa44d87863d51965c822cbda08e17a0d4d7031e59443f9a09cc6e243490145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaa44d87863d51965c822cbda08e17a0d4d7031e59443f9a09cc6e243490145->enter($__internal_0aaa44d87863d51965c822cbda08e17a0d4d7031e59443f9a09cc6e243490145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_897b9a5ba50979a6f8960a4c920af07b94eca6dfc2a331f0a5c8f5299df31106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897b9a5ba50979a6f8960a4c920af07b94eca6dfc2a331f0a5c8f5299df31106->enter($__internal_897b9a5ba50979a6f8960a4c920af07b94eca6dfc2a331f0a5c8f5299df31106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_897b9a5ba50979a6f8960a4c920af07b94eca6dfc2a331f0a5c8f5299df31106->leave($__internal_897b9a5ba50979a6f8960a4c920af07b94eca6dfc2a331f0a5c8f5299df31106_prof);

        
        $__internal_0aaa44d87863d51965c822cbda08e17a0d4d7031e59443f9a09cc6e243490145->leave($__internal_0aaa44d87863d51965c822cbda08e17a0d4d7031e59443f9a09cc6e243490145_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5936ca32cc1cbee1a4b45de968a9474be60f3c2b08e203fb39d99c1bce66b0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5936ca32cc1cbee1a4b45de968a9474be60f3c2b08e203fb39d99c1bce66b0d0->enter($__internal_5936ca32cc1cbee1a4b45de968a9474be60f3c2b08e203fb39d99c1bce66b0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89ad401ae0adc5716e94351881cb25f5f0509e44311819af1455dbf9674c1d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ad401ae0adc5716e94351881cb25f5f0509e44311819af1455dbf9674c1d97->enter($__internal_89ad401ae0adc5716e94351881cb25f5f0509e44311819af1455dbf9674c1d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_89ad401ae0adc5716e94351881cb25f5f0509e44311819af1455dbf9674c1d97->leave($__internal_89ad401ae0adc5716e94351881cb25f5f0509e44311819af1455dbf9674c1d97_prof);

        
        $__internal_5936ca32cc1cbee1a4b45de968a9474be60f3c2b08e203fb39d99c1bce66b0d0->leave($__internal_5936ca32cc1cbee1a4b45de968a9474be60f3c2b08e203fb39d99c1bce66b0d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
