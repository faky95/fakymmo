<?php

/* ::layout1.html.twig */
class __TwigTemplate_f60426805a98a1db28ba818c0f814d6e144a8aefe3473bba66ac23ece8e53e75 extends Twig_Template
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
        $__internal_c5b672d01479d0bc428498f16665564fb237fcdf599b684b0dbc67d66f3d4cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b672d01479d0bc428498f16665564fb237fcdf599b684b0dbc67d66f3d4cd9->enter($__internal_c5b672d01479d0bc428498f16665564fb237fcdf599b684b0dbc67d66f3d4cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        $__internal_92d2cf7ac7979bf09408aab6993f53becf6bd904c235bd77ee1ca850b402670c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d2cf7ac7979bf09408aab6993f53becf6bd904c235bd77ee1ca850b402670c->enter($__internal_92d2cf7ac7979bf09408aab6993f53becf6bd904c235bd77ee1ca850b402670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

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
        
        $__internal_c5b672d01479d0bc428498f16665564fb237fcdf599b684b0dbc67d66f3d4cd9->leave($__internal_c5b672d01479d0bc428498f16665564fb237fcdf599b684b0dbc67d66f3d4cd9_prof);

        
        $__internal_92d2cf7ac7979bf09408aab6993f53becf6bd904c235bd77ee1ca850b402670c->leave($__internal_92d2cf7ac7979bf09408aab6993f53becf6bd904c235bd77ee1ca850b402670c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_af84d47cfe868efb49b8c7ce72d4147be04c8f0725cab9e476883da205990b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af84d47cfe868efb49b8c7ce72d4147be04c8f0725cab9e476883da205990b79->enter($__internal_af84d47cfe868efb49b8c7ce72d4147be04c8f0725cab9e476883da205990b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_206857ed9eab841d64188fcea8b52394a12f0f5419f576a95ccee98904608bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206857ed9eab841d64188fcea8b52394a12f0f5419f576a95ccee98904608bc6->enter($__internal_206857ed9eab841d64188fcea8b52394a12f0f5419f576a95ccee98904608bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue";
        
        $__internal_206857ed9eab841d64188fcea8b52394a12f0f5419f576a95ccee98904608bc6->leave($__internal_206857ed9eab841d64188fcea8b52394a12f0f5419f576a95ccee98904608bc6_prof);

        
        $__internal_af84d47cfe868efb49b8c7ce72d4147be04c8f0725cab9e476883da205990b79->leave($__internal_af84d47cfe868efb49b8c7ce72d4147be04c8f0725cab9e476883da205990b79_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9130bcd318d46c12d4776fd06edfb91fac700094ed95b256c48b7e6d55b9942d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9130bcd318d46c12d4776fd06edfb91fac700094ed95b256c48b7e6d55b9942d->enter($__internal_9130bcd318d46c12d4776fd06edfb91fac700094ed95b256c48b7e6d55b9942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f3efe84be732604429a8c23a238ec7bbd2dcf9f757bbea025b2019304f70d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3efe84be732604429a8c23a238ec7bbd2dcf9f757bbea025b2019304f70d2a->enter($__internal_8f3efe84be732604429a8c23a238ec7bbd2dcf9f757bbea025b2019304f70d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8f3efe84be732604429a8c23a238ec7bbd2dcf9f757bbea025b2019304f70d2a->leave($__internal_8f3efe84be732604429a8c23a238ec7bbd2dcf9f757bbea025b2019304f70d2a_prof);

        
        $__internal_9130bcd318d46c12d4776fd06edfb91fac700094ed95b256c48b7e6d55b9942d->leave($__internal_9130bcd318d46c12d4776fd06edfb91fac700094ed95b256c48b7e6d55b9942d_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_90de08daed7dfa0a4fed256733f6d4a21e873bbc7634baac3e953340f7ac222d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90de08daed7dfa0a4fed256733f6d4a21e873bbc7634baac3e953340f7ac222d->enter($__internal_90de08daed7dfa0a4fed256733f6d4a21e873bbc7634baac3e953340f7ac222d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22789c9916e4b14b08aebf342d888fb1845c573f80d14d8d42d07e0d859d314a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22789c9916e4b14b08aebf342d888fb1845c573f80d14d8d42d07e0d859d314a->enter($__internal_22789c9916e4b14b08aebf342d888fb1845c573f80d14d8d42d07e0d859d314a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_22789c9916e4b14b08aebf342d888fb1845c573f80d14d8d42d07e0d859d314a->leave($__internal_22789c9916e4b14b08aebf342d888fb1845c573f80d14d8d42d07e0d859d314a_prof);

        
        $__internal_90de08daed7dfa0a4fed256733f6d4a21e873bbc7634baac3e953340f7ac222d->leave($__internal_90de08daed7dfa0a4fed256733f6d4a21e873bbc7634baac3e953340f7ac222d_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_bfc1d1e0fbdcc0f6aee1199399636223795cf6f2aa0e11a74a577620acdcce2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc1d1e0fbdcc0f6aee1199399636223795cf6f2aa0e11a74a577620acdcce2e->enter($__internal_bfc1d1e0fbdcc0f6aee1199399636223795cf6f2aa0e11a74a577620acdcce2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_70484efea7932b1c348532d1393f97b6964493b9775e325260009341d599129e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70484efea7932b1c348532d1393f97b6964493b9775e325260009341d599129e->enter($__internal_70484efea7932b1c348532d1393f97b6964493b9775e325260009341d599129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                                 ";
        // line 53
        echo "                             </div>
                        </div>        
                          
                    </div>
                                
                </div>
        </div>
        
        </div>                           
                                    
                               
                        
        ";
        
        $__internal_70484efea7932b1c348532d1393f97b6964493b9775e325260009341d599129e->leave($__internal_70484efea7932b1c348532d1393f97b6964493b9775e325260009341d599129e_prof);

        
        $__internal_bfc1d1e0fbdcc0f6aee1199399636223795cf6f2aa0e11a74a577620acdcce2e->leave($__internal_bfc1d1e0fbdcc0f6aee1199399636223795cf6f2aa0e11a74a577620acdcce2e_prof);

    }

    // line 67
    public function block_main($context, array $blocks = array())
    {
        $__internal_1f50a2e30be2a1dc58ddf6a5770cd4fb9b815f2731f49ddaf5faec99e165237e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f50a2e30be2a1dc58ddf6a5770cd4fb9b815f2731f49ddaf5faec99e165237e->enter($__internal_1f50a2e30be2a1dc58ddf6a5770cd4fb9b815f2731f49ddaf5faec99e165237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e7edf15d7136464d76686e0fde7956916cdfece06abc589b14ac033bcbb63193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7edf15d7136464d76686e0fde7956916cdfece06abc589b14ac033bcbb63193->enter($__internal_e7edf15d7136464d76686e0fde7956916cdfece06abc589b14ac033bcbb63193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 68
        echo "       
        ";
        
        $__internal_e7edf15d7136464d76686e0fde7956916cdfece06abc589b14ac033bcbb63193->leave($__internal_e7edf15d7136464d76686e0fde7956916cdfece06abc589b14ac033bcbb63193_prof);

        
        $__internal_1f50a2e30be2a1dc58ddf6a5770cd4fb9b815f2731f49ddaf5faec99e165237e->leave($__internal_1f50a2e30be2a1dc58ddf6a5770cd4fb9b815f2731f49ddaf5faec99e165237e_prof);

    }

    // line 75
    public function block_right_bar($context, array $blocks = array())
    {
        $__internal_761f416034e6b7ca4c1923738153ff7e822ca54d271cfd85b48488cc41bdb3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761f416034e6b7ca4c1923738153ff7e822ca54d271cfd85b48488cc41bdb3c1->enter($__internal_761f416034e6b7ca4c1923738153ff7e822ca54d271cfd85b48488cc41bdb3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_bar"));

        $__internal_26ad37faa6464bc13522f6a89b8085f31b6b4f77f1fc1870705af24ee935f397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ad37faa6464bc13522f6a89b8085f31b6b4f77f1fc1870705af24ee935f397->enter($__internal_26ad37faa6464bc13522f6a89b8085f31b6b4f77f1fc1870705af24ee935f397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_bar"));

        // line 76
        echo "        ";
        
        $__internal_26ad37faa6464bc13522f6a89b8085f31b6b4f77f1fc1870705af24ee935f397->leave($__internal_26ad37faa6464bc13522f6a89b8085f31b6b4f77f1fc1870705af24ee935f397_prof);

        
        $__internal_761f416034e6b7ca4c1923738153ff7e822ca54d271cfd85b48488cc41bdb3c1->leave($__internal_761f416034e6b7ca4c1923738153ff7e822ca54d271cfd85b48488cc41bdb3c1_prof);

    }

    // line 80
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_cb72e857f554a695af943796197e82550957c3a138de1872f43a00defbf41df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb72e857f554a695af943796197e82550957c3a138de1872f43a00defbf41df6->enter($__internal_cb72e857f554a695af943796197e82550957c3a138de1872f43a00defbf41df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_5b5363763eefe329f7a57b0e380d95c291f678797cafcee3a30cc2b6314e898e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5363763eefe329f7a57b0e380d95c291f678797cafcee3a30cc2b6314e898e->enter($__internal_5b5363763eefe329f7a57b0e380d95c291f678797cafcee3a30cc2b6314e898e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 81
        echo "        ";
        
        $__internal_5b5363763eefe329f7a57b0e380d95c291f678797cafcee3a30cc2b6314e898e->leave($__internal_5b5363763eefe329f7a57b0e380d95c291f678797cafcee3a30cc2b6314e898e_prof);

        
        $__internal_cb72e857f554a695af943796197e82550957c3a138de1872f43a00defbf41df6->leave($__internal_cb72e857f554a695af943796197e82550957c3a138de1872f43a00defbf41df6_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0a3e75a9c1866d739843ae76ec2bf4c4814a7657f3c013a6ba50d7f8770877f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a3e75a9c1866d739843ae76ec2bf4c4814a7657f3c013a6ba50d7f8770877f->enter($__internal_d0a3e75a9c1866d739843ae76ec2bf4c4814a7657f3c013a6ba50d7f8770877f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_623986331305ca0ef346c1b1b102aaa10962c5fdfea0251526fbb22e97e0abe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623986331305ca0ef346c1b1b102aaa10962c5fdfea0251526fbb22e97e0abe8->enter($__internal_623986331305ca0ef346c1b1b102aaa10962c5fdfea0251526fbb22e97e0abe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_623986331305ca0ef346c1b1b102aaa10962c5fdfea0251526fbb22e97e0abe8->leave($__internal_623986331305ca0ef346c1b1b102aaa10962c5fdfea0251526fbb22e97e0abe8_prof);

        
        $__internal_d0a3e75a9c1866d739843ae76ec2bf4c4814a7657f3c013a6ba50d7f8770877f->leave($__internal_d0a3e75a9c1866d739843ae76ec2bf4c4814a7657f3c013a6ba50d7f8770877f_prof);

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
        return array (  443 => 132,  437 => 128,  431 => 125,  425 => 122,  421 => 121,  417 => 120,  413 => 119,  409 => 118,  405 => 117,  401 => 116,  397 => 115,  390 => 111,  384 => 108,  380 => 107,  375 => 105,  369 => 102,  364 => 100,  360 => 99,  356 => 98,  352 => 97,  348 => 96,  344 => 95,  340 => 94,  336 => 93,  332 => 92,  328 => 91,  323 => 89,  320 => 88,  311 => 87,  301 => 81,  292 => 80,  282 => 76,  273 => 75,  262 => 68,  253 => 67,  231 => 53,  205 => 28,  196 => 27,  185 => 135,  183 => 87,  176 => 82,  174 => 80,  169 => 77,  167 => 75,  160 => 70,  158 => 67,  155 => 66,  152 => 27,  143 => 26,  129 => 19,  125 => 18,  121 => 17,  117 => 16,  113 => 15,  109 => 14,  105 => 13,  100 => 11,  94 => 9,  85 => 8,  67 => 6,  56 => 137,  54 => 26,  47 => 23,  45 => 8,  42 => 7,  40 => 6,  33 => 1,);
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
                                 {# <h1 style=\"color:white;\">Reservation En Cours </h1>     #}
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
