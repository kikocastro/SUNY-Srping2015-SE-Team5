<?php

/* nav/_macros.twig */
class __TwigTemplate_2966ca078345792db08109c5e9c4eed9ac7f1c02256656bb36493febd1d0af60 extends Twig_Template
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
        // line 10
        echo "

";
        // line 65
        echo "

";
        // line 84
        echo "

";
        // line 100
        echo "

";
        // line 115
        echo "

";
    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["__internal_a2a73007b1f4b220d20f4e82a90da7363697dc9c32c5beaf82d150b35787a294"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_a2a73007b1f4b220d20f4e82a90da7363697dc9c32c5beaf82d150b35787a294"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["title"]) ? $context["title"] : null));
            echo "</em>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "
    ";
            // line 24
            $context["__internal_43dd3a777b7dbc2d17ff8df76bbb5eb63b57ab61d74ce214dbb4bfe1553f1993"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty((isset($context["subitems"]) ? $context["subitems"] : null))) {
                // line 27
                echo "        ";
                $context["subitems"] = (isset($context["popoveritems"]) ? $context["popoveritems"] : null);
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) ? $context["subitems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 34
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 35
                    echo "        ";
                }
                // line 36
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
    ";
            // line 38
            $context["class"] = trim(((((isset($context["wide"]) ? $context["wide"] : null)) ? (" menu-pop-wide") : ("")) . (((isset($context["active"]) ? $context["active"] : null)) ? (" active") : (""))));
            // line 39
            echo "
    ";
            // line 41
            echo "    ";
            if ((isset($context["allowedany"]) ? $context["allowedany"] : null)) {
                // line 42
                echo "        <li";
                if ((isset($context["class"]) ? $context["class"] : null)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
            <a  href=\"";
                // line 43
                if ((isset($context["popoveritems"]) ? $context["popoveritems"] : null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popoveritems"]) ? $context["popoveritems"] : null), 0, array()), "link", array()), "html", null, true);
                } else {
                    echo "#";
                }
                echo "\" class=\"menu-pop\">
                ";
                // line 44
                echo $context["__internal_43dd3a777b7dbc2d17ff8df76bbb5eb63b57ab61d74ce214dbb4bfe1553f1993"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
                echo "
            </a>
            <ul class=\"nav submenu\">
                ";
                // line 47
                $context["divider"] = false;
                // line 48
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["popoveritems"]) ? $context["popoveritems"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    echo "                    ";
                    if (($context["item"] == "-")) {
                        // line 50
                        echo "                        ";
                        $context["divider"] = true;
                        // line 51
                        echo "                    ";
                    } elseif ($this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                        // line 52
                        echo "                        <li";
                        if ((isset($context["divider"]) ? $context["divider"] : null)) {
                            echo " class=\"subdivider\"";
                        }
                        echo ">
                            <a href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                        echo "\">
                                ";
                        // line 54
                        echo $context["__internal_43dd3a777b7dbc2d17ff8df76bbb5eb63b57ab61d74ce214dbb4bfe1553f1993"]->geticon($this->getAttribute($context["item"], "icon", array()));
                        echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                        echo "
                            </a>
                        </li>
                        ";
                        // line 57
                        $context["divider"] = false;
                        // line 58
                        echo "                    ";
                    }
                    // line 59
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "            </ul>
        </li>
    ";
            }
            // line 63
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function getcollapse()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 71
            echo "    ";
            $context["__internal_7a4161fa4284dedf713fd9895804dd567ab216626b801c71a5339363f6670102"] = $this;
            // line 72
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\" data-action=\"bolt.sidebar.collapse()\">
            ";
            // line 75
            echo $context["__internal_7a4161fa4284dedf713fd9895804dd567ab216626b801c71a5339363f6670102"]->getlabel("fa:compress", $this->env->getExtension('Bolt')->trans("Collapse sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\" data-action=\"bolt.sidebar.expand()\">
            ";
            // line 80
            echo $context["__internal_7a4161fa4284dedf713fd9895804dd567ab216626b801c71a5339363f6670102"]->getlabel("fa:expand", $this->env->getExtension('Bolt')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "    ";
            $context["__internal_5950163333cd95128027d82209fbb060f5d81f8a849adf7b478fe0b033e3dfa4"] = $this;
            // line 91
            echo "    ";
            $context["class"] = "";
            // line 92
            echo "    ";
            if (((isset($context["pathname"]) ? $context["pathname"] : null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 93
            echo "    ";
            if ((isset($context["active"]) ? $context["active"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active");
            }
            // line 94
            echo "    ";
            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " divider");
            }
            // line 95
            echo "
    <li";
            // line 96
            if ((isset($context["class"]) ? $context["class"] : null)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim((isset($context["class"]) ? $context["class"] : null)), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath((isset($context["pathname"]) ? $context["pathname"] : null));
            echo "\">";
            echo $context["__internal_5950163333cd95128027d82209fbb060f5d81f8a849adf7b478fe0b033e3dfa4"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
            echo "</a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 105
    public function getlabel($__icon__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 106
            echo "    ";
            $context["__internal_74cf74333b9d1646fbd9619e1bc4c68198a47c0d8a0e15d27460435efccc7fb1"] = $this;
            // line 107
            echo "
    ";
            // line 108
            if (twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
                // line 109
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["label"]) ? $context["label"] : null), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 110
(isset($context["icon"]) ? $context["icon"] : null) != "-")) {
                // line 111
                echo "        ";
                echo $context["__internal_74cf74333b9d1646fbd9619e1bc4c68198a47c0d8a0e15d27460435efccc7fb1"]->geticon((isset($context["icon"]) ? $context["icon"] : null), true);
                echo "
    ";
            }
            // line 113
            echo "    ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 120
    public function geticon($__icon__ = null, $__box__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 121
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter((isset($context["box"]) ? $context["box"] : null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 122
            echo "    ";
            // line 123
            echo "    ";
            if ((twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 0, 3) == "fa:")) {
                // line 124
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"></i>
    ";
                // line 126
                echo "    ";
            } else {
                // line 127
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 127,  404 => 126,  397 => 124,  394 => 123,  392 => 122,  389 => 121,  377 => 120,  363 => 113,  357 => 111,  355 => 110,  350 => 109,  348 => 108,  345 => 107,  342 => 106,  330 => 105,  314 => 97,  306 => 96,  303 => 95,  298 => 94,  293 => 93,  288 => 92,  285 => 91,  282 => 90,  267 => 89,  252 => 80,  244 => 75,  239 => 72,  236 => 71,  227 => 70,  215 => 63,  210 => 60,  204 => 59,  201 => 58,  199 => 57,  192 => 54,  188 => 53,  181 => 52,  178 => 51,  175 => 50,  172 => 49,  167 => 48,  165 => 47,  159 => 44,  151 => 43,  142 => 42,  139 => 41,  136 => 39,  134 => 38,  131 => 37,  125 => 36,  122 => 35,  119 => 34,  116 => 33,  111 => 32,  108 => 31,  105 => 29,  102 => 28,  99 => 27,  97 => 26,  94 => 25,  92 => 24,  89 => 23,  73 => 22,  59 => 7,  56 => 6,  53 => 5,  41 => 4,  35 => 115,  31 => 100,  27 => 84,  23 => 65,  19 => 10,);
    }
}
