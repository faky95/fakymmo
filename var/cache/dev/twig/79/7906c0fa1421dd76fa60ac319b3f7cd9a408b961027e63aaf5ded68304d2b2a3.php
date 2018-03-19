<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_1c58414c9b51294defd76d279418ce5c8b121ef2c9e7e59aa5aa0472edf45621 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c1c9c5b136247f1b39aa5b51f6c986680bd16e7556dd014657ad818ced314c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1c9c5b136247f1b39aa5b51f6c986680bd16e7556dd014657ad818ced314c5->enter($__internal_6c1c9c5b136247f1b39aa5b51f6c986680bd16e7556dd014657ad818ced314c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_90f95d7f8b5fb5cd784251562a71ed21887dddee249a1bea290b52a246a78ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f95d7f8b5fb5cd784251562a71ed21887dddee249a1bea290b52a246a78ddc->enter($__internal_90f95d7f8b5fb5cd784251562a71ed21887dddee249a1bea290b52a246a78ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_7fdaa4112d99a78433f2188e305fff07991c682526bec38bfd0da971f4b3db5f"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_7fdaa4112d99a78433f2188e305fff07991c682526bec38bfd0da971f4b3db5f"] ?? $this->getContext($context, "__internal_7fdaa4112d99a78433f2188e305fff07991c682526bec38bfd0da971f4b3db5f"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_7fdaa4112d99a78433f2188e305fff07991c682526bec38bfd0da971f4b3db5f"] ?? $this->getContext($context, "__internal_7fdaa4112d99a78433f2188e305fff07991c682526bec38bfd0da971f4b3db5f"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c1c9c5b136247f1b39aa5b51f6c986680bd16e7556dd014657ad818ced314c5->leave($__internal_6c1c9c5b136247f1b39aa5b51f6c986680bd16e7556dd014657ad818ced314c5_prof);

        
        $__internal_90f95d7f8b5fb5cd784251562a71ed21887dddee249a1bea290b52a246a78ddc->leave($__internal_90f95d7f8b5fb5cd784251562a71ed21887dddee249a1bea290b52a246a78ddc_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_665e8a961fc4bc80a3ba0b300bda3eaa636b1e4e4e9da564a212250cf8c04883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665e8a961fc4bc80a3ba0b300bda3eaa636b1e4e4e9da564a212250cf8c04883->enter($__internal_665e8a961fc4bc80a3ba0b300bda3eaa636b1e4e4e9da564a212250cf8c04883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_03c47aaf3df99961b85eeb3cbf1575bfd1d6e5764ecec6c46ab95b1fdda8851f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c47aaf3df99961b85eeb3cbf1575bfd1d6e5764ecec6c46ab95b1fdda8851f->enter($__internal_03c47aaf3df99961b85eeb3cbf1575bfd1d6e5764ecec6c46ab95b1fdda8851f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_03c47aaf3df99961b85eeb3cbf1575bfd1d6e5764ecec6c46ab95b1fdda8851f->leave($__internal_03c47aaf3df99961b85eeb3cbf1575bfd1d6e5764ecec6c46ab95b1fdda8851f_prof);

        
        $__internal_665e8a961fc4bc80a3ba0b300bda3eaa636b1e4e4e9da564a212250cf8c04883->leave($__internal_665e8a961fc4bc80a3ba0b300bda3eaa636b1e4e4e9da564a212250cf8c04883_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e6c2fe5330c82325d06961609e1afa897e64282d96e38511f8bed988ec2a2b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c2fe5330c82325d06961609e1afa897e64282d96e38511f8bed988ec2a2b7f->enter($__internal_e6c2fe5330c82325d06961609e1afa897e64282d96e38511f8bed988ec2a2b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_3eee9b70e1a475e587501e66780928a4260436e8e5e1315df83c469aa5669919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eee9b70e1a475e587501e66780928a4260436e8e5e1315df83c469aa5669919->enter($__internal_3eee9b70e1a475e587501e66780928a4260436e8e5e1315df83c469aa5669919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3eee9b70e1a475e587501e66780928a4260436e8e5e1315df83c469aa5669919->leave($__internal_3eee9b70e1a475e587501e66780928a4260436e8e5e1315df83c469aa5669919_prof);

        
        $__internal_e6c2fe5330c82325d06961609e1afa897e64282d96e38511f8bed988ec2a2b7f->leave($__internal_e6c2fe5330c82325d06961609e1afa897e64282d96e38511f8bed988ec2a2b7f_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a96d9762a438692721b5f19effe09792327d6f3d13fba1de6010a1803d766945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96d9762a438692721b5f19effe09792327d6f3d13fba1de6010a1803d766945->enter($__internal_a96d9762a438692721b5f19effe09792327d6f3d13fba1de6010a1803d766945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_c87c9f32d2522f286d3db702a5c97a63b4fc92d74fa9beff840a1bf48876f0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87c9f32d2522f286d3db702a5c97a63b4fc92d74fa9beff840a1bf48876f0e6->enter($__internal_c87c9f32d2522f286d3db702a5c97a63b4fc92d74fa9beff840a1bf48876f0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_7fdaa4112d99a78433f2188e305fff07991c682526bec38bfd0da971f4b3db5f"] ?? $this->getContext($context, "__internal_7fdaa4112d99a78433f2188e305fff07991c682526bec38bfd0da971f4b3db5f")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c87c9f32d2522f286d3db702a5c97a63b4fc92d74fa9beff840a1bf48876f0e6->leave($__internal_c87c9f32d2522f286d3db702a5c97a63b4fc92d74fa9beff840a1bf48876f0e6_prof);

        
        $__internal_a96d9762a438692721b5f19effe09792327d6f3d13fba1de6010a1803d766945->leave($__internal_a96d9762a438692721b5f19effe09792327d6f3d13fba1de6010a1803d766945_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_bc204669e92c7ea1dccf23f1fe1aecaef420b03ed9bd5ae02e17a628e4bdf28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc204669e92c7ea1dccf23f1fe1aecaef420b03ed9bd5ae02e17a628e4bdf28b->enter($__internal_bc204669e92c7ea1dccf23f1fe1aecaef420b03ed9bd5ae02e17a628e4bdf28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_de8936738c6389f30dfff00fc0d17dbd1e0b6df3413952fd5c1f33b0bc0ca94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8936738c6389f30dfff00fc0d17dbd1e0b6df3413952fd5c1f33b0bc0ca94c->enter($__internal_de8936738c6389f30dfff00fc0d17dbd1e0b6df3413952fd5c1f33b0bc0ca94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_de8936738c6389f30dfff00fc0d17dbd1e0b6df3413952fd5c1f33b0bc0ca94c->leave($__internal_de8936738c6389f30dfff00fc0d17dbd1e0b6df3413952fd5c1f33b0bc0ca94c_prof);

        
        $__internal_bc204669e92c7ea1dccf23f1fe1aecaef420b03ed9bd5ae02e17a628e4bdf28b->leave($__internal_bc204669e92c7ea1dccf23f1fe1aecaef420b03ed9bd5ae02e17a628e4bdf28b_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_8836045ce110f5e585d7b83ada4d366eca16e22118aaaa50998e239d57272914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8836045ce110f5e585d7b83ada4d366eca16e22118aaaa50998e239d57272914->enter($__internal_8836045ce110f5e585d7b83ada4d366eca16e22118aaaa50998e239d57272914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_c1b9780558416a4c1fb6ec239af0377e57dac97c94f272bb24fb3e9d39ff2dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b9780558416a4c1fb6ec239af0377e57dac97c94f272bb24fb3e9d39ff2dcf->enter($__internal_c1b9780558416a4c1fb6ec239af0377e57dac97c94f272bb24fb3e9d39ff2dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_c1b9780558416a4c1fb6ec239af0377e57dac97c94f272bb24fb3e9d39ff2dcf->leave($__internal_c1b9780558416a4c1fb6ec239af0377e57dac97c94f272bb24fb3e9d39ff2dcf_prof);

        
        $__internal_8836045ce110f5e585d7b83ada4d366eca16e22118aaaa50998e239d57272914->leave($__internal_8836045ce110f5e585d7b83ada4d366eca16e22118aaaa50998e239d57272914_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_cabc0d2723863e16f640352ba019c24f43e2efa7ad1611ac0ed69bfaae6521fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabc0d2723863e16f640352ba019c24f43e2efa7ad1611ac0ed69bfaae6521fa->enter($__internal_cabc0d2723863e16f640352ba019c24f43e2efa7ad1611ac0ed69bfaae6521fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_6702e0f1d532c78ce2c91065837b1e142fa8e002782bf18356c7cf9025aa8552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6702e0f1d532c78ce2c91065837b1e142fa8e002782bf18356c7cf9025aa8552->enter($__internal_6702e0f1d532c78ce2c91065837b1e142fa8e002782bf18356c7cf9025aa8552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_6702e0f1d532c78ce2c91065837b1e142fa8e002782bf18356c7cf9025aa8552->leave($__internal_6702e0f1d532c78ce2c91065837b1e142fa8e002782bf18356c7cf9025aa8552_prof);

        
        $__internal_cabc0d2723863e16f640352ba019c24f43e2efa7ad1611ac0ed69bfaae6521fa->leave($__internal_cabc0d2723863e16f640352ba019c24f43e2efa7ad1611ac0ed69bfaae6521fa_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0afce23323e756a47e94212cf5304b548f8a057e77b3d6620c38b35546661ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afce23323e756a47e94212cf5304b548f8a057e77b3d6620c38b35546661ff8->enter($__internal_0afce23323e756a47e94212cf5304b548f8a057e77b3d6620c38b35546661ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_2904b80ece68fbaeefb227bb9365ba86b21daac7d644ee0376021765b56a6b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2904b80ece68fbaeefb227bb9365ba86b21daac7d644ee0376021765b56a6b30->enter($__internal_2904b80ece68fbaeefb227bb9365ba86b21daac7d644ee0376021765b56a6b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_2904b80ece68fbaeefb227bb9365ba86b21daac7d644ee0376021765b56a6b30->leave($__internal_2904b80ece68fbaeefb227bb9365ba86b21daac7d644ee0376021765b56a6b30_prof);

        
        $__internal_0afce23323e756a47e94212cf5304b548f8a057e77b3d6620c38b35546661ff8->leave($__internal_0afce23323e756a47e94212cf5304b548f8a057e77b3d6620c38b35546661ff8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
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
", "EasyAdminBundle:default:edit.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
