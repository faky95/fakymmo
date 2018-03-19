<?php

/* FKImmoBundle:Admin:admin.html.twig */
class __TwigTemplate_69c266129dbf26e320c6c2492ccfac9f79f609f0513841aabe341d99d67553f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "FKImmoBundle:Admin:admin.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ea342ff184c82ccbe97ec5a42fbb388feea89720020e040c7505f427b0f51f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea342ff184c82ccbe97ec5a42fbb388feea89720020e040c7505f427b0f51f3->enter($__internal_5ea342ff184c82ccbe97ec5a42fbb388feea89720020e040c7505f427b0f51f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:admin.html.twig"));

        $__internal_956dfd34797943b44cf13ae33d260bfe0cc07ca8c7bbf9d0bd788ab94b74f08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956dfd34797943b44cf13ae33d260bfe0cc07ca8c7bbf9d0bd788ab94b74f08c->enter($__internal_956dfd34797943b44cf13ae33d260bfe0cc07ca8c7bbf9d0bd788ab94b74f08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FKImmoBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ea342ff184c82ccbe97ec5a42fbb388feea89720020e040c7505f427b0f51f3->leave($__internal_5ea342ff184c82ccbe97ec5a42fbb388feea89720020e040c7505f427b0f51f3_prof);

        
        $__internal_956dfd34797943b44cf13ae33d260bfe0cc07ca8c7bbf9d0bd788ab94b74f08c->leave($__internal_956dfd34797943b44cf13ae33d260bfe0cc07ca8c7bbf9d0bd788ab94b74f08c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97671343827bc2cb057d52d07a748bc904d80a07947e5d103b162b49b85ed8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97671343827bc2cb057d52d07a748bc904d80a07947e5d103b162b49b85ed8c5->enter($__internal_97671343827bc2cb057d52d07a748bc904d80a07947e5d103b162b49b85ed8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e80fa65043b2477cb6b073efc0428faf56253ee28968580532a96d364c3fc4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80fa65043b2477cb6b073efc0428faf56253ee28968580532a96d364c3fc4b3->enter($__internal_e80fa65043b2477cb6b073efc0428faf56253ee28968580532a96d364c3fc4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatable.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_e80fa65043b2477cb6b073efc0428faf56253ee28968580532a96d364c3fc4b3->leave($__internal_e80fa65043b2477cb6b073efc0428faf56253ee28968580532a96d364c3fc4b3_prof);

        
        $__internal_97671343827bc2cb057d52d07a748bc904d80a07947e5d103b162b49b85ed8c5->leave($__internal_97671343827bc2cb057d52d07a748bc904d80a07947e5d103b162b49b85ed8c5_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_eeda03859c9a5bfe73b3cba4268b9e124f444ce25dadb2fe14069a52f08e4192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeda03859c9a5bfe73b3cba4268b9e124f444ce25dadb2fe14069a52f08e4192->enter($__internal_eeda03859c9a5bfe73b3cba4268b9e124f444ce25dadb2fe14069a52f08e4192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a8df5dcf1f7a58d889cf2172e69f8991d1d8214e7b2be9048b695ee5ad9e1dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8df5dcf1f7a58d889cf2172e69f8991d1d8214e7b2be9048b695ee5ad9e1dce->enter($__internal_a8df5dcf1f7a58d889cf2172e69f8991d1d8214e7b2be9048b695ee5ad9e1dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "<h1 style=\"text-align:center;\">Reservation En Cours </h1>

<table id=\"table\">
<tr>
";
        // line 14
        echo "<th>Nom Client</th>
 <th>Adresse Client</th>
<th>Nom Bien</th>
<th>Localite Bien</th>
<th>Type Bien</th>
<th>Prix Location</th>
 <th>Image</th>
<th>Details</th>  
</tr>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 24
            echo "<tr>
    ";
            // line 26
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "client", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adresse", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "nombien", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "localite", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
    <td>   
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 34
                echo "                        
             <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">
                       
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "</td>
    <td>
        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">Details </a>
    </td>
 

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</table>
<style>
.img
{
    width:100px;
}
</style>
";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_a8df5dcf1f7a58d889cf2172e69f8991d1d8214e7b2be9048b695ee5ad9e1dce->leave($__internal_a8df5dcf1f7a58d889cf2172e69f8991d1d8214e7b2be9048b695ee5ad9e1dce_prof);

        
        $__internal_eeda03859c9a5bfe73b3cba4268b9e124f444ce25dadb2fe14069a52f08e4192->leave($__internal_eeda03859c9a5bfe73b3cba4268b9e124f444ce25dadb2fe14069a52f08e4192_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be67e63f91e6d7da4a2fe071c2786846ffee75d88e2ba1b67f46260eec39b629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be67e63f91e6d7da4a2fe071c2786846ffee75d88e2ba1b67f46260eec39b629->enter($__internal_be67e63f91e6d7da4a2fe071c2786846ffee75d88e2ba1b67f46260eec39b629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_210f946ed6c76adfd942d59be66c1aec5f23456d44261663c5285838bb63f71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210f946ed6c76adfd942d59be66c1aec5f23456d44261663c5285838bb63f71c->enter($__internal_210f946ed6c76adfd942d59be66c1aec5f23456d44261663c5285838bb63f71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatable.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/monscript.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_210f946ed6c76adfd942d59be66c1aec5f23456d44261663c5285838bb63f71c->leave($__internal_210f946ed6c76adfd942d59be66c1aec5f23456d44261663c5285838bb63f71c_prof);

        
        $__internal_be67e63f91e6d7da4a2fe071c2786846ffee75d88e2ba1b67f46260eec39b629->leave($__internal_be67e63f91e6d7da4a2fe071c2786846ffee75d88e2ba1b67f46260eec39b629_prof);

    }

    public function getTemplateName()
    {
        return "FKImmoBundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 56,  190 => 55,  185 => 53,  167 => 52,  158 => 45,  146 => 39,  142 => 37,  133 => 35,  130 => 34,  126 => 33,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  100 => 26,  97 => 24,  93 => 23,  82 => 14,  76 => 9,  67 => 8,  55 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{asset('css/datatable.min.css')}}\">
{% endblock %}

{% block main %}
<h1 style=\"text-align:center;\">Reservation En Cours </h1>

<table id=\"table\">
<tr>
{# <th>Id</th> #}
<th>Nom Client</th>
 <th>Adresse Client</th>
<th>Nom Bien</th>
<th>Localite Bien</th>
<th>Type Bien</th>
<th>Prix Location</th>
 <th>Image</th>
<th>Details</th>  
</tr>
{% for reservation in reservations %}
<tr>
    {# <td>{{reservation.id}}</td> #}
    <td>{{reservation.client}}</td>
    <td>{{reservation.client.adresse}}</td>
    <td>{{reservation.bien.nombien}}</td>
    <td>{{reservation.bien.localite}}</td>
    <td>{{reservation.bien.typebien}}</td>
    <td>{{reservation.bien.prixlocation}}</td>
    <td>   
        {% for image in reservation.bien.images %}
                        
             <img src=\"{{asset('images/'~image.image)}}\"class=\"img\">
                       
         {% endfor %}</td>
    <td>
        <a href=\"{{path('detail',{'id':reservation.id})}}\">Details </a>
    </td>
 

</tr>
{% endfor %}
</table>
<style>
.img
{
    width:100px;
}
</style>
{% block javascripts %}
{{ parent() }}

<script src=\"{{asset('js/datatable.min.js')}}\"></script>
<script src=\"{{asset('js/monscript.js')}}\"></script>
{% endblock %}
{% endblock %}", "FKImmoBundle:Admin:admin.html.twig", "/var/www/html/fakymmo/src/FK/ImmoBundle/Resources/views/Admin/admin.html.twig");
    }
}
