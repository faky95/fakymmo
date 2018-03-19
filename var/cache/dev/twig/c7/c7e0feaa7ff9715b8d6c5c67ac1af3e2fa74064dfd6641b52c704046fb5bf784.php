<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_db9872e1cd6c54efd401b17c08ba07d4ee55889b9cf48e282e9ae9e089f13f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29486dbcf84b857c7d6cf8adcbee610975d31258d973e297e8d169e4618d14cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29486dbcf84b857c7d6cf8adcbee610975d31258d973e297e8d169e4618d14cc->enter($__internal_29486dbcf84b857c7d6cf8adcbee610975d31258d973e297e8d169e4618d14cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_d02ee8c236c1b2bca9efe88592e1a9a776e0b72a8383ca8d6901fbcf9aba839a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02ee8c236c1b2bca9efe88592e1a9a776e0b72a8383ca8d6901fbcf9aba839a->enter($__internal_d02ee8c236c1b2bca9efe88592e1a9a776e0b72a8383ca8d6901fbcf9aba839a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_a7de3f4fba251368e4ebe55d4e7cc458ff4315d5c291e5a0f33c3dedec89b64b"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_a7de3f4fba251368e4ebe55d4e7cc458ff4315d5c291e5a0f33c3dedec89b64b"] ?? $this->getContext($context, "__internal_a7de3f4fba251368e4ebe55d4e7cc458ff4315d5c291e5a0f33c3dedec89b64b"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_a7de3f4fba251368e4ebe55d4e7cc458ff4315d5c291e5a0f33c3dedec89b64b"] ?? $this->getContext($context, "__internal_a7de3f4fba251368e4ebe55d4e7cc458ff4315d5c291e5a0f33c3dedec89b64b"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29486dbcf84b857c7d6cf8adcbee610975d31258d973e297e8d169e4618d14cc->leave($__internal_29486dbcf84b857c7d6cf8adcbee610975d31258d973e297e8d169e4618d14cc_prof);

        
        $__internal_d02ee8c236c1b2bca9efe88592e1a9a776e0b72a8383ca8d6901fbcf9aba839a->leave($__internal_d02ee8c236c1b2bca9efe88592e1a9a776e0b72a8383ca8d6901fbcf9aba839a_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_50b2598453d3e964cf70d77e7994d3d6d2d1de160ce2b5d29ff7599d5625a5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b2598453d3e964cf70d77e7994d3d6d2d1de160ce2b5d29ff7599d5625a5e5->enter($__internal_50b2598453d3e964cf70d77e7994d3d6d2d1de160ce2b5d29ff7599d5625a5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_97c5ac5710e71e510149ff876071299af7a9d337e0aa6767ac325abd50f71c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c5ac5710e71e510149ff876071299af7a9d337e0aa6767ac325abd50f71c4c->enter($__internal_97c5ac5710e71e510149ff876071299af7a9d337e0aa6767ac325abd50f71c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_97c5ac5710e71e510149ff876071299af7a9d337e0aa6767ac325abd50f71c4c->leave($__internal_97c5ac5710e71e510149ff876071299af7a9d337e0aa6767ac325abd50f71c4c_prof);

        
        $__internal_50b2598453d3e964cf70d77e7994d3d6d2d1de160ce2b5d29ff7599d5625a5e5->leave($__internal_50b2598453d3e964cf70d77e7994d3d6d2d1de160ce2b5d29ff7599d5625a5e5_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_17b1187f8fb7baa7e844fdc0e2d201a96beb3deb627b89ebdbc526b1a54a13b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b1187f8fb7baa7e844fdc0e2d201a96beb3deb627b89ebdbc526b1a54a13b5->enter($__internal_17b1187f8fb7baa7e844fdc0e2d201a96beb3deb627b89ebdbc526b1a54a13b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_e2fdaa52cd89a98f0778121d9eb576e2139a2aa7611020bb74dd23da45c6f5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fdaa52cd89a98f0778121d9eb576e2139a2aa7611020bb74dd23da45c6f5aa->enter($__internal_e2fdaa52cd89a98f0778121d9eb576e2139a2aa7611020bb74dd23da45c6f5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_e2fdaa52cd89a98f0778121d9eb576e2139a2aa7611020bb74dd23da45c6f5aa->leave($__internal_e2fdaa52cd89a98f0778121d9eb576e2139a2aa7611020bb74dd23da45c6f5aa_prof);

        
        $__internal_17b1187f8fb7baa7e844fdc0e2d201a96beb3deb627b89ebdbc526b1a54a13b5->leave($__internal_17b1187f8fb7baa7e844fdc0e2d201a96beb3deb627b89ebdbc526b1a54a13b5_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6c710bad6e7bfe888fecfb00bc31a49cd7286a938cd4ce07ddc353b0e46004bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c710bad6e7bfe888fecfb00bc31a49cd7286a938cd4ce07ddc353b0e46004bb->enter($__internal_6c710bad6e7bfe888fecfb00bc31a49cd7286a938cd4ce07ddc353b0e46004bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_128af387007f3e20e7fd7c410208fbcfc6ac1907dd956814ddb5c855c18a91b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128af387007f3e20e7fd7c410208fbcfc6ac1907dd956814ddb5c855c18a91b5->enter($__internal_128af387007f3e20e7fd7c410208fbcfc6ac1907dd956814ddb5c855c18a91b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_a7de3f4fba251368e4ebe55d4e7cc458ff4315d5c291e5a0f33c3dedec89b64b"] ?? $this->getContext($context, "__internal_a7de3f4fba251368e4ebe55d4e7cc458ff4315d5c291e5a0f33c3dedec89b64b")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_128af387007f3e20e7fd7c410208fbcfc6ac1907dd956814ddb5c855c18a91b5->leave($__internal_128af387007f3e20e7fd7c410208fbcfc6ac1907dd956814ddb5c855c18a91b5_prof);

        
        $__internal_6c710bad6e7bfe888fecfb00bc31a49cd7286a938cd4ce07ddc353b0e46004bb->leave($__internal_6c710bad6e7bfe888fecfb00bc31a49cd7286a938cd4ce07ddc353b0e46004bb_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_3845d98649270655a132e427dc438faa991d2ada9279fa73aeba525e68814c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3845d98649270655a132e427dc438faa991d2ada9279fa73aeba525e68814c07->enter($__internal_3845d98649270655a132e427dc438faa991d2ada9279fa73aeba525e68814c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_df38ccef9154f3994b1f15d560586f8c31148bd024360a7eaf84b60d003f473a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df38ccef9154f3994b1f15d560586f8c31148bd024360a7eaf84b60d003f473a->enter($__internal_df38ccef9154f3994b1f15d560586f8c31148bd024360a7eaf84b60d003f473a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_df38ccef9154f3994b1f15d560586f8c31148bd024360a7eaf84b60d003f473a->leave($__internal_df38ccef9154f3994b1f15d560586f8c31148bd024360a7eaf84b60d003f473a_prof);

        
        $__internal_3845d98649270655a132e427dc438faa991d2ada9279fa73aeba525e68814c07->leave($__internal_3845d98649270655a132e427dc438faa991d2ada9279fa73aeba525e68814c07_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_421856d2997c90e105d5a9ebc4e5c25cd9d289312231520e3f7e9effca2763fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421856d2997c90e105d5a9ebc4e5c25cd9d289312231520e3f7e9effca2763fa->enter($__internal_421856d2997c90e105d5a9ebc4e5c25cd9d289312231520e3f7e9effca2763fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_e83a42d2c24470928013685d349ccc33eecb538a45498ffe5f61eb8f5c050d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83a42d2c24470928013685d349ccc33eecb538a45498ffe5f61eb8f5c050d01->enter($__internal_e83a42d2c24470928013685d349ccc33eecb538a45498ffe5f61eb8f5c050d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_e83a42d2c24470928013685d349ccc33eecb538a45498ffe5f61eb8f5c050d01->leave($__internal_e83a42d2c24470928013685d349ccc33eecb538a45498ffe5f61eb8f5c050d01_prof);

        
        $__internal_421856d2997c90e105d5a9ebc4e5c25cd9d289312231520e3f7e9effca2763fa->leave($__internal_421856d2997c90e105d5a9ebc4e5c25cd9d289312231520e3f7e9effca2763fa_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0d52459024eb3aedc21acad5821ea898c0778084d6f672610b327336eafe6666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d52459024eb3aedc21acad5821ea898c0778084d6f672610b327336eafe6666->enter($__internal_0d52459024eb3aedc21acad5821ea898c0778084d6f672610b327336eafe6666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_144760e2525fe83776acdc156eab5854539ef6b269f8c770629711dc479f80fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144760e2525fe83776acdc156eab5854539ef6b269f8c770629711dc479f80fe->enter($__internal_144760e2525fe83776acdc156eab5854539ef6b269f8c770629711dc479f80fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_144760e2525fe83776acdc156eab5854539ef6b269f8c770629711dc479f80fe->leave($__internal_144760e2525fe83776acdc156eab5854539ef6b269f8c770629711dc479f80fe_prof);

        
        $__internal_0d52459024eb3aedc21acad5821ea898c0778084d6f672610b327336eafe6666->leave($__internal_0d52459024eb3aedc21acad5821ea898c0778084d6f672610b327336eafe6666_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
