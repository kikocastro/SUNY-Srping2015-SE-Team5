<?php

/* editcontent/_taxonomies.twig */
class __TwigTemplate_aad472c28b5de122185e62bcded25a626bf4f9258cadac5bc44017dde5cb4041 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 4
            echo "    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "\"
                  data-content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
            // line 12
            echo "    <div class=\"form-group\">
        <fieldset>

        ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method", false, true), $context["taxonomyslug"], array(), "array", true, true)) {
                // line 16
                echo "
            ";
                // line 17
                $context["taxonomy"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array");
                // line 18
                echo "
            ";
                // line 20
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array())))) {
                    // line 21
                    echo "                <div class=\"prefix\">
                    ";
                    // line 22
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array()));
                    echo "
                </div>
            ";
                }
                // line 25
                echo "
            ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "label", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name", array()), 1 => "", 2 => "col-sm-3 control-label", 3 => ("taxonomy-" . $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()))), "method"), "html", null, true);
                echo "
            <div class=\"col-sm-9\">

            ";
                // line 30
                echo "
            ";
                // line 31
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "tags")) {
                    // line 32
                    echo "
                ";
                    // line 33
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array", true, true)) {
                        // line 34
                        echo "                    ";
                        $context["tags"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array"), ",");
                        // line 35
                        echo "                ";
                    } else {
                        // line 36
                        echo "                    ";
                        $context["tags"] = "";
                        // line 37
                        echo "                ";
                    }
                    // line 38
                    echo "
                <input type=\"text\" name=\"taxonomy[";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "]\" id=\"taxonomy-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null), "html", null, true);
                    echo "\" style=\"width: 100%;\" />

                <div class=\"tagcloud\" id=\"tagcloud-";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "\"></div>
                <script>
                \$(function() {

                    // load all tags
                    \$.ajax({
                        url: \"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
                    echo "async/tags/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "\",
                        dataType: \"json\",
                        success: function(data) {
                            var results = [];
                            \$.each(data, function(index, item){
                                results.push( item.slug );
                            });
                            \$('#taxonomy-";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "').select2({tags: results, minimumInputLength: 1, tokenSeparators: [\",\", \" \"]});
                        },
                        error: function() {
                            \$('#taxonomy-";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "').select2({tags: [], minimumInputLength: 1, tokenSeparators: [\",\", \" \"]});
                        }
                    });

                    ";
                    // line 61
                    if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "tagcloud", array())) {
                        // line 62
                        echo "                    // popular tags
                    \$.ajax({
                        url: \"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
                        echo "async/populartags/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\",
                        dataType: \"json\",
                        data : {limit: 40},
                        success: function(data) {
                            if (data.length > 0) {
                                \$.each(data, function(index, item){
                                    \$(\"#tagcloud-";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\").append('<a href=\"#\" rel=\"' + item.count + '\">' + item.slug + '</a>');
                                });
                                \$(\"#tagcloud-";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo " a\").on('click', function (e) {
                                    e.preventDefault();
                                    var data = \$(\"#taxonomy-";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\").select2(\"data\")
                                    data.push({id:\$(this).text(), text:\$(this).text()});
                                    \$(\"#taxonomy-";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\").select2(\"data\", data);
                                });

                                \$.fn.tagcloud.defaults = {
                                    size: {start: 12, end: 22, unit: 'px'},
                                    color: {start: '#888', end: '#194770'}
                                };
                                \$('#tagcloud-";
                        // line 83
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo " a').tagcloud();
                            }
                        }
                    });
                    ";
                    }
                    // line 88
                    echo "
                });
                </script>

            ";
                }
                // line 93
                echo "
            ";
                // line 95
                echo "
            ";
                // line 96
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "categories")) {
                    // line 97
                    echo "
                ";
                    // line 98
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()) == 1))) {
                        // line 99
                        echo "                <select name=\"taxonomy[";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "][]\" id=\"taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" class=\"form-control\" multiple>
                ";
                    } else {
                        // line 101
                        echo "                <select name=\"taxonomy[";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "][]\" id=\"taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" class=\"form-control\">
                    <option value=\"\">";
                        // line 102
                        echo $this->env->getExtension('Bolt')->trans("(no category)");
                        echo "</option>
                    <option value=\"\" disabled>-----------</option>
                ";
                    }
                    // line 105
                    echo "
                ";
                    // line 106
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()));
                    foreach ($context['_seq'] as $context["slug"] => $context["cat"]) {
                        // line 107
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array", true, true) && twig_in_filter($context["cat"], $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array")))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['slug'], $context['cat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "
                </select>

                ";
                    // line 112
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()) == 1))) {
                        // line 113
                        echo "                <label><span class=\"left\" style=\"line-height: 1px;\">&nbsp;</span></label>
                <div style=\"margin-top: -14px;\">";
                        // line 115
                        echo "                    <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo " option').prop('selected', true); return false;\">
                        <i class=\"fa fa-fw fa-check-square-o\"></i>";
                        // line 116
                        echo $this->env->getExtension('Bolt')->trans("Select all");
                        echo "
                    </a>
                    <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#taxonomy-";
                        // line 118
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo " option').prop('selected', false); return false;\">
                        <i class=\"fa fa-fw fa-square-o\"></i>";
                        // line 119
                        echo $this->env->getExtension('Bolt')->trans("Select none");
                        echo "
                    </a>
                </div>
                ";
                    }
                    // line 123
                    echo "
            ";
                }
                // line 125
                echo "
            ";
                // line 127
                echo "
            ";
                // line 128
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "grouping")) {
                    // line 129
                    echo "
                <select name=\"taxonomy[";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "][]\" id=\"taxonomy-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                    echo "\" class=\"narrow form-control pull-left\">
                    <option value=\"\">";
                    // line 131
                    echo $this->env->getExtension('Bolt')->trans("(no group)");
                    echo "</option>
                    <option value=\"\" disabled>-----------</option>
                ";
                    // line 133
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()));
                    foreach ($context['_seq'] as $context["slug"] => $context["group"]) {
                        // line 134
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                        echo "\" ";
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array", true, true) && twig_in_filter($context["group"], $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array"))) || (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), array(), "array", true, true) && $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "default", array(), "any", true, true)) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "default", array()) == $context["slug"])))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["group"], "html", null, true);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['slug'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "                </select>

                ";
                    // line 138
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array()) == true))) {
                        // line 139
                        echo "                    <label for=\"taxonomy-order-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" class=\" pull-left\" style=\"margin: 6px 8px 0;\">- Order:</label>
                    ";
                        // line 140
                        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "sortorder", array())) {
                            // line 141
                            echo "                        ";
                            $context["sortorder"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "sortorder", array());
                            // line 142
                            echo "                    ";
                        } else {
                            // line 143
                            echo "                        ";
                            $context["sortorder"] = 0;
                            // line 144
                            echo "                    ";
                        }
                        // line 145
                        echo "                    <input type=\"number\" name=\"taxonomy-order[";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "]\" id=\"taxonomy-order-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "html", null, true);
                        echo "\" step=\"1\"
                           value=\"";
                        // line 146
                        echo twig_escape_filter($this->env, (isset($context["sortorder"]) ? $context["sortorder"] : null), "html", null, true);
                        echo "\" class=\"verynarrow form-control pull-left\">
                ";
                    }
                    // line 148
                    echo "
            ";
                }
                // line 150
                echo "
            </div>

            ";
                // line 154
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array())))) {
                    // line 155
                    echo "                <div class=\"postfix\">
                    ";
                    // line 156
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array()));
                    echo "
                </div>
            ";
                }
                // line 159
                echo "
        ";
            }
            // line 161
            echo "
        </fieldset>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "
";
        // line 166
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()) && twig_in_filter("taxonomy", $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "groups", array())))) {
            // line 167
            echo "    ";
            $this->env->loadTemplate("editcontent/_fields.twig")->display($context);
        }
        // line 169
        echo "
";
        // line 170
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 171
            echo "    <hr>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_taxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 171,  426 => 170,  423 => 169,  419 => 167,  417 => 166,  414 => 165,  405 => 161,  401 => 159,  395 => 156,  392 => 155,  389 => 154,  384 => 150,  380 => 148,  375 => 146,  368 => 145,  365 => 144,  362 => 143,  359 => 142,  356 => 141,  354 => 140,  349 => 139,  347 => 138,  343 => 136,  328 => 134,  324 => 133,  319 => 131,  313 => 130,  310 => 129,  308 => 128,  305 => 127,  302 => 125,  298 => 123,  291 => 119,  287 => 118,  282 => 116,  277 => 115,  274 => 113,  272 => 112,  267 => 109,  252 => 107,  248 => 106,  245 => 105,  239 => 102,  232 => 101,  224 => 99,  222 => 98,  219 => 97,  217 => 96,  214 => 95,  211 => 93,  204 => 88,  196 => 83,  186 => 76,  181 => 74,  176 => 72,  171 => 70,  160 => 64,  156 => 62,  154 => 61,  147 => 57,  141 => 54,  129 => 47,  120 => 41,  111 => 39,  108 => 38,  105 => 37,  102 => 36,  99 => 35,  96 => 34,  94 => 33,  91 => 32,  89 => 31,  86 => 30,  80 => 26,  77 => 25,  71 => 22,  68 => 21,  65 => 20,  62 => 18,  60 => 17,  57 => 16,  55 => 15,  50 => 12,  46 => 11,  43 => 10,  35 => 7,  31 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
