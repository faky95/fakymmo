<?php

/* ::base1.html.twig */
class __TwigTemplate_b052b3fa592060574d1772793424af8bd8c25261dcc98e89dc0c0a0a703fd531 extends Twig_Template
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
        $__internal_de9aa47bc3e7d38eef1579f24447cdf2440f5d26343375f78fcea13ad53b5c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9aa47bc3e7d38eef1579f24447cdf2440f5d26343375f78fcea13ad53b5c94->enter($__internal_de9aa47bc3e7d38eef1579f24447cdf2440f5d26343375f78fcea13ad53b5c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        $__internal_59d4e1fa77f21d7addd9ad44f708724fb3e5452647b203c3feeb2b7202df5575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d4e1fa77f21d7addd9ad44f708724fb3e5452647b203c3feeb2b7202df5575->enter($__internal_59d4e1fa77f21d7addd9ad44f708724fb3e5452647b203c3feeb2b7202df5575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
</html>

    ";
        
        $__internal_de9aa47bc3e7d38eef1579f24447cdf2440f5d26343375f78fcea13ad53b5c94->leave($__internal_de9aa47bc3e7d38eef1579f24447cdf2440f5d26343375f78fcea13ad53b5c94_prof);

        
        $__internal_59d4e1fa77f21d7addd9ad44f708724fb3e5452647b203c3feeb2b7202df5575->leave($__internal_59d4e1fa77f21d7addd9ad44f708724fb3e5452647b203c3feeb2b7202df5575_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd24078b8c27c08c9b8490321b56dd17290b9e1c2f447535f6734beb8246e34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd24078b8c27c08c9b8490321b56dd17290b9e1c2f447535f6734beb8246e34b->enter($__internal_dd24078b8c27c08c9b8490321b56dd17290b9e1c2f447535f6734beb8246e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5755d0628da91c3d74459be04d12640f64cfeabcb54cb9bf8ad816b4e69fdf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5755d0628da91c3d74459be04d12640f64cfeabcb54cb9bf8ad816b4e69fdf4->enter($__internal_d5755d0628da91c3d74459be04d12640f64cfeabcb54cb9bf8ad816b4e69fdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d5755d0628da91c3d74459be04d12640f64cfeabcb54cb9bf8ad816b4e69fdf4->leave($__internal_d5755d0628da91c3d74459be04d12640f64cfeabcb54cb9bf8ad816b4e69fdf4_prof);

        
        $__internal_dd24078b8c27c08c9b8490321b56dd17290b9e1c2f447535f6734beb8246e34b->leave($__internal_dd24078b8c27c08c9b8490321b56dd17290b9e1c2f447535f6734beb8246e34b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbc9ceb04737866b78b8934bebb6f2b843e307ee9aadf23effd009da81a00f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc9ceb04737866b78b8934bebb6f2b843e307ee9aadf23effd009da81a00f00->enter($__internal_cbc9ceb04737866b78b8934bebb6f2b843e307ee9aadf23effd009da81a00f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bf159628eb0dfdf26d8e9f4210ff8b1d7964443e29edb8a7fec63113e725520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf159628eb0dfdf26d8e9f4210ff8b1d7964443e29edb8a7fec63113e725520->enter($__internal_7bf159628eb0dfdf26d8e9f4210ff8b1d7964443e29edb8a7fec63113e725520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "\t<title>AK1/2IMMO</title>
";
        
        $__internal_7bf159628eb0dfdf26d8e9f4210ff8b1d7964443e29edb8a7fec63113e725520->leave($__internal_7bf159628eb0dfdf26d8e9f4210ff8b1d7964443e29edb8a7fec63113e725520_prof);

        
        $__internal_cbc9ceb04737866b78b8934bebb6f2b843e307ee9aadf23effd009da81a00f00->leave($__internal_cbc9ceb04737866b78b8934bebb6f2b843e307ee9aadf23effd009da81a00f00_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c8f3fdcb6c1924ace48e9015759c524b9799b2f25de61a47032467c7c7519ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f3fdcb6c1924ace48e9015759c524b9799b2f25de61a47032467c7c7519ca0->enter($__internal_c8f3fdcb6c1924ace48e9015759c524b9799b2f25de61a47032467c7c7519ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_8f5e0f7e991dfdbb44f834f884326a373cbafde5bbd142411eda1983368aa71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5e0f7e991dfdbb44f834f884326a373cbafde5bbd142411eda1983368aa71a->enter($__internal_8f5e0f7e991dfdbb44f834f884326a373cbafde5bbd142411eda1983368aa71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
";
        
        $__internal_8f5e0f7e991dfdbb44f834f884326a373cbafde5bbd142411eda1983368aa71a->leave($__internal_8f5e0f7e991dfdbb44f834f884326a373cbafde5bbd142411eda1983368aa71a_prof);

        
        $__internal_c8f3fdcb6c1924ace48e9015759c524b9799b2f25de61a47032467c7c7519ca0->leave($__internal_c8f3fdcb6c1924ace48e9015759c524b9799b2f25de61a47032467c7c7519ca0_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b5e873d52e2d8e85dfd22e623fd4ae0c12f411b18c62e18eedd45a70eb8b6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5e873d52e2d8e85dfd22e623fd4ae0c12f411b18c62e18eedd45a70eb8b6aa->enter($__internal_7b5e873d52e2d8e85dfd22e623fd4ae0c12f411b18c62e18eedd45a70eb8b6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_230a8db3bcb4b479162fc91d194dcf43e3737ab1f7518f6f1e8810d013e7366d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230a8db3bcb4b479162fc91d194dcf43e3737ab1f7518f6f1e8810d013e7366d->enter($__internal_230a8db3bcb4b479162fc91d194dcf43e3737ab1f7518f6f1e8810d013e7366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_230a8db3bcb4b479162fc91d194dcf43e3737ab1f7518f6f1e8810d013e7366d->leave($__internal_230a8db3bcb4b479162fc91d194dcf43e3737ab1f7518f6f1e8810d013e7366d_prof);

        
        $__internal_7b5e873d52e2d8e85dfd22e623fd4ae0c12f411b18c62e18eedd45a70eb8b6aa->leave($__internal_7b5e873d52e2d8e85dfd22e623fd4ae0c12f411b18c62e18eedd45a70eb8b6aa_prof);

    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
        $__internal_da0da27b60c31a9f3e3daa1afdf4cd296350a786d63d53ab179e8f371275e25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0da27b60c31a9f3e3daa1afdf4cd296350a786d63d53ab179e8f371275e25a->enter($__internal_da0da27b60c31a9f3e3daa1afdf4cd296350a786d63d53ab179e8f371275e25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c6af1199c109132dadda456e1eb28555bbf90c3df97be8916581978f83f62022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6af1199c109132dadda456e1eb28555bbf90c3df97be8916581978f83f62022->enter($__internal_c6af1199c109132dadda456e1eb28555bbf90c3df97be8916581978f83f62022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 35
        echo "
";
        
        $__internal_c6af1199c109132dadda456e1eb28555bbf90c3df97be8916581978f83f62022->leave($__internal_c6af1199c109132dadda456e1eb28555bbf90c3df97be8916581978f83f62022_prof);

        
        $__internal_da0da27b60c31a9f3e3daa1afdf4cd296350a786d63d53ab179e8f371275e25a->leave($__internal_da0da27b60c31a9f3e3daa1afdf4cd296350a786d63d53ab179e8f371275e25a_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_0797262beec2d56b4ba39f18c914a6df17c114665a1452f60a3122b728bd43ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0797262beec2d56b4ba39f18c914a6df17c114665a1452f60a3122b728bd43ed->enter($__internal_0797262beec2d56b4ba39f18c914a6df17c114665a1452f60a3122b728bd43ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afdc11c9a27abc2b1a16c1115f240e73b7260b1c7a326cf6286fa3105e0afd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdc11c9a27abc2b1a16c1115f240e73b7260b1c7a326cf6286fa3105e0afd0b->enter($__internal_afdc11c9a27abc2b1a16c1115f240e73b7260b1c7a326cf6286fa3105e0afd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_afdc11c9a27abc2b1a16c1115f240e73b7260b1c7a326cf6286fa3105e0afd0b->leave($__internal_afdc11c9a27abc2b1a16c1115f240e73b7260b1c7a326cf6286fa3105e0afd0b_prof);

        
        $__internal_0797262beec2d56b4ba39f18c914a6df17c114665a1452f60a3122b728bd43ed->leave($__internal_0797262beec2d56b4ba39f18c914a6df17c114665a1452f60a3122b728bd43ed_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_cef2ff029dea53a4da0ac8a964e1038a9344d1e74ed4d0cc14ff33f264494b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef2ff029dea53a4da0ac8a964e1038a9344d1e74ed4d0cc14ff33f264494b53->enter($__internal_cef2ff029dea53a4da0ac8a964e1038a9344d1e74ed4d0cc14ff33f264494b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_eb651d6b87845f0eacf33d97cfac5951f4d53ab21d44f498f66c43dfbba67196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb651d6b87845f0eacf33d97cfac5951f4d53ab21d44f498f66c43dfbba67196->enter($__internal_eb651d6b87845f0eacf33d97cfac5951f4d53ab21d44f498f66c43dfbba67196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_eb651d6b87845f0eacf33d97cfac5951f4d53ab21d44f498f66c43dfbba67196->leave($__internal_eb651d6b87845f0eacf33d97cfac5951f4d53ab21d44f498f66c43dfbba67196_prof);

        
        $__internal_cef2ff029dea53a4da0ac8a964e1038a9344d1e74ed4d0cc14ff33f264494b53->leave($__internal_cef2ff029dea53a4da0ac8a964e1038a9344d1e74ed4d0cc14ff33f264494b53_prof);

    }

    // line 288
    public function block_aside($context, array $blocks = array())
    {
        $__internal_4ed9a87c068b4f170bd82ca039fb4dc4e3c8f8a684fc691b4b10c9eced53d433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed9a87c068b4f170bd82ca039fb4dc4e3c8f8a684fc691b4b10c9eced53d433->enter($__internal_4ed9a87c068b4f170bd82ca039fb4dc4e3c8f8a684fc691b4b10c9eced53d433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_09370c7e37bcdcaf6776ae621f91927779fc5cbc1a750c56d5a50a566ee94770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09370c7e37bcdcaf6776ae621f91927779fc5cbc1a750c56d5a50a566ee94770->enter($__internal_09370c7e37bcdcaf6776ae621f91927779fc5cbc1a750c56d5a50a566ee94770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        
        $__internal_09370c7e37bcdcaf6776ae621f91927779fc5cbc1a750c56d5a50a566ee94770->leave($__internal_09370c7e37bcdcaf6776ae621f91927779fc5cbc1a750c56d5a50a566ee94770_prof);

        
        $__internal_4ed9a87c068b4f170bd82ca039fb4dc4e3c8f8a684fc691b4b10c9eced53d433->leave($__internal_4ed9a87c068b4f170bd82ca039fb4dc4e3c8f8a684fc691b4b10c9eced53d433_prof);

    }

    // line 290
    public function block_plus($context, array $blocks = array())
    {
        $__internal_64dcd7dd0a3d0f3236bc37573253105398b3dff781a94ec541c7500165989cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64dcd7dd0a3d0f3236bc37573253105398b3dff781a94ec541c7500165989cc1->enter($__internal_64dcd7dd0a3d0f3236bc37573253105398b3dff781a94ec541c7500165989cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_b8b2b566215b6ae8107a55d55997156c039247c0163c5e3bf7d9764ebc103753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b2b566215b6ae8107a55d55997156c039247c0163c5e3bf7d9764ebc103753->enter($__internal_b8b2b566215b6ae8107a55d55997156c039247c0163c5e3bf7d9764ebc103753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

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
        
        $__internal_b8b2b566215b6ae8107a55d55997156c039247c0163c5e3bf7d9764ebc103753->leave($__internal_b8b2b566215b6ae8107a55d55997156c039247c0163c5e3bf7d9764ebc103753_prof);

        
        $__internal_64dcd7dd0a3d0f3236bc37573253105398b3dff781a94ec541c7500165989cc1->leave($__internal_64dcd7dd0a3d0f3236bc37573253105398b3dff781a94ec541c7500165989cc1_prof);

    }

    // line 367
    public function block_footer($context, array $blocks = array())
    {
        $__internal_496189c002b1e723f58400c6ed4d1639f86e53e89eaecee34674ddc606a43c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496189c002b1e723f58400c6ed4d1639f86e53e89eaecee34674ddc606a43c48->enter($__internal_496189c002b1e723f58400c6ed4d1639f86e53e89eaecee34674ddc606a43c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_68ba474aad20d93e6f97bf99af975265d747d23cdf28d346d9596b3a91ea7496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ba474aad20d93e6f97bf99af975265d747d23cdf28d346d9596b3a91ea7496->enter($__internal_68ba474aad20d93e6f97bf99af975265d747d23cdf28d346d9596b3a91ea7496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_68ba474aad20d93e6f97bf99af975265d747d23cdf28d346d9596b3a91ea7496->leave($__internal_68ba474aad20d93e6f97bf99af975265d747d23cdf28d346d9596b3a91ea7496_prof);

        
        $__internal_496189c002b1e723f58400c6ed4d1639f86e53e89eaecee34674ddc606a43c48->leave($__internal_496189c002b1e723f58400c6ed4d1639f86e53e89eaecee34674ddc606a43c48_prof);

    }

    // line 416
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfa7aab379b1ac321a656879abe5f1a06ef033ef58700b056676d91a98805bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa7aab379b1ac321a656879abe5f1a06ef033ef58700b056676d91a98805bcd->enter($__internal_dfa7aab379b1ac321a656879abe5f1a06ef033ef58700b056676d91a98805bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_623bcde493d8ae736040769c24524a2c9841d4839a0e8bd15ced69c77d38e495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623bcde493d8ae736040769c24524a2c9841d4839a0e8bd15ced69c77d38e495->enter($__internal_623bcde493d8ae736040769c24524a2c9841d4839a0e8bd15ced69c77d38e495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_623bcde493d8ae736040769c24524a2c9841d4839a0e8bd15ced69c77d38e495->leave($__internal_623bcde493d8ae736040769c24524a2c9841d4839a0e8bd15ced69c77d38e495_prof);

        
        $__internal_dfa7aab379b1ac321a656879abe5f1a06ef033ef58700b056676d91a98805bcd->leave($__internal_dfa7aab379b1ac321a656879abe5f1a06ef033ef58700b056676d91a98805bcd_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  774 => 478,  768 => 475,  754 => 464,  750 => 463,  739 => 455,  733 => 452,  700 => 422,  696 => 421,  690 => 417,  681 => 416,  629 => 368,  620 => 367,  539 => 291,  530 => 290,  513 => 288,  480 => 58,  463 => 43,  454 => 42,  444 => 416,  437 => 411,  435 => 367,  429 => 363,  427 => 290,  425 => 288,  216 => 81,  214 => 42,  208 => 38,  199 => 37,  188 => 35,  179 => 34,  161 => 23,  157 => 22,  153 => 21,  148 => 20,  139 => 19,  127 => 14,  118 => 13,  107 => 7,  98 => 6,  88 => 19,  84 => 17,  82 => 13,  76 => 9,  74 => 6,  65 => 5,  52 => 484,  50 => 37,  48 => 34,  44 => 32,  42 => 5,  36 => 1,);
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
</html>

    ", "::base1.html.twig", "/var/www/html/fakymmo/app/Resources/views/base1.html.twig");
    }
}
