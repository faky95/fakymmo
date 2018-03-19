<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1f7d8cfb4176a3584f978d7a2d4346b575d73ba89e8e51040f37403171b13835 extends Twig_Template
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
        $__internal_34ac6e081891e6b0d6b9db9864055b14efe00b2167ea5a81cfa4ffba0811e2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ac6e081891e6b0d6b9db9864055b14efe00b2167ea5a81cfa4ffba0811e2ea->enter($__internal_34ac6e081891e6b0d6b9db9864055b14efe00b2167ea5a81cfa4ffba0811e2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2229f35929194ed9ed2eeec6423af9aab1c1ca87cc5380d3c0821deec290f662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2229f35929194ed9ed2eeec6423af9aab1c1ca87cc5380d3c0821deec290f662->enter($__internal_2229f35929194ed9ed2eeec6423af9aab1c1ca87cc5380d3c0821deec290f662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_34ac6e081891e6b0d6b9db9864055b14efe00b2167ea5a81cfa4ffba0811e2ea->leave($__internal_34ac6e081891e6b0d6b9db9864055b14efe00b2167ea5a81cfa4ffba0811e2ea_prof);

        
        $__internal_2229f35929194ed9ed2eeec6423af9aab1c1ca87cc5380d3c0821deec290f662->leave($__internal_2229f35929194ed9ed2eeec6423af9aab1c1ca87cc5380d3c0821deec290f662_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
