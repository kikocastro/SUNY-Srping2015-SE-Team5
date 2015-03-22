<?php

/* editcontent/fields/_templateselect.twig */
class __TwigTemplate_3b8c94253ef6c1b078a7109641006269a0d349e4af9b176f35732726e94d48d7 extends Twig_Template
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
        $context["option"] = array("class" => ((($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")) . " narrow"), "filter" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "filter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array()), array())) : (array())), "label" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 9
        echo "
";
        // line 11
        echo "
";
        // line 12
        $context["attr_select"] = array("class" => $this->getAttribute(        // line 13
(isset($context["option"]) ? $context["option"] : null), "class", array()), "name_id" =>         // line 14
(isset($context["key"]) ? $context["key"] : null));
        // line 16
        echo "
";
        // line 17
        $context["attr_default"] = array("value" => "");
        // line 20
        echo "
";
        // line 21
        $context["attr_divider"] = array("disabled" => true, "value" => "");
        // line 25
        echo "
";
        // line 27
        echo "
<fieldset class=\"templateselect\">

    <label class=\"col-sm-3 control-label\">";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
    <div class=\"col-sm-9\">
        <select";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_select"]) ? $context["attr_select"] : null)), "method"), "html", null, true);
        echo ">
            <option";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_default"]) ? $context["attr_default"] : null)), "method"), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Bolt')->trans("(default template)");
        echo "</option>
            <option";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_divider"]) ? $context["attr_divider"] : null)), "method"), "html", null, true);
        echo ">-----------</option>
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listTemplates($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "filter", array())));
        foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
            // line 36
            echo "                <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => array("value" => $context["filename"], "selected" => ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == $context["filename"]))), "method"), "html", null, true);
            echo ">";
            // line 37
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            // line 38
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </select>
    </div>

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_templateselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  85 => 38,  83 => 37,  79 => 36,  75 => 35,  71 => 34,  65 => 33,  61 => 32,  56 => 30,  51 => 27,  48 => 25,  46 => 21,  43 => 20,  41 => 17,  38 => 16,  36 => 14,  35 => 13,  34 => 12,  31 => 11,  28 => 9,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
