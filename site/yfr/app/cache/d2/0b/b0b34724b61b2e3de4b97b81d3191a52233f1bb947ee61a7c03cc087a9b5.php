<?php

/* editfile/editfile.twig */
class __TwigTemplate_d20bb0b34724b61b2e3de4b97b81d3191a52233f1bb947ee61a7c03cc087a9b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("_base/_page-nav.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Configuration";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? ($this->env->getExtension('Bolt')->trans("page.edit-file.title.edit")) : ($this->env->getExtension('Bolt')->trans("page.edit-file.title.view")));
    }

    // line 9
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "basename", array()), "html", null, true);
    }

    // line 11
    public function block_page_main($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
        // line 13
        $context["macro"] = $this->env->loadTemplate("_macro/_macro.twig");
        // line 14
        echo "    ";
        $context["__internal_a4438b6ae0ab71fe4c37aeaad0e3fd5b5d9a41ffd0c6eb693abcd575571e152b"] = $this->env->loadTemplate("_macro/_files_path.twig");
        // line 15
        echo "

    ";
        // line 17
        $context["attr_text"] = array("_bind" => (($this->env->getExtension('Bolt')->isMobileClient()) ? ("") : (array(0 => "editfile", 1 => array("readonly" => (($this->getAttribute(        // line 18
(isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? (false) : (true)))))), "class" => "CodeMirror-scroll", "id" => "form_contents", "name" => "form[contents]", "required" => true, "style" => "width: 98%; min-height: 350px;");
        // line 25
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 28
        echo $context["__internal_a4438b6ae0ab71fe4c37aeaad0e3fd5b5d9a41ffd0c6eb693abcd575571e152b"]->getfiles_path($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), array("path" => "", "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())));
        echo "


            <form action=\"\" method=\"post\" class=\"form-inline\" autocomplete=\"off\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "_token", array()), 'widget');
        echo "

                <div>
                    <textarea";
        // line 35
        echo $context["macro"]->getattr((isset($context["attr_text"]) ? $context["attr_text"] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "vars", array()), "value", array()), "contents", array()), "html", null, true);
        echo "</textarea>
                </div>

                <div>
                    <button type=\"submit\" id=\"saveeditfile\" class=\"btn btn-primary\" ";
        // line 39
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
            echo "disabled";
        }
        echo ">
                        <i class=\"fa fa-flag\"></i> ";
        // line 40
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.button.save");
        echo "
                    </button>
                    <a class=\"btn btn-default confirm\" style=\"margin-left: 24px;\"
                       data-confirm=\"";
        // line 43
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.confirm-revert");
        echo "\"
                       href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "file", array()))), "html", null, true);
        echo "\"
                    >
                        <i class=\"fa fa-undo\"></i> ";
        // line 46
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.button.revert");
        echo "
                    </a>

                  <div class=\"relatedfiles\">
                    ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filegroup", array())) > 1)) {
            // line 51
            echo "                      ";
            echo $this->env->getExtension('Bolt')->trans("page.edit-file.note-related");
            echo "
                      ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filegroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 53
                echo "                        ";
                if (($context["related"] != $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "basename", array()))) {
                    // line 54
                    echo "                          <a class=\"btn btn-tertiary btn-small\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "additionalpath", array()) . $context["related"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["related"], "html", null, true);
                    echo "</a>
                        ";
                }
                // line 56
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
        }
        // line 58
        echo "                  </div>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 64
        if ( !$this->env->getExtension('Bolt')->isMobileClient()) {
            // line 65
            echo "        ";
            if (twig_in_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()), array(0 => "twig", 1 => "html", 2 => "htm"))) {
                // line 66
                echo "            ";
                $context["codemirror"] = array(0 => "xml", 1 => "javascript", 2 => "css", 3 => "htmlmixed");
                // line 67
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "php")) {
                // line 68
                echo "            ";
                $context["codemirror"] = array(0 => "matchbrackets", 1 => "javascript", 2 => "css", 3 => "htmlmixed", 4 => "clike", 5 => "php");
                // line 69
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "yml")) {
                // line 70
                echo "            ";
                $context["codemirror"] = array(0 => "yaml");
                // line 71
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "md")) {
                // line 72
                echo "            ";
                $context["codemirror"] = array(0 => "markdown");
                // line 73
                echo "        ";
            } elseif (twig_in_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()), array(0 => "css", 1 => "less"))) {
                // line 74
                echo "            ";
                $context["codemirror"] = "css";
                // line 75
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "js")) {
                // line 76
                echo "            ";
                $context["codemirror"] = array(0 => "javascript");
                // line 77
                echo "        ";
            } else {
                // line 78
                echo "            ";
                $context["codemirror"] = array();
                // line 79
                echo "        ";
            }
            // line 80
            echo "
        ";
            // line 82
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/css/codemirror.min.css\">
        <script src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/ckeditor.js\"></script>
        <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/js/codemirror.min.js\"></script>
        ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["codemirror"]) ? $context["codemirror"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 86
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
                echo "view/js/ckeditor/plugins/codemirror/plugins/";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo ".min.js\"></script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "    ";
        }
        // line 89
        echo "
";
    }

    public function getTemplateName()
    {
        return "editfile/editfile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 89,  247 => 88,  236 => 86,  232 => 85,  228 => 84,  224 => 83,  219 => 82,  216 => 80,  213 => 79,  210 => 78,  207 => 77,  204 => 76,  201 => 75,  198 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  183 => 69,  180 => 68,  177 => 67,  174 => 66,  171 => 65,  169 => 64,  161 => 58,  158 => 57,  152 => 56,  144 => 54,  141 => 53,  137 => 52,  132 => 51,  130 => 50,  123 => 46,  118 => 44,  114 => 43,  108 => 40,  102 => 39,  93 => 35,  87 => 32,  80 => 28,  75 => 25,  73 => 18,  72 => 17,  68 => 15,  65 => 14,  63 => 13,  60 => 12,  57 => 11,  51 => 9,  45 => 7,  39 => 5,  11 => 3,);
    }
}
