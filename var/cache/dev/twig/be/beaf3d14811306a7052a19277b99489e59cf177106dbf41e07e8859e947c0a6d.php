<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_45149b002d21ca63185cee92f53d513918a90303cddcd6f4aea82d92f150ea8e extends Twig_Template
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
        $__internal_489fe1d833a68cfc1a5bd979485a6edd6a97929ba25dc27047dd77d3652991de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489fe1d833a68cfc1a5bd979485a6edd6a97929ba25dc27047dd77d3652991de->enter($__internal_489fe1d833a68cfc1a5bd979485a6edd6a97929ba25dc27047dd77d3652991de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e963d7db525a5a4be92742380e95e7e3c697dc4e197257d732a5a00933769478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e963d7db525a5a4be92742380e95e7e3c697dc4e197257d732a5a00933769478->enter($__internal_e963d7db525a5a4be92742380e95e7e3c697dc4e197257d732a5a00933769478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_489fe1d833a68cfc1a5bd979485a6edd6a97929ba25dc27047dd77d3652991de->leave($__internal_489fe1d833a68cfc1a5bd979485a6edd6a97929ba25dc27047dd77d3652991de_prof);

        
        $__internal_e963d7db525a5a4be92742380e95e7e3c697dc4e197257d732a5a00933769478->leave($__internal_e963d7db525a5a4be92742380e95e7e3c697dc4e197257d732a5a00933769478_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
