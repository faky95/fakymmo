<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_fae41b783eeae390e5dedeb02f08e2e658ba9a0bdf25d887371141328d2f1dad extends Twig_Template
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
        $__internal_235ab07f1b9f53fd21b529dffde9fe75562d7bd672c91acc14ca4e43a51cc05d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235ab07f1b9f53fd21b529dffde9fe75562d7bd672c91acc14ca4e43a51cc05d->enter($__internal_235ab07f1b9f53fd21b529dffde9fe75562d7bd672c91acc14ca4e43a51cc05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_fa6ce13f61a07735194684d9d6fa0f789dc845520c5e877bf700b729b07aba8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6ce13f61a07735194684d9d6fa0f789dc845520c5e877bf700b729b07aba8b->enter($__internal_fa6ce13f61a07735194684d9d6fa0f789dc845520c5e877bf700b729b07aba8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_235ab07f1b9f53fd21b529dffde9fe75562d7bd672c91acc14ca4e43a51cc05d->leave($__internal_235ab07f1b9f53fd21b529dffde9fe75562d7bd672c91acc14ca4e43a51cc05d_prof);

        
        $__internal_fa6ce13f61a07735194684d9d6fa0f789dc845520c5e877bf700b729b07aba8b->leave($__internal_fa6ce13f61a07735194684d9d6fa0f789dc845520c5e877bf700b729b07aba8b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
