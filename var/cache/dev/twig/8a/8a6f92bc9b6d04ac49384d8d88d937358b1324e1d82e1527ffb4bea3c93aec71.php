<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4445856439fa81ba3ed36a2b046156903da7ea7ef2d785493460024c369022a7 extends Twig_Template
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
        $__internal_c8c4ff7f0cc9d26b766de97d8dbecf2c88270628deb5c9a878284ce746313436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c4ff7f0cc9d26b766de97d8dbecf2c88270628deb5c9a878284ce746313436->enter($__internal_c8c4ff7f0cc9d26b766de97d8dbecf2c88270628deb5c9a878284ce746313436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_244ddf440b21575c0ade866162152cce1d51e137a6ee5378c389e9e90a9faacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244ddf440b21575c0ade866162152cce1d51e137a6ee5378c389e9e90a9faacf->enter($__internal_244ddf440b21575c0ade866162152cce1d51e137a6ee5378c389e9e90a9faacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c8c4ff7f0cc9d26b766de97d8dbecf2c88270628deb5c9a878284ce746313436->leave($__internal_c8c4ff7f0cc9d26b766de97d8dbecf2c88270628deb5c9a878284ce746313436_prof);

        
        $__internal_244ddf440b21575c0ade866162152cce1d51e137a6ee5378c389e9e90a9faacf->leave($__internal_244ddf440b21575c0ade866162152cce1d51e137a6ee5378c389e9e90a9faacf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
