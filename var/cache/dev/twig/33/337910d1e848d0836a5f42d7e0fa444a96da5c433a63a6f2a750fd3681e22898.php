<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_120952b8274dca20321c4963de6c5e2a9ef900e5f77326ca072f18e0d6cc5c84 extends Twig_Template
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
        $__internal_7e34f523a68a1e39e474f1ed25e61e56ed415aab01fb436c8bde8a328afefd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e34f523a68a1e39e474f1ed25e61e56ed415aab01fb436c8bde8a328afefd8d->enter($__internal_7e34f523a68a1e39e474f1ed25e61e56ed415aab01fb436c8bde8a328afefd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b65501c9f0a721807435219961bd794213db55bde7486f1337ade3d8eef01c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65501c9f0a721807435219961bd794213db55bde7486f1337ade3d8eef01c35->enter($__internal_b65501c9f0a721807435219961bd794213db55bde7486f1337ade3d8eef01c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7e34f523a68a1e39e474f1ed25e61e56ed415aab01fb436c8bde8a328afefd8d->leave($__internal_7e34f523a68a1e39e474f1ed25e61e56ed415aab01fb436c8bde8a328afefd8d_prof);

        
        $__internal_b65501c9f0a721807435219961bd794213db55bde7486f1337ade3d8eef01c35->leave($__internal_b65501c9f0a721807435219961bd794213db55bde7486f1337ade3d8eef01c35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
