<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_166a8e3887870380ed839db8330f922a4468e4a840df779996698f03929da8b6 extends Twig_Template
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
        $__internal_4a8d03835cf89691de635bbbe154aa3aa8479fd28a19a083745ebb32ef4c4420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8d03835cf89691de635bbbe154aa3aa8479fd28a19a083745ebb32ef4c4420->enter($__internal_4a8d03835cf89691de635bbbe154aa3aa8479fd28a19a083745ebb32ef4c4420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8464098828fa5b0e157cec4f08bbc48df65294f2ef5ed48398af7cd691da9b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8464098828fa5b0e157cec4f08bbc48df65294f2ef5ed48398af7cd691da9b1d->enter($__internal_8464098828fa5b0e157cec4f08bbc48df65294f2ef5ed48398af7cd691da9b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4a8d03835cf89691de635bbbe154aa3aa8479fd28a19a083745ebb32ef4c4420->leave($__internal_4a8d03835cf89691de635bbbe154aa3aa8479fd28a19a083745ebb32ef4c4420_prof);

        
        $__internal_8464098828fa5b0e157cec4f08bbc48df65294f2ef5ed48398af7cd691da9b1d->leave($__internal_8464098828fa5b0e157cec4f08bbc48df65294f2ef5ed48398af7cd691da9b1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
