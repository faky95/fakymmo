<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_e50b4d92f32e4e1270e54a95fdb3f41af7325337f192ca676f338c58e8ea8f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ff5f6b7d3101e816e620bd9e7f541c094757ee54505be55e83839c2db428e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff5f6b7d3101e816e620bd9e7f541c094757ee54505be55e83839c2db428e3c->enter($__internal_0ff5f6b7d3101e816e620bd9e7f541c094757ee54505be55e83839c2db428e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_5f295ce9be8926e999753beeca23bfcf5c16287140d5878d9eaf1c7012b0d241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f295ce9be8926e999753beeca23bfcf5c16287140d5878d9eaf1c7012b0d241->enter($__internal_5f295ce9be8926e999753beeca23bfcf5c16287140d5878d9eaf1c7012b0d241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_0ff5f6b7d3101e816e620bd9e7f541c094757ee54505be55e83839c2db428e3c->leave($__internal_0ff5f6b7d3101e816e620bd9e7f541c094757ee54505be55e83839c2db428e3c_prof);

        
        $__internal_5f295ce9be8926e999753beeca23bfcf5c16287140d5878d9eaf1c7012b0d241->leave($__internal_5f295ce9be8926e999753beeca23bfcf5c16287140d5878d9eaf1c7012b0d241_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
