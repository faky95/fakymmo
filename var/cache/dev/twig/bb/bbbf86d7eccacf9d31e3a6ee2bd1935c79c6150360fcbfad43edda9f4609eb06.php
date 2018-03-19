<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_94c98f2bd1dbc86287eddca46e2105fdba058855d292951c45bba465d1541844 extends Twig_Template
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
        $__internal_367574582de3eecefcbc35b27469e68c64414dfb8e951a61e922786cad05e91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367574582de3eecefcbc35b27469e68c64414dfb8e951a61e922786cad05e91f->enter($__internal_367574582de3eecefcbc35b27469e68c64414dfb8e951a61e922786cad05e91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f8da1a7d12a9732f3ee24dfcad8304648338d5a33d0a9c5af14ce9b6106c6b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8da1a7d12a9732f3ee24dfcad8304648338d5a33d0a9c5af14ce9b6106c6b35->enter($__internal_f8da1a7d12a9732f3ee24dfcad8304648338d5a33d0a9c5af14ce9b6106c6b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_367574582de3eecefcbc35b27469e68c64414dfb8e951a61e922786cad05e91f->leave($__internal_367574582de3eecefcbc35b27469e68c64414dfb8e951a61e922786cad05e91f_prof);

        
        $__internal_f8da1a7d12a9732f3ee24dfcad8304648338d5a33d0a9c5af14ce9b6106c6b35->leave($__internal_f8da1a7d12a9732f3ee24dfcad8304648338d5a33d0a9c5af14ce9b6106c6b35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
