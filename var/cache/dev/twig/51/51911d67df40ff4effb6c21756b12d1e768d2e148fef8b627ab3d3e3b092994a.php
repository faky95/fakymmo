<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_9c470d804ac1a6cbf5e217faf3b7ddca8ea00aa4ba42e9faccee8f00a247c677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efe22f87a3099557a678833c5013e41c45b5758237354fa3ec5e78e812bfa828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe22f87a3099557a678833c5013e41c45b5758237354fa3ec5e78e812bfa828->enter($__internal_efe22f87a3099557a678833c5013e41c45b5758237354fa3ec5e78e812bfa828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_683bfe1176e01c236a06f4f8b0245da27c96826124fe2e4c2cb32959c63b1e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683bfe1176e01c236a06f4f8b0245da27c96826124fe2e4c2cb32959c63b1e17->enter($__internal_683bfe1176e01c236a06f4f8b0245da27c96826124fe2e4c2cb32959c63b1e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_efe22f87a3099557a678833c5013e41c45b5758237354fa3ec5e78e812bfa828->leave($__internal_efe22f87a3099557a678833c5013e41c45b5758237354fa3ec5e78e812bfa828_prof);

        
        $__internal_683bfe1176e01c236a06f4f8b0245da27c96826124fe2e4c2cb32959c63b1e17->leave($__internal_683bfe1176e01c236a06f4f8b0245da27c96826124fe2e4c2cb32959c63b1e17_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_982c0c7a9d4e912354a6b7cc0ebc875d5a8e9a910c16009993ed0c40f1e056fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982c0c7a9d4e912354a6b7cc0ebc875d5a8e9a910c16009993ed0c40f1e056fa->enter($__internal_982c0c7a9d4e912354a6b7cc0ebc875d5a8e9a910c16009993ed0c40f1e056fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff9a24e39c70a193b10f47879e3c9b408f670bcbfb42de74524b14a9266cc254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9a24e39c70a193b10f47879e3c9b408f670bcbfb42de74524b14a9266cc254->enter($__internal_ff9a24e39c70a193b10f47879e3c9b408f670bcbfb42de74524b14a9266cc254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ff9a24e39c70a193b10f47879e3c9b408f670bcbfb42de74524b14a9266cc254->leave($__internal_ff9a24e39c70a193b10f47879e3c9b408f670bcbfb42de74524b14a9266cc254_prof);

        
        $__internal_982c0c7a9d4e912354a6b7cc0ebc875d5a8e9a910c16009993ed0c40f1e056fa->leave($__internal_982c0c7a9d4e912354a6b7cc0ebc875d5a8e9a910c16009993ed0c40f1e056fa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7772ab5fdb25cdba759b31ae043166c83c8d43a68cad902296df7c53107554bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7772ab5fdb25cdba759b31ae043166c83c8d43a68cad902296df7c53107554bb->enter($__internal_7772ab5fdb25cdba759b31ae043166c83c8d43a68cad902296df7c53107554bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2342c84983b986f7a63f16c09991f97db74998e0b5ae9a5b5d97bbdd2fe1e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2342c84983b986f7a63f16c09991f97db74998e0b5ae9a5b5d97bbdd2fe1e0c->enter($__internal_e2342c84983b986f7a63f16c09991f97db74998e0b5ae9a5b5d97bbdd2fe1e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e2342c84983b986f7a63f16c09991f97db74998e0b5ae9a5b5d97bbdd2fe1e0c->leave($__internal_e2342c84983b986f7a63f16c09991f97db74998e0b5ae9a5b5d97bbdd2fe1e0c_prof);

        
        $__internal_7772ab5fdb25cdba759b31ae043166c83c8d43a68cad902296df7c53107554bb->leave($__internal_7772ab5fdb25cdba759b31ae043166c83c8d43a68cad902296df7c53107554bb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_926b415532a5474ea14da1d4f76a21a4859bf0b689e550f27891ec9d7bdb630a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926b415532a5474ea14da1d4f76a21a4859bf0b689e550f27891ec9d7bdb630a->enter($__internal_926b415532a5474ea14da1d4f76a21a4859bf0b689e550f27891ec9d7bdb630a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a9c479b1bc3b8d479470148b4fe47b2431b7569736f5c45eae3bdecf6ccf215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9c479b1bc3b8d479470148b4fe47b2431b7569736f5c45eae3bdecf6ccf215->enter($__internal_7a9c479b1bc3b8d479470148b4fe47b2431b7569736f5c45eae3bdecf6ccf215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7a9c479b1bc3b8d479470148b4fe47b2431b7569736f5c45eae3bdecf6ccf215->leave($__internal_7a9c479b1bc3b8d479470148b4fe47b2431b7569736f5c45eae3bdecf6ccf215_prof);

        
        $__internal_926b415532a5474ea14da1d4f76a21a4859bf0b689e550f27891ec9d7bdb630a->leave($__internal_926b415532a5474ea14da1d4f76a21a4859bf0b689e550f27891ec9d7bdb630a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
