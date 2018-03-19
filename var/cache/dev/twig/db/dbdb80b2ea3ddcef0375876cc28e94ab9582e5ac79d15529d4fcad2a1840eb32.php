<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_96f2b3048d8544aabef549bde08d0c43598412e00cc47d6e2f8fdc01e12e745d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_a46554d434a8cada14fae276de93df8d2f2a0b08063714df408877658b0a1a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46554d434a8cada14fae276de93df8d2f2a0b08063714df408877658b0a1a45->enter($__internal_a46554d434a8cada14fae276de93df8d2f2a0b08063714df408877658b0a1a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_4b614beca2d90c54d1c26c5495e10b259e142c8ba1f941af9bc536e2d02a1ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b614beca2d90c54d1c26c5495e10b259e142c8ba1f941af9bc536e2d02a1ff2->enter($__internal_4b614beca2d90c54d1c26c5495e10b259e142c8ba1f941af9bc536e2d02a1ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a46554d434a8cada14fae276de93df8d2f2a0b08063714df408877658b0a1a45->leave($__internal_a46554d434a8cada14fae276de93df8d2f2a0b08063714df408877658b0a1a45_prof);

        
        $__internal_4b614beca2d90c54d1c26c5495e10b259e142c8ba1f941af9bc536e2d02a1ff2->leave($__internal_4b614beca2d90c54d1c26c5495e10b259e142c8ba1f941af9bc536e2d02a1ff2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a8b0c30094635b5d2a796ce12d83712c037ec80b5ba23e1503521172bbe0cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8b0c30094635b5d2a796ce12d83712c037ec80b5ba23e1503521172bbe0cb8->enter($__internal_0a8b0c30094635b5d2a796ce12d83712c037ec80b5ba23e1503521172bbe0cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40561652fe661cea35db0f643db9d04666affdc121112d726d3c58354b439cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40561652fe661cea35db0f643db9d04666affdc121112d726d3c58354b439cfb->enter($__internal_40561652fe661cea35db0f643db9d04666affdc121112d726d3c58354b439cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_40561652fe661cea35db0f643db9d04666affdc121112d726d3c58354b439cfb->leave($__internal_40561652fe661cea35db0f643db9d04666affdc121112d726d3c58354b439cfb_prof);

        
        $__internal_0a8b0c30094635b5d2a796ce12d83712c037ec80b5ba23e1503521172bbe0cb8->leave($__internal_0a8b0c30094635b5d2a796ce12d83712c037ec80b5ba23e1503521172bbe0cb8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7018365c464a2b830e813c4629d1f2e3e9af70f480d43563b8e413a8c94992a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7018365c464a2b830e813c4629d1f2e3e9af70f480d43563b8e413a8c94992a4->enter($__internal_7018365c464a2b830e813c4629d1f2e3e9af70f480d43563b8e413a8c94992a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d9fbb6eb619b2aa2696e8ce26d6ffe464cd50c9c43823d8d55e33a41aed6356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9fbb6eb619b2aa2696e8ce26d6ffe464cd50c9c43823d8d55e33a41aed6356->enter($__internal_6d9fbb6eb619b2aa2696e8ce26d6ffe464cd50c9c43823d8d55e33a41aed6356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6d9fbb6eb619b2aa2696e8ce26d6ffe464cd50c9c43823d8d55e33a41aed6356->leave($__internal_6d9fbb6eb619b2aa2696e8ce26d6ffe464cd50c9c43823d8d55e33a41aed6356_prof);

        
        $__internal_7018365c464a2b830e813c4629d1f2e3e9af70f480d43563b8e413a8c94992a4->leave($__internal_7018365c464a2b830e813c4629d1f2e3e9af70f480d43563b8e413a8c94992a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_878d5289197daa6a1c63f38ef5648bf142cef68385b59de13086fcd4b9bff5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878d5289197daa6a1c63f38ef5648bf142cef68385b59de13086fcd4b9bff5fe->enter($__internal_878d5289197daa6a1c63f38ef5648bf142cef68385b59de13086fcd4b9bff5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d25e12833b01fbb63d9f1cc0ecb6d4505c7507658544addace667ba6d8ebff54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25e12833b01fbb63d9f1cc0ecb6d4505c7507658544addace667ba6d8ebff54->enter($__internal_d25e12833b01fbb63d9f1cc0ecb6d4505c7507658544addace667ba6d8ebff54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d25e12833b01fbb63d9f1cc0ecb6d4505c7507658544addace667ba6d8ebff54->leave($__internal_d25e12833b01fbb63d9f1cc0ecb6d4505c7507658544addace667ba6d8ebff54_prof);

        
        $__internal_878d5289197daa6a1c63f38ef5648bf142cef68385b59de13086fcd4b9bff5fe->leave($__internal_878d5289197daa6a1c63f38ef5648bf142cef68385b59de13086fcd4b9bff5fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
