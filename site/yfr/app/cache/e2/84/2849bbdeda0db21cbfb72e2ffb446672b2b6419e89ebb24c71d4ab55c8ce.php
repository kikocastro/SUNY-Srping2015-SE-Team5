<?php

/* nav/_secondary-filemanagement.twig */
class __TwigTemplate_e2842849bbdeda0db21cbfb72e2ffb446672b2b6419e89ebb24c71d4ab55c8ce extends Twig_Template
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
        $context["sub"] = array(0 => array("icon" => "fa:folder-open-o", "label" => $this->env->getExtension('Bolt')->trans("Uploaded files"), "link" => $this->env->getExtension('routing')->getPath("files", array("namespace" => "files", "path" => "")), "isallowed" => "files:uploads"), 1 => array("icon" => "fa:desktop", "label" => $this->env->getExtension('Bolt')->trans("View/edit Templates"), "link" => $this->env->getExtension('routing')->getPath("files", array("namespace" => "theme", "path" => "")), "isallowed" => "files:theme"));
        // line 14
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:folder-open", 1 => $this->env->getExtension('Bolt')->trans("File Management"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/FileManagement")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 15,  21 => 14,  19 => 1,);
    }
}
