<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9834a85f75ff1bacacc393a05dccbd9d463a40beff3cefec75cde7539aaf2917 extends Twig_Template
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
        $__internal_dbd7c43df058cfeb2a19b5689c724840f725b58a9f8df407aefab0d08753b22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd7c43df058cfeb2a19b5689c724840f725b58a9f8df407aefab0d08753b22c->enter($__internal_dbd7c43df058cfeb2a19b5689c724840f725b58a9f8df407aefab0d08753b22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d6c47945d14d3403d57e78aa61e30062497491108ed0913065da800226485e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c47945d14d3403d57e78aa61e30062497491108ed0913065da800226485e72->enter($__internal_d6c47945d14d3403d57e78aa61e30062497491108ed0913065da800226485e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dbd7c43df058cfeb2a19b5689c724840f725b58a9f8df407aefab0d08753b22c->leave($__internal_dbd7c43df058cfeb2a19b5689c724840f725b58a9f8df407aefab0d08753b22c_prof);

        
        $__internal_d6c47945d14d3403d57e78aa61e30062497491108ed0913065da800226485e72->leave($__internal_d6c47945d14d3403d57e78aa61e30062497491108ed0913065da800226485e72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
