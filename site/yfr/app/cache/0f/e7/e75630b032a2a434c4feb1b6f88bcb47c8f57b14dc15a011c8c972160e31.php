<?php

/* editcontent/fields/_html.twig */
class __TwigTemplate_0fe7e75630b032a2a434c4feb1b6f88bcb47c8f57b14dc15a011c8c972160e31 extends Twig_Template
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
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "height" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "options" => (($this->getAttribute($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array()), "")) : ("")));
        // line 12
        echo "
";
        // line 14
        echo "
";
        // line 15
        $context["attr_html"] = array("class" => ($this->getAttribute(        // line 16
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " ckeditor"), "data_field_options" => (($this->getAttribute(        // line 17
(isset($context["option"]) ? $context["option"] : null), "options", array())) ? (twig_jsonencode_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "options", array()))) : ("")), "name_id" =>         // line 18
(isset($context["key"]) ? $context["key"] : null), "required" => $this->getAttribute(        // line 19
(isset($context["option"]) ? $context["option"] : null), "required", array()), "data_errortext" => $this->getAttribute(        // line 20
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "style" => (($this->getAttribute(        // line 21
(isset($context["option"]) ? $context["option"] : null), "height", array())) ? (("height: " . $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array()))) : ("")));
        // line 23
        echo "
";
        // line 25
        echo "
<fieldset class=\"html\">
    <div class=\"col-sm-12\">
        <label class=\"control-label\">";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
        <textarea";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_html"]) ? $context["attr_html"] : null)), "method"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 29,  53 => 28,  48 => 25,  45 => 23,  43 => 21,  42 => 20,  41 => 19,  40 => 18,  39 => 17,  38 => 16,  37 => 15,  34 => 14,  31 => 12,  29 => 10,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
