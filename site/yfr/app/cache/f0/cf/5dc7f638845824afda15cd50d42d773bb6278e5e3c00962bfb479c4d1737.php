<?php

/* clearcache/clearcache.twig */
class __TwigTemplate_f0cf5dc7f638845824afda15cd50d42d773bb6278e5e3c00962bfb479c4d1737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("_base/_page-nav.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Configuration";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Clear the cache");
    }

    // line 9
    public function block_page_main($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("clearcache");
        echo "\" class=\"btn btn-primary\">";
        echo $this->env->getExtension('Bolt')->trans("Clear cache again");
        echo "</a>
            </p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "clearcache/clearcache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 10,  50 => 9,  44 => 7,  38 => 5,  11 => 3,);
    }
}
