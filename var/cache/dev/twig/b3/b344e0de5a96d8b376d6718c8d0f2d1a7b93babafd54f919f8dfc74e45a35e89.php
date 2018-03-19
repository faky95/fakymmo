<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3f9a8a703eac40ca95baf2f1e8d07420bedda5a60c0926bf4ba614fafa736457 extends Twig_Template
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
        $__internal_1a246ac37977899eab62ae275daf4ae9def9703b82792e58188ddc9a46a8de0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a246ac37977899eab62ae275daf4ae9def9703b82792e58188ddc9a46a8de0a->enter($__internal_1a246ac37977899eab62ae275daf4ae9def9703b82792e58188ddc9a46a8de0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4a84469c95a3c21d3bd73f4741224d607ed5cf3a044d670b99b9621ba376a2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a84469c95a3c21d3bd73f4741224d607ed5cf3a044d670b99b9621ba376a2f6->enter($__internal_4a84469c95a3c21d3bd73f4741224d607ed5cf3a044d670b99b9621ba376a2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1a246ac37977899eab62ae275daf4ae9def9703b82792e58188ddc9a46a8de0a->leave($__internal_1a246ac37977899eab62ae275daf4ae9def9703b82792e58188ddc9a46a8de0a_prof);

        
        $__internal_4a84469c95a3c21d3bd73f4741224d607ed5cf3a044d670b99b9621ba376a2f6->leave($__internal_4a84469c95a3c21d3bd73f4741224d607ed5cf3a044d670b99b9621ba376a2f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
