<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_719b51f733aa70f5477ca088c0102d82d8fc8da0536160a8ac535ed36d831296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1c80399ff42946f408eca9f7e70604d2b34fb76dc26e61b64f502c1289b97a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c80399ff42946f408eca9f7e70604d2b34fb76dc26e61b64f502c1289b97a9->enter($__internal_e1c80399ff42946f408eca9f7e70604d2b34fb76dc26e61b64f502c1289b97a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_eba7a06580d5e0e391d4572a37c564c8203de6830f640adc715b8b544c9a794a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba7a06580d5e0e391d4572a37c564c8203de6830f640adc715b8b544c9a794a->enter($__internal_eba7a06580d5e0e391d4572a37c564c8203de6830f640adc715b8b544c9a794a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c80399ff42946f408eca9f7e70604d2b34fb76dc26e61b64f502c1289b97a9->leave($__internal_e1c80399ff42946f408eca9f7e70604d2b34fb76dc26e61b64f502c1289b97a9_prof);

        
        $__internal_eba7a06580d5e0e391d4572a37c564c8203de6830f640adc715b8b544c9a794a->leave($__internal_eba7a06580d5e0e391d4572a37c564c8203de6830f640adc715b8b544c9a794a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79283bff21a036d5ec9d4f909e14c71e63e7b1e015adf455f93b4cf82b4e9e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79283bff21a036d5ec9d4f909e14c71e63e7b1e015adf455f93b4cf82b4e9e08->enter($__internal_79283bff21a036d5ec9d4f909e14c71e63e7b1e015adf455f93b4cf82b4e9e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d5a9e88c3ef129cdb8feca1708879036ce3f84f42771e91c58f1a5cbd63c5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5a9e88c3ef129cdb8feca1708879036ce3f84f42771e91c58f1a5cbd63c5c6->enter($__internal_7d5a9e88c3ef129cdb8feca1708879036ce3f84f42771e91c58f1a5cbd63c5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7d5a9e88c3ef129cdb8feca1708879036ce3f84f42771e91c58f1a5cbd63c5c6->leave($__internal_7d5a9e88c3ef129cdb8feca1708879036ce3f84f42771e91c58f1a5cbd63c5c6_prof);

        
        $__internal_79283bff21a036d5ec9d4f909e14c71e63e7b1e015adf455f93b4cf82b4e9e08->leave($__internal_79283bff21a036d5ec9d4f909e14c71e63e7b1e015adf455f93b4cf82b4e9e08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
