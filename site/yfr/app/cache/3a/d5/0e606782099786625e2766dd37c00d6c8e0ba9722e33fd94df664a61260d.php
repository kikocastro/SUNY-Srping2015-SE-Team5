<?php

/* _macro/_macro.twig */
class __TwigTemplate_3ad50e606782099786625e2766dd37c00d6c8e0ba9722e33fd94df664a61260d extends Twig_Template
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
        // line 8
        echo "
";
        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 28
        echo "
";
        // line 33
        echo "
";
        // line 60
        echo "
";
        // line 74
        echo "
";
        // line 86
        echo "
";
        // line 105
        echo "

";
        // line 113
        echo "
";
        // line 123
        echo "
";
        // line 186
        echo "
";
        // line 197
        echo "
 # Renders a upload button combo [Upload] [Select from Server] [Select from Stack]
 #
 # @param string type Either 'image' or 'other,document'
 # @param string key Id of the input element
 # @param string attr_upload Attributes for the file upload button
 # @param string uploadpath Relative upload path
 #}
";
    }

    // line 3
    public function getuserlink($__user__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array()), "html", null, true);
            // line 6
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getcontentlink_by_id($__contenttype__ = null, $__title__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "title" => $__title__,
            "content_id" => $__content_id__,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 10
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array()), "id" => (isset($context["content_id"]) ? $context["content_id"] : null))), "html", null, true);
            echo "\">";
            // line 11
            echo _twig_default_filter($this->env->getExtension('Bolt')->trim((isset($context["title"]) ? $context["title"] : null), 70), (("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>"));
            // line 12
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getcontentlink($__contenttype__ = null, $__content__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "content" => $__content__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["crosslinks"] = $this;
            // line 17
            echo "
    ";
            // line 18
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array(), "any", true, true)) {
                // line 19
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array());
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "name", array());
                // line 22
                echo "    ";
            }
            // line 23
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function getdatetime($__d__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "d" => $__d__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "</time>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getrequiredattr($__field__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "    ";
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()))) {
                echo "required=\"required\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 35
    public function getattr($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 36
            echo "    ";
            ob_start();
            // line 37
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["value"]) {
                // line 38
                echo "            ";
                if (($context["attrname"] == "value")) {
                    // line 39
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
            ";
                } elseif ( !twig_test_empty(                // line 40
$context["value"])) {
                    // line 41
                    echo "                ";
                    if (twig_in_filter($context["attrname"], array(0 => "required", 1 => "disabled", 2 => "selected", 3 => "autofocus", 4 => "multiple", 5 => "readonly"))) {
                        // line 42
                        echo "                    ";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 43
$context["attrname"] == "name_id")) {
                        // line 44
                        echo "                    name=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 45
$context["attrname"] == "class")) {
                        // line 46
                        echo "                    class=\"";
                        echo twig_escape_filter($this->env, trim($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 47
$context["attrname"] == "style")) {
                        // line 48
                        echo "                    style=\"";
                        echo twig_escape_filter($this->env, trim($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 49
$context["attrname"] == "checked")) {
                        // line 50
                        echo "                    ";
                        if (($context["value"] != false)) {
                            echo "checked=\"checked\"";
                        }
                        // line 51
                        echo "                ";
                    } elseif (($context["attrname"] == "_bind")) {
                        // line 52
                        echo "                    data-bind=\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(array("bind" => $this->getAttribute($context["value"], 0, array(), "array")), (($this->getAttribute($context["value"], 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["value"], 1, array(), "array"), array())) : (array())))), "html", null, true);
                        echo "\"
                ";
                    } else {
                        // line 54
                        echo "                    ";
                        echo twig_escape_filter($this->env, strtr($context["attrname"], array("_" => "-")), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    }
                    // line 56
                    echo "            ";
                }
                // line 57
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 62
    public function getinfopop($__label__ = null, $__infoid__ = null, $__afterlabel__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "infoid" => $__infoid__,
            "afterlabel" => $__afterlabel__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "    ";
            ob_start();
            // line 64
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            if (array_key_exists("afterlabel", $context)) {
                echo " ";
                echo (isset($context["afterlabel"]) ? $context["afterlabel"] : null);
            }
            // line 65
            echo "        <span class=\"label info-pop\"
              data-content=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => (isset($context["infoid"]) ? $context["infoid"] : null), 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\"
              data-html=\"true\"
              data-title=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "\"
              >
            ";
            // line 70
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "
        </span>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 76
    public function getlabel($__key__ = null, $__field__ = null, $__class__ = null, $__for__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "field" => $__field__,
            "class" => $__class__,
            "for" => $__for__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 77
            echo "    ";
            ob_start();
            // line 78
            echo "        <label
            ";
            // line 79
            echo " ";
            if ((isset($context["for"]) ? $context["for"] : null)) {
                echo "for=\"";
                echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
                echo "\"";
            }
            // line 80
            echo "            ";
            echo " class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "control-label")) : ("control-label")), "html", null, true);
            echo "\"
        >
            ";
            // line 82
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)))) : ($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)))), "html", null, true);
            echo "
        </label>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function getactionform($__content__ = null, $__action__ = null, $__icon__ = null, $__text__ = null, $__confirmation_text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $__content__,
            "action" => $__action__,
            "icon" => $__icon__,
            "text" => $__text__,
            "confirmation_text" => $__confirmation_text__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => (isset($context["action"]) ? $context["action"] : null), "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\"
      method=\"POST\">
    ";
            // line 90
            $this->env->loadTemplate("_sub/_csrf_token.twig")->display($context);
            // line 91
            echo "    <button type=\"submit\"
        ";
            // line 92
            if ((isset($context["confirmation_text"]) ? $context["confirmation_text"] : null)) {
                // line 93
                echo "            class=\"btn btn-link btn-block confirm\" data-confirm=\"";
                echo twig_escape_filter($this->env, (isset($context["confirmation_text"]) ? $context["confirmation_text"] : null), "html", null, true);
                echo "\"
        ";
            } else {
                // line 95
                echo "            class=\"btn btn-link btn-block\"
        ";
            }
            // line 97
            echo "    >
        <span class=\"pull-left\">
            <i class=\"fa ";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\"></i>
            ";
            // line 100
            echo $this->env->getExtension('Bolt')->trans((isset($context["text"]) ? $context["text"] : null));
            echo "
        </span>
    </button>
</form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 107
    public function gettypepopover($__types__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $__types__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/accept_file_types"), "method")));
            // line 109
            echo "    ";
            $context["text"] = ((($this->env->getExtension('Bolt')->trans("field.general.allowed-filetypes") . "<code>") . twig_join_filter((isset($context["types"]) ? $context["types"] : null), "</code>, <code>")) . "</code>.");
            // line 110
            echo "    <span class=\"label info-pop\" data-title=\"\"
          data-html=\"true\" data-content=\"";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Types");
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 114
    public function getstackbutton($__file__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $__file__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 115
            echo "    ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") &&  !$this->env->getExtension('Bolt')->stacked($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "newpath", array())))) {
                // line 116
                echo "        <a href=\"#\" class=\"btn btn-default btn-sm\" data-action=\"bolt.stack.addToStack('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "newpath", array()), "html", null, true);
                echo "', this);\">
            <i class=\"fa fa-paperclip\"></i>
            <span class=\"visible-sm-inline visible-xs-inline\">";
                // line 118
                echo $this->env->getExtension('Bolt')->trans("Stack");
                echo "</span>
            <span class=\"hidden-sm hidden-xs\">";
                // line 119
                echo $this->env->getExtension('Bolt')->trans("Place on stack");
                echo "</span>
        </a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 138
    public function getinput_datetime($__opt__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 139
            echo "    ";
            $context["__internal_cd882b67a8010a2530d735514044634c6936f284ce97a992e7e0713e671bd9f1"] = $this;
            // line 140
            echo "
    ";
            // line 141
            $context["class"] = (strtr((($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array()), "")) : ("")), array("form-control" => "")) . " form-control");
            // line 142
            echo "
    ";
            // line 143
            $context["attr_data"] = array("id" => $this->getAttribute(            // line 144
(isset($context["opt"]) ? $context["opt"] : null), "id", array()), "name" => $this->getAttribute(            // line 145
(isset($context["opt"]) ? $context["opt"] : null), "id", array()), "value" => $this->getAttribute(            // line 146
(isset($context["opt"]) ? $context["opt"] : null), "value", array()), "type" => "hidden", "class" => "datetime", "data_notice" => (($this->getAttribute(            // line 149
(isset($context["opt"]) ? $context["opt"] : null), "notice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "notice", array()), "")) : ("")));
            // line 151
            echo "
    ";
            // line 152
            $context["attr_date"] = array("type" => "text", "disabled" => (($this->getAttribute(            // line 154
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 155
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)), "class" => trim((            // line 156
(isset($context["class"]) ? $context["class"] : null) . " datepicker")), "data_errortext" => (($this->getAttribute(            // line 157
(isset($context["opt"]) ? $context["opt"] : null), "errortext", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "errortext", array()), "")) : ("")), "data_field_options" => (((($this->getAttribute(            // line 158
(isset($context["opt"]) ? $context["opt"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()), false)) : (false))) ? (twig_jsonencode_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()))) : ("")));
            // line 160
            echo "
    ";
            // line 161
            $context["attr_time"] = array("type" => "text", "disabled" => (($this->getAttribute(            // line 163
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 164
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)), "class" => trim((            // line 165
(isset($context["class"]) ? $context["class"] : null) . " timepicker")), "title" => $this->env->getExtension('Bolt')->trans("Time in 24h/12h format"), "style" => "margin-right: 6px;");
            // line 169
            echo "
    <input";
            // line 170
            echo $context["__internal_cd882b67a8010a2530d735514044634c6936f284ce97a992e7e0713e671bd9f1"]->getattr((isset($context["attr_data"]) ? $context["attr_data"] : null));
            echo ">
    <div class=\"input-group\">
        <span class=\"input-group-btn\">
            <button class=\"btn btn-tertiary\" type=\"button\">
                <i class=\"fa fa-calendar\"></i>
            </button>
        </span>
        <input";
            // line 177
            echo $context["__internal_cd882b67a8010a2530d735514044634c6936f284ce97a992e7e0713e671bd9f1"]->getattr((isset($context["attr_date"]) ? $context["attr_date"] : null));
            echo ">
        ";
            // line 178
            if (( !$this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "has_time", array(), "any", true, true) || ($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "has_time", array()) != false))) {
                // line 179
                echo "            <input";
                echo $context["__internal_cd882b67a8010a2530d735514044634c6936f284ce97a992e7e0713e671bd9f1"]->getattr((isset($context["attr_time"]) ? $context["attr_time"] : null));
                echo ">
        ";
            }
            // line 181
            echo "        <button class=\"btn btn-default btn-xs\" type=\"button\" style=\"margin: 4px 0 0 0;\">
            <i class=\"fa fa-close\"></i>
        </button>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 192
    public function gettimemoment($__datetime__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "datetime" => $__datetime__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 193
            echo "    ";
            ob_start();
            // line 194
            echo "        <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : null), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : null), "html", null, true);
            echo "</time>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 205
    public function getupload_buttons($__type__ = null, $__key__ = null, $__attr_upload__ = null, $__uploadpath__ = null, $__canUpload__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "key" => $__key__,
            "attr_upload" => $__attr_upload__,
            "uploadpath" => $__uploadpath__,
            "canUpload" => $__canUpload__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 206
            echo "    ";
            $context["__internal_2cc0d0371d5998d8c8069da06c85caa97ad04b798610f50da1240d7c44db00de"] = $this;
            // line 207
            echo "
    ";
            // line 208
            $context["items"] = $this->env->getExtension('Bolt')->stackItems(7, ((((isset($context["type"]) ? $context["type"] : null) == "image")) ? ("image") : ("other,document")));
            // line 209
            echo "    ";
            $context["href"] = (((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async", array()) . "browse/files") . (((isset($context["uploadpath"]) ? $context["uploadpath"] : null)) ? (("/" . (isset($context["uploadpath"]) ? $context["uploadpath"] : null))) : (""))) . "?key=") . (isset($context["key"]) ? $context["key"] : null));
            // line 210
            echo "
    <div class=\"button-wrap fileselectbuttongroup\">

        ";
            // line 214
            echo "        ";
            if ((isset($context["canUpload"]) ? $context["canUpload"] : null)) {
                // line 215
                echo "            <span type=\"button\" class=\"btn btn-secondary fileinput-button\">
            \t<i class=\"fa fa-upload\"></i>
            \t<span>";
                // line 217
                echo ((((isset($context["type"]) ? $context["type"] : null) == "image")) ? ($this->env->getExtension('Bolt')->trans("Upload image")) : ($this->env->getExtension('Bolt')->trans("Upload file")));
                echo "</span>
            \t<input";
                // line 218
                echo $context["__internal_2cc0d0371d5998d8c8069da06c85caa97ad04b798610f50da1240d7c44db00de"]->getattr((isset($context["attr_upload"]) ? $context["attr_upload"] : null));
                echo ">
        \t</span>
        ";
            } else {
                // line 221
                echo "            <button type=\"button\" class=\"btn\" disabled=\"disabled\">
                ";
                // line 222
                echo $this->env->getExtension('Bolt')->trans("Upload not allowed");
                echo "
                ";
                // line 224
                echo "                ";
                $context["attr_upload"] = twig_array_merge((isset($context["attr_upload"]) ? $context["attr_upload"] : null), array("type" => "hidden"));
                // line 225
                echo "                <input";
                echo $context["__internal_2cc0d0371d5998d8c8069da06c85caa97ad04b798610f50da1240d7c44db00de"]->getattr((isset($context["attr_upload"]) ? $context["attr_upload"] : null));
                echo ">
            </button>
        ";
            }
            // line 228
            echo "
        ";
            // line 230
            echo "        <button type=\"button\" class=\"btn btn-tertiary\" data-target=\"#selectModal-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["href"]) ? $context["href"] : null), "html", null, true);
            echo "\" data-toggle=\"modal\">
            <i class=\"fa fa-download\"></i>
            ";
            // line 232
            echo $this->env->getExtension('Bolt')->trans("field.general.select-from-server");
            echo "
        </button>

        ";
            // line 236
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") && (isset($context["items"]) ? $context["items"] : null))) {
                // line 237
                echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    ";
                // line 240
                echo $this->env->getExtension('Bolt')->trans("field.general.select-from-stack");
                echo "
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu\" id=\"stack-";
                // line 244
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
                    ";
                // line 245
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 246
                    echo "                        ";
                    $context["info"] = ($this->getAttribute($context["item"], "filesize", array()) . (((($this->getAttribute($context["item"], "imagesize", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "imagesize", array()))) : (""))) ? (((", " . $this->getAttribute($context["item"], "imagesize", array())) . " px")) : ("")));
                    // line 247
                    echo "                        <li>
                            <a href=\"#\" data-action=\"bolt.stack.selectFromPulldown('";
                    // line 248
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "filepath", array()), "html", null, true);
                    echo "');\">
                                ";
                    // line 249
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                    echo " <small>(";
                    echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true);
                    echo ")</small>
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "                </ul>
            </div>
        ";
            }
            // line 256
            echo "
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
        return "_macro/_macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  829 => 256,  824 => 253,  812 => 249,  806 => 248,  803 => 247,  800 => 246,  796 => 245,  792 => 244,  785 => 240,  780 => 237,  777 => 236,  771 => 232,  763 => 230,  760 => 228,  753 => 225,  750 => 224,  746 => 222,  743 => 221,  737 => 218,  733 => 217,  729 => 215,  726 => 214,  721 => 210,  718 => 209,  716 => 208,  713 => 207,  710 => 206,  695 => 205,  676 => 194,  673 => 193,  662 => 192,  647 => 181,  641 => 179,  639 => 178,  635 => 177,  625 => 170,  622 => 169,  620 => 165,  619 => 164,  618 => 163,  617 => 161,  614 => 160,  612 => 158,  611 => 157,  610 => 156,  609 => 155,  608 => 154,  607 => 152,  604 => 151,  602 => 149,  601 => 146,  600 => 145,  599 => 144,  598 => 143,  595 => 142,  593 => 141,  590 => 140,  587 => 139,  576 => 138,  561 => 119,  557 => 118,  551 => 116,  548 => 115,  537 => 114,  522 => 111,  519 => 110,  516 => 109,  513 => 108,  502 => 107,  486 => 100,  482 => 99,  478 => 97,  474 => 95,  468 => 93,  466 => 92,  463 => 91,  461 => 90,  455 => 88,  440 => 87,  425 => 82,  418 => 80,  411 => 79,  408 => 78,  405 => 77,  391 => 76,  376 => 70,  371 => 68,  366 => 66,  363 => 65,  356 => 64,  353 => 63,  340 => 62,  328 => 58,  322 => 57,  319 => 56,  311 => 54,  305 => 52,  302 => 51,  297 => 50,  295 => 49,  290 => 48,  288 => 47,  283 => 46,  281 => 45,  274 => 44,  272 => 43,  265 => 42,  262 => 41,  260 => 40,  255 => 39,  252 => 38,  247 => 37,  244 => 36,  233 => 35,  219 => 31,  208 => 30,  181 => 27,  167 => 23,  164 => 22,  161 => 21,  158 => 20,  155 => 19,  153 => 18,  150 => 17,  147 => 16,  135 => 15,  122 => 12,  120 => 11,  116 => 10,  102 => 9,  89 => 6,  87 => 5,  83 => 4,  71 => 3,  59 => 197,  56 => 186,  53 => 123,  50 => 113,  46 => 105,  43 => 86,  40 => 74,  37 => 60,  34 => 33,  31 => 28,  28 => 25,  25 => 14,  22 => 8,  19 => 2,);
    }
}
