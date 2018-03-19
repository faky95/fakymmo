<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_abf98d7a9b43b68967e67b15d2e296e9d952b98a539d739bf2968509e1497a73 extends Twig_Template
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
        $__internal_4659a57a4e9a5528c3bf1712a9f642d79efa66e7073658b42ce95f6ff84b70ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4659a57a4e9a5528c3bf1712a9f642d79efa66e7073658b42ce95f6ff84b70ba->enter($__internal_4659a57a4e9a5528c3bf1712a9f642d79efa66e7073658b42ce95f6ff84b70ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_61347fe594a9f5ac5f398359509c64956966f05e0bd07b13a42fe79ada1565ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61347fe594a9f5ac5f398359509c64956966f05e0bd07b13a42fe79ada1565ce->enter($__internal_61347fe594a9f5ac5f398359509c64956966f05e0bd07b13a42fe79ada1565ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4659a57a4e9a5528c3bf1712a9f642d79efa66e7073658b42ce95f6ff84b70ba->leave($__internal_4659a57a4e9a5528c3bf1712a9f642d79efa66e7073658b42ce95f6ff84b70ba_prof);

        
        $__internal_61347fe594a9f5ac5f398359509c64956966f05e0bd07b13a42fe79ada1565ce->leave($__internal_61347fe594a9f5ac5f398359509c64956966f05e0bd07b13a42fe79ada1565ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
