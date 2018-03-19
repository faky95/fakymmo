<?php

/* ::base.html.twig */
class __TwigTemplate_e33f297c8f3a4cb86544f24fd800c32b1db325be3c779fc163a0778005ad21ad extends Twig_Template
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
        $__internal_ff5f6b23994bb99cd4022e09c3bad221c99fa66388945e3d794f05403e047e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5f6b23994bb99cd4022e09c3bad221c99fa66388945e3d794f05403e047e08->enter($__internal_ff5f6b23994bb99cd4022e09c3bad221c99fa66388945e3d794f05403e047e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_2dd37415259bbd60eed0462ef0f4cab801fd3fe22b0f6a6320dd3ed172e5c1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd37415259bbd60eed0462ef0f4cab801fd3fe22b0f6a6320dd3ed172e5c1b1->enter($__internal_2dd37415259bbd60eed0462ef0f4cab801fd3fe22b0f6a6320dd3ed172e5c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 479
        echo "</body>
</html>";
        
        $__internal_ff5f6b23994bb99cd4022e09c3bad221c99fa66388945e3d794f05403e047e08->leave($__internal_ff5f6b23994bb99cd4022e09c3bad221c99fa66388945e3d794f05403e047e08_prof);

        
        $__internal_2dd37415259bbd60eed0462ef0f4cab801fd3fe22b0f6a6320dd3ed172e5c1b1->leave($__internal_2dd37415259bbd60eed0462ef0f4cab801fd3fe22b0f6a6320dd3ed172e5c1b1_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_f384a70c444cc5fd785b0610271a380dd8764dc0ff187ee882ce81a267d20cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f384a70c444cc5fd785b0610271a380dd8764dc0ff187ee882ce81a267d20cb9->enter($__internal_f384a70c444cc5fd785b0610271a380dd8764dc0ff187ee882ce81a267d20cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9fac71dc148175278de8017edcf31bb2cc8af0e77f4e843b9b471a6f25585346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fac71dc148175278de8017edcf31bb2cc8af0e77f4e843b9b471a6f25585346->enter($__internal_9fac71dc148175278de8017edcf31bb2cc8af0e77f4e843b9b471a6f25585346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9fac71dc148175278de8017edcf31bb2cc8af0e77f4e843b9b471a6f25585346->leave($__internal_9fac71dc148175278de8017edcf31bb2cc8af0e77f4e843b9b471a6f25585346_prof);

        
        $__internal_f384a70c444cc5fd785b0610271a380dd8764dc0ff187ee882ce81a267d20cb9->leave($__internal_f384a70c444cc5fd785b0610271a380dd8764dc0ff187ee882ce81a267d20cb9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdb91cc1baaf07a4089a734cbdd02542c9442a2888f0a978784c2aaac1d4942b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb91cc1baaf07a4089a734cbdd02542c9442a2888f0a978784c2aaac1d4942b->enter($__internal_cdb91cc1baaf07a4089a734cbdd02542c9442a2888f0a978784c2aaac1d4942b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aff5a566910ce184b5302f67abde2fe6a7477b22749d438ddb11b675ec579789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff5a566910ce184b5302f67abde2fe6a7477b22749d438ddb11b675ec579789->enter($__internal_aff5a566910ce184b5302f67abde2fe6a7477b22749d438ddb11b675ec579789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "\t<title>AK1/2IMMO</title>
";
        
        $__internal_aff5a566910ce184b5302f67abde2fe6a7477b22749d438ddb11b675ec579789->leave($__internal_aff5a566910ce184b5302f67abde2fe6a7477b22749d438ddb11b675ec579789_prof);

        
        $__internal_cdb91cc1baaf07a4089a734cbdd02542c9442a2888f0a978784c2aaac1d4942b->leave($__internal_cdb91cc1baaf07a4089a734cbdd02542c9442a2888f0a978784c2aaac1d4942b_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_16c9e0c1e52172f2e006d02d131a6e46e2128e33918e437cfc5cc7bcbe53da17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c9e0c1e52172f2e006d02d131a6e46e2128e33918e437cfc5cc7bcbe53da17->enter($__internal_16c9e0c1e52172f2e006d02d131a6e46e2128e33918e437cfc5cc7bcbe53da17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_877854ea6e9919225b41553aa21fa6148b93d21ddeeea3e5f92a00a9f12c3155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877854ea6e9919225b41553aa21fa6148b93d21ddeeea3e5f92a00a9f12c3155->enter($__internal_877854ea6e9919225b41553aa21fa6148b93d21ddeeea3e5f92a00a9f12c3155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
";
        
        $__internal_877854ea6e9919225b41553aa21fa6148b93d21ddeeea3e5f92a00a9f12c3155->leave($__internal_877854ea6e9919225b41553aa21fa6148b93d21ddeeea3e5f92a00a9f12c3155_prof);

        
        $__internal_16c9e0c1e52172f2e006d02d131a6e46e2128e33918e437cfc5cc7bcbe53da17->leave($__internal_16c9e0c1e52172f2e006d02d131a6e46e2128e33918e437cfc5cc7bcbe53da17_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d58cc75704e1b574807dfb91649af2ca32c37553256eaee2f99b036ef6c70b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58cc75704e1b574807dfb91649af2ca32c37553256eaee2f99b036ef6c70b2b->enter($__internal_d58cc75704e1b574807dfb91649af2ca32c37553256eaee2f99b036ef6c70b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a2bf90c7678e95df6ce13b02c6684009401fb33a17d0831927cc0dc3ccee8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2bf90c7678e95df6ce13b02c6684009401fb33a17d0831927cc0dc3ccee8ae->enter($__internal_0a2bf90c7678e95df6ce13b02c6684009401fb33a17d0831927cc0dc3ccee8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0a2bf90c7678e95df6ce13b02c6684009401fb33a17d0831927cc0dc3ccee8ae->leave($__internal_0a2bf90c7678e95df6ce13b02c6684009401fb33a17d0831927cc0dc3ccee8ae_prof);

        
        $__internal_d58cc75704e1b574807dfb91649af2ca32c37553256eaee2f99b036ef6c70b2b->leave($__internal_d58cc75704e1b574807dfb91649af2ca32c37553256eaee2f99b036ef6c70b2b_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_d95b385470a952ce51a2d6cb6ed88cd3cbaf1004a5af246e6bf2f9b525c64253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95b385470a952ce51a2d6cb6ed88cd3cbaf1004a5af246e6bf2f9b525c64253->enter($__internal_d95b385470a952ce51a2d6cb6ed88cd3cbaf1004a5af246e6bf2f9b525c64253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a138597c390fb6e24efdc7a4c056d597262a6412a0140d1b437aeb98afac97f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a138597c390fb6e24efdc7a4c056d597262a6412a0140d1b437aeb98afac97f9->enter($__internal_a138597c390fb6e24efdc7a4c056d597262a6412a0140d1b437aeb98afac97f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 38
        echo "<!-- //banner --> 
<!-- header -->
<div class=\"header-w3layouts\"> 
\t";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 80
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
        // line 287
        $this->displayBlock('aside', $context, $blocks);
        // line 289
        $this->displayBlock('plus', $context, $blocks);
        // line 362
        echo "<!-- //contact address-->
<!-- //contact -->
<!-- footer -->
<div class=\"footer\">
\t";
        // line 366
        $this->displayBlock('footer', $context, $blocks);
        // line 410
        echo "<!-- //copy right -->
<!-- //footer --> 

<!-- js-scripts -->\t\t\t
\t<!-- js -->
\t";
        // line 415
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_a138597c390fb6e24efdc7a4c056d597262a6412a0140d1b437aeb98afac97f9->leave($__internal_a138597c390fb6e24efdc7a4c056d597262a6412a0140d1b437aeb98afac97f9_prof);

        
        $__internal_d95b385470a952ce51a2d6cb6ed88cd3cbaf1004a5af246e6bf2f9b525c64253->leave($__internal_d95b385470a952ce51a2d6cb6ed88cd3cbaf1004a5af246e6bf2f9b525c64253_prof);

    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
        $__internal_e8c03e0484907f76a0413a6e1a84236f1731cd6bdc545d930d5500ea5c5678c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c03e0484907f76a0413a6e1a84236f1731cd6bdc545d930d5500ea5c5678c8->enter($__internal_e8c03e0484907f76a0413a6e1a84236f1731cd6bdc545d930d5500ea5c5678c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d5d221270a10affb7006eae182386c954439b200fff508421078fd5f57d98a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d221270a10affb7006eae182386c954439b200fff508421078fd5f57d98a8c->enter($__internal_d5d221270a10affb7006eae182386c954439b200fff508421078fd5f57d98a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "
";
        
        $__internal_d5d221270a10affb7006eae182386c954439b200fff508421078fd5f57d98a8c->leave($__internal_d5d221270a10affb7006eae182386c954439b200fff508421078fd5f57d98a8c_prof);

        
        $__internal_e8c03e0484907f76a0413a6e1a84236f1731cd6bdc545d930d5500ea5c5678c8->leave($__internal_e8c03e0484907f76a0413a6e1a84236f1731cd6bdc545d930d5500ea5c5678c8_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_8ae9d76ec065811e9180a883ef3d0eccb15c614c408bd8a273328c3d0d2ec9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae9d76ec065811e9180a883ef3d0eccb15c614c408bd8a273328c3d0d2ec9f5->enter($__internal_8ae9d76ec065811e9180a883ef3d0eccb15c614c408bd8a273328c3d0d2ec9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9a00846e1e0d0aa802242ab515aa4535a1c68fd5e80462e34c09f11d85787556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a00846e1e0d0aa802242ab515aa4535a1c68fd5e80462e34c09f11d85787556->enter($__internal_9a00846e1e0d0aa802242ab515aa4535a1c68fd5e80462e34c09f11d85787556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
\t\t\t\t<li class=\"active\"><a href=\"index.html\">Home</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprio");
        echo "\">Proposer Bien</a></li>
\t\t\t\t";
        // line 60
        echo "\t\t\t\t";
        // line 61
        echo "\t\t\t\t<li><a class=\"scroll scroll\" href=\"#gallery\">Gallery</a></li>
\t\t\t\t";
        // line 63
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
        
        $__internal_9a00846e1e0d0aa802242ab515aa4535a1c68fd5e80462e34c09f11d85787556->leave($__internal_9a00846e1e0d0aa802242ab515aa4535a1c68fd5e80462e34c09f11d85787556_prof);

        
        $__internal_8ae9d76ec065811e9180a883ef3d0eccb15c614c408bd8a273328c3d0d2ec9f5->leave($__internal_8ae9d76ec065811e9180a883ef3d0eccb15c614c408bd8a273328c3d0d2ec9f5_prof);

    }

    // line 287
    public function block_aside($context, array $blocks = array())
    {
        $__internal_4b73f3f4cfe3b98363fe1758a6c318095e64cb72dc0ccad90c0a3b93ef107277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b73f3f4cfe3b98363fe1758a6c318095e64cb72dc0ccad90c0a3b93ef107277->enter($__internal_4b73f3f4cfe3b98363fe1758a6c318095e64cb72dc0ccad90c0a3b93ef107277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_57f0c29f62270d89b914c8a1d7a03857e1137cb3e4f1831ad110bc7fc0269b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f0c29f62270d89b914c8a1d7a03857e1137cb3e4f1831ad110bc7fc0269b42->enter($__internal_57f0c29f62270d89b914c8a1d7a03857e1137cb3e4f1831ad110bc7fc0269b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        
        $__internal_57f0c29f62270d89b914c8a1d7a03857e1137cb3e4f1831ad110bc7fc0269b42->leave($__internal_57f0c29f62270d89b914c8a1d7a03857e1137cb3e4f1831ad110bc7fc0269b42_prof);

        
        $__internal_4b73f3f4cfe3b98363fe1758a6c318095e64cb72dc0ccad90c0a3b93ef107277->leave($__internal_4b73f3f4cfe3b98363fe1758a6c318095e64cb72dc0ccad90c0a3b93ef107277_prof);

    }

    // line 289
    public function block_plus($context, array $blocks = array())
    {
        $__internal_11be74c917449b8f99e550c37930f818a6dcfe16f35649add1027a3c8b7d07ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11be74c917449b8f99e550c37930f818a6dcfe16f35649add1027a3c8b7d07ee->enter($__internal_11be74c917449b8f99e550c37930f818a6dcfe16f35649add1027a3c8b7d07ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_b95459c926c4e6fed083ff8c4aaae3efb7ef1a24b92fd58ffa5aaf547880aa23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95459c926c4e6fed083ff8c4aaae3efb7ef1a24b92fd58ffa5aaf547880aa23->enter($__internal_b95459c926c4e6fed083ff8c4aaae3efb7ef1a24b92fd58ffa5aaf547880aa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        // line 290
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
        
        $__internal_b95459c926c4e6fed083ff8c4aaae3efb7ef1a24b92fd58ffa5aaf547880aa23->leave($__internal_b95459c926c4e6fed083ff8c4aaae3efb7ef1a24b92fd58ffa5aaf547880aa23_prof);

        
        $__internal_11be74c917449b8f99e550c37930f818a6dcfe16f35649add1027a3c8b7d07ee->leave($__internal_11be74c917449b8f99e550c37930f818a6dcfe16f35649add1027a3c8b7d07ee_prof);

    }

    // line 366
    public function block_footer($context, array $blocks = array())
    {
        $__internal_651c6d32f8202c04a668caed275ed7a20a1656e8a0ab2ecc58b0afeb9cb66a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651c6d32f8202c04a668caed275ed7a20a1656e8a0ab2ecc58b0afeb9cb66a08->enter($__internal_651c6d32f8202c04a668caed275ed7a20a1656e8a0ab2ecc58b0afeb9cb66a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ac74a5ae6ecae917d370583c36ba98680f8b883d2ef2f8508d89566c66282678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac74a5ae6ecae917d370583c36ba98680f8b883d2ef2f8508d89566c66282678->enter($__internal_ac74a5ae6ecae917d370583c36ba98680f8b883d2ef2f8508d89566c66282678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 367
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
        
        $__internal_ac74a5ae6ecae917d370583c36ba98680f8b883d2ef2f8508d89566c66282678->leave($__internal_ac74a5ae6ecae917d370583c36ba98680f8b883d2ef2f8508d89566c66282678_prof);

        
        $__internal_651c6d32f8202c04a668caed275ed7a20a1656e8a0ab2ecc58b0afeb9cb66a08->leave($__internal_651c6d32f8202c04a668caed275ed7a20a1656e8a0ab2ecc58b0afeb9cb66a08_prof);

    }

    // line 415
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_526d4a93e04484b6bd38cf882adfd87b114d30a3f661c7ee5d056834e852b711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526d4a93e04484b6bd38cf882adfd87b114d30a3f661c7ee5d056834e852b711->enter($__internal_526d4a93e04484b6bd38cf882adfd87b114d30a3f661c7ee5d056834e852b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_41987627183b650f777b6dec38d84000f632348fa38518bcff859087a360e3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41987627183b650f777b6dec38d84000f632348fa38518bcff859087a360e3f1->enter($__internal_41987627183b650f777b6dec38d84000f632348fa38518bcff859087a360e3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 416
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 417
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
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexisel.js"), "html", null, true);
        echo "\"></script>
\t<!-- //Flexslider-js for-testimonials -->
\t<!-- Gallery -->
\t<script type=\"text/javascript\" src=\"";
        // line 450
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
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 459
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
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- //smooth scrolling -->
\t<!-- search-jQuery -->
\t<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t<!-- //search-jQuery -->
\t
<!-- //js-scripts -->
";
        
        $__internal_41987627183b650f777b6dec38d84000f632348fa38518bcff859087a360e3f1->leave($__internal_41987627183b650f777b6dec38d84000f632348fa38518bcff859087a360e3f1_prof);

        
        $__internal_526d4a93e04484b6bd38cf882adfd87b114d30a3f661c7ee5d056834e852b711->leave($__internal_526d4a93e04484b6bd38cf882adfd87b114d30a3f661c7ee5d056834e852b711_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  769 => 473,  763 => 470,  749 => 459,  745 => 458,  734 => 450,  728 => 447,  695 => 417,  690 => 416,  681 => 415,  629 => 367,  620 => 366,  539 => 290,  530 => 289,  513 => 287,  487 => 63,  484 => 61,  482 => 60,  478 => 58,  460 => 42,  451 => 41,  440 => 36,  431 => 35,  421 => 415,  414 => 410,  412 => 366,  406 => 362,  404 => 289,  402 => 287,  193 => 80,  191 => 41,  186 => 38,  184 => 35,  175 => 34,  157 => 23,  153 => 22,  149 => 21,  144 => 20,  135 => 19,  123 => 14,  114 => 13,  103 => 7,  94 => 6,  84 => 19,  80 => 17,  78 => 13,  72 => 9,  70 => 6,  61 => 5,  50 => 479,  48 => 34,  44 => 32,  42 => 5,  36 => 1,);
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
\t\t\t\t<li class=\"active\"><a href=\"index.html\">Home</a></li>
\t\t\t\t<li><a class=\"scroll scroll\" href=\"{{path('proprio')}}\">Proposer Bien</a></li>
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
