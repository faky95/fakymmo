<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bf97721a6501442f57ddc1ff919a99c756a126ce4d3d5a5394e75580e59181e2 extends Twig_Template
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
        $__internal_5587cf545414ad5ee7ddc9f08a4fcae0b5e09b511b1a8d388112e273ebff8c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5587cf545414ad5ee7ddc9f08a4fcae0b5e09b511b1a8d388112e273ebff8c83->enter($__internal_5587cf545414ad5ee7ddc9f08a4fcae0b5e09b511b1a8d388112e273ebff8c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ea2d7926ac629acfbc6e1e44c82f5ce2629ab25ccd6ea6d75e20cfa35a2f5ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2d7926ac629acfbc6e1e44c82f5ce2629ab25ccd6ea6d75e20cfa35a2f5ebf->enter($__internal_ea2d7926ac629acfbc6e1e44c82f5ce2629ab25ccd6ea6d75e20cfa35a2f5ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5587cf545414ad5ee7ddc9f08a4fcae0b5e09b511b1a8d388112e273ebff8c83->leave($__internal_5587cf545414ad5ee7ddc9f08a4fcae0b5e09b511b1a8d388112e273ebff8c83_prof);

        
        $__internal_ea2d7926ac629acfbc6e1e44c82f5ce2629ab25ccd6ea6d75e20cfa35a2f5ebf->leave($__internal_ea2d7926ac629acfbc6e1e44c82f5ce2629ab25ccd6ea6d75e20cfa35a2f5ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
