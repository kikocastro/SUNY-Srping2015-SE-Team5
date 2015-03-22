<?php

/* editcontent/_fields.twig */
class __TwigTemplate_c79e5c0106b803dc743eeb0a2dbbdc5d409f9a32ad73c60c376a942103b72990 extends Twig_Template
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
        $context["macro"] = $this->env->loadTemplate("_macro/_macro.twig");
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 4
            echo "    ";
            if (((isset($context["group_name"]) ? $context["group_name"] : null) == $this->getAttribute($context["field"], "group", array()))) {
                // line 5
                echo "
        <div class=\"form-group\">
            ";
                // line 8
                echo "            ";
                if (($this->getAttribute($context["field"], "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["field"], "prefix", array())))) {
                    // line 9
                    echo "                <div class=\"prefix\">
                    ";
                    // line 10
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute($context["field"], "prefix", array()));
                    echo "
                </div>
            ";
                }
                // line 13
                echo "
            ";
                // line 15
                echo "            ";
                $context["labelkey"] = (($this->getAttribute($context["field"], "label", array())) ? ($this->getAttribute($context["field"], "label", array())) : ($this->env->getExtension('Bolt')->ucfirst($context["key"])));
                // line 16
                echo "
            ";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fields", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["fieldtype"]) {
                    // line 18
                    echo "                ";
                    if (($this->getAttribute($context["field"], "type", array()) == $this->getAttribute($context["fieldtype"], "name", array()))) {
                        // line 19
                        echo "                    ";
                        $this->env->resolveTemplate($this->getAttribute($context["fieldtype"], "template", array()))->display($context);
                        // line 20
                        echo "                ";
                    }
                    // line 21
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldtype'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "
            ";
                // line 24
                echo "            ";
                if (($this->getAttribute($context["field"], "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["field"], "postfix", array())))) {
                    // line 25
                    echo "                <div class=\"postfix\">
                    ";
                    // line 26
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute($context["field"], "postfix", array()));
                    echo "
                </div>
            ";
                }
                // line 29
                echo "
            ";
                // line 31
                echo "            ";
                if (($this->getAttribute($context["field"], "separator", array(), "any", true, true) && ($this->getAttribute($context["field"], "separator", array()) == true))) {
                    // line 32
                    echo "                <hr>
            ";
                }
                // line 34
                echo "        </div>

    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "editcontent/_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  130 => 32,  127 => 31,  124 => 29,  118 => 26,  115 => 25,  112 => 24,  109 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 13,  54 => 10,  51 => 9,  48 => 8,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
