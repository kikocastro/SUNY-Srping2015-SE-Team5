<?php

/* _base/_page-nav.twig */
class __TwigTemplate_25f69fbf81a7cf441b9640fa297637191644f5f7a031cccde4e0007ce64a9e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        try {
            $this->parent = $this->env->loadTemplate("_base/_page.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(10);

            throw $e;
        }

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["page_bodyclass"] = "";
        // line 14
        $context["page_hasnav"] = true;
        // line 16
        $context["page_nav"] = _twig_default_filter($this->renderBlock("page_nav", $context, $blocks), "NO NAV");
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_page_plain($context, array $blocks = array())
    {
        // line 19
        echo "
    <div id=\"navpage-wrapper\"";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
            echo " class=\"nav-secondary-collapsed nav-secondary-collapsed-hoverable\"";
        }
        echo ">
        <nav id=\"navpage-primary\" class=\"navbar navbar-static-top navbar-inverse navbar-bolt\" role=\"navigation\">
            ";
        // line 22
        $this->env->loadTemplate("nav/_primary.twig")->display($context);
        // line 23
        echo "        </nav>

        <nav id=\"navpage-secondary\" class=\"navbar-default navbar-static-side\" role=\"navigation\">
            ";
        // line 26
        $this->env->loadTemplate("nav/_secondary.twig")->display($context);
        // line 27
        echo "        </nav>

        <div id=\"navpage-content\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h1 class=\"page-header\">
                        ";
        // line 33
        if (twig_test_empty($this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 34
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo "</strong>
                        ";
        } else {
            // line 36
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo " »</strong>
                            <i style=\"font-style: normal;\">";
            // line 37
            $this->displayBlock("page_subtitle", $context, $blocks);
            echo "</i>
                        ";
        }
        // line 39
        echo "
                        ";
        // line 41
        echo "                        ";
        if (array_key_exists("pager", $context)) {
            // line 42
            echo "                            ";
            $context["pager_ct"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), array(), "array");
            // line 43
            echo "                            ";
            if (((isset($context["pager_ct"]) ? $context["pager_ct"] : null) && ($this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "totalpages", array()) > 1))) {
                // line 44
                echo "                                <span>
                                    ";
                // line 45
                echo $this->env->getExtension('Bolt')->trans("Showing");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "showing_from", array()), "html", null, true);
                echo " -
                                    ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "showing_to", array()), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Bolt')->trans("of");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "count", array()), "html", null, true);
                echo "
                                </span>
                            ";
            }
            // line 49
            echo "                        ";
        }
        // line 50
        echo "
                    </h1>
                </div>
            </div>

            ";
        // line 55
        $this->displayBlock('messages', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('page_main', $context, $blocks);
        // line 60
        echo "        </div>
    </div>

    <footer id=\"bolt-footer\" class=\"hidden-xs\">
        ";
        // line 64
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_by/0"), "method")) {
            // line 65
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("Provided by:");
            echo "
            <a href=\"mailto:";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_by/0"), "method"), "html", null, true);
            echo "\">
                ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_by/1"), "method"), "html", null, true);
            echo "
            </a> -
        ";
        }
        // line 70
        echo "        <i class=\"fa fa-cog\"></i> <b>Bolt ";
        echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : null), "html", null, true);
        echo "</b>: ";
        echo $this->env->getExtension('Bolt')->trans("Sophisticated, lightweight & simple CMS");
        echo " -
        <i class=\"fa fa-heart\"></i > <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("general.about");
        echo "</a> &ndash;
        <i class=\"fa fa-external-link-square\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
    </footer>

";
    }

    // line 55
    public function block_messages($context, array $blocks = array())
    {
        // line 56
        echo "                ";
        $this->env->loadTemplate("_sub/_messages.twig")->display(array_merge($context, array("wrapper" => true)));
        // line 57
        echo "            ";
    }

    // line 59
    public function block_page_main($context, array $blocks = array())
    {
        echo "[PAGE_MAIN]";
    }

    public function getTemplateName()
    {
        return "_base/_page-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 59,  188 => 57,  185 => 56,  182 => 55,  171 => 71,  164 => 70,  158 => 67,  154 => 66,  149 => 65,  147 => 64,  141 => 60,  139 => 59,  136 => 58,  134 => 55,  127 => 50,  124 => 49,  114 => 46,  108 => 45,  105 => 44,  102 => 43,  99 => 42,  96 => 41,  93 => 39,  88 => 37,  83 => 36,  77 => 34,  75 => 33,  67 => 27,  65 => 26,  60 => 23,  58 => 22,  51 => 20,  48 => 19,  45 => 18,  41 => 10,  39 => 16,  37 => 14,  35 => 12,  11 => 10,);
    }
}
