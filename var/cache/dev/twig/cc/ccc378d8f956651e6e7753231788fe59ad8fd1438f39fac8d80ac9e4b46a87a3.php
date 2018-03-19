<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bc5144ddba49b757e36e07faeab1da42f66a4a31a8544ce5695b8996a9e33a49 extends Twig_Template
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
        $__internal_f9d7414dedd0dc17a53c68e6eeade8e294e1274cacb00079ec33eca4a4c8c66e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d7414dedd0dc17a53c68e6eeade8e294e1274cacb00079ec33eca4a4c8c66e->enter($__internal_f9d7414dedd0dc17a53c68e6eeade8e294e1274cacb00079ec33eca4a4c8c66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0606fa2720e245f9758f8386feb0befeea7e151fb1befdbf688a8780759a64cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0606fa2720e245f9758f8386feb0befeea7e151fb1befdbf688a8780759a64cb->enter($__internal_0606fa2720e245f9758f8386feb0befeea7e151fb1befdbf688a8780759a64cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f9d7414dedd0dc17a53c68e6eeade8e294e1274cacb00079ec33eca4a4c8c66e->leave($__internal_f9d7414dedd0dc17a53c68e6eeade8e294e1274cacb00079ec33eca4a4c8c66e_prof);

        
        $__internal_0606fa2720e245f9758f8386feb0befeea7e151fb1befdbf688a8780759a64cb->leave($__internal_0606fa2720e245f9758f8386feb0befeea7e151fb1befdbf688a8780759a64cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
