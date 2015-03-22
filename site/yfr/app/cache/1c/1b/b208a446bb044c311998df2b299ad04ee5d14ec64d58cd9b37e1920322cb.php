<?php

/* editcontent/fields/_image.twig */
class __TwigTemplate_1c1bb208a446bb044c311998df2b299ad04ee5d14ec64d58cd9b37e1920322cb extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["option"] = array("class" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "extensions" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array()), array())) : (array())), "attrib" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true)) ? (((twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array()))) ? (twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array()))) : (array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array()))))) : (false)), "upload" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "upload", array()), "")) : ("")), "can_upload" => $this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "canUpload", array()), "info" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.image")) : ("info.upload.image")));
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 16
        $context["preview_w"] = 200;
        // line 17
        $context["preview_h"] = 150;
        // line 18
        echo "
";
        // line 20
        $context["image"] = ((twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")) : (array("file" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))));
        // line 21
        echo "
";
        // line 22
        $context["attr_inp"] = array("class" => ($this->getAttribute(        // line 23
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " imageinput wide"), "id" => ("field-" .         // line 24
(isset($context["key"]) ? $context["key"] : null)), "name" => (        // line 25
(isset($context["key"]) ? $context["key"] : null) . "[file]"), "type" => "text", "placeholder" => ((($this->env->getExtension('Bolt')->trans("field.general.allowed-filetypes") . " ") . twig_join_filter($this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : null), "extensions", array()), ", ")) . " …"), "value" => (($this->getAttribute(        // line 28
(isset($context["image"]) ? $context["image"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), "")) : ("")));
        // line 30
        echo "
";
        // line 31
        $context["attr_upload"] = array("accept" => (($this->getAttribute(        // line 32
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ",."))) : ("")), "data_upload" => twig_jsonencode_filter(array("type" => "Image", "key" =>         // line 33
(isset($context["key"]) ? $context["key"] : null), "width" => (isset($context["preview_w"]) ? $context["preview_w"] : null), "height" => (isset($context["preview_h"]) ? $context["preview_h"] : null))), "data_url" => $this->env->getExtension('routing')->getUrl("upload", array("handler" => $this->getAttribute(        // line 34
(isset($context["option"]) ? $context["option"] : null), "upload", array()))), "id" => ("fileupload-" .         // line 35
(isset($context["key"]) ? $context["key"] : null)), "name" => "files[]", "type" => "file");
        // line 39
        echo "

";
        // line 42
        echo "
";
        // line 43
        $context["block"] = $this;
        // line 44
        echo "
";
        // line 55
        echo "
";
        // line 83
        echo "
";
        // line 89
        echo "
";
        // line 98
        echo "
";
        // line 100
        echo "
<fieldset class=\"image\">
    <div class=\"dropzone clearfix\" id=\"dropzone-";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">
    <label class=\"col-xs-12 control-label\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method"), "html", null, true);
        echo "</label>
    <div class=\"col-xs-8\">
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                ";
        // line 107
        echo $context["block"]->getimagepath((isset($context["labelkey"]) ? $context["labelkey"] : null), (isset($context["option"]) ? $context["option"] : null), (isset($context["image"]) ? $context["image"] : null), (isset($context["attr_inp"]) ? $context["attr_inp"] : null));
        echo "
            </div>
        </div>
        ";
        // line 110
        echo $context["block"]->getattributes((isset($context["key"]) ? $context["key"] : null), (isset($context["option"]) ? $context["option"] : null), (isset($context["image"]) ? $context["image"] : null));
        echo "
        ";
        // line 111
        $context["can_upload"] = ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "can_upload", array()) && $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "can_upload", array()));
        // line 112
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "upload_buttons", array(0 => "image", 1 => (isset($context["key"]) ? $context["key"] : null), 2 => (isset($context["attr_upload"]) ? $context["attr_upload"] : null), 3 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "upload", array()), 4 => (isset($context["can_upload"]) ? $context["can_upload"] : null)), "method"), "html", null, true);
        echo "
        ";
        // line 113
        echo $context["block"]->getprogress((isset($context["key"]) ? $context["key"] : null));
        echo "
        ";
        // line 114
        echo $context["block"]->getserverselect((isset($context["key"]) ? $context["key"] : null), $this->env->getExtension('Bolt')->trans("Cancel"));
        echo "
    </div>

    <div class=\"col-xs-4\">
        <div class=\"right-on-large\">";
        // line 119
        echo "            <label>";
        echo $this->env->getExtension('Bolt')->trans("Preview");
        echo "</label>
            <div class=\"content-preview imageholder\" id=\"thumbnail-";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\" style=\"max-width:";
        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
        echo "px;max-height:";
        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
        echo "px\">
                ";
        // line 121
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") != "")) {
            // line 122
            echo "                    ";
            $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
            // line 123
            echo "                ";
        } else {
            // line 124
            echo "                    ";
            $context["preview_path"] = ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "app", array()) . "view/img/default_empty_4x3.png");
            // line 125
            echo "                ";
        }
        // line 126
        echo "                ";
        // line 127
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
        echo "\" alt=\"Preview\">
            </div>
        </div>
    </div>
</div>

</fieldset>
";
    }

    // line 45
    public function getimagepath($__labelkey__ = null, $__option__ = null, $__image__ = null, $__attr_inp__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "labelkey" => $__labelkey__,
            "option" => $__option__,
            "image" => $__image__,
            "attr_inp" => $__attr_inp__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            echo "    ";
            $context["macro"] = $this->env->loadTemplate("_macro/_macro.twig");
            // line 47
            echo "    ";
            // line 52
            echo "    <label>";
            echo $this->env->getExtension('Bolt')->trans("Path to image file");
            echo "</label>
    <input";
            // line 53
            echo $context["macro"]->getattr((isset($context["attr_inp"]) ? $context["attr_inp"] : null));
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 56
    public function getattributes($__key__ = null, $__option__ = null, $__image__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "option" => $__option__,
            "image" => $__image__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 57
            echo "    ";
            if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array())) {
                // line 58
                echo "        ";
                // line 59
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attrib"]) {
                    // line 60
                    echo "            ";
                    if (($context["attrib"] == "title")) {
                        // line 61
                        echo "                <div class=\"form-group\">
                    <div class=\"col-sm-2\">
                        <label for=\"";
                        // line 63
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "[title]\">";
                        echo $this->env->getExtension('Bolt')->trans("Title");
                        echo "</label>
                    </div>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"";
                        // line 66
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "[title]\" id=\"";
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "-title\" value=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "")) : ("")), "html", null, true);
                        echo "\" class=\"form-control\">
                    </div>
                </div>
            ";
                    }
                    // line 70
                    echo "            ";
                    if (($context["attrib"] == "Alt text")) {
                        // line 71
                        echo "                <div class=\"form-group\">
                    <div class=\"col-sm-2\">
                        <label for=\"";
                        // line 73
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "[alt]\">";
                        echo $this->env->getExtension('Bolt')->trans("Alt");
                        echo "</label>
                    </div>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"";
                        // line 76
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "[alt]\" id=\"";
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "-alt\" value=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "")) : ("")), "html", null, true);
                        echo "\" class=\"form-control\">
                    </div>
                </div>
            ";
                    }
                    // line 80
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attrib'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 84
    public function getprogress($__key__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 85
            echo "    <div class=\"progress progress-striped active\" id=\"progress-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
        <div class=\"bar\" style=\"width: 0%;\"></div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function getserverselect($__key__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 92
            echo "    <div class=\"modal fade\" id=\"selectModal-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\"></div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 92,  331 => 91,  315 => 85,  304 => 84,  292 => 81,  286 => 80,  275 => 76,  267 => 73,  263 => 71,  260 => 70,  249 => 66,  241 => 63,  237 => 61,  234 => 60,  229 => 59,  227 => 58,  224 => 57,  211 => 56,  198 => 53,  193 => 52,  191 => 47,  188 => 46,  174 => 45,  161 => 127,  159 => 126,  156 => 125,  153 => 124,  150 => 123,  147 => 122,  145 => 121,  137 => 120,  132 => 119,  125 => 114,  121 => 113,  116 => 112,  114 => 111,  110 => 110,  104 => 107,  97 => 103,  93 => 102,  89 => 100,  86 => 98,  83 => 89,  80 => 83,  77 => 55,  74 => 44,  72 => 43,  69 => 42,  65 => 39,  63 => 35,  62 => 34,  61 => 33,  60 => 32,  59 => 31,  56 => 30,  54 => 28,  53 => 27,  52 => 25,  51 => 24,  50 => 23,  49 => 22,  46 => 21,  44 => 20,  41 => 18,  39 => 17,  37 => 16,  34 => 15,  31 => 13,  29 => 10,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
