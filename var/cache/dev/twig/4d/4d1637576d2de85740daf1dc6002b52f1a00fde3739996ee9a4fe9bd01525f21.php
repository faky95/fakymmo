<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_87b7b205022f398c9c6f706de1510843e75da4b5c6b6d8c2bea0d774b7d2508a extends Twig_Template
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
        $__internal_8bfb28fbd1e36e2a38ce965741a2d78e6faeb7a46efe5c6ad5221f8a845ca1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfb28fbd1e36e2a38ce965741a2d78e6faeb7a46efe5c6ad5221f8a845ca1cf->enter($__internal_8bfb28fbd1e36e2a38ce965741a2d78e6faeb7a46efe5c6ad5221f8a845ca1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_4323ab8f9dc22fdf7fbb2ef7efc464ebe0b6c1453bf1ebad0821b26fdb76868f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4323ab8f9dc22fdf7fbb2ef7efc464ebe0b6c1453bf1ebad0821b26fdb76868f->enter($__internal_4323ab8f9dc22fdf7fbb2ef7efc464ebe0b6c1453bf1ebad0821b26fdb76868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8bfb28fbd1e36e2a38ce965741a2d78e6faeb7a46efe5c6ad5221f8a845ca1cf->leave($__internal_8bfb28fbd1e36e2a38ce965741a2d78e6faeb7a46efe5c6ad5221f8a845ca1cf_prof);

        
        $__internal_4323ab8f9dc22fdf7fbb2ef7efc464ebe0b6c1453bf1ebad0821b26fdb76868f->leave($__internal_4323ab8f9dc22fdf7fbb2ef7efc464ebe0b6c1453bf1ebad0821b26fdb76868f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
