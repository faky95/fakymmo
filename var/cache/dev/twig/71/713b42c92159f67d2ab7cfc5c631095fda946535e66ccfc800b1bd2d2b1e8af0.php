<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0d41b5a5304576ce3e8ad966c5c17e01e2cef9163da28cf5485c996ca575980f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b3eefd4183a0c11ada8cf5f2f7fde5b4579d466fb921a846f97d22f1d15b807e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3eefd4183a0c11ada8cf5f2f7fde5b4579d466fb921a846f97d22f1d15b807e->enter($__internal_b3eefd4183a0c11ada8cf5f2f7fde5b4579d466fb921a846f97d22f1d15b807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_8d247e98ba82bfbc3e67e99147126eb9bdd14c923a944a44003f7063c25ffc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d247e98ba82bfbc3e67e99147126eb9bdd14c923a944a44003f7063c25ffc7e->enter($__internal_8d247e98ba82bfbc3e67e99147126eb9bdd14c923a944a44003f7063c25ffc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3eefd4183a0c11ada8cf5f2f7fde5b4579d466fb921a846f97d22f1d15b807e->leave($__internal_b3eefd4183a0c11ada8cf5f2f7fde5b4579d466fb921a846f97d22f1d15b807e_prof);

        
        $__internal_8d247e98ba82bfbc3e67e99147126eb9bdd14c923a944a44003f7063c25ffc7e->leave($__internal_8d247e98ba82bfbc3e67e99147126eb9bdd14c923a944a44003f7063c25ffc7e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c40b5b106764dd215d10f81e99227212e69538b3f1359efabd074528e897d255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40b5b106764dd215d10f81e99227212e69538b3f1359efabd074528e897d255->enter($__internal_c40b5b106764dd215d10f81e99227212e69538b3f1359efabd074528e897d255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e83881bc7fc56cceb4cf63cc8c01ed716b9251f9a48e96932d492007c56ccf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83881bc7fc56cceb4cf63cc8c01ed716b9251f9a48e96932d492007c56ccf21->enter($__internal_e83881bc7fc56cceb4cf63cc8c01ed716b9251f9a48e96932d492007c56ccf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e83881bc7fc56cceb4cf63cc8c01ed716b9251f9a48e96932d492007c56ccf21->leave($__internal_e83881bc7fc56cceb4cf63cc8c01ed716b9251f9a48e96932d492007c56ccf21_prof);

        
        $__internal_c40b5b106764dd215d10f81e99227212e69538b3f1359efabd074528e897d255->leave($__internal_c40b5b106764dd215d10f81e99227212e69538b3f1359efabd074528e897d255_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
