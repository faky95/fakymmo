<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_31da83cc14d6829cbdf559ebabeba3270908d010a14117a4c81f5cdaaab15f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6143d8136666bfd34d7a5f668979c0f8160acc4ca16dd966a4899bdf0e3a2e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6143d8136666bfd34d7a5f668979c0f8160acc4ca16dd966a4899bdf0e3a2e1f->enter($__internal_6143d8136666bfd34d7a5f668979c0f8160acc4ca16dd966a4899bdf0e3a2e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d3b8bd4c8874d5205daaef371b06ae72a2c6fbf91a303cd0a4fd0b3def5e5ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b8bd4c8874d5205daaef371b06ae72a2c6fbf91a303cd0a4fd0b3def5e5ec7->enter($__internal_d3b8bd4c8874d5205daaef371b06ae72a2c6fbf91a303cd0a4fd0b3def5e5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6143d8136666bfd34d7a5f668979c0f8160acc4ca16dd966a4899bdf0e3a2e1f->leave($__internal_6143d8136666bfd34d7a5f668979c0f8160acc4ca16dd966a4899bdf0e3a2e1f_prof);

        
        $__internal_d3b8bd4c8874d5205daaef371b06ae72a2c6fbf91a303cd0a4fd0b3def5e5ec7->leave($__internal_d3b8bd4c8874d5205daaef371b06ae72a2c6fbf91a303cd0a4fd0b3def5e5ec7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0cec92722e11085628057446372f42d9218e422ba1b2cabc59dbc872c082e3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cec92722e11085628057446372f42d9218e422ba1b2cabc59dbc872c082e3c7->enter($__internal_0cec92722e11085628057446372f42d9218e422ba1b2cabc59dbc872c082e3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8a8ee23bb2b5e3e5a0e20107b338c642ceec2e74ffa013bce0fcdd26c9a57068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8ee23bb2b5e3e5a0e20107b338c642ceec2e74ffa013bce0fcdd26c9a57068->enter($__internal_8a8ee23bb2b5e3e5a0e20107b338c642ceec2e74ffa013bce0fcdd26c9a57068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8a8ee23bb2b5e3e5a0e20107b338c642ceec2e74ffa013bce0fcdd26c9a57068->leave($__internal_8a8ee23bb2b5e3e5a0e20107b338c642ceec2e74ffa013bce0fcdd26c9a57068_prof);

        
        $__internal_0cec92722e11085628057446372f42d9218e422ba1b2cabc59dbc872c082e3c7->leave($__internal_0cec92722e11085628057446372f42d9218e422ba1b2cabc59dbc872c082e3c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b908643a7f21adbe9428c2c2d845894a23fb64ddfb331c441d3343b6e4dabd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b908643a7f21adbe9428c2c2d845894a23fb64ddfb331c441d3343b6e4dabd6->enter($__internal_5b908643a7f21adbe9428c2c2d845894a23fb64ddfb331c441d3343b6e4dabd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_250de7dcb8037782b3df038fb32c2d88472f45be4f048d44cc3c500f3e4a92ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250de7dcb8037782b3df038fb32c2d88472f45be4f048d44cc3c500f3e4a92ce->enter($__internal_250de7dcb8037782b3df038fb32c2d88472f45be4f048d44cc3c500f3e4a92ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_250de7dcb8037782b3df038fb32c2d88472f45be4f048d44cc3c500f3e4a92ce->leave($__internal_250de7dcb8037782b3df038fb32c2d88472f45be4f048d44cc3c500f3e4a92ce_prof);

        
        $__internal_5b908643a7f21adbe9428c2c2d845894a23fb64ddfb331c441d3343b6e4dabd6->leave($__internal_5b908643a7f21adbe9428c2c2d845894a23fb64ddfb331c441d3343b6e4dabd6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18ce8f1b40635cf56b9b1641bfc42da4ca08770687a98218ff3e3506f9fac5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ce8f1b40635cf56b9b1641bfc42da4ca08770687a98218ff3e3506f9fac5b8->enter($__internal_18ce8f1b40635cf56b9b1641bfc42da4ca08770687a98218ff3e3506f9fac5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b2a08f82d0449b87ff44d650a2b7c15daae6faa51b62ad1b3372ae5f202bf896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a08f82d0449b87ff44d650a2b7c15daae6faa51b62ad1b3372ae5f202bf896->enter($__internal_b2a08f82d0449b87ff44d650a2b7c15daae6faa51b62ad1b3372ae5f202bf896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b2a08f82d0449b87ff44d650a2b7c15daae6faa51b62ad1b3372ae5f202bf896->leave($__internal_b2a08f82d0449b87ff44d650a2b7c15daae6faa51b62ad1b3372ae5f202bf896_prof);

        
        $__internal_18ce8f1b40635cf56b9b1641bfc42da4ca08770687a98218ff3e3506f9fac5b8->leave($__internal_18ce8f1b40635cf56b9b1641bfc42da4ca08770687a98218ff3e3506f9fac5b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
