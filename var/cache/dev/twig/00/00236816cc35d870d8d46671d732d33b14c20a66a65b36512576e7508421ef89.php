<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_2cb68c4553ccd8c2b7b0df46afda6d9104d9ea9c89b6bd3dde0d839ee3889e7a extends Twig_Template
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
        $__internal_20e3e3163c17bd2f004a4581b3aab1c3efbe3db5989fed5eab4e8c841eeb4aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e3e3163c17bd2f004a4581b3aab1c3efbe3db5989fed5eab4e8c841eeb4aef->enter($__internal_20e3e3163c17bd2f004a4581b3aab1c3efbe3db5989fed5eab4e8c841eeb4aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_fb94e2bdfd02f50da90b9dfb8793d3f58838b9bc3cbdb4611a27480a63f13906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb94e2bdfd02f50da90b9dfb8793d3f58838b9bc3cbdb4611a27480a63f13906->enter($__internal_fb94e2bdfd02f50da90b9dfb8793d3f58838b9bc3cbdb4611a27480a63f13906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_20e3e3163c17bd2f004a4581b3aab1c3efbe3db5989fed5eab4e8c841eeb4aef->leave($__internal_20e3e3163c17bd2f004a4581b3aab1c3efbe3db5989fed5eab4e8c841eeb4aef_prof);

        
        $__internal_fb94e2bdfd02f50da90b9dfb8793d3f58838b9bc3cbdb4611a27480a63f13906->leave($__internal_fb94e2bdfd02f50da90b9dfb8793d3f58838b9bc3cbdb4611a27480a63f13906_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
