<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_136921e8b67b9a7bc9282781e5ff1ed765ee35d411e2cb143673ba1427f5e5a3 extends Twig_Template
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
        $__internal_b7ba68783e87d9fab40397d686df9e17e813b62bf7d13f3adce41446c6e270ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ba68783e87d9fab40397d686df9e17e813b62bf7d13f3adce41446c6e270ed->enter($__internal_b7ba68783e87d9fab40397d686df9e17e813b62bf7d13f3adce41446c6e270ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_91fef1d37679ad337d6135a1cf9a9f44075b7107a6e36422ae5023710aa66daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fef1d37679ad337d6135a1cf9a9f44075b7107a6e36422ae5023710aa66daf->enter($__internal_91fef1d37679ad337d6135a1cf9a9f44075b7107a6e36422ae5023710aa66daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b7ba68783e87d9fab40397d686df9e17e813b62bf7d13f3adce41446c6e270ed->leave($__internal_b7ba68783e87d9fab40397d686df9e17e813b62bf7d13f3adce41446c6e270ed_prof);

        
        $__internal_91fef1d37679ad337d6135a1cf9a9f44075b7107a6e36422ae5023710aa66daf->leave($__internal_91fef1d37679ad337d6135a1cf9a9f44075b7107a6e36422ae5023710aa66daf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
