<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_14601b2902c925935ac7f8b2ef87638692923cfa1732b5719fb3b23a7d55976f extends Twig_Template
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
        $__internal_67b80fcaeffbc14ed6b480d78ca560e0039276c3d3956f89bc6a9c9515b8a628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b80fcaeffbc14ed6b480d78ca560e0039276c3d3956f89bc6a9c9515b8a628->enter($__internal_67b80fcaeffbc14ed6b480d78ca560e0039276c3d3956f89bc6a9c9515b8a628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_717dde2784d3320c84f463c5bb90dc17aff1da09b51d7eec43b37e1b7df00d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717dde2784d3320c84f463c5bb90dc17aff1da09b51d7eec43b37e1b7df00d30->enter($__internal_717dde2784d3320c84f463c5bb90dc17aff1da09b51d7eec43b37e1b7df00d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_67b80fcaeffbc14ed6b480d78ca560e0039276c3d3956f89bc6a9c9515b8a628->leave($__internal_67b80fcaeffbc14ed6b480d78ca560e0039276c3d3956f89bc6a9c9515b8a628_prof);

        
        $__internal_717dde2784d3320c84f463c5bb90dc17aff1da09b51d7eec43b37e1b7df00d30->leave($__internal_717dde2784d3320c84f463c5bb90dc17aff1da09b51d7eec43b37e1b7df00d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
