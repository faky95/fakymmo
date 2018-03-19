<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5ec7c01774a678511b3d2a00faa8e5a767f6a6b6bd34fa46023d22feb5357b60 extends Twig_Template
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
        $__internal_23c5ddfbbb251a25dd10da15e50e0b7b0b01458cf9f60213d1eeded879894dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c5ddfbbb251a25dd10da15e50e0b7b0b01458cf9f60213d1eeded879894dc4->enter($__internal_23c5ddfbbb251a25dd10da15e50e0b7b0b01458cf9f60213d1eeded879894dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bf41de3d3d2b1407fbcb3dee97593eb77f92f7fd9c5e755c3142b6b5e15032a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf41de3d3d2b1407fbcb3dee97593eb77f92f7fd9c5e755c3142b6b5e15032a3->enter($__internal_bf41de3d3d2b1407fbcb3dee97593eb77f92f7fd9c5e755c3142b6b5e15032a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_23c5ddfbbb251a25dd10da15e50e0b7b0b01458cf9f60213d1eeded879894dc4->leave($__internal_23c5ddfbbb251a25dd10da15e50e0b7b0b01458cf9f60213d1eeded879894dc4_prof);

        
        $__internal_bf41de3d3d2b1407fbcb3dee97593eb77f92f7fd9c5e755c3142b6b5e15032a3->leave($__internal_bf41de3d3d2b1407fbcb3dee97593eb77f92f7fd9c5e755c3142b6b5e15032a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
