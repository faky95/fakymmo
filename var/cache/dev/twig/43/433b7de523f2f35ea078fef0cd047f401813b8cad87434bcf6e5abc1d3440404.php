<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_958b413767f94a748674b228a461b5d04180c06ab2136c19a9fc8a96f793085c extends Twig_Template
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
        $__internal_bc3c8f26d9bc869ecbbf820282412dcc5b8a140e97ff7175e982e47cb6175734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3c8f26d9bc869ecbbf820282412dcc5b8a140e97ff7175e982e47cb6175734->enter($__internal_bc3c8f26d9bc869ecbbf820282412dcc5b8a140e97ff7175e982e47cb6175734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_27fc2894ee60527fa05f298bd658625e5a20bf610854a00f6dfeddb047ec7a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fc2894ee60527fa05f298bd658625e5a20bf610854a00f6dfeddb047ec7a19->enter($__internal_27fc2894ee60527fa05f298bd658625e5a20bf610854a00f6dfeddb047ec7a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_bc3c8f26d9bc869ecbbf820282412dcc5b8a140e97ff7175e982e47cb6175734->leave($__internal_bc3c8f26d9bc869ecbbf820282412dcc5b8a140e97ff7175e982e47cb6175734_prof);

        
        $__internal_27fc2894ee60527fa05f298bd658625e5a20bf610854a00f6dfeddb047ec7a19->leave($__internal_27fc2894ee60527fa05f298bd658625e5a20bf610854a00f6dfeddb047ec7a19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
