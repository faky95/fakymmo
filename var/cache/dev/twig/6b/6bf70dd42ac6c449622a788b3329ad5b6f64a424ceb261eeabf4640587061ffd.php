<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_cc320928d40ce08642cc7c08bd16b899b78a4b145b344380d1f33cd469f4b158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_397b5f031147b63ec48fe94996e5fb132c4158a7ebf5c22cfb7b67af5de1aa4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397b5f031147b63ec48fe94996e5fb132c4158a7ebf5c22cfb7b67af5de1aa4f->enter($__internal_397b5f031147b63ec48fe94996e5fb132c4158a7ebf5c22cfb7b67af5de1aa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_9ec850f527cea23412c1a98a9db721671d6219e0d4cda2113ee8aa4051cde873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec850f527cea23412c1a98a9db721671d6219e0d4cda2113ee8aa4051cde873->enter($__internal_9ec850f527cea23412c1a98a9db721671d6219e0d4cda2113ee8aa4051cde873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_397b5f031147b63ec48fe94996e5fb132c4158a7ebf5c22cfb7b67af5de1aa4f->leave($__internal_397b5f031147b63ec48fe94996e5fb132c4158a7ebf5c22cfb7b67af5de1aa4f_prof);

        
        $__internal_9ec850f527cea23412c1a98a9db721671d6219e0d4cda2113ee8aa4051cde873->leave($__internal_9ec850f527cea23412c1a98a9db721671d6219e0d4cda2113ee8aa4051cde873_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
