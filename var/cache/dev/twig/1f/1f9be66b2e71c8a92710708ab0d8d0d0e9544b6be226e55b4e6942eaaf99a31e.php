<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb2544cbc506885998989d35176a0288228ae88f1cab66644b5e8cba08e38170 extends Twig_Template
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
        $__internal_70899f82c3a3aec5af7673fc764d95bac9f34b2b2b95e95cd51a16c20bcf97d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70899f82c3a3aec5af7673fc764d95bac9f34b2b2b95e95cd51a16c20bcf97d6->enter($__internal_70899f82c3a3aec5af7673fc764d95bac9f34b2b2b95e95cd51a16c20bcf97d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b6e60b6d8cf95b01a1390c9840cfbc8a2fb240be472f19bc8ade4301b62c7111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e60b6d8cf95b01a1390c9840cfbc8a2fb240be472f19bc8ade4301b62c7111->enter($__internal_b6e60b6d8cf95b01a1390c9840cfbc8a2fb240be472f19bc8ade4301b62c7111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_70899f82c3a3aec5af7673fc764d95bac9f34b2b2b95e95cd51a16c20bcf97d6->leave($__internal_70899f82c3a3aec5af7673fc764d95bac9f34b2b2b95e95cd51a16c20bcf97d6_prof);

        
        $__internal_b6e60b6d8cf95b01a1390c9840cfbc8a2fb240be472f19bc8ade4301b62c7111->leave($__internal_b6e60b6d8cf95b01a1390c9840cfbc8a2fb240be472f19bc8ade4301b62c7111_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
