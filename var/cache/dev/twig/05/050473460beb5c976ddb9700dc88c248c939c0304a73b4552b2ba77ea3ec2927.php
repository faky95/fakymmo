<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_305feaf72aa7d6242b7716197d15d91482bcf25e1d9cb861d423da5814404553 extends Twig_Template
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
        $__internal_7edcce6410f7e6e7f75a862b86088e4945db245eab0770e236c5e62cec7e0801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edcce6410f7e6e7f75a862b86088e4945db245eab0770e236c5e62cec7e0801->enter($__internal_7edcce6410f7e6e7f75a862b86088e4945db245eab0770e236c5e62cec7e0801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_611331e6bdb51f2376bb6e3d14389d09be88d4104c715293fdec555b552ef588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611331e6bdb51f2376bb6e3d14389d09be88d4104c715293fdec555b552ef588->enter($__internal_611331e6bdb51f2376bb6e3d14389d09be88d4104c715293fdec555b552ef588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7edcce6410f7e6e7f75a862b86088e4945db245eab0770e236c5e62cec7e0801->leave($__internal_7edcce6410f7e6e7f75a862b86088e4945db245eab0770e236c5e62cec7e0801_prof);

        
        $__internal_611331e6bdb51f2376bb6e3d14389d09be88d4104c715293fdec555b552ef588->leave($__internal_611331e6bdb51f2376bb6e3d14389d09be88d4104c715293fdec555b552ef588_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
