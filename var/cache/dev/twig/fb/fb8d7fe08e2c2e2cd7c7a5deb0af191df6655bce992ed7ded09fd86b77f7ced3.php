<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e8bea15f6981f8b3d0e36771f89fd37a7f5e1adf4ebdace0826112b67bc5024b extends Twig_Template
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
        $__internal_907daf9e5fa52ea79a52569255e7365a2adc1e6f1dd99c8b2637898c58f13bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907daf9e5fa52ea79a52569255e7365a2adc1e6f1dd99c8b2637898c58f13bbb->enter($__internal_907daf9e5fa52ea79a52569255e7365a2adc1e6f1dd99c8b2637898c58f13bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_df603988edab12ced1f560f4fa3080f479521e380c81a6312305840dd6cb06ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df603988edab12ced1f560f4fa3080f479521e380c81a6312305840dd6cb06ad->enter($__internal_df603988edab12ced1f560f4fa3080f479521e380c81a6312305840dd6cb06ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_907daf9e5fa52ea79a52569255e7365a2adc1e6f1dd99c8b2637898c58f13bbb->leave($__internal_907daf9e5fa52ea79a52569255e7365a2adc1e6f1dd99c8b2637898c58f13bbb_prof);

        
        $__internal_df603988edab12ced1f560f4fa3080f479521e380c81a6312305840dd6cb06ad->leave($__internal_df603988edab12ced1f560f4fa3080f479521e380c81a6312305840dd6cb06ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
