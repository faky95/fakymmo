<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1a6b59712d8f87b8ec83a7c669e1e6889f36dad75e4b1ec907a72a00b6ed2484 extends Twig_Template
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
        $__internal_402fc201bc3ff678124b6bc2cfc80cab921c43fd413e5aa039ccd2fc40b93c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402fc201bc3ff678124b6bc2cfc80cab921c43fd413e5aa039ccd2fc40b93c45->enter($__internal_402fc201bc3ff678124b6bc2cfc80cab921c43fd413e5aa039ccd2fc40b93c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_da44a84c7153a4e4a64ce67b4c6c653e2d0e86a7c7e0063ef4d7d6d37b4d8087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da44a84c7153a4e4a64ce67b4c6c653e2d0e86a7c7e0063ef4d7d6d37b4d8087->enter($__internal_da44a84c7153a4e4a64ce67b4c6c653e2d0e86a7c7e0063ef4d7d6d37b4d8087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_402fc201bc3ff678124b6bc2cfc80cab921c43fd413e5aa039ccd2fc40b93c45->leave($__internal_402fc201bc3ff678124b6bc2cfc80cab921c43fd413e5aa039ccd2fc40b93c45_prof);

        
        $__internal_da44a84c7153a4e4a64ce67b4c6c653e2d0e86a7c7e0063ef4d7d6d37b4d8087->leave($__internal_da44a84c7153a4e4a64ce67b4c6c653e2d0e86a7c7e0063ef4d7d6d37b4d8087_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
