<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_edc126450185754986e4e6d4c5e04dda67832b36eabcc1b297e5e4a81da53397 extends Twig_Template
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
        $__internal_2c64a46546cb1f056dbc638f14b9a50c7a403e704da6915c7f66a91bd830a8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c64a46546cb1f056dbc638f14b9a50c7a403e704da6915c7f66a91bd830a8d7->enter($__internal_2c64a46546cb1f056dbc638f14b9a50c7a403e704da6915c7f66a91bd830a8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_7af6a7f60c34a33df6c65afc18e31ff8d54a673f40ef9f905aab55a80e295dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af6a7f60c34a33df6c65afc18e31ff8d54a673f40ef9f905aab55a80e295dde->enter($__internal_7af6a7f60c34a33df6c65afc18e31ff8d54a673f40ef9f905aab55a80e295dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2c64a46546cb1f056dbc638f14b9a50c7a403e704da6915c7f66a91bd830a8d7->leave($__internal_2c64a46546cb1f056dbc638f14b9a50c7a403e704da6915c7f66a91bd830a8d7_prof);

        
        $__internal_7af6a7f60c34a33df6c65afc18e31ff8d54a673f40ef9f905aab55a80e295dde->leave($__internal_7af6a7f60c34a33df6c65afc18e31ff8d54a673f40ef9f905aab55a80e295dde_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6054635994ed32d42228d162f0f0931c15aefae87ea82afa8536d2f4b7e1b49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6054635994ed32d42228d162f0f0931c15aefae87ea82afa8536d2f4b7e1b49d->enter($__internal_6054635994ed32d42228d162f0f0931c15aefae87ea82afa8536d2f4b7e1b49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_be240e921656500ddb1f315e4e5150fa0da3d0ed3712fb14d15e3660f4057491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be240e921656500ddb1f315e4e5150fa0da3d0ed3712fb14d15e3660f4057491->enter($__internal_be240e921656500ddb1f315e4e5150fa0da3d0ed3712fb14d15e3660f4057491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_be240e921656500ddb1f315e4e5150fa0da3d0ed3712fb14d15e3660f4057491->leave($__internal_be240e921656500ddb1f315e4e5150fa0da3d0ed3712fb14d15e3660f4057491_prof);

        
        $__internal_6054635994ed32d42228d162f0f0931c15aefae87ea82afa8536d2f4b7e1b49d->leave($__internal_6054635994ed32d42228d162f0f0931c15aefae87ea82afa8536d2f4b7e1b49d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_24a3c9b768cf2f7e7e6d79b7d65cacc6d09d10be322fbc47bbc4c53382d52e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a3c9b768cf2f7e7e6d79b7d65cacc6d09d10be322fbc47bbc4c53382d52e1a->enter($__internal_24a3c9b768cf2f7e7e6d79b7d65cacc6d09d10be322fbc47bbc4c53382d52e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_46c224cdd0efdde71f34679275b374ebd6d46304c8f0cd6bcab509f86f8c0e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c224cdd0efdde71f34679275b374ebd6d46304c8f0cd6bcab509f86f8c0e58->enter($__internal_46c224cdd0efdde71f34679275b374ebd6d46304c8f0cd6bcab509f86f8c0e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_46c224cdd0efdde71f34679275b374ebd6d46304c8f0cd6bcab509f86f8c0e58->leave($__internal_46c224cdd0efdde71f34679275b374ebd6d46304c8f0cd6bcab509f86f8c0e58_prof);

        
        $__internal_24a3c9b768cf2f7e7e6d79b7d65cacc6d09d10be322fbc47bbc4c53382d52e1a->leave($__internal_24a3c9b768cf2f7e7e6d79b7d65cacc6d09d10be322fbc47bbc4c53382d52e1a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3b3bb98365494abee71df4bd7113fe974749e48949be2677867089ba5a28ab49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3bb98365494abee71df4bd7113fe974749e48949be2677867089ba5a28ab49->enter($__internal_3b3bb98365494abee71df4bd7113fe974749e48949be2677867089ba5a28ab49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_118c465c6d5e378b21f45ae3f7a557bd6d2a4ef9c92eb619760c5ddcf47b7cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118c465c6d5e378b21f45ae3f7a557bd6d2a4ef9c92eb619760c5ddcf47b7cc9->enter($__internal_118c465c6d5e378b21f45ae3f7a557bd6d2a4ef9c92eb619760c5ddcf47b7cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_118c465c6d5e378b21f45ae3f7a557bd6d2a4ef9c92eb619760c5ddcf47b7cc9->leave($__internal_118c465c6d5e378b21f45ae3f7a557bd6d2a4ef9c92eb619760c5ddcf47b7cc9_prof);

        
        $__internal_3b3bb98365494abee71df4bd7113fe974749e48949be2677867089ba5a28ab49->leave($__internal_3b3bb98365494abee71df4bd7113fe974749e48949be2677867089ba5a28ab49_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
