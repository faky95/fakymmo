<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_b251b381957ec0d595cbdbc2773b62592810b5eafdd033686e01e909b6905257 extends Twig_Template
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
        $__internal_bcf0c4138f371d307ed74fc2ef5f489f0d4d945a8b5f08eba405481d8b538ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf0c4138f371d307ed74fc2ef5f489f0d4d945a8b5f08eba405481d8b538ea5->enter($__internal_bcf0c4138f371d307ed74fc2ef5f489f0d4d945a8b5f08eba405481d8b538ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_cfea52a763423f3702c6453baaf42399a781bb254504a887e53b91c94efe75c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfea52a763423f3702c6453baaf42399a781bb254504a887e53b91c94efe75c2->enter($__internal_cfea52a763423f3702c6453baaf42399a781bb254504a887e53b91c94efe75c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_bcf0c4138f371d307ed74fc2ef5f489f0d4d945a8b5f08eba405481d8b538ea5->leave($__internal_bcf0c4138f371d307ed74fc2ef5f489f0d4d945a8b5f08eba405481d8b538ea5_prof);

        
        $__internal_cfea52a763423f3702c6453baaf42399a781bb254504a887e53b91c94efe75c2->leave($__internal_cfea52a763423f3702c6453baaf42399a781bb254504a887e53b91c94efe75c2_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a7eb314927e76bfb13f72e32661c7522e70e14b6b9333c147482edc5fd9bd818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7eb314927e76bfb13f72e32661c7522e70e14b6b9333c147482edc5fd9bd818->enter($__internal_a7eb314927e76bfb13f72e32661c7522e70e14b6b9333c147482edc5fd9bd818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_3a63c42834ca9db5e9bc7a34f49e7d7e28627b5d5d2a5fddd04b773156806797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a63c42834ca9db5e9bc7a34f49e7d7e28627b5d5d2a5fddd04b773156806797->enter($__internal_3a63c42834ca9db5e9bc7a34f49e7d7e28627b5d5d2a5fddd04b773156806797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_3a63c42834ca9db5e9bc7a34f49e7d7e28627b5d5d2a5fddd04b773156806797->leave($__internal_3a63c42834ca9db5e9bc7a34f49e7d7e28627b5d5d2a5fddd04b773156806797_prof);

        
        $__internal_a7eb314927e76bfb13f72e32661c7522e70e14b6b9333c147482edc5fd9bd818->leave($__internal_a7eb314927e76bfb13f72e32661c7522e70e14b6b9333c147482edc5fd9bd818_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_d256955306e68705cbba4c0ad96ff211dbff09cd125217ffb44c053cc464116b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d256955306e68705cbba4c0ad96ff211dbff09cd125217ffb44c053cc464116b->enter($__internal_d256955306e68705cbba4c0ad96ff211dbff09cd125217ffb44c053cc464116b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_8f97a8744abbf4365c88b145a242a245a7aaed0f7ed07c8bc829224c28d31de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f97a8744abbf4365c88b145a242a245a7aaed0f7ed07c8bc829224c28d31de3->enter($__internal_8f97a8744abbf4365c88b145a242a245a7aaed0f7ed07c8bc829224c28d31de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_8f97a8744abbf4365c88b145a242a245a7aaed0f7ed07c8bc829224c28d31de3->leave($__internal_8f97a8744abbf4365c88b145a242a245a7aaed0f7ed07c8bc829224c28d31de3_prof);

        
        $__internal_d256955306e68705cbba4c0ad96ff211dbff09cd125217ffb44c053cc464116b->leave($__internal_d256955306e68705cbba4c0ad96ff211dbff09cd125217ffb44c053cc464116b_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_0a309d7547878461e528ec8155f95a36fc640a9376d913e9591a9212ada9e6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a309d7547878461e528ec8155f95a36fc640a9376d913e9591a9212ada9e6a5->enter($__internal_0a309d7547878461e528ec8155f95a36fc640a9376d913e9591a9212ada9e6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_ccb5aaead456bcf78525d3bc4ef07ee8732d0aae3450287cc55e0a0d8ae80027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb5aaead456bcf78525d3bc4ef07ee8732d0aae3450287cc55e0a0d8ae80027->enter($__internal_ccb5aaead456bcf78525d3bc4ef07ee8732d0aae3450287cc55e0a0d8ae80027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_ccb5aaead456bcf78525d3bc4ef07ee8732d0aae3450287cc55e0a0d8ae80027->leave($__internal_ccb5aaead456bcf78525d3bc4ef07ee8732d0aae3450287cc55e0a0d8ae80027_prof);

        
        $__internal_0a309d7547878461e528ec8155f95a36fc640a9376d913e9591a9212ada9e6a5->leave($__internal_0a309d7547878461e528ec8155f95a36fc640a9376d913e9591a9212ada9e6a5_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_dfb367b82a659ada36606739d502d6b741b1f0fff08dfe1c87fe28a2027a3c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb367b82a659ada36606739d502d6b741b1f0fff08dfe1c87fe28a2027a3c56->enter($__internal_dfb367b82a659ada36606739d502d6b741b1f0fff08dfe1c87fe28a2027a3c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_b930d88dc86d92b0e39b7b8c3de12bd893ca3db6937afd8b51dbf0f56b2d5a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b930d88dc86d92b0e39b7b8c3de12bd893ca3db6937afd8b51dbf0f56b2d5a8b->enter($__internal_b930d88dc86d92b0e39b7b8c3de12bd893ca3db6937afd8b51dbf0f56b2d5a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_b930d88dc86d92b0e39b7b8c3de12bd893ca3db6937afd8b51dbf0f56b2d5a8b->leave($__internal_b930d88dc86d92b0e39b7b8c3de12bd893ca3db6937afd8b51dbf0f56b2d5a8b_prof);

        
        $__internal_dfb367b82a659ada36606739d502d6b741b1f0fff08dfe1c87fe28a2027a3c56->leave($__internal_dfb367b82a659ada36606739d502d6b741b1f0fff08dfe1c87fe28a2027a3c56_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_73fdf35d3b9a83d34bf255580433f0dbebb7db46b29fc5ad109865b841687b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fdf35d3b9a83d34bf255580433f0dbebb7db46b29fc5ad109865b841687b9d->enter($__internal_73fdf35d3b9a83d34bf255580433f0dbebb7db46b29fc5ad109865b841687b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_de4247711dee557c64d36dad7a509928b7a340d9cc9c6000097e7743946b4734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4247711dee557c64d36dad7a509928b7a340d9cc9c6000097e7743946b4734->enter($__internal_de4247711dee557c64d36dad7a509928b7a340d9cc9c6000097e7743946b4734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_de4247711dee557c64d36dad7a509928b7a340d9cc9c6000097e7743946b4734->leave($__internal_de4247711dee557c64d36dad7a509928b7a340d9cc9c6000097e7743946b4734_prof);

        
        $__internal_73fdf35d3b9a83d34bf255580433f0dbebb7db46b29fc5ad109865b841687b9d->leave($__internal_73fdf35d3b9a83d34bf255580433f0dbebb7db46b29fc5ad109865b841687b9d_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_f69685bbe6f3d9baea4b331deaab83f42f46a92494e595744ba0d45c26c0af8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69685bbe6f3d9baea4b331deaab83f42f46a92494e595744ba0d45c26c0af8e->enter($__internal_f69685bbe6f3d9baea4b331deaab83f42f46a92494e595744ba0d45c26c0af8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a911b4ec27a84408f7709d31c3e642293c186d6fbafecb94800524fc21b5949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a911b4ec27a84408f7709d31c3e642293c186d6fbafecb94800524fc21b5949->enter($__internal_9a911b4ec27a84408f7709d31c3e642293c186d6fbafecb94800524fc21b5949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a911b4ec27a84408f7709d31c3e642293c186d6fbafecb94800524fc21b5949->leave($__internal_9a911b4ec27a84408f7709d31c3e642293c186d6fbafecb94800524fc21b5949_prof);

        
        $__internal_f69685bbe6f3d9baea4b331deaab83f42f46a92494e595744ba0d45c26c0af8e->leave($__internal_f69685bbe6f3d9baea4b331deaab83f42f46a92494e595744ba0d45c26c0af8e_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d7b34b22ff43c39cec9dcc7228af17a319f3929340d03976210b2970a98237aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b34b22ff43c39cec9dcc7228af17a319f3929340d03976210b2970a98237aa->enter($__internal_d7b34b22ff43c39cec9dcc7228af17a319f3929340d03976210b2970a98237aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_930ef87c19b35281a3712f26b4a317907551cdb81615d7bfbc18213930db19a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930ef87c19b35281a3712f26b4a317907551cdb81615d7bfbc18213930db19a4->enter($__internal_930ef87c19b35281a3712f26b4a317907551cdb81615d7bfbc18213930db19a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_930ef87c19b35281a3712f26b4a317907551cdb81615d7bfbc18213930db19a4->leave($__internal_930ef87c19b35281a3712f26b4a317907551cdb81615d7bfbc18213930db19a4_prof);

        
        $__internal_d7b34b22ff43c39cec9dcc7228af17a319f3929340d03976210b2970a98237aa->leave($__internal_d7b34b22ff43c39cec9dcc7228af17a319f3929340d03976210b2970a98237aa_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_576d4739a4ae560890b1dc278f1176f0bf61302c55cd26cfa8f02078c0b56154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576d4739a4ae560890b1dc278f1176f0bf61302c55cd26cfa8f02078c0b56154->enter($__internal_576d4739a4ae560890b1dc278f1176f0bf61302c55cd26cfa8f02078c0b56154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_db8b418f5f6bc0a635b175701f3a59780ced94630c24e836fb153417a6354ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8b418f5f6bc0a635b175701f3a59780ced94630c24e836fb153417a6354ab0->enter($__internal_db8b418f5f6bc0a635b175701f3a59780ced94630c24e836fb153417a6354ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_db8b418f5f6bc0a635b175701f3a59780ced94630c24e836fb153417a6354ab0->leave($__internal_db8b418f5f6bc0a635b175701f3a59780ced94630c24e836fb153417a6354ab0_prof);

        
        $__internal_576d4739a4ae560890b1dc278f1176f0bf61302c55cd26cfa8f02078c0b56154->leave($__internal_576d4739a4ae560890b1dc278f1176f0bf61302c55cd26cfa8f02078c0b56154_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_873be36f6cc4f4cce00ea500aaf41cada1e85a69d28c74b4096b5f1cdfc7a1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873be36f6cc4f4cce00ea500aaf41cada1e85a69d28c74b4096b5f1cdfc7a1f7->enter($__internal_873be36f6cc4f4cce00ea500aaf41cada1e85a69d28c74b4096b5f1cdfc7a1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_ca2bb251f9c423b414753f98dd20f21397b6afdda4b472481a65a5aae01669be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2bb251f9c423b414753f98dd20f21397b6afdda4b472481a65a5aae01669be->enter($__internal_ca2bb251f9c423b414753f98dd20f21397b6afdda4b472481a65a5aae01669be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_ca2bb251f9c423b414753f98dd20f21397b6afdda4b472481a65a5aae01669be->leave($__internal_ca2bb251f9c423b414753f98dd20f21397b6afdda4b472481a65a5aae01669be_prof);

        
        $__internal_873be36f6cc4f4cce00ea500aaf41cada1e85a69d28c74b4096b5f1cdfc7a1f7->leave($__internal_873be36f6cc4f4cce00ea500aaf41cada1e85a69d28c74b4096b5f1cdfc7a1f7_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_55d2e03405a7446082d3ff3180afe170cde615d16afc9c12f5ac290ef1543514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d2e03405a7446082d3ff3180afe170cde615d16afc9c12f5ac290ef1543514->enter($__internal_55d2e03405a7446082d3ff3180afe170cde615d16afc9c12f5ac290ef1543514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_dd165a648e41220b136e8658e261515f60dcb40ecf1ed32940e580058e26fd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd165a648e41220b136e8658e261515f60dcb40ecf1ed32940e580058e26fd18->enter($__internal_dd165a648e41220b136e8658e261515f60dcb40ecf1ed32940e580058e26fd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_dd165a648e41220b136e8658e261515f60dcb40ecf1ed32940e580058e26fd18->leave($__internal_dd165a648e41220b136e8658e261515f60dcb40ecf1ed32940e580058e26fd18_prof);

        
        $__internal_55d2e03405a7446082d3ff3180afe170cde615d16afc9c12f5ac290ef1543514->leave($__internal_55d2e03405a7446082d3ff3180afe170cde615d16afc9c12f5ac290ef1543514_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_c3509768e90c1ffd5478fb71845f40d8f995760569a39ab34c4e8271785e0c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3509768e90c1ffd5478fb71845f40d8f995760569a39ab34c4e8271785e0c13->enter($__internal_c3509768e90c1ffd5478fb71845f40d8f995760569a39ab34c4e8271785e0c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_3c036951bb3d1a5d679399d6445e810432ee49dbd29192bba8c8ff0a08df3c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c036951bb3d1a5d679399d6445e810432ee49dbd29192bba8c8ff0a08df3c06->enter($__internal_3c036951bb3d1a5d679399d6445e810432ee49dbd29192bba8c8ff0a08df3c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_3c036951bb3d1a5d679399d6445e810432ee49dbd29192bba8c8ff0a08df3c06->leave($__internal_3c036951bb3d1a5d679399d6445e810432ee49dbd29192bba8c8ff0a08df3c06_prof);

        
        $__internal_c3509768e90c1ffd5478fb71845f40d8f995760569a39ab34c4e8271785e0c13->leave($__internal_c3509768e90c1ffd5478fb71845f40d8f995760569a39ab34c4e8271785e0c13_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_a3cffa8a02d80908fc137aa765c5a8767cf030b45d8d27b202546c516b9ef2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cffa8a02d80908fc137aa765c5a8767cf030b45d8d27b202546c516b9ef2f2->enter($__internal_a3cffa8a02d80908fc137aa765c5a8767cf030b45d8d27b202546c516b9ef2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_8a52f024d804e7ef8e7736bebf8083fdade9d58be9e569a7a68bf7d2ed18cf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a52f024d804e7ef8e7736bebf8083fdade9d58be9e569a7a68bf7d2ed18cf4d->enter($__internal_8a52f024d804e7ef8e7736bebf8083fdade9d58be9e569a7a68bf7d2ed18cf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_8a52f024d804e7ef8e7736bebf8083fdade9d58be9e569a7a68bf7d2ed18cf4d->leave($__internal_8a52f024d804e7ef8e7736bebf8083fdade9d58be9e569a7a68bf7d2ed18cf4d_prof);

        
        $__internal_a3cffa8a02d80908fc137aa765c5a8767cf030b45d8d27b202546c516b9ef2f2->leave($__internal_a3cffa8a02d80908fc137aa765c5a8767cf030b45d8d27b202546c516b9ef2f2_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_5af95f0f50d96e0ccc8fe7105c5a3a2b796b3f75551380c743b174d9ffd1c8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af95f0f50d96e0ccc8fe7105c5a3a2b796b3f75551380c743b174d9ffd1c8d1->enter($__internal_5af95f0f50d96e0ccc8fe7105c5a3a2b796b3f75551380c743b174d9ffd1c8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_3509d62ae9381cf96c97f63ac9112ad9fad2bf777f54e3f9d50937452feb4e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3509d62ae9381cf96c97f63ac9112ad9fad2bf777f54e3f9d50937452feb4e31->enter($__internal_3509d62ae9381cf96c97f63ac9112ad9fad2bf777f54e3f9d50937452feb4e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_3509d62ae9381cf96c97f63ac9112ad9fad2bf777f54e3f9d50937452feb4e31->leave($__internal_3509d62ae9381cf96c97f63ac9112ad9fad2bf777f54e3f9d50937452feb4e31_prof);

        
        $__internal_5af95f0f50d96e0ccc8fe7105c5a3a2b796b3f75551380c743b174d9ffd1c8d1->leave($__internal_5af95f0f50d96e0ccc8fe7105c5a3a2b796b3f75551380c743b174d9ffd1c8d1_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_5dfdf29a2a93393d33bee6aab4329350b437ae4e78a01af480f74c7b1cc216d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfdf29a2a93393d33bee6aab4329350b437ae4e78a01af480f74c7b1cc216d9->enter($__internal_5dfdf29a2a93393d33bee6aab4329350b437ae4e78a01af480f74c7b1cc216d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_af10a9680fc6b32e230a40e13d44295dc00c4e61998d7c51657544f642f0bfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af10a9680fc6b32e230a40e13d44295dc00c4e61998d7c51657544f642f0bfca->enter($__internal_af10a9680fc6b32e230a40e13d44295dc00c4e61998d7c51657544f642f0bfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_af10a9680fc6b32e230a40e13d44295dc00c4e61998d7c51657544f642f0bfca->leave($__internal_af10a9680fc6b32e230a40e13d44295dc00c4e61998d7c51657544f642f0bfca_prof);

        
        $__internal_5dfdf29a2a93393d33bee6aab4329350b437ae4e78a01af480f74c7b1cc216d9->leave($__internal_5dfdf29a2a93393d33bee6aab4329350b437ae4e78a01af480f74c7b1cc216d9_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_55bd2519bbdb9ac5fe0fb44e0a9c7cc8e6e971a9d8d4bec396f1c74f29c8e3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bd2519bbdb9ac5fe0fb44e0a9c7cc8e6e971a9d8d4bec396f1c74f29c8e3d0->enter($__internal_55bd2519bbdb9ac5fe0fb44e0a9c7cc8e6e971a9d8d4bec396f1c74f29c8e3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_815f5164a47c055aebf8e9ee5f2c716e71c18220dc50f7be5ac8f29c8951f283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815f5164a47c055aebf8e9ee5f2c716e71c18220dc50f7be5ac8f29c8951f283->enter($__internal_815f5164a47c055aebf8e9ee5f2c716e71c18220dc50f7be5ac8f29c8951f283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_815f5164a47c055aebf8e9ee5f2c716e71c18220dc50f7be5ac8f29c8951f283->leave($__internal_815f5164a47c055aebf8e9ee5f2c716e71c18220dc50f7be5ac8f29c8951f283_prof);

        
        $__internal_55bd2519bbdb9ac5fe0fb44e0a9c7cc8e6e971a9d8d4bec396f1c74f29c8e3d0->leave($__internal_55bd2519bbdb9ac5fe0fb44e0a9c7cc8e6e971a9d8d4bec396f1c74f29c8e3d0_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_9ab01c1ac434a41f147bdb0b9b90aea39557c8fca010c3e64c1e0b4ef8fe8642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab01c1ac434a41f147bdb0b9b90aea39557c8fca010c3e64c1e0b4ef8fe8642->enter($__internal_9ab01c1ac434a41f147bdb0b9b90aea39557c8fca010c3e64c1e0b4ef8fe8642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_0cde410f4a7b24a3bcad6c8b85074c7455a01ddfb3ab80c4a55aada4bb65aa5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cde410f4a7b24a3bcad6c8b85074c7455a01ddfb3ab80c4a55aada4bb65aa5a->enter($__internal_0cde410f4a7b24a3bcad6c8b85074c7455a01ddfb3ab80c4a55aada4bb65aa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_0cde410f4a7b24a3bcad6c8b85074c7455a01ddfb3ab80c4a55aada4bb65aa5a->leave($__internal_0cde410f4a7b24a3bcad6c8b85074c7455a01ddfb3ab80c4a55aada4bb65aa5a_prof);

        
        $__internal_9ab01c1ac434a41f147bdb0b9b90aea39557c8fca010c3e64c1e0b4ef8fe8642->leave($__internal_9ab01c1ac434a41f147bdb0b9b90aea39557c8fca010c3e64c1e0b4ef8fe8642_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0cb6bd9a4f50216cc7f2783f3f86cc3a0c8299200cbffd0b4ef64d53de1c4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cb6bd9a4f50216cc7f2783f3f86cc3a0c8299200cbffd0b4ef64d53de1c4cb->enter($__internal_b0cb6bd9a4f50216cc7f2783f3f86cc3a0c8299200cbffd0b4ef64d53de1c4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7f9efa8f74aa0037254945c8281aabeaf1297f1a1bc370b7b450c0f0fc24e0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9efa8f74aa0037254945c8281aabeaf1297f1a1bc370b7b450c0f0fc24e0b8->enter($__internal_7f9efa8f74aa0037254945c8281aabeaf1297f1a1bc370b7b450c0f0fc24e0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7f9efa8f74aa0037254945c8281aabeaf1297f1a1bc370b7b450c0f0fc24e0b8->leave($__internal_7f9efa8f74aa0037254945c8281aabeaf1297f1a1bc370b7b450c0f0fc24e0b8_prof);

        
        $__internal_b0cb6bd9a4f50216cc7f2783f3f86cc3a0c8299200cbffd0b4ef64d53de1c4cb->leave($__internal_b0cb6bd9a4f50216cc7f2783f3f86cc3a0c8299200cbffd0b4ef64d53de1c4cb_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_7ccbd61637b766e36d311c8a0a9cc551f04b316e91ab356cf828e9e4bc9b2f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccbd61637b766e36d311c8a0a9cc551f04b316e91ab356cf828e9e4bc9b2f3a->enter($__internal_7ccbd61637b766e36d311c8a0a9cc551f04b316e91ab356cf828e9e4bc9b2f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_6caef39441bef4f735cfdbacb31da30de30e0461c683cdf78c9496c34ffd8ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6caef39441bef4f735cfdbacb31da30de30e0461c683cdf78c9496c34ffd8ebe->enter($__internal_6caef39441bef4f735cfdbacb31da30de30e0461c683cdf78c9496c34ffd8ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_6caef39441bef4f735cfdbacb31da30de30e0461c683cdf78c9496c34ffd8ebe->leave($__internal_6caef39441bef4f735cfdbacb31da30de30e0461c683cdf78c9496c34ffd8ebe_prof);

        
        $__internal_7ccbd61637b766e36d311c8a0a9cc551f04b316e91ab356cf828e9e4bc9b2f3a->leave($__internal_7ccbd61637b766e36d311c8a0a9cc551f04b316e91ab356cf828e9e4bc9b2f3a_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_127b4ff7be48d790a3436cc0559389b5c11ff3619717c655be4411c0eba834f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127b4ff7be48d790a3436cc0559389b5c11ff3619717c655be4411c0eba834f5->enter($__internal_127b4ff7be48d790a3436cc0559389b5c11ff3619717c655be4411c0eba834f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_9cb68c652e39bc2d1ea4c78d439ce9cf04bbc43ecad7a5f920a99e7fa3949f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb68c652e39bc2d1ea4c78d439ce9cf04bbc43ecad7a5f920a99e7fa3949f4c->enter($__internal_9cb68c652e39bc2d1ea4c78d439ce9cf04bbc43ecad7a5f920a99e7fa3949f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_9cb68c652e39bc2d1ea4c78d439ce9cf04bbc43ecad7a5f920a99e7fa3949f4c->leave($__internal_9cb68c652e39bc2d1ea4c78d439ce9cf04bbc43ecad7a5f920a99e7fa3949f4c_prof);

        
        $__internal_127b4ff7be48d790a3436cc0559389b5c11ff3619717c655be4411c0eba834f5->leave($__internal_127b4ff7be48d790a3436cc0559389b5c11ff3619717c655be4411c0eba834f5_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8881ecea435cea23e93c5c4c49683822567f4281b22a86e372d253819aa6097b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8881ecea435cea23e93c5c4c49683822567f4281b22a86e372d253819aa6097b->enter($__internal_8881ecea435cea23e93c5c4c49683822567f4281b22a86e372d253819aa6097b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_716417577e1469a0d7da2ec6edc0ddf883ae6b195fc4cfc3328c68a365b3e087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716417577e1469a0d7da2ec6edc0ddf883ae6b195fc4cfc3328c68a365b3e087->enter($__internal_716417577e1469a0d7da2ec6edc0ddf883ae6b195fc4cfc3328c68a365b3e087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_716417577e1469a0d7da2ec6edc0ddf883ae6b195fc4cfc3328c68a365b3e087->leave($__internal_716417577e1469a0d7da2ec6edc0ddf883ae6b195fc4cfc3328c68a365b3e087_prof);

        
        $__internal_8881ecea435cea23e93c5c4c49683822567f4281b22a86e372d253819aa6097b->leave($__internal_8881ecea435cea23e93c5c4c49683822567f4281b22a86e372d253819aa6097b_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_7e5f8d814f532b7f63e210ba64a1082899b99445dd454c79affb1098c3eb35e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5f8d814f532b7f63e210ba64a1082899b99445dd454c79affb1098c3eb35e4->enter($__internal_7e5f8d814f532b7f63e210ba64a1082899b99445dd454c79affb1098c3eb35e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_017654da4ee59b0e09f96e7300b6fff64f1f44f449518d91d1a227d608553f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017654da4ee59b0e09f96e7300b6fff64f1f44f449518d91d1a227d608553f4c->enter($__internal_017654da4ee59b0e09f96e7300b6fff64f1f44f449518d91d1a227d608553f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_017654da4ee59b0e09f96e7300b6fff64f1f44f449518d91d1a227d608553f4c->leave($__internal_017654da4ee59b0e09f96e7300b6fff64f1f44f449518d91d1a227d608553f4c_prof);

        
        $__internal_7e5f8d814f532b7f63e210ba64a1082899b99445dd454c79affb1098c3eb35e4->leave($__internal_7e5f8d814f532b7f63e210ba64a1082899b99445dd454c79affb1098c3eb35e4_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_7866efe5d7fb33a45db65c8ce5c15f4d3d8f1cd3d9bf33dabdaec232d241782b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7866efe5d7fb33a45db65c8ce5c15f4d3d8f1cd3d9bf33dabdaec232d241782b->enter($__internal_7866efe5d7fb33a45db65c8ce5c15f4d3d8f1cd3d9bf33dabdaec232d241782b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_27b86ca7328c822ad52c946be303b1c83fde4abc9bd4ffa7c54410a69f3f10d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b86ca7328c822ad52c946be303b1c83fde4abc9bd4ffa7c54410a69f3f10d4->enter($__internal_27b86ca7328c822ad52c946be303b1c83fde4abc9bd4ffa7c54410a69f3f10d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_27b86ca7328c822ad52c946be303b1c83fde4abc9bd4ffa7c54410a69f3f10d4->leave($__internal_27b86ca7328c822ad52c946be303b1c83fde4abc9bd4ffa7c54410a69f3f10d4_prof);

        
        $__internal_7866efe5d7fb33a45db65c8ce5c15f4d3d8f1cd3d9bf33dabdaec232d241782b->leave($__internal_7866efe5d7fb33a45db65c8ce5c15f4d3d8f1cd3d9bf33dabdaec232d241782b_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c6a0258b062e71a63e56454d5694518d14ee6fc3293bef1e10abb0a478470e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a0258b062e71a63e56454d5694518d14ee6fc3293bef1e10abb0a478470e9c->enter($__internal_c6a0258b062e71a63e56454d5694518d14ee6fc3293bef1e10abb0a478470e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_33ffafc7c6d2dd0c4f2d844ccabc1c8dfd64acc5d0367c6626cf63d98d0be3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ffafc7c6d2dd0c4f2d844ccabc1c8dfd64acc5d0367c6626cf63d98d0be3c3->enter($__internal_33ffafc7c6d2dd0c4f2d844ccabc1c8dfd64acc5d0367c6626cf63d98d0be3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_33ffafc7c6d2dd0c4f2d844ccabc1c8dfd64acc5d0367c6626cf63d98d0be3c3->leave($__internal_33ffafc7c6d2dd0c4f2d844ccabc1c8dfd64acc5d0367c6626cf63d98d0be3c3_prof);

        
        $__internal_c6a0258b062e71a63e56454d5694518d14ee6fc3293bef1e10abb0a478470e9c->leave($__internal_c6a0258b062e71a63e56454d5694518d14ee6fc3293bef1e10abb0a478470e9c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
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
", "EasyAdminBundle:default:layout.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
