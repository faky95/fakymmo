<?php

/* FKImmoBundle:Front:image.html.twig */
class __TwigTemplate_ff8e1f2f940f68e1f2401c482d3881c29c304ff8100d93509b64577fd9d4335e extends Twig_Template
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
        $__internal_f016ec68bebc4027f1b8aca6434a5359bc45a8f334734ab8506ad201cfd44dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f016ec68bebc4027f1b8aca6434a5359bc45a8f334734ab8506ad201cfd44dad->enter($__internal_f016ec68bebc4027f1b8aca6434a5359bc45a8f334734ab8506ad201cfd44dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:image.html.twig"));

        $__internal_57f91b9e67142483dda07113e7888be552274b830737b341c56d57c08591478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f91b9e67142483dda07113e7888be552274b830737b341c56d57c08591478a->enter($__internal_57f91b9e67142483dda07113e7888be552274b830737b341c56d57c08591478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Front:image.html.twig"));

        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 2
            echo " <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
            echo "</li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f016ec68bebc4027f1b8aca6434a5359bc45a8f334734ab8506ad201cfd44dad->leave($__internal_f016ec68bebc4027f1b8aca6434a5359bc45a8f334734ab8506ad201cfd44dad_prof);

        
        $__internal_57f91b9e67142483dda07113e7888be552274b830737b341c56d57c08591478a->leave($__internal_57f91b9e67142483dda07113e7888be552274b830737b341c56d57c08591478a_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Front:image.html.twig";
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
        return new Twig_Source(" {% for image in images %}
 <li> {{ image.image}}</li>
 {% endfor %}", "FKImmoBundle:Front:image.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Front/image.html.twig");
    }
}
