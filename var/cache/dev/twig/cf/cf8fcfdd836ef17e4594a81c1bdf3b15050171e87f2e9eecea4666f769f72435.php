<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3ca932419d23f79c6e42b9723d0d413173a631772645978bfc988f61a557aa90 extends Twig_Template
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
        $__internal_88aa8d82e2e15c079bdcfa7f3674920b8932b1a265b09656c4d8fb084a4bf848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88aa8d82e2e15c079bdcfa7f3674920b8932b1a265b09656c4d8fb084a4bf848->enter($__internal_88aa8d82e2e15c079bdcfa7f3674920b8932b1a265b09656c4d8fb084a4bf848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_37477e879a008f9cbb63c81e8beef1a6ebb9176d3639f21adba641a2e881459a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37477e879a008f9cbb63c81e8beef1a6ebb9176d3639f21adba641a2e881459a->enter($__internal_37477e879a008f9cbb63c81e8beef1a6ebb9176d3639f21adba641a2e881459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_88aa8d82e2e15c079bdcfa7f3674920b8932b1a265b09656c4d8fb084a4bf848->leave($__internal_88aa8d82e2e15c079bdcfa7f3674920b8932b1a265b09656c4d8fb084a4bf848_prof);

        
        $__internal_37477e879a008f9cbb63c81e8beef1a6ebb9176d3639f21adba641a2e881459a->leave($__internal_37477e879a008f9cbb63c81e8beef1a6ebb9176d3639f21adba641a2e881459a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
