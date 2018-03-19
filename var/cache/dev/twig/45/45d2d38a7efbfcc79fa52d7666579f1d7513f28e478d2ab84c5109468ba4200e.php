<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_329f6cbbd6e8453f6eb2251063ae88d9b26c073886bc9fa2609187ec1694b0e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d03fa6b9519ae60662cd3aed0eb5ed730184a4dfd340f813ea86654b2d34ca8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03fa6b9519ae60662cd3aed0eb5ed730184a4dfd340f813ea86654b2d34ca8e->enter($__internal_d03fa6b9519ae60662cd3aed0eb5ed730184a4dfd340f813ea86654b2d34ca8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_583cbca41712fa47e7faf46df0a7ef17dc04b6527eacb017c0bcdd9712f6a01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583cbca41712fa47e7faf46df0a7ef17dc04b6527eacb017c0bcdd9712f6a01f->enter($__internal_583cbca41712fa47e7faf46df0a7ef17dc04b6527eacb017c0bcdd9712f6a01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03fa6b9519ae60662cd3aed0eb5ed730184a4dfd340f813ea86654b2d34ca8e->leave($__internal_d03fa6b9519ae60662cd3aed0eb5ed730184a4dfd340f813ea86654b2d34ca8e_prof);

        
        $__internal_583cbca41712fa47e7faf46df0a7ef17dc04b6527eacb017c0bcdd9712f6a01f->leave($__internal_583cbca41712fa47e7faf46df0a7ef17dc04b6527eacb017c0bcdd9712f6a01f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8fe3c2c28420780bd1462e6578ce86afdd6fe9376c59b83b11d9b763b5aaa708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe3c2c28420780bd1462e6578ce86afdd6fe9376c59b83b11d9b763b5aaa708->enter($__internal_8fe3c2c28420780bd1462e6578ce86afdd6fe9376c59b83b11d9b763b5aaa708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e5b1bc0faed7a6c878b74c7943ca98f237bc14bf230d7236b49854581e234bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5b1bc0faed7a6c878b74c7943ca98f237bc14bf230d7236b49854581e234bc->enter($__internal_2e5b1bc0faed7a6c878b74c7943ca98f237bc14bf230d7236b49854581e234bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e5b1bc0faed7a6c878b74c7943ca98f237bc14bf230d7236b49854581e234bc->leave($__internal_2e5b1bc0faed7a6c878b74c7943ca98f237bc14bf230d7236b49854581e234bc_prof);

        
        $__internal_8fe3c2c28420780bd1462e6578ce86afdd6fe9376c59b83b11d9b763b5aaa708->leave($__internal_8fe3c2c28420780bd1462e6578ce86afdd6fe9376c59b83b11d9b763b5aaa708_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c279770980a4334c4cf299b11b88953037138c82ede9a0b3da07ab36b532ff07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c279770980a4334c4cf299b11b88953037138c82ede9a0b3da07ab36b532ff07->enter($__internal_c279770980a4334c4cf299b11b88953037138c82ede9a0b3da07ab36b532ff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ee138aa180903008422776e240788b8818ed5f34689eac6d07447a629d3989e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee138aa180903008422776e240788b8818ed5f34689eac6d07447a629d3989e->enter($__internal_7ee138aa180903008422776e240788b8818ed5f34689eac6d07447a629d3989e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ee138aa180903008422776e240788b8818ed5f34689eac6d07447a629d3989e->leave($__internal_7ee138aa180903008422776e240788b8818ed5f34689eac6d07447a629d3989e_prof);

        
        $__internal_c279770980a4334c4cf299b11b88953037138c82ede9a0b3da07ab36b532ff07->leave($__internal_c279770980a4334c4cf299b11b88953037138c82ede9a0b3da07ab36b532ff07_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55fc292a63a93872661efda595337d1578284fbde20118164e6e0f2837cd696e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fc292a63a93872661efda595337d1578284fbde20118164e6e0f2837cd696e->enter($__internal_55fc292a63a93872661efda595337d1578284fbde20118164e6e0f2837cd696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33c5b588f81f210292187f616c526c39168e4967f7a7377614b5dcd23daf3b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c5b588f81f210292187f616c526c39168e4967f7a7377614b5dcd23daf3b89->enter($__internal_33c5b588f81f210292187f616c526c39168e4967f7a7377614b5dcd23daf3b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33c5b588f81f210292187f616c526c39168e4967f7a7377614b5dcd23daf3b89->leave($__internal_33c5b588f81f210292187f616c526c39168e4967f7a7377614b5dcd23daf3b89_prof);

        
        $__internal_55fc292a63a93872661efda595337d1578284fbde20118164e6e0f2837cd696e->leave($__internal_55fc292a63a93872661efda595337d1578284fbde20118164e6e0f2837cd696e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
