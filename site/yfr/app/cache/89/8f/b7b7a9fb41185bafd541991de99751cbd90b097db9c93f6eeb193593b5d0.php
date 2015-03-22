<?php

/* extend/_package.twig */
class __TwigTemplate_898fb7b7a9fb41185bafd541991de99751cbd90b097db9c93f6eeb193593b5d0 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    <div class=\"ext-list\"><strong class=\"no-results\">";
        echo $this->env->getExtension('Bolt')->trans("No Bolt Extensions installed.");
        echo "</strong></div>
";
        $context["package_empty"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <i class=\"fa fa-cube fa-fw\"></i> %TITLE% <span class=\"pull-right text-muted\">%NAME% - %VERSION%</span>
            <span class=\"authors\">%AUTHORS%</span>
        </div>

        <div class=\"panel-body\">
            ";
        // line 14
        echo "            <div class=\"actions pull-right\">
                ";
        // line 16
        echo "                %AVAILABLE%

                <div class=\"btn-group\">

                    ";
        // line 21
        echo "                    %README%

                    ";
        // line 24
        echo "                    %CONFIG%

                    ";
        // line 27
        echo "                    %THEME%

                </div>

                %UNINSTALL%
            </div>

            ";
        // line 35
        echo "            <div class=\"description text-muted\">%DESCRIPTION%</div>

            ";
        // line 38
        echo "            <span class=\"tags\">
                <i class=\"fa fa-tag ta-fw\"></i>&nbsp;
                <span class=\"tags\">%KEYWORDS%</span>
            </span>

            ";
        // line 44
        echo "            <i class=\"fa fa-briefcase ta-fw\"></i>&nbsp;
            <span class=\"type label label-default\">%TYPE%</span>

        </div>
    </div>
";
        $context["package_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        echo "
";
        // line 51
        $context["package_author"] = ('' === $tmp = "    <span class=\"author label label-primary\">%AUTHOR%</span>&nbsp;
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        echo "
";
        // line 55
        $context["package_keyword"] = ('' === $tmp = "    <span class=\"tag label label-info\">%KEYWORD%</span>&nbsp;
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        echo "
";
        // line 59
        ob_start();
        // line 60
        echo "    <a data-request=\"package-readme\" data-readme=\"%README%\" class='btn btn-sm btn-tertiary' href=\"#\">
        <i class='fa fa-quote-right fa-fw'></i> ";
        // line 61
        echo $this->env->getExtension('Bolt')->trans("Readme");
        echo "</a>&nbsp;
";
        $context["package_readme_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 63
        echo "
";
        // line 64
        ob_start();
        // line 65
        echo "    <a href=\"%CONFIG%\" class=\"btn btn-sm btn-tertiary\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 66
        echo $this->env->getExtension('Bolt')->trans("Config");
        echo "</a>&nbsp;
";
        $context["package_config_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        echo "
";
        // line 69
        ob_start();
        // line 70
        echo "    <a data-request=\"package-copy\" data-theme=\"%NAME%\" class=\"btn btn-sm btn-tertiary\" href=\"#\">
        <i class=\"fa fa-copy fa-fw\"></i> ";
        // line 71
        echo $this->env->getExtension('Bolt')->trans("Copy to theme folder");
        echo "</a>&nbsp;
";
        $context["package_theme_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
";
        // line 74
        ob_start();
        // line 75
        echo "    <a data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\" class='btn btn-sm btn-primary' href=\"#\">
        <i class='fa fa-list fa-fw'></i> ";
        // line 76
        echo $this->env->getExtension('Bolt')->trans("Versions");
        echo "</a>&nbsp;
";
        $context["package_available_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        echo "
";
        // line 79
        ob_start();
        // line 80
        echo "    <a data-request=\"uninstall-package\" class=\"btn btn-sm btn-danger\" href=\"%BASEURL%uninstall?package=%NAME%\">
        <i class=\"fa fa-trash-o fa-fw\"></i> ";
        // line 81
        echo $this->env->getExtension('Bolt')->trans("Uninstall");
        echo "</a>
";
        $context["package_uninstall_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
";
        // line 84
        ob_start();
        // line 85
        echo "    <tr>
        <td>%NAME%</td>
        <td>%VERSION%</td>
        <td><span class=\"label label-default-%CLASS%\">%BUILDSTATUS%</span></td>
        <td>
            <div class=\"btn-group\"><a href=\"#\" data-request=\"install-package\" class=\"btn btn-primary btn-sm\" data-package=\"%NAME%\" data-version=\"%VERSION%\">
            <i class=\"icon-gears\"></i> ";
        // line 91
        echo $this->env->getExtension('Bolt')->trans("Install This Version");
        echo "</a></div>
        </td>
    </tr>
";
        $context["package_versions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 95
        echo "
";
        // line 96
        ob_start();
        // line 97
        echo "    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-warning\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">";
        // line 100
        echo $this->env->getExtension('Bolt')->trans("Install Package");
        echo "</a></td>
    </tr>
";
        $context["package_install_new"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 103
        echo "
";
        // line 104
        ob_start();
        // line 105
        echo "    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-tertiary\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">";
        // line 108
        echo $this->env->getExtension('Bolt')->trans("Update Package");
        echo "</a></td>
    </tr>
";
        $context["package_install_update"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 111
        echo "
";
        // line 112
        $context["package_error"] = ('' === $tmp = "    <h3>%ERROR_TYPE%</h3>
    <code>%ERROR_MESSAGE%</code>
    <p>%ERROR_LOCATION%</p>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 117
        echo "
";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("extend.packages", array("empty" => trim((isset($context["package_empty"]) ? $context["package_empty"] : null)), "item" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 119
(isset($context["package_item"]) ? $context["package_item"] : null)), "/>\\s+</", "><"), "versions" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 120
(isset($context["package_versions"]) ? $context["package_versions"] : null)), "/>\\s+</", "><"), "author" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 121
(isset($context["package_author"]) ? $context["package_author"] : null)), "/>\\s+</", "><"), "keyword" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 122
(isset($context["package_keyword"]) ? $context["package_keyword"] : null)), "/>\\s+</", "><"), "readme_button" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 123
(isset($context["package_readme_button"]) ? $context["package_readme_button"] : null)), "/>\\s+</", "><"), "config_button" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 124
(isset($context["package_config_button"]) ? $context["package_config_button"] : null)), "/>\\s+</", "><"), "theme_button" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 125
(isset($context["package_theme_button"]) ? $context["package_theme_button"] : null)), "/>\\s+</", "><"), "avail_button" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 126
(isset($context["package_available_button"]) ? $context["package_available_button"] : null)), "/>\\s+</", "><"), "install_new" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 127
(isset($context["package_install_new"]) ? $context["package_install_new"] : null)), "/>\\s+</", "><"), "install_update" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 128
(isset($context["package_install_update"]) ? $context["package_install_update"] : null)), "/>\\s+</", "><"), "uninstall_button" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 129
(isset($context["package_uninstall_button"]) ? $context["package_uninstall_button"] : null)), "/>\\s+</", "><"), "error" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 130
(isset($context["package_error"]) ? $context["package_error"] : null)), "/>\\s+</", "><"))), "html", null, true);
        // line 132
        echo "
";
    }

    public function getTemplateName()
    {
        return "extend/_package.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 132,  238 => 130,  237 => 129,  236 => 128,  235 => 127,  234 => 126,  233 => 125,  232 => 124,  231 => 123,  230 => 122,  229 => 121,  228 => 120,  227 => 119,  226 => 118,  223 => 117,  218 => 112,  215 => 111,  209 => 108,  204 => 105,  202 => 104,  199 => 103,  193 => 100,  188 => 97,  186 => 96,  183 => 95,  176 => 91,  168 => 85,  166 => 84,  163 => 83,  158 => 81,  155 => 80,  153 => 79,  150 => 78,  145 => 76,  142 => 75,  140 => 74,  137 => 73,  132 => 71,  129 => 70,  127 => 69,  124 => 68,  119 => 66,  116 => 65,  114 => 64,  111 => 63,  106 => 61,  103 => 60,  101 => 59,  98 => 58,  95 => 55,  92 => 54,  89 => 51,  86 => 50,  78 => 44,  71 => 38,  67 => 35,  58 => 27,  54 => 24,  50 => 21,  44 => 16,  41 => 14,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
