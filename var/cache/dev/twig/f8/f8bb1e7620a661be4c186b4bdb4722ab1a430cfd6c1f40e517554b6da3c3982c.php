<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bf584621a92d1a238d6ae85c201cd7b807ee20cae8fb9719b40d072226ea8fad extends Twig_Template
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
        $__internal_e50d0b6f85a7306f1a14f19ed9b752419fee7b77111fe021d68cf3ababf79f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50d0b6f85a7306f1a14f19ed9b752419fee7b77111fe021d68cf3ababf79f11->enter($__internal_e50d0b6f85a7306f1a14f19ed9b752419fee7b77111fe021d68cf3ababf79f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c45ac5c9b0e70866b538ecb8b273baec4fdc740d6662479fcbb1a9e110c31f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45ac5c9b0e70866b538ecb8b273baec4fdc740d6662479fcbb1a9e110c31f3a->enter($__internal_c45ac5c9b0e70866b538ecb8b273baec4fdc740d6662479fcbb1a9e110c31f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e50d0b6f85a7306f1a14f19ed9b752419fee7b77111fe021d68cf3ababf79f11->leave($__internal_e50d0b6f85a7306f1a14f19ed9b752419fee7b77111fe021d68cf3ababf79f11_prof);

        
        $__internal_c45ac5c9b0e70866b538ecb8b273baec4fdc740d6662479fcbb1a9e110c31f3a->leave($__internal_c45ac5c9b0e70866b538ecb8b273baec4fdc740d6662479fcbb1a9e110c31f3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
