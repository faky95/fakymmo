<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_05f27315acea3ecaa0de45a28482b69f1e20b2c40c6533d129b44b1352e29c5e extends Twig_Template
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
        $__internal_f8f002f93999b0d6d22408203075791d88339ab28a8187be2350c9f07249ee96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f002f93999b0d6d22408203075791d88339ab28a8187be2350c9f07249ee96->enter($__internal_f8f002f93999b0d6d22408203075791d88339ab28a8187be2350c9f07249ee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0cb3e0939d1ee53aec7e9d97c02f413a6f04f393b5afd1a735faa1a6ae9b1984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb3e0939d1ee53aec7e9d97c02f413a6f04f393b5afd1a735faa1a6ae9b1984->enter($__internal_0cb3e0939d1ee53aec7e9d97c02f413a6f04f393b5afd1a735faa1a6ae9b1984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f8f002f93999b0d6d22408203075791d88339ab28a8187be2350c9f07249ee96->leave($__internal_f8f002f93999b0d6d22408203075791d88339ab28a8187be2350c9f07249ee96_prof);

        
        $__internal_0cb3e0939d1ee53aec7e9d97c02f413a6f04f393b5afd1a735faa1a6ae9b1984->leave($__internal_0cb3e0939d1ee53aec7e9d97c02f413a6f04f393b5afd1a735faa1a6ae9b1984_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
