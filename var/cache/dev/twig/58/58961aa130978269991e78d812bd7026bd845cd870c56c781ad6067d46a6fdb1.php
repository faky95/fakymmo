<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_c91754de5878b22cf0803fbd60d7048c8129e42bb628adf93959f06790dfefae extends Twig_Template
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
        $__internal_cc8aac060a27926bf824d93f2d16d4ba4d4a2dc9f58458175f9bd48181e7f7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8aac060a27926bf824d93f2d16d4ba4d4a2dc9f58458175f9bd48181e7f7c9->enter($__internal_cc8aac060a27926bf824d93f2d16d4ba4d4a2dc9f58458175f9bd48181e7f7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_bd75a7f050ada3ad0218ec682110f718dee43fbd765518dd4dceb34d3b0fc259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd75a7f050ada3ad0218ec682110f718dee43fbd765518dd4dceb34d3b0fc259->enter($__internal_bd75a7f050ada3ad0218ec682110f718dee43fbd765518dd4dceb34d3b0fc259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cc8aac060a27926bf824d93f2d16d4ba4d4a2dc9f58458175f9bd48181e7f7c9->leave($__internal_cc8aac060a27926bf824d93f2d16d4ba4d4a2dc9f58458175f9bd48181e7f7c9_prof);

        
        $__internal_bd75a7f050ada3ad0218ec682110f718dee43fbd765518dd4dceb34d3b0fc259->leave($__internal_bd75a7f050ada3ad0218ec682110f718dee43fbd765518dd4dceb34d3b0fc259_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
