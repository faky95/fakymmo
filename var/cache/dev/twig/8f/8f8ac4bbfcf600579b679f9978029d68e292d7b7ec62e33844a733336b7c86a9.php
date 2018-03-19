<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_9692c7d2fa03dc8835482c0e90ffc0385f0b8979e6f23a207c62970042c45a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9efae3ce07fec2c89534d18e3202b47e58fe62db0e2554cc5c6d23b555c6b812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efae3ce07fec2c89534d18e3202b47e58fe62db0e2554cc5c6d23b555c6b812->enter($__internal_9efae3ce07fec2c89534d18e3202b47e58fe62db0e2554cc5c6d23b555c6b812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_02da69934764290f66817d972d6a4d589e36ae2de880259d40d181b03fbc6f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02da69934764290f66817d972d6a4d589e36ae2de880259d40d181b03fbc6f1c->enter($__internal_02da69934764290f66817d972d6a4d589e36ae2de880259d40d181b03fbc6f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_9efae3ce07fec2c89534d18e3202b47e58fe62db0e2554cc5c6d23b555c6b812->leave($__internal_9efae3ce07fec2c89534d18e3202b47e58fe62db0e2554cc5c6d23b555c6b812_prof);

        
        $__internal_02da69934764290f66817d972d6a4d589e36ae2de880259d40d181b03fbc6f1c->leave($__internal_02da69934764290f66817d972d6a4d589e36ae2de880259d40d181b03fbc6f1c_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a6575ec1ff7ef0be930ff26a2dbac6bcd1aac505123620eb9f3cc62a6e33e18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6575ec1ff7ef0be930ff26a2dbac6bcd1aac505123620eb9f3cc62a6e33e18e->enter($__internal_a6575ec1ff7ef0be930ff26a2dbac6bcd1aac505123620eb9f3cc62a6e33e18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_94083ea05328f1efa381192be6f4cf7f54824e43d2f85f204657952c4216ec02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94083ea05328f1efa381192be6f4cf7f54824e43d2f85f204657952c4216ec02->enter($__internal_94083ea05328f1efa381192be6f4cf7f54824e43d2f85f204657952c4216ec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_94083ea05328f1efa381192be6f4cf7f54824e43d2f85f204657952c4216ec02->leave($__internal_94083ea05328f1efa381192be6f4cf7f54824e43d2f85f204657952c4216ec02_prof);

        
        $__internal_a6575ec1ff7ef0be930ff26a2dbac6bcd1aac505123620eb9f3cc62a6e33e18e->leave($__internal_a6575ec1ff7ef0be930ff26a2dbac6bcd1aac505123620eb9f3cc62a6e33e18e_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_eecc8630dc1d72688ba905e7de70240f395b6ecbb3dab0a9378382b6cdad9dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecc8630dc1d72688ba905e7de70240f395b6ecbb3dab0a9378382b6cdad9dbb->enter($__internal_eecc8630dc1d72688ba905e7de70240f395b6ecbb3dab0a9378382b6cdad9dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_470c5a572b573a511000de17866f21169b179d8a26609c8816a3829db870c975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470c5a572b573a511000de17866f21169b179d8a26609c8816a3829db870c975->enter($__internal_470c5a572b573a511000de17866f21169b179d8a26609c8816a3829db870c975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_470c5a572b573a511000de17866f21169b179d8a26609c8816a3829db870c975->leave($__internal_470c5a572b573a511000de17866f21169b179d8a26609c8816a3829db870c975_prof);

        
        $__internal_eecc8630dc1d72688ba905e7de70240f395b6ecbb3dab0a9378382b6cdad9dbb->leave($__internal_eecc8630dc1d72688ba905e7de70240f395b6ecbb3dab0a9378382b6cdad9dbb_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_50ea196fdb44fcae621fbc8993f210aaccf190f131d6d8f7de8c38375e962813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ea196fdb44fcae621fbc8993f210aaccf190f131d6d8f7de8c38375e962813->enter($__internal_50ea196fdb44fcae621fbc8993f210aaccf190f131d6d8f7de8c38375e962813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_9ef8095b561202ea117d9b4ba6ad27bf86206bbc11d2f872a0eb53f3dc4c9653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef8095b561202ea117d9b4ba6ad27bf86206bbc11d2f872a0eb53f3dc4c9653->enter($__internal_9ef8095b561202ea117d9b4ba6ad27bf86206bbc11d2f872a0eb53f3dc4c9653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_9ef8095b561202ea117d9b4ba6ad27bf86206bbc11d2f872a0eb53f3dc4c9653->leave($__internal_9ef8095b561202ea117d9b4ba6ad27bf86206bbc11d2f872a0eb53f3dc4c9653_prof);

        
        $__internal_50ea196fdb44fcae621fbc8993f210aaccf190f131d6d8f7de8c38375e962813->leave($__internal_50ea196fdb44fcae621fbc8993f210aaccf190f131d6d8f7de8c38375e962813_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_5bd350a713b765c3c36851e02215b6af5374ad002e2b09633d145b308e2a3487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd350a713b765c3c36851e02215b6af5374ad002e2b09633d145b308e2a3487->enter($__internal_5bd350a713b765c3c36851e02215b6af5374ad002e2b09633d145b308e2a3487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_fc4afa17071e862d4e8de0800da168ba07d6bc086989d2eeaa53714244b118e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4afa17071e862d4e8de0800da168ba07d6bc086989d2eeaa53714244b118e2->enter($__internal_fc4afa17071e862d4e8de0800da168ba07d6bc086989d2eeaa53714244b118e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fc4afa17071e862d4e8de0800da168ba07d6bc086989d2eeaa53714244b118e2->leave($__internal_fc4afa17071e862d4e8de0800da168ba07d6bc086989d2eeaa53714244b118e2_prof);

        
        $__internal_5bd350a713b765c3c36851e02215b6af5374ad002e2b09633d145b308e2a3487->leave($__internal_5bd350a713b765c3c36851e02215b6af5374ad002e2b09633d145b308e2a3487_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_0188ab64195fca0003701a78acc3cf4adf73a86e23734e303d066c2d0fd2f9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0188ab64195fca0003701a78acc3cf4adf73a86e23734e303d066c2d0fd2f9d3->enter($__internal_0188ab64195fca0003701a78acc3cf4adf73a86e23734e303d066c2d0fd2f9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_83730eecd83602595dcd9a265cb668645ff6adf4c4f08d040e0168daa6f2699c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83730eecd83602595dcd9a265cb668645ff6adf4c4f08d040e0168daa6f2699c->enter($__internal_83730eecd83602595dcd9a265cb668645ff6adf4c4f08d040e0168daa6f2699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_83730eecd83602595dcd9a265cb668645ff6adf4c4f08d040e0168daa6f2699c->leave($__internal_83730eecd83602595dcd9a265cb668645ff6adf4c4f08d040e0168daa6f2699c_prof);

        
        $__internal_0188ab64195fca0003701a78acc3cf4adf73a86e23734e303d066c2d0fd2f9d3->leave($__internal_0188ab64195fca0003701a78acc3cf4adf73a86e23734e303d066c2d0fd2f9d3_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_3df85354c25729e135ab183af184dbc395e75741a8354924cbc5fa79fc1b6b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df85354c25729e135ab183af184dbc395e75741a8354924cbc5fa79fc1b6b31->enter($__internal_3df85354c25729e135ab183af184dbc395e75741a8354924cbc5fa79fc1b6b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52b60e0b51ec3c7825fe1ac0daf1d27ffd940117f63b2ee2bb10af2285b32ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b60e0b51ec3c7825fe1ac0daf1d27ffd940117f63b2ee2bb10af2285b32ea3->enter($__internal_52b60e0b51ec3c7825fe1ac0daf1d27ffd940117f63b2ee2bb10af2285b32ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_52b60e0b51ec3c7825fe1ac0daf1d27ffd940117f63b2ee2bb10af2285b32ea3->leave($__internal_52b60e0b51ec3c7825fe1ac0daf1d27ffd940117f63b2ee2bb10af2285b32ea3_prof);

        
        $__internal_3df85354c25729e135ab183af184dbc395e75741a8354924cbc5fa79fc1b6b31->leave($__internal_3df85354c25729e135ab183af184dbc395e75741a8354924cbc5fa79fc1b6b31_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f4c8253eaa57badb268b9ead3ac876b31e6bae84af37202913044793f332620c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c8253eaa57badb268b9ead3ac876b31e6bae84af37202913044793f332620c->enter($__internal_f4c8253eaa57badb268b9ead3ac876b31e6bae84af37202913044793f332620c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_9e60fa6e8d45def7608c395db60f95c3dd159faf76151c8f7513dd6d0ee564d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e60fa6e8d45def7608c395db60f95c3dd159faf76151c8f7513dd6d0ee564d5->enter($__internal_9e60fa6e8d45def7608c395db60f95c3dd159faf76151c8f7513dd6d0ee564d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_9e60fa6e8d45def7608c395db60f95c3dd159faf76151c8f7513dd6d0ee564d5->leave($__internal_9e60fa6e8d45def7608c395db60f95c3dd159faf76151c8f7513dd6d0ee564d5_prof);

        
        $__internal_f4c8253eaa57badb268b9ead3ac876b31e6bae84af37202913044793f332620c->leave($__internal_f4c8253eaa57badb268b9ead3ac876b31e6bae84af37202913044793f332620c_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_206dc40f3af974d40882497f1effba5795fb3fa3e624de1c7f372bf5abc95003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206dc40f3af974d40882497f1effba5795fb3fa3e624de1c7f372bf5abc95003->enter($__internal_206dc40f3af974d40882497f1effba5795fb3fa3e624de1c7f372bf5abc95003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2f6bed95d0d74f253e516cfb003c69c145132ba85a1e5065f5591f6b4dab25a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6bed95d0d74f253e516cfb003c69c145132ba85a1e5065f5591f6b4dab25a7->enter($__internal_2f6bed95d0d74f253e516cfb003c69c145132ba85a1e5065f5591f6b4dab25a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_2f6bed95d0d74f253e516cfb003c69c145132ba85a1e5065f5591f6b4dab25a7->leave($__internal_2f6bed95d0d74f253e516cfb003c69c145132ba85a1e5065f5591f6b4dab25a7_prof);

        
        $__internal_206dc40f3af974d40882497f1effba5795fb3fa3e624de1c7f372bf5abc95003->leave($__internal_206dc40f3af974d40882497f1effba5795fb3fa3e624de1c7f372bf5abc95003_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_7f51799f15ce78ce181aea0759bb628926fa4ad36d84ff9b1c747ea65a053aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f51799f15ce78ce181aea0759bb628926fa4ad36d84ff9b1c747ea65a053aaf->enter($__internal_7f51799f15ce78ce181aea0759bb628926fa4ad36d84ff9b1c747ea65a053aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_778c36a473553ac476a73225869e4d896c4ea7391171cfd64be8701a3a702fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778c36a473553ac476a73225869e4d896c4ea7391171cfd64be8701a3a702fff->enter($__internal_778c36a473553ac476a73225869e4d896c4ea7391171cfd64be8701a3a702fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_778c36a473553ac476a73225869e4d896c4ea7391171cfd64be8701a3a702fff->leave($__internal_778c36a473553ac476a73225869e4d896c4ea7391171cfd64be8701a3a702fff_prof);

        
        $__internal_7f51799f15ce78ce181aea0759bb628926fa4ad36d84ff9b1c747ea65a053aaf->leave($__internal_7f51799f15ce78ce181aea0759bb628926fa4ad36d84ff9b1c747ea65a053aaf_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_286b21f19d3051e50dd308d08dfb7f2ed46f8a1aa97dfe7a1fa5ad5ee6c92998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286b21f19d3051e50dd308d08dfb7f2ed46f8a1aa97dfe7a1fa5ad5ee6c92998->enter($__internal_286b21f19d3051e50dd308d08dfb7f2ed46f8a1aa97dfe7a1fa5ad5ee6c92998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_832f3d6679a97a98067e2b6a8213bfb14ce0cd1bd6a9e0050d928751b5b8c237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832f3d6679a97a98067e2b6a8213bfb14ce0cd1bd6a9e0050d928751b5b8c237->enter($__internal_832f3d6679a97a98067e2b6a8213bfb14ce0cd1bd6a9e0050d928751b5b8c237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_832f3d6679a97a98067e2b6a8213bfb14ce0cd1bd6a9e0050d928751b5b8c237->leave($__internal_832f3d6679a97a98067e2b6a8213bfb14ce0cd1bd6a9e0050d928751b5b8c237_prof);

        
        $__internal_286b21f19d3051e50dd308d08dfb7f2ed46f8a1aa97dfe7a1fa5ad5ee6c92998->leave($__internal_286b21f19d3051e50dd308d08dfb7f2ed46f8a1aa97dfe7a1fa5ad5ee6c92998_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_4c95b379b5bd11903945ff9c268c04c3c5a5e03fbb27c3fe5a818d539ef4a1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c95b379b5bd11903945ff9c268c04c3c5a5e03fbb27c3fe5a818d539ef4a1c2->enter($__internal_4c95b379b5bd11903945ff9c268c04c3c5a5e03fbb27c3fe5a818d539ef4a1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_fc24b9e7579dfd4d47fe4b00e9471d3c1cccb1bfe57034ce85a8248dbe8db214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc24b9e7579dfd4d47fe4b00e9471d3c1cccb1bfe57034ce85a8248dbe8db214->enter($__internal_fc24b9e7579dfd4d47fe4b00e9471d3c1cccb1bfe57034ce85a8248dbe8db214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_fc24b9e7579dfd4d47fe4b00e9471d3c1cccb1bfe57034ce85a8248dbe8db214->leave($__internal_fc24b9e7579dfd4d47fe4b00e9471d3c1cccb1bfe57034ce85a8248dbe8db214_prof);

        
        $__internal_4c95b379b5bd11903945ff9c268c04c3c5a5e03fbb27c3fe5a818d539ef4a1c2->leave($__internal_4c95b379b5bd11903945ff9c268c04c3c5a5e03fbb27c3fe5a818d539ef4a1c2_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_4b0c1afef9c6b56189fae31a90cd34fdae21128258a65dab73609db412b92a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0c1afef9c6b56189fae31a90cd34fdae21128258a65dab73609db412b92a5a->enter($__internal_4b0c1afef9c6b56189fae31a90cd34fdae21128258a65dab73609db412b92a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_eb8fbe3fc76e5267d23eae6f09f139dc62ef7afbbf9e60f1e2c96ff758d34240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8fbe3fc76e5267d23eae6f09f139dc62ef7afbbf9e60f1e2c96ff758d34240->enter($__internal_eb8fbe3fc76e5267d23eae6f09f139dc62ef7afbbf9e60f1e2c96ff758d34240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_eb8fbe3fc76e5267d23eae6f09f139dc62ef7afbbf9e60f1e2c96ff758d34240->leave($__internal_eb8fbe3fc76e5267d23eae6f09f139dc62ef7afbbf9e60f1e2c96ff758d34240_prof);

        
        $__internal_4b0c1afef9c6b56189fae31a90cd34fdae21128258a65dab73609db412b92a5a->leave($__internal_4b0c1afef9c6b56189fae31a90cd34fdae21128258a65dab73609db412b92a5a_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_cb21836956f4f5b97033223d38fcb07fc6c1842e17c56ace96933fefb2cfa24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb21836956f4f5b97033223d38fcb07fc6c1842e17c56ace96933fefb2cfa24e->enter($__internal_cb21836956f4f5b97033223d38fcb07fc6c1842e17c56ace96933fefb2cfa24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_ea669b8e62d743af519b128d4ac62be64dc5de1cc1852edc92c71f2b7fdd5f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea669b8e62d743af519b128d4ac62be64dc5de1cc1852edc92c71f2b7fdd5f15->enter($__internal_ea669b8e62d743af519b128d4ac62be64dc5de1cc1852edc92c71f2b7fdd5f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_ea669b8e62d743af519b128d4ac62be64dc5de1cc1852edc92c71f2b7fdd5f15->leave($__internal_ea669b8e62d743af519b128d4ac62be64dc5de1cc1852edc92c71f2b7fdd5f15_prof);

        
        $__internal_cb21836956f4f5b97033223d38fcb07fc6c1842e17c56ace96933fefb2cfa24e->leave($__internal_cb21836956f4f5b97033223d38fcb07fc6c1842e17c56ace96933fefb2cfa24e_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_c427d4a1bb2821f53e3ef06c87b35ecf6c988ccdab540a5804837a57351488e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c427d4a1bb2821f53e3ef06c87b35ecf6c988ccdab540a5804837a57351488e2->enter($__internal_c427d4a1bb2821f53e3ef06c87b35ecf6c988ccdab540a5804837a57351488e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_8537f1abf1450bdf275d9b5dda23fbe32591d357a8940d6e7dca58b478866eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8537f1abf1450bdf275d9b5dda23fbe32591d357a8940d6e7dca58b478866eab->enter($__internal_8537f1abf1450bdf275d9b5dda23fbe32591d357a8940d6e7dca58b478866eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_8537f1abf1450bdf275d9b5dda23fbe32591d357a8940d6e7dca58b478866eab->leave($__internal_8537f1abf1450bdf275d9b5dda23fbe32591d357a8940d6e7dca58b478866eab_prof);

        
        $__internal_c427d4a1bb2821f53e3ef06c87b35ecf6c988ccdab540a5804837a57351488e2->leave($__internal_c427d4a1bb2821f53e3ef06c87b35ecf6c988ccdab540a5804837a57351488e2_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e3e02508dfe756446a2145bf5d79131b28276385abe62ba34502cf9793548b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e02508dfe756446a2145bf5d79131b28276385abe62ba34502cf9793548b1d->enter($__internal_e3e02508dfe756446a2145bf5d79131b28276385abe62ba34502cf9793548b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_f3849fa92520322a136f88c0d69265b54931a4ee79db045f62b3a7fe1e5c9122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3849fa92520322a136f88c0d69265b54931a4ee79db045f62b3a7fe1e5c9122->enter($__internal_f3849fa92520322a136f88c0d69265b54931a4ee79db045f62b3a7fe1e5c9122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_f3849fa92520322a136f88c0d69265b54931a4ee79db045f62b3a7fe1e5c9122->leave($__internal_f3849fa92520322a136f88c0d69265b54931a4ee79db045f62b3a7fe1e5c9122_prof);

        
        $__internal_e3e02508dfe756446a2145bf5d79131b28276385abe62ba34502cf9793548b1d->leave($__internal_e3e02508dfe756446a2145bf5d79131b28276385abe62ba34502cf9793548b1d_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_1db2c97cb2bb3a6aa5b492dc11711629b3d87213f37decb72bb9b28c9ea960c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db2c97cb2bb3a6aa5b492dc11711629b3d87213f37decb72bb9b28c9ea960c4->enter($__internal_1db2c97cb2bb3a6aa5b492dc11711629b3d87213f37decb72bb9b28c9ea960c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_f18f13e5c8ab6c3a70d6d0943942c3de20ccf1166151d254b4ab6efd2c8e2f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18f13e5c8ab6c3a70d6d0943942c3de20ccf1166151d254b4ab6efd2c8e2f2f->enter($__internal_f18f13e5c8ab6c3a70d6d0943942c3de20ccf1166151d254b4ab6efd2c8e2f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_f18f13e5c8ab6c3a70d6d0943942c3de20ccf1166151d254b4ab6efd2c8e2f2f->leave($__internal_f18f13e5c8ab6c3a70d6d0943942c3de20ccf1166151d254b4ab6efd2c8e2f2f_prof);

        
        $__internal_1db2c97cb2bb3a6aa5b492dc11711629b3d87213f37decb72bb9b28c9ea960c4->leave($__internal_1db2c97cb2bb3a6aa5b492dc11711629b3d87213f37decb72bb9b28c9ea960c4_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_74907bce5860e34db946dd4b5cbe198d269cc0ec927355e59cb9ad23df21b4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74907bce5860e34db946dd4b5cbe198d269cc0ec927355e59cb9ad23df21b4dd->enter($__internal_74907bce5860e34db946dd4b5cbe198d269cc0ec927355e59cb9ad23df21b4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_294dfee45284da457556517bed17dc627fa1e1bafef82d69dd6db8ef47ff2931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294dfee45284da457556517bed17dc627fa1e1bafef82d69dd6db8ef47ff2931->enter($__internal_294dfee45284da457556517bed17dc627fa1e1bafef82d69dd6db8ef47ff2931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_294dfee45284da457556517bed17dc627fa1e1bafef82d69dd6db8ef47ff2931->leave($__internal_294dfee45284da457556517bed17dc627fa1e1bafef82d69dd6db8ef47ff2931_prof);

        
        $__internal_74907bce5860e34db946dd4b5cbe198d269cc0ec927355e59cb9ad23df21b4dd->leave($__internal_74907bce5860e34db946dd4b5cbe198d269cc0ec927355e59cb9ad23df21b4dd_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_fbef26e7e05d01d55798222959e507b8245f6f499b217a40671142336009fe1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbef26e7e05d01d55798222959e507b8245f6f499b217a40671142336009fe1e->enter($__internal_fbef26e7e05d01d55798222959e507b8245f6f499b217a40671142336009fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_1c0c93545747bb8668264f5494f1633b159007e07ffd06267815889c9217f671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0c93545747bb8668264f5494f1633b159007e07ffd06267815889c9217f671->enter($__internal_1c0c93545747bb8668264f5494f1633b159007e07ffd06267815889c9217f671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_1c0c93545747bb8668264f5494f1633b159007e07ffd06267815889c9217f671->leave($__internal_1c0c93545747bb8668264f5494f1633b159007e07ffd06267815889c9217f671_prof);

        
        $__internal_fbef26e7e05d01d55798222959e507b8245f6f499b217a40671142336009fe1e->leave($__internal_fbef26e7e05d01d55798222959e507b8245f6f499b217a40671142336009fe1e_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1bfdbaed6202a4221f74706ba8d288b4db7ca106ec1c36fcef8a1a10782d24ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfdbaed6202a4221f74706ba8d288b4db7ca106ec1c36fcef8a1a10782d24ff->enter($__internal_1bfdbaed6202a4221f74706ba8d288b4db7ca106ec1c36fcef8a1a10782d24ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_11d78a95ce0f425a57f54a4e83e80d5a85099d60c2422502b0dd8b1d604e3a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d78a95ce0f425a57f54a4e83e80d5a85099d60c2422502b0dd8b1d604e3a89->enter($__internal_11d78a95ce0f425a57f54a4e83e80d5a85099d60c2422502b0dd8b1d604e3a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_11d78a95ce0f425a57f54a4e83e80d5a85099d60c2422502b0dd8b1d604e3a89->leave($__internal_11d78a95ce0f425a57f54a4e83e80d5a85099d60c2422502b0dd8b1d604e3a89_prof);

        
        $__internal_1bfdbaed6202a4221f74706ba8d288b4db7ca106ec1c36fcef8a1a10782d24ff->leave($__internal_1bfdbaed6202a4221f74706ba8d288b4db7ca106ec1c36fcef8a1a10782d24ff_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_10c51eb4c31d6cd29011585cd7335b64bc919db71973f0b5f56ae1316d134652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c51eb4c31d6cd29011585cd7335b64bc919db71973f0b5f56ae1316d134652->enter($__internal_10c51eb4c31d6cd29011585cd7335b64bc919db71973f0b5f56ae1316d134652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_570c924e2a88a741ddcdaf93e94cfb6ed77fd3811207983e66ec7d5b1ef5be28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570c924e2a88a741ddcdaf93e94cfb6ed77fd3811207983e66ec7d5b1ef5be28->enter($__internal_570c924e2a88a741ddcdaf93e94cfb6ed77fd3811207983e66ec7d5b1ef5be28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_570c924e2a88a741ddcdaf93e94cfb6ed77fd3811207983e66ec7d5b1ef5be28->leave($__internal_570c924e2a88a741ddcdaf93e94cfb6ed77fd3811207983e66ec7d5b1ef5be28_prof);

        
        $__internal_10c51eb4c31d6cd29011585cd7335b64bc919db71973f0b5f56ae1316d134652->leave($__internal_10c51eb4c31d6cd29011585cd7335b64bc919db71973f0b5f56ae1316d134652_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_1daffbf253330fa508adfbae5a5f007cf4376ce6b1c7c1438a894db696463fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1daffbf253330fa508adfbae5a5f007cf4376ce6b1c7c1438a894db696463fd0->enter($__internal_1daffbf253330fa508adfbae5a5f007cf4376ce6b1c7c1438a894db696463fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_e627236b7e5f88a305010b07ffc9838983d65b4cc562c7be680f74ca8fa9d49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e627236b7e5f88a305010b07ffc9838983d65b4cc562c7be680f74ca8fa9d49f->enter($__internal_e627236b7e5f88a305010b07ffc9838983d65b4cc562c7be680f74ca8fa9d49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_e627236b7e5f88a305010b07ffc9838983d65b4cc562c7be680f74ca8fa9d49f->leave($__internal_e627236b7e5f88a305010b07ffc9838983d65b4cc562c7be680f74ca8fa9d49f_prof);

        
        $__internal_1daffbf253330fa508adfbae5a5f007cf4376ce6b1c7c1438a894db696463fd0->leave($__internal_1daffbf253330fa508adfbae5a5f007cf4376ce6b1c7c1438a894db696463fd0_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_b503681fe5a7b014d3ca41bca2a5a86fe43ab741f346c606ebbceaa8ca1bd0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b503681fe5a7b014d3ca41bca2a5a86fe43ab741f346c606ebbceaa8ca1bd0b4->enter($__internal_b503681fe5a7b014d3ca41bca2a5a86fe43ab741f346c606ebbceaa8ca1bd0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_908c1c625f12862ea4e0f975f6b50637a829121b5b956cca9c533ed2d4258776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908c1c625f12862ea4e0f975f6b50637a829121b5b956cca9c533ed2d4258776->enter($__internal_908c1c625f12862ea4e0f975f6b50637a829121b5b956cca9c533ed2d4258776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_908c1c625f12862ea4e0f975f6b50637a829121b5b956cca9c533ed2d4258776->leave($__internal_908c1c625f12862ea4e0f975f6b50637a829121b5b956cca9c533ed2d4258776_prof);

        
        $__internal_b503681fe5a7b014d3ca41bca2a5a86fe43ab741f346c606ebbceaa8ca1bd0b4->leave($__internal_b503681fe5a7b014d3ca41bca2a5a86fe43ab741f346c606ebbceaa8ca1bd0b4_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ecdf1deac57e06fe0bae9a3150c74d7542f264f504d9f124a9c4fd3a308537d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecdf1deac57e06fe0bae9a3150c74d7542f264f504d9f124a9c4fd3a308537d3->enter($__internal_ecdf1deac57e06fe0bae9a3150c74d7542f264f504d9f124a9c4fd3a308537d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_e2da31a748faf377e815183378fac6876385002d25b24b8896b98ff7c2b8ff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2da31a748faf377e815183378fac6876385002d25b24b8896b98ff7c2b8ff66->enter($__internal_e2da31a748faf377e815183378fac6876385002d25b24b8896b98ff7c2b8ff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_e2da31a748faf377e815183378fac6876385002d25b24b8896b98ff7c2b8ff66->leave($__internal_e2da31a748faf377e815183378fac6876385002d25b24b8896b98ff7c2b8ff66_prof);

        
        $__internal_ecdf1deac57e06fe0bae9a3150c74d7542f264f504d9f124a9c4fd3a308537d3->leave($__internal_ecdf1deac57e06fe0bae9a3150c74d7542f264f504d9f124a9c4fd3a308537d3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
