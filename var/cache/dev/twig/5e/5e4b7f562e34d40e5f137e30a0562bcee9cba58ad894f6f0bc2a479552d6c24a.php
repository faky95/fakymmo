<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_3634c9d7d3afe6316cce367a5ba831a2c5dc2fc218d4aa6ee6dfacba405eef68 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fd8bd5be21c0cebda5de4cbe832d9a85bf7910962ff5beebed7a6194c0d663b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd8bd5be21c0cebda5de4cbe832d9a85bf7910962ff5beebed7a6194c0d663b->enter($__internal_6fd8bd5be21c0cebda5de4cbe832d9a85bf7910962ff5beebed7a6194c0d663b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        $__internal_d150118b1f6148ca5d0b97ffcb28b89220616412ed2e87d983825ab8dc8fb21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d150118b1f6148ca5d0b97ffcb28b89220616412ed2e87d983825ab8dc8fb21a->enter($__internal_d150118b1f6148ca5d0b97ffcb28b89220616412ed2e87d983825ab8dc8fb21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_78427ea718c240d84920cf6bea9c5460aa154ef2b7d2a115239eda759496683a"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_78427ea718c240d84920cf6bea9c5460aa154ef2b7d2a115239eda759496683a"] ?? $this->getContext($context, "__internal_78427ea718c240d84920cf6bea9c5460aa154ef2b7d2a115239eda759496683a"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_78427ea718c240d84920cf6bea9c5460aa154ef2b7d2a115239eda759496683a"] ?? $this->getContext($context, "__internal_78427ea718c240d84920cf6bea9c5460aa154ef2b7d2a115239eda759496683a"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd8bd5be21c0cebda5de4cbe832d9a85bf7910962ff5beebed7a6194c0d663b->leave($__internal_6fd8bd5be21c0cebda5de4cbe832d9a85bf7910962ff5beebed7a6194c0d663b_prof);

        
        $__internal_d150118b1f6148ca5d0b97ffcb28b89220616412ed2e87d983825ab8dc8fb21a->leave($__internal_d150118b1f6148ca5d0b97ffcb28b89220616412ed2e87d983825ab8dc8fb21a_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0cac4f8f4a2ebbef6f4ea6af5f273edfd2abb34cea079a5d8af98ac8b50f5f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cac4f8f4a2ebbef6f4ea6af5f273edfd2abb34cea079a5d8af98ac8b50f5f38->enter($__internal_0cac4f8f4a2ebbef6f4ea6af5f273edfd2abb34cea079a5d8af98ac8b50f5f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_09c594eb88dbdbfc0eb4fa1ef51789d6814442bf774d9d799b0407a3be95fe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c594eb88dbdbfc0eb4fa1ef51789d6814442bf774d9d799b0407a3be95fe89->enter($__internal_09c594eb88dbdbfc0eb4fa1ef51789d6814442bf774d9d799b0407a3be95fe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_09c594eb88dbdbfc0eb4fa1ef51789d6814442bf774d9d799b0407a3be95fe89->leave($__internal_09c594eb88dbdbfc0eb4fa1ef51789d6814442bf774d9d799b0407a3be95fe89_prof);

        
        $__internal_0cac4f8f4a2ebbef6f4ea6af5f273edfd2abb34cea079a5d8af98ac8b50f5f38->leave($__internal_0cac4f8f4a2ebbef6f4ea6af5f273edfd2abb34cea079a5d8af98ac8b50f5f38_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d39d187ed8cea0ff940370cc62d928c37ce8b524280441b5afd132ccb3ee1558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39d187ed8cea0ff940370cc62d928c37ce8b524280441b5afd132ccb3ee1558->enter($__internal_d39d187ed8cea0ff940370cc62d928c37ce8b524280441b5afd132ccb3ee1558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_fe661b5d78151abde06c58a9b53ff7a4c81b54bce269af25003db43dde4e871f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe661b5d78151abde06c58a9b53ff7a4c81b54bce269af25003db43dde4e871f->enter($__internal_fe661b5d78151abde06c58a9b53ff7a4c81b54bce269af25003db43dde4e871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_fe661b5d78151abde06c58a9b53ff7a4c81b54bce269af25003db43dde4e871f->leave($__internal_fe661b5d78151abde06c58a9b53ff7a4c81b54bce269af25003db43dde4e871f_prof);

        
        $__internal_d39d187ed8cea0ff940370cc62d928c37ce8b524280441b5afd132ccb3ee1558->leave($__internal_d39d187ed8cea0ff940370cc62d928c37ce8b524280441b5afd132ccb3ee1558_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d6497e82dcfc705006eae1ae006b1bd78a2a95397711b94d0f567775b070ebd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6497e82dcfc705006eae1ae006b1bd78a2a95397711b94d0f567775b070ebd7->enter($__internal_d6497e82dcfc705006eae1ae006b1bd78a2a95397711b94d0f567775b070ebd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_53d6754fd894eafab45ba198432c8fadc68aae0425d17607bcb6088780c8b9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d6754fd894eafab45ba198432c8fadc68aae0425d17607bcb6088780c8b9a1->enter($__internal_53d6754fd894eafab45ba198432c8fadc68aae0425d17607bcb6088780c8b9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_78427ea718c240d84920cf6bea9c5460aa154ef2b7d2a115239eda759496683a"] ?? $this->getContext($context, "__internal_78427ea718c240d84920cf6bea9c5460aa154ef2b7d2a115239eda759496683a")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_53d6754fd894eafab45ba198432c8fadc68aae0425d17607bcb6088780c8b9a1->leave($__internal_53d6754fd894eafab45ba198432c8fadc68aae0425d17607bcb6088780c8b9a1_prof);

        
        $__internal_d6497e82dcfc705006eae1ae006b1bd78a2a95397711b94d0f567775b070ebd7->leave($__internal_d6497e82dcfc705006eae1ae006b1bd78a2a95397711b94d0f567775b070ebd7_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_26be4526af34ee979497252db7638919bc7f8c7e951a6c103a1976152df33f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26be4526af34ee979497252db7638919bc7f8c7e951a6c103a1976152df33f97->enter($__internal_26be4526af34ee979497252db7638919bc7f8c7e951a6c103a1976152df33f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f75b2f3e5474387c0a3954c5e59dde5c1868def3f4694ccc8d04c8f836db05cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75b2f3e5474387c0a3954c5e59dde5c1868def3f4694ccc8d04c8f836db05cb->enter($__internal_f75b2f3e5474387c0a3954c5e59dde5c1868def3f4694ccc8d04c8f836db05cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_f75b2f3e5474387c0a3954c5e59dde5c1868def3f4694ccc8d04c8f836db05cb->leave($__internal_f75b2f3e5474387c0a3954c5e59dde5c1868def3f4694ccc8d04c8f836db05cb_prof);

        
        $__internal_26be4526af34ee979497252db7638919bc7f8c7e951a6c103a1976152df33f97->leave($__internal_26be4526af34ee979497252db7638919bc7f8c7e951a6c103a1976152df33f97_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_23e468a06705676534b064ffc275b1ff04be05468bdc02e40c0e7a3535e69001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e468a06705676534b064ffc275b1ff04be05468bdc02e40c0e7a3535e69001->enter($__internal_23e468a06705676534b064ffc275b1ff04be05468bdc02e40c0e7a3535e69001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_7fbd848cbc3c51354dcdc22f26a375a2ea4debfbfe05f1b30d70ec897ee4be48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbd848cbc3c51354dcdc22f26a375a2ea4debfbfe05f1b30d70ec897ee4be48->enter($__internal_7fbd848cbc3c51354dcdc22f26a375a2ea4debfbfe05f1b30d70ec897ee4be48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_7fbd848cbc3c51354dcdc22f26a375a2ea4debfbfe05f1b30d70ec897ee4be48->leave($__internal_7fbd848cbc3c51354dcdc22f26a375a2ea4debfbfe05f1b30d70ec897ee4be48_prof);

        
        $__internal_23e468a06705676534b064ffc275b1ff04be05468bdc02e40c0e7a3535e69001->leave($__internal_23e468a06705676534b064ffc275b1ff04be05468bdc02e40c0e7a3535e69001_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_29b0aae30926b677f9e055d6b7090895b4b210af558030ed5b46459afc3a4ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b0aae30926b677f9e055d6b7090895b4b210af558030ed5b46459afc3a4ba5->enter($__internal_29b0aae30926b677f9e055d6b7090895b4b210af558030ed5b46459afc3a4ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_b7cb63edbdf3c52655d7a9bc2d3a1ac82c94fde76d30b56275fb175ccf36c96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cb63edbdf3c52655d7a9bc2d3a1ac82c94fde76d30b56275fb175ccf36c96d->enter($__internal_b7cb63edbdf3c52655d7a9bc2d3a1ac82c94fde76d30b56275fb175ccf36c96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_b7cb63edbdf3c52655d7a9bc2d3a1ac82c94fde76d30b56275fb175ccf36c96d->leave($__internal_b7cb63edbdf3c52655d7a9bc2d3a1ac82c94fde76d30b56275fb175ccf36c96d_prof);

        
        $__internal_29b0aae30926b677f9e055d6b7090895b4b210af558030ed5b46459afc3a4ba5->leave($__internal_29b0aae30926b677f9e055d6b7090895b4b210af558030ed5b46459afc3a4ba5_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_02ea55fe43576b430043ef9f6745377cb9cf8b4fc7727491e1e02ad8572ec8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ea55fe43576b430043ef9f6745377cb9cf8b4fc7727491e1e02ad8572ec8e3->enter($__internal_02ea55fe43576b430043ef9f6745377cb9cf8b4fc7727491e1e02ad8572ec8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_ec6cae5ed0867b938f26b4f79ebf50f7cf60fe20b370ab18ddae8ab57e4c1b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6cae5ed0867b938f26b4f79ebf50f7cf60fe20b370ab18ddae8ab57e4c1b61->enter($__internal_ec6cae5ed0867b938f26b4f79ebf50f7cf60fe20b370ab18ddae8ab57e4c1b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_ec6cae5ed0867b938f26b4f79ebf50f7cf60fe20b370ab18ddae8ab57e4c1b61->leave($__internal_ec6cae5ed0867b938f26b4f79ebf50f7cf60fe20b370ab18ddae8ab57e4c1b61_prof);

        
        $__internal_02ea55fe43576b430043ef9f6745377cb9cf8b4fc7727491e1e02ad8572ec8e3->leave($__internal_02ea55fe43576b430043ef9f6745377cb9cf8b4fc7727491e1e02ad8572ec8e3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
