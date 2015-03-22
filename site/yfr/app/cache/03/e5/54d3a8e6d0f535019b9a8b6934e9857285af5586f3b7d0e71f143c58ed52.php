<?php

/* overview/_panel-actions_overview.twig */
class __TwigTemplate_03e554d3a8e6d0f535019b9a8b6934e9857285af5586f3b7d0e71f143c58ed52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        try {
            $this->parent = $this->env->loadTemplate("_base/_panel.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(4);

            throw $e;
        }

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-news";
    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-cog";
    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.actions-all", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        // line 13
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()))), "html", null, true);
        echo "\">
        <i class=\"fa fa-plus\"></i> ";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </a>

    <form class=\"form-inline\" style=\"margin-top:15px;\">
        <input type=\"text\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->request("filter", "", true), "html", null, true);
        echo "\" name=\"filter\" style=\"width: 110px;\" placeholder=\"";
        echo $this->env->getExtension('Bolt')->trans("Filtering …");
        echo "\">
        <button type=\"submit\" class=\"btn btn-tertiary\">";
        // line 19
        echo $this->env->getExtension('Bolt')->trans("Filter");
        echo "</button>
    </form>

    ";
        // line 22
        if (($this->env->getExtension('Bolt')->request("filter") || $this->env->getExtension('Bolt')->request("order"))) {
            // line 23
            echo "        <a class=\"btn btn-tertiary\" href=\"?\" style=\"margin-top: 15px\">";
            echo $this->env->getExtension('Bolt')->trans("Clear sort/filter");
            echo "</a>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        $context["description"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), 2 => "description"), array("DEFAULT" => (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array()))) : (""))));
        // line 27
        echo "    <div class=\"description\">
        ";
        // line 28
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 29
            echo "            ";
            echo $this->env->getExtension('Bolt')->markdown((isset($context["description"]) ? $context["description"] : null));
            echo "
        ";
        }
        // line 31
        echo "    </div>

    <p><strong>";
        // line 33
        echo $this->env->getExtension('Bolt')->trans("Details");
        echo "</strong></p>
    <ul>
        <li>";
        // line 35
        echo $this->env->getExtension('Bolt')->trans("Default status");
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array()), "published")) : ("published")), "html", null, true);
        echo "</li>
        <li>";
        // line 36
        echo $this->env->getExtension('Bolt')->trans("Listing template");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_template"), "method"))), "html", null, true);
        echo "</code></li>
        <li>";
        // line 37
        echo $this->env->getExtension('Bolt')->trans("Detail template");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/record_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/record_template"), "method"))), "html", null, true);
        echo "</code></li>
        ";
        // line 38
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), "")) : ("")))) {
            // line 39
            echo "            <li>";
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo ": ";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "taxonomy", array()), ", "), "html", null, true);
            echo "</li>
        ";
        }
        // line 41
        echo "        ";
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array()), "")) : ("")))) {
            // line 42
            echo "            <li>
                ";
            // line 43
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo ":
                ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "relations", array()));
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
            foreach ($context['_seq'] as $context["rel"] => $context["data"]) {
                // line 45
                echo "                    ";
                echo twig_escape_filter($this->env, $context["rel"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 46
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['rel'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </li>
        ";
        }
        // line 49
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "overview/_panel-actions_overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 49,  192 => 47,  178 => 46,  172 => 45,  155 => 44,  151 => 43,  148 => 42,  145 => 41,  137 => 39,  135 => 38,  129 => 37,  123 => 36,  117 => 35,  112 => 33,  108 => 31,  102 => 29,  100 => 28,  97 => 27,  95 => 26,  92 => 25,  86 => 23,  84 => 22,  78 => 19,  72 => 18,  65 => 14,  60 => 13,  57 => 12,  51 => 10,  45 => 8,  39 => 6,  11 => 4,);
    }
}
