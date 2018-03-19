<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b815187a1f51ef25b17b3e3ace588a81f88434639625e404de995cdea2af515a extends Twig_Template
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
        $__internal_55add9b5472c20b4932c29c7d1713c93255ddbd9bae5fde87f3d7b1ce2934ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55add9b5472c20b4932c29c7d1713c93255ddbd9bae5fde87f3d7b1ce2934ef2->enter($__internal_55add9b5472c20b4932c29c7d1713c93255ddbd9bae5fde87f3d7b1ce2934ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a4defad2591dc89a9ba267a8dce251ef1be206cdd1697f1a543c550a6196c8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4defad2591dc89a9ba267a8dce251ef1be206cdd1697f1a543c550a6196c8ce->enter($__internal_a4defad2591dc89a9ba267a8dce251ef1be206cdd1697f1a543c550a6196c8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_55add9b5472c20b4932c29c7d1713c93255ddbd9bae5fde87f3d7b1ce2934ef2->leave($__internal_55add9b5472c20b4932c29c7d1713c93255ddbd9bae5fde87f3d7b1ce2934ef2_prof);

        
        $__internal_a4defad2591dc89a9ba267a8dce251ef1be206cdd1697f1a543c550a6196c8ce->leave($__internal_a4defad2591dc89a9ba267a8dce251ef1be206cdd1697f1a543c550a6196c8ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
