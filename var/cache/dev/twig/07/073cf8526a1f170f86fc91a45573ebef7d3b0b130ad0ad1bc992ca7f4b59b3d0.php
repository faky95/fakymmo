<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_da41fbab54f03a79937df88655ddfbacceadd7e946b907348f1059ad01e570ed extends Twig_Template
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
        $__internal_64562111232e14a8a11b84a61f46c3720cd66f7c0de5d8824d1cb1ee8ab76f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64562111232e14a8a11b84a61f46c3720cd66f7c0de5d8824d1cb1ee8ab76f4b->enter($__internal_64562111232e14a8a11b84a61f46c3720cd66f7c0de5d8824d1cb1ee8ab76f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b8fe8e5781495fe0e681350effc6032e509720aa5273412930ba495bcf941e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fe8e5781495fe0e681350effc6032e509720aa5273412930ba495bcf941e65->enter($__internal_b8fe8e5781495fe0e681350effc6032e509720aa5273412930ba495bcf941e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_64562111232e14a8a11b84a61f46c3720cd66f7c0de5d8824d1cb1ee8ab76f4b->leave($__internal_64562111232e14a8a11b84a61f46c3720cd66f7c0de5d8824d1cb1ee8ab76f4b_prof);

        
        $__internal_b8fe8e5781495fe0e681350effc6032e509720aa5273412930ba495bcf941e65->leave($__internal_b8fe8e5781495fe0e681350effc6032e509720aa5273412930ba495bcf941e65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
