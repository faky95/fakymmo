<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_e1533c1de49bcc7e7090ec4eaf6fa09b7e672ba463868cc0b176ef9886e5e3b6 extends Twig_Template
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
        $__internal_f44d67d0da1f5427544bb9c607dcd4bfa60ad20bcdc4a4f098b0fd6ca2da726d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44d67d0da1f5427544bb9c607dcd4bfa60ad20bcdc4a4f098b0fd6ca2da726d->enter($__internal_f44d67d0da1f5427544bb9c607dcd4bfa60ad20bcdc4a4f098b0fd6ca2da726d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_9172d80f958e61b89b26ea63460c591168617402a640c91272222d79f431fc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9172d80f958e61b89b26ea63460c591168617402a640c91272222d79f431fc5f->enter($__internal_9172d80f958e61b89b26ea63460c591168617402a640c91272222d79f431fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_f44d67d0da1f5427544bb9c607dcd4bfa60ad20bcdc4a4f098b0fd6ca2da726d->leave($__internal_f44d67d0da1f5427544bb9c607dcd4bfa60ad20bcdc4a4f098b0fd6ca2da726d_prof);

        
        $__internal_9172d80f958e61b89b26ea63460c591168617402a640c91272222d79f431fc5f->leave($__internal_9172d80f958e61b89b26ea63460c591168617402a640c91272222d79f431fc5f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
