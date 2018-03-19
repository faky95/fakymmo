<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5ddd5f8eaf4a1b73898f75d15998c68104f02805ec0a37187e80e5e7bf4724e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02538da55030c727a0dda15b1ae9998254ae755121c250c34eb775c4f3cb9cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02538da55030c727a0dda15b1ae9998254ae755121c250c34eb775c4f3cb9cd7->enter($__internal_02538da55030c727a0dda15b1ae9998254ae755121c250c34eb775c4f3cb9cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_0561ca0e4cfdd608b4ded57b5c4277759e7f61a6cd47b5da9317cb94624285f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0561ca0e4cfdd608b4ded57b5c4277759e7f61a6cd47b5da9317cb94624285f2->enter($__internal_0561ca0e4cfdd608b4ded57b5c4277759e7f61a6cd47b5da9317cb94624285f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_02538da55030c727a0dda15b1ae9998254ae755121c250c34eb775c4f3cb9cd7->leave($__internal_02538da55030c727a0dda15b1ae9998254ae755121c250c34eb775c4f3cb9cd7_prof);

        
        $__internal_0561ca0e4cfdd608b4ded57b5c4277759e7f61a6cd47b5da9317cb94624285f2->leave($__internal_0561ca0e4cfdd608b4ded57b5c4277759e7f61a6cd47b5da9317cb94624285f2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c695e80759e9ab5b4ee798f62af42b0d558cb558821760382d9ed5d6b871a71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c695e80759e9ab5b4ee798f62af42b0d558cb558821760382d9ed5d6b871a71c->enter($__internal_c695e80759e9ab5b4ee798f62af42b0d558cb558821760382d9ed5d6b871a71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e79bf9e2a7f358737e38b565632fed428af6f6433586f1e0aa515b2c92158aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79bf9e2a7f358737e38b565632fed428af6f6433586f1e0aa515b2c92158aea->enter($__internal_e79bf9e2a7f358737e38b565632fed428af6f6433586f1e0aa515b2c92158aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e79bf9e2a7f358737e38b565632fed428af6f6433586f1e0aa515b2c92158aea->leave($__internal_e79bf9e2a7f358737e38b565632fed428af6f6433586f1e0aa515b2c92158aea_prof);

        
        $__internal_c695e80759e9ab5b4ee798f62af42b0d558cb558821760382d9ed5d6b871a71c->leave($__internal_c695e80759e9ab5b4ee798f62af42b0d558cb558821760382d9ed5d6b871a71c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_21b2e55de8976766612e83865490326bfe755b526b1b7c9c8a2753a2eaddfee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b2e55de8976766612e83865490326bfe755b526b1b7c9c8a2753a2eaddfee7->enter($__internal_21b2e55de8976766612e83865490326bfe755b526b1b7c9c8a2753a2eaddfee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_593fc015039714ed3e86390ba7f00c13ed2a1807d5de1d06a6be4cf76a68f55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593fc015039714ed3e86390ba7f00c13ed2a1807d5de1d06a6be4cf76a68f55d->enter($__internal_593fc015039714ed3e86390ba7f00c13ed2a1807d5de1d06a6be4cf76a68f55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_593fc015039714ed3e86390ba7f00c13ed2a1807d5de1d06a6be4cf76a68f55d->leave($__internal_593fc015039714ed3e86390ba7f00c13ed2a1807d5de1d06a6be4cf76a68f55d_prof);

        
        $__internal_21b2e55de8976766612e83865490326bfe755b526b1b7c9c8a2753a2eaddfee7->leave($__internal_21b2e55de8976766612e83865490326bfe755b526b1b7c9c8a2753a2eaddfee7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_67e8f8f879d153ebaf8bb283ca498dd7bfd83711e54d77792dcd646bdc3d5d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e8f8f879d153ebaf8bb283ca498dd7bfd83711e54d77792dcd646bdc3d5d6e->enter($__internal_67e8f8f879d153ebaf8bb283ca498dd7bfd83711e54d77792dcd646bdc3d5d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4fb6c02e74389436abf29553fd2970ad09e239b3ef1799ebfe5536e95f81b7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb6c02e74389436abf29553fd2970ad09e239b3ef1799ebfe5536e95f81b7df->enter($__internal_4fb6c02e74389436abf29553fd2970ad09e239b3ef1799ebfe5536e95f81b7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4fb6c02e74389436abf29553fd2970ad09e239b3ef1799ebfe5536e95f81b7df->leave($__internal_4fb6c02e74389436abf29553fd2970ad09e239b3ef1799ebfe5536e95f81b7df_prof);

        
        $__internal_67e8f8f879d153ebaf8bb283ca498dd7bfd83711e54d77792dcd646bdc3d5d6e->leave($__internal_67e8f8f879d153ebaf8bb283ca498dd7bfd83711e54d77792dcd646bdc3d5d6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
