<?php

/* FKImmoBundle:Front:registerbien.html.twig */
class __TwigTemplate_2e594987ea52326bdf1992ef857c8cf86ed98c87cbd9b0aa22191c0fc0ffe8d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "FKImmoBundle:Front:registerbien.html.twig", 1);
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
        $__internal_fe88770dea3828aebe60c3555310177f88d33ba1c74e8e327953a57cae682072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe88770dea3828aebe60c3555310177f88d33ba1c74e8e327953a57cae682072->enter($__internal_fe88770dea3828aebe60c3555310177f88d33ba1c74e8e327953a57cae682072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:registerbien.html.twig"));

        $__internal_da1d6d0f2e3e87bffb09ac854478933bfe0f56d4fbe6298c9ab11df5ab56c014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1d6d0f2e3e87bffb09ac854478933bfe0f56d4fbe6298c9ab11df5ab56c014->enter($__internal_da1d6d0f2e3e87bffb09ac854478933bfe0f56d4fbe6298c9ab11df5ab56c014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:registerbien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe88770dea3828aebe60c3555310177f88d33ba1c74e8e327953a57cae682072->leave($__internal_fe88770dea3828aebe60c3555310177f88d33ba1c74e8e327953a57cae682072_prof);

        
        $__internal_da1d6d0f2e3e87bffb09ac854478933bfe0f56d4fbe6298c9ab11df5ab56c014->leave($__internal_da1d6d0f2e3e87bffb09ac854478933bfe0f56d4fbe6298c9ab11df5ab56c014_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25ec5fa41e290582a0d2fd5b7679edadeb39608fbab2c4f2ef542a228fe59d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ec5fa41e290582a0d2fd5b7679edadeb39608fbab2c4f2ef542a228fe59d20->enter($__internal_25ec5fa41e290582a0d2fd5b7679edadeb39608fbab2c4f2ef542a228fe59d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_24aba2eea9ffea7f1c06253071011e66de221f07c9f5376c168630eb2f80d6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24aba2eea9ffea7f1c06253071011e66de221f07c9f5376c168630eb2f80d6c2->enter($__internal_24aba2eea9ffea7f1c06253071011e66de221f07c9f5376c168630eb2f80d6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

 ";
        
        $__internal_24aba2eea9ffea7f1c06253071011e66de221f07c9f5376c168630eb2f80d6c2->leave($__internal_24aba2eea9ffea7f1c06253071011e66de221f07c9f5376c168630eb2f80d6c2_prof);

        
        $__internal_25ec5fa41e290582a0d2fd5b7679edadeb39608fbab2c4f2ef542a228fe59d20->leave($__internal_25ec5fa41e290582a0d2fd5b7679edadeb39608fbab2c4f2ef542a228fe59d20_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_4edb9e552548935d8fa9d8050f4bcbbdc5f097d00f749baf46bae8cafbb3d5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edb9e552548935d8fa9d8050f4bcbbdc5f097d00f749baf46bae8cafbb3d5e6->enter($__internal_4edb9e552548935d8fa9d8050f4bcbbdc5f097d00f749baf46bae8cafbb3d5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a23de770412deb4ef762598ce1063a671d2678a5b4ff13bf9dff8a7deb715511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23de770412deb4ef762598ce1063a671d2678a5b4ff13bf9dff8a7deb715511->enter($__internal_a23de770412deb4ef762598ce1063a671d2678a5b4ff13bf9dff8a7deb715511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo " <div class=\"container\">
<form id=\"formbien\">
<div class=\"form-group\">
    <h1 style=\"text-align:center;\">Informations du Bien </h1>
      <div class=\"form-group\">
    <label for=\"nombien\">Nom du Bien</label>
    <input type=\"text\" class=\"form-control\" id=\"\"name=\"nombien\"required=\"required\">
  </div>

    <div class=\"form-group\">
    <label for=\"prix\">Prix Voulu</label>
    <input type=\"number\" class=\"form-control\" id=\"\"name=\"montantProprio\">
  </div>
    <div class=\"form-group\">
    <label for=\"type\">Type</label>
        ";
        // line 29
        echo "  </div>
    <div class=\"form-group\">
    <label for=\"localite\">Localite</label>
      ";
        // line 38
        echo "  </div>
      <div class=\"form-group\">
        <label for=\"description\">Description</label>
        
            <textarea class=\"form-control\" id=\"description\" name=\"description\" type=\"text\"></textarea>
        
  </div>
  
  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"enregistrer\">

</div>
</form>
</div>
";
        
        $__internal_a23de770412deb4ef762598ce1063a671d2678a5b4ff13bf9dff8a7deb715511->leave($__internal_a23de770412deb4ef762598ce1063a671d2678a5b4ff13bf9dff8a7deb715511_prof);

        
        $__internal_4edb9e552548935d8fa9d8050f4bcbbdc5f097d00f749baf46bae8cafbb3d5e6->leave($__internal_4edb9e552548935d8fa9d8050f4bcbbdc5f097d00f749baf46bae8cafbb3d5e6_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbe9fe212b2715d31b5a709a9e4f03e1dbe28fb88dd3ff58957f4d6b786bd86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe9fe212b2715d31b5a709a9e4f03e1dbe28fb88dd3ff58957f4d6b786bd86a->enter($__internal_cbe9fe212b2715d31b5a709a9e4f03e1dbe28fb88dd3ff58957f4d6b786bd86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_af91dcfc851b3746386deb739482389f6704b26c4b1cc4d896f6383af16a24f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af91dcfc851b3746386deb739482389f6704b26c4b1cc4d896f6383af16a24f4->enter($__internal_af91dcfc851b3746386deb739482389f6704b26c4b1cc4d896f6383af16a24f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_af91dcfc851b3746386deb739482389f6704b26c4b1cc4d896f6383af16a24f4->leave($__internal_af91dcfc851b3746386deb739482389f6704b26c4b1cc4d896f6383af16a24f4_prof);

        
        $__internal_cbe9fe212b2715d31b5a709a9e4f03e1dbe28fb88dd3ff58957f4d6b786bd86a->leave($__internal_cbe9fe212b2715d31b5a709a9e4f03e1dbe28fb88dd3ff58957f4d6b786bd86a_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Front:registerbien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 54,  123 => 53,  100 => 38,  95 => 29,  78 => 8,  69 => 7,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends \"::base1.html.twig\" %}
 {% block stylesheets %}
  {{ parent() }} 
    <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

 {% endblock %}
 {% block main %}
 <div class=\"container\">
<form id=\"formbien\">
<div class=\"form-group\">
    <h1 style=\"text-align:center;\">Informations du Bien </h1>
      <div class=\"form-group\">
    <label for=\"nombien\">Nom du Bien</label>
    <input type=\"text\" class=\"form-control\" id=\"\"name=\"nombien\"required=\"required\">
  </div>

    <div class=\"form-group\">
    <label for=\"prix\">Prix Voulu</label>
    <input type=\"number\" class=\"form-control\" id=\"\"name=\"montantProprio\">
  </div>
    <div class=\"form-group\">
    <label for=\"type\">Type</label>
        {# <select name=\"type\">
        <option value=\"\"></option>
        {% for type in types %}
            <option value=\"{{ type.id}}\">{{type.nomtype}}</option>
        {% endfor %}
        </select> #}
  </div>
    <div class=\"form-group\">
    <label for=\"localite\">Localite</label>
      {# <select name=\"localite\">
        <option value=\"\"></option>
        {% for local in locals %}
            <option value=\"{{ local.id}}\">{{local.nomlocal}}</option>
        {% endfor %}
        </select> #}
  </div>
      <div class=\"form-group\">
        <label for=\"description\">Description</label>
        
            <textarea class=\"form-control\" id=\"description\" name=\"description\" type=\"text\"></textarea>
        
  </div>
  
  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"enregistrer\">

</div>
</form>
</div>
{% endblock %}

 {% block javascripts %}
    <script src=\"{{asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
 {% endblock %}", "FKImmoBundle:Front:registerbien.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Front/registerbien.html.twig");
    }
}
