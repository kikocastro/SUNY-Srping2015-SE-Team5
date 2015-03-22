<?php

/* _pagination.twig */
class __TwigTemplate_929db373cd167e863dda3e75a205ee2c878ef0f6369dce12d4f10effa37125dc extends Twig_Template
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
        // line 1
        $context["link"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "makelink", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) > 1)) {
            // line 4
            echo "<style>
/* override pagination button */
.pagination .button {
    min-width: initial;
}
.pagination .active .button {
\tborder-color: rgb(124, 128, 129);
\tbackground-color: rgb(124, 128, 129);
\tcolor: #FFF;
}
</style>
<footer class=\"major\">
  <ul class=\"pagination buttons\">
";
            // line 18
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 19
                echo "    <li><a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) - 1), "html", null, true);
                echo "\">&lsaquo; </a></li>
";
            }
            // line 21
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 22
                echo "    <li><a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\">1</a></li>
";
            }
            // line 24
            echo "
";
            // line 26
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 27
                echo "    <li class=\"disabled\">...</li>
";
            }
            // line 29
            echo "
";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) - (isset($context["surr"]) ? $context["surr"] : null))), min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "    <li ";
                if (($context["i"] == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()))) {
                    echo "class=\"current active\"";
                }
                echo "><a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
";
            // line 35
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 36
                echo "    <li class=\"disabled\">...</li>
";
            }
            // line 38
            echo "
";
            // line 40
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 41
                echo "    <li><a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()), "html", null, true);
                echo "</a></li>
";
            }
            // line 43
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array())) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 44
                echo "    <li><a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) + 1), "html", null, true);
                echo "\">&rsaquo;</a></li>
";
            }
            // line 46
            echo "  </ul>
</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "_pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 44,  114 => 43,  105 => 41,  103 => 40,  100 => 38,  96 => 36,  94 => 35,  91 => 33,  75 => 31,  71 => 30,  68 => 29,  64 => 27,  62 => 26,  59 => 24,  52 => 22,  50 => 21,  43 => 19,  41 => 18,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
