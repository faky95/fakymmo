<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_768c4cde5e9d78baf6d6439ab8b748bb3829cac79f8709139bce641a6188eea4 extends Twig_Template
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
        $__internal_ac5f64a358923532ce1f715757e224251303e9d593c322ea62cad73f2b693c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5f64a358923532ce1f715757e224251303e9d593c322ea62cad73f2b693c47->enter($__internal_ac5f64a358923532ce1f715757e224251303e9d593c322ea62cad73f2b693c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_aaf3ec2eab3e8cafd8f01f184f162a668c27bc120d25c927ee78b1d215b398db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf3ec2eab3e8cafd8f01f184f162a668c27bc120d25c927ee78b1d215b398db->enter($__internal_aaf3ec2eab3e8cafd8f01f184f162a668c27bc120d25c927ee78b1d215b398db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_ac5f64a358923532ce1f715757e224251303e9d593c322ea62cad73f2b693c47->leave($__internal_ac5f64a358923532ce1f715757e224251303e9d593c322ea62cad73f2b693c47_prof);

        
        $__internal_aaf3ec2eab3e8cafd8f01f184f162a668c27bc120d25c927ee78b1d215b398db->leave($__internal_aaf3ec2eab3e8cafd8f01f184f162a668c27bc120d25c927ee78b1d215b398db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
