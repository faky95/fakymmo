<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1436bfed326595f36213951a8a6747dfdef253d9bc6767b3ecca8d1d2beb613e extends Twig_Template
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
        $__internal_0ca5e3b6125c9e639467c4fd508655fc4fe99a5c2ac78d02fee83017f3c85929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca5e3b6125c9e639467c4fd508655fc4fe99a5c2ac78d02fee83017f3c85929->enter($__internal_0ca5e3b6125c9e639467c4fd508655fc4fe99a5c2ac78d02fee83017f3c85929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d0033a3ffb2ea6327f6c63ef0a998d67c50b18f2ed8ede3a010aa4cafbdeda97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0033a3ffb2ea6327f6c63ef0a998d67c50b18f2ed8ede3a010aa4cafbdeda97->enter($__internal_d0033a3ffb2ea6327f6c63ef0a998d67c50b18f2ed8ede3a010aa4cafbdeda97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0ca5e3b6125c9e639467c4fd508655fc4fe99a5c2ac78d02fee83017f3c85929->leave($__internal_0ca5e3b6125c9e639467c4fd508655fc4fe99a5c2ac78d02fee83017f3c85929_prof);

        
        $__internal_d0033a3ffb2ea6327f6c63ef0a998d67c50b18f2ed8ede3a010aa4cafbdeda97->leave($__internal_d0033a3ffb2ea6327f6c63ef0a998d67c50b18f2ed8ede3a010aa4cafbdeda97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
