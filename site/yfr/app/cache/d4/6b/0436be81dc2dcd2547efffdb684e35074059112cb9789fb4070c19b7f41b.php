<?php

/* editcontent/_aside.twig */
class __TwigTemplate_d46b0436be81dc2dcd2547efffdb684e35074059112cb9789fb4070c19b7f41b extends Twig_Template
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
        // line 1
        $context["panels"] = $this->env->loadTemplate("_macro/_panels.twig");
        // line 2
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.actions-one", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </div>

    <div class=\"panel-body\">
        ";
        // line 9
        $this->env->loadTemplate("editcontent/_aside-save.twig")->display($context);
        // line 10
        echo "        ";
        $this->env->loadTemplate("editcontent/_aside-preview.twig")->display($context);
        // line 11
        echo "        ";
        $this->env->loadTemplate("editcontent/_aside-status.twig")->display($context);
        // line 12
        echo "    </div>
</div>

";
        // line 15
        echo $context["panels"]->getchanges($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()));
        echo "

";
        // line 17
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()));
        echo "

";
        // line 19
        echo $context["panels"]->getstack(5);
        echo "
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  51 => 17,  46 => 15,  41 => 12,  38 => 11,  35 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
