<?php

/* dashboard/_quicklinks-buttons.twig */
class __TwigTemplate_058067f7f10e79a61f4712bc0cd3e0e039a4231d56e17123077960f4427fc6ed extends Twig_Template
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
        echo "<div class=\"btn-group\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
            // line 3
            echo "        ";
            if ($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create"))) {
                // line 4
                echo "            <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $context["contenttypeslug"])), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $context["contenttypeslug"]));
                echo "
            </a>
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_quicklinks-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 8,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
