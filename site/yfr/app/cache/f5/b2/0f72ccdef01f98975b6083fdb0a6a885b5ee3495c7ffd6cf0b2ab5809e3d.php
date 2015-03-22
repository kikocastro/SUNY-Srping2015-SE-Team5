<?php

/* files/_folders.twig */
class __TwigTemplate_f5b20f72ccdef01f98975b6083fdb0a6a885b5ee3495c7ffd6cf0b2ab5809e3d extends Twig_Template
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
        echo $this->env->getExtension('Bolt')->trans("Folders");
        echo "</th>
            <th colspan=\"2\">";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("Modified");
        echo "</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folders", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 11
            echo "            <tr>
                <td>
                    <i class=\"fa fa-fw fa-folder-open-o\"></i>
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => $this->getAttribute($context["folder"], "newpath", array()), "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()))), "html", null, true);
            echo "\">
                        <b>";
            // line 15
            echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["folder"], "foldername", array()), 60));
            echo "/</b>
                    </a>
                </td>
                <td>
                    <time class=\"moment\" datetime=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["folder"], "modified", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "modified", array()), "html", null, true);
            echo "\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "modified", array()), "html", null, true);
            echo "
                    </time>
                </td>
                <td class=\"actions\">
                ";
            // line 24
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()) != false)) {
                // line 25
                echo "                    <div class=\"btn-group\">
                    ";
                // line 26
                if ($this->getAttribute($context["folder"], "writable", array())) {
                    // line 27
                    echo "
                        <a class=\"btn dropdown-toggle btn-default btn-sm\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-info-circle\"></i>
                            ";
                    // line 30
                    echo $this->env->getExtension('Bolt')->trans("Options");
                    echo "
                            <span class=\"caret\"></span>
                        </a>

                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"#\"
                                   data-action=\"bolt.folders.rename('";
                    // line 37
                    echo $this->env->getExtension('Bolt')->trans("Please enter a new folder name");
                    echo "',
                                                                    '";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                    echo "',
                                                                    '";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->last(twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()))), "html", null, true);
                    echo "',
                                                                    '";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "foldername", array()), "html", null, true);
                    echo "',
                                                                    this);\">

                                    <i class=\"fa fa-keyboard-o\"></i>
                                    ";
                    // line 44
                    echo $this->env->getExtension('Bolt')->trans("Rename %foldername%", array("%foldername%" => $this->getAttribute($context["folder"], "foldername", array())));
                    echo "
                                </a>
                                <a href=\"#\"
                                   class=\"confirm\"
                                   data-confirm=\"";
                    // line 48
                    echo $this->env->getExtension('Bolt')->trans("Do you really want to delete %foldername%?", array("%foldername%" => $this->getAttribute(                    // line 49
$context["folder"], "foldername", array())));
                    echo "\"
                                   data-action=\"bolt.folders.remove('";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                    echo "',
                                                                    '";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->last(twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()))), "html", null, true);
                    echo "',
                                                                    '";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "foldername", array()), "html", null, true);
                    echo "',
                                                                    this);\">

                                    <i class=\"fa fa-ban\"></i>
                                    ";
                    // line 56
                    echo $this->env->getExtension('Bolt')->trans("Delete %foldername%", array("%foldername%" => $this->getAttribute($context["folder"], "foldername", array())));
                    echo "
                                </a>
                            </li>
                        </ul>
                    ";
                } else {
                    // line 61
                    echo "                        <a class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-exclamation-circle\"></i>
                            ";
                    // line 63
                    echo $this->env->getExtension('Bolt')->trans("Folder permissions insufficient");
                    echo "
                        </a>
                    ";
                }
                // line 66
                echo "                    </div>
                ";
            }
            // line 68
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "files/_folders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 71,  159 => 68,  155 => 66,  149 => 63,  145 => 61,  137 => 56,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  117 => 48,  110 => 44,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  81 => 30,  76 => 27,  74 => 26,  71 => 25,  69 => 24,  62 => 20,  56 => 19,  49 => 15,  45 => 14,  40 => 11,  36 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }
}
