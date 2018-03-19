<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a710de6fd2d0c15e7fdbdca4d7367378d5badf3d53a6ba9ec512b12e37fc0608 extends Twig_Template
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
        $__internal_864a9466956d8a8c0109f9e81179a616586ef0ec479f6e34d919c05df0ae9bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864a9466956d8a8c0109f9e81179a616586ef0ec479f6e34d919c05df0ae9bcf->enter($__internal_864a9466956d8a8c0109f9e81179a616586ef0ec479f6e34d919c05df0ae9bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d6ff5d297dc7fb39a481905d6a11d13d8f8499dd87eba6f4ba25508bba6c4703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ff5d297dc7fb39a481905d6a11d13d8f8499dd87eba6f4ba25508bba6c4703->enter($__internal_d6ff5d297dc7fb39a481905d6a11d13d8f8499dd87eba6f4ba25508bba6c4703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_864a9466956d8a8c0109f9e81179a616586ef0ec479f6e34d919c05df0ae9bcf->leave($__internal_864a9466956d8a8c0109f9e81179a616586ef0ec479f6e34d919c05df0ae9bcf_prof);

        
        $__internal_d6ff5d297dc7fb39a481905d6a11d13d8f8499dd87eba6f4ba25508bba6c4703->leave($__internal_d6ff5d297dc7fb39a481905d6a11d13d8f8499dd87eba6f4ba25508bba6c4703_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
