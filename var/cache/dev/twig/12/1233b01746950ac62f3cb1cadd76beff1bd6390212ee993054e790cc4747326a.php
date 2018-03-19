<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2cb6409e54882bd0a4f82823c9af550275e7df41db8e176971eb0862d5bca559 extends Twig_Template
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
        $__internal_97ddf22490d929e4861cf9c515f2d0255141674019cf69a0c1e7931f7112b05d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ddf22490d929e4861cf9c515f2d0255141674019cf69a0c1e7931f7112b05d->enter($__internal_97ddf22490d929e4861cf9c515f2d0255141674019cf69a0c1e7931f7112b05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f3455c4120eae89535d554362498fcce3a9ac28bfa7f29c027779738105ac877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3455c4120eae89535d554362498fcce3a9ac28bfa7f29c027779738105ac877->enter($__internal_f3455c4120eae89535d554362498fcce3a9ac28bfa7f29c027779738105ac877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_97ddf22490d929e4861cf9c515f2d0255141674019cf69a0c1e7931f7112b05d->leave($__internal_97ddf22490d929e4861cf9c515f2d0255141674019cf69a0c1e7931f7112b05d_prof);

        
        $__internal_f3455c4120eae89535d554362498fcce3a9ac28bfa7f29c027779738105ac877->leave($__internal_f3455c4120eae89535d554362498fcce3a9ac28bfa7f29c027779738105ac877_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
