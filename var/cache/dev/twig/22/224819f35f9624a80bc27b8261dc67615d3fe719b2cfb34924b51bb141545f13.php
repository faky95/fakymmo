<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8d75cf4f75aa1355e5e25fe17ac08f737d7e8910e4185519882e13cd9e6d2cd5 extends Twig_Template
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
        $__internal_5548cc07befcf79b2c9f0e113103082bb7a42811c381dd9c41884e9b5b1fb427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5548cc07befcf79b2c9f0e113103082bb7a42811c381dd9c41884e9b5b1fb427->enter($__internal_5548cc07befcf79b2c9f0e113103082bb7a42811c381dd9c41884e9b5b1fb427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_74c62c294e766ed824f639352ae7fbe72e8aacb6a6d80d2aade98f8e00869ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c62c294e766ed824f639352ae7fbe72e8aacb6a6d80d2aade98f8e00869ce6->enter($__internal_74c62c294e766ed824f639352ae7fbe72e8aacb6a6d80d2aade98f8e00869ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5548cc07befcf79b2c9f0e113103082bb7a42811c381dd9c41884e9b5b1fb427->leave($__internal_5548cc07befcf79b2c9f0e113103082bb7a42811c381dd9c41884e9b5b1fb427_prof);

        
        $__internal_74c62c294e766ed824f639352ae7fbe72e8aacb6a6d80d2aade98f8e00869ce6->leave($__internal_74c62c294e766ed824f639352ae7fbe72e8aacb6a6d80d2aade98f8e00869ce6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
