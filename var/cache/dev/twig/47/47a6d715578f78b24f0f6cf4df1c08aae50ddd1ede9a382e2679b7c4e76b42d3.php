<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_1b4e3865982b87bd4723ae372fd35082051e4946dc62ba3596e5cad12a788bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ea00ae699c522c0c79b222d1c141c61fcbe7692e3fe3530ac25515a77207f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea00ae699c522c0c79b222d1c141c61fcbe7692e3fe3530ac25515a77207f66->enter($__internal_6ea00ae699c522c0c79b222d1c141c61fcbe7692e3fe3530ac25515a77207f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_4a46dd30e3aa6cd892bc81a28f3691665c98a703373e79ce2af977e7dad66fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a46dd30e3aa6cd892bc81a28f3691665c98a703373e79ce2af977e7dad66fec->enter($__internal_4a46dd30e3aa6cd892bc81a28f3691665c98a703373e79ce2af977e7dad66fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800"] ?? $this->getContext($context, "__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800"] ?? $this->getContext($context, "__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea00ae699c522c0c79b222d1c141c61fcbe7692e3fe3530ac25515a77207f66->leave($__internal_6ea00ae699c522c0c79b222d1c141c61fcbe7692e3fe3530ac25515a77207f66_prof);

        
        $__internal_4a46dd30e3aa6cd892bc81a28f3691665c98a703373e79ce2af977e7dad66fec->leave($__internal_4a46dd30e3aa6cd892bc81a28f3691665c98a703373e79ce2af977e7dad66fec_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_828905d89311a59fa408a428b617f304df9f09e473289339983fcae6db024b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828905d89311a59fa408a428b617f304df9f09e473289339983fcae6db024b62->enter($__internal_828905d89311a59fa408a428b617f304df9f09e473289339983fcae6db024b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_5201bb928f9634b6f7ea47c5479fa74cb2fb13a7cbe26591556163b5cef60701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5201bb928f9634b6f7ea47c5479fa74cb2fb13a7cbe26591556163b5cef60701->enter($__internal_5201bb928f9634b6f7ea47c5479fa74cb2fb13a7cbe26591556163b5cef60701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_5201bb928f9634b6f7ea47c5479fa74cb2fb13a7cbe26591556163b5cef60701->leave($__internal_5201bb928f9634b6f7ea47c5479fa74cb2fb13a7cbe26591556163b5cef60701_prof);

        
        $__internal_828905d89311a59fa408a428b617f304df9f09e473289339983fcae6db024b62->leave($__internal_828905d89311a59fa408a428b617f304df9f09e473289339983fcae6db024b62_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_2d434280c1b4261472d42009ec219133db6270e8c80976038065674e05036d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d434280c1b4261472d42009ec219133db6270e8c80976038065674e05036d0b->enter($__internal_2d434280c1b4261472d42009ec219133db6270e8c80976038065674e05036d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_a8c32df5ca7e868835b3b0c8996fcce4dc094b6a53624aec3bc95b6daff6b511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c32df5ca7e868835b3b0c8996fcce4dc094b6a53624aec3bc95b6daff6b511->enter($__internal_a8c32df5ca7e868835b3b0c8996fcce4dc094b6a53624aec3bc95b6daff6b511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_a8c32df5ca7e868835b3b0c8996fcce4dc094b6a53624aec3bc95b6daff6b511->leave($__internal_a8c32df5ca7e868835b3b0c8996fcce4dc094b6a53624aec3bc95b6daff6b511_prof);

        
        $__internal_2d434280c1b4261472d42009ec219133db6270e8c80976038065674e05036d0b->leave($__internal_2d434280c1b4261472d42009ec219133db6270e8c80976038065674e05036d0b_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9a44c0858b954ffaadb4807863b5b3135d17bfefdf5e1525f32bed150ee61544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a44c0858b954ffaadb4807863b5b3135d17bfefdf5e1525f32bed150ee61544->enter($__internal_9a44c0858b954ffaadb4807863b5b3135d17bfefdf5e1525f32bed150ee61544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_183f597705887373cf56bb5a6bad707f67d02ab0dcb8ee3bec5f2169913d7c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183f597705887373cf56bb5a6bad707f67d02ab0dcb8ee3bec5f2169913d7c02->enter($__internal_183f597705887373cf56bb5a6bad707f67d02ab0dcb8ee3bec5f2169913d7c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800"] ?? $this->getContext($context, "__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_183f597705887373cf56bb5a6bad707f67d02ab0dcb8ee3bec5f2169913d7c02->leave($__internal_183f597705887373cf56bb5a6bad707f67d02ab0dcb8ee3bec5f2169913d7c02_prof);

        
        $__internal_9a44c0858b954ffaadb4807863b5b3135d17bfefdf5e1525f32bed150ee61544->leave($__internal_9a44c0858b954ffaadb4807863b5b3135d17bfefdf5e1525f32bed150ee61544_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_b7f6600e5232c395667b76c92b2eb8a89e261f2341849be4f3d68426f23d399c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f6600e5232c395667b76c92b2eb8a89e261f2341849be4f3d68426f23d399c->enter($__internal_b7f6600e5232c395667b76c92b2eb8a89e261f2341849be4f3d68426f23d399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6d087d1cc37448ea911436f3c31cd334a82145402658a492e2d11ab20b24bb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d087d1cc37448ea911436f3c31cd334a82145402658a492e2d11ab20b24bb04->enter($__internal_6d087d1cc37448ea911436f3c31cd334a82145402658a492e2d11ab20b24bb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_6d087d1cc37448ea911436f3c31cd334a82145402658a492e2d11ab20b24bb04->leave($__internal_6d087d1cc37448ea911436f3c31cd334a82145402658a492e2d11ab20b24bb04_prof);

        
        $__internal_b7f6600e5232c395667b76c92b2eb8a89e261f2341849be4f3d68426f23d399c->leave($__internal_b7f6600e5232c395667b76c92b2eb8a89e261f2341849be4f3d68426f23d399c_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_b2dc9045b140f034a05439c531781348a47647999a2a2d33d58bf6947ba3a312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dc9045b140f034a05439c531781348a47647999a2a2d33d58bf6947ba3a312->enter($__internal_b2dc9045b140f034a05439c531781348a47647999a2a2d33d58bf6947ba3a312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_a6e0818887a42fdbc5ed5ddc7cc3e8457fda2452fb9ae0fb98bafdb217a8aa48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e0818887a42fdbc5ed5ddc7cc3e8457fda2452fb9ae0fb98bafdb217a8aa48->enter($__internal_a6e0818887a42fdbc5ed5ddc7cc3e8457fda2452fb9ae0fb98bafdb217a8aa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_a6e0818887a42fdbc5ed5ddc7cc3e8457fda2452fb9ae0fb98bafdb217a8aa48->leave($__internal_a6e0818887a42fdbc5ed5ddc7cc3e8457fda2452fb9ae0fb98bafdb217a8aa48_prof);

        
        $__internal_b2dc9045b140f034a05439c531781348a47647999a2a2d33d58bf6947ba3a312->leave($__internal_b2dc9045b140f034a05439c531781348a47647999a2a2d33d58bf6947ba3a312_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_6933cc58d942900fd029184d5ef5751659b26a29ed71ba25c3900d107bda50ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6933cc58d942900fd029184d5ef5751659b26a29ed71ba25c3900d107bda50ba->enter($__internal_6933cc58d942900fd029184d5ef5751659b26a29ed71ba25c3900d107bda50ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_074917f178224c99105c0d259753f2df4aa8aa9ce6eeac42e252bdb0c0cf52ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074917f178224c99105c0d259753f2df4aa8aa9ce6eeac42e252bdb0c0cf52ab->enter($__internal_074917f178224c99105c0d259753f2df4aa8aa9ce6eeac42e252bdb0c0cf52ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) ? ($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["field"] ?? $this->getContext($context, "field"))))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800"] ?? $this->getContext($context, "__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800")));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), ($context["metadata"] ?? $this->getContext($context, "metadata")));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute(($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "help", array()), array(),             // line 4
($context["__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800"] ?? $this->getContext($context, "__internal_23bb616fcb788a2e9022372cd79ce70dc9fb212aa4d695ab8db8b1faa6d03800")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_074917f178224c99105c0d259753f2df4aa8aa9ce6eeac42e252bdb0c0cf52ab->leave($__internal_074917f178224c99105c0d259753f2df4aa8aa9ce6eeac42e252bdb0c0cf52ab_prof);

        
        $__internal_6933cc58d942900fd029184d5ef5751659b26a29ed71ba25c3900d107bda50ba->leave($__internal_6933cc58d942900fd029184d5ef5751659b26a29ed71ba25c3900d107bda50ba_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_a67640dde58f53148ee567e698d28647bdd9ea48a4de0ec338def2a7405d5320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67640dde58f53148ee567e698d28647bdd9ea48a4de0ec338def2a7405d5320->enter($__internal_a67640dde58f53148ee567e698d28647bdd9ea48a4de0ec338def2a7405d5320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_8d23758e743a50cc0a68f844bb7ca3f34c03a9f1ad48123a0fc1e5e2b4ab5183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d23758e743a50cc0a68f844bb7ca3f34c03a9f1ad48123a0fc1e5e2b4ab5183->enter($__internal_8d23758e743a50cc0a68f844bb7ca3f34c03a9f1ad48123a0fc1e5e2b4ab5183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 50
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 51
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 52
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 53
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 54
        echo "
            ";
        
        $__internal_8d23758e743a50cc0a68f844bb7ca3f34c03a9f1ad48123a0fc1e5e2b4ab5183->leave($__internal_8d23758e743a50cc0a68f844bb7ca3f34c03a9f1ad48123a0fc1e5e2b4ab5183_prof);

        
        $__internal_a67640dde58f53148ee567e698d28647bdd9ea48a4de0ec338def2a7405d5320->leave($__internal_a67640dde58f53148ee567e698d28647bdd9ea48a4de0ec338def2a7405d5320_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_d72d9bef094b9cee7c4e928134cc2d8c011fa6de78af2493ef0f0b12624257bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72d9bef094b9cee7c4e928134cc2d8c011fa6de78af2493ef0f0b12624257bc->enter($__internal_d72d9bef094b9cee7c4e928134cc2d8c011fa6de78af2493ef0f0b12624257bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_df1f6609895716127c71e9a8ecfcbbc8b6a60a2eb1f8270d93e30824d69802a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1f6609895716127c71e9a8ecfcbbc8b6a60a2eb1f8270d93e30824d69802a1->enter($__internal_df1f6609895716127c71e9a8ecfcbbc8b6a60a2eb1f8270d93e30824d69802a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 65
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 66
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 67
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 68
        echo "
    ";
        
        $__internal_df1f6609895716127c71e9a8ecfcbbc8b6a60a2eb1f8270d93e30824d69802a1->leave($__internal_df1f6609895716127c71e9a8ecfcbbc8b6a60a2eb1f8270d93e30824d69802a1_prof);

        
        $__internal_d72d9bef094b9cee7c4e928134cc2d8c011fa6de78af2493ef0f0b12624257bc->leave($__internal_d72d9bef094b9cee7c4e928134cc2d8c011fa6de78af2493ef0f0b12624257bc_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_98138c817f17eda7bacc7ad53acf3e62ff6767eba5aa86b2b9f1814fda9b28ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98138c817f17eda7bacc7ad53acf3e62ff6767eba5aa86b2b9f1814fda9b28ac->enter($__internal_98138c817f17eda7bacc7ad53acf3e62ff6767eba5aa86b2b9f1814fda9b28ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_ecb5604d7bec28a660bb10180825ce1a2142497214e843a0020fe85fe9910934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb5604d7bec28a660bb10180825ce1a2142497214e843a0020fe85fe9910934->enter($__internal_ecb5604d7bec28a660bb10180825ce1a2142497214e843a0020fe85fe9910934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_ecb5604d7bec28a660bb10180825ce1a2142497214e843a0020fe85fe9910934->leave($__internal_ecb5604d7bec28a660bb10180825ce1a2142497214e843a0020fe85fe9910934_prof);

        
        $__internal_98138c817f17eda7bacc7ad53acf3e62ff6767eba5aa86b2b9f1814fda9b28ac->leave($__internal_98138c817f17eda7bacc7ad53acf3e62ff6767eba5aa86b2b9f1814fda9b28ac_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 73,  335 => 72,  324 => 68,  322 => 67,  321 => 66,  320 => 65,  319 => 64,  318 => 63,  316 => 61,  307 => 60,  296 => 54,  294 => 53,  293 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  271 => 44,  259 => 36,  255 => 34,  253 => 4,  251 => 34,  249 => 33,  243 => 30,  237 => 26,  235 => 4,  234 => 26,  226 => 24,  217 => 23,  207 => 40,  193 => 39,  190 => 23,  172 => 22,  163 => 21,  153 => 60,  147 => 56,  145 => 44,  140 => 41,  138 => 21,  135 => 20,  126 => 19,  113 => 15,  112 => 4,  110 => 15,  107 => 14,  105 => 13,  96 => 12,  78 => 10,  60 => 9,  50 => 7,  48 => 5,  47 => 4,  46 => 5,  45 => 4,  44 => 5,  42 => 4,  40 => 3,  38 => 1,  26 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/var/www/html/fakymmo/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
