<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_72c368f94e8e610dcf9b02f96a419f4ced16faf94956d8eb34ebf42c38844bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b3621b3fc78f942cec42c0c92569c76cbeeeb13a691c25ceae6842cf6263ff68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3621b3fc78f942cec42c0c92569c76cbeeeb13a691c25ceae6842cf6263ff68->enter($__internal_b3621b3fc78f942cec42c0c92569c76cbeeeb13a691c25ceae6842cf6263ff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_944416753fb6da811b6ca20aa8df1227a556ed08563c37d2d89f77caa9b7e727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944416753fb6da811b6ca20aa8df1227a556ed08563c37d2d89f77caa9b7e727->enter($__internal_944416753fb6da811b6ca20aa8df1227a556ed08563c37d2d89f77caa9b7e727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3621b3fc78f942cec42c0c92569c76cbeeeb13a691c25ceae6842cf6263ff68->leave($__internal_b3621b3fc78f942cec42c0c92569c76cbeeeb13a691c25ceae6842cf6263ff68_prof);

        
        $__internal_944416753fb6da811b6ca20aa8df1227a556ed08563c37d2d89f77caa9b7e727->leave($__internal_944416753fb6da811b6ca20aa8df1227a556ed08563c37d2d89f77caa9b7e727_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_974c3b0ff4fefdb932e1dbeccc4183f73117714fe8c38fd54c21851600f8f0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974c3b0ff4fefdb932e1dbeccc4183f73117714fe8c38fd54c21851600f8f0a0->enter($__internal_974c3b0ff4fefdb932e1dbeccc4183f73117714fe8c38fd54c21851600f8f0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b6ad9bab044312e11b154c6aa9fa0f4d15486debd272d30d51d5d1a05486be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6ad9bab044312e11b154c6aa9fa0f4d15486debd272d30d51d5d1a05486be2->enter($__internal_9b6ad9bab044312e11b154c6aa9fa0f4d15486debd272d30d51d5d1a05486be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9b6ad9bab044312e11b154c6aa9fa0f4d15486debd272d30d51d5d1a05486be2->leave($__internal_9b6ad9bab044312e11b154c6aa9fa0f4d15486debd272d30d51d5d1a05486be2_prof);

        
        $__internal_974c3b0ff4fefdb932e1dbeccc4183f73117714fe8c38fd54c21851600f8f0a0->leave($__internal_974c3b0ff4fefdb932e1dbeccc4183f73117714fe8c38fd54c21851600f8f0a0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_62eee4ce7c92dd0ebe073baebb39283f45b33f7bec2faeefb949eb780c753a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62eee4ce7c92dd0ebe073baebb39283f45b33f7bec2faeefb949eb780c753a0b->enter($__internal_62eee4ce7c92dd0ebe073baebb39283f45b33f7bec2faeefb949eb780c753a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_083a5d7d610ae20abf043984ec4b9002584e8eda6c00a3e0c4f1bcf2adb968be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083a5d7d610ae20abf043984ec4b9002584e8eda6c00a3e0c4f1bcf2adb968be->enter($__internal_083a5d7d610ae20abf043984ec4b9002584e8eda6c00a3e0c4f1bcf2adb968be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_083a5d7d610ae20abf043984ec4b9002584e8eda6c00a3e0c4f1bcf2adb968be->leave($__internal_083a5d7d610ae20abf043984ec4b9002584e8eda6c00a3e0c4f1bcf2adb968be_prof);

        
        $__internal_62eee4ce7c92dd0ebe073baebb39283f45b33f7bec2faeefb949eb780c753a0b->leave($__internal_62eee4ce7c92dd0ebe073baebb39283f45b33f7bec2faeefb949eb780c753a0b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7931c2cdec3b47a320b4ec637d9b52794014f23bc2441ae55337762e17360124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7931c2cdec3b47a320b4ec637d9b52794014f23bc2441ae55337762e17360124->enter($__internal_7931c2cdec3b47a320b4ec637d9b52794014f23bc2441ae55337762e17360124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d20932c95cb7fa7a30c89dc0858dab6581f389114771c20cb815bda58102f772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20932c95cb7fa7a30c89dc0858dab6581f389114771c20cb815bda58102f772->enter($__internal_d20932c95cb7fa7a30c89dc0858dab6581f389114771c20cb815bda58102f772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d20932c95cb7fa7a30c89dc0858dab6581f389114771c20cb815bda58102f772->leave($__internal_d20932c95cb7fa7a30c89dc0858dab6581f389114771c20cb815bda58102f772_prof);

        
        $__internal_7931c2cdec3b47a320b4ec637d9b52794014f23bc2441ae55337762e17360124->leave($__internal_7931c2cdec3b47a320b4ec637d9b52794014f23bc2441ae55337762e17360124_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
