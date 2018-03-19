<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_825d4e5d211accb7e6f5bbf33580e090dc7b25b4246a9b482c21504b904b2830 extends Twig_Template
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
        $__internal_17a46a07a8a6e79c9856df6f39cf7a54b952ca54044d2e827d93ae358ddebf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a46a07a8a6e79c9856df6f39cf7a54b952ca54044d2e827d93ae358ddebf73->enter($__internal_17a46a07a8a6e79c9856df6f39cf7a54b952ca54044d2e827d93ae358ddebf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7f4228e514c63db7cf3004cbd1b0dfded54a1d2f988f9867910ac635aa377460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4228e514c63db7cf3004cbd1b0dfded54a1d2f988f9867910ac635aa377460->enter($__internal_7f4228e514c63db7cf3004cbd1b0dfded54a1d2f988f9867910ac635aa377460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_17a46a07a8a6e79c9856df6f39cf7a54b952ca54044d2e827d93ae358ddebf73->leave($__internal_17a46a07a8a6e79c9856df6f39cf7a54b952ca54044d2e827d93ae358ddebf73_prof);

        
        $__internal_7f4228e514c63db7cf3004cbd1b0dfded54a1d2f988f9867910ac635aa377460->leave($__internal_7f4228e514c63db7cf3004cbd1b0dfded54a1d2f988f9867910ac635aa377460_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
