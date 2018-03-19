<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_faa9f882c723589fe9a69f2fc1a609dadfdcdb44e4c99548838ad8d752a4fa9f extends Twig_Template
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
        $__internal_43c722e8974e6fa7426c1042b294d65e008f4ae55c2e45de4f7492fa38507299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c722e8974e6fa7426c1042b294d65e008f4ae55c2e45de4f7492fa38507299->enter($__internal_43c722e8974e6fa7426c1042b294d65e008f4ae55c2e45de4f7492fa38507299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_32f18adb328c155172fab9c82c010c7ef7bd805af1b231c67a1d4e1c7f1eb8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f18adb328c155172fab9c82c010c7ef7bd805af1b231c67a1d4e1c7f1eb8ab->enter($__internal_32f18adb328c155172fab9c82c010c7ef7bd805af1b231c67a1d4e1c7f1eb8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_43c722e8974e6fa7426c1042b294d65e008f4ae55c2e45de4f7492fa38507299->leave($__internal_43c722e8974e6fa7426c1042b294d65e008f4ae55c2e45de4f7492fa38507299_prof);

        
        $__internal_32f18adb328c155172fab9c82c010c7ef7bd805af1b231c67a1d4e1c7f1eb8ab->leave($__internal_32f18adb328c155172fab9c82c010c7ef7bd805af1b231c67a1d4e1c7f1eb8ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
