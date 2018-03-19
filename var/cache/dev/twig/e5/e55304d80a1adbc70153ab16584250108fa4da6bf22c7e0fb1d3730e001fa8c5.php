<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f63404b28e8b89353e42c623b95852eddb4a92dd9dc40ee9adf9be2998aace88 extends Twig_Template
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
        $__internal_ea4f06ec6653ea6ee921620c8f2a16d37ccb57603e27b8c08ff6fe22594a022f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4f06ec6653ea6ee921620c8f2a16d37ccb57603e27b8c08ff6fe22594a022f->enter($__internal_ea4f06ec6653ea6ee921620c8f2a16d37ccb57603e27b8c08ff6fe22594a022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_139586fcdefd9db0606e5b0e136b8bfd50da5b26ecf658e6050bbbf193ab8959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139586fcdefd9db0606e5b0e136b8bfd50da5b26ecf658e6050bbbf193ab8959->enter($__internal_139586fcdefd9db0606e5b0e136b8bfd50da5b26ecf658e6050bbbf193ab8959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ea4f06ec6653ea6ee921620c8f2a16d37ccb57603e27b8c08ff6fe22594a022f->leave($__internal_ea4f06ec6653ea6ee921620c8f2a16d37ccb57603e27b8c08ff6fe22594a022f_prof);

        
        $__internal_139586fcdefd9db0606e5b0e136b8bfd50da5b26ecf658e6050bbbf193ab8959->leave($__internal_139586fcdefd9db0606e5b0e136b8bfd50da5b26ecf658e6050bbbf193ab8959_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
