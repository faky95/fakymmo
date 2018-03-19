<?php

/* ::layout1.html.twig */
class __TwigTemplate_d9beb8c0e719f68c65c48be23cce7a3c666dd04c70cc6ae49b00912405d455ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'right_bar' => array($this, 'block_right_bar'),
            'wrapper' => array($this, 'block_wrapper'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e193ba1ee597d52f6f2ef18cb3aeb04d2d14f5e0f27daedc4c603b36151faedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e193ba1ee597d52f6f2ef18cb3aeb04d2d14f5e0f27daedc4c603b36151faedd->enter($__internal_e193ba1ee597d52f6f2ef18cb3aeb04d2d14f5e0f27daedc4c603b36151faedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        $__internal_38e79f13408fabc3f34beae361a46ab99dcf2565d2a14cc7500b6114f270328b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e79f13408fabc3f34beae361a46ab99dcf2565d2a14cc7500b6114f270328b->enter($__internal_38e79f13408fabc3f34beae361a46ab99dcf2565d2a14cc7500b6114f270328b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        </title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 137
        echo "    </body>
</html>";
        
        $__internal_e193ba1ee597d52f6f2ef18cb3aeb04d2d14f5e0f27daedc4c603b36151faedd->leave($__internal_e193ba1ee597d52f6f2ef18cb3aeb04d2d14f5e0f27daedc4c603b36151faedd_prof);

        
        $__internal_38e79f13408fabc3f34beae361a46ab99dcf2565d2a14cc7500b6114f270328b->leave($__internal_38e79f13408fabc3f34beae361a46ab99dcf2565d2a14cc7500b6114f270328b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef776d70257dd446d887e9da0a02183f37b4945abaa7fcb68765c57cc5722d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef776d70257dd446d887e9da0a02183f37b4945abaa7fcb68765c57cc5722d8f->enter($__internal_ef776d70257dd446d887e9da0a02183f37b4945abaa7fcb68765c57cc5722d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c9fac16633c5c2b872584f08c7fcf04eaae22d5df196221f48311faad91c60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9fac16633c5c2b872584f08c7fcf04eaae22d5df196221f48311faad91c60e->enter($__internal_5c9fac16633c5c2b872584f08c7fcf04eaae22d5df196221f48311faad91c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue";
        
        $__internal_5c9fac16633c5c2b872584f08c7fcf04eaae22d5df196221f48311faad91c60e->leave($__internal_5c9fac16633c5c2b872584f08c7fcf04eaae22d5df196221f48311faad91c60e_prof);

        
        $__internal_ef776d70257dd446d887e9da0a02183f37b4945abaa7fcb68765c57cc5722d8f->leave($__internal_ef776d70257dd446d887e9da0a02183f37b4945abaa7fcb68765c57cc5722d8f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_174502efffb7531e01ea723974c6f46ac9a399a1419416684eb00b14cc646146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174502efffb7531e01ea723974c6f46ac9a399a1419416684eb00b14cc646146->enter($__internal_174502efffb7531e01ea723974c6f46ac9a399a1419416684eb00b14cc646146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0741ae083984438f22b1a0c764e4eca1aba4e44fb20c9ad8e9a350dc11e193dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0741ae083984438f22b1a0c764e4eca1aba4e44fb20c9ad8e9a350dc11e193dc->enter($__internal_0741ae083984438f22b1a0c764e4eca1aba4e44fb20c9ad8e9a350dc11e193dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.icos"), "html", null, true);
        echo "\">

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


        ";
        
        $__internal_0741ae083984438f22b1a0c764e4eca1aba4e44fb20c9ad8e9a350dc11e193dc->leave($__internal_0741ae083984438f22b1a0c764e4eca1aba4e44fb20c9ad8e9a350dc11e193dc_prof);

        
        $__internal_174502efffb7531e01ea723974c6f46ac9a399a1419416684eb00b14cc646146->leave($__internal_174502efffb7531e01ea723974c6f46ac9a399a1419416684eb00b14cc646146_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d3b0e38ea1967a4c74bd1fab63c96f62abffbe6a13f3a7a716a9aa10cc7c875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3b0e38ea1967a4c74bd1fab63c96f62abffbe6a13f3a7a716a9aa10cc7c875->enter($__internal_8d3b0e38ea1967a4c74bd1fab63c96f62abffbe6a13f3a7a716a9aa10cc7c875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b06aed5a34f9cdd3ab480a81930e6009df3efb59428abacd29d3da4947b73d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b06aed5a34f9cdd3ab480a81930e6009df3efb59428abacd29d3da4947b73d1->enter($__internal_0b06aed5a34f9cdd3ab480a81930e6009df3efb59428abacd29d3da4947b73d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 66
        echo "                 
        ";
        // line 67
        $this->displayBlock('main', $context, $blocks);
        // line 70
        echo "    
                       
            
             

     ";
        // line 75
        $this->displayBlock('right_bar', $context, $blocks);
        // line 77
        echo "     


      ";
        // line 80
        $this->displayBlock('wrapper', $context, $blocks);
        // line 82
        echo "     




        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "
   ";
        
        $__internal_0b06aed5a34f9cdd3ab480a81930e6009df3efb59428abacd29d3da4947b73d1->leave($__internal_0b06aed5a34f9cdd3ab480a81930e6009df3efb59428abacd29d3da4947b73d1_prof);

        
        $__internal_8d3b0e38ea1967a4c74bd1fab63c96f62abffbe6a13f3a7a716a9aa10cc7c875->leave($__internal_8d3b0e38ea1967a4c74bd1fab63c96f62abffbe6a13f3a7a716a9aa10cc7c875_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_1a6e54342197c03bf4bb8e931c2ccb617a7a1341cf8369ac5c771efe026ad4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6e54342197c03bf4bb8e931c2ccb617a7a1341cf8369ac5c771efe026ad4cb->enter($__internal_1a6e54342197c03bf4bb8e931c2ccb617a7a1341cf8369ac5c771efe026ad4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_62510a21508aa2dda1fb2d9cd16ed19bd3e70a7253ca9dcd3558cdcb35eb8595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62510a21508aa2dda1fb2d9cd16ed19bd3e70a7253ca9dcd3558cdcb35eb8595->enter($__internal_62510a21508aa2dda1fb2d9cd16ed19bd3e70a7253ca9dcd3558cdcb35eb8595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "     <div id=\"wrapper\">
     <div class=\"topbar\">
        <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <div class=\"ak\">
                        <a href=\"\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>AK 1/2 IMMO </span></a>
                        </div>
                       
                    </div>
                    
        </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\" style=\"display:flex;\">
                       
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                               
                            </div> 
                              <div class=\"titre\" style=\"margin-left:400px;margin-top:5px;\">
                                 <h1 style=\"color:white;\">Reservation En Cours </h1>    
                             </div>
                        </div>        
                          
                    </div>
                                
                </div>
        </div>
        
        </div>                           
                                    
                               
                        
        ";
        
        $__internal_62510a21508aa2dda1fb2d9cd16ed19bd3e70a7253ca9dcd3558cdcb35eb8595->leave($__internal_62510a21508aa2dda1fb2d9cd16ed19bd3e70a7253ca9dcd3558cdcb35eb8595_prof);

        
        $__internal_1a6e54342197c03bf4bb8e931c2ccb617a7a1341cf8369ac5c771efe026ad4cb->leave($__internal_1a6e54342197c03bf4bb8e931c2ccb617a7a1341cf8369ac5c771efe026ad4cb_prof);

    }

    // line 67
    public function block_main($context, array $blocks = array())
    {
        $__internal_f53dcdb86a055f36dbc30e4e91ce5ef3ed667c5ebe6676fe789390186793e891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53dcdb86a055f36dbc30e4e91ce5ef3ed667c5ebe6676fe789390186793e891->enter($__internal_f53dcdb86a055f36dbc30e4e91ce5ef3ed667c5ebe6676fe789390186793e891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d4ac4c0704fe17c449d8832cc1f30d7514e73c3f9943cbfc2b3990332cd47c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ac4c0704fe17c449d8832cc1f30d7514e73c3f9943cbfc2b3990332cd47c21->enter($__internal_d4ac4c0704fe17c449d8832cc1f30d7514e73c3f9943cbfc2b3990332cd47c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 68
        echo "       
        ";
        
        $__internal_d4ac4c0704fe17c449d8832cc1f30d7514e73c3f9943cbfc2b3990332cd47c21->leave($__internal_d4ac4c0704fe17c449d8832cc1f30d7514e73c3f9943cbfc2b3990332cd47c21_prof);

        
        $__internal_f53dcdb86a055f36dbc30e4e91ce5ef3ed667c5ebe6676fe789390186793e891->leave($__internal_f53dcdb86a055f36dbc30e4e91ce5ef3ed667c5ebe6676fe789390186793e891_prof);

    }

    // line 75
    public function block_right_bar($context, array $blocks = array())
    {
        $__internal_9012fe1e3792af46eabffe2e2107c7e17838d4dddf6aa10792121d310aad0e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9012fe1e3792af46eabffe2e2107c7e17838d4dddf6aa10792121d310aad0e15->enter($__internal_9012fe1e3792af46eabffe2e2107c7e17838d4dddf6aa10792121d310aad0e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_bar"));

        $__internal_df472412bccbca4551df038e26492288beaf3de6de82a7b47791538386fc42b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df472412bccbca4551df038e26492288beaf3de6de82a7b47791538386fc42b5->enter($__internal_df472412bccbca4551df038e26492288beaf3de6de82a7b47791538386fc42b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_bar"));

        // line 76
        echo "        ";
        
        $__internal_df472412bccbca4551df038e26492288beaf3de6de82a7b47791538386fc42b5->leave($__internal_df472412bccbca4551df038e26492288beaf3de6de82a7b47791538386fc42b5_prof);

        
        $__internal_9012fe1e3792af46eabffe2e2107c7e17838d4dddf6aa10792121d310aad0e15->leave($__internal_9012fe1e3792af46eabffe2e2107c7e17838d4dddf6aa10792121d310aad0e15_prof);

    }

    // line 80
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_a7143de8ba9d62b0d4bf0d6622158fd25d48561694b05f5a25a548933c3e2f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7143de8ba9d62b0d4bf0d6622158fd25d48561694b05f5a25a548933c3e2f68->enter($__internal_a7143de8ba9d62b0d4bf0d6622158fd25d48561694b05f5a25a548933c3e2f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_d90060614a6cd72453a1c20fd94ce913e7353034f7c8af8cafab47bca28ef539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90060614a6cd72453a1c20fd94ce913e7353034f7c8af8cafab47bca28ef539->enter($__internal_d90060614a6cd72453a1c20fd94ce913e7353034f7c8af8cafab47bca28ef539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 81
        echo "        ";
        
        $__internal_d90060614a6cd72453a1c20fd94ce913e7353034f7c8af8cafab47bca28ef539->leave($__internal_d90060614a6cd72453a1c20fd94ce913e7353034f7c8af8cafab47bca28ef539_prof);

        
        $__internal_a7143de8ba9d62b0d4bf0d6622158fd25d48561694b05f5a25a548933c3e2f68->leave($__internal_a7143de8ba9d62b0d4bf0d6622158fd25d48561694b05f5a25a548933c3e2f68_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86034dc78f29c300fe6232b9d1364951a87d575ae07921219e736b66c2027a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86034dc78f29c300fe6232b9d1364951a87d575ae07921219e736b66c2027a03->enter($__internal_86034dc78f29c300fe6232b9d1364951a87d575ae07921219e736b66c2027a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_80e6b08311c5dc19a01cf4cbca368c1fb43deca03784011f39242b3a3eabbafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e6b08311c5dc19a01cf4cbca368c1fb43deca03784011f39242b3a3eabbafd->enter($__internal_80e6b08311c5dc19a01cf4cbca368c1fb43deca03784011f39242b3a3eabbafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "        
         <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
          <!-- jQuery  -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>


    <!-- flot Chart -->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    ";
        // line 132
        echo "

        ";
        
        $__internal_80e6b08311c5dc19a01cf4cbca368c1fb43deca03784011f39242b3a3eabbafd->leave($__internal_80e6b08311c5dc19a01cf4cbca368c1fb43deca03784011f39242b3a3eabbafd_prof);

        
        $__internal_86034dc78f29c300fe6232b9d1364951a87d575ae07921219e736b66c2027a03->leave($__internal_86034dc78f29c300fe6232b9d1364951a87d575ae07921219e736b66c2027a03_prof);

    }

    public function getTemplateName()
    {
        return "::layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 132,  436 => 128,  430 => 125,  424 => 122,  420 => 121,  416 => 120,  412 => 119,  408 => 118,  404 => 117,  400 => 116,  396 => 115,  389 => 111,  383 => 108,  379 => 107,  374 => 105,  368 => 102,  363 => 100,  359 => 99,  355 => 98,  351 => 97,  347 => 96,  343 => 95,  339 => 94,  335 => 93,  331 => 92,  327 => 91,  322 => 89,  319 => 88,  310 => 87,  300 => 81,  291 => 80,  281 => 76,  272 => 75,  261 => 68,  252 => 67,  205 => 28,  196 => 27,  185 => 135,  183 => 87,  176 => 82,  174 => 80,  169 => 77,  167 => 75,  160 => 70,  158 => 67,  155 => 66,  152 => 27,  143 => 26,  129 => 19,  125 => 18,  121 => 17,  117 => 16,  113 => 15,  109 => 14,  105 => 13,  100 => 11,  94 => 9,  85 => 8,  67 => 6,  56 => 137,  54 => 26,  47 => 23,  45 => 8,  42 => 7,  40 => 6,  33 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            {% block title %}Bienvenue{% endblock %}
        </title>
        {% block stylesheets %}
        <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon_1.icos')}}\">

        <link href=\"{{asset('assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">


        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% block body %}
    {% block header %}
     <div id=\"wrapper\">
     <div class=\"topbar\">
        <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <div class=\"ak\">
                        <a href=\"\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>AK 1/2 IMMO </span></a>
                        </div>
                       
                    </div>
                    
        </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\" style=\"display:flex;\">
                       
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                               
                            </div> 
                              <div class=\"titre\" style=\"margin-left:400px;margin-top:5px;\">
                                 <h1 style=\"color:white;\">Reservation En Cours </h1>    
                             </div>
                        </div>        
                          
                    </div>
                                
                </div>
        </div>
        
        </div>                           
                                    
                               
                        
        {% endblock %}
                 
        {% block main %}
       
        {% endblock %}
    
                       
            
             

     {% block right_bar %}
        {% endblock %}
     


      {% block wrapper %}
        {% endblock %}
     




        {% block javascripts %}
        
         <script src=\"{{asset('assets/js/modernizr.min.js')}}\"></script>
          <!-- jQuery  -->
    <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/detect.js')}}\"></script>
    <script src=\"{{asset('assets/js/fastclick.js')}}\"></script>
    <script src=\"{{asset('assets/js/jquery.slimscroll.js')}}\"></script>
    <script src=\"{{asset('assets/js/jquery.blockUI.js')}}\"></script>
    <script src=\"{{asset('assets/js/waves.js')}}\"></script>
    <script src=\"{{asset('assets/js/wow.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/jquery.nicescroll.js')}}\"></script>
    <script src=\"{{asset('assets/js/jquery.scrollTo.min.js')}}\"></script>

    <script src=\"{{asset('assets/js/jquery.app.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{asset('assets/plugins/moment/moment.js')}}\"></script>

    <script src=\"{{asset('assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{asset('assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>


    <!-- flot Chart -->
    <script src=\"{{asset('assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{asset('assets/pages/jquery.todo.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{asset('assets/pages/jquery.chat.js')}}\"></script>

    <!-- jQuery  -->
    {# <script src=\"{{asset('assets/pages/jquery.dashboard.js')}}\"></script> #}


        {% endblock %}

   {% endblock %}
    </body>
</html>", "::layout1.html.twig", "/var/www/html/fakymmo/app/Resources/views/layout1.html.twig");
    }
}
