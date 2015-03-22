<?php

/* index.twig */
class __TwigTemplate_91450098dd55d18723ef6ebbee0b07e4175ebda6cc94216981676ea6205ef48a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("master.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'bodyclass' => array($this, 'block_bodyclass'),
            'headerclass' => array($this, 'block_headerclass'),
            'banner' => array($this, 'block_banner'),
            'main' => array($this, 'block_main'),
            'cta' => array($this, 'block_cta'),
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

    // line 3
    public function block_bodyclass($context, array $blocks = array())
    {
        echo "index";
    }

    // line 5
    public function block_headerclass($context, array $blocks = array())
    {
        echo "alt";
    }

    // line 7
    public function block_banner($context, array $blocks = array())
    {
        // line 8
        echo "            <section id=\"banner\">
                <div class=\"inner\">
                    <header>
                        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</h2>
                    </header>
                    ";
        // line 13
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "description", array()))) {
            echo "<p>";
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "description", array()), "html", null, true));
            echo "</p>";
        }
        // line 14
        echo "                    <footer>
                        <ul class=\"buttons vertical\">
                            <li><a href=\"#main\" class=\"button fit scrolly\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "more", array()), "html", null, true);
        echo "</a></li>
                        </ul>
                    </footer>
                </div>
            </section>
        ";
    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        // line 24
        echo "            <article id=\"main\">

                ";
        // line 26
        if (array_key_exists("record", $context)) {
            // line 27
            echo "                <header class=\"special container\">
                    <span class=\"icon fa-bar-chart-o\"></span>
                    <h2>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
            echo "</h2>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
            echo "
                </header>
                ";
        }
        // line 33
        echo "
                ";
        // line 34
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "hero", array()))) {
            // line 35
            echo "                ";
            $template_storage = new Bolt\Storage($context['app']);
            $context['hero'] =             $template_storage->getContent($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "hero", array()), array() );
            // line 36
            echo "                <section class=\"wrapper style2 container special-alt\">
                    <div class=\"row half\">
                        <div class=\"8u\">
                            <header>
                                <h2>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hero"]) ? $context["hero"] : null), "title", array()), "html", null, true);
            echo "</h2>
                            </header>
                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hero"]) ? $context["hero"] : null), "teaser", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"4u skel-cell-important\">
                            <ul class=\"featured-icons\">
                                <li><span class=\"icon fa-clock-o\"><span class=\"label\">Feature 1</span></span></li>
                                <li><span class=\"icon fa-volume-up\"><span class=\"label\">Feature 2</span></span></li>
                                <li><span class=\"icon fa-laptop\"><span class=\"label\">Feature 3</span></span></li>
                                <li><span class=\"icon fa-inbox\"><span class=\"label\">Feature 4</span></span></li>
                                <li><span class=\"icon fa-lock\"><span class=\"label\">Feature 5</span></span></li>
                                <li><span class=\"icon fa-cog\"><span class=\"label\">Feature 6</span></span></li>
                            </ul>
                        </div>
                    </div>
                </section>
                ";
        }
        // line 57
        echo "
                ";
        // line 58
        $this->env->loadTemplate("_row.twig")->display($context);
        // line 59
        echo "
                ";
        // line 60
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "featured", array()))) {
            // line 61
            echo "                <section class=\"wrapper style3 container special\">

                    <header class=\"major\">
                        <h2>Latest <strong>entries</strong></h2>
                    </header>

                    ";
            // line 67
            $template_storage = new Bolt\Storage($context['app']);
            $context['items'] =             $template_storage->getContent($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "featured", array()), array() );
            // line 68
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
                // line 69
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                    // line 70
                    echo "                    <div class=\"row\">
                    ";
                }
                // line 72
                echo "
                        <div class=\"6u\">
                            <section>
                                <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                echo "\" class=\"image featured\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["item"], "image", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" /></a>
                                <header>
                                    <h3>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</h3>
                                </header>
                                ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "teaser", array()), "html", null, true);
                echo "
                            </section>
                        </div>
                    ";
                // line 82
                if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                    // line 83
                    echo "                    </div>
                    ";
                }
                // line 85
                echo "                    ";
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
            // line 86
            echo "
                    <footer class=\"major\">
                        <ul class=\"buttons\">
                            <li><a href=\"/entries\" class=\"button\">See More</a></li>
                        </ul>
                    </footer>

                </section>
                ";
        }
        // line 95
        echo "
            </article>
        ";
    }

    // line 99
    public function block_cta($context, array $blocks = array())
    {
        // line 100
        echo "            ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "calltoaction", array()))) {
            // line 101
            echo "            ";
            $template_storage = new Bolt\Storage($context['app']);
            $context['cta'] =             $template_storage->getContent($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "calltoaction", array()), array() );
            // line 102
            echo "            <section id=\"cta\">
                <header>
                    <h2>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cta"]) ? $context["cta"] : null), "title", array()), "html", null, true);
            echo "</h2>
                    ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cta"]) ? $context["cta"] : null), "teaser", array()), "html", null, true);
            echo "
                </header>
                <footer>
                    <ul class=\"buttons\">
                        <li><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cta"]) ? $context["cta"] : null), "link", array()), "html", null, true);
            echo "\" class=\"button special\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "home", array()), "actiontext", array()), "html", null, true);
            echo "</a></li>
                    </ul>
                </footer>
            </section>

            ";
        }
        // line 115
        echo "        ";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 115,  279 => 109,  272 => 105,  268 => 104,  264 => 102,  260 => 101,  257 => 100,  254 => 99,  248 => 95,  237 => 86,  223 => 85,  219 => 83,  217 => 82,  211 => 79,  206 => 77,  197 => 75,  192 => 72,  188 => 70,  185 => 69,  167 => 68,  164 => 67,  156 => 61,  154 => 60,  151 => 59,  149 => 58,  146 => 57,  128 => 42,  123 => 40,  117 => 36,  113 => 35,  111 => 34,  108 => 33,  102 => 30,  98 => 29,  94 => 27,  92 => 26,  88 => 24,  85 => 23,  75 => 16,  71 => 14,  65 => 13,  60 => 11,  55 => 8,  52 => 7,  46 => 5,  40 => 3,  11 => 1,);
    }
}
