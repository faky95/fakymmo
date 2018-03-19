<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_04f651839a058a457526326601559ff221af2785d6c2fadb9dfe4bb2d881f401 extends Twig_Template
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
        $__internal_3efe25ee848fd51af5d8102841e26d8cd1c655c56eeba762be49593f32d49c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3efe25ee848fd51af5d8102841e26d8cd1c655c56eeba762be49593f32d49c4d->enter($__internal_3efe25ee848fd51af5d8102841e26d8cd1c655c56eeba762be49593f32d49c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6ffa9b0d875579e4ca164bd3558a7543bb39333c2adb981a93614a5f43f16ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffa9b0d875579e4ca164bd3558a7543bb39333c2adb981a93614a5f43f16ecf->enter($__internal_6ffa9b0d875579e4ca164bd3558a7543bb39333c2adb981a93614a5f43f16ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3efe25ee848fd51af5d8102841e26d8cd1c655c56eeba762be49593f32d49c4d->leave($__internal_3efe25ee848fd51af5d8102841e26d8cd1c655c56eeba762be49593f32d49c4d_prof);

        
        $__internal_6ffa9b0d875579e4ca164bd3558a7543bb39333c2adb981a93614a5f43f16ecf->leave($__internal_6ffa9b0d875579e4ca164bd3558a7543bb39333c2adb981a93614a5f43f16ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
