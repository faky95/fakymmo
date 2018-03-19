<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eceef282fece2317d2b793fe65c9591ce44cca11ad6a71f6d255ed747f11726a extends Twig_Template
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
        $__internal_141a20622b06ab3fb26b7de5fad9cbdb88c566591cd33e4cce406a3c9aab5d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141a20622b06ab3fb26b7de5fad9cbdb88c566591cd33e4cce406a3c9aab5d83->enter($__internal_141a20622b06ab3fb26b7de5fad9cbdb88c566591cd33e4cce406a3c9aab5d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a50dcf05ee4807be3cc293524e377bf2980694ffd7a98a06948881effea4d1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50dcf05ee4807be3cc293524e377bf2980694ffd7a98a06948881effea4d1c8->enter($__internal_a50dcf05ee4807be3cc293524e377bf2980694ffd7a98a06948881effea4d1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_141a20622b06ab3fb26b7de5fad9cbdb88c566591cd33e4cce406a3c9aab5d83->leave($__internal_141a20622b06ab3fb26b7de5fad9cbdb88c566591cd33e4cce406a3c9aab5d83_prof);

        
        $__internal_a50dcf05ee4807be3cc293524e377bf2980694ffd7a98a06948881effea4d1c8->leave($__internal_a50dcf05ee4807be3cc293524e377bf2980694ffd7a98a06948881effea4d1c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
