<?php

/* ::layout.html.twig */
class __TwigTemplate_3774f1e72fc07ec6c099dfb69a1857b98af6bec10338c0acc4071f97db018720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topbar' => array($this, 'block_topbar'),
            'main' => array($this, 'block_main'),
            'contenu' => array($this, 'block_contenu'),
            'right_bar' => array($this, 'block_right_bar'),
            'wrapper' => array($this, 'block_wrapper'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1742801976ca70d0e02dbe528ab66b1e2d9e250efe05db41327fd34c747e7e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1742801976ca70d0e02dbe528ab66b1e2d9e250efe05db41327fd34c747e7e43->enter($__internal_1742801976ca70d0e02dbe528ab66b1e2d9e250efe05db41327fd34c747e7e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_e6eb95ab8524576b8c6bf9ffc907e836a830423a0c3b4d12ad6aef3e205c4f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6eb95ab8524576b8c6bf9ffc907e836a830423a0c3b4d12ad6aef3e205c4f4d->enter($__internal_e6eb95ab8524576b8c6bf9ffc907e836a830423a0c3b4d12ad6aef3e205c4f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
     <div id=\"wrapper\">
     <div class=\"topbar\">
      <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>AK 1/2 IMMO </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                             <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div> 
                             <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form> 

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    ";
        // line 53
        echo "                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/fin entete -->
                    </div>
                </div>
        ";
        // line 126
        $this->displayBlock('topbar', $context, $blocks);
        // line 129
        echo "     </div>
                        <!--/menu gauche-->

     <div class=\"left side-menu\">
     
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">FAKY <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\">Administrator</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                <li><a href=\"mail-read.html\">View Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendrier");
        echo "\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"ui-typography.html\">Typography</a></li>
                                <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                <li><a href=\"ui-panels.html\">Panels</a></li>
                                <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                <li><a href=\"ui-modals.html\">Modals</a></li>
                                <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                <li><a href=\"ui-notification.html\">Notification</a></li>
                                <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"components-grid.html\">Grid</a></li>
                                <li><a href=\"components-portlets.html\">Portlets</a></li>
                                <li><a href=\"components-widgets.html\">Widgets</a></li>
                                <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                <li><a href=\"components-gallery.html\">Gallery </a></li>
                                <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"icons-material.html\">Material Design</a></li>
                                <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addbien");
        echo "\">General Elements</a></li>
                                <li><a href=\"form-validation.html\">Form Validation</a></li>
                                <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                <li><a href=\"form-xeditable.html\">X-editable</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewBien");
        echo "\">Bien</a></li>
                                <li><a href=\"";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewType");
        echo "\">Typebien</a></li>
                                <li><a href=\"";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewLocalite");
        echo "\">Localite</a></li>
                                <li><a href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewReserve");
        echo "\">Reservation</a></li>
                            </ul>   
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                <li><a href=\"charts-other.html\">Other Chart</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"maps-google.html\"> Google Map</a></li>
                                <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"pages-profile.html\">Profile</a></li>
                                <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                <li><a href=\"pages-email-template.html\">Email template</a></li>
                                <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                <li><a href=\"pages-login.html\">Login</a></li>
                                <li><a href=\"pages-register.html\">Register</a></li>
                                <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                <li><a href=\"pages-404.html\">404 Error</a></li>
                                <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                <li><a href=\"pages-500.html\">500 Error</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul>
                                <li class=\"has_sub\">
                                    <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul style=\"\">
                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>


     ";
        // line 300
        $this->displayBlock('main', $context, $blocks);
        // line 302
        echo "
        <!--/fin menu gauche -->
     </div>

     


 ";
        // line 309
        $this->displayBlock('contenu', $context, $blocks);
        // line 814
        echo "     ";
        $this->displayBlock('right_bar', $context, $blocks);
        // line 816
        echo "     </div>


      ";
        // line 819
        $this->displayBlock('wrapper', $context, $blocks);
        // line 821
        echo "     </div>
     ";
        // line 822
        $this->displayBlock('body', $context, $blocks);
        // line 824
        echo "


        
         <script src=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
          <!-- jQuery  -->
    <script src=\"";
        // line 830
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 831
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 832
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 833
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 834
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 835
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 837
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 838
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 839
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 846
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 847
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 850
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>


    <!-- flot Chart -->
    <script src=\"";
        // line 854
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 856
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 859
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 860
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 864
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 867
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    ";
        // line 871
        echo "
        ";
        // line 872
        $this->displayBlock('javascripts', $context, $blocks);
        // line 875
        echo "

    </body>
</html>";
        
        $__internal_1742801976ca70d0e02dbe528ab66b1e2d9e250efe05db41327fd34c747e7e43->leave($__internal_1742801976ca70d0e02dbe528ab66b1e2d9e250efe05db41327fd34c747e7e43_prof);

        
        $__internal_e6eb95ab8524576b8c6bf9ffc907e836a830423a0c3b4d12ad6aef3e205c4f4d->leave($__internal_e6eb95ab8524576b8c6bf9ffc907e836a830423a0c3b4d12ad6aef3e205c4f4d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_274f13c1ba7c684a353cc3e94589348f51e2572f30ef8e186c26bdb22ecd5e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274f13c1ba7c684a353cc3e94589348f51e2572f30ef8e186c26bdb22ecd5e58->enter($__internal_274f13c1ba7c684a353cc3e94589348f51e2572f30ef8e186c26bdb22ecd5e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6d3ed78169746296fa8ce5852b78648d597aa655c59d1a60e6a1decdbd15e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d3ed78169746296fa8ce5852b78648d597aa655c59d1a60e6a1decdbd15e1a->enter($__internal_f6d3ed78169746296fa8ce5852b78648d597aa655c59d1a60e6a1decdbd15e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue";
        
        $__internal_f6d3ed78169746296fa8ce5852b78648d597aa655c59d1a60e6a1decdbd15e1a->leave($__internal_f6d3ed78169746296fa8ce5852b78648d597aa655c59d1a60e6a1decdbd15e1a_prof);

        
        $__internal_274f13c1ba7c684a353cc3e94589348f51e2572f30ef8e186c26bdb22ecd5e58->leave($__internal_274f13c1ba7c684a353cc3e94589348f51e2572f30ef8e186c26bdb22ecd5e58_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86c88659a04357b9c6fab7d207d4ceb1799adcfa38a91524a610c3a1e602dd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c88659a04357b9c6fab7d207d4ceb1799adcfa38a91524a610c3a1e602dd5b->enter($__internal_86c88659a04357b9c6fab7d207d4ceb1799adcfa38a91524a610c3a1e602dd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8def170147cc5d813e69b8a7d6a9a0bc896ec7afc79a4811d1335c577b17ecd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8def170147cc5d813e69b8a7d6a9a0bc896ec7afc79a4811d1335c577b17ecd3->enter($__internal_8def170147cc5d813e69b8a7d6a9a0bc896ec7afc79a4811d1335c577b17ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.icos"), "html", null, true);
        echo "\">

        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


        ";
        
        $__internal_8def170147cc5d813e69b8a7d6a9a0bc896ec7afc79a4811d1335c577b17ecd3->leave($__internal_8def170147cc5d813e69b8a7d6a9a0bc896ec7afc79a4811d1335c577b17ecd3_prof);

        
        $__internal_86c88659a04357b9c6fab7d207d4ceb1799adcfa38a91524a610c3a1e602dd5b->leave($__internal_86c88659a04357b9c6fab7d207d4ceb1799adcfa38a91524a610c3a1e602dd5b_prof);

    }

    // line 126
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_afab323f7b4681f7f62416a4e3d872b1b462a70fd95703b125d16f87ac5606d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afab323f7b4681f7f62416a4e3d872b1b462a70fd95703b125d16f87ac5606d1->enter($__internal_afab323f7b4681f7f62416a4e3d872b1b462a70fd95703b125d16f87ac5606d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_e9f966a1bcc75ed30507e009ee0ff03c67e3b4ac03c188773fcc0c928924041a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f966a1bcc75ed30507e009ee0ff03c67e3b4ac03c188773fcc0c928924041a->enter($__internal_e9f966a1bcc75ed30507e009ee0ff03c67e3b4ac03c188773fcc0c928924041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 127
        echo "       
        ";
        
        $__internal_e9f966a1bcc75ed30507e009ee0ff03c67e3b4ac03c188773fcc0c928924041a->leave($__internal_e9f966a1bcc75ed30507e009ee0ff03c67e3b4ac03c188773fcc0c928924041a_prof);

        
        $__internal_afab323f7b4681f7f62416a4e3d872b1b462a70fd95703b125d16f87ac5606d1->leave($__internal_afab323f7b4681f7f62416a4e3d872b1b462a70fd95703b125d16f87ac5606d1_prof);

    }

    // line 300
    public function block_main($context, array $blocks = array())
    {
        $__internal_bf66f87fb4a1e2c7da02fc3a7a8fca1d2a7b12b78225dff0b3db4e49fb460c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf66f87fb4a1e2c7da02fc3a7a8fca1d2a7b12b78225dff0b3db4e49fb460c15->enter($__internal_bf66f87fb4a1e2c7da02fc3a7a8fca1d2a7b12b78225dff0b3db4e49fb460c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6d3cf94d6b13a898c828e47c521a71fa69216aeef4fc4bd5dc856d78661a8793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3cf94d6b13a898c828e47c521a71fa69216aeef4fc4bd5dc856d78661a8793->enter($__internal_6d3cf94d6b13a898c828e47c521a71fa69216aeef4fc4bd5dc856d78661a8793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 301
        echo "        ";
        
        $__internal_6d3cf94d6b13a898c828e47c521a71fa69216aeef4fc4bd5dc856d78661a8793->leave($__internal_6d3cf94d6b13a898c828e47c521a71fa69216aeef4fc4bd5dc856d78661a8793_prof);

        
        $__internal_bf66f87fb4a1e2c7da02fc3a7a8fca1d2a7b12b78225dff0b3db4e49fb460c15->leave($__internal_bf66f87fb4a1e2c7da02fc3a7a8fca1d2a7b12b78225dff0b3db4e49fb460c15_prof);

    }

    // line 309
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_33b0dff1ca291b70a3fa373eab073e3aec4da18824ee31b7fbc9f05bf3cabdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b0dff1ca291b70a3fa373eab073e3aec4da18824ee31b7fbc9f05bf3cabdfd->enter($__internal_33b0dff1ca291b70a3fa373eab073e3aec4da18824ee31b7fbc9f05bf3cabdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_9d7c9ca4e0f670c8aa129a517d1d54057d1764f78c7bdd9f6a7abef709285846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7c9ca4e0f670c8aa129a517d1d54057d1764f78c7bdd9f6a7abef709285846->enter($__internal_9d7c9ca4e0f670c8aa129a517d1d54057d1764f78c7bdd9f6a7abef709285846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 310
        echo "        ";
        
        $__internal_9d7c9ca4e0f670c8aa129a517d1d54057d1764f78c7bdd9f6a7abef709285846->leave($__internal_9d7c9ca4e0f670c8aa129a517d1d54057d1764f78c7bdd9f6a7abef709285846_prof);

        
        $__internal_33b0dff1ca291b70a3fa373eab073e3aec4da18824ee31b7fbc9f05bf3cabdfd->leave($__internal_33b0dff1ca291b70a3fa373eab073e3aec4da18824ee31b7fbc9f05bf3cabdfd_prof);

    }

    // line 814
    public function block_right_bar($context, array $blocks = array())
    {
        $__internal_c3a2471aab9303485ef79cfd3aa25a271e05ef4ae132e5657b220e0f97c23ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a2471aab9303485ef79cfd3aa25a271e05ef4ae132e5657b220e0f97c23ef7->enter($__internal_c3a2471aab9303485ef79cfd3aa25a271e05ef4ae132e5657b220e0f97c23ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_bar"));

        $__internal_5f48706d257785a698a313aa3b1be953dedceb0b5c7f765df4d4f0db66cbc5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f48706d257785a698a313aa3b1be953dedceb0b5c7f765df4d4f0db66cbc5e7->enter($__internal_5f48706d257785a698a313aa3b1be953dedceb0b5c7f765df4d4f0db66cbc5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_bar"));

        // line 815
        echo "        ";
        
        $__internal_5f48706d257785a698a313aa3b1be953dedceb0b5c7f765df4d4f0db66cbc5e7->leave($__internal_5f48706d257785a698a313aa3b1be953dedceb0b5c7f765df4d4f0db66cbc5e7_prof);

        
        $__internal_c3a2471aab9303485ef79cfd3aa25a271e05ef4ae132e5657b220e0f97c23ef7->leave($__internal_c3a2471aab9303485ef79cfd3aa25a271e05ef4ae132e5657b220e0f97c23ef7_prof);

    }

    // line 819
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_cf17e70c6679e6082fd7d1f7f254019a9c4f5f8dec7dd2f61a8d651e7df2787f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf17e70c6679e6082fd7d1f7f254019a9c4f5f8dec7dd2f61a8d651e7df2787f->enter($__internal_cf17e70c6679e6082fd7d1f7f254019a9c4f5f8dec7dd2f61a8d651e7df2787f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_39d4a3c4e5379ee490f181e1e6ac688aef7438160c9437ff4674ea4efac6c00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d4a3c4e5379ee490f181e1e6ac688aef7438160c9437ff4674ea4efac6c00b->enter($__internal_39d4a3c4e5379ee490f181e1e6ac688aef7438160c9437ff4674ea4efac6c00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 820
        echo "        ";
        
        $__internal_39d4a3c4e5379ee490f181e1e6ac688aef7438160c9437ff4674ea4efac6c00b->leave($__internal_39d4a3c4e5379ee490f181e1e6ac688aef7438160c9437ff4674ea4efac6c00b_prof);

        
        $__internal_cf17e70c6679e6082fd7d1f7f254019a9c4f5f8dec7dd2f61a8d651e7df2787f->leave($__internal_cf17e70c6679e6082fd7d1f7f254019a9c4f5f8dec7dd2f61a8d651e7df2787f_prof);

    }

    // line 822
    public function block_body($context, array $blocks = array())
    {
        $__internal_6801589cd5d082e3b4ce97be68591c2db80d4ffd355e744db31d37e32d433f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6801589cd5d082e3b4ce97be68591c2db80d4ffd355e744db31d37e32d433f46->enter($__internal_6801589cd5d082e3b4ce97be68591c2db80d4ffd355e744db31d37e32d433f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6441afa6563343f36416c9d48e58319734088e6370fc0f922fe413452c9008a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6441afa6563343f36416c9d48e58319734088e6370fc0f922fe413452c9008a4->enter($__internal_6441afa6563343f36416c9d48e58319734088e6370fc0f922fe413452c9008a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 823
        echo "        ";
        
        $__internal_6441afa6563343f36416c9d48e58319734088e6370fc0f922fe413452c9008a4->leave($__internal_6441afa6563343f36416c9d48e58319734088e6370fc0f922fe413452c9008a4_prof);

        
        $__internal_6801589cd5d082e3b4ce97be68591c2db80d4ffd355e744db31d37e32d433f46->leave($__internal_6801589cd5d082e3b4ce97be68591c2db80d4ffd355e744db31d37e32d433f46_prof);

    }

    // line 872
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21532e3e40dc01caf6f9ad5e7471ccd086799898c2deb5a93e34ce68e7975d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21532e3e40dc01caf6f9ad5e7471ccd086799898c2deb5a93e34ce68e7975d95->enter($__internal_21532e3e40dc01caf6f9ad5e7471ccd086799898c2deb5a93e34ce68e7975d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aeef22ebc549dec39f8cdc4560b062b430580f5bdcb93a915d5235e021560bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeef22ebc549dec39f8cdc4560b062b430580f5bdcb93a915d5235e021560bae->enter($__internal_aeef22ebc549dec39f8cdc4560b062b430580f5bdcb93a915d5235e021560bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 873
        echo "
        ";
        
        $__internal_aeef22ebc549dec39f8cdc4560b062b430580f5bdcb93a915d5235e021560bae->leave($__internal_aeef22ebc549dec39f8cdc4560b062b430580f5bdcb93a915d5235e021560bae_prof);

        
        $__internal_21532e3e40dc01caf6f9ad5e7471ccd086799898c2deb5a93e34ce68e7975d95->leave($__internal_21532e3e40dc01caf6f9ad5e7471ccd086799898c2deb5a93e34ce68e7975d95_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 873,  716 => 872,  706 => 823,  697 => 822,  687 => 820,  678 => 819,  668 => 815,  659 => 814,  649 => 310,  640 => 309,  630 => 301,  621 => 300,  610 => 127,  601 => 126,  587 => 17,  583 => 16,  579 => 15,  575 => 14,  571 => 13,  567 => 12,  563 => 11,  558 => 9,  552 => 7,  543 => 6,  525 => 5,  512 => 875,  510 => 872,  507 => 871,  501 => 867,  495 => 864,  489 => 861,  485 => 860,  481 => 859,  477 => 858,  473 => 857,  469 => 856,  465 => 855,  461 => 854,  454 => 850,  448 => 847,  444 => 846,  439 => 844,  433 => 841,  428 => 839,  424 => 838,  420 => 837,  416 => 836,  412 => 835,  408 => 834,  404 => 833,  400 => 832,  396 => 831,  392 => 830,  387 => 828,  381 => 824,  379 => 822,  376 => 821,  374 => 819,  369 => 816,  366 => 814,  364 => 309,  355 => 302,  353 => 300,  281 => 231,  277 => 230,  273 => 229,  269 => 228,  252 => 214,  205 => 170,  169 => 137,  159 => 129,  157 => 126,  141 => 113,  79 => 53,  46 => 21,  44 => 6,  40 => 5,  34 => 1,);
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
        <title>{% block title %}Bienvenue{% endblock %}</title>
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
     <div id=\"wrapper\">
     <div class=\"topbar\">
      <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>AK 1/2 IMMO </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                             <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div> 
                             <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form> 

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    {# <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a> #}
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"{{asset('assets/images/users/avatar-1.jpg')}}\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/fin entete -->
                    </div>
                </div>
        {% block topbar %}
       
        {% endblock %}
     </div>
                        <!--/menu gauche-->

     <div class=\"left side-menu\">
     
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"{{asset('assets/images/users/avatar-1.jpg')}}\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">FAKY <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\">Administrator</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                <li><a href=\"mail-read.html\">View Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"{{path('calendrier')}}\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"ui-typography.html\">Typography</a></li>
                                <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                <li><a href=\"ui-panels.html\">Panels</a></li>
                                <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                <li><a href=\"ui-modals.html\">Modals</a></li>
                                <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                <li><a href=\"ui-notification.html\">Notification</a></li>
                                <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"components-grid.html\">Grid</a></li>
                                <li><a href=\"components-portlets.html\">Portlets</a></li>
                                <li><a href=\"components-widgets.html\">Widgets</a></li>
                                <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                <li><a href=\"components-gallery.html\">Gallery </a></li>
                                <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"icons-material.html\">Material Design</a></li>
                                <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{path('addbien')}}\">General Elements</a></li>
                                <li><a href=\"form-validation.html\">Form Validation</a></li>
                                <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                <li><a href=\"form-xeditable.html\">X-editable</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{path('viewBien')}}\">Bien</a></li>
                                <li><a href=\"{{path('viewType')}}\">Typebien</a></li>
                                <li><a href=\"{{path('viewLocalite')}}\">Localite</a></li>
                                <li><a href=\"{{path('viewReserve')}}\">Reservation</a></li>
                            </ul>   
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                <li><a href=\"charts-other.html\">Other Chart</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"maps-google.html\"> Google Map</a></li>
                                <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"pages-profile.html\">Profile</a></li>
                                <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                <li><a href=\"pages-email-template.html\">Email template</a></li>
                                <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                <li><a href=\"pages-login.html\">Login</a></li>
                                <li><a href=\"pages-register.html\">Register</a></li>
                                <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                <li><a href=\"pages-404.html\">404 Error</a></li>
                                <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                <li><a href=\"pages-500.html\">500 Error</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul>
                                <li class=\"has_sub\">
                                    <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul style=\"\">
                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>


     {% block main %}
        {% endblock %}

        <!--/fin menu gauche -->
     </div>

     


 {% block contenu %}
        {# <div>
            <!-- Start content -->
            <div class=\"content\">
                <div class=\"container\">

                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h4 class=\"pull-left page-title\">Welcome !</h4>
                            <ol class=\"breadcrumb pull-right\">
                                <li><a href=\"#\">Moltran</a></li>
                                <li class=\"active\">Dashboard</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Start Widget -->
                    <!--Widget-4 -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                <span class=\"mini-stat-icon bg-info\"><i class=\"ion-social-usd\"></i></span>
                                <div class=\"mini-stat-info text-right text-dark\">
                                    <span class=\"counter text-dark\">15852</span> Total Sales
                                </div>
                                <div class=\"tiles-progress\">
                                    <div class=\"m-t-20\">
                                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                                        <div class=\"progress progress-sm m-0\">
                                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                <span class=\"sr-only\">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                <span class=\"mini-stat-icon bg-purple\"><i class=\"ion-ios7-cart\"></i></span>
                                <div class=\"mini-stat-info text-right text-dark\">
                                    <span class=\"counter text-dark\">956</span> New Orders
                                </div>
                                <div class=\"tiles-progress\">
                                    <div class=\"m-t-20\">
                                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">90%</span></h5>
                                        <div class=\"progress progress-sm m-0\">
                                            <div class=\"progress-bar progress-bar-purple\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                                                <span class=\"sr-only\">90% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                <span class=\"mini-stat-icon bg-success\"><i class=\"ion-android-contacts\"></i></span>
                                <div class=\"mini-stat-info text-right text-dark\">
                                    <span class=\"counter text-dark\">5210</span> New Users
                                </div>
                                <div class=\"tiles-progress\">
                                    <div class=\"m-t-20\">
                                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">57%</span></h5>
                                        <div class=\"progress progress-sm m-0\">
                                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"57\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 57%\">
                                                <span class=\"sr-only\">57% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                <span class=\"mini-stat-icon bg-primary\"><i class=\"ion-eye\"></i></span>
                                <div class=\"mini-stat-info text-right text-dark\">
                                    <span class=\"counter text-dark\">20544</span> Unique Visitors
                                </div>
                                <div class=\"tiles-progress\">
                                    <div class=\"m-t-20\">
                                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                                        <div class=\"progress progress-sm m-0\">
                                            <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                <span class=\"sr-only\">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End row-->


                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"portlet\">
                                <!-- /portlet heading -->
                                <div class=\"portlet-heading\">
                                    <h3 class=\"portlet-title text-dark text-uppercase\">
                                        Website Stats
                                    </h3>
                                    <div class=\"portlet-widgets\">
                                        <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                        <span class=\"divider\"></span>
                                        <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet1\"><i class=\"ion-minus-round\"></i></a>
                                        <span class=\"divider\"></span>
                                        <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                                <div id=\"portlet1\" class=\"panel-collapse collapse in\">
                                    <div class=\"portlet-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div id=\"website-stats\" style=\"position: relative;height: 320px\"></div>
                                                <div class=\"row text-center m-t-30\">
                                                    <div class=\"col-sm-4\">
                                                        <h4 class=\"counter\">86,956</h4>
                                                        <small class=\"text-muted\"> Weekly Report</small>
                                                    </div>
                                                    <div class=\"col-sm-4\">
                                                        <h4 class=\"counter\">86,69</h4>
                                                        <small class=\"text-muted\">Monthly Report</small>
                                                    </div>
                                                    <div class=\"col-sm-4\">
                                                        <h4 class=\"counter\">948,16</h4>
                                                        <small class=\"text-muted\">Yearly Report</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Portlet -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-4\">
                            <div class=\"portlet\">
                                <!-- /portlet heading -->
                                <div class=\"portlet-heading\">
                                    <h3 class=\"portlet-title text-dark text-uppercase\">
                                        Website Stats
                                    </h3>
                                    <div class=\"portlet-widgets\">
                                        <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                        <span class=\"divider\"></span>
                                        <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet2\"><i class=\"ion-minus-round\"></i></a>
                                        <span class=\"divider\"></span>
                                        <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                                <div id=\"portlet2\" class=\"panel-collapse collapse in\">
                                    <div class=\"portlet-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div id=\"pie-chart\">
                                                    <div id=\"pie-chart-container\" class=\"flot-chart\" style=\"height: 320px\">
                                                    </div>
                                                </div>

                                                <div class=\"row text-center m-t-30\">
                                                    <div class=\"col-sm-6\">
                                                        <h4 class=\"counter\">86,956</h4>
                                                        <small class=\"text-muted\"> Weekly Report</small>
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <h4 class=\"counter\">86,69</h4>
                                                        <small class=\"text-muted\">Monthly Report</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Portlet -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- End row -->


                    <div class=\"row\">
                        <!-- INBOX -->
                        <div class=\"col-lg-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\">Inbox</h4>
                                </div>
                                <div class=\"panel-body\">
                                    <div class=\"inbox-widget nicescroll mx-box\">
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-1.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Chadengle</p>
                                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                <p class=\"inbox-item-date\">13:40 PM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-2.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Tomaslau</p>
                                                <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                <p class=\"inbox-item-date\">13:34 PM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-3.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Stillnotdavid</p>
                                                <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                <p class=\"inbox-item-date\">13:17 PM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-4.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Kurafire</p>
                                                <p class=\"inbox-item-text\">Nice to meet you</p>
                                                <p class=\"inbox-item-date\">12:20 PM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-5.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Shahedk</p>
                                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                <p class=\"inbox-item-date\">10:15 AM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-6.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Adhamdannaway</p>
                                                <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                <p class=\"inbox-item-date\">9:56 AM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-8.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Arashasghari</p>
                                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                <p class=\"inbox-item-date\">10:15 AM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-9.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Joshaustin</p>
                                                <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                <p class=\"inbox-item-date\">9:56 AM</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- CHAT -->
                        <div class=\"col-lg-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title\">Chat</h3>
                                </div>
                                <div class=\"panel-body\">
                                    <div class=\"chat-conversation\">
                                        <ul class=\"conversation-list nicescroll\">
                                            <li class=\"clearfix\">
                                                <div class=\"chat-avatar\">
                                                    <img src=\"assets/images/avatar-1.jpg\" alt=\"male\">
                                                    <i>10:00</i>
                                                </div>
                                                <div class=\"conversation-text\">
                                                    <div class=\"ctext-wrap\">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Hello!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"clearfix odd\">
                                                <div class=\"chat-avatar\">
                                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"Female\">
                                                    <i>10:01</i>
                                                </div>
                                                <div class=\"conversation-text\">
                                                    <div class=\"ctext-wrap\">
                                                        <i>Smith</i>
                                                        <p>
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"clearfix\">
                                                <div class=\"chat-avatar\">
                                                    <img src=\"assets/images/avatar-1.jpg\" alt=\"male\">
                                                    <i>10:01</i>
                                                </div>
                                                <div class=\"conversation-text\">
                                                    <div class=\"ctext-wrap\">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Yeah everything is fine
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"clearfix odd\">
                                                <div class=\"chat-avatar\">
                                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"male\">
                                                    <i>10:02</i>
                                                </div>
                                                <div class=\"conversation-text\">
                                                    <div class=\"ctext-wrap\">
                                                        <i>Smith</i>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class=\"row\">
                                            <div class=\"col-sm-9 chat-inputbar\">
                                                <input type=\"text\" class=\"form-control chat-input\" placeholder=\"Enter your text\">
                                            </div>
                                            <div class=\"col-sm-3 chat-send\">
                                                <button type=\"submit\" class=\"btn btn-info btn-block waves-effect waves-light\">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col-->


                        <!-- TODOs -->
                        <div class=\"col-lg-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title\">Todo</h3>
                                </div>
                                <div class=\"panel-body todoapp\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <h4 id=\"todo-message\"><span id=\"todo-remaining\"></span> of <span id=\"todo-total\"></span> remaining</h4>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <a href=\"\" class=\"pull-right btn btn-primary btn-sm waves-effect waves-light\" id=\"btn-archive\">Archive</a>
                                        </div>
                                    </div>

                                    <ul class=\"list-group no-margn nicescroll todo-list\" style=\"max-height: 288px\" id=\"todo-list\"></ul>

                                    <form name=\"todo-form\" id=\"todo-form\" role=\"form\" class=\"m-t-20\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-9 todo-inputbar\">
                                                <input type=\"text\" id=\"todo-input-text\" name=\"todo-input-text\" class=\"form-control\" placeholder=\"Add new todo\">
                                            </div>
                                            <div class=\"col-sm-3 todo-send\">
                                                <button class=\"btn-primary btn-block btn waves-effect waves-light\" type=\"button\" id=\"todo-btn-submit\">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>


    
     </div>

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
            </div> #}
{% endblock %}
     {% block right_bar %}
        {% endblock %}
     </div>


      {% block wrapper %}
        {% endblock %}
     </div>
     {% block body %}
        {% endblock %}



        
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

        {% block javascripts %}

        {% endblock %}


    </body>
</html>", "::layout.html.twig", "/var/www/html/fakymmo/app/Resources/views/layout.html.twig");
    }
}
