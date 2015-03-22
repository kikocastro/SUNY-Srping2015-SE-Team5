<?php

/* dashboard/dashboard.twig */
class __TwigTemplate_8d98cb335281cc541714f5c4a580214bc67d8d4ab6c7f2dba38edccc862d36bb extends Twig_Template
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
            'messages' => array($this, 'block_messages'),
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
        echo "Dashboard";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("page.dashboard.title");
    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 17
        $this->env->loadTemplate("_sub/_messages.twig")->display($context);
        // line 18
        echo "
            ";
        // line 19
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "suggestloripsum", array())) {
            // line 20
            echo "                ";
            $this->env->loadTemplate("dashboard/_suggestloripsum.twig")->display($context);
            // line 21
            echo "            ";
        }
        // line 22
        echo "
            <div class=\"quicklinks\">
                ";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method")) > 3)) {
            // line 25
            echo "                    ";
            $this->env->loadTemplate("dashboard/_quicklinks-dropdown.twig")->display($context);
            // line 26
            echo "                ";
        } else {
            // line 27
            echo "                    ";
            $this->env->loadTemplate("dashboard/_quicklinks-buttons.twig")->display($context);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>

            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "latest", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["contenttype"] => $context["multiplecontent"]) {
            // line 32
            echo "                ";
            if ($context["multiplecontent"]) {
                // line 33
                echo "                    ";
                $this->env->loadTemplate("dashboard/_recently_edited.twig")->display($context);
                // line 34
                echo "                ";
            }
            // line 35
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttype'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        </div>

        <aside class=\"col-md-4\">
            ";
        // line 40
        $this->env->loadTemplate("dashboard/_aside.twig")->display($context);
        // line 41
        echo "        </aside>

    </div>

";
    }

    public function getTemplateName()
    {
        return "dashboard/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  147 => 40,  141 => 36,  127 => 35,  124 => 34,  121 => 33,  118 => 32,  101 => 31,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  85 => 25,  83 => 24,  79 => 22,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  66 => 17,  60 => 13,  57 => 12,  51 => 10,  45 => 7,  39 => 5,  11 => 3,);
    }
}
