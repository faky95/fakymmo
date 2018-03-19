<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_df981b145fffb9f9231934668effbdbcc14efc76f5e38ae9aebea95f9d4675e3 extends Twig_Template
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
        $__internal_fefe131c2396aeac5e973029dc0dca1465b8b098722e19568043927dadcddf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefe131c2396aeac5e973029dc0dca1465b8b098722e19568043927dadcddf66->enter($__internal_fefe131c2396aeac5e973029dc0dca1465b8b098722e19568043927dadcddf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_50bd6ea7bde0b377b566921f37eeaeee495b3f1b264241e311b9efe1419a4dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bd6ea7bde0b377b566921f37eeaeee495b3f1b264241e311b9efe1419a4dfc->enter($__internal_50bd6ea7bde0b377b566921f37eeaeee495b3f1b264241e311b9efe1419a4dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fefe131c2396aeac5e973029dc0dca1465b8b098722e19568043927dadcddf66->leave($__internal_fefe131c2396aeac5e973029dc0dca1465b8b098722e19568043927dadcddf66_prof);

        
        $__internal_50bd6ea7bde0b377b566921f37eeaeee495b3f1b264241e311b9efe1419a4dfc->leave($__internal_50bd6ea7bde0b377b566921f37eeaeee495b3f1b264241e311b9efe1419a4dfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
