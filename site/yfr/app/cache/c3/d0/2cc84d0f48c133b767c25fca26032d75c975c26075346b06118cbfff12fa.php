<?php

/* editcontent/_aside-preview.twig */
class __TwigTemplate_c3d02cc84d0f48c133b767c25fca26032d75c975c26075346b06118cbfff12fa extends Twig_Template
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
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 2
            echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-default\" id=\"sidebarpreviewbutton\">
        <i class=\"fa fa-external-link-square\"></i> ";
            // line 4
            echo $this->env->getExtension('Bolt')->trans("Preview");
            echo "
    </button>

    ";
            // line 7
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 8
                echo "        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> ";
                // line 16
                echo $this->env->getExtension('Bolt')->trans("View (saved version) on site");
                echo "</a></li>
                </a>
            </li>
        </ul>
    ";
            }
            // line 21
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 21,  46 => 16,  42 => 15,  33 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
