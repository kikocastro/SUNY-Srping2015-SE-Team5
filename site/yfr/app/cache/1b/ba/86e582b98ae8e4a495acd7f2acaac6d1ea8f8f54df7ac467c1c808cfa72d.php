<?php

/* record.twig */
class __TwigTemplate_1bba86e582b98ae8e4a495acd7f2acaac6d1ea8f8f54df7ac467c1c808cfa72d extends Twig_Template
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
        echo "no-sidebar";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "<article id=\"main\">

    <header class=\"special container\">
        <span class=\"icon ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "general", array()), "icon", array()), "html", null, true);
        echo "\"></span>
        <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
        echo "
    </header>

    <section class=\"wrapper style4 container\">
        <div class=\"content\">
            <section>
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link", array()), "html", null, true);
        echo "\" class=\"image featured\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
        echo "\" alt=\"\" /></a>
                <header>
                    <h3>";
        // line 19
        if ( !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        }
        echo "</h3>
                </header>
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "
            </section>
        </div>
    </section>

    ";
        // line 26
        $this->env->loadTemplate("_row.twig")->display($context);
        // line 27
        echo "        
</article>
";
    }

    public function getTemplateName()
    {
        return "record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  92 => 26,  84 => 21,  75 => 19,  68 => 17,  59 => 11,  55 => 10,  51 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
