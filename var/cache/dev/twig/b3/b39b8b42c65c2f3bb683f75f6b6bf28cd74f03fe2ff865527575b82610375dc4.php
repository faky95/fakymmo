<?php

/* FKImmoBundle:Front:reserver.html.twig */
class __TwigTemplate_6ce6c8975aa989e5d60c779cf5fca5c3fb4285bb1ef051c09f79fb16fb3ff41b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base1.html.twig", "FKImmoBundle:Front:reserver.html.twig", 2);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_924caa19ad4f2247ba3224842c8c85e9049eb7cbd3e9eb2386830cddcd185eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924caa19ad4f2247ba3224842c8c85e9049eb7cbd3e9eb2386830cddcd185eaa->enter($__internal_924caa19ad4f2247ba3224842c8c85e9049eb7cbd3e9eb2386830cddcd185eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:reserver.html.twig"));

        $__internal_0fd1e7b626b1c26145426816a6646563ac490b6627de7feae0c4e122fc343df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd1e7b626b1c26145426816a6646563ac490b6627de7feae0c4e122fc343df8->enter($__internal_0fd1e7b626b1c26145426816a6646563ac490b6627de7feae0c4e122fc343df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:reserver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_924caa19ad4f2247ba3224842c8c85e9049eb7cbd3e9eb2386830cddcd185eaa->leave($__internal_924caa19ad4f2247ba3224842c8c85e9049eb7cbd3e9eb2386830cddcd185eaa_prof);

        
        $__internal_0fd1e7b626b1c26145426816a6646563ac490b6627de7feae0c4e122fc343df8->leave($__internal_0fd1e7b626b1c26145426816a6646563ac490b6627de7feae0c4e122fc343df8_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_f3051fc79b1f9e6955e3369dfb4608052d41d7807e3e29575f0f523c68939f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3051fc79b1f9e6955e3369dfb4608052d41d7807e3e29575f0f523c68939f0f->enter($__internal_f3051fc79b1f9e6955e3369dfb4608052d41d7807e3e29575f0f523c68939f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_adcbb242e442f27936118771185c035e9c7724a851af5f29f7e206bb067b402c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcbb242e442f27936118771185c035e9c7724a851af5f29f7e206bb067b402c->enter($__internal_adcbb242e442f27936118771185c035e9c7724a851af5f29f7e206bb067b402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "
   <div class=\"row\" style=\"display:flex;justify-content:space-between;margin-top:50px;\">
   ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 8
            echo "    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img class=\"d-block w-100\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
            echo "\" alt=\"\" style=\"width:90%;\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"\" alt=\"\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"...\" alt=\"\">
    </div>
  </div>
  <div style=\"margin-left:20px;\">
  <h3 > Description : </h3>
  <p style=\"color:black;font-size:20px;\"> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "description", array()), "html", null, true);
            echo " <br> Se situe à ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "localite", array()), "html", null, true);
            echo " <br> Prix:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "prixlocation", array()), "html", null, true);
            echo "Fcfa</p>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
</div>
         
<div class=\"form-row\">
<div class=\"form-group col-md-6\">
";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
</div>
</div>
</div>

   

";
        
        $__internal_adcbb242e442f27936118771185c035e9c7724a851af5f29f7e206bb067b402c->leave($__internal_adcbb242e442f27936118771185c035e9c7724a851af5f29f7e206bb067b402c_prof);

        
        $__internal_f3051fc79b1f9e6955e3369dfb4608052d41d7807e3e29575f0f523c68939f0f->leave($__internal_f3051fc79b1f9e6955e3369dfb4608052d41d7807e3e29575f0f523c68939f0f_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Front:reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  89 => 25,  76 => 22,  62 => 11,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 2,);
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
{% extends \"::base1.html.twig\" %}
       
{% block main %}

   <div class=\"row\" style=\"display:flex;justify-content:space-between;margin-top:50px;\">
   {% for image in biens.images %}
    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img class=\"d-block w-100\" src=\"{{asset('images/'~image.image)}}\" alt=\"\" style=\"width:90%;\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"\" alt=\"\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"...\" alt=\"\">
    </div>
  </div>
  <div style=\"margin-left:20px;\">
  <h3 > Description : </h3>
  <p style=\"color:black;font-size:20px;\"> {{biens.description}} <br> Se situe à {{biens.localite}} <br> Prix:{{biens.prixlocation}}Fcfa</p>
  </div>
  {% endfor %}

</div>
         
<div class=\"form-row\">
<div class=\"form-group col-md-6\">
{{form(form)}}
</div>
</div>
</div>

   

{% endblock %}", "FKImmoBundle:Front:reserver.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Front/reserver.html.twig");
    }
}
