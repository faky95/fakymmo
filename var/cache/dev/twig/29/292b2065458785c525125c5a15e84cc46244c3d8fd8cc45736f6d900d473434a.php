<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_587ec239242165e3dd5de01f3f3fed47e4c6b03452115dabc3ec8962bc1df88e extends Twig_Template
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
        $__internal_887cd157eca9318fb6d45dd8dc16c817fd88c25515267d261583823ea1cad5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887cd157eca9318fb6d45dd8dc16c817fd88c25515267d261583823ea1cad5ad->enter($__internal_887cd157eca9318fb6d45dd8dc16c817fd88c25515267d261583823ea1cad5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_d641878660b391b9f35db8f8f07052def841c851d120701f7c7767d72cdbd345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d641878660b391b9f35db8f8f07052def841c851d120701f7c7767d72cdbd345->enter($__internal_d641878660b391b9f35db8f8f07052def841c851d120701f7c7767d72cdbd345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_887cd157eca9318fb6d45dd8dc16c817fd88c25515267d261583823ea1cad5ad->leave($__internal_887cd157eca9318fb6d45dd8dc16c817fd88c25515267d261583823ea1cad5ad_prof);

        
        $__internal_d641878660b391b9f35db8f8f07052def841c851d120701f7c7767d72cdbd345->leave($__internal_d641878660b391b9f35db8f8f07052def841c851d120701f7c7767d72cdbd345_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
