<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_af35d6b8eaf21faee35603a3fbb7fdfc546868987f183a9e49465235d8d98481 extends Twig_Template
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
        $__internal_5499bc180b5eab04ed13a693cd5354e57f0308610b617c7099528a7410c443b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5499bc180b5eab04ed13a693cd5354e57f0308610b617c7099528a7410c443b0->enter($__internal_5499bc180b5eab04ed13a693cd5354e57f0308610b617c7099528a7410c443b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fe312a4f73a1c0b5d8ba106425442fc3c240cfd69cb224486573a824ac14ead9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe312a4f73a1c0b5d8ba106425442fc3c240cfd69cb224486573a824ac14ead9->enter($__internal_fe312a4f73a1c0b5d8ba106425442fc3c240cfd69cb224486573a824ac14ead9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5499bc180b5eab04ed13a693cd5354e57f0308610b617c7099528a7410c443b0->leave($__internal_5499bc180b5eab04ed13a693cd5354e57f0308610b617c7099528a7410c443b0_prof);

        
        $__internal_fe312a4f73a1c0b5d8ba106425442fc3c240cfd69cb224486573a824ac14ead9->leave($__internal_fe312a4f73a1c0b5d8ba106425442fc3c240cfd69cb224486573a824ac14ead9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b0922c58f921315a834644f5b7de847c94f4d2f532158d999fba59e764919b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0922c58f921315a834644f5b7de847c94f4d2f532158d999fba59e764919b8->enter($__internal_7b0922c58f921315a834644f5b7de847c94f4d2f532158d999fba59e764919b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efa190774ec5111e12caced1bf9346476013b1d7a709cd1b5284615d24a1b446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa190774ec5111e12caced1bf9346476013b1d7a709cd1b5284615d24a1b446->enter($__internal_efa190774ec5111e12caced1bf9346476013b1d7a709cd1b5284615d24a1b446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_efa190774ec5111e12caced1bf9346476013b1d7a709cd1b5284615d24a1b446->leave($__internal_efa190774ec5111e12caced1bf9346476013b1d7a709cd1b5284615d24a1b446_prof);

        
        $__internal_7b0922c58f921315a834644f5b7de847c94f4d2f532158d999fba59e764919b8->leave($__internal_7b0922c58f921315a834644f5b7de847c94f4d2f532158d999fba59e764919b8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d38a34d4447f332c4857582a2e7c8642439b4c70dbbe5957e358d9f89e5e51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d38a34d4447f332c4857582a2e7c8642439b4c70dbbe5957e358d9f89e5e51e->enter($__internal_8d38a34d4447f332c4857582a2e7c8642439b4c70dbbe5957e358d9f89e5e51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_52c751c19c39487fbaada2af4f8af7382fdefa2e19f18ab36bbab45fbdc5edc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c751c19c39487fbaada2af4f8af7382fdefa2e19f18ab36bbab45fbdc5edc4->enter($__internal_52c751c19c39487fbaada2af4f8af7382fdefa2e19f18ab36bbab45fbdc5edc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_52c751c19c39487fbaada2af4f8af7382fdefa2e19f18ab36bbab45fbdc5edc4->leave($__internal_52c751c19c39487fbaada2af4f8af7382fdefa2e19f18ab36bbab45fbdc5edc4_prof);

        
        $__internal_8d38a34d4447f332c4857582a2e7c8642439b4c70dbbe5957e358d9f89e5e51e->leave($__internal_8d38a34d4447f332c4857582a2e7c8642439b4c70dbbe5957e358d9f89e5e51e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c32a94921a861716bb8c20eacd51f6f1aabf212cb83ca3a7a701aa34d0ab4dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32a94921a861716bb8c20eacd51f6f1aabf212cb83ca3a7a701aa34d0ab4dce->enter($__internal_c32a94921a861716bb8c20eacd51f6f1aabf212cb83ca3a7a701aa34d0ab4dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_900dca3148cbfe40cb789b7279b9e36bdec624d766fa7709f205b060325d14de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900dca3148cbfe40cb789b7279b9e36bdec624d766fa7709f205b060325d14de->enter($__internal_900dca3148cbfe40cb789b7279b9e36bdec624d766fa7709f205b060325d14de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_900dca3148cbfe40cb789b7279b9e36bdec624d766fa7709f205b060325d14de->leave($__internal_900dca3148cbfe40cb789b7279b9e36bdec624d766fa7709f205b060325d14de_prof);

        
        $__internal_c32a94921a861716bb8c20eacd51f6f1aabf212cb83ca3a7a701aa34d0ab4dce->leave($__internal_c32a94921a861716bb8c20eacd51f6f1aabf212cb83ca3a7a701aa34d0ab4dce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/var/www/html/fakymmo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
