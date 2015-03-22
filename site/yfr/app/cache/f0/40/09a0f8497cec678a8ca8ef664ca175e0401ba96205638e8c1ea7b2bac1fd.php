<?php

/* dashboard/_quicklinks-dropdown.twig */
class __TwigTemplate_f04009a0f8497cec678a8ca8ef664ca175e0401ba96205638e8c1ea7b2bac1fd extends Twig_Template
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
    <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("page.dashboard.button.add");
        echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
            // line 8
            echo "        ";
            if ($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create"))) {
                // line 9
                echo "            <li>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $context["contenttypeslug"])), "html", null, true);
                echo "\">
                    <i class=\"fa fa-plus\"></i>
                    ";
                // line 12
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $context["contenttypeslug"]));
                echo "
                </a>
            </li>
        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_quicklinks-dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  52 => 16,  45 => 12,  40 => 10,  37 => 9,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
