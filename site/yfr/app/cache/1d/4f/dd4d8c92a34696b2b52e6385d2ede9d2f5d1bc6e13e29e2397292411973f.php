<?php

/* firstuser/firstuser.twig */
class __TwigTemplate_1d4fdd4d8c92a34696b2b52e6385d2ede9d2f5d1bc6e13e29e2397292411973f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("_base/_page-no_nav.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-no_nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Create the first user");
    }

    // line 7
    public function block_page_main($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $this->env->getExtension('form')->renderer->setTheme($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), array(0 => "form_bolt_layout.twig"));
        // line 10
        echo "
    <p class=\"first-user\">
        ";
        // line 12
        echo $this->env->getExtension('Bolt')->trans("There are no users present in the system. Please create the first user, which will be granted root privileges.");
        echo "
    </p>

    <form action=\"#\" method=\"post\" class=\"form-horizontal\" role=\"form\" autocomplete=\"off\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 17
        echo $this->env->getExtension('Bolt')->trans("Create the first user");
        echo "\" name=\"submit\" class=\"btn btn-primary\">
    </form>

    ";
        // line 20
        if ( !twig_test_empty($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "note", array()))) {
            // line 21
            echo "        <p class=\"alert alert-info\" style=\"max-width: 550px; margin-top:10px;\">
            <strong>";
            // line 22
            echo $this->env->getExtension('Bolt')->trans("Note:");
            echo "</strong> ";
            echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "note", array());
            echo "
        </p>
    ";
        }
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "firstuser/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  77 => 22,  74 => 21,  72 => 20,  66 => 17,  62 => 16,  55 => 12,  51 => 10,  49 => 9,  46 => 8,  43 => 7,  37 => 5,  11 => 3,);
    }
}
