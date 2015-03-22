<?php

/* files/_files.twig */
class __TwigTemplate_8a946d4e0e2fbd790597ed610678ec1f2200a0fc52e07ce15eb4139cd73af396 extends Twig_Template
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
        echo "<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.files");
        echo "</th>
            <th colspan=\"2\" class=\"hidden-xs hidden-sm\">";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.size");
        echo "</th>
            <th colspan=\"3\"><span class=\"hidden-xs hidden-sm\">";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.modified");
        echo "</span></th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 12
            echo "            <tr>
                <td>
                    ";
            // line 14
            if (twig_in_filter($this->getAttribute($context["file"], "type", array()), array(0 => "jpeg", 1 => "jpg", 2 => "png", 3 => "gif"))) {
                // line 15
                echo "
                        <i class=\"fa fa-fw fa-file-image-o\"></i>

                        ";
                // line 18
                if ($this->getAttribute($context["file"], "readable", array())) {
                    // line 19
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["file"], "newpath", array()), 1000, 1000, "r"), "html", null, true);
                    echo "\"
                               class=\"magnific\"
                               title=\"Image: ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "\">
                                <b>";
                    // line 22
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 25
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo " </b>
                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 28
                echo "
                    ";
            } elseif (twig_in_filter($this->getAttribute(            // line 29
$context["file"], "type", array()), array(0 => "twig", 1 => "txt", 2 => "html", 3 => "md", 4 => "markdown", 5 => "json", 6 => "htm", 7 => "scss", 8 => "css", 9 => "less", 10 => "js", 11 => "yml"))) {
                // line 30
                echo "
                        <i class=\"fa fa-fw fa-file-code-o\"></i>

                        ";
                // line 33
                if ($this->getAttribute($context["file"], "readable", array())) {
                    // line 34
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => $this->getAttribute($context["file"], "newpath", array()))), "html", null, true);
                    echo "\">
                                <b>";
                    // line 35
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 38
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                        ";
                }
                // line 40
                echo "
                        ";
                // line 41
                if (( !$this->getAttribute($context["file"], "readable", array()) ||  !$this->getAttribute($context["file"], "writable", array()))) {
                    // line 42
                    echo "                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 44
                echo "
                    ";
            } else {
                // line 46
                echo "
                        <i class=\"fa fa-fw fa-link\"></i>

                        ";
                // line 49
                if ($this->getAttribute($context["file"], "readable", array())) {
                    // line 50
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">
                                <b>";
                    // line 51
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 54
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo " </b>
                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 57
                echo "                    ";
            }
            // line 58
            echo "                </td>
                <td style=\"min-width: 120px;\"class=\"hidden-xs hidden-sm\">
                    ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filesize", array()), "html", null, true);
            echo ".
                    ";
            // line 61
            if ($this->getAttribute($context["file"], "imagesize", array(), "any", true, true)) {
                // line 62
                echo "                       <br> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "imagesize", array()), "html", null, true);
                echo " px.
                    ";
            }
            // line 64
            echo "                </td>
                <td style=\"min-width: 140px;\" class=\"hidden-xs hidden-sm\">
                    <time class=\"moment\"
                          datetime=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "modified", array()), "c"), "html", null, true);
            echo "\"
                          title=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "modified", array()), "html", null, true);
            echo "\">
                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "modified", array()), "html", null, true);
            echo "
                    </time>
                </td>
                <td class=\"listthumb\">
                    ";
            // line 73
            if ($this->getAttribute($context["file"], "imagesize", array(), "any", true, true)) {
                // line 74
                echo "                        ";
                echo $this->env->getExtension('Bolt')->showImage($this->getAttribute($context["file"], "newpath", array()), 54, 40, "c");
                echo "
                    ";
            }
            // line 76
            echo "                </td>
                <td class=\"actions\" style=\"min-width: 16px;\">

                    <div class=\"btn-group\">

                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "stackbutton", array(0 => $context["file"]), "method"), "html", null, true);
            echo "

                        ";
            // line 83
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()) != false)) {
                // line 84
                echo "                            <a class=\"btn dropdown-toggle btn-default btn-sm hidden-xs\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-info-circle\"></i>
                                ";
                // line 86
                echo $this->env->getExtension('Bolt')->trans("Options");
                echo "
                                <span class=\"caret\"></span>
                            </a>

                            <ul class=\"dropdown-menu pull-right hidden-xs\">
                                <li>
                                    <a href=\"#\"
                                       data-action=\"bolt.files.renameFile('";
                // line 93
                echo $this->env->getExtension('Bolt')->trans("Please enter a new file name");
                echo "',
                                                                        '";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "',
                                                                        '";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                echo "',
                                                                        '";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                echo "',
                                                                        this);\">

                                        <i class=\"fa fa-keyboard-o\"></i>
                                        ";
                // line 100
                echo $this->env->getExtension('Bolt')->trans("Rename %foldername%", array("%foldername%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"bolt.files.deleteFile('";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "newpath", array()), "html", null, true);
                echo "', this);\">
                                        <i class=\"fa fa-ban\"></i>
                                        ";
                // line 106
                echo $this->env->getExtension('Bolt')->trans("Delete %filename%", array("%filename%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"bolt.files.duplicateFile('";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "newpath", array()), "html", null, true);
                echo "')\">
                                        <i class=\"fa fa-files-o\"></i>
                                        ";
                // line 112
                echo $this->env->getExtension('Bolt')->trans("Duplicate %filename%", array("%filename%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a class=\"nolink\">
                                        ";
                // line 118
                echo $this->env->getExtension('Bolt')->trans("Permissions");
                echo ":
                                        <strong><code>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "permissions", array()), "html", null, true);
                echo "</code></strong>
                                    </a>
                                </li>
                            </ul>
                        ";
            }
            // line 124
            echo "                    </div>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "files/_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 129,  290 => 124,  282 => 119,  278 => 118,  269 => 112,  262 => 110,  255 => 106,  248 => 104,  241 => 100,  234 => 96,  230 => 95,  226 => 94,  222 => 93,  212 => 86,  208 => 84,  206 => 83,  201 => 81,  194 => 76,  188 => 74,  186 => 73,  179 => 69,  175 => 68,  171 => 67,  166 => 64,  160 => 62,  158 => 61,  154 => 60,  150 => 58,  147 => 57,  140 => 54,  134 => 51,  129 => 50,  127 => 49,  122 => 46,  118 => 44,  114 => 42,  112 => 41,  109 => 40,  103 => 38,  97 => 35,  92 => 34,  90 => 33,  85 => 30,  83 => 29,  80 => 28,  73 => 25,  67 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 15,  48 => 14,  44 => 12,  40 => 11,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
