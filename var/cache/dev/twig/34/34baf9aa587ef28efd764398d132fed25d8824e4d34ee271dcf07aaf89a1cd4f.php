<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8b76e4b44d1d2271bd9250f37a23d199d6d4f388ec4514990e319f490a94cd1f extends Twig_Template
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
        $__internal_0f906a5640a9774856fd780f9b767b16aedde16d74fa2aa23262f0ca931d1690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f906a5640a9774856fd780f9b767b16aedde16d74fa2aa23262f0ca931d1690->enter($__internal_0f906a5640a9774856fd780f9b767b16aedde16d74fa2aa23262f0ca931d1690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_509a536538915c3fdaede2cd8c16f772d7ab7a1bf5e42fde48813a3d951fbb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509a536538915c3fdaede2cd8c16f772d7ab7a1bf5e42fde48813a3d951fbb1a->enter($__internal_509a536538915c3fdaede2cd8c16f772d7ab7a1bf5e42fde48813a3d951fbb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0f906a5640a9774856fd780f9b767b16aedde16d74fa2aa23262f0ca931d1690->leave($__internal_0f906a5640a9774856fd780f9b767b16aedde16d74fa2aa23262f0ca931d1690_prof);

        
        $__internal_509a536538915c3fdaede2cd8c16f772d7ab7a1bf5e42fde48813a3d951fbb1a->leave($__internal_509a536538915c3fdaede2cd8c16f772d7ab7a1bf5e42fde48813a3d951fbb1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
