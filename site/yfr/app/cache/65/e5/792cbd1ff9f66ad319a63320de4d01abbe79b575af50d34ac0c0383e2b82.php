<?php

/* dashboard/_aside.twig */
class __TwigTemplate_65e5792cbd1ff9f66ad319a63320de4d01abbe79b575af50d34ac0c0383e2b82 extends Twig_Template
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
";
        // line 4
        echo "<noscript>
    <section>
        <h2>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("generic.noscript.headline");
        echo "</h2>
        <p>";
        // line 7
        echo $this->env->getExtension('Bolt')->trans("generic.noscript.message");
        echo "</p>
    </section>
</noscript>

";
        // line 12
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "bolt_released", array()) == false)) {
            // line 13
            echo "<div class=\"panel panel-default panel-news\">
    <div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\">
        <b><i class=\"fa fa-fw fa-bullhorn\"></i> Warning: Development version </b>
    </div>
    <div class=\"panel-body\">
            <p>This is a development version of Bolt, so it might contain bugs and unfinished features. Use at your own risk! For 'production' websites, we advise you to stick with the official stable releases. </p>
    </p>
    </div>
</div>
";
        }
        // line 23
        echo "
";
        // line 25
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("dashboardnews"));
        echo "

";
        // line 28
        echo $context["panels"]->getstack(7, true);
        echo "

";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->widget("dashboard", "right_first"), "html", null, true);
        echo "

";
        // line 34
        echo "<div id=\"latestactivity\">
    ";
        // line 35
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("latestactivity"));
        echo "
</div>

";
        // line 39
        echo "<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\">
    <!-- intentionally left blank -->
</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  74 => 35,  71 => 34,  66 => 31,  61 => 28,  56 => 25,  53 => 23,  41 => 13,  39 => 12,  32 => 7,  28 => 6,  24 => 4,  21 => 2,  19 => 1,);
    }
}
