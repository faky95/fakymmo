<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3c599c4b27a290e20c16b90b5861e5341b22cc750da9270c2344d5eec6dfdb0c extends Twig_Template
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
        $__internal_40e816c4fc583445417ff7d617c4cad4d65734c628fb4cf539e74f8d154689c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e816c4fc583445417ff7d617c4cad4d65734c628fb4cf539e74f8d154689c4->enter($__internal_40e816c4fc583445417ff7d617c4cad4d65734c628fb4cf539e74f8d154689c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ad273e451bdf2c29c1d2d4cd92f98c1382db255169bf31da71d772a97171e639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad273e451bdf2c29c1d2d4cd92f98c1382db255169bf31da71d772a97171e639->enter($__internal_ad273e451bdf2c29c1d2d4cd92f98c1382db255169bf31da71d772a97171e639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_40e816c4fc583445417ff7d617c4cad4d65734c628fb4cf539e74f8d154689c4->leave($__internal_40e816c4fc583445417ff7d617c4cad4d65734c628fb4cf539e74f8d154689c4_prof);

        
        $__internal_ad273e451bdf2c29c1d2d4cd92f98c1382db255169bf31da71d772a97171e639->leave($__internal_ad273e451bdf2c29c1d2d4cd92f98c1382db255169bf31da71d772a97171e639_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
