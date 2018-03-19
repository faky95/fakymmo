<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_179767a40e9c34d30373765ecc48982936381eb0be1a1c677620fa8adf351134 extends Twig_Template
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
        $__internal_f27b6df3d3d40583cc161d43cadd23e0cb862aa2dcc4bd7dcb71ee1c0dcbbaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27b6df3d3d40583cc161d43cadd23e0cb862aa2dcc4bd7dcb71ee1c0dcbbaa2->enter($__internal_f27b6df3d3d40583cc161d43cadd23e0cb862aa2dcc4bd7dcb71ee1c0dcbbaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_b598df719b671088e13923ed040e9f44587fd8076756600c1d7b7f8905109340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b598df719b671088e13923ed040e9f44587fd8076756600c1d7b7f8905109340->enter($__internal_b598df719b671088e13923ed040e9f44587fd8076756600c1d7b7f8905109340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f27b6df3d3d40583cc161d43cadd23e0cb862aa2dcc4bd7dcb71ee1c0dcbbaa2->leave($__internal_f27b6df3d3d40583cc161d43cadd23e0cb862aa2dcc4bd7dcb71ee1c0dcbbaa2_prof);

        
        $__internal_b598df719b671088e13923ed040e9f44587fd8076756600c1d7b7f8905109340->leave($__internal_b598df719b671088e13923ed040e9f44587fd8076756600c1d7b7f8905109340_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
