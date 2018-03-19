<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9b199c1abf91925b1c3b48242084fd3442dd60c68060316556cea15ddd12760b extends Twig_Template
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
        $__internal_0277a2e3d25dae1eababf1096311a5733fbbd8af7ca1c4ae399c190843310ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0277a2e3d25dae1eababf1096311a5733fbbd8af7ca1c4ae399c190843310ee7->enter($__internal_0277a2e3d25dae1eababf1096311a5733fbbd8af7ca1c4ae399c190843310ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c588f6c07848c358c13fb6eda604a8e9306e0936b1cbe5776cabe94bfa05eda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c588f6c07848c358c13fb6eda604a8e9306e0936b1cbe5776cabe94bfa05eda6->enter($__internal_c588f6c07848c358c13fb6eda604a8e9306e0936b1cbe5776cabe94bfa05eda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0277a2e3d25dae1eababf1096311a5733fbbd8af7ca1c4ae399c190843310ee7->leave($__internal_0277a2e3d25dae1eababf1096311a5733fbbd8af7ca1c4ae399c190843310ee7_prof);

        
        $__internal_c588f6c07848c358c13fb6eda604a8e9306e0936b1cbe5776cabe94bfa05eda6->leave($__internal_c588f6c07848c358c13fb6eda604a8e9306e0936b1cbe5776cabe94bfa05eda6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
