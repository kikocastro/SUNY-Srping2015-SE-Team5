<?php

/* overview/overview.twig */
class __TwigTemplate_4417bf47265a2bd5332339d0cfee8f9da27ca62319181d5710b16dcbbadd0978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        try {
            $this->parent = $this->env->loadTemplate("_base/_page-nav.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(6);

            throw $e;
        }

        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_581c8bdf49c88830ab2d44e813a5a07208c77a08a6a35d6498c42066e928f900"] = $this->env->loadTemplate("_sub/_editable_record_list.twig");
        // line 4
        $context["panels"] = $this->env->loadTemplate("_macro/_panels.twig");
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Content/*";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Overview");
    }

    // line 12
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "name", array())));
    }

    // line 15
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 17
    public function block_page_main($context, array $blocks = array())
    {
        // line 18
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 22
        $this->env->loadTemplate("_sub/_messages.twig")->display($context);
        // line 23
        echo "
            ";
        // line 24
        echo $context["__internal_581c8bdf49c88830ab2d44e813a5a07208c77a08a6a35d6498c42066e928f900"]->geteditable_record_list($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "multiplecontent", array()), "table-striped");
        echo "

        </div>

        <aside class=\"col-md-4\">
            ";
        // line 29
        $this->env->loadTemplate("overview/_panel-actions_overview.twig")->display($context);
        // line 30
        echo "            ";
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        echo "
        </aside>
    </div>

";
    }

    public function getTemplateName()
    {
        return "overview/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  91 => 29,  83 => 24,  80 => 23,  78 => 22,  72 => 18,  69 => 17,  63 => 15,  57 => 12,  51 => 10,  45 => 8,  41 => 6,  39 => 4,  37 => 3,  11 => 6,);
    }
}
