<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_f7d6e0b5665b651bed0eb630d2e7235bdf2baff1ef9c2abfcc3d7d489055660d extends Twig_Template
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
        $__internal_794119e905c01d52e16d84ddb1dc204a597a7bbb851fbc3bbf6f426364253235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794119e905c01d52e16d84ddb1dc204a597a7bbb851fbc3bbf6f426364253235->enter($__internal_794119e905c01d52e16d84ddb1dc204a597a7bbb851fbc3bbf6f426364253235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2996130e13ff44c2d9c5b35addb07d264ca22f3624e23b149ba98fb08945a9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2996130e13ff44c2d9c5b35addb07d264ca22f3624e23b149ba98fb08945a9b0->enter($__internal_2996130e13ff44c2d9c5b35addb07d264ca22f3624e23b149ba98fb08945a9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_794119e905c01d52e16d84ddb1dc204a597a7bbb851fbc3bbf6f426364253235->leave($__internal_794119e905c01d52e16d84ddb1dc204a597a7bbb851fbc3bbf6f426364253235_prof);

        
        $__internal_2996130e13ff44c2d9c5b35addb07d264ca22f3624e23b149ba98fb08945a9b0->leave($__internal_2996130e13ff44c2d9c5b35addb07d264ca22f3624e23b149ba98fb08945a9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
