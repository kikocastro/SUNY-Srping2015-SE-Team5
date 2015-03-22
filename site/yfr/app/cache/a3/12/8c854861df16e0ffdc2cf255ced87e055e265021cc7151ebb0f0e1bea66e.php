<?php

/* listing.twig */
class __TwigTemplate_a3128c854861df16e0ffdc2cf255ced87e055e265021cc7151ebb0f0e1bea66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        try {
            $this->parent = $this->env->loadTemplate("master.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(7);

            throw $e;
        }

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <article id=\"main\">
        <section class=\"wrapper style3 container special\">

            <header class=\"major\">
                ";
        // line 14
        if (array_key_exists("taxonomytype", $context)) {
            // line 15
            echo "                    <h2>Latest <strong>";
            if ($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array(), "any", false, true), (isset($context["slug"]) ? $context["slug"] : null), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
            }
            echo "</strong></h2>
                ";
        } elseif (        // line 16
array_key_exists("search", $context)) {
            // line 17
            echo "                    <h2>";
            echo $this->env->getExtension('Bolt')->trans("Search results for <strong> %search% </strong>", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
            echo "</h2>
                ";
        } else {
            // line 19
            echo "                    <h2>Latest <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('Bolt')->first((isset($context["records"]) ? $context["records"] : null)), "contenttype", array()), "name", array()), "html", null, true);
            echo "</strong></h2>
                ";
        }
        // line 21
        echo "            </header>

            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "            ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                // line 25
                echo "            <div class=\"row\">
            ";
            }
            // line 27
            echo "
                <div class=\"6u\">
                    <section>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\" class=\"image featured\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["item"], "image", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\" /></a>
                        <header>
                            <h3>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h3>
                        </header>
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "teaser", array()), "html", null, true);
            echo "
                    </section>
                </div>
            ";
            // line 37
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                // line 38
                echo "            </div>
            ";
            }
            // line 40
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env, "", 3, "_pagination.twig"), "html", null, true);
        echo "

        </section>
    </article>
";
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  143 => 41,  129 => 40,  125 => 38,  123 => 37,  117 => 34,  112 => 32,  103 => 30,  98 => 27,  94 => 25,  91 => 24,  74 => 23,  70 => 21,  64 => 19,  58 => 17,  56 => 16,  47 => 15,  45 => 14,  39 => 10,  36 => 9,  11 => 7,);
    }
}
