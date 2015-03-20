<?php

/* nav/_secondary.twig */
class __TwigTemplate_614e542029d14fd8de3221508075f3a2d32363c81f95f899d20da64e4a5657b9 extends Twig_Template
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
        $context["nav"] = $this->env->loadTemplate("nav/_macros.twig");
        // line 2
        echo "
<ul class=\"nav\">
    ";
        // line 4
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "user"), "method"))) {
            // line 5
            echo "
        ";
            // line 7
            echo "        ";
            $this->env->loadTemplate("nav/_secondary-search.twig")->display($context);
            // line 8
            echo "
        ";
            // line 10
            echo "        ";
            echo $context["nav"]->getlink("fa:dashboard", $this->env->getExtension('Bolt')->trans("Dashboard"), "dashboard", ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Dashboard"));
            echo "

        ";
            // line 13
            echo "        <li class=\"visible-xs\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
        </li>

        ";
            // line 18
            echo "        ";
            echo $context["nav"]->getheading($this->env->getExtension('Bolt')->trans("Content"), "fa:file-text");
            echo "
        ";
            // line 19
            $this->env->loadTemplate("nav/_secondary-content.twig")->display($context);
            // line 20
            echo "
        ";
            // line 22
            echo "        ";
            if ($this->env->getExtension('Bolt')->isAllowed("settings")) {
                // line 23
                echo "            ";
                ob_start();
                $this->env->loadTemplate("nav/_secondary-configuration.twig")->display($context);
                $context["nav_config"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 24
                echo "            ";
                ob_start();
                $this->env->loadTemplate("nav/_secondary-filemanagement.twig")->display($context);
                $context["nav_files"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 25
                echo "            ";
                ob_start();
                $this->env->loadTemplate("nav/_secondary-translations.twig")->display($context);
                $context["nav_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 26
                echo "            ";
                // line 27
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "extensions", array()), "hasMenuoptions", array()) || $this->env->getExtension('Bolt')->isAllowed("extensions"))) {
                    // line 28
                    echo "                ";
                    ob_start();
                    $this->env->loadTemplate("nav/_secondary-extensions.twig")->display($context);
                    $context["nav_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["nav_extend"] = "";
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "
            ";
                // line 33
                if ((((trim((isset($context["nav_config"]) ? $context["nav_config"] : null)) || trim((isset($context["nav_files"]) ? $context["nav_files"] : null))) || trim((isset($context["nav_trans"]) ? $context["nav_trans"] : null))) || trim((isset($context["nav_extend"]) ? $context["nav_extend"] : null)))) {
                    // line 34
                    echo "                ";
                    echo $context["nav"]->getheading($this->env->getExtension('Bolt')->trans("Settings"), "fa:wrench");
                    echo "

                ";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["nav_config"]) ? $context["nav_config"] : null), "html", null, true);
                    echo "
                ";
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["nav_files"]) ? $context["nav_files"] : null), "html", null, true);
                    echo "
                ";
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["nav_trans"]) ? $context["nav_trans"] : null), "html", null, true);
                    echo "
                ";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["nav_extend"]) ? $context["nav_extend"] : null), "html", null, true);
                    echo "
            ";
                }
                // line 41
                echo "
        ";
            }
            // line 43
            echo "

        ";
            // line 45
            echo $context["nav"]->getcollapse();
            echo "

    ";
        } else {
            // line 48
            echo "
        ";
            // line 50
            echo "        <li>
            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
        </li>

        ";
            // line 55
            echo "        <li>
            <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><i class=\"fa fa-signin\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Login");
            echo "</a>
        </li>
    ";
        }
        // line 59
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  159 => 56,  156 => 55,  148 => 51,  145 => 50,  142 => 48,  136 => 45,  132 => 43,  128 => 41,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  105 => 34,  103 => 33,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  86 => 28,  83 => 27,  81 => 26,  76 => 25,  71 => 24,  66 => 23,  63 => 22,  60 => 20,  58 => 19,  53 => 18,  45 => 14,  42 => 13,  36 => 10,  33 => 8,  30 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
