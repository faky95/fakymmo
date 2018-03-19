<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_5cd3f3802589f9adaf3b2d7e1120ecb62461bc5a3d51901136612503b6975ba1 extends Twig_Template
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
        $__internal_335ce2862bdd9f5c3877a4a6872f40bee4d1e9d087771fb79e5e73c08bc80443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335ce2862bdd9f5c3877a4a6872f40bee4d1e9d087771fb79e5e73c08bc80443->enter($__internal_335ce2862bdd9f5c3877a4a6872f40bee4d1e9d087771fb79e5e73c08bc80443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_b303dc669f457a79f974846f3db4e1d3d4b8af5ed55d073951da7f8a02f9c55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b303dc669f457a79f974846f3db4e1d3d4b8af5ed55d073951da7f8a02f9c55d->enter($__internal_b303dc669f457a79f974846f3db4e1d3d4b8af5ed55d073951da7f8a02f9c55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["filename"] ?? $this->getContext($context, "filename"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_335ce2862bdd9f5c3877a4a6872f40bee4d1e9d087771fb79e5e73c08bc80443->leave($__internal_335ce2862bdd9f5c3877a4a6872f40bee4d1e9d087771fb79e5e73c08bc80443_prof);

        
        $__internal_b303dc669f457a79f974846f3db4e1d3d4b8af5ed55d073951da7f8a02f9c55d->leave($__internal_b303dc669f457a79f974846f3db4e1d3d4b8af5ed55d073951da7f8a02f9c55d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
