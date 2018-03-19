<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f84271b6caf0064dd52a7bcfc66d5b4e05bcae6dc281d83469d1355f096acead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d1ffb2db4573cc0c08287c28e09a210931f09fbf228f302613f27c7bcc7e0492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ffb2db4573cc0c08287c28e09a210931f09fbf228f302613f27c7bcc7e0492->enter($__internal_d1ffb2db4573cc0c08287c28e09a210931f09fbf228f302613f27c7bcc7e0492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_52060b895d7cb057b4e485261b56a9ff80f5a778d316000efa221e76c547e5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52060b895d7cb057b4e485261b56a9ff80f5a778d316000efa221e76c547e5fb->enter($__internal_52060b895d7cb057b4e485261b56a9ff80f5a778d316000efa221e76c547e5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ffb2db4573cc0c08287c28e09a210931f09fbf228f302613f27c7bcc7e0492->leave($__internal_d1ffb2db4573cc0c08287c28e09a210931f09fbf228f302613f27c7bcc7e0492_prof);

        
        $__internal_52060b895d7cb057b4e485261b56a9ff80f5a778d316000efa221e76c547e5fb->leave($__internal_52060b895d7cb057b4e485261b56a9ff80f5a778d316000efa221e76c547e5fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6de14a59d1adfa0ccbeb574b16a4def94ffde70fa40a9b368aac2338e674f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6de14a59d1adfa0ccbeb574b16a4def94ffde70fa40a9b368aac2338e674f69->enter($__internal_b6de14a59d1adfa0ccbeb574b16a4def94ffde70fa40a9b368aac2338e674f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99a6444d6836a7681e02b98e9af776c54323d8d26843723a0981145021d50963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a6444d6836a7681e02b98e9af776c54323d8d26843723a0981145021d50963->enter($__internal_99a6444d6836a7681e02b98e9af776c54323d8d26843723a0981145021d50963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_99a6444d6836a7681e02b98e9af776c54323d8d26843723a0981145021d50963->leave($__internal_99a6444d6836a7681e02b98e9af776c54323d8d26843723a0981145021d50963_prof);

        
        $__internal_b6de14a59d1adfa0ccbeb574b16a4def94ffde70fa40a9b368aac2338e674f69->leave($__internal_b6de14a59d1adfa0ccbeb574b16a4def94ffde70fa40a9b368aac2338e674f69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
