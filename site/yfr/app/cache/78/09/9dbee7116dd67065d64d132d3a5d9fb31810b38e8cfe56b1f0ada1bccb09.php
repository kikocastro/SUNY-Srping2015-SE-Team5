<?php

/* extend/install-package.twig */
class __TwigTemplate_78099dbee7116dd67065d64d132d3a5d9fb31810b38e8cfe56b1f0ada1bccb09 extends Twig_Template
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
        echo "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
    <h4 class=\"modal-title\">";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("Installing package");
        echo "</h4>
</div>
<div class=\"modal-body\">

    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"loader\">
                <i class=\"fa fa-spin fa-circle-o-notch\"></i> <span class=\"message\">Checking available versions...</span>
            </div>

            <div class=\"install-response-container hide-block\">
                <h3>";
        // line 15
        echo $this->env->getExtension('Bolt')->trans("Installing package");
        echo "</h3>
                <pre class=\"install-response console\">";
        // line 16
        echo $this->env->getExtension('Bolt')->trans("Installing selected package version (this may take up to 60 seconds).");
        echo "</pre>
            </div>

            <div class=\"install-version-container hide-block\">

                <div class=\"stable-version-container\">
                    <h3>";
        // line 22
        echo $this->env->getExtension('Bolt')->trans("Stable versions");
        echo "</h3>
                    <p>";
        // line 23
        echo $this->env->getExtension('Bolt')->trans("The versions listed below are marked as stable releases by the developer and are compatible with the version of Bolt you are currently using.");
        echo "</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 27
        echo $this->env->getExtension('Bolt')->trans("Extension");
        echo "</th>
                                <th>";
        // line 28
        echo $this->env->getExtension('Bolt')->trans("Version");
        echo "</th>
                                <th>";
        // line 29
        echo $this->env->getExtension('Bolt')->trans("Status");
        echo "</th>
                                <th>";
        // line 30
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                        <tr><td colspan=\"3\"><strong>";
        // line 34
        echo $this->env->getExtension('Bolt')->trans("No Stable Versions Available");
        echo "</strong></td></tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"dev-version-container\">
                    <h3>";
        // line 40
        echo $this->env->getExtension('Bolt')->trans("Unstable test versions");
        echo "</h3>
                    <p>";
        // line 41
        echo $this->env->getExtension('Bolt')->trans("The versions listed below are compatible with the version of Bolt you are using. Since they are unstable versions, we recommend you <strong>do not</strong> use these on production systems.");
        echo "</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 45
        echo $this->env->getExtension('Bolt')->trans("Extension");
        echo "</th>
                                <th>";
        // line 46
        echo $this->env->getExtension('Bolt')->trans("Version");
        echo "</th>
                                <th>";
        // line 47
        echo $this->env->getExtension('Bolt')->trans("Status");
        echo "</th>
                                <th>";
        // line 48
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr><td colspan=\"3\"><strong>";
        // line 52
        echo $this->env->getExtension('Bolt')->trans("No Test Versions Available");
        echo "</strong></td></tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class=\"theme-postinstall hide-block\">
                <div class=\"theme-generation-container\">
                    <h3>";
        // line 61
        echo $this->env->getExtension('Bolt')->trans("Theme installation complete");
        echo "</h3>
                    <p>
                        ";
        // line 63
        echo $this->env->getExtension('Bolt')->trans("Before you can start using the theme on your site we need to make a copy to your theme folder.");
        echo "
                        ";
        // line 64
        echo $this->env->getExtension('Bolt')->trans("If you would like to give the theme an alternative name you can add one here.");
        echo "
                    </p>

                    <fieldset>
                        <input type=\"text\" id=\"theme-name\" placeholder=\"Optionally change theme name\">
                        <a href=\"#\" class=\"theme-generator btn btn-primary\" data-request=\"generate-theme\" data-theme=\"\">Generate Theme</a>
                    </fieldset>
                </div>
                <div class=\"theme-generate-response alert alert-info hide-block\"></div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"ext-link btn btn-primary\" target=\"_blank\">";
        // line 74
        echo $this->env->getExtension('Bolt')->trans("More info/help");
        echo "</a>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

            <div class=\"extension-postinstall hide-block\">
                <div class=\"modal-success hide-block\">
                    <h3>";
        // line 81
        echo $this->env->getExtension('Bolt')->trans("Installation complete");
        echo "</h3>
                    <p>

                        ";
        // line 84
        echo $this->env->getExtension('Bolt')->trans("You can now start using the installed extension, documentation and implementation instructions can be found using the link below.");
        echo "
                    </p>
                </div>

                <div class=\"modal-failed hide-block\">
                </div>

                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"ext-link btn btn-primary\" target=\"_blank\">";
        // line 92
        echo $this->env->getExtension('Bolt')->trans("More info/help");
        echo "</a>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>



    </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "extend/install-package.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 92,  170 => 84,  164 => 81,  154 => 74,  141 => 64,  137 => 63,  132 => 61,  120 => 52,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  94 => 41,  90 => 40,  81 => 34,  74 => 30,  70 => 29,  66 => 28,  62 => 27,  55 => 23,  51 => 22,  42 => 16,  38 => 15,  23 => 3,  19 => 1,);
    }
}
