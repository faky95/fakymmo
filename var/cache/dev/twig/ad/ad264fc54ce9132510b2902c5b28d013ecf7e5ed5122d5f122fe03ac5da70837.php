<?php

/* FKImmoBundle:Admin:addbien.html.twig */
class __TwigTemplate_31857d9cee35d9590225c4192cec273234d94375ddae151779c764c63fb7e64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FKImmoBundle:Admin:addbien.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74693f9a03c67dc074b978c2ed948da2d7e09e403e13cab7ccbe9febcf4d28d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74693f9a03c67dc074b978c2ed948da2d7e09e403e13cab7ccbe9febcf4d28d6->enter($__internal_74693f9a03c67dc074b978c2ed948da2d7e09e403e13cab7ccbe9febcf4d28d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:addbien.html.twig"));

        $__internal_eb97b6094626129031c8145684026ebc10ea2a92e3ce2866b206aa7e4398edaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb97b6094626129031c8145684026ebc10ea2a92e3ce2866b206aa7e4398edaf->enter($__internal_eb97b6094626129031c8145684026ebc10ea2a92e3ce2866b206aa7e4398edaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:addbien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74693f9a03c67dc074b978c2ed948da2d7e09e403e13cab7ccbe9febcf4d28d6->leave($__internal_74693f9a03c67dc074b978c2ed948da2d7e09e403e13cab7ccbe9febcf4d28d6_prof);

        
        $__internal_eb97b6094626129031c8145684026ebc10ea2a92e3ce2866b206aa7e4398edaf->leave($__internal_eb97b6094626129031c8145684026ebc10ea2a92e3ce2866b206aa7e4398edaf_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_874f12e85394ec85a05ddc3b03dce5ecb306376e1f2306a7385a50ec6debcb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874f12e85394ec85a05ddc3b03dce5ecb306376e1f2306a7385a50ec6debcb08->enter($__internal_874f12e85394ec85a05ddc3b03dce5ecb306376e1f2306a7385a50ec6debcb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b9a3a76c6eaae10710dc387e4dd43602c005511f8bc01328ecfa04f2a8aa7718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a3a76c6eaae10710dc387e4dd43602c005511f8bc01328ecfa04f2a8aa7718->enter($__internal_b9a3a76c6eaae10710dc387e4dd43602c005511f8bc01328ecfa04f2a8aa7718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

 ";
        
        $__internal_b9a3a76c6eaae10710dc387e4dd43602c005511f8bc01328ecfa04f2a8aa7718->leave($__internal_b9a3a76c6eaae10710dc387e4dd43602c005511f8bc01328ecfa04f2a8aa7718_prof);

        
        $__internal_874f12e85394ec85a05ddc3b03dce5ecb306376e1f2306a7385a50ec6debcb08->leave($__internal_874f12e85394ec85a05ddc3b03dce5ecb306376e1f2306a7385a50ec6debcb08_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3e913ab45f794fb5de6589a54f1414921a77211d46a9b169fa78399bb74be13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e913ab45f794fb5de6589a54f1414921a77211d46a9b169fa78399bb74be13c->enter($__internal_3e913ab45f794fb5de6589a54f1414921a77211d46a9b169fa78399bb74be13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_cf4d01e7e63f82d269b673b860abcd9a1da75ac42ad277e36871c1b2bb080333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4d01e7e63f82d269b673b860abcd9a1da75ac42ad277e36871c1b2bb080333->enter($__internal_cf4d01e7e63f82d269b673b860abcd9a1da75ac42ad277e36871c1b2bb080333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo " <h1> welcome </h1>
 ";
        // line 14
        echo "
                            <div class=\"content-page\">
                                            <!-- Start content -->
                                            <div class=\"content\">
                                                <div class=\"container\">

                                                    <!-- Page-Title -->
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-12\">
                                                            <h4 class=\"pull-left page-title\"></h4>
                                                            <ol class=\"breadcrumb pull-right\">
                                                                <li><a href=\"#\">Type bien</a></li>
                                                                <li><a href=\"#\">Localite</a></li>
                                                                <li class=\"active\"><a href=\"#\">Bien</a></li>
                                                            </ol>
                                                        </div>
                                                    </div>


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
                                                            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["em1"]) {
            // line 70
            echo "                                                                <option value=\"\" name=\"typebien\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["em1"], "nomtype", array()), "html", null, true);
            echo " </option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['em1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                                        </select>
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
                                                            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localite"] ?? $this->getContext($context, "localite")));
        foreach ($context['_seq'] as $context["_key"] => $context["em2"]) {
            // line 106
            echo "                                                        <option value=\"\" name=\"localite\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["em2"], "nomlocal", array()), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['em2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                                        </select>
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
                        </div>
                        <!-- end row -->


            </div> <!-- container -->
                </div> <!-- content -->


 ";
        
        $__internal_cf4d01e7e63f82d269b673b860abcd9a1da75ac42ad277e36871c1b2bb080333->leave($__internal_cf4d01e7e63f82d269b673b860abcd9a1da75ac42ad277e36871c1b2bb080333_prof);

        
        $__internal_3e913ab45f794fb5de6589a54f1414921a77211d46a9b169fa78399bb74be13c->leave($__internal_3e913ab45f794fb5de6589a54f1414921a77211d46a9b169fa78399bb74be13c_prof);

    }

    // line 192
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3249a86978dd95d1c73ee8da79e53a01f0b85c7c7d66e6948d0db9908e2b081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3249a86978dd95d1c73ee8da79e53a01f0b85c7c7d66e6948d0db9908e2b081->enter($__internal_c3249a86978dd95d1c73ee8da79e53a01f0b85c7c7d66e6948d0db9908e2b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1bb85b78db94746b213d0ab7ee97512df71ef463df6019945445ff604309e3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb85b78db94746b213d0ab7ee97512df71ef463df6019945445ff604309e3a3->enter($__internal_1bb85b78db94746b213d0ab7ee97512df71ef463df6019945445ff604309e3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 193
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_1bb85b78db94746b213d0ab7ee97512df71ef463df6019945445ff604309e3a3->leave($__internal_1bb85b78db94746b213d0ab7ee97512df71ef463df6019945445ff604309e3a3_prof);

        
        $__internal_c3249a86978dd95d1c73ee8da79e53a01f0b85c7c7d66e6948d0db9908e2b081->leave($__internal_c3249a86978dd95d1c73ee8da79e53a01f0b85c7c7d66e6948d0db9908e2b081_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:addbien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 193,  290 => 192,  199 => 108,  190 => 106,  186 => 105,  151 => 72,  142 => 70,  138 => 69,  81 => 14,  78 => 9,  69 => 8,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
    <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

 {% endblock %}

{% block contenu %}
 <h1> welcome </h1>
 {# <h3>Formulaire d'ajout de Bien</h3>
 {{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }} #}

                            <div class=\"content-page\">
                                            <!-- Start content -->
                                            <div class=\"content\">
                                                <div class=\"container\">

                                                    <!-- Page-Title -->
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-12\">
                                                            <h4 class=\"pull-left page-title\"></h4>
                                                            <ol class=\"breadcrumb pull-right\">
                                                                <li><a href=\"#\">Type bien</a></li>
                                                                <li><a href=\"#\">Localite</a></li>
                                                                <li class=\"active\"><a href=\"#\">Bien</a></li>
                                                            </ol>
                                                        </div>
                                                    </div>


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
                        </div>
                        <!-- end row -->


            </div> <!-- container -->
                </div> <!-- content -->


 {% endblock %}


 {% block javascripts %}
    <script src=\"{{asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
 {% endblock %}", "FKImmoBundle:Admin:addbien.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/addbien.html.twig");
    }
}
