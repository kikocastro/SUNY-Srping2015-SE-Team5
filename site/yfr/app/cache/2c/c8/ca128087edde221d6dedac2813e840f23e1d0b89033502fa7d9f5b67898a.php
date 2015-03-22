<?php

/* editcontent/editcontent.twig */
class __TwigTemplate_2cc8ca128087edde221d6dedac2813e840f23e1d0b89033502fa7d9f5b67898a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        try {
            $this->parent = $this->env->loadTemplate("_base/_page-nav.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(5);

            throw $e;
        }

        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->env->loadTemplate("_macro/_macro.twig");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Content/*";
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["contenttype"] = array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        // line 11
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "title", array()))) {
            // line 12
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.edit", (isset($context["contenttype"]) ? $context["contenttype"] : null));
            echo "
    ";
        } else {
            // line 14
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", (isset($context["contenttype"]) ? $context["contenttype"] : null));
            echo "
    ";
        }
    }

    // line 18
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "title", array()), "")) : ("")), "html", null, true);
    }

    // line 21
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 23
    public function block_page_main($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["status_names"] = array("published" => $this->env->getExtension('Bolt')->trans("Published"), "held" => $this->env->getExtension('Bolt')->trans("Not published"), "timed" => $this->env->getExtension('Bolt')->trans("Timed publish"), "draft" => $this->env->getExtension('Bolt')->trans("Draft"));
        // line 25
        echo "
    ";
        // line 26
        ob_start();
        echo $context["macro"]->getdatetime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
        $context["dateChanged"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        $context["bind_data"] = array("savedon" => ((($this->env->getExtension('Bolt')->trans("Saved on:") . " <strong></strong> <small>(") .         // line 29
(isset($context["dateChanged"]) ? $context["dateChanged"] : null)) . ")</small></p>"), "newRecord" => ((($this->getAttribute($this->getAttribute(        // line 30
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) != 0)) ? (false) : (true)), "msgNotSaved" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.saving-impossible", array("%contenttype%" => $this->getAttribute($this->getAttribute(        // line 31
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()))), "pathsRoot" => $this->getAttribute(        // line 32
(isset($context["paths"]) ? $context["paths"] : null), "root", array()), "msgSaving" => $this->env->getExtension('Bolt')->trans("Saving …"), "hasGroups" => $this->getAttribute($this->getAttribute(        // line 34
(isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()), "singularSlug" => $this->getAttribute($this->getAttribute(        // line 35
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()));
        // line 37
        echo "
    ";
        // line 38
        $context["attr_form"] = array("_bind" => array(0 => "editcontent", 1 =>         // line 39
(isset($context["bind_data"]) ? $context["bind_data"] : null)), "class" => ("form-horizontal" . (($this->getAttribute($this->getAttribute(        // line 40
(isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) ? (" tab-content") : (""))), "enctype" => "multipart/form-data", "id" => "editcontent", "method" => "post", "role" => "form");
        // line 46
        echo "
    ";
        // line 47
        ob_start();
        // line 48
        echo "        <div id=\"%NOTICE_ID%\" class=\"alert alert-danger\">
            <button class=\"close\" data-dismiss=\"alert\">×</button>
            <label for=\"%FIELD_ID%\">";
        // line 50
        echo $this->env->getExtension('Bolt')->trans("Field “%FIELD_NAME%”:");
        echo "</label>
            %MESSAGE%
        </div>
    ";
        $context["alertbox"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        echo "
    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("validation", array("alertbox" => trim(        // line 56
(isset($context["alertbox"]) ? $context["alertbox"] : null)), "generic_msg" => $this->env->getExtension('Bolt')->trans("Is required or needs to match a pattern!"))), "html", null, true);
        // line 58
        echo "


    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 64
        $this->env->loadTemplate("_sub/_messages.twig")->display($context);
        // line 65
        echo "
            ";
        // line 67
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 68
            echo "                <ul class=\"nav nav-tabs\" id=\"filtertabs\">
                    ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "groups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 70
                echo "                        <li";
                echo (($this->getAttribute($context["group"], "is_active", array())) ? (" class=\"active\"") : (""));
                echo ">
                            <a href=\"#";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                </ul>
            ";
        }
        // line 76
        echo "
            <form";
        // line 77
        echo $context["macro"]->getattr((isset($context["attr_form"]) ? $context["attr_form"] : null));
        echo ">
                ";
        // line 78
        $this->env->loadTemplate("_sub/_csrf_token.twig")->display($context);
        // line 79
        echo "
                ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "groups", array()));
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
        foreach ($context['_seq'] as $context["group_name"] => $context["group"]) {
            // line 81
            echo "
                    ";
            // line 82
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
                // line 83
                echo "                        <div class=\"tab-pane";
                echo (($this->getAttribute($context["group"], "is_active", array())) ? (" active") : (""));
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\">
                    ";
            }
            // line 85
            echo "
                    ";
            // line 86
            if (($context["group_name"] == "relations")) {
                // line 87
                echo "                        ";
                $this->env->loadTemplate("editcontent/_relations.twig")->display($context);
                // line 88
                echo "
                    ";
            } elseif ((            // line 89
$context["group_name"] == "taxonomy")) {
                // line 90
                echo "                        ";
                $this->env->loadTemplate("editcontent/_taxonomies.twig")->display($context);
                // line 91
                echo "
                    ";
            } elseif ((            // line 92
$context["group_name"] == "meta")) {
                // line 93
                echo "                        ";
                $this->env->loadTemplate("editcontent/_meta.twig")->display($context);
                // line 94
                echo "
                    ";
            } else {
                // line 96
                echo "                        ";
                $this->env->loadTemplate("editcontent/_fields.twig")->display($context);
                // line 97
                echo "                    ";
            }
            // line 98
            echo "
                    ";
            // line 99
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
                // line 100
                echo "                        </div>
                    ";
            }
            // line 102
            echo "
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
                ";
        // line 105
        $this->env->loadTemplate("editcontent/_buttons.twig")->display($context);
        // line 106
        echo "            </form>

            ";
        // line 108
        $this->env->loadTemplate("editcontent/_includes.twig")->display($context);
        // line 109
        echo "
        </div>

        <aside class=\"col-md-4 hidden-sm\">
            ";
        // line 113
        $this->env->loadTemplate("editcontent/_aside.twig")->display($context);
        // line 114
        echo "        </aside>
    </div>

";
    }

    public function getTemplateName()
    {
        return "editcontent/editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 114,  297 => 113,  291 => 109,  289 => 108,  285 => 106,  283 => 105,  280 => 104,  265 => 102,  261 => 100,  259 => 99,  256 => 98,  253 => 97,  250 => 96,  246 => 94,  243 => 93,  241 => 92,  238 => 91,  235 => 90,  233 => 89,  230 => 88,  227 => 87,  225 => 86,  222 => 85,  214 => 83,  212 => 82,  209 => 81,  192 => 80,  189 => 79,  187 => 78,  183 => 77,  180 => 76,  176 => 74,  165 => 71,  160 => 70,  156 => 69,  153 => 68,  150 => 67,  147 => 65,  145 => 64,  137 => 58,  135 => 56,  134 => 55,  131 => 54,  124 => 50,  120 => 48,  118 => 47,  115 => 46,  113 => 40,  112 => 39,  111 => 38,  108 => 37,  106 => 35,  105 => 34,  104 => 32,  103 => 31,  102 => 30,  101 => 29,  100 => 28,  97 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  78 => 21,  72 => 18,  64 => 14,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  43 => 7,  39 => 5,  37 => 3,  11 => 5,);
    }
}
