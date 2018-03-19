<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_70bdef0c4b271c2ce964db3a3c322d839ab794f0ad657a7af3892042c1995fce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_645c088cbb03820e71d20cf19d0ca3de4996818ad64cfa5fc6318992970d2122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645c088cbb03820e71d20cf19d0ca3de4996818ad64cfa5fc6318992970d2122->enter($__internal_645c088cbb03820e71d20cf19d0ca3de4996818ad64cfa5fc6318992970d2122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9346ca054c2d3bb74f0af89bf16ec56b55b53d7d37b5f8e2669717595365322e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9346ca054c2d3bb74f0af89bf16ec56b55b53d7d37b5f8e2669717595365322e->enter($__internal_9346ca054c2d3bb74f0af89bf16ec56b55b53d7d37b5f8e2669717595365322e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_645c088cbb03820e71d20cf19d0ca3de4996818ad64cfa5fc6318992970d2122->leave($__internal_645c088cbb03820e71d20cf19d0ca3de4996818ad64cfa5fc6318992970d2122_prof);

        
        $__internal_9346ca054c2d3bb74f0af89bf16ec56b55b53d7d37b5f8e2669717595365322e->leave($__internal_9346ca054c2d3bb74f0af89bf16ec56b55b53d7d37b5f8e2669717595365322e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec283159bdf7da080d97b8a4b42e312c94391c88625fa7d1a10d2e6b4994931d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec283159bdf7da080d97b8a4b42e312c94391c88625fa7d1a10d2e6b4994931d->enter($__internal_ec283159bdf7da080d97b8a4b42e312c94391c88625fa7d1a10d2e6b4994931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b976ac4ad10e15da2fbe5fca568704b79d69f3b529cb1811ab98d454c861e9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b976ac4ad10e15da2fbe5fca568704b79d69f3b529cb1811ab98d454c861e9c5->enter($__internal_b976ac4ad10e15da2fbe5fca568704b79d69f3b529cb1811ab98d454c861e9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b976ac4ad10e15da2fbe5fca568704b79d69f3b529cb1811ab98d454c861e9c5->leave($__internal_b976ac4ad10e15da2fbe5fca568704b79d69f3b529cb1811ab98d454c861e9c5_prof);

        
        $__internal_ec283159bdf7da080d97b8a4b42e312c94391c88625fa7d1a10d2e6b4994931d->leave($__internal_ec283159bdf7da080d97b8a4b42e312c94391c88625fa7d1a10d2e6b4994931d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
