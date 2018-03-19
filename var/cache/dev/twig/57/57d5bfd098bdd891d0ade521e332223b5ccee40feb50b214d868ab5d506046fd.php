<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ac2a6d4ffa7d1d7dcfa02cb8dbed2117f4d55541fca55927744add0259ebacd7 extends Twig_Template
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
        $__internal_3cc13a27751b3ec8f6e59b732851ad9e5a209c32052226b6a165960db3fb09d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc13a27751b3ec8f6e59b732851ad9e5a209c32052226b6a165960db3fb09d7->enter($__internal_3cc13a27751b3ec8f6e59b732851ad9e5a209c32052226b6a165960db3fb09d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bcc75eb03efe643bc71061bff6164e7ce5d6b4668511df06e7dee446195dbcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc75eb03efe643bc71061bff6164e7ce5d6b4668511df06e7dee446195dbcb3->enter($__internal_bcc75eb03efe643bc71061bff6164e7ce5d6b4668511df06e7dee446195dbcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3cc13a27751b3ec8f6e59b732851ad9e5a209c32052226b6a165960db3fb09d7->leave($__internal_3cc13a27751b3ec8f6e59b732851ad9e5a209c32052226b6a165960db3fb09d7_prof);

        
        $__internal_bcc75eb03efe643bc71061bff6164e7ce5d6b4668511df06e7dee446195dbcb3->leave($__internal_bcc75eb03efe643bc71061bff6164e7ce5d6b4668511df06e7dee446195dbcb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
