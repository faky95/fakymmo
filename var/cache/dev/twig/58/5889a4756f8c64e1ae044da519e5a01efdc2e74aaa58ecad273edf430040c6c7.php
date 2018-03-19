<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_8d6c181c0330336adb673bc38fcd888fa616fd5114c40c1196470f03c3ecbe42 extends Twig_Template
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
        $__internal_ae45fc84b9bc16865010b86f69e011456c681641bb6938ca70cbce46c140219e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae45fc84b9bc16865010b86f69e011456c681641bb6938ca70cbce46c140219e->enter($__internal_ae45fc84b9bc16865010b86f69e011456c681641bb6938ca70cbce46c140219e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_9c2c760bbbfdca6ddca4c4e81e8eb65995f53707604f41edb3b48d92ced55002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2c760bbbfdca6ddca4c4e81e8eb65995f53707604f41edb3b48d92ced55002->enter($__internal_9c2c760bbbfdca6ddca4c4e81e8eb65995f53707604f41edb3b48d92ced55002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ae45fc84b9bc16865010b86f69e011456c681641bb6938ca70cbce46c140219e->leave($__internal_ae45fc84b9bc16865010b86f69e011456c681641bb6938ca70cbce46c140219e_prof);

        
        $__internal_9c2c760bbbfdca6ddca4c4e81e8eb65995f53707604f41edb3b48d92ced55002->leave($__internal_9c2c760bbbfdca6ddca4c4e81e8eb65995f53707604f41edb3b48d92ced55002_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_date.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
