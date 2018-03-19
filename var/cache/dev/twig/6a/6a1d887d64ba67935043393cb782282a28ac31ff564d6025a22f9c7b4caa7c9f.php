<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_49eb5212ebe09d7e0bf69b767fe010adcd7a8eb4668e847bd13c765afcd6367b extends Twig_Template
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
        $__internal_e7217c04eb1e37402c5579c123f80fcd35b7c88e374bead88c1eb7db61fcd0f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7217c04eb1e37402c5579c123f80fcd35b7c88e374bead88c1eb7db61fcd0f4->enter($__internal_e7217c04eb1e37402c5579c123f80fcd35b7c88e374bead88c1eb7db61fcd0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a1e6e59641dd73fcd4cd55ad7a934b780ddc7703d89568d2cbb7ce92755b4d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e6e59641dd73fcd4cd55ad7a934b780ddc7703d89568d2cbb7ce92755b4d10->enter($__internal_a1e6e59641dd73fcd4cd55ad7a934b780ddc7703d89568d2cbb7ce92755b4d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e7217c04eb1e37402c5579c123f80fcd35b7c88e374bead88c1eb7db61fcd0f4->leave($__internal_e7217c04eb1e37402c5579c123f80fcd35b7c88e374bead88c1eb7db61fcd0f4_prof);

        
        $__internal_a1e6e59641dd73fcd4cd55ad7a934b780ddc7703d89568d2cbb7ce92755b4d10->leave($__internal_a1e6e59641dd73fcd4cd55ad7a934b780ddc7703d89568d2cbb7ce92755b4d10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
