<?php

/* master.twig */
class __TwigTemplate_b7e6a7d9e67ae6cfc44326bee0813d9063fe857dd5b63626aaec0b2a0ca93ca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'scripts' => array($this, 'block_scripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'header' => array($this, 'block_header'),
            'headerclass' => array($this, 'block_headerclass'),
            'banner' => array($this, 'block_banner'),
            'main' => array($this, 'block_main'),
            'cta' => array($this, 'block_cta'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<!--
    Twenty by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 53
        echo "
    </head>
    <body class=\"";
        // line 55
        $this->displayBlock('bodyclass', $context, $blocks);
        echo "\">
    
        ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('banner', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('main', $context, $blocks);
        // line 73
        echo "        
        ";
        // line 74
        $this->displayBlock('cta', $context, $blocks);
        // line 76
        echo "
            <footer id=\"footer\">
                ";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 109
        echo "
            </footer>

    </body>
</html>";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "<title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <script>
        var paths = {
            theme : '";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "'
        };
        </script>";
        // line 26
        $this->displayBlock('scripts', $context, $blocks);
        // line 39
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        // line 14
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
    }

    // line 26
    public function block_scripts($context, array $blocks = array())
    {
        // line 27
        echo "
        <!--[if lte IE 8]><script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/ie/html5shiv.js\"></script><![endif]-->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/jquery.min.js\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/jquery.dropotron.min.js\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/jquery.scrolly.min.js\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/jquery.scrollgress.min.js\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/skel.min.js\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/skel-layers.min.js\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/init.js\"></script>

        ";
    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 40
        echo "
        <noscript>
            <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/skel.css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/style.css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/style-wide.css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/style-noscript.css\" />
        </noscript>
        <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/ie/v8.css\" /><![endif]-->
        <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/ie/v9.css\" /><![endif]-->

        ";
    }

    // line 55
    public function block_bodyclass($context, array $blocks = array())
    {
    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        // line 58
        echo "            <header id=\"header\" class=\"";
        $this->displayBlock('headerclass', $context, $blocks);
        echo "\">
                <h1 id=\"logo\"><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
            echo "</span>";
        }
        echo "</a></h1>
                <nav id=\"nav\">
                    <ul>
                        ";
        // line 62
        echo $this->env->getExtension('Bolt')->menu($this->env, "main", "_menu.twig");
        echo "
                    </ul>
                </nav>
            </header>
        ";
    }

    // line 58
    public function block_headerclass($context, array $blocks = array())
    {
    }

    // line 68
    public function block_banner($context, array $blocks = array())
    {
        // line 69
        echo "        ";
    }

    // line 71
    public function block_main($context, array $blocks = array())
    {
        // line 72
        echo "        ";
    }

    // line 74
    public function block_cta($context, array $blocks = array())
    {
        // line 75
        echo "        ";
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "
                <ul class=\"icons\">";
        // line 81
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "twitter", array()), "url", array()))) {
            // line 82
            echo "
                    <li><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "twitter", array()), "url", array()), "html", null, true);
            echo "\" class=\"icon circle fa-twitter\"><span class=\"label\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "twitter", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "twitter", array(), "any", false, true), "title", array()), "Twitter")) : ("Twitter")), "html", null, true);
            echo "</span></a></li>";
        }
        // line 85
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "facebook", array()), "url", array()))) {
            // line 86
            echo "
                    <li><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "facebook", array()), "url", array()), "html", null, true);
            echo "\" class=\"icon circle fa-facebook\"><span class=\"label\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "facebook", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "facebook", array(), "any", false, true), "title", array()), "Facebook")) : ("Facebook")), "html", null, true);
            echo "</span></a></li>";
        }
        // line 89
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "google", array()), "url", array()))) {
            // line 90
            echo "
                    <li><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "google", array()), "url", array()), "html", null, true);
            echo "\" class=\"icon circle fa-google-plus\"><span class=\"label\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "google", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "google", array(), "any", false, true), "title", array()), "Google+")) : ("Google+")), "html", null, true);
            echo "</span></a></li>";
        }
        // line 93
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "github", array()), "url", array()))) {
            // line 94
            echo "
                    <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "github", array()), "url", array()), "html", null, true);
            echo "\" class=\"icon circle fa-github\"><span class=\"label\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "github", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "github", array(), "any", false, true), "title", array()), "Github")) : ("Github")), "html", null, true);
            echo "</span></a></li>";
        }
        // line 97
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "dribbble", array()), "url", array()))) {
            // line 98
            echo "
                    <li><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()), "dribbble", array()), "url", array()), "html", null, true);
            echo "\" class=\"icon circle fa-dribbble\"><span class=\"label\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "dribbble", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array(), "any", false, true), "dribbble", array(), "any", false, true), "title", array()), "Dribbble")) : ("Dribbble")), "html", null, true);
            echo "</span></a></li>";
        }
        // line 101
        echo "
                </ul>
                
                <ul class=\"copyright\">
                    <li>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "copyright", array()), "html", null, true);
        echo "</li>
                    <li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
                </ul>
                ";
    }

    public function getTemplateName()
    {
        return "master.twig";
    }

    public function getDebugInfo()
    {
        return array (  329 => 105,  323 => 101,  317 => 99,  314 => 98,  312 => 97,  306 => 95,  303 => 94,  301 => 93,  295 => 91,  292 => 90,  290 => 89,  284 => 87,  281 => 86,  279 => 85,  273 => 83,  270 => 82,  268 => 81,  265 => 79,  262 => 78,  258 => 75,  255 => 74,  251 => 72,  248 => 71,  244 => 69,  241 => 68,  236 => 58,  227 => 62,  214 => 59,  209 => 58,  206 => 57,  201 => 55,  194 => 48,  190 => 47,  185 => 45,  181 => 44,  177 => 43,  173 => 42,  169 => 40,  166 => 39,  159 => 35,  155 => 34,  151 => 33,  147 => 32,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  128 => 27,  125 => 26,  118 => 14,  116 => 13,  111 => 12,  108 => 11,  104 => 39,  102 => 26,  97 => 22,  89 => 16,  87 => 11,  85 => 10,  82 => 9,  74 => 109,  72 => 78,  68 => 76,  66 => 74,  63 => 73,  61 => 71,  58 => 70,  56 => 68,  53 => 67,  51 => 57,  46 => 55,  42 => 53,  40 => 9,  30 => 1,);
    }
}
