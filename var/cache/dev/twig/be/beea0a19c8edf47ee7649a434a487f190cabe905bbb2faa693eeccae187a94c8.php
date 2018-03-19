<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b60e28604fe67d887f60868b67942d484db437414bb95d92feb0b62d9ecf91f5 extends Twig_Template
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
        $__internal_642250b32c2bcd2e0e9b65e418db08539b22caecedf9bebf32027103f3fb2a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642250b32c2bcd2e0e9b65e418db08539b22caecedf9bebf32027103f3fb2a68->enter($__internal_642250b32c2bcd2e0e9b65e418db08539b22caecedf9bebf32027103f3fb2a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_459f5bdfb079ead4530c9bec9b5dfe3268810f233fa9cf1e749ade2fae7f6233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459f5bdfb079ead4530c9bec9b5dfe3268810f233fa9cf1e749ade2fae7f6233->enter($__internal_459f5bdfb079ead4530c9bec9b5dfe3268810f233fa9cf1e749ade2fae7f6233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_642250b32c2bcd2e0e9b65e418db08539b22caecedf9bebf32027103f3fb2a68->leave($__internal_642250b32c2bcd2e0e9b65e418db08539b22caecedf9bebf32027103f3fb2a68_prof);

        
        $__internal_459f5bdfb079ead4530c9bec9b5dfe3268810f233fa9cf1e749ade2fae7f6233->leave($__internal_459f5bdfb079ead4530c9bec9b5dfe3268810f233fa9cf1e749ade2fae7f6233_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
