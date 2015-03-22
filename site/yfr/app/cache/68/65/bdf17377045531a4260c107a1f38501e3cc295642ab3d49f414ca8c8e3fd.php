<?php

/* nav/_secondary-extensions.twig */
class __TwigTemplate_6865bdf17377045531a4260c107a1f38501e3cc295642ab3d49f414ca8c8e3fd extends Twig_Template
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
        // line 2
        $context["sub"] = array();
        // line 3
        echo "
";
        // line 4
        if ($this->env->getExtension('Bolt')->isAllowed("extensions")) {
            // line 5
            echo "
    ";
            // line 7
            echo "    ";
            $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => "fa:cubes", "label" => $this->env->getExtension('Bolt')->trans("View/install Extensions"), "link" => $this->env->getExtension('routing')->getPath("extend", array()), "isallowed" => "extensions"), 1 => array("icon" => "fa:cog", "label" => $this->env->getExtension('Bolt')->trans("Configure Extensions"), "link" => $this->env->getExtension('routing')->getPath("files", array("namespace" => "config", "path" => "extensions")), "isallowed" => "extensions:config")));
            // line 21
            echo "
    ";
            // line 23
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "extensions", array()), "getMenuoptions", array())) > 0)) {
                // line 24
                echo "        ";
                $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => "-"));
                // line 25
                echo "    ";
            }
            // line 26
            echo "

";
        }
        // line 29
        echo "
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "extensions", array()), "getMenuoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 32
            echo "    ";
            $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => (($this->getAttribute(            // line 34
$context["extension"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["extension"], "icon", array()), "fa:briefcase")) : ("fa:briefcase")), "label" => $this->getAttribute(            // line 35
$context["extension"], "label", array()), "link" => $this->getAttribute(            // line 36
$context["extension"], "path", array()))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:cubes", 1 => $this->env->getExtension('Bolt')->trans("Extras"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/ExtendBolt")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-extensions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 41,  66 => 40,  60 => 36,  59 => 35,  58 => 34,  56 => 32,  52 => 31,  49 => 29,  44 => 26,  41 => 25,  38 => 24,  35 => 23,  32 => 21,  29 => 7,  26 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }
}
