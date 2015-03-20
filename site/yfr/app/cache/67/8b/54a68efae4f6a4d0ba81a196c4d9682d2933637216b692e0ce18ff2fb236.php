<?php

/* @BoltProfiler/toolbar/db.html.twig */
class __TwigTemplate_678b54a68efae4f6a4d0ba81a196c4d9682d2933637216b692e0ce18ff2fb236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
        echo " Q</span>

        ";
        // line 8
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) > 0)) {
            // line 9
            echo "            <span>in ";
            echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 11
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        // line 26
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 31
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        $this->displayBlock("queries", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_queries($context, array $blocks = array())
    {
        // line 41
        echo "    <h2>Queries</h2>

    ";
        // line 43
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries", array()))) {
            // line 44
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 48
            echo "        <ul class=\"alt\">
            ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries", array()));
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 50
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                echo "\">
                    <code >
                        ";
                // line 52
                echo $this->getAttribute($context["query"], "sql", array());
                echo "
                    </code>
                    <br /><br />
                    <small>
                        <strong>Parameters</strong>: ";
                // line 56
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["query"], "params", array())), "html", null, true);
                echo " <br />
                        <strong>Time</strong>: ";
                // line 57
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                echo " ms
                    </small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </ul>
    ";
        }
        // line 63
        echo "
";
    }

    public function getTemplateName()
    {
        return "@BoltProfiler/toolbar/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 63,  164 => 61,  154 => 57,  150 => 56,  143 => 52,  137 => 50,  133 => 49,  130 => 48,  124 => 44,  122 => 43,  118 => 41,  115 => 40,  108 => 37,  105 => 36,  97 => 31,  93 => 30,  87 => 26,  84 => 25,  79 => 22,  73 => 19,  66 => 15,  62 => 13,  59 => 12,  56 => 11,  50 => 9,  48 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  21 => 1,);
    }
}
