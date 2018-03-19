<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1d6653f40b3f7a6aee947d98ceaa304a658a4d5f616a2dfadcbbd28e3bd81462 extends Twig_Template
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
        $__internal_09ad80e8a4508d4c239ce7ebd34db1226268e59f47d83281fac87d0a96ad765e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ad80e8a4508d4c239ce7ebd34db1226268e59f47d83281fac87d0a96ad765e->enter($__internal_09ad80e8a4508d4c239ce7ebd34db1226268e59f47d83281fac87d0a96ad765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c96518392cc17644c06db13849b348e8c0abddf291a9463be388dbdf2a96a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96518392cc17644c06db13849b348e8c0abddf291a9463be388dbdf2a96a2bb->enter($__internal_c96518392cc17644c06db13849b348e8c0abddf291a9463be388dbdf2a96a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_09ad80e8a4508d4c239ce7ebd34db1226268e59f47d83281fac87d0a96ad765e->leave($__internal_09ad80e8a4508d4c239ce7ebd34db1226268e59f47d83281fac87d0a96ad765e_prof);

        
        $__internal_c96518392cc17644c06db13849b348e8c0abddf291a9463be388dbdf2a96a2bb->leave($__internal_c96518392cc17644c06db13849b348e8c0abddf291a9463be388dbdf2a96a2bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
