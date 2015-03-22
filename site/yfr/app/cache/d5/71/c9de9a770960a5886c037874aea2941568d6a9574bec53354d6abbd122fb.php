<?php

/* editcontent/_includes.twig */
class __TwigTemplate_d571c9de9a770960a5886c037874aea2941568d6a9574bec53354d6abbd122fb extends Twig_Template
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
        $context["used_fieldtypes"] = array();
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 6
            echo "    ";
            if (!twig_in_filter($this->getAttribute($context["field"], "type", array()), (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
                // line 7
                echo "        ";
                $context["used_fieldtypes"] = twig_array_merge((isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null), array(0 => $this->getAttribute($context["field"], "type", array())));
                // line 8
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 12
        echo "
";
        // line 13
        if (twig_in_filter("html", (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
            // line 14
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/ckeditor.js\"></script>
";
        }
        // line 16
        echo "
";
        // line 17
        if (twig_in_filter("geolocation", (isset($context["used_fieldtypes"]) ? $context["used_fieldtypes"] : null))) {
            // line 18
            echo "    <script src=\"https://maps.google.com/maps/api/js?sensor=false\"></script>
    <script src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/jquery-gomap.min.js\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_includes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  63 => 18,  61 => 17,  58 => 16,  52 => 14,  50 => 13,  47 => 12,  44 => 10,  37 => 8,  34 => 7,  31 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
