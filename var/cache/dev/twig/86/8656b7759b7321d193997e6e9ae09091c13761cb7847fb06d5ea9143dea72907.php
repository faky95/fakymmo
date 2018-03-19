<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e9202c3ef36d7538db44237b751b34757799721be5f1bc8ebea24e3a139149a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_651e50c181660f1235544d029ef98c6793b65a711d054d0bcfd3357e5ad57f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651e50c181660f1235544d029ef98c6793b65a711d054d0bcfd3357e5ad57f7a->enter($__internal_651e50c181660f1235544d029ef98c6793b65a711d054d0bcfd3357e5ad57f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_14a4e401e6d44bca1e4e238886bb202b32cdf4c503f6b2b323ac2a80b91e45e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a4e401e6d44bca1e4e238886bb202b32cdf4c503f6b2b323ac2a80b91e45e9->enter($__internal_14a4e401e6d44bca1e4e238886bb202b32cdf4c503f6b2b323ac2a80b91e45e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651e50c181660f1235544d029ef98c6793b65a711d054d0bcfd3357e5ad57f7a->leave($__internal_651e50c181660f1235544d029ef98c6793b65a711d054d0bcfd3357e5ad57f7a_prof);

        
        $__internal_14a4e401e6d44bca1e4e238886bb202b32cdf4c503f6b2b323ac2a80b91e45e9->leave($__internal_14a4e401e6d44bca1e4e238886bb202b32cdf4c503f6b2b323ac2a80b91e45e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d5b8158ded67590133bba5560d6e8a07268ec20c985a8af02a10535239ca3b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b8158ded67590133bba5560d6e8a07268ec20c985a8af02a10535239ca3b18->enter($__internal_d5b8158ded67590133bba5560d6e8a07268ec20c985a8af02a10535239ca3b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba0848a6f9aee807c4dbf172ad1bc1b4c94c195fdf8b6d082ceddf9d052fe4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0848a6f9aee807c4dbf172ad1bc1b4c94c195fdf8b6d082ceddf9d052fe4f9->enter($__internal_ba0848a6f9aee807c4dbf172ad1bc1b4c94c195fdf8b6d082ceddf9d052fe4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ba0848a6f9aee807c4dbf172ad1bc1b4c94c195fdf8b6d082ceddf9d052fe4f9->leave($__internal_ba0848a6f9aee807c4dbf172ad1bc1b4c94c195fdf8b6d082ceddf9d052fe4f9_prof);

        
        $__internal_d5b8158ded67590133bba5560d6e8a07268ec20c985a8af02a10535239ca3b18->leave($__internal_d5b8158ded67590133bba5560d6e8a07268ec20c985a8af02a10535239ca3b18_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
