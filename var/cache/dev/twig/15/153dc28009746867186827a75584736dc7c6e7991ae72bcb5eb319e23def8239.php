<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_94638b4a01696a064395e900744da8eb7f20ad0bc0186a90ae44f42adfb79fdf extends Twig_Template
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
        $__internal_f838065db5e555c2530f08a994322f260864cfc621ce14b672bcb7ca68a5f280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f838065db5e555c2530f08a994322f260864cfc621ce14b672bcb7ca68a5f280->enter($__internal_f838065db5e555c2530f08a994322f260864cfc621ce14b672bcb7ca68a5f280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_25fd1df4164746487833bcf71ec264a7e6501640bb2b5f6fd9fdef62854145be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fd1df4164746487833bcf71ec264a7e6501640bb2b5f6fd9fdef62854145be->enter($__internal_25fd1df4164746487833bcf71ec264a7e6501640bb2b5f6fd9fdef62854145be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f838065db5e555c2530f08a994322f260864cfc621ce14b672bcb7ca68a5f280->leave($__internal_f838065db5e555c2530f08a994322f260864cfc621ce14b672bcb7ca68a5f280_prof);

        
        $__internal_25fd1df4164746487833bcf71ec264a7e6501640bb2b5f6fd9fdef62854145be->leave($__internal_25fd1df4164746487833bcf71ec264a7e6501640bb2b5f6fd9fdef62854145be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
