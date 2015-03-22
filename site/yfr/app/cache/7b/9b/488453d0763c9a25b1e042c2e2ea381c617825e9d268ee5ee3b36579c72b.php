<?php

/* contact.twig */
class __TwigTemplate_7b9b488453d0763c9a25b1e042c2e2ea381c617825e9d268ee5ee3b36579c72b extends Twig_Template
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

    // line 3
    public function block_bodyclass($context, array $blocks = array())
    {
        echo "contact";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "<article id=\"main\">

\t<header class=\"special container\">
\t\t<span class=\"icon fa-envelope\"></span>
\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>
\t\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
        echo "</p>
\t</header>
\t\t
\t<section class=\"wrapper style4 special container small\">
\t\t\t<div class=\"content\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"row half collapse-at-2\">
\t\t\t\t\t\t<div class=\"6u\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Name\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"6u\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" placeholder=\"Email\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row half\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" placeholder=\"Subject\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row half\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"Message\" rows=\"7\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t<ul class=\"buttons\">
\t\t\t\t\t\t\t\t<li><input type=\"submit\" class=\"special\" value=\"Send Message\" /></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t
\t</section>
\t
</article>
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
