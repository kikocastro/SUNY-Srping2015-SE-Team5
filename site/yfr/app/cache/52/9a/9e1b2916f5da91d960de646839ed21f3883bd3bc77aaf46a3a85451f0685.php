<?php

/* _sub/_listing.twig */
class __TwigTemplate_529a9e1b2916f5da91d960de646839ed21f3883bd3bc77aaf46a3a85451f0685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("_base/_listing.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_listing.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_listing_columns($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_columns", $context, $blocks);
    }

    // line 5
    public function block_listing_header($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_header", $context, $blocks);
    }

    // line 7
    public function block_listing_id($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_id", $context, $blocks);
    }

    // line 9
    public function block_listing_content($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_content", $context, $blocks);
    }

    // line 11
    public function block_listing_meta($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_meta", $context, $blocks);
    }

    // line 13
    public function block_listing_actions($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_actions", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "_sub/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  65 => 11,  59 => 9,  53 => 7,  47 => 5,  41 => 3,  11 => 1,);
    }
}
