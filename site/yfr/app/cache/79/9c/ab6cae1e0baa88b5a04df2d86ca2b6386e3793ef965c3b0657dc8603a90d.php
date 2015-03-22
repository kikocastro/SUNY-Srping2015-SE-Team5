<?php

/* files/files.twig */
class __TwigTemplate_799cab6cae1e0baa88b5a04df2d86ca2b6386e3793ef965c3b0657dc8603a90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        try {
            $this->parent = $this->env->loadTemplate("_base/_page-nav.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(6);

            throw $e;
        }

        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->env->loadTemplate("_macro/_macro.twig");
        // line 4
        $context["__internal_7298299fd0a39e42253dc4a07e78a0dcc0fd8b99e352577cc2d33cfddbd950c6"] = $this->env->loadTemplate("_macro/_files_path.twig");
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/FileManagement";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Files");
    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()) . "/") . $this->env->getExtension('Bolt')->last(twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array())))), "html", null, true);
    }

    // line 13
    public function block_page_main($context, array $blocks = array())
    {
        // line 14
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">

            ";
        // line 18
        echo $context["__internal_7298299fd0a39e42253dc4a07e78a0dcc0fd8b99e352577cc2d33cfddbd950c6"]->getfiles_path($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), array("path" => "", "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())));
        echo "

            ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folders", array())) > 0)) {
            // line 21
            echo "                ";
            $this->env->loadTemplate("files/_folders.twig")->display($context);
            // line 22
            echo "            ";
        }
        // line 23
        echo "
            <p>
                <a href=\"#\" class=\"btn btn-default\"
                   data-action=\"bolt.folders.create('";
        // line 26
        echo $this->env->getExtension('Bolt')->trans("Please enter a new folder name");
        echo "',
                                                    '";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
        echo "',
                                                    '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->last(twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()))), "html", null, true);
        echo "',
                                                    this);\">
                    <i class=\"fa fa-fw fa-plus\"></i>
                    ";
        // line 31
        echo $this->env->getExtension('Bolt')->trans("Create folder");
        echo "
                </a>
            </p>

            ";
        // line 35
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array())) > 0)) {
            // line 36
            echo "                ";
            $this->env->loadTemplate("files/_files.twig")->display($context);
            // line 37
            echo "            ";
        }
        // line 38
        echo "
            ";
        // line 40
        echo "            ";
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()) != false)) {
            // line 41
            echo "                ";
            $this->env->loadTemplate("files/_upload.twig")->display($context);
            // line 42
            echo "            ";
        } else {
            // line 43
            echo "                <p><i class=\"fa fa-fw fa-exclamation-sign\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Uploading to this folder is not allowed.");
            echo "</p>
            ";
        }
        // line 45
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "files/files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  130 => 43,  127 => 42,  124 => 41,  121 => 40,  118 => 38,  115 => 37,  112 => 36,  110 => 35,  103 => 31,  97 => 28,  93 => 27,  89 => 26,  84 => 23,  81 => 22,  78 => 21,  76 => 20,  71 => 18,  65 => 14,  62 => 13,  56 => 11,  50 => 10,  44 => 8,  40 => 6,  38 => 4,  36 => 3,  11 => 6,);
    }
}
