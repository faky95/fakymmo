<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_bded54ccc9a2aa6ea2df81705b454dc41149516b09c7fa97ddeed773da252fa4 extends Twig_Template
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
        $__internal_6286aaf695d023efed2391efc919373aea94bf43c9938d72bf924e8986d46637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6286aaf695d023efed2391efc919373aea94bf43c9938d72bf924e8986d46637->enter($__internal_6286aaf695d023efed2391efc919373aea94bf43c9938d72bf924e8986d46637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c593c5ea1320c775dca76013b3969ec1a2ff99f28fbd9413b4d90a53b37237eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c593c5ea1320c775dca76013b3969ec1a2ff99f28fbd9413b4d90a53b37237eb->enter($__internal_c593c5ea1320c775dca76013b3969ec1a2ff99f28fbd9413b4d90a53b37237eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6286aaf695d023efed2391efc919373aea94bf43c9938d72bf924e8986d46637->leave($__internal_6286aaf695d023efed2391efc919373aea94bf43c9938d72bf924e8986d46637_prof);

        
        $__internal_c593c5ea1320c775dca76013b3969ec1a2ff99f28fbd9413b4d90a53b37237eb->leave($__internal_c593c5ea1320c775dca76013b3969ec1a2ff99f28fbd9413b4d90a53b37237eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}