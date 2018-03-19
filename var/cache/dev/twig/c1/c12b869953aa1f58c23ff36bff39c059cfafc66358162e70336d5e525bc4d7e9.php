<?php

/* FKImmoBundle:Front:confirm.html.twig */
class __TwigTemplate_a1f2ada6da48f9a2d1595eaf69911df26df6f67b02b8cc18b0788cd34cac9c06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FKImmoBundle:Front:confirm.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc657e3f86343d12636bb11420ea6fd5034e955fcb75f5bc73e205be94481143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc657e3f86343d12636bb11420ea6fd5034e955fcb75f5bc73e205be94481143->enter($__internal_dc657e3f86343d12636bb11420ea6fd5034e955fcb75f5bc73e205be94481143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:confirm.html.twig"));

        $__internal_d86d82858bd87b3fd6646aac06525d453e553b7a779d02f7f2ffe735211db6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86d82858bd87b3fd6646aac06525d453e553b7a779d02f7f2ffe735211db6c5->enter($__internal_d86d82858bd87b3fd6646aac06525d453e553b7a779d02f7f2ffe735211db6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc657e3f86343d12636bb11420ea6fd5034e955fcb75f5bc73e205be94481143->leave($__internal_dc657e3f86343d12636bb11420ea6fd5034e955fcb75f5bc73e205be94481143_prof);

        
        $__internal_d86d82858bd87b3fd6646aac06525d453e553b7a779d02f7f2ffe735211db6c5->leave($__internal_d86d82858bd87b3fd6646aac06525d453e553b7a779d02f7f2ffe735211db6c5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e0533f8d370b895df1ea75cd658f9f374190ad32e0c39ced57dde8918e71e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0533f8d370b895df1ea75cd658f9f374190ad32e0c39ced57dde8918e71e41->enter($__internal_0e0533f8d370b895df1ea75cd658f9f374190ad32e0c39ced57dde8918e71e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90b425339fe8bc4a2fc66a280212fa038bc1fb5bf9320ce1cb74128a9ee8103c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b425339fe8bc4a2fc66a280212fa038bc1fb5bf9320ce1cb74128a9ee8103c->enter($__internal_90b425339fe8bc4a2fc66a280212fa038bc1fb5bf9320ce1cb74128a9ee8103c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
 <h1> welcome </h1>
 <p> reservation prise en compte </p>
";
        
        $__internal_90b425339fe8bc4a2fc66a280212fa038bc1fb5bf9320ce1cb74128a9ee8103c->leave($__internal_90b425339fe8bc4a2fc66a280212fa038bc1fb5bf9320ce1cb74128a9ee8103c_prof);

        
        $__internal_0e0533f8d370b895df1ea75cd658f9f374190ad32e0c39ced57dde8918e71e41->leave($__internal_0e0533f8d370b895df1ea75cd658f9f374190ad32e0c39ced57dde8918e71e41_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Front:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}


 {% block body %} 
 <h1> welcome </h1>
 <p> reservation prise en compte </p>
{% endblock %}", "FKImmoBundle:Front:confirm.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Front/confirm.html.twig");
    }
}
