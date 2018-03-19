<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_221e33ef407b4c7eca42ddc73d24a053c4db53da00e4e386c958fec5a82b5d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_344a30669b20c56617a8c6409697853483dd5c6fe8a0b27f9ddb703743e19ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344a30669b20c56617a8c6409697853483dd5c6fe8a0b27f9ddb703743e19ff2->enter($__internal_344a30669b20c56617a8c6409697853483dd5c6fe8a0b27f9ddb703743e19ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_c782af94999d094995d1d31bd89f75220149253fa15caacdd90766888184bc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c782af94999d094995d1d31bd89f75220149253fa15caacdd90766888184bc70->enter($__internal_c782af94999d094995d1d31bd89f75220149253fa15caacdd90766888184bc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_344a30669b20c56617a8c6409697853483dd5c6fe8a0b27f9ddb703743e19ff2->leave($__internal_344a30669b20c56617a8c6409697853483dd5c6fe8a0b27f9ddb703743e19ff2_prof);

        
        $__internal_c782af94999d094995d1d31bd89f75220149253fa15caacdd90766888184bc70->leave($__internal_c782af94999d094995d1d31bd89f75220149253fa15caacdd90766888184bc70_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_69b62065d2d2e2f0929e189ab29f9ce1c51e0f1658c7f958b442cf71f5f8cfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b62065d2d2e2f0929e189ab29f9ce1c51e0f1658c7f958b442cf71f5f8cfb1->enter($__internal_69b62065d2d2e2f0929e189ab29f9ce1c51e0f1658c7f958b442cf71f5f8cfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_7fdd3dfecc7eb08f9ebc8685550434bcb296c25ec790c2688182f55d5612159c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdd3dfecc7eb08f9ebc8685550434bcb296c25ec790c2688182f55d5612159c->enter($__internal_7fdd3dfecc7eb08f9ebc8685550434bcb296c25ec790c2688182f55d5612159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_7fdd3dfecc7eb08f9ebc8685550434bcb296c25ec790c2688182f55d5612159c->leave($__internal_7fdd3dfecc7eb08f9ebc8685550434bcb296c25ec790c2688182f55d5612159c_prof);

        
        $__internal_69b62065d2d2e2f0929e189ab29f9ce1c51e0f1658c7f958b442cf71f5f8cfb1->leave($__internal_69b62065d2d2e2f0929e189ab29f9ce1c51e0f1658c7f958b442cf71f5f8cfb1_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d32a22f38231b8e0dd04a500d20c6671ddccdf2dcd47255e9046ebb765f76741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32a22f38231b8e0dd04a500d20c6671ddccdf2dcd47255e9046ebb765f76741->enter($__internal_d32a22f38231b8e0dd04a500d20c6671ddccdf2dcd47255e9046ebb765f76741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_8457052b5612db88a003fa6bf47765db3bbcfec31451ab57a3b7d4a64393f57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8457052b5612db88a003fa6bf47765db3bbcfec31451ab57a3b7d4a64393f57e->enter($__internal_8457052b5612db88a003fa6bf47765db3bbcfec31451ab57a3b7d4a64393f57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_8457052b5612db88a003fa6bf47765db3bbcfec31451ab57a3b7d4a64393f57e->leave($__internal_8457052b5612db88a003fa6bf47765db3bbcfec31451ab57a3b7d4a64393f57e_prof);

        
        $__internal_d32a22f38231b8e0dd04a500d20c6671ddccdf2dcd47255e9046ebb765f76741->leave($__internal_d32a22f38231b8e0dd04a500d20c6671ddccdf2dcd47255e9046ebb765f76741_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0e2f88105e752a489e354d02d12687a7932c4b6eef3f577c55025a9ddaa70a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e2f88105e752a489e354d02d12687a7932c4b6eef3f577c55025a9ddaa70a2->enter($__internal_c0e2f88105e752a489e354d02d12687a7932c4b6eef3f577c55025a9ddaa70a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_65fc734f3c0529da9718f833e26b0007d62a359b02c37881ce6eee10a2b4e956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fc734f3c0529da9718f833e26b0007d62a359b02c37881ce6eee10a2b4e956->enter($__internal_65fc734f3c0529da9718f833e26b0007d62a359b02c37881ce6eee10a2b4e956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_65fc734f3c0529da9718f833e26b0007d62a359b02c37881ce6eee10a2b4e956->leave($__internal_65fc734f3c0529da9718f833e26b0007d62a359b02c37881ce6eee10a2b4e956_prof);

        
        $__internal_c0e2f88105e752a489e354d02d12687a7932c4b6eef3f577c55025a9ddaa70a2->leave($__internal_c0e2f88105e752a489e354d02d12687a7932c4b6eef3f577c55025a9ddaa70a2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
