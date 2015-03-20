<?php

/* components/panel-news.twig */
class __TwigTemplate_451bbc462c9191a11510d992b3f35a78a9711e4df504c2390418312356668627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array(), "any", true, true)) ? ("_base/_panel.twig") : ("_base/_nothing.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-news";
    }

    // line 9
    public function block_panel_alert($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "type", array()) == "alert")) {
            // line 11
            echo "        class=\"progress-bar progress-bar-danger progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px; font-weight: bold; color: #000;\"
    ";
        } else {
            // line 13
            echo "        class=\"panel-heading\"
    ";
        }
    }

    // line 17
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-bullhorn";
    }

    // line 19
    public function block_panel_head($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array()), "html", null, true);
    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "teaser", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "components/panel-news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  65 => 21,  59 => 19,  53 => 17,  47 => 13,  43 => 11,  40 => 10,  37 => 9,  31 => 7,  22 => 5,);
    }
}
