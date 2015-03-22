<?php

/* _row.twig */
class __TwigTemplate_9aba5f914d24382bb9ac13fbfd37e1f42ae7deb63b89478b9671c3c60b668bba extends Twig_Template
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
        echo "<section class=\"wrapper style1 container special\">
    <div class=\"row\">
        ";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['items'] =         $template_storage->getContent($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "general", array()), "row", array()), array("limit" => 3) );
        // line 4
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        <div class=\"4u\">
            <section>
                <header>
                    <h3>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h3>
                </header>
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "teaser", array()), "html", null, true);
            echo "
                <footer>
                    <ul class=\"buttons\">
                        <li><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\" class=\"button small\">Read More</a></li>
                    </ul>
                </footer>
            </section>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  47 => 13,  41 => 10,  36 => 8,  31 => 5,  26 => 4,  23 => 3,  19 => 1,);
    }
}
