<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_23f4224b2876915f2e75bfe4bc6b4b54b4462bc9845966edea3b1c4b18345006 extends Twig_Template
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
        $__internal_bba471db8d858a84086649de6a094b352bd70b81a371bf4ec1474ba7859936c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba471db8d858a84086649de6a094b352bd70b81a371bf4ec1474ba7859936c8->enter($__internal_bba471db8d858a84086649de6a094b352bd70b81a371bf4ec1474ba7859936c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_ab1c993a4d89652f63f3389ff3fc205e28e56552478e81d79f06696cfffcf1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1c993a4d89652f63f3389ff3fc205e28e56552478e81d79f06696cfffcf1c6->enter($__internal_ab1c993a4d89652f63f3389ff3fc205e28e56552478e81d79f06696cfffcf1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_bba471db8d858a84086649de6a094b352bd70b81a371bf4ec1474ba7859936c8->leave($__internal_bba471db8d858a84086649de6a094b352bd70b81a371bf4ec1474ba7859936c8_prof);

        
        $__internal_ab1c993a4d89652f63f3389ff3fc205e28e56552478e81d79f06696cfffcf1c6->leave($__internal_ab1c993a4d89652f63f3389ff3fc205e28e56552478e81d79f06696cfffcf1c6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
