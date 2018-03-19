<?php

/* FKImmoBundle:Admin:calendrier.html.twig */
class __TwigTemplate_e721f2dba6d4f5df85fee400707ad877146f784d8f4d79964226b83fbdb0b10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FKImmoBundle:Admin:calendrier.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenu' => array($this, 'block_contenu'),
            'javas' => array($this, 'block_javas'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2238203729823449934e2f820f27e168df669ca51231e5aa85211c080f7f66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2238203729823449934e2f820f27e168df669ca51231e5aa85211c080f7f66f->enter($__internal_b2238203729823449934e2f820f27e168df669ca51231e5aa85211c080f7f66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:calendrier.html.twig"));

        $__internal_57af5ea4fddbc08dc1127c2557a71cf9246d7b16dad98d629a2b0815dd0d4a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af5ea4fddbc08dc1127c2557a71cf9246d7b16dad98d629a2b0815dd0d4a49->enter($__internal_57af5ea4fddbc08dc1127c2557a71cf9246d7b16dad98d629a2b0815dd0d4a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2238203729823449934e2f820f27e168df669ca51231e5aa85211c080f7f66f->leave($__internal_b2238203729823449934e2f820f27e168df669ca51231e5aa85211c080f7f66f_prof);

        
        $__internal_57af5ea4fddbc08dc1127c2557a71cf9246d7b16dad98d629a2b0815dd0d4a49->leave($__internal_57af5ea4fddbc08dc1127c2557a71cf9246d7b16dad98d629a2b0815dd0d4a49_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09c2912f5c683eb07c5e37ee3149d14be7de1dd474f53e3f17fec4506190351c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c2912f5c683eb07c5e37ee3149d14be7de1dd474f53e3f17fec4506190351c->enter($__internal_09c2912f5c683eb07c5e37ee3149d14be7de1dd474f53e3f17fec4506190351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aee956a2f68b348abfbb0710ca4f3b15e71edbab8f30e5790189b270f72bb33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee956a2f68b348abfbb0710ca4f3b15e71edbab8f30e5790189b270f72bb33c->enter($__internal_aee956a2f68b348abfbb0710ca4f3b15e71edbab8f30e5790189b270f72bb33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

    <!--calendar css-->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_aee956a2f68b348abfbb0710ca4f3b15e71edbab8f30e5790189b270f72bb33c->leave($__internal_aee956a2f68b348abfbb0710ca4f3b15e71edbab8f30e5790189b270f72bb33c_prof);

        
        $__internal_09c2912f5c683eb07c5e37ee3149d14be7de1dd474f53e3f17fec4506190351c->leave($__internal_09c2912f5c683eb07c5e37ee3149d14be7de1dd474f53e3f17fec4506190351c_prof);

    }

    // line 12
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_33fc8c89550045f4d91c41fe63e74ae40b5d358c1d08692d26de71e1171021fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fc8c89550045f4d91c41fe63e74ae40b5d358c1d08692d26de71e1171021fe->enter($__internal_33fc8c89550045f4d91c41fe63e74ae40b5d358c1d08692d26de71e1171021fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_f9b6061d4c90cb05e83462f746a18f91d5b488fa5f27caaff0c27d8f92845890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b6061d4c90cb05e83462f746a18f91d5b488fa5f27caaff0c27d8f92845890->enter($__internal_f9b6061d4c90cb05e83462f746a18f91d5b488fa5f27caaff0c27d8f92845890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 13
        echo "    <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Calendar</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li class=\"active\">Calendar</li>
                                </ol>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-12\">

                                <div class=\"row\">

                                    <div class=\"col-md-9\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12\">
                                                        <div id=\"calendar\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class=\"col-md-3\">
                                        <div class=\"widget\">
                                            <div class=\"widget-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12\">
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#add-category\" class=\"btn btn-lg btn-primary btn-block waves-effect waves-light\">
                                                            <i class=\"fa fa-plus\"></i> Create New
                                                        </a>
                                                        <div id=\"external-events\" class=\"m-t-20\">
                                                            <br>
                                                            <p>Drag and drop your event or click in the calendar</p>
                                                            <div class=\"external-event bg-inverse\" data-class=\"bg-inverse\" style=\"position: relative\">
                                                                <i class=\"fa fa-move\"></i>My Event One
                                                            </div>
                                                            <div class=\"external-event bg-danger\" data-class=\"bg-danger\" style=\"position: relative\">
                                                                <i class=\"fa fa-move\"></i>My Event Two
                                                            </div>
                                                            <div class=\"external-event bg-primary\" data-class=\"bg-primary\" style=\"position: relative\">
                                                                <i class=\"fa fa-move\"></i>My Event Three
                                                            </div>
                                                            <div class=\"external-event bg-purple\" data-class=\"bg-purple\" style=\"position: relative\">
                                                                <i class=\"fa fa-move\"></i>My Event Four
                                                            </div>
                                                        </div>

                                                        <!-- checkbox -->
                                                        <div class=\"checkbox checkbox-primary m-t-40\">
                                                            <input id=\"drop-remove\" type=\"checkbox\">
                                                            <label for=\"drop-remove\">
                                                                Remove after drop
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                </div>  <!-- end row -->

                                <!-- BEGIN MODAL -->
                                <div class=\"modal fade none-border\" id=\"event-modal\"  tabindex=\"-1\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\"><strong>Add Event</strong></h4>
                                            </div>
                                            <div class=\"modal-body\"></div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-success save-event waves-effect waves-light\">Create event</button>
                                                <button type=\"button\" class=\"btn btn-danger delete-event waves-effect waves-light\" data-dismiss=\"modal\">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class=\"modal fade none-border\" id=\"add-category\"  tabindex=\"-1\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\"><strong>Add</strong> a category</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form role=\"form\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <label class=\"control-label\">Category Name</label>
                                                            <input class=\"form-control form-white\" placeholder=\"Enter name\" type=\"text\" name=\"category-name\">
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <label class=\"control-label\">Choose Category Color</label>
                                                            <select class=\"form-control form-white\" data-placeholder=\"Choose a color...\" name=\"category-color\">
                                                                <option value=\"success\">Success</option>
                                                                <option value=\"danger\">Danger</option>
                                                                <option value=\"primary\">Primary</option>
                                                                <option value=\"warning\">Warning</option>
                                                                <option value=\"inverse\">Inverse</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-danger waves-effect waves-light save-category\" data-dismiss=\"modal\">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>


        ";
        // line 269
        $this->displayBlock('javas', $context, $blocks);
        
        $__internal_f9b6061d4c90cb05e83462f746a18f91d5b488fa5f27caaff0c27d8f92845890->leave($__internal_f9b6061d4c90cb05e83462f746a18f91d5b488fa5f27caaff0c27d8f92845890_prof);

        
        $__internal_33fc8c89550045f4d91c41fe63e74ae40b5d358c1d08692d26de71e1171021fe->leave($__internal_33fc8c89550045f4d91c41fe63e74ae40b5d358c1d08692d26de71e1171021fe_prof);

    }

    public function block_javas($context, array $blocks = array())
    {
        $__internal_3d63b5aec3a00d492bf18ac80b3878226fa7341c8c419d506a8bcd82d8f17f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d63b5aec3a00d492bf18ac80b3878226fa7341c8c419d506a8bcd82d8f17f4c->enter($__internal_3d63b5aec3a00d492bf18ac80b3878226fa7341c8c419d506a8bcd82d8f17f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javas"));

        $__internal_8074b9a46a5b80937f189044b249d0457f81eae1e67598d1e5f645b93becde63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8074b9a46a5b80937f189044b249d0457f81eae1e67598d1e5f645b93becde63->enter($__internal_8074b9a46a5b80937f189044b249d0457f81eae1e67598d1e5f645b93becde63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javas"));

        // line 270
        echo "
         <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.fullcalendar.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_8074b9a46a5b80937f189044b249d0457f81eae1e67598d1e5f645b93becde63->leave($__internal_8074b9a46a5b80937f189044b249d0457f81eae1e67598d1e5f645b93becde63_prof);

        
        $__internal_3d63b5aec3a00d492bf18ac80b3878226fa7341c8c419d506a8bcd82d8f17f4c->leave($__internal_3d63b5aec3a00d492bf18ac80b3878226fa7341c8c419d506a8bcd82d8f17f4c_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 288,  423 => 287,  419 => 286,  415 => 285,  411 => 284,  406 => 282,  401 => 280,  397 => 279,  393 => 278,  389 => 277,  385 => 276,  381 => 275,  377 => 274,  373 => 273,  369 => 272,  365 => 271,  362 => 270,  344 => 269,  86 => 13,  77 => 12,  65 => 9,  61 => 8,  55 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon_1.ico')}}\">

    <!--calendar css-->
    <link href=\"{{asset('assets/plugins/fullcalendar/dist/fullcalendar.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/plugins/select2/dist/css/select2.css')}}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

{% block contenu %}
    <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Calendar</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li class=\"active\">Calendar</li>
                                </ol>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-12\">

                                <div class=\"row\">

                                    <div class=\"col-md-9\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12\">
                                                        <div id=\"calendar\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class=\"col-md-3\">
                                        <div class=\"widget\">
                                            <div class=\"widget-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12\">
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#add-category\" class=\"btn btn-lg btn-primary btn-block waves-effect waves-light\">
                                                            <i class=\"fa fa-plus\"></i> Create New
                                                        </a>
                                                        <div id=\"external-events\" class=\"m-t-20\">
                                                            <br>
                                                            <p>Drag and drop your event or click in the calendar</p>
                                                            <div class=\"external-event bg-inverse\" data-class=\"bg-inverse\" style=\"position: relative\">
                                                                <i class=\"fa fa-move\"></i>My Event One
                                                            </div>
                                                            <div class=\"external-event bg-danger\" data-class=\"bg-danger\" style=\"position: relative\">
                                                                <i class=\"fa fa-move\"></i>My Event Two
                                                            </div>
                                                            <div class=\"external-event bg-primary\" data-class=\"bg-primary\" style=\"position: relative\">
                                                                <i class=\"fa fa-move\"></i>My Event Three
                                                            </div>
                                                            <div class=\"external-event bg-purple\" data-class=\"bg-purple\" style=\"position: relative\">
                                                                <i class=\"fa fa-move\"></i>My Event Four
                                                            </div>
                                                        </div>

                                                        <!-- checkbox -->
                                                        <div class=\"checkbox checkbox-primary m-t-40\">
                                                            <input id=\"drop-remove\" type=\"checkbox\">
                                                            <label for=\"drop-remove\">
                                                                Remove after drop
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                </div>  <!-- end row -->

                                <!-- BEGIN MODAL -->
                                <div class=\"modal fade none-border\" id=\"event-modal\"  tabindex=\"-1\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\"><strong>Add Event</strong></h4>
                                            </div>
                                            <div class=\"modal-body\"></div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-success save-event waves-effect waves-light\">Create event</button>
                                                <button type=\"button\" class=\"btn btn-danger delete-event waves-effect waves-light\" data-dismiss=\"modal\">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class=\"modal fade none-border\" id=\"add-category\"  tabindex=\"-1\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\"><strong>Add</strong> a category</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form role=\"form\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <label class=\"control-label\">Category Name</label>
                                                            <input class=\"form-control form-white\" placeholder=\"Enter name\" type=\"text\" name=\"category-name\">
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <label class=\"control-label\">Choose Category Color</label>
                                                            <select class=\"form-control form-white\" data-placeholder=\"Choose a color...\" name=\"category-color\">
                                                                <option value=\"success\">Success</option>
                                                                <option value=\"danger\">Danger</option>
                                                                <option value=\"primary\">Primary</option>
                                                                <option value=\"warning\">Warning</option>
                                                                <option value=\"inverse\">Inverse</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-danger waves-effect waves-light save-category\" data-dismiss=\"modal\">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>


        {% block javas %}

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

    <script src=\"{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/select2/dist/js/select2.min.js')}}\" type=\"text/javascript\"></script>
            <script src=\"{{asset('assets/plugins/moment/moment.js')}}\"></script>
            <script src=\"{{asset('assets/plugins/fullcalendar/dist/fullcalendar.min.js')}}\"></script>
            <script src=\"{{asset('assets/pages/jquery.fullcalendar.js')}}\"></script>

        {% endblock %}
{% endblock %}", "FKImmoBundle:Admin:calendrier.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/calendrier.html.twig");
    }
}
