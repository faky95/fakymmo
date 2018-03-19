<?php

/* FKImmoBundle:Front:proprio.html.twig */
class __TwigTemplate_97c4f7ac53b1adb2b478ff2653d54d3c52dc7f05786ce0d828c99a5ebbc3faab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "FKImmoBundle:Front:proprio.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6ab7b81df47f5545adf738922f0ddec9834d879d63fa4a438e80976a9a98e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ab7b81df47f5545adf738922f0ddec9834d879d63fa4a438e80976a9a98e23->enter($__internal_f6ab7b81df47f5545adf738922f0ddec9834d879d63fa4a438e80976a9a98e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:proprio.html.twig"));

        $__internal_0e5fa2a007d1de2cbc64ffe77f4ce1566e1ab801c5672287cbc3f60fd48459fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5fa2a007d1de2cbc64ffe77f4ce1566e1ab801c5672287cbc3f60fd48459fb->enter($__internal_0e5fa2a007d1de2cbc64ffe77f4ce1566e1ab801c5672287cbc3f60fd48459fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:proprio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ab7b81df47f5545adf738922f0ddec9834d879d63fa4a438e80976a9a98e23->leave($__internal_f6ab7b81df47f5545adf738922f0ddec9834d879d63fa4a438e80976a9a98e23_prof);

        
        $__internal_0e5fa2a007d1de2cbc64ffe77f4ce1566e1ab801c5672287cbc3f60fd48459fb->leave($__internal_0e5fa2a007d1de2cbc64ffe77f4ce1566e1ab801c5672287cbc3f60fd48459fb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65b12aec0ecbc100aa6dbe2d85b8265c6e4d2febdf0e0d51fc7d171ba5270f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b12aec0ecbc100aa6dbe2d85b8265c6e4d2febdf0e0d51fc7d171ba5270f55->enter($__internal_65b12aec0ecbc100aa6dbe2d85b8265c6e4d2febdf0e0d51fc7d171ba5270f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_91dac39d8f12c1f1759e2cbddd7d05fa844d84bb5f057b5ded708e228a2b394d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dac39d8f12c1f1759e2cbddd7d05fa844d84bb5f057b5ded708e228a2b394d->enter($__internal_91dac39d8f12c1f1759e2cbddd7d05fa844d84bb5f057b5ded708e228a2b394d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

 ";
        
        $__internal_91dac39d8f12c1f1759e2cbddd7d05fa844d84bb5f057b5ded708e228a2b394d->leave($__internal_91dac39d8f12c1f1759e2cbddd7d05fa844d84bb5f057b5ded708e228a2b394d_prof);

        
        $__internal_65b12aec0ecbc100aa6dbe2d85b8265c6e4d2febdf0e0d51fc7d171ba5270f55->leave($__internal_65b12aec0ecbc100aa6dbe2d85b8265c6e4d2febdf0e0d51fc7d171ba5270f55_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_8fff4e359a31df0541abe1f68b2f997f822beca55d95285280a251403af58842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fff4e359a31df0541abe1f68b2f997f822beca55d95285280a251403af58842->enter($__internal_8fff4e359a31df0541abe1f68b2f997f822beca55d95285280a251403af58842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_609872b400f49e79a4c260d30f257949fcb2bb80bdaa12e20bddcb4633b7adf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609872b400f49e79a4c260d30f257949fcb2bb80bdaa12e20bddcb4633b7adf0->enter($__internal_609872b400f49e79a4c260d30f257949fcb2bb80bdaa12e20bddcb4633b7adf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo " <h1 style=\"text-align:center;\"> Veuillez Saisir Vos Informations </h1>
 <div class=\"container\">
<form method=\"post\" action=\"\">
  <div class=\"form-group\">
    <label for=\"nump\">Numero piece</label>
    <input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR NAME\" name=\"numpiece\" required=\"required\">
  </div>
  <div class=\"form-group\">
    <label for=\"nom\">Nom & Prenom</label>
    <input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR NAME\" name=\"nomComplet\">
  </div>
    <div class=\"form-group\">
    <label for=\"adress\">Adresse</label>
    <input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR ADDRESS\"name=\"adresse\">
  </div>
<div class=\"form-group\">
    <label for=\"email\">Email</label>
    <input type=\"email\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR EMAIL\"name=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"phone\">Phone</label>
    <input type=\"number\" class=\"form-control\" id=\"\" name=\"phone\">
  </div>
  <div class=\"form-group\">
    <label for=\"login\">Login</label>
    <input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR USERNAME\" name=\"login\">
  </div>
  <div class=\"form-group\">
    <label for=\"pass\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR PASSWORD\" name=\"password\">
  </div>
    <div class=\"form-group\">
    <label for=\"code\">Code Banque</label>
    <input type=\"number\" class=\"form-control\" id=\"\"name=\"codebanque\">
  </div>
  
   <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"save\">
   
   </div>
   </form>
   </div>
   <div class=\"container\">
<form id=\"formbien\">
<div class=\"form-group\">
    <h1 style=\"text-align:center;\">Informations du Bien </h1>
      <div class=\"form-group\">
    <label for=\"nombien\">Nom du Bien</label>
    <input type=\"text\" class=\"form-control\" id=\"\"name=\"nombien\">
  </div>

    <div class=\"form-group\">
    <label for=\"prix\">Prix Voulu</label>
    <input type=\"number\" class=\"form-control\" id=\"\"name=\"montantProprio\">
  </div>
    <div class=\"form-group\">
    <label for=\"type\">Type</label>
    <input type=\"text\" class=\"form-control\" id=\"\"name=\"typebien\">
  </div>
    <div class=\"form-group\">
    <label for=\"localite\">Localite</label>
    <input type=\"text\" class=\"form-control\" id=\"\"name=\"localite\">
  </div>
      <div class=\"form-group\">
        <label for=\"description\">Description</label>
        
            <textarea class=\"form-control\" id=\"description\" name=\"description\" type=\"text\"></textarea>
        
  </div>
  
  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"save\">

</div>
</form>
</div>



";
        // line 241
        echo "                        <!-- end row -->


            ";
        // line 246
        echo "

 ";
        
        $__internal_609872b400f49e79a4c260d30f257949fcb2bb80bdaa12e20bddcb4633b7adf0->leave($__internal_609872b400f49e79a4c260d30f257949fcb2bb80bdaa12e20bddcb4633b7adf0_prof);

        
        $__internal_8fff4e359a31df0541abe1f68b2f997f822beca55d95285280a251403af58842->leave($__internal_8fff4e359a31df0541abe1f68b2f997f822beca55d95285280a251403af58842_prof);

    }

    // line 251
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_678d9b0378cf85de887ef22753efb3982ca40c930da8fc5a6adb525b3c2dd1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678d9b0378cf85de887ef22753efb3982ca40c930da8fc5a6adb525b3c2dd1a4->enter($__internal_678d9b0378cf85de887ef22753efb3982ca40c930da8fc5a6adb525b3c2dd1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d28948246feb801fe2582346cf6725b46b54380cf4689e3294d680c0a396fc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28948246feb801fe2582346cf6725b46b54380cf4689e3294d680c0a396fc54->enter($__internal_d28948246feb801fe2582346cf6725b46b54380cf4689e3294d680c0a396fc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 252
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_d28948246feb801fe2582346cf6725b46b54380cf4689e3294d680c0a396fc54->leave($__internal_d28948246feb801fe2582346cf6725b46b54380cf4689e3294d680c0a396fc54_prof);

        
        $__internal_678d9b0378cf85de887ef22753efb3982ca40c930da8fc5a6adb525b3c2dd1a4->leave($__internal_678d9b0378cf85de887ef22753efb3982ca40c930da8fc5a6adb525b3c2dd1a4_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Front:proprio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 252,  174 => 251,  162 => 246,  157 => 241,  78 => 9,  69 => 8,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}
 {% block stylesheets %}
  {{ parent() }} 
    <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

 {% endblock %}

{% block main %}
 <h1 style=\"text-align:center;\"> Veuillez Saisir Vos Informations </h1>
 <div class=\"container\">
<form method=\"post\" action=\"\">
  <div class=\"form-group\">
    <label for=\"nump\">Numero piece</label>
    <input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR NAME\" name=\"numpiece\" required=\"required\">
  </div>
  <div class=\"form-group\">
    <label for=\"nom\">Nom & Prenom</label>
    <input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR NAME\" name=\"nomComplet\">
  </div>
    <div class=\"form-group\">
    <label for=\"adress\">Adresse</label>
    <input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR ADDRESS\"name=\"adresse\">
  </div>
<div class=\"form-group\">
    <label for=\"email\">Email</label>
    <input type=\"email\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR EMAIL\"name=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"phone\">Phone</label>
    <input type=\"number\" class=\"form-control\" id=\"\" name=\"phone\">
  </div>
  <div class=\"form-group\">
    <label for=\"login\">Login</label>
    <input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR USERNAME\" name=\"login\">
  </div>
  <div class=\"form-group\">
    <label for=\"pass\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"\" placeholder=\"ENTER YOUR PASSWORD\" name=\"password\">
  </div>
    <div class=\"form-group\">
    <label for=\"code\">Code Banque</label>
    <input type=\"number\" class=\"form-control\" id=\"\"name=\"codebanque\">
  </div>
  
   <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"save\">
   
   </div>
   </form>
   </div>
   <div class=\"container\">
<form id=\"formbien\">
<div class=\"form-group\">
    <h1 style=\"text-align:center;\">Informations du Bien </h1>
      <div class=\"form-group\">
    <label for=\"nombien\">Nom du Bien</label>
    <input type=\"text\" class=\"form-control\" id=\"\"name=\"nombien\">
  </div>

    <div class=\"form-group\">
    <label for=\"prix\">Prix Voulu</label>
    <input type=\"number\" class=\"form-control\" id=\"\"name=\"montantProprio\">
  </div>
    <div class=\"form-group\">
    <label for=\"type\">Type</label>
    <input type=\"text\" class=\"form-control\" id=\"\"name=\"typebien\">
  </div>
    <div class=\"form-group\">
    <label for=\"localite\">Localite</label>
    <input type=\"text\" class=\"form-control\" id=\"\"name=\"localite\">
  </div>
      <div class=\"form-group\">
        <label for=\"description\">Description</label>
        
            <textarea class=\"form-control\" id=\"description\" name=\"description\" type=\"text\"></textarea>
        
  </div>
  
  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"save\">

</div>
</form>
</div>



{# 

                            <div class=\"content-page\">
                                        


                            <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"><h3 class=\"panel-title text-center\">Ajouter un Bien</h3></div>
                                    <div class=\"panel-body\">
                                        <div class=\"form\">
                                            <form class=\"cmxform form-horizontal tasi-form\" id=\"signupForm\" method=\"POST \" action=\"#\" novalidate=\"novalidate\">
                                                <div class=\"form-group\">
                                                    <label for=\"firstname\" class=\"control-label col-lg-2\">NomBien *</label>
                                                    <div class=\"col-lg-10\">
                                                        <input class=\"form-control\" id=\"firstname\" name=\"firstname\" type=\"text\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"lastname\" class=\"control-label col-lg-2\">Description  *</label>
                                                    <div class=\"col-lg-10\">
                                                        <textarea class=\"form-control\" id=\"description\" name=\"description\" type=\"text\"></textarea>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"etat\" class=\"control-label col-lg-2\">Etat *</label>
                                                    <div class=\"col-lg-10\">
                                                        <input class=\"form-control\" id=\"etat\" name=\"etat\" type=\"number\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"prixlocation\" class=\"control-label col-lg-2\">Prixlocation *</label>
                                                    <div class=\"col-lg-10\">
                                                        <input class=\"form-control\" id=\"prixlocation\" name=\"prixlocation\" type=\"number\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group\">
                                                 <label for=\"\" class=\"control-label col-lg-2\">TypeBien *</label>
                                                        <select class=\"col-lg-9\">
                                                        <option value=\"\"> Choisir le Type Bien </option>
                                                            {% for em1 in types %}
                                                                <option value=\"\" name=\"typebien\"> {{em1.nomtype}} </option>
                                                            {% endfor %}
                                                        </select>
                                                        <a  href=\"#\">
                                                        <button type=\"button\" class=\"\" data-toggle=\"modal\" data-target=\"#exampleModal\">+</button>

                                                            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">New Type</h5>
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <form method=\"POST\">
                                                                    <div class=\"form-group\">
                                                                        <label for=\"\" class=\"col-form-label\">Libelle:</label>
                                                                        <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                                                                    </div>
                                                                     <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                                                    </form>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </a>
                                                </div>

                                                 <div class=\"form-group\">
                                                        <label for=\"localite\" class=\"control-label col-lg-2\">Localite </label>
                                                        <select class=\"col-lg-9\">
                                                        <option value=\"\">chiosir la localite</option>
                                                            {% for em2 in localite %}
                                                        <option value=\"\" name=\"localite\">{{em2.nomlocal}}</option>
                                                            {% endfor %}
                                                        </select>
                                                        <a href=\"#\">
                                                            <button type=\"button\" class=\"\" data-toggle=\"modal\" data-target=\"#exampleModal\">+</button>
                                                            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">New Localite</h5>
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <form  method=\"POST\">
                                                                    <div class=\"form-group\">
                                                                        <label for=\"recipient-name\" class=\"col-form-label\">Nom Localite:</label>
                                                                        <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                                                                    </div>
                                                                     <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                                                    </form>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div></a>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"\" class=\"control-label col-lg-2\">IdParentBien</label>
                                                    <div class=\"col-lg-10\">
                                                        <input class=\"form-control\" id=\"IdParent\" name=\"IdParent\" type=\"number\">
                                                    </div>
                                               
                                            </div>

                                        </form>
                                        </div> <!-- .form -->






                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->







                        <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\" class=\"dropzone\" id=\"dropzone\" method=\"POST\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                      </div>
                                    </form>


                                     <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                                        <button class=\"btn btn-success waves-effect waves-light\" type=\"submit\">Save</button>
                                                        <button class=\"btn btn-default waves-effect\" type=\"button\">Cancel</button>
                                                    </div>
                                                </div>
                                </div>
                            </div>
                        </div> #}
                        <!-- end row -->


            {# </div> <!-- container -->
                </div> <!-- content --> #}


 {% endblock %} 


 {% block javascripts %}
    <script src=\"{{asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
 {% endblock %}", "FKImmoBundle:Front:proprio.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Front/proprio.html.twig");
    }
}
