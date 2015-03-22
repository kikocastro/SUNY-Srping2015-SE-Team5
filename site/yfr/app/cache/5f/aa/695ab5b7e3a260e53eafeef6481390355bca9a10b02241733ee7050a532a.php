<?php

/* editcontent/_meta.twig */
class __TwigTemplate_5faa695ab5b7e3a260e53eafeef6481390355bca9a10b02241733ee7050a532a extends Twig_Template
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
        $context["macro"] = $this->env->loadTemplate("_macro/_macro.twig");
        // line 4
        echo "
";
        // line 5
        $context["magic_date"] = "1900-01-01 00:00:00";
        // line 6
        $context["can_publish"] = $this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":publish:") . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())));
        // line 7
        $context["can_depublish"] = $this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":depublish:") . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())));
        // line 8
        echo "
";
        // line 9
        $context["attr_editreferrer"] = array("name_id" => "editreferrer", "type" => "hidden", "value" => ((        // line 12
array_key_exists("editreferrer", $context)) ? (_twig_default_filter((isset($context["editreferrer"]) ? $context["editreferrer"] : null), "")) : ("")));
        // line 14
        echo "
";
        // line 15
        $context["attr_id"] = array("class" => "form-control narrow", "id" => "id", "name" => "id", "readonly" => true, "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()));
        // line 23
        echo "
";
        // line 24
        $context["attr_publish"] = array("disabled" =>  !        // line 25
(isset($context["can_publish"]) ? $context["can_publish"] : null), "id" => "datepublish", "value" => ((($this->getAttribute($this->getAttribute(        // line 27
(isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array()) == (isset($context["magic_date"]) ? $context["magic_date"] : null))) ? ("") : (((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array()) == "")) ? (twig_date_format_filter($this->env, "now", "Y-m-d H:i:s")) : ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array()))))));
        // line 29
        echo "
";
        // line 30
        $context["attr_depublish"] = array("disabled" =>  !        // line 31
(isset($context["can_depublish"]) ? $context["can_depublish"] : null), "id" => "datedepublish", "value" => ((($this->getAttribute($this->getAttribute(        // line 33
(isset($context["context"]) ? $context["context"] : null), "content", array()), "datedepublish", array()) == (isset($context["magic_date"]) ? $context["magic_date"] : null))) ? ("") : ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datedepublish", array()))), "notice" => $this->env->getExtension('Bolt')->trans("Depublish date is in the past. Change the status if you want to depublish now"));
        // line 36
        echo "
";
        // line 37
        $context["attr_status"] = array("class" => "form-control narrow", "disabled" => (twig_length_filter($this->env, $this->getAttribute(        // line 39
(isset($context["context"]) ? $context["context"] : null), "allowed_status", array())) <= 1), "id" => "statusselect", "name" => "status");
        // line 43
        echo "
";
        // line 44
        $context["attr_ownerid"] = array("class" => "form-control narrow", "disabled" =>  !$this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute($this->getAttribute(        // line 46
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":change-ownership:") . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()))), "name" => "ownerid");
        // line 49
        echo "
";
        // line 50
        $context["attr_comment"] = array("class" => "form-control", "disabled" =>  !$this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute($this->getAttribute(        // line 52
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":change-ownership:") . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()))), "name_id" => "changelog-comment", "placeholder" => $this->env->getExtension('Bolt')->trans("Add a brief, optional comment to describe what's changed."), "type" => "text");
        // line 57
        echo "
";
        // line 59
        echo "
<h3>
    ";
        // line 61
        echo $this->env->getExtension('Bolt')->trans("Meta information");
        echo "
</h3>

<input";
        // line 64
        echo $context["macro"]->getattr((isset($context["attr_editreferrer"]) ? $context["attr_editreferrer"] : null));
        echo ">

<div class=\"form-group\">
    ";
        // line 67
        echo $context["macro"]->getlabel("Id (№)", "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        <input";
        // line 69
        echo $context["macro"]->getattr((isset($context["attr_id"]) ? $context["attr_id"] : null));
        echo ">
    </div>
</div>

<div class=\"form-group\">
    ";
        // line 74
        echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Publication date:"), "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        ";
        // line 76
        echo $context["macro"]->getinput_datetime((isset($context["attr_publish"]) ? $context["attr_publish"] : null));
        echo "
    </div>
</div>

<div class=\"form-group depublish-group\">
    ";
        // line 81
        echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Depublication date:"), "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        ";
        // line 83
        echo $context["macro"]->getinput_datetime((isset($context["attr_depublish"]) ? $context["attr_depublish"] : null));
        echo "
    </div>
</div>

";
        // line 87
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datecreated", array()) > "1970-01-01 01:01:01")) {
            // line 88
            echo "    <p>
        ";
            // line 89
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.created", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
        ";
            // line 90
            echo $context["macro"]->gettimemoment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datecreated", array()));
            echo "
        ";
            // line 91
            echo $this->env->getExtension('Bolt')->trans("and edited");
            echo "
        ";
            // line 92
            echo $context["macro"]->gettimemoment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
            echo ".
    </p>
";
        }
        // line 95
        echo "
<div class=\"form-group\">
    ";
        // line 97
        echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Status:"), "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        <select";
        // line 99
        echo $context["macro"]->getattr((isset($context["attr_status"]) ? $context["attr_status"] : null));
        echo ">
            ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "allowed_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 101
            echo "                ";
            $context["attr_opt"] = array("value" =>             // line 102
$context["status"], "selected" => ($this->getAttribute($this->getAttribute(            // line 103
(isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == $context["status"]));
            // line 105
            echo "                <option";
            echo $context["macro"]->getattr((isset($context["attr_opt"]) ? $context["attr_opt"] : null));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $context["status"], array(), "array"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "        </select>
    </div>
</div>

<div class=\"form-group\">
    ";
        // line 112
        echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Owner:"), "", "col-sm-4 control-label");
        echo "
    <div class=\"col-sm-8\">
        <select";
        // line 114
        echo $context["macro"]->getattr((isset($context["attr_ownerid"]) ? $context["attr_ownerid"] : null));
        echo ">
            ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 116
            echo "                ";
            $context["attr_opt"] = array("value" => $this->getAttribute(            // line 117
$context["user"], "id", array()), "selected" => ($this->getAttribute(            // line 118
(isset($context["context"]) ? $context["context"] : null), "contentowner", array()) && ($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentowner", array()), "id", array()))));
            // line 120
            echo "                <option";
            echo $context["macro"]->getattr((isset($context["attr_opt"]) ? $context["attr_opt"] : null));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        </select>
    </div>
</div>

";
        // line 126
        if ($this->env->getExtension('Bolt')->isChangelogEnabled()) {
            // line 127
            echo "    <div class=\"form-group\">
        ";
            // line 128
            echo $context["macro"]->getlabel($this->env->getExtension('Bolt')->trans("Add a comment:"), "", "col-sm-4 control-label");
            echo "
        <div class=\"col-sm-8\">
            <input";
            // line 130
            echo $context["macro"]->getattr((isset($context["attr_comment"]) ? $context["attr_comment"] : null));
            echo ">
        </div>
    </div>
";
        }
        // line 134
        echo "
";
        // line 135
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 136
            echo "    ";
            $this->env->loadTemplate("editcontent/_fields.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 136,  252 => 135,  249 => 134,  242 => 130,  237 => 128,  234 => 127,  232 => 126,  226 => 122,  215 => 120,  213 => 118,  212 => 117,  210 => 116,  206 => 115,  202 => 114,  197 => 112,  190 => 107,  179 => 105,  177 => 103,  176 => 102,  174 => 101,  170 => 100,  166 => 99,  161 => 97,  157 => 95,  151 => 92,  147 => 91,  143 => 90,  139 => 89,  136 => 88,  134 => 87,  127 => 83,  122 => 81,  114 => 76,  109 => 74,  101 => 69,  96 => 67,  90 => 64,  84 => 61,  80 => 59,  77 => 57,  75 => 52,  74 => 50,  71 => 49,  69 => 46,  68 => 44,  65 => 43,  63 => 39,  62 => 37,  59 => 36,  57 => 33,  56 => 31,  55 => 30,  52 => 29,  50 => 27,  49 => 25,  48 => 24,  45 => 23,  43 => 21,  42 => 15,  39 => 14,  37 => 12,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
