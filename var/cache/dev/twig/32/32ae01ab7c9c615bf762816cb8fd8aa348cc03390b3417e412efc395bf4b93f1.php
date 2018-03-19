<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_113927005c6885e829f546998dfddf4f38ee452aaab4391fa63294a1cde6c137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_047d21afe9b37211e61ac4afa8e1c33d9204af51486ada9609f4dd09fd4ee815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047d21afe9b37211e61ac4afa8e1c33d9204af51486ada9609f4dd09fd4ee815->enter($__internal_047d21afe9b37211e61ac4afa8e1c33d9204af51486ada9609f4dd09fd4ee815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d51b1506ec3b6a4768ec8b6c683d230db617d4e5f7855e5963a74c5d749a7f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51b1506ec3b6a4768ec8b6c683d230db617d4e5f7855e5963a74c5d749a7f87->enter($__internal_d51b1506ec3b6a4768ec8b6c683d230db617d4e5f7855e5963a74c5d749a7f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047d21afe9b37211e61ac4afa8e1c33d9204af51486ada9609f4dd09fd4ee815->leave($__internal_047d21afe9b37211e61ac4afa8e1c33d9204af51486ada9609f4dd09fd4ee815_prof);

        
        $__internal_d51b1506ec3b6a4768ec8b6c683d230db617d4e5f7855e5963a74c5d749a7f87->leave($__internal_d51b1506ec3b6a4768ec8b6c683d230db617d4e5f7855e5963a74c5d749a7f87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_853ffa1ae083b8e69b2da4342a7dd0f83f7f671874ddd6f406dd6b8d637b903c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853ffa1ae083b8e69b2da4342a7dd0f83f7f671874ddd6f406dd6b8d637b903c->enter($__internal_853ffa1ae083b8e69b2da4342a7dd0f83f7f671874ddd6f406dd6b8d637b903c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_648f5351e201c50054f24d8bc492118d65e002cfca8911e8f10e439d49bbd573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648f5351e201c50054f24d8bc492118d65e002cfca8911e8f10e439d49bbd573->enter($__internal_648f5351e201c50054f24d8bc492118d65e002cfca8911e8f10e439d49bbd573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_648f5351e201c50054f24d8bc492118d65e002cfca8911e8f10e439d49bbd573->leave($__internal_648f5351e201c50054f24d8bc492118d65e002cfca8911e8f10e439d49bbd573_prof);

        
        $__internal_853ffa1ae083b8e69b2da4342a7dd0f83f7f671874ddd6f406dd6b8d637b903c->leave($__internal_853ffa1ae083b8e69b2da4342a7dd0f83f7f671874ddd6f406dd6b8d637b903c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/fakymmo/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
