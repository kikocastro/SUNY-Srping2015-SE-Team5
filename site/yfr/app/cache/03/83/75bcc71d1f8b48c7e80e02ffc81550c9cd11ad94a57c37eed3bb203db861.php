<?php

/* editcontent/fields/_slug.twig */
class __TwigTemplate_038375bcc71d1f8b48c7e80e02ffc81550c9cd11ad94a57c37eed3bb203db861 extends Twig_Template
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
        $context["option"] = array("uses" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), "")) : ("")));
        // line 6
        echo "
";
        // line 8
        echo "
";
        // line 9
        $context["bind_values"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array())) ? (array(0 => "slug", 1 => array("contentId" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()), "isEmpty" => ($this->getAttribute($this->getAttribute(        // line 11
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == ""), "key" =>         // line 12
(isset($context["key"]) ? $context["key"] : null), "messageSet" => $this->env->getExtension('Bolt')->trans("field.slug.message.set"), "messageUnlock" => $this->env->getExtension('Bolt')->trans("field.slug.message.unlock"), "slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["context"]) ? $context["context"] : null), "content", array()), "contenttype", array()), "slug", array()), "uses" => $this->getAttribute(        // line 16
(isset($context["option"]) ? $context["option"] : null), "uses", array())))) : (""));
        // line 18
        echo "
";
        // line 19
        $context["attr_slug"] = array("_bind" =>         // line 20
(isset($context["bind_values"]) ? $context["bind_values"] : null), "class" => "sluginput", "name_id" =>         // line 22
(isset($context["key"]) ? $context["key"] : null), "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 24
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"));
        // line 26
        echo "
";
        // line 28
        echo "
<fieldset class=\"slug\">

    <div class=\"col-sm-12\">
        <label>";
        // line 32
        echo $this->env->getExtension('Bolt')->trans("field.slug.permalink");
        echo ":
            <code>/";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "contenttype", array()), "singular_slug", array()), "html", null, true);
        echo "/<span id=\"show-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
        echo "</span></code>
            <input";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_slug"]) ? $context["attr_slug"] : null)), "method"), "html", null, true);
        echo ">
            <span class=\"sluglocker\" data-for=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\" data-uses='";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array())), "html", null, true);
        echo "'><i class=\"fa fa-lock\"></i></span>
            <span class=\"slugedit\" data-for=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\" data-uses='";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array())), "html", null, true);
        echo "'><i class=\"fa fa-pencil\"></i></span>
        </label>
    </div>

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_slug.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 36,  71 => 35,  67 => 34,  59 => 33,  55 => 32,  49 => 28,  46 => 26,  44 => 24,  43 => 22,  42 => 20,  41 => 19,  38 => 18,  36 => 16,  35 => 15,  34 => 12,  33 => 11,  32 => 10,  31 => 9,  28 => 8,  25 => 6,  23 => 4,  22 => 3,  19 => 2,);
    }
}
