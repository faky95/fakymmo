<?php

/* ::base.html.twig */
class __TwigTemplate_ef1072cf38ee92f1bc077cd018e7384b29214676c2d5ca3972b14e76cf16beb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'aside' => array($this, 'block_aside'),
            'plus' => array($this, 'block_plus'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b073cbd4adfee3a903082ea7239b2576e8a3d516ee7bbe1d4f0bce6b19c5f80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b073cbd4adfee3a903082ea7239b2576e8a3d516ee7bbe1d4f0bce6b19c5f80e->enter($__internal_b073cbd4adfee3a903082ea7239b2576e8a3d516ee7bbe1d4f0bce6b19c5f80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_69bbc66cefa1b45b993b8720a372760809cd3c7be81e09d60fff984b43144b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bbc66cefa1b45b993b8720a372760809cd3c7be81e09d60fff984b43144b30->enter($__internal_69bbc66cefa1b45b993b8720a372760809cd3c7be81e09d60fff984b43144b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body> 
";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 480
        echo "</body>
</html>";
        
        $__internal_b073cbd4adfee3a903082ea7239b2576e8a3d516ee7bbe1d4f0bce6b19c5f80e->leave($__internal_b073cbd4adfee3a903082ea7239b2576e8a3d516ee7bbe1d4f0bce6b19c5f80e_prof);

        
        $__internal_69bbc66cefa1b45b993b8720a372760809cd3c7be81e09d60fff984b43144b30->leave($__internal_69bbc66cefa1b45b993b8720a372760809cd3c7be81e09d60fff984b43144b30_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd55b49a127c074579d7651c46d9bea1d00a095f685688b8bc49c51b56d36f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd55b49a127c074579d7651c46d9bea1d00a095f685688b8bc49c51b56d36f0b->enter($__internal_bd55b49a127c074579d7651c46d9bea1d00a095f685688b8bc49c51b56d36f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_626d192646bdc6a83d9bc704eebf30aa8e8f88504c031403c76c71c522ed0653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626d192646bdc6a83d9bc704eebf30aa8e8f88504c031403c76c71c522ed0653->enter($__internal_626d192646bdc6a83d9bc704eebf30aa8e8f88504c031403c76c71c522ed0653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "<!-- Meta tag Keywords -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Assets web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
";
        // line 13
        $this->displayBlock('javascript', $context, $blocks);
        // line 17
        echo "<!--// Meta tag Keywords -->
<!-- css files -->
";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_626d192646bdc6a83d9bc704eebf30aa8e8f88504c031403c76c71c522ed0653->leave($__internal_626d192646bdc6a83d9bc704eebf30aa8e8f88504c031403c76c71c522ed0653_prof);

        
        $__internal_bd55b49a127c074579d7651c46d9bea1d00a095f685688b8bc49c51b56d36f0b->leave($__internal_bd55b49a127c074579d7651c46d9bea1d00a095f685688b8bc49c51b56d36f0b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ecaec0c0508881b424b1c94f9915fb3b7122cee1d098e4a7e1632f8d9c24ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecaec0c0508881b424b1c94f9915fb3b7122cee1d098e4a7e1632f8d9c24ace->enter($__internal_6ecaec0c0508881b424b1c94f9915fb3b7122cee1d098e4a7e1632f8d9c24ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4864d22a6878d425045987173c434ae3a9b03fa6995442e6342ad787d70f8a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4864d22a6878d425045987173c434ae3a9b03fa6995442e6342ad787d70f8a81->enter($__internal_4864d22a6878d425045987173c434ae3a9b03fa6995442e6342ad787d70f8a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "\t<title>AK1/2IMMO</title>
";
        
        $__internal_4864d22a6878d425045987173c434ae3a9b03fa6995442e6342ad787d70f8a81->leave($__internal_4864d22a6878d425045987173c434ae3a9b03fa6995442e6342ad787d70f8a81_prof);

        
        $__internal_6ecaec0c0508881b424b1c94f9915fb3b7122cee1d098e4a7e1632f8d9c24ace->leave($__internal_6ecaec0c0508881b424b1c94f9915fb3b7122cee1d098e4a7e1632f8d9c24ace_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c6fcb4c1d9c38d11da4c29e150df74bf4e101706a5693954ee7c4f1853eb7727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6fcb4c1d9c38d11da4c29e150df74bf4e101706a5693954ee7c4f1853eb7727->enter($__internal_c6fcb4c1d9c38d11da4c29e150df74bf4e101706a5693954ee7c4f1853eb7727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c83f372ebf1ce1d8718c735958d7ddd8cfab7f45e274217e81a49a906828280b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83f372ebf1ce1d8718c735958d7ddd8cfab7f45e274217e81a49a906828280b->enter($__internal_c83f372ebf1ce1d8718c735958d7ddd8cfab7f45e274217e81a49a906828280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
";
        
        $__internal_c83f372ebf1ce1d8718c735958d7ddd8cfab7f45e274217e81a49a906828280b->leave($__internal_c83f372ebf1ce1d8718c735958d7ddd8cfab7f45e274217e81a49a906828280b_prof);

        
        $__internal_c6fcb4c1d9c38d11da4c29e150df74bf4e101706a5693954ee7c4f1853eb7727->leave($__internal_c6fcb4c1d9c38d11da4c29e150df74bf4e101706a5693954ee7c4f1853eb7727_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_284adcb577295e64eff697c86f18765fa4a6ed8aa30836fa1dadf93af103ccd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284adcb577295e64eff697c86f18765fa4a6ed8aa30836fa1dadf93af103ccd4->enter($__internal_284adcb577295e64eff697c86f18765fa4a6ed8aa30836fa1dadf93af103ccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_35dfb7748f335a55753419359c5a9d68c87540db89c67d9e425badc2cefb3f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35dfb7748f335a55753419359c5a9d68c87540db89c67d9e425badc2cefb3f50->enter($__internal_35dfb7748f335a55753419359c5a9d68c87540db89c67d9e425badc2cefb3f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"> <!-- Bootstrap-Core-CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> <!-- Style-CSS --> 
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\"> <!-- Font-Awesome-Icons-CSS -->
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simplelightbox.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>   
<!-- //css files -->
<!-- online-fonts -->
<link href=\"//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
<link href=\"//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900\" rel=\"stylesheet\">
<link href=\"//fonts.googleapis.com/css?family=Italianno\" rel=\"stylesheet\">
<!-- //online-fonts -->
";
        
        $__internal_35dfb7748f335a55753419359c5a9d68c87540db89c67d9e425badc2cefb3f50->leave($__internal_35dfb7748f335a55753419359c5a9d68c87540db89c67d9e425badc2cefb3f50_prof);

        
        $__internal_284adcb577295e64eff697c86f18765fa4a6ed8aa30836fa1dadf93af103ccd4->leave($__internal_284adcb577295e64eff697c86f18765fa4a6ed8aa30836fa1dadf93af103ccd4_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fe13c1aa7177af9ff2865ca60319a649b3cc2e421d3089ea369d201108f5f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe13c1aa7177af9ff2865ca60319a649b3cc2e421d3089ea369d201108f5f8d->enter($__internal_1fe13c1aa7177af9ff2865ca60319a649b3cc2e421d3089ea369d201108f5f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_589524aa242b5c639013c36d541e4ea1ac577a6c4b17fa291fddfc73ac4a5704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589524aa242b5c639013c36d541e4ea1ac577a6c4b17fa291fddfc73ac4a5704->enter($__internal_589524aa242b5c639013c36d541e4ea1ac577a6c4b17fa291fddfc73ac4a5704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 38
        echo "<!-- //banner --> 
<!-- header -->
<div class=\"header-w3layouts\"> 
\t";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "</div>\t

<!-- //header -->
<!-- Modal -->
<!-- <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\">
\t\t<!-- Modal content-->
\t<!-- \t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<img src=\"images/3.jpg\" alt=\" \" class=\"img-responsive\">
\t\t\t\t\t<h5>Donec lobortis pharetra dolor</h5>
\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable..</p>
\t\t\t</div>
\t\t</div> -->
\t\t<!-- //Modal content -->
<!-- \t</div>
</div> -->
<!-- //Modal -->
<!-- about -->


<!-- //about -->
<!-- services -->
<!-- <div id=\"services\" class=\"services\">
\t<div class=\"container\">  
\t\t<h3 class=\"w3l-title w3l\">Our Services</h3>
\t\t<span class=\"w3-sub\">Excellent Services</span>
\t\t<div class=\"services-w3ls-row\">
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts\">
\t\t\t\t<span class=\"glyphicon glyphicon-home effect-1\" aria-hidden=\"true\"></span>
\t\t\t\t<h5>Renting Services</h5>
\t\t\t\t<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts\">
\t\t\t\t<span class=\"glyphicon glyphicon-cog effect-1\" aria-hidden=\"true\"></span>
\t\t\t\t<h5>Property Listing</h5>
\t\t\t\t<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts\">
\t\t\t\t<span class=\"glyphicon glyphicon-map-marker effect-1\" aria-hidden=\"true\"></span>
\t\t\t\t<h5>Various Locations</h5>
\t\t\t\t<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
\t\t\t</div> 
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>  
\t</div>
</div>
<!-- //services -->
<!-- team -->
<!-- <div class=\"team\" id=\"team\">
\t<div class=\"team-dot\">
\t\t<div class=\"container\">
\t\t\t<div class=\"w3-agile-heading team-heading\">
\t\t\t\t<h3 class=\"w3l-title\">Meet the Team</h3>
\t\t\t\t<span class=\"w3-sub\">An Award Winning Bunch</span>
\t\t\t</div>
\t\t\t<div class=\"agileits-team-grids\">
\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 agileits-team-grid\">
\t\t\t\t\t<div class=\"team-info\">
\t\t\t\t\t\t<img src=\"images/t1.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"team-caption\"> 
\t\t\t\t\t\t\t<h4>Mark Duncan</h4>
\t\t\t\t\t\t\t<p>Founder</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 agileits-team-grid\">
\t\t\t\t\t<div class=\"team-info\">
\t\t\t\t\t\t<img src=\"images/t2.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"team-caption\"> 
\t\t\t\t\t\t\t<h4>Cynthia Baker</h4>
\t\t\t\t\t\t\t<p>Broker</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 agileits-team-grid\">
\t\t\t\t\t<div class=\"team-info\">
\t\t\t\t\t\t<img src=\"images/t3.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"team-caption\"> 
\t\t\t\t\t\t\t<h4>Peter Wright</h4>
\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 agileits-team-grid\">
\t\t\t\t\t<div class=\"team-info\">
\t\t\t\t\t\t<img src=\"images/t4.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"team-caption\"> 
\t\t\t\t\t\t\t<h4>Steven Wilson</h4>
\t\t\t\t\t\t\t<p>Broker</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>  -->
<!-- //team -->
<!-- feature -->

<!-- //testimonials -->
<!-- gallery -->
<!-- <div id=\"gallery\" class=\"gallery\">  
\t<div class=\"container\"> 
\t\t<h3 class=\"w3l-title\">Our Gallery</h3>
\t\t<span class=\"w3-sub\">See Our Work Projects</span>
\t</div>
\t<div class=\"agileinfo-gallery-row\">
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/6.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/6.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div> 
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/5.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/5.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/7.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/7.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/8.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/8.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/1.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/1.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div> 
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/2.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/2.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/3.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/3.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/4.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/4.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div> 
</div> -->
<!-- //gallery -->
<!-- contact -->
";
        // line 288
        $this->displayBlock('aside', $context, $blocks);
        // line 290
        $this->displayBlock('plus', $context, $blocks);
        // line 363
        echo "<!-- //contact address-->
<!-- //contact -->
<!-- footer -->
<div class=\"footer\">
\t";
        // line 367
        $this->displayBlock('footer', $context, $blocks);
        // line 411
        echo "<!-- //copy right -->
<!-- //footer --> 

<!-- js-scripts -->\t\t\t
\t<!-- js -->
\t";
        // line 416
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_589524aa242b5c639013c36d541e4ea1ac577a6c4b17fa291fddfc73ac4a5704->leave($__internal_589524aa242b5c639013c36d541e4ea1ac577a6c4b17fa291fddfc73ac4a5704_prof);

        
        $__internal_1fe13c1aa7177af9ff2865ca60319a649b3cc2e421d3089ea369d201108f5f8d->leave($__internal_1fe13c1aa7177af9ff2865ca60319a649b3cc2e421d3089ea369d201108f5f8d_prof);

    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
        $__internal_836d07294f4c8842dca22f158168ea11c478abcc3d97208198ea2958102fa546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836d07294f4c8842dca22f158168ea11c478abcc3d97208198ea2958102fa546->enter($__internal_836d07294f4c8842dca22f158168ea11c478abcc3d97208198ea2958102fa546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_efe10aa07ac90b30f97ab12aab93515b4d7b13526f31ef049d6c2e3df1bd7343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe10aa07ac90b30f97ab12aab93515b4d7b13526f31ef049d6c2e3df1bd7343->enter($__internal_efe10aa07ac90b30f97ab12aab93515b4d7b13526f31ef049d6c2e3df1bd7343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "
";
        
        $__internal_efe10aa07ac90b30f97ab12aab93515b4d7b13526f31ef049d6c2e3df1bd7343->leave($__internal_efe10aa07ac90b30f97ab12aab93515b4d7b13526f31ef049d6c2e3df1bd7343_prof);

        
        $__internal_836d07294f4c8842dca22f158168ea11c478abcc3d97208198ea2958102fa546->leave($__internal_836d07294f4c8842dca22f158168ea11c478abcc3d97208198ea2958102fa546_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_14d8c64925adac7015872c5e8e43ea3e6c606cdc3bc60c02d20eb396e64da0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d8c64925adac7015872c5e8e43ea3e6c606cdc3bc60c02d20eb396e64da0d8->enter($__internal_14d8c64925adac7015872c5e8e43ea3e6c606cdc3bc60c02d20eb396e64da0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9cb6464b84bcf668ddad1c007c8643895ee74a983328aa6ec27f97021780a4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb6464b84bcf668ddad1c007c8643895ee74a983328aa6ec27f97021780a4c5->enter($__internal_9cb6464b84bcf668ddad1c007c8643895ee74a983328aa6ec27f97021780a4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "\t<!-- Navigation -->
\t<nav class=\"navbar navbar-default\">
\t\t<div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t\t\t<span class=\"sr-only\">AK1/2IMMO </span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<h1><a class=\"logo\" href=\"index.html\"><span>A</span>K1/2-IMMO</a></h1>
\t\t</div> 
\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
\t\t\t\t<li class=\"active\"><a href=\"\">Home</a></li>
\t\t\t\t<li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprio");
        echo "\">Proposer Bien</a></li>
\t\t\t\t";
        // line 60
        echo "\t\t\t\t";
        // line 61
        echo "\t\t\t\t";
        // line 62
        echo "\t\t\t\t<li><a class=\"scroll scroll\" href=\"#gallery\">Gallery</a></li>
\t\t\t\t";
        // line 64
        echo "\t\t\t</ul>
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</nav>  
\t<div class=\"w3ls_search\">
\t\t<div class=\"cd-main-header\">
\t\t\t<ul class=\"cd-header-buttons\">
\t\t\t\t<li><a class=\"cd-search-trigger\" href=\"#cd-search\"> <span></span></a></li>
\t\t\t</ul> <!-- cd-header-buttons -->
\t\t</div>
\t\t<div id=\"cd-search\" class=\"cd-search\">
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t<input name=\"Search\" type=\"search\" placeholder=\"Click enter after typing...\" required=\"\">
\t\t\t</form>
\t\t</div>
\t</div>
\t";
        
        $__internal_9cb6464b84bcf668ddad1c007c8643895ee74a983328aa6ec27f97021780a4c5->leave($__internal_9cb6464b84bcf668ddad1c007c8643895ee74a983328aa6ec27f97021780a4c5_prof);

        
        $__internal_14d8c64925adac7015872c5e8e43ea3e6c606cdc3bc60c02d20eb396e64da0d8->leave($__internal_14d8c64925adac7015872c5e8e43ea3e6c606cdc3bc60c02d20eb396e64da0d8_prof);

    }

    // line 288
    public function block_aside($context, array $blocks = array())
    {
        $__internal_814d5cd6460061affc6fba1064a8309d4589c9e66853aae58c479b871f005d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814d5cd6460061affc6fba1064a8309d4589c9e66853aae58c479b871f005d2c->enter($__internal_814d5cd6460061affc6fba1064a8309d4589c9e66853aae58c479b871f005d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_b3e04176a994909b0d0466ed085107290c4a0b0aada2435c87b6d16bea081fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e04176a994909b0d0466ed085107290c4a0b0aada2435c87b6d16bea081fb4->enter($__internal_b3e04176a994909b0d0466ed085107290c4a0b0aada2435c87b6d16bea081fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        
        $__internal_b3e04176a994909b0d0466ed085107290c4a0b0aada2435c87b6d16bea081fb4->leave($__internal_b3e04176a994909b0d0466ed085107290c4a0b0aada2435c87b6d16bea081fb4_prof);

        
        $__internal_814d5cd6460061affc6fba1064a8309d4589c9e66853aae58c479b871f005d2c->leave($__internal_814d5cd6460061affc6fba1064a8309d4589c9e66853aae58c479b871f005d2c_prof);

    }

    // line 290
    public function block_plus($context, array $blocks = array())
    {
        $__internal_e2fdf860eb070a6dd97acb59b977df47e20d55a04e27d427091326a1ce2c7e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fdf860eb070a6dd97acb59b977df47e20d55a04e27d427091326a1ce2c7e04->enter($__internal_e2fdf860eb070a6dd97acb59b977df47e20d55a04e27d427091326a1ce2c7e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_2c6f55cca9d6d645345415851fa7c0af55234e3849a52a4ef5d6e406a404e69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6f55cca9d6d645345415851fa7c0af55234e3849a52a4ef5d6e406a404e69f->enter($__internal_2c6f55cca9d6d645345415851fa7c0af55234e3849a52a4ef5d6e406a404e69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        // line 291
        echo "<div class=\"agileits_w3layouts_contact\" id=\"contact\">
\t<div class=\"container\"> 
\t\t<h3 class=\"w3l-title\">Contact Us</h3>
\t\t<span class=\"w3-sub\">Write a Message</span>
\t\t<div class=\"w3_mail_grids\">
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t<span class=\"input\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Your Name\" name=\"Email\" required=\"\">
\t\t\t\t</span>
\t\t\t\t<span class=\"input\">
\t\t\t\t\t<input type=\"email\" placeholder=\"Your Email\" name=\"Email\" required=\"\">
\t\t\t\t</span>
\t\t\t\t<span class=\"input\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Phone Number\" name=\"Email\" required=\"\">
\t\t\t\t</span>
\t\t\t\t<textarea name=\"Message\" placeholder=\"Message...\" required=\"\"></textarea>
\t\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<!-- contact address-->
<div class=\"contact-row agileits-w3layouts\">  
\t<div class=\"col-md-7 contact-w3lsright\">
\t\t<div class=\"col-xs-6 address-row\">
\t\t\t<div class=\"col-xs-2 address-left\">
\t\t\t\t<span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10 address-right\">
\t\t\t\t<h5>Visit Us</h5>
\t\t\t\t<p>Canada, New York </p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"col-xs-6 address-row w3-agileits\">
\t\t\t<div class=\"col-xs-2 address-left\">
\t\t\t\t<span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10 address-right\">
\t\t\t\t<h5>Mail Us</h5>
\t\t\t\t<p><a href=\"mailto:info@example.com\"> mail@example.com </a></p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"col-xs-6 address-row\">
\t\t\t<div class=\"col-xs-2 address-left\">
\t\t\t\t<span class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10 address-right\">
\t\t\t\t<h5>Call Us</h5>
\t\t\t\t<p>+01 222 333 4444</p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div> 
\t\t<div class=\"col-xs-6 address-row\">
\t\t\t<div class=\"col-xs-2 address-left\">
\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10 address-right\">
\t\t\t\t<h5>Working Hours</h5>
\t\t\t\t<p>Mon - Fri : 8:00 am to 10:30 pm</p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"clearfix\"> </div>\t
\t</div>
\t<div class=\"col-md-5 contact-w3lsleft map\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.948805392833!2d-73.99619098458929!3d40.71914347933105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1479793484055\"></iframe>
\t</div>
\t<div class=\"clearfix\"> </div>
</div>
";
        
        $__internal_2c6f55cca9d6d645345415851fa7c0af55234e3849a52a4ef5d6e406a404e69f->leave($__internal_2c6f55cca9d6d645345415851fa7c0af55234e3849a52a4ef5d6e406a404e69f_prof);

        
        $__internal_e2fdf860eb070a6dd97acb59b977df47e20d55a04e27d427091326a1ce2c7e04->leave($__internal_e2fdf860eb070a6dd97acb59b977df47e20d55a04e27d427091326a1ce2c7e04_prof);

    }

    // line 367
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c101d1fffa3af29946d0c072aa5a122e73b3c9f26c551be3b9449ac758b41acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c101d1fffa3af29946d0c072aa5a122e73b3c9f26c551be3b9449ac758b41acd->enter($__internal_c101d1fffa3af29946d0c072aa5a122e73b3c9f26c551be3b9449ac758b41acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_313a35ce1b9b885b79dd1519407c5cf28eb5d81f08a794a65af1b47c7efa5fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313a35ce1b9b885b79dd1519407c5cf28eb5d81f08a794a65af1b47c7efa5fc0->enter($__internal_313a35ce1b9b885b79dd1519407c5cf28eb5d81f08a794a65af1b47c7efa5fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 368
        echo "\t<div class=\"container\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"col-md-4 amet-sed fir-w3l\"> 
\t\t\t\t<div class=\"footer-nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#home\">Home</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#about\">About</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#services\">Services</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#team\">Team</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#gallery\">Gallery</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#contact\">Contact Us</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"w3ls-social-icons-2\">
\t\t\t\t\t<a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t<a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t<a class=\"pinterest\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t<a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t<a class=\"tumblr\" href=\"#\"><i class=\"fa fa-tumblr\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 amet-sed amet-medium\">
\t\t\t\t<h2><a class=\"logo\" href=\"index.html\">AK1/2-IMMO</a></h2>
\t\t\t\t<div class=\"ag-w3-3\">
\t\t\t\t\t<a href=\"#home\" class=\"scroll\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i> Back to Top</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 amet-sed thi-w3l\">
\t\t\t\t<div class=\"support\">
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Enter email....\" required=\"\"> 
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"SUBMIT\" class=\"botton\">
\t\t\t\t\t</form> 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t</div>
</div>
<!-- copy right -->
<p class=\"footer-class\">© 2018 AK1/2-IMMO. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">FAKY</a> </p>
";
        
        $__internal_313a35ce1b9b885b79dd1519407c5cf28eb5d81f08a794a65af1b47c7efa5fc0->leave($__internal_313a35ce1b9b885b79dd1519407c5cf28eb5d81f08a794a65af1b47c7efa5fc0_prof);

        
        $__internal_c101d1fffa3af29946d0c072aa5a122e73b3c9f26c551be3b9449ac758b41acd->leave($__internal_c101d1fffa3af29946d0c072aa5a122e73b3c9f26c551be3b9449ac758b41acd_prof);

    }

    // line 416
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd3e7383751b5141f04571180f0d20f194d44d3aea62ec307a1b8e5c83d08e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3e7383751b5141f04571180f0d20f194d44d3aea62ec307a1b8e5c83d08e22->enter($__internal_fd3e7383751b5141f04571180f0d20f194d44d3aea62ec307a1b8e5c83d08e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d3645ecdf509465f27eeff32bedf0775c8d65b140d9140bfa6fff5aa515e3cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3645ecdf509465f27eeff32bedf0775c8d65b140d9140bfa6fff5aa515e3cca->enter($__internal_d3645ecdf509465f27eeff32bedf0775c8d65b140d9140bfa6fff5aa515e3cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 417
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
\t<!-- //js -->
\t<!-- Flexslider-js for-testimonials -->
\t<script type=\"text/javascript\">
\t\$(window).load(function() {
\t\$(\"#flexiselDemo1\").flexisel({
\t\tvisibleItems:1,
\t\tanimationSpeed: 1000,
\t\tautoPlay:false,
\t\tautoPlaySpeed: 3000,    \t\t
\t\tpauseOnHover: true,
\t\tenableResponsiveBreakpoints: true,
\t\tresponsiveBreakpoints: { 
\t\t\tportrait: { 
\t\t\t\tchangePoint:480,
\t\t\t\tvisibleItems: 1
\t\t\t}, 
\t\t\tlandscape: { 
\t\t\t\tchangePoint:640,
\t\t\t\tvisibleItems:1
\t\t\t},
\t\t\ttablet: { 
\t\t\t\tchangePoint:768,
\t\t\t\tvisibleItems: 1
\t\t\t}
\t\t}
\t});

\t});
\t</script>
\t<script type=\"text/javascript\" src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexisel.js"), "html", null, true);
        echo "\"></script>
\t<!-- //Flexslider-js for-testimonials -->
\t<!-- Gallery -->
\t<script type=\"text/javascript\" src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/simple-lightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t\$(function(){
\t\t\t\tvar gallery = \$('.agileinfo-gallery-row a').simpleLightbox({navText:\t\t['&lsaquo;','&rsaquo;']});
\t\t\t});
\t\t</script> 
\t<!-- //Gallery -->
\t<!-- start-smoth-scrolling -->
\t<script type=\"text/javascript\" src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function(\$) {
\t\t\t\$(\".scroll\").click(function(event){\t\t
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
\t\t\t});
\t\t});
\t</script>
\t<!-- start-smoth-scrolling -->
\t<!-- smooth scrolling -->
\t<script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- //smooth scrolling -->
\t<!-- search-jQuery -->
\t<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t<!-- //search-jQuery -->
\t
<!-- //js-scripts -->
";
        
        $__internal_d3645ecdf509465f27eeff32bedf0775c8d65b140d9140bfa6fff5aa515e3cca->leave($__internal_d3645ecdf509465f27eeff32bedf0775c8d65b140d9140bfa6fff5aa515e3cca_prof);

        
        $__internal_fd3e7383751b5141f04571180f0d20f194d44d3aea62ec307a1b8e5c83d08e22->leave($__internal_fd3e7383751b5141f04571180f0d20f194d44d3aea62ec307a1b8e5c83d08e22_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  771 => 474,  765 => 471,  751 => 460,  747 => 459,  736 => 451,  730 => 448,  697 => 418,  692 => 417,  683 => 416,  631 => 368,  622 => 367,  541 => 291,  532 => 290,  515 => 288,  489 => 64,  486 => 62,  484 => 61,  482 => 60,  478 => 58,  460 => 42,  451 => 41,  440 => 36,  431 => 35,  421 => 416,  414 => 411,  412 => 367,  406 => 363,  404 => 290,  402 => 288,  193 => 81,  191 => 41,  186 => 38,  184 => 35,  175 => 34,  157 => 23,  153 => 22,  149 => 21,  144 => 20,  135 => 19,  123 => 14,  114 => 13,  103 => 7,  94 => 6,  84 => 19,  80 => 17,  78 => 13,  72 => 9,  70 => 6,  61 => 5,  50 => 480,  48 => 34,  44 => 32,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t{% block head %}
{% block title %}
\t<title>AK1/2IMMO</title>
{% endblock %}
<!-- Meta tag Keywords -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Assets web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
{% block javascript%}
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
{% endblock %}
<!--// Meta tag Keywords -->
<!-- css files -->
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\"> <!-- Bootstrap-Core-CSS -->
<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\" type=\"text/css\" media=\"all\" /> <!-- Style-CSS --> 
<link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.css')}}\"> <!-- Font-Awesome-Icons-CSS -->
<link href=\"{{asset('css/simplelightbox.min.css')}}\" rel='stylesheet' type='text/css'>   
<!-- //css files -->
<!-- online-fonts -->
<link href=\"//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
<link href=\"//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900\" rel=\"stylesheet\">
<link href=\"//fonts.googleapis.com/css?family=Italianno\" rel=\"stylesheet\">
<!-- //online-fonts -->
{% endblock %}
{% endblock %}
</head>
<body> 
{% block body %}
{% block main%}

{% endblock %}
<!-- //banner --> 
<!-- header -->
<div class=\"header-w3layouts\"> 
\t{% block header %}
\t<!-- Navigation -->
\t<nav class=\"navbar navbar-default\">
\t\t<div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t\t\t<span class=\"sr-only\">AK1/2IMMO </span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<h1><a class=\"logo\" href=\"index.html\"><span>A</span>K1/2-IMMO</a></h1>
\t\t</div> 
\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
\t\t\t\t<li class=\"active\"><a href=\"\">Home</a></li>
\t\t\t\t<li><a href=\"{{path('proprio')}}\">Proposer Bien</a></li>
\t\t\t\t{# <li><a class=\"scroll scroll\" href=\"proprio.html.twig\">Proposer Bien</a></li> #}
\t\t\t\t{# <li><a class=\"scroll scroll\" href=\"#services\">Services</a></li> #}
\t\t\t\t{# <li><a class=\"scroll scroll\" href=\"#team\">Team</a></li> #}
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#gallery\">Gallery</a></li>
\t\t\t\t{# <li><a class=\"scroll scroll\" href=\"#contact\">Contact Us</a></li> #}
\t\t\t</ul>
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</nav>  
\t<div class=\"w3ls_search\">
\t\t<div class=\"cd-main-header\">
\t\t\t<ul class=\"cd-header-buttons\">
\t\t\t\t<li><a class=\"cd-search-trigger\" href=\"#cd-search\"> <span></span></a></li>
\t\t\t</ul> <!-- cd-header-buttons -->
\t\t</div>
\t\t<div id=\"cd-search\" class=\"cd-search\">
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t<input name=\"Search\" type=\"search\" placeholder=\"Click enter after typing...\" required=\"\">
\t\t\t</form>
\t\t</div>
\t</div>
\t{% endblock %}
</div>\t

<!-- //header -->
<!-- Modal -->
<!-- <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\">
\t\t<!-- Modal content-->
\t<!-- \t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<img src=\"images/3.jpg\" alt=\" \" class=\"img-responsive\">
\t\t\t\t\t<h5>Donec lobortis pharetra dolor</h5>
\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable..</p>
\t\t\t</div>
\t\t</div> -->
\t\t<!-- //Modal content -->
<!-- \t</div>
</div> -->
<!-- //Modal -->
<!-- about -->


<!-- //about -->
<!-- services -->
<!-- <div id=\"services\" class=\"services\">
\t<div class=\"container\">  
\t\t<h3 class=\"w3l-title w3l\">Our Services</h3>
\t\t<span class=\"w3-sub\">Excellent Services</span>
\t\t<div class=\"services-w3ls-row\">
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts\">
\t\t\t\t<span class=\"glyphicon glyphicon-home effect-1\" aria-hidden=\"true\"></span>
\t\t\t\t<h5>Renting Services</h5>
\t\t\t\t<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts\">
\t\t\t\t<span class=\"glyphicon glyphicon-cog effect-1\" aria-hidden=\"true\"></span>
\t\t\t\t<h5>Property Listing</h5>
\t\t\t\t<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts\">
\t\t\t\t<span class=\"glyphicon glyphicon-map-marker effect-1\" aria-hidden=\"true\"></span>
\t\t\t\t<h5>Various Locations</h5>
\t\t\t\t<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
\t\t\t</div> 
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>  
\t</div>
</div>
<!-- //services -->
<!-- team -->
<!-- <div class=\"team\" id=\"team\">
\t<div class=\"team-dot\">
\t\t<div class=\"container\">
\t\t\t<div class=\"w3-agile-heading team-heading\">
\t\t\t\t<h3 class=\"w3l-title\">Meet the Team</h3>
\t\t\t\t<span class=\"w3-sub\">An Award Winning Bunch</span>
\t\t\t</div>
\t\t\t<div class=\"agileits-team-grids\">
\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 agileits-team-grid\">
\t\t\t\t\t<div class=\"team-info\">
\t\t\t\t\t\t<img src=\"images/t1.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"team-caption\"> 
\t\t\t\t\t\t\t<h4>Mark Duncan</h4>
\t\t\t\t\t\t\t<p>Founder</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 agileits-team-grid\">
\t\t\t\t\t<div class=\"team-info\">
\t\t\t\t\t\t<img src=\"images/t2.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"team-caption\"> 
\t\t\t\t\t\t\t<h4>Cynthia Baker</h4>
\t\t\t\t\t\t\t<p>Broker</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 agileits-team-grid\">
\t\t\t\t\t<div class=\"team-info\">
\t\t\t\t\t\t<img src=\"images/t3.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"team-caption\"> 
\t\t\t\t\t\t\t<h4>Peter Wright</h4>
\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 agileits-team-grid\">
\t\t\t\t\t<div class=\"team-info\">
\t\t\t\t\t\t<img src=\"images/t4.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"team-caption\"> 
\t\t\t\t\t\t\t<h4>Steven Wilson</h4>
\t\t\t\t\t\t\t<p>Broker</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>  -->
<!-- //team -->
<!-- feature -->

<!-- //testimonials -->
<!-- gallery -->
<!-- <div id=\"gallery\" class=\"gallery\">  
\t<div class=\"container\"> 
\t\t<h3 class=\"w3l-title\">Our Gallery</h3>
\t\t<span class=\"w3-sub\">See Our Work Projects</span>
\t</div>
\t<div class=\"agileinfo-gallery-row\">
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/6.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/6.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div> 
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/5.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/5.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/7.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/7.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/8.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/8.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/1.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/1.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div> 
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/2.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/2.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/3.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/3.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 col-xs-6 w3gallery-grids\">
\t\t\t<a href=\"images/4.jpg\" class=\"imghvr-hinge-right figure\">
\t\t\t\t<img src=\"images/4.jpg\" alt=\"\" title=\"Assets  Image\"/> 
\t\t\t\t<div class=\"agile-figcaption\">
\t\t\t\t  <h4>Assets </h4>
\t\t\t\t  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
\t\t\t\t</div>
\t\t\t</a> 
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div> 
</div> -->
<!-- //gallery -->
<!-- contact -->
{% block aside %}
{% endblock %}
{% block plus %}
<div class=\"agileits_w3layouts_contact\" id=\"contact\">
\t<div class=\"container\"> 
\t\t<h3 class=\"w3l-title\">Contact Us</h3>
\t\t<span class=\"w3-sub\">Write a Message</span>
\t\t<div class=\"w3_mail_grids\">
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t<span class=\"input\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Your Name\" name=\"Email\" required=\"\">
\t\t\t\t</span>
\t\t\t\t<span class=\"input\">
\t\t\t\t\t<input type=\"email\" placeholder=\"Your Email\" name=\"Email\" required=\"\">
\t\t\t\t</span>
\t\t\t\t<span class=\"input\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Phone Number\" name=\"Email\" required=\"\">
\t\t\t\t</span>
\t\t\t\t<textarea name=\"Message\" placeholder=\"Message...\" required=\"\"></textarea>
\t\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<!-- contact address-->
<div class=\"contact-row agileits-w3layouts\">  
\t<div class=\"col-md-7 contact-w3lsright\">
\t\t<div class=\"col-xs-6 address-row\">
\t\t\t<div class=\"col-xs-2 address-left\">
\t\t\t\t<span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10 address-right\">
\t\t\t\t<h5>Visit Us</h5>
\t\t\t\t<p>Canada, New York </p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"col-xs-6 address-row w3-agileits\">
\t\t\t<div class=\"col-xs-2 address-left\">
\t\t\t\t<span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10 address-right\">
\t\t\t\t<h5>Mail Us</h5>
\t\t\t\t<p><a href=\"mailto:info@example.com\"> mail@example.com </a></p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"col-xs-6 address-row\">
\t\t\t<div class=\"col-xs-2 address-left\">
\t\t\t\t<span class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10 address-right\">
\t\t\t\t<h5>Call Us</h5>
\t\t\t\t<p>+01 222 333 4444</p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div> 
\t\t<div class=\"col-xs-6 address-row\">
\t\t\t<div class=\"col-xs-2 address-left\">
\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10 address-right\">
\t\t\t\t<h5>Working Hours</h5>
\t\t\t\t<p>Mon - Fri : 8:00 am to 10:30 pm</p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"clearfix\"> </div>\t
\t</div>
\t<div class=\"col-md-5 contact-w3lsleft map\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.948805392833!2d-73.99619098458929!3d40.71914347933105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1479793484055\"></iframe>
\t</div>
\t<div class=\"clearfix\"> </div>
</div>
{% endblock %}
<!-- //contact address-->
<!-- //contact -->
<!-- footer -->
<div class=\"footer\">
\t{% block footer %}
\t<div class=\"container\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"col-md-4 amet-sed fir-w3l\"> 
\t\t\t\t<div class=\"footer-nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#home\">Home</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#about\">About</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#services\">Services</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#team\">Team</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#gallery\">Gallery</a></li>
\t\t\t\t\t\t<li><a class=\"menu__link scroll\" href=\"#contact\">Contact Us</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"w3ls-social-icons-2\">
\t\t\t\t\t<a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t<a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t<a class=\"pinterest\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t<a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t<a class=\"tumblr\" href=\"#\"><i class=\"fa fa-tumblr\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 amet-sed amet-medium\">
\t\t\t\t<h2><a class=\"logo\" href=\"index.html\">AK1/2-IMMO</a></h2>
\t\t\t\t<div class=\"ag-w3-3\">
\t\t\t\t\t<a href=\"#home\" class=\"scroll\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i> Back to Top</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 amet-sed thi-w3l\">
\t\t\t\t<div class=\"support\">
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Enter email....\" required=\"\"> 
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"SUBMIT\" class=\"botton\">
\t\t\t\t\t</form> 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t</div>
</div>
<!-- copy right -->
<p class=\"footer-class\">© 2018 AK1/2-IMMO. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">FAKY</a> </p>
{% endblock %}
<!-- //copy right -->
<!-- //footer --> 

<!-- js-scripts -->\t\t\t
\t<!-- js -->
\t{% block javascripts %}
\t<script type=\"text/javascript\" src=\"{{asset('js/jquery-2.1.4.min.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{asset('js/bootstrap.js')}}\"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
\t<!-- //js -->
\t<!-- Flexslider-js for-testimonials -->
\t<script type=\"text/javascript\">
\t\$(window).load(function() {
\t\$(\"#flexiselDemo1\").flexisel({
\t\tvisibleItems:1,
\t\tanimationSpeed: 1000,
\t\tautoPlay:false,
\t\tautoPlaySpeed: 3000,    \t\t
\t\tpauseOnHover: true,
\t\tenableResponsiveBreakpoints: true,
\t\tresponsiveBreakpoints: { 
\t\t\tportrait: { 
\t\t\t\tchangePoint:480,
\t\t\t\tvisibleItems: 1
\t\t\t}, 
\t\t\tlandscape: { 
\t\t\t\tchangePoint:640,
\t\t\t\tvisibleItems:1
\t\t\t},
\t\t\ttablet: { 
\t\t\t\tchangePoint:768,
\t\t\t\tvisibleItems: 1
\t\t\t}
\t\t}
\t});

\t});
\t</script>
\t<script type=\"text/javascript\" src=\"{{asset('js/jquery.flexisel.js')}}\"></script>
\t<!-- //Flexslider-js for-testimonials -->
\t<!-- Gallery -->
\t<script type=\"text/javascript\" src=\"{{asset('js/simple-lightbox.min.js')}}\"></script>
\t\t<script>
\t\t\t\$(function(){
\t\t\t\tvar gallery = \$('.agileinfo-gallery-row a').simpleLightbox({navText:\t\t['&lsaquo;','&rsaquo;']});
\t\t\t});
\t\t</script> 
\t<!-- //Gallery -->
\t<!-- start-smoth-scrolling -->
\t<script type=\"text/javascript\" src=\"{{asset('js/move-top.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{asset('js/easing.js')}}\"></script>
\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function(\$) {
\t\t\t\$(\".scroll\").click(function(event){\t\t
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
\t\t\t});
\t\t});
\t</script>
\t<!-- start-smoth-scrolling -->
\t<!-- smooth scrolling -->
\t<script src=\"{{asset('js/SmoothScroll.min.js')}}\"></script>
\t<!-- //smooth scrolling -->
\t<!-- search-jQuery -->
\t<script src=\"{{asset('js/main.js')}}\"></script>
\t<!-- //search-jQuery -->
\t
<!-- //js-scripts -->
{% endblock %}
{% endblock %}
</body>
</html>", "::base.html.twig", "/var/www/html/fakymmo/app/Resources/views/base.html.twig");
    }
}
