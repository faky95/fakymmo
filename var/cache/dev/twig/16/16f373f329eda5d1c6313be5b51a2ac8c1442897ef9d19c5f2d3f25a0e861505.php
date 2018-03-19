<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_bd60c6c2343b7d83f35691015f5b22aa8f21ea0bea5fd9142e3a9484558f426d extends Twig_Template
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
        $__internal_e0f003d5d40d1e825b08de152101f808b6a719cc5dc45e06460d8612f5ace9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f003d5d40d1e825b08de152101f808b6a719cc5dc45e06460d8612f5ace9c7->enter($__internal_e0f003d5d40d1e825b08de152101f808b6a719cc5dc45e06460d8612f5ace9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e2fa23b8137366fcaf2a54a7cb0edad5b42062683b853a5a05061c7550840e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fa23b8137366fcaf2a54a7cb0edad5b42062683b853a5a05061c7550840e39->enter($__internal_e2fa23b8137366fcaf2a54a7cb0edad5b42062683b853a5a05061c7550840e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e0f003d5d40d1e825b08de152101f808b6a719cc5dc45e06460d8612f5ace9c7->leave($__internal_e0f003d5d40d1e825b08de152101f808b6a719cc5dc45e06460d8612f5ace9c7_prof);

        
        $__internal_e2fa23b8137366fcaf2a54a7cb0edad5b42062683b853a5a05061c7550840e39->leave($__internal_e2fa23b8137366fcaf2a54a7cb0edad5b42062683b853a5a05061c7550840e39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
