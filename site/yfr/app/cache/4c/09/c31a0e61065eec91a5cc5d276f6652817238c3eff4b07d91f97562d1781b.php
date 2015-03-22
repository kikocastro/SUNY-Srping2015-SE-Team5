<?php

/* record-sidebar-left.twig */
class __TwigTemplate_4c09c31a0e61065eec91a5cc5d276f6652817238c3eff4b07d91f97562d1781b extends Twig_Template
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
        echo "left-sidebar";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "<article id=\"main\">
    <header class=\"special container\">
        <span class=\"icon    \"></span>
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "introduction", array()), "html", null, true);
        echo "</p>
    </header>
    <section class=\"wrapper style4 container\">
        <div class=\"row oneandhalf\">
            <div class=\"4u\">

                ";
        // line 16
        $this->env->loadTemplate("_sidebar.twig")->display($context);
        // line 17
        echo "
            </div>
            <div class=\"8u skel-cell-important\">
                <div class=\"content\">
                    <section>
                        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "images/pic02.jpg\" alt=\"\" /></a>
                        <header>
                            <h3>";
        // line 24
        if ( !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        }
        echo "</h3>
                        </header>
                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "
                    </section>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 33
        $this->env->loadTemplate("_row.twig")->display($context);
        // line 34
        echo "        
</article>
";
    }

    public function getTemplateName()
    {
        return "record-sidebar-left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  97 => 33,  87 => 26,  78 => 24,  73 => 22,  66 => 17,  64 => 16,  55 => 10,  51 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
