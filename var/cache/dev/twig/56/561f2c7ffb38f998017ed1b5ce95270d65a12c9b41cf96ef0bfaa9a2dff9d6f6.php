<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5bbcc91bc662602a832a60106a4b006d32815160947b516f96b1f955ceae2874 extends Twig_Template
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
        $__internal_4031a95bb4743decd961db34be5477c8b7674de2ed7037c43250172711b9edc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4031a95bb4743decd961db34be5477c8b7674de2ed7037c43250172711b9edc7->enter($__internal_4031a95bb4743decd961db34be5477c8b7674de2ed7037c43250172711b9edc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c05a82dbc8e5309a2ca8208ba92ca39cd83eb1d01cc9730bd965697e3a84baa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05a82dbc8e5309a2ca8208ba92ca39cd83eb1d01cc9730bd965697e3a84baa2->enter($__internal_c05a82dbc8e5309a2ca8208ba92ca39cd83eb1d01cc9730bd965697e3a84baa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4031a95bb4743decd961db34be5477c8b7674de2ed7037c43250172711b9edc7->leave($__internal_4031a95bb4743decd961db34be5477c8b7674de2ed7037c43250172711b9edc7_prof);

        
        $__internal_c05a82dbc8e5309a2ca8208ba92ca39cd83eb1d01cc9730bd965697e3a84baa2->leave($__internal_c05a82dbc8e5309a2ca8208ba92ca39cd83eb1d01cc9730bd965697e3a84baa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
