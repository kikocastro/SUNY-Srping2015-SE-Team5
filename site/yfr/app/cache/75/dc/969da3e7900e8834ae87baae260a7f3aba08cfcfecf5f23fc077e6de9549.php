<?php

/* nav/_primary.twig */
class __TwigTemplate_75dc969da3e7900e8834ae87baae260a7f3aba08cfcfecf5f23fc077e6de9549 extends Twig_Template
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
        echo "<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-action=\"bolt.sidebar.toggle()\">
        <i class=\"fa fa-fw fa-bars\"></i> MENU
    </button>
    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
        ";
        // line 7
        echo "        ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method"), "Bolt")) : ("Bolt")), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\" class=\"navbar-site hidden-xs\"><span>";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        } else {
            echo "Site";
        }
        echo "</span></a>
</div>


<ul class=\"nav navbar-top-links navbar-right\">

    <li>
        ";
        // line 17
        echo "        <form class=\"navbar-form hidden-xs\" role=\"search\">
            <div class=\"form-group has-feedback\">
                <input type=\"text\" class=\"form-control semitransparent omnisearch\" placeholder=\"";
        // line 19
        echo $this->env->getExtension('Bolt')->trans("Find");
        echo "…\">
                <span class=\"form-control-feedback semitransparent\"><i class=\"fa fa-search\"></i></span>
            </div>
        </form>
    </li>

    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"hidden-xs\">
            <i class=\"fa fa-fw fa-external-link-square\"></i>
            ";
        // line 28
        echo $this->env->getExtension('Bolt')->trans("View site");
        echo "
        </a>
    </li>

    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"fa fa-fw fa-user\"></i> <span>";
        // line 34
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array()), 16);
        echo "</span> <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\" role=\"menu\" >
            <li>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fa fa-fw fa-gear\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("Profile");
        echo "</a>
            </li>
            <li>
                <form action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" method=\"POST\">
                    <button class=\"btn btn-link btn-block\" type=\"submit\">
                        <span class=\"pull-left\"><i class=\"fa fa-fw fa-sign-out\" style=\"margin-left: 4px;\"></i> ";
        // line 43
        echo $this->env->getExtension('Bolt')->trans("Logout");
        echo "</span>
                    </button>
                </form>
            </li>
        </ul>
    </li>

</ul>
";
    }

    public function getTemplateName()
    {
        return "nav/_primary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  94 => 41,  86 => 38,  79 => 34,  70 => 28,  65 => 26,  55 => 19,  51 => 17,  35 => 9,  29 => 7,  25 => 5,  19 => 1,);
    }
}
