<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_2e88f91a9e43d6c03ada09138ef001149bb7987c71196bdf9f08d19583f3f61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acd446c62b962a3df70c0a24f1ecc12993a7ef4e1455bb625f8e06e4758994bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd446c62b962a3df70c0a24f1ecc12993a7ef4e1455bb625f8e06e4758994bd->enter($__internal_acd446c62b962a3df70c0a24f1ecc12993a7ef4e1455bb625f8e06e4758994bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5c07453622aa5f6352775d861d4109dc4312bf1b23dfe9f16f7172228a2babd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c07453622aa5f6352775d861d4109dc4312bf1b23dfe9f16f7172228a2babd6->enter($__internal_5c07453622aa5f6352775d861d4109dc4312bf1b23dfe9f16f7172228a2babd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acd446c62b962a3df70c0a24f1ecc12993a7ef4e1455bb625f8e06e4758994bd->leave($__internal_acd446c62b962a3df70c0a24f1ecc12993a7ef4e1455bb625f8e06e4758994bd_prof);

        
        $__internal_5c07453622aa5f6352775d861d4109dc4312bf1b23dfe9f16f7172228a2babd6->leave($__internal_5c07453622aa5f6352775d861d4109dc4312bf1b23dfe9f16f7172228a2babd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b193457f3cd21538589f7865316865c9b696d5aaa0085539b0e80981884fc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b193457f3cd21538589f7865316865c9b696d5aaa0085539b0e80981884fc3d->enter($__internal_9b193457f3cd21538589f7865316865c9b696d5aaa0085539b0e80981884fc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_08c58aa930b4643548c6615ffd57f3ece65949fb8796321d02110223506e1260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c58aa930b4643548c6615ffd57f3ece65949fb8796321d02110223506e1260->enter($__internal_08c58aa930b4643548c6615ffd57f3ece65949fb8796321d02110223506e1260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_08c58aa930b4643548c6615ffd57f3ece65949fb8796321d02110223506e1260->leave($__internal_08c58aa930b4643548c6615ffd57f3ece65949fb8796321d02110223506e1260_prof);

        
        $__internal_9b193457f3cd21538589f7865316865c9b696d5aaa0085539b0e80981884fc3d->leave($__internal_9b193457f3cd21538589f7865316865c9b696d5aaa0085539b0e80981884fc3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
