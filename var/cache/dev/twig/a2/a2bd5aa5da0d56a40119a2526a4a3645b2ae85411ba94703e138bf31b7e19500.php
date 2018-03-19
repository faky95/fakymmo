<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_bde37d5bfc5e004f75627d8278691257280668806e98a08f20d3381112404dd9 extends Twig_Template
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
        $__internal_9e67e4c8dc08b109acc9240dda8c8750404ba097ddd00e9e89a08fad0847e10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e67e4c8dc08b109acc9240dda8c8750404ba097ddd00e9e89a08fad0847e10b->enter($__internal_9e67e4c8dc08b109acc9240dda8c8750404ba097ddd00e9e89a08fad0847e10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_5e098c86b0b6d3e3d398925f458e1b36223e37685755328aa62084d1dcb1019b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e098c86b0b6d3e3d398925f458e1b36223e37685755328aa62084d1dcb1019b->enter($__internal_5e098c86b0b6d3e3d398925f458e1b36223e37685755328aa62084d1dcb1019b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_9e67e4c8dc08b109acc9240dda8c8750404ba097ddd00e9e89a08fad0847e10b->leave($__internal_9e67e4c8dc08b109acc9240dda8c8750404ba097ddd00e9e89a08fad0847e10b_prof);

        
        $__internal_5e098c86b0b6d3e3d398925f458e1b36223e37685755328aa62084d1dcb1019b->leave($__internal_5e098c86b0b6d3e3d398925f458e1b36223e37685755328aa62084d1dcb1019b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
