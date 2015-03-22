<?php

/* _sidebar.twig */
class __TwigTemplate_34cf9e97cb4b9336dc3e1cedf9b7935cc4341c7a299a3eb008ac53ff1da62082 extends Twig_Template
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
        echo "<div class=\"sidebar\">
    ";
        // line 2
        $template_storage = new Bolt\Storage($context['app']);
        $context['items'] =         $template_storage->getContent($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "general", array()), "sidebar", array()), array("limit" => 2) );
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "    <section>
        <header>
            <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h3>
        </header>
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "teaser", array()), "html", null, true);
            echo "
        <footer>
            <ul class=\"buttons\">
                <li><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\" class=\"button small\">Read More</a></li>
            </ul>
        </footer>
    </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  45 => 11,  39 => 8,  34 => 6,  30 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
