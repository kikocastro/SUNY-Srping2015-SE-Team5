<?php

/* _base/_page-no_nav.twig */
class __TwigTemplate_38a7a98b445160b62e4fe08cea12e2ebc64fb76038f3da349f55c7751e849d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        try {
            $this->parent = $this->env->loadTemplate("_base/_page.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(9);

            throw $e;
        }

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["page_bodyclass"] = "login";
        // line 13
        $context["page_hasnav"] = false;
        // line 15
        $context["page_nav"] = "";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_page_plain($context, array $blocks = array())
    {
        // line 18
        echo "
    <div class=\"view-site\">
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-external-link-square\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("View site");
        echo "</a>
    </div>

    <div class=\"row\">
        <div class=\"";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter((isset($context["form_class"]) ? $context["form_class"] : null), "col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")) : ("col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")), "html", null, true);
        echo "\">

            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "app", array()), "html", null, true);
        echo "view/img/bolt-logo.png\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
        // line 30
        $this->env->loadTemplate("_sub/_messages.twig")->display($context);
        // line 31
        echo "                    ";
        $this->displayBlock('page_main', $context, $blocks);
        // line 32
        echo "                </div>
            </div>

            ";
        // line 35
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "randomquote", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "randomquote", array()), false)) : (false))) {
            // line 36
            echo "                <blockquote class=\"quote\">";
            echo $this->env->getExtension('Bolt')->randomQuote();
            echo "</blockquote>
            ";
        }
        // line 38
        echo "
        </div>
    </div>

";
    }

    // line 31
    public function block_page_main($context, array $blocks = array())
    {
        echo "[PAGE_MAIN]";
    }

    public function getTemplateName()
    {
        return "_base/_page-no_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  90 => 38,  84 => 36,  82 => 35,  77 => 32,  74 => 31,  72 => 30,  65 => 26,  60 => 24,  51 => 20,  47 => 18,  44 => 17,  40 => 9,  38 => 15,  36 => 13,  34 => 11,  11 => 9,);
    }
}
