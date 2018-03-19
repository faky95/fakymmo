<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_2b540d8e451d9f0b2acbebc06ae47fca5ee8f09091bcfbcfb72b4d473db3a5af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_051ebd1ecfd5fdc1f383bc68f0b3c0e3d2a58e0d564386e1d51f858fe43ac672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051ebd1ecfd5fdc1f383bc68f0b3c0e3d2a58e0d564386e1d51f858fe43ac672->enter($__internal_051ebd1ecfd5fdc1f383bc68f0b3c0e3d2a58e0d564386e1d51f858fe43ac672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_84808d3d5780140d84ad144a232e3d4b148da62fab9ee4058b1dd7b855e63776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84808d3d5780140d84ad144a232e3d4b148da62fab9ee4058b1dd7b855e63776->enter($__internal_84808d3d5780140d84ad144a232e3d4b148da62fab9ee4058b1dd7b855e63776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_051ebd1ecfd5fdc1f383bc68f0b3c0e3d2a58e0d564386e1d51f858fe43ac672->leave($__internal_051ebd1ecfd5fdc1f383bc68f0b3c0e3d2a58e0d564386e1d51f858fe43ac672_prof);

        
        $__internal_84808d3d5780140d84ad144a232e3d4b148da62fab9ee4058b1dd7b855e63776->leave($__internal_84808d3d5780140d84ad144a232e3d4b148da62fab9ee4058b1dd7b855e63776_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9c0cf1ee07015a81eabeb11cc08b94577330f203f9db3383391b7a4603d02a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c0cf1ee07015a81eabeb11cc08b94577330f203f9db3383391b7a4603d02a55->enter($__internal_9c0cf1ee07015a81eabeb11cc08b94577330f203f9db3383391b7a4603d02a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_322e06e7befb0be2af8515b9b076261692dedaabb05259f4b23d14cefcfe45e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322e06e7befb0be2af8515b9b076261692dedaabb05259f4b23d14cefcfe45e2->enter($__internal_322e06e7befb0be2af8515b9b076261692dedaabb05259f4b23d14cefcfe45e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_322e06e7befb0be2af8515b9b076261692dedaabb05259f4b23d14cefcfe45e2->leave($__internal_322e06e7befb0be2af8515b9b076261692dedaabb05259f4b23d14cefcfe45e2_prof);

        
        $__internal_9c0cf1ee07015a81eabeb11cc08b94577330f203f9db3383391b7a4603d02a55->leave($__internal_9c0cf1ee07015a81eabeb11cc08b94577330f203f9db3383391b7a4603d02a55_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7450c51316668716fbcacd3b28fe42e7643802c1975fed6312d00a311649ba60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7450c51316668716fbcacd3b28fe42e7643802c1975fed6312d00a311649ba60->enter($__internal_7450c51316668716fbcacd3b28fe42e7643802c1975fed6312d00a311649ba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a17b29cff7894cb64f3470d9a571fd8bae393331e18946e0a4bf2a48f46dbf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17b29cff7894cb64f3470d9a571fd8bae393331e18946e0a4bf2a48f46dbf64->enter($__internal_a17b29cff7894cb64f3470d9a571fd8bae393331e18946e0a4bf2a48f46dbf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a17b29cff7894cb64f3470d9a571fd8bae393331e18946e0a4bf2a48f46dbf64->leave($__internal_a17b29cff7894cb64f3470d9a571fd8bae393331e18946e0a4bf2a48f46dbf64_prof);

        
        $__internal_7450c51316668716fbcacd3b28fe42e7643802c1975fed6312d00a311649ba60->leave($__internal_7450c51316668716fbcacd3b28fe42e7643802c1975fed6312d00a311649ba60_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ede10d04fed3c10b734cf11a480dce137d2e8e985df233b3e12699d14551e9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede10d04fed3c10b734cf11a480dce137d2e8e985df233b3e12699d14551e9e7->enter($__internal_ede10d04fed3c10b734cf11a480dce137d2e8e985df233b3e12699d14551e9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cb4f927e07fabcbf02a49c4bbf392c469358028ad64b69b26aa4c71cca26120b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4f927e07fabcbf02a49c4bbf392c469358028ad64b69b26aa4c71cca26120b->enter($__internal_cb4f927e07fabcbf02a49c4bbf392c469358028ad64b69b26aa4c71cca26120b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_cb4f927e07fabcbf02a49c4bbf392c469358028ad64b69b26aa4c71cca26120b->leave($__internal_cb4f927e07fabcbf02a49c4bbf392c469358028ad64b69b26aa4c71cca26120b_prof);

        
        $__internal_ede10d04fed3c10b734cf11a480dce137d2e8e985df233b3e12699d14551e9e7->leave($__internal_ede10d04fed3c10b734cf11a480dce137d2e8e985df233b3e12699d14551e9e7_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6cbeeaf0dfe8738187e1b635e5d78feb42ea0217be74959f7f8d8988b568fe42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbeeaf0dfe8738187e1b635e5d78feb42ea0217be74959f7f8d8988b568fe42->enter($__internal_6cbeeaf0dfe8738187e1b635e5d78feb42ea0217be74959f7f8d8988b568fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7113191310f4120311aa61f1edf6d08f51b5673a58a92fa8df8e61d609ac27e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7113191310f4120311aa61f1edf6d08f51b5673a58a92fa8df8e61d609ac27e1->enter($__internal_7113191310f4120311aa61f1edf6d08f51b5673a58a92fa8df8e61d609ac27e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7113191310f4120311aa61f1edf6d08f51b5673a58a92fa8df8e61d609ac27e1->leave($__internal_7113191310f4120311aa61f1edf6d08f51b5673a58a92fa8df8e61d609ac27e1_prof);

        
        $__internal_6cbeeaf0dfe8738187e1b635e5d78feb42ea0217be74959f7f8d8988b568fe42->leave($__internal_6cbeeaf0dfe8738187e1b635e5d78feb42ea0217be74959f7f8d8988b568fe42_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5d7db11f2ef98c38a331651be89b95949e17b66ce7c119aa1d8ae39cc2c908ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7db11f2ef98c38a331651be89b95949e17b66ce7c119aa1d8ae39cc2c908ea->enter($__internal_5d7db11f2ef98c38a331651be89b95949e17b66ce7c119aa1d8ae39cc2c908ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c4e2dbc76dffeb74fd53330d418061cd38f982acffade1fda96a1cb33962be76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e2dbc76dffeb74fd53330d418061cd38f982acffade1fda96a1cb33962be76->enter($__internal_c4e2dbc76dffeb74fd53330d418061cd38f982acffade1fda96a1cb33962be76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c4e2dbc76dffeb74fd53330d418061cd38f982acffade1fda96a1cb33962be76->leave($__internal_c4e2dbc76dffeb74fd53330d418061cd38f982acffade1fda96a1cb33962be76_prof);

        
        $__internal_5d7db11f2ef98c38a331651be89b95949e17b66ce7c119aa1d8ae39cc2c908ea->leave($__internal_5d7db11f2ef98c38a331651be89b95949e17b66ce7c119aa1d8ae39cc2c908ea_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_816f62af1d3badc72d0cf10913e4618cc228aa5287a3b3b06748a0442c5c3eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816f62af1d3badc72d0cf10913e4618cc228aa5287a3b3b06748a0442c5c3eca->enter($__internal_816f62af1d3badc72d0cf10913e4618cc228aa5287a3b3b06748a0442c5c3eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d61848c6f9a7ea79bbc5002407bdd5525e0725756a40338e0b3648b433460ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61848c6f9a7ea79bbc5002407bdd5525e0725756a40338e0b3648b433460ca7->enter($__internal_d61848c6f9a7ea79bbc5002407bdd5525e0725756a40338e0b3648b433460ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d61848c6f9a7ea79bbc5002407bdd5525e0725756a40338e0b3648b433460ca7->leave($__internal_d61848c6f9a7ea79bbc5002407bdd5525e0725756a40338e0b3648b433460ca7_prof);

        
        $__internal_816f62af1d3badc72d0cf10913e4618cc228aa5287a3b3b06748a0442c5c3eca->leave($__internal_816f62af1d3badc72d0cf10913e4618cc228aa5287a3b3b06748a0442c5c3eca_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ce380e5f62d7534a24df50369828f9315d16e4bf0f371bc97e99c7f03023ce11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce380e5f62d7534a24df50369828f9315d16e4bf0f371bc97e99c7f03023ce11->enter($__internal_ce380e5f62d7534a24df50369828f9315d16e4bf0f371bc97e99c7f03023ce11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_fe679b3b88a36125078e5e09065e12c8fa3c4b28b157ab29b352610c4fa42400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe679b3b88a36125078e5e09065e12c8fa3c4b28b157ab29b352610c4fa42400->enter($__internal_fe679b3b88a36125078e5e09065e12c8fa3c4b28b157ab29b352610c4fa42400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fe679b3b88a36125078e5e09065e12c8fa3c4b28b157ab29b352610c4fa42400->leave($__internal_fe679b3b88a36125078e5e09065e12c8fa3c4b28b157ab29b352610c4fa42400_prof);

        
        $__internal_ce380e5f62d7534a24df50369828f9315d16e4bf0f371bc97e99c7f03023ce11->leave($__internal_ce380e5f62d7534a24df50369828f9315d16e4bf0f371bc97e99c7f03023ce11_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_2e65e5dc6d78d8c04c8fb4079046c0a57fb2653b9a27d900d8873ffc03decb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e65e5dc6d78d8c04c8fb4079046c0a57fb2653b9a27d900d8873ffc03decb63->enter($__internal_2e65e5dc6d78d8c04c8fb4079046c0a57fb2653b9a27d900d8873ffc03decb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a4335df813a89076763362e85cffda9cee2a3496cf2199619c9e00e7a7303b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4335df813a89076763362e85cffda9cee2a3496cf2199619c9e00e7a7303b36->enter($__internal_a4335df813a89076763362e85cffda9cee2a3496cf2199619c9e00e7a7303b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a4335df813a89076763362e85cffda9cee2a3496cf2199619c9e00e7a7303b36->leave($__internal_a4335df813a89076763362e85cffda9cee2a3496cf2199619c9e00e7a7303b36_prof);

        
        $__internal_2e65e5dc6d78d8c04c8fb4079046c0a57fb2653b9a27d900d8873ffc03decb63->leave($__internal_2e65e5dc6d78d8c04c8fb4079046c0a57fb2653b9a27d900d8873ffc03decb63_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_7dc23e55379934334149cd1e19e268439ae2e5ef1cd381a44473d35146146791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc23e55379934334149cd1e19e268439ae2e5ef1cd381a44473d35146146791->enter($__internal_7dc23e55379934334149cd1e19e268439ae2e5ef1cd381a44473d35146146791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_af3e5fd629412ca5aa24bee8741739e1e9b6388728aa27cfbbcbe4b1ff3b46f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3e5fd629412ca5aa24bee8741739e1e9b6388728aa27cfbbcbe4b1ff3b46f6->enter($__internal_af3e5fd629412ca5aa24bee8741739e1e9b6388728aa27cfbbcbe4b1ff3b46f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_af3e5fd629412ca5aa24bee8741739e1e9b6388728aa27cfbbcbe4b1ff3b46f6->leave($__internal_af3e5fd629412ca5aa24bee8741739e1e9b6388728aa27cfbbcbe4b1ff3b46f6_prof);

        
        $__internal_7dc23e55379934334149cd1e19e268439ae2e5ef1cd381a44473d35146146791->leave($__internal_7dc23e55379934334149cd1e19e268439ae2e5ef1cd381a44473d35146146791_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_7f80c9ed755fa8a448f15b4b18705f2ecc4a145eabc79d98d3f4b630db949fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f80c9ed755fa8a448f15b4b18705f2ecc4a145eabc79d98d3f4b630db949fe1->enter($__internal_7f80c9ed755fa8a448f15b4b18705f2ecc4a145eabc79d98d3f4b630db949fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_56d148959ca233476736e2260142972926e0e019225da79312e4c23e9964c319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d148959ca233476736e2260142972926e0e019225da79312e4c23e9964c319->enter($__internal_56d148959ca233476736e2260142972926e0e019225da79312e4c23e9964c319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_56d148959ca233476736e2260142972926e0e019225da79312e4c23e9964c319->leave($__internal_56d148959ca233476736e2260142972926e0e019225da79312e4c23e9964c319_prof);

        
        $__internal_7f80c9ed755fa8a448f15b4b18705f2ecc4a145eabc79d98d3f4b630db949fe1->leave($__internal_7f80c9ed755fa8a448f15b4b18705f2ecc4a145eabc79d98d3f4b630db949fe1_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
