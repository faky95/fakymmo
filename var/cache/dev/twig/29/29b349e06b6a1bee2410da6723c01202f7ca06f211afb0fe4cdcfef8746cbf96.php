<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_59061cb94b93032ad27b306d3526cb08c9d82d63b40a9febe99ca0a96a6108ea extends Twig_Template
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
        $__internal_1cc646394ade2b7b719e327e680886adc6e083f06f06fac3795a74851c00d69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc646394ade2b7b719e327e680886adc6e083f06f06fac3795a74851c00d69e->enter($__internal_1cc646394ade2b7b719e327e680886adc6e083f06f06fac3795a74851c00d69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4df1ff25ba9f89779e3db4170c2431c791ca33a5b4ee1c72ff4e7c75b19f2c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df1ff25ba9f89779e3db4170c2431c791ca33a5b4ee1c72ff4e7c75b19f2c18->enter($__internal_4df1ff25ba9f89779e3db4170c2431c791ca33a5b4ee1c72ff4e7c75b19f2c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1cc646394ade2b7b719e327e680886adc6e083f06f06fac3795a74851c00d69e->leave($__internal_1cc646394ade2b7b719e327e680886adc6e083f06f06fac3795a74851c00d69e_prof);

        
        $__internal_4df1ff25ba9f89779e3db4170c2431c791ca33a5b4ee1c72ff4e7c75b19f2c18->leave($__internal_4df1ff25ba9f89779e3db4170c2431c791ca33a5b4ee1c72ff4e7c75b19f2c18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
