<?php

/* components/panel-stack.twig */
class __TwigTemplate_9b0337fe858454a1a4560fee633a27b91c4e225f67be2538956bc84990e7048b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        try {
            $this->parent = $this->env->loadTemplate("_base/_panel.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(5);

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

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-stack";
    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-paperclip";
    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Files on the stack");
    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        // line 14
        echo "    <div id=\"stackholder\">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "stack", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            <div class=\"stackitem item-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
            echo " info-pop\"
                 data-placement=\"bottom\" data-html=\"true\" data-title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
            echo "\" data-content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "info", array()), "html", null, true);
            echo "\">
                ";
            // line 18
            if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                // line 19
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["item"], "filepath", array()), 100, 100), "html", null, true);
                echo "\" width=\"100\" height=\"100\">
                ";
            } else {
                // line 21
                echo "                   <strong>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["item"], "extension", array())), "html", null, true);
                echo "</strong>
                   <small>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                echo "</small>
                ";
            }
            // line 24
            echo "            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "            <div class=\"nostackitems\">";
            echo $this->env->getExtension('Bolt')->trans("There are no items on the Stack, yet.");
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>

    <div class=\"stack-buttons\">
        ";
        // line 31
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "canUpload", array())) {
            // line 32
            echo "        <div class=\"btn-group\">
            <span class=\"btn btn-tertiary fileinput-button\">
                <i class=\"fa fa-upload\"></i>
                <span>";
            // line 35
            echo $this->env->getExtension('Bolt')->trans("Upload");
            echo "</span>
                <input id=\"fileupload-stack\"
                       type=\"file\"
                       name=\"files[]\"
                       data-url=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("upload", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()))), "html", null, true);
            echo "\"
                       accept=\".";
            // line 40
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetypes", array()), ",."), "html", null, true);
            echo "\">
            </span>
        </div>
        ";
        }
        // line 44
        echo "
        <div class=\"btn-group\">
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async", array()), "html", null, true);
        echo "browse/files?key=stack\" class=\"btn btn-tertiary\" data-toggle=\"modal\" data-target=\"#selectModal-stack\">
                <i class=\"fa fa-download\"></i>
                ";
        // line 48
        echo $this->env->getExtension('Bolt')->trans("Select");
        echo "
            </a>
        </div>
    </div>

    <div id=\"protostack\">
        <div class=\"stackitem image info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
            <img src=\"\" width=\"100\" height=\"100\">
        </div>

        <div class=\"stackitem other info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
            <strong>HTML</strong>
            <small>index.html</small>
        </div>
    </div>

    ";
        // line 65
        echo "    <div class=\"modal fade\" id=\"selectModal-stack\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\"></div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "components/panel-stack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 65,  174 => 48,  169 => 46,  165 => 44,  158 => 40,  154 => 39,  147 => 35,  142 => 32,  140 => 31,  135 => 28,  126 => 26,  112 => 24,  107 => 22,  102 => 21,  96 => 19,  94 => 18,  88 => 17,  81 => 16,  63 => 15,  60 => 14,  57 => 13,  51 => 11,  45 => 9,  39 => 7,  11 => 5,);
    }
}
