<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_60ba9beab593c456c06d453af5e8445025dce662ffef3b0161a67b6600af2c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b0cefa6248731d925dc2ff274260979506ffd88ec76041723a7a12609218b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b0cefa6248731d925dc2ff274260979506ffd88ec76041723a7a12609218b3->enter($__internal_13b0cefa6248731d925dc2ff274260979506ffd88ec76041723a7a12609218b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_413cbe823bae8a399d70e9b5e9daabcc583bc95330762e97e2fa957b6a450a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413cbe823bae8a399d70e9b5e9daabcc583bc95330762e97e2fa957b6a450a78->enter($__internal_413cbe823bae8a399d70e9b5e9daabcc583bc95330762e97e2fa957b6a450a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b0cefa6248731d925dc2ff274260979506ffd88ec76041723a7a12609218b3->leave($__internal_13b0cefa6248731d925dc2ff274260979506ffd88ec76041723a7a12609218b3_prof);

        
        $__internal_413cbe823bae8a399d70e9b5e9daabcc583bc95330762e97e2fa957b6a450a78->leave($__internal_413cbe823bae8a399d70e9b5e9daabcc583bc95330762e97e2fa957b6a450a78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69fd834bf1b6c90193a0080a263831744a18c45d4b5633349f0053bc2be61584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69fd834bf1b6c90193a0080a263831744a18c45d4b5633349f0053bc2be61584->enter($__internal_69fd834bf1b6c90193a0080a263831744a18c45d4b5633349f0053bc2be61584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d9ddd635d548c1ae337fc850be87df222218ba8ffc0c7799743bc2ba006867c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9ddd635d548c1ae337fc850be87df222218ba8ffc0c7799743bc2ba006867c->enter($__internal_9d9ddd635d548c1ae337fc850be87df222218ba8ffc0c7799743bc2ba006867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9d9ddd635d548c1ae337fc850be87df222218ba8ffc0c7799743bc2ba006867c->leave($__internal_9d9ddd635d548c1ae337fc850be87df222218ba8ffc0c7799743bc2ba006867c_prof);

        
        $__internal_69fd834bf1b6c90193a0080a263831744a18c45d4b5633349f0053bc2be61584->leave($__internal_69fd834bf1b6c90193a0080a263831744a18c45d4b5633349f0053bc2be61584_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
