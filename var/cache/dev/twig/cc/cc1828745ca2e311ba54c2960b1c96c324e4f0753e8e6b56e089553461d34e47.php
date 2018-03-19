<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_3757c4d4cee96d592d90441e31f8cd7c79a6934d1d59ca50bb7a1bba56202d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfe93509331b9d0a2cbd1d780ff6f742e294b57cdbaa8ecc96cd63e78294f1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe93509331b9d0a2cbd1d780ff6f742e294b57cdbaa8ecc96cd63e78294f1a8->enter($__internal_bfe93509331b9d0a2cbd1d780ff6f742e294b57cdbaa8ecc96cd63e78294f1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_c67fb9dcf3b92f21ecba429bbd49464cc9c30872d93a1c2eff31cf59ce09e01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67fb9dcf3b92f21ecba429bbd49464cc9c30872d93a1c2eff31cf59ce09e01b->enter($__internal_c67fb9dcf3b92f21ecba429bbd49464cc9c30872d93a1c2eff31cf59ce09e01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        $this->displayBlock('style', $context, $blocks);
        // line 7
        echo "
<div class=\"container\">
<h1 class=\"text-center\">Page d'Insciption</h1>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "form-control")));
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input  class=\"btn btn-sm btn-warning\" type=\"submit\" value=\"S'inscrir\"/>
    </div>
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_bfe93509331b9d0a2cbd1d780ff6f742e294b57cdbaa8ecc96cd63e78294f1a8->leave($__internal_bfe93509331b9d0a2cbd1d780ff6f742e294b57cdbaa8ecc96cd63e78294f1a8_prof);

        
        $__internal_c67fb9dcf3b92f21ecba429bbd49464cc9c30872d93a1c2eff31cf59ce09e01b->leave($__internal_c67fb9dcf3b92f21ecba429bbd49464cc9c30872d93a1c2eff31cf59ce09e01b_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_34b059fa2ac36ecf92330b085634536d83c90aa08bd543fece131ef39a9863a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b059fa2ac36ecf92330b085634536d83c90aa08bd543fece131ef39a9863a6->enter($__internal_34b059fa2ac36ecf92330b085634536d83c90aa08bd543fece131ef39a9863a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_cf2c13d969346dbbb3f3a4bdea402b7b31854be47cda773fe16aa1bf5ddc419b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2c13d969346dbbb3f3a4bdea402b7b31854be47cda773fe16aa1bf5ddc419b->enter($__internal_cf2c13d969346dbbb3f3a4bdea402b7b31854be47cda773fe16aa1bf5ddc419b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">

";
        
        $__internal_cf2c13d969346dbbb3f3a4bdea402b7b31854be47cda773fe16aa1bf5ddc419b->leave($__internal_cf2c13d969346dbbb3f3a4bdea402b7b31854be47cda773fe16aa1bf5ddc419b_prof);

        
        $__internal_34b059fa2ac36ecf92330b085634536d83c90aa08bd543fece131ef39a9863a6->leave($__internal_34b059fa2ac36ecf92330b085634536d83c90aa08bd543fece131ef39a9863a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 3,  57 => 2,  44 => 15,  37 => 11,  33 => 10,  28 => 7,  26 => 2,);
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
{% block style %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">

{% endblock %}

<div class=\"container\">
<h1 class=\"text-center\">Page d'Insciption</h1>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'form-control'}}) }}
    {{ form_widget(form) }}
    <div>
        <input  class=\"btn btn-sm btn-warning\" type=\"submit\" value=\"S'inscrir\"/>
    </div>
{{ form_end(form) }}
</div>
", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
