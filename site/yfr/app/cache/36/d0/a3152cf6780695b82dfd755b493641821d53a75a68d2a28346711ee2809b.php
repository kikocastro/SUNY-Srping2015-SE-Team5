<?php

/* form_bolt_layout.twig */
class __TwigTemplate_36d0a3152cf6780695b82dfd755b493641821d53a75a68d2a28346711ee2809b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_errors', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"form-group ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10 col-md-6 col-lg-4\">
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "form-control large")));
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_errors($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 18
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, (((null === $this->getAttribute(            // line 19
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(            // line 20
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(            // line 21
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
            // line 22
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        <div>
            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "                <div class=\"checkbox\">
                    <label>
                    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            // line 34
            echo "</label>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_bolt_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  119 => 34,  116 => 33,  112 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  94 => 24,  87 => 22,  85 => 21,  84 => 20,  83 => 19,  81 => 18,  76 => 17,  73 => 16,  70 => 15,  61 => 9,  57 => 8,  52 => 6,  45 => 5,  42 => 4,  39 => 3,  35 => 27,  32 => 26,  30 => 15,  27 => 14,  25 => 3,  22 => 2,);
    }
}
