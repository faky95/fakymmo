<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c907e68727a9bb0d7c39b8a6ef0e285465b49a633956baaa7754bba43eca08b9 extends Twig_Template
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
        $__internal_4b5a6d11e4442894bae5ef575dd2e6267c964eb4808793a08fb8054e27059c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5a6d11e4442894bae5ef575dd2e6267c964eb4808793a08fb8054e27059c43->enter($__internal_4b5a6d11e4442894bae5ef575dd2e6267c964eb4808793a08fb8054e27059c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2c872116e8afcac5755812498f48347ec1bd7d9f1dd2c30827475be7261ae9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c872116e8afcac5755812498f48347ec1bd7d9f1dd2c30827475be7261ae9b0->enter($__internal_2c872116e8afcac5755812498f48347ec1bd7d9f1dd2c30827475be7261ae9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4b5a6d11e4442894bae5ef575dd2e6267c964eb4808793a08fb8054e27059c43->leave($__internal_4b5a6d11e4442894bae5ef575dd2e6267c964eb4808793a08fb8054e27059c43_prof);

        
        $__internal_2c872116e8afcac5755812498f48347ec1bd7d9f1dd2c30827475be7261ae9b0->leave($__internal_2c872116e8afcac5755812498f48347ec1bd7d9f1dd2c30827475be7261ae9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
