<?php

/* _base/_panel.twig */
class __TwigTemplate_50ffb3cf75f34a7f06a3d9b79476262af2c225bdafc649a9aa962f4881f4f1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default ";
        $this->displayBlock('panel_class', $context, $blocks);
        echo "\">
    <div ";
        // line 10
        $this->displayBlock('panel_alert', $context, $blocks);
        echo ">
        <i class=\"fa fa-fw ";
        // line 11
        $this->displayBlock('panel_icon', $context, $blocks);
        echo "\"></i>
        ";
        // line 12
        $this->displayBlock('panel_head', $context, $blocks);
        // line 13
        echo "    </div>

    <div class=\"panel-body\">
        ";
        // line 16
        $this->displayBlock('panel_body', $context, $blocks);
        // line 17
        echo "    </div>
</div>
";
    }

    // line 9
    public function block_panel_class($context, array $blocks = array())
    {
    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        echo "class=\"panel-heading\"";
    }

    // line 11
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-circle-o";
    }

    // line 12
    public function block_panel_head($context, array $blocks = array())
    {
        echo "[PANEL_HEAD]";
    }

    // line 16
    public function block_panel_body($context, array $blocks = array())
    {
        echo "[PANEL_BODY]";
    }

    public function getTemplateName()
    {
        return "_base/_panel.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 12,  63 => 11,  57 => 10,  52 => 9,  46 => 17,  44 => 16,  39 => 13,  37 => 12,  33 => 11,  29 => 10,  24 => 9,);
    }
}
