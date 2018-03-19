<?php

/* ::base1.html.twig */
class __TwigTemplate_3ce8f0adc6ed6850b5d1ffb495ba4c1f11fb835b530b122add90b2e4492b2c33 extends Twig_Template
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
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'aside' => array($this, 'block_aside'),
            'plus' => array($this, 'block_plus'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68dff8e3077c851aeedca89f28fb13df01725cefe33c9b20d74a3082a9a12d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68dff8e3077c851aeedca89f28fb13df01725cefe33c9b20d74a3082a9a12d68->enter($__internal_68dff8e3077c851aeedca89f28fb13df01725cefe33c9b20d74a3082a9a12d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        $__internal_6687bdbe308f67e542fbea8716dcaea928a79e6d990c6a4325f570d052c50ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6687bdbe308f67e542fbea8716dcaea928a79e6d990c6a4325f570d052c50ca4->enter($__internal_6687bdbe308f67e542fbea8716dcaea928a79e6d990c6a4325f570d052c50ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
\t";
        // line 34
        $this->displayBlock('main', $context, $blocks);
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 484
        echo "</body>
</html>";
        
        $__internal_68dff8e3077c851aeedca89f28fb13df01725cefe33c9b20d74a3082a9a12d68->leave($__internal_68dff8e3077c851aeedca89f28fb13df01725cefe33c9b20d74a3082a9a12d68_prof);

        
        $__internal_6687bdbe308f67e542fbea8716dcaea928a79e6d990c6a4325f570d052c50ca4->leave($__internal_6687bdbe308f67e542fbea8716dcaea928a79e6d990c6a4325f570d052c50ca4_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_4403911fd9b0367e8e348103dc5df1c1f1b1425b58a50d3c41917b84b680ae98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4403911fd9b0367e8e348103dc5df1c1f1b1425b58a50d3c41917b84b680ae98->enter($__internal_4403911fd9b0367e8e348103dc5df1c1f1b1425b58a50d3c41917b84b680ae98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_703e8697e1ca899c2e1e2d02941e2137758903c61d9500f0b28b539469a1f505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703e8697e1ca899c2e1e2d02941e2137758903c61d9500f0b28b539469a1f505->enter($__internal_703e8697e1ca899c2e1e2d02941e2137758903c61d9500f0b28b539469a1f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_703e8697e1ca899c2e1e2d02941e2137758903c61d9500f0b28b539469a1f505->leave($__internal_703e8697e1ca899c2e1e2d02941e2137758903c61d9500f0b28b539469a1f505_prof);

        
        $__internal_4403911fd9b0367e8e348103dc5df1c1f1b1425b58a50d3c41917b84b680ae98->leave($__internal_4403911fd9b0367e8e348103dc5df1c1f1b1425b58a50d3c41917b84b680ae98_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d7f6684fd5a28b3ec18e617e8944904a93b43703f745ca9aa99e080d5bd18d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7f6684fd5a28b3ec18e617e8944904a93b43703f745ca9aa99e080d5bd18d6->enter($__internal_3d7f6684fd5a28b3ec18e617e8944904a93b43703f745ca9aa99e080d5bd18d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_507fc5b904a91648b86ede27ec1a511483b5919ee2673dc1798ce0ade0513e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507fc5b904a91648b86ede27ec1a511483b5919ee2673dc1798ce0ade0513e18->enter($__internal_507fc5b904a91648b86ede27ec1a511483b5919ee2673dc1798ce0ade0513e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "\t<title>AK1/2IMMO</title>
";
        
        $__internal_507fc5b904a91648b86ede27ec1a511483b5919ee2673dc1798ce0ade0513e18->leave($__internal_507fc5b904a91648b86ede27ec1a511483b5919ee2673dc1798ce0ade0513e18_prof);

        
        $__internal_3d7f6684fd5a28b3ec18e617e8944904a93b43703f745ca9aa99e080d5bd18d6->leave($__internal_3d7f6684fd5a28b3ec18e617e8944904a93b43703f745ca9aa99e080d5bd18d6_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_43b263b022ddd274f72422d7affe68ef562285581cb7394a09e9753166d19f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b263b022ddd274f72422d7affe68ef562285581cb7394a09e9753166d19f55->enter($__internal_43b263b022ddd274f72422d7affe68ef562285581cb7394a09e9753166d19f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_dd962e1432eaf240a31d563e52a4e5812ce3735bfc274ccdec62869c171da5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd962e1432eaf240a31d563e52a4e5812ce3735bfc274ccdec62869c171da5d1->enter($__internal_dd962e1432eaf240a31d563e52a4e5812ce3735bfc274ccdec62869c171da5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
";
        
        $__internal_dd962e1432eaf240a31d563e52a4e5812ce3735bfc274ccdec62869c171da5d1->leave($__internal_dd962e1432eaf240a31d563e52a4e5812ce3735bfc274ccdec62869c171da5d1_prof);

        
        $__internal_43b263b022ddd274f72422d7affe68ef562285581cb7394a09e9753166d19f55->leave($__internal_43b263b022ddd274f72422d7affe68ef562285581cb7394a09e9753166d19f55_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d16253cfc8863b809d572820471c486d8c11022b0076ec89b881a0e19a481e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16253cfc8863b809d572820471c486d8c11022b0076ec89b881a0e19a481e82->enter($__internal_d16253cfc8863b809d572820471c486d8c11022b0076ec89b881a0e19a481e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a245e258764cc86444aabdce8f90231cf9580d123dd52c56c5e1fb9fa9cd235a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a245e258764cc86444aabdce8f90231cf9580d123dd52c56c5e1fb9fa9cd235a->enter($__internal_a245e258764cc86444aabdce8f90231cf9580d123dd52c56c5e1fb9fa9cd235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a245e258764cc86444aabdce8f90231cf9580d123dd52c56c5e1fb9fa9cd235a->leave($__internal_a245e258764cc86444aabdce8f90231cf9580d123dd52c56c5e1fb9fa9cd235a_prof);

        
        $__internal_d16253cfc8863b809d572820471c486d8c11022b0076ec89b881a0e19a481e82->leave($__internal_d16253cfc8863b809d572820471c486d8c11022b0076ec89b881a0e19a481e82_prof);

    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
        $__internal_8d4fd669ce38a8feb4860cc6cd8b7f7e29df72cd2ba8434ad644ccbef77b4948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4fd669ce38a8feb4860cc6cd8b7f7e29df72cd2ba8434ad644ccbef77b4948->enter($__internal_8d4fd669ce38a8feb4860cc6cd8b7f7e29df72cd2ba8434ad644ccbef77b4948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_551f6dd2e8be104311cba6ff61f14994f894757866819f2bef605352dc45f613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551f6dd2e8be104311cba6ff61f14994f894757866819f2bef605352dc45f613->enter($__internal_551f6dd2e8be104311cba6ff61f14994f894757866819f2bef605352dc45f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 35
        echo "
";
        
        $__internal_551f6dd2e8be104311cba6ff61f14994f894757866819f2bef605352dc45f613->leave($__internal_551f6dd2e8be104311cba6ff61f14994f894757866819f2bef605352dc45f613_prof);

        
        $__internal_8d4fd669ce38a8feb4860cc6cd8b7f7e29df72cd2ba8434ad644ccbef77b4948->leave($__internal_8d4fd669ce38a8feb4860cc6cd8b7f7e29df72cd2ba8434ad644ccbef77b4948_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fa7f7ad20d97e1c5da847963a6dff59e226de4bde5bac0204cf675d4c6f43f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa7f7ad20d97e1c5da847963a6dff59e226de4bde5bac0204cf675d4c6f43f5->enter($__internal_1fa7f7ad20d97e1c5da847963a6dff59e226de4bde5bac0204cf675d4c6f43f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8b835cbdc59385b65065367fce2a6d725702d6a4227b330f821787b3c23cc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b835cbdc59385b65065367fce2a6d725702d6a4227b330f821787b3c23cc68->enter($__internal_a8b835cbdc59385b65065367fce2a6d725702d6a4227b330f821787b3c23cc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "
<!-- //banner --> 
<!-- header -->
<div class=\"header-w3layouts\"> 
\t";
        // line 42
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
        
        $__internal_a8b835cbdc59385b65065367fce2a6d725702d6a4227b330f821787b3c23cc68->leave($__internal_a8b835cbdc59385b65065367fce2a6d725702d6a4227b330f821787b3c23cc68_prof);

        
        $__internal_1fa7f7ad20d97e1c5da847963a6dff59e226de4bde5bac0204cf675d4c6f43f5->leave($__internal_1fa7f7ad20d97e1c5da847963a6dff59e226de4bde5bac0204cf675d4c6f43f5_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_3c72f3b875b93e4e8f0f2111cc0a2e5c9181cc3f2f19a8a881c3dfd3334f6616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c72f3b875b93e4e8f0f2111cc0a2e5c9181cc3f2f19a8a881c3dfd3334f6616->enter($__internal_3c72f3b875b93e4e8f0f2111cc0a2e5c9181cc3f2f19a8a881c3dfd3334f6616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d67608646a714f920c71ebab5a5bceedb1ad7692fa7b7a6cb723782279e077da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67608646a714f920c71ebab5a5bceedb1ad7692fa7b7a6cb723782279e077da->enter($__internal_d67608646a714f920c71ebab5a5bceedb1ad7692fa7b7a6cb723782279e077da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "\t<!-- Navigation -->
\t<nav class=\"navbar navbar-default\">
\t\t<!-- <div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t\t\t<span class=\"sr-only\">AK1/2IMMO </span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<h1><a class=\"logo\" href=\"index.html\"><span>A</span>K1/2-IMMO</a></h1>
\t\t</div>  -->
\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
\t\t\t\t<!-- <li class=\"active\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fk_immo");
        echo "\">Home</a></li> -->
\t\t\t\t<!-- <li><a class=\"scroll scroll\" href=\"#about\">About</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#services\">Services</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#team\">Team</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#gallery\">Gallery</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#contact\">Contact Us</a></li> -->
\t\t\t</ul>
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</nav>  
<!-- \t<div class=\"w3ls_search\">
\t\t<div class=\"cd-main-header\">
\t\t\t<ul class=\"cd-header-buttons\">
\t\t\t\t<li><a class=\"cd-search-trigger\" href=\"#cd-search\"> <span></span></a></li>
\t\t\t</ul> <!-- cd-header-buttons -->
\t<!-- \t</div>
\t\t<div id=\"cd-search\" class=\"cd-search\">
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t<input name=\"Search\" type=\"search\" placeholder=\"Click enter after typing...\" required=\"\">
\t\t\t</form>
\t\t</div>
\t</div>  -->
\t";
        
        $__internal_d67608646a714f920c71ebab5a5bceedb1ad7692fa7b7a6cb723782279e077da->leave($__internal_d67608646a714f920c71ebab5a5bceedb1ad7692fa7b7a6cb723782279e077da_prof);

        
        $__internal_3c72f3b875b93e4e8f0f2111cc0a2e5c9181cc3f2f19a8a881c3dfd3334f6616->leave($__internal_3c72f3b875b93e4e8f0f2111cc0a2e5c9181cc3f2f19a8a881c3dfd3334f6616_prof);

    }

    // line 288
    public function block_aside($context, array $blocks = array())
    {
        $__internal_055ce98afe550cefbb8634d3130f1c6417365911dd4cc1a9e84cce2d006f915c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055ce98afe550cefbb8634d3130f1c6417365911dd4cc1a9e84cce2d006f915c->enter($__internal_055ce98afe550cefbb8634d3130f1c6417365911dd4cc1a9e84cce2d006f915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_983c9b3592324ef7f8a3e146ba65dccb84ae729f8e19edf972932d840680a4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983c9b3592324ef7f8a3e146ba65dccb84ae729f8e19edf972932d840680a4c0->enter($__internal_983c9b3592324ef7f8a3e146ba65dccb84ae729f8e19edf972932d840680a4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        
        $__internal_983c9b3592324ef7f8a3e146ba65dccb84ae729f8e19edf972932d840680a4c0->leave($__internal_983c9b3592324ef7f8a3e146ba65dccb84ae729f8e19edf972932d840680a4c0_prof);

        
        $__internal_055ce98afe550cefbb8634d3130f1c6417365911dd4cc1a9e84cce2d006f915c->leave($__internal_055ce98afe550cefbb8634d3130f1c6417365911dd4cc1a9e84cce2d006f915c_prof);

    }

    // line 290
    public function block_plus($context, array $blocks = array())
    {
        $__internal_440bffe8f188d87d1d526d8d3554878bd4789c9cb7b5d97ee7dd63ce2cd3392c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440bffe8f188d87d1d526d8d3554878bd4789c9cb7b5d97ee7dd63ce2cd3392c->enter($__internal_440bffe8f188d87d1d526d8d3554878bd4789c9cb7b5d97ee7dd63ce2cd3392c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_cac4ba097b7311f4aa838cb13497e4c497a9d72158fa2b71bf60ac7680b2822e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac4ba097b7311f4aa838cb13497e4c497a9d72158fa2b71bf60ac7680b2822e->enter($__internal_cac4ba097b7311f4aa838cb13497e4c497a9d72158fa2b71bf60ac7680b2822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

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
        
        $__internal_cac4ba097b7311f4aa838cb13497e4c497a9d72158fa2b71bf60ac7680b2822e->leave($__internal_cac4ba097b7311f4aa838cb13497e4c497a9d72158fa2b71bf60ac7680b2822e_prof);

        
        $__internal_440bffe8f188d87d1d526d8d3554878bd4789c9cb7b5d97ee7dd63ce2cd3392c->leave($__internal_440bffe8f188d87d1d526d8d3554878bd4789c9cb7b5d97ee7dd63ce2cd3392c_prof);

    }

    // line 367
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ab12567f5272b7a3b0411018532f5714246632fc7b467acdac5c38b9c475c24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab12567f5272b7a3b0411018532f5714246632fc7b467acdac5c38b9c475c24d->enter($__internal_ab12567f5272b7a3b0411018532f5714246632fc7b467acdac5c38b9c475c24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_822e5be73b0dcf768be558d9d4e6b0f9c9959f424b33ee2b74a4bebf5fb11f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822e5be73b0dcf768be558d9d4e6b0f9c9959f424b33ee2b74a4bebf5fb11f12->enter($__internal_822e5be73b0dcf768be558d9d4e6b0f9c9959f424b33ee2b74a4bebf5fb11f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_822e5be73b0dcf768be558d9d4e6b0f9c9959f424b33ee2b74a4bebf5fb11f12->leave($__internal_822e5be73b0dcf768be558d9d4e6b0f9c9959f424b33ee2b74a4bebf5fb11f12_prof);

        
        $__internal_ab12567f5272b7a3b0411018532f5714246632fc7b467acdac5c38b9c475c24d->leave($__internal_ab12567f5272b7a3b0411018532f5714246632fc7b467acdac5c38b9c475c24d_prof);

    }

    // line 416
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e287c92881128761d43ef8c1bdc38b80428735a990897148bf79373e0ff12a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e287c92881128761d43ef8c1bdc38b80428735a990897148bf79373e0ff12a7b->enter($__internal_e287c92881128761d43ef8c1bdc38b80428735a990897148bf79373e0ff12a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5730130779c62a818f06a2f5f818f6bbdefbaf79ff481d4c983b34a82b0b6e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5730130779c62a818f06a2f5f818f6bbdefbaf79ff481d4c983b34a82b0b6e82->enter($__internal_5730130779c62a818f06a2f5f818f6bbdefbaf79ff481d4c983b34a82b0b6e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 417
        echo "\t<script
\t\t\t  src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
\t\t\t  integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
\t\t\t  crossorigin=\"anonymous\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 422
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
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexisel.js"), "html", null, true);
        echo "\"></script>
\t<!-- //Flexslider-js for-testimonials -->
\t<!-- Gallery -->
\t<script type=\"text/javascript\" src=\"";
        // line 455
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
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 464
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
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- //smooth scrolling -->
\t<!-- search-jQuery -->
\t<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t<!-- //search-jQuery -->
\t
<!-- //js-scripts -->
";
        
        $__internal_5730130779c62a818f06a2f5f818f6bbdefbaf79ff481d4c983b34a82b0b6e82->leave($__internal_5730130779c62a818f06a2f5f818f6bbdefbaf79ff481d4c983b34a82b0b6e82_prof);

        
        $__internal_e287c92881128761d43ef8c1bdc38b80428735a990897148bf79373e0ff12a7b->leave($__internal_e287c92881128761d43ef8c1bdc38b80428735a990897148bf79373e0ff12a7b_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  772 => 478,  766 => 475,  752 => 464,  748 => 463,  737 => 455,  731 => 452,  698 => 422,  694 => 421,  688 => 417,  679 => 416,  627 => 368,  618 => 367,  537 => 291,  528 => 290,  511 => 288,  478 => 58,  461 => 43,  452 => 42,  442 => 416,  435 => 411,  433 => 367,  427 => 363,  425 => 290,  423 => 288,  214 => 81,  212 => 42,  206 => 38,  197 => 37,  186 => 35,  177 => 34,  159 => 23,  155 => 22,  151 => 21,  146 => 20,  137 => 19,  125 => 14,  116 => 13,  105 => 7,  96 => 6,  86 => 19,  82 => 17,  80 => 13,  74 => 9,  72 => 6,  63 => 5,  52 => 484,  50 => 37,  48 => 34,  44 => 32,  42 => 5,  36 => 1,);
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
\t{% block main%}

{% endblock %}
{% block body %}

<!-- //banner --> 
<!-- header -->
<div class=\"header-w3layouts\"> 
\t{% block header %}
\t<!-- Navigation -->
\t<nav class=\"navbar navbar-default\">
\t\t<!-- <div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t\t\t<span class=\"sr-only\">AK1/2IMMO </span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<h1><a class=\"logo\" href=\"index.html\"><span>A</span>K1/2-IMMO</a></h1>
\t\t</div>  -->
\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
\t\t\t\t<!-- <li class=\"active\"><a href=\"{{path('fk_immo')}}\">Home</a></li> -->
\t\t\t\t<!-- <li><a class=\"scroll scroll\" href=\"#about\">About</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#services\">Services</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#team\">Team</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#gallery\">Gallery</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"#contact\">Contact Us</a></li> -->
\t\t\t</ul>
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</nav>  
<!-- \t<div class=\"w3ls_search\">
\t\t<div class=\"cd-main-header\">
\t\t\t<ul class=\"cd-header-buttons\">
\t\t\t\t<li><a class=\"cd-search-trigger\" href=\"#cd-search\"> <span></span></a></li>
\t\t\t</ul> <!-- cd-header-buttons -->
\t<!-- \t</div>
\t\t<div id=\"cd-search\" class=\"cd-search\">
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t<input name=\"Search\" type=\"search\" placeholder=\"Click enter after typing...\" required=\"\">
\t\t\t</form>
\t\t</div>
\t</div>  -->
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
\t<script
\t\t\t  src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
\t\t\t  integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
\t\t\t  crossorigin=\"anonymous\"></script>
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
</html>", "::base1.html.twig", "/var/www/html/fakymmo/app/Resources/views/base1.html.twig");
    }
}
