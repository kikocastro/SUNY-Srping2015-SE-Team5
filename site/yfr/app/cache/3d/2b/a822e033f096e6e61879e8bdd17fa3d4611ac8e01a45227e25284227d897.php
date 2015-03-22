<?php

/* _base/_listing.twig */
class __TwigTemplate_3d2ba822e033f096e6e61879e8bdd17fa3d4611ac8e01a45227e25284227d897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->env->loadTemplate("_macro/_macro.twig");
        // line 2
        echo "
";
        // line 4
        if (((( !(isset($context["compact"]) ? $context["compact"] : null) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null)))) && ($this->env->getExtension('Bolt')->request("order") == ""))) {
            // line 5
            echo "    ";
            if ( !$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "</tbody>";
            }
            // line 6
            echo "    <tbody ";
            if ($this->env->getExtension('Bolt')->isAllowed("edit", (isset($context["contenttype"]) ? $context["contenttype"] : null))) {
                echo "class=\"sortable\"";
            }
            echo ">
    <tr class=\"grouping\">
        <th colspan=\"";
            // line 8
            $this->displayBlock('listing_columns', $context, $blocks);
            echo "\">
            <h3 ";
            // line 9
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "class=\"first\"";
            }
            echo ">
                ";
            // line 10
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array())) {
                // line 11
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 13
                echo "                    ";
                echo $this->env->getExtension('Bolt')->trans("(no group)");
                echo "
                ";
            }
            // line 15
            echo "            </h3>
        </th>
    </tr>
";
        }
        // line 19
        echo "
";
        // line 21
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))) && ($this->env->getExtension('Bolt')->request("order") == ""))))) {
            // line 22
            echo "    ";
            $context["lastgroup"] = (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array()))) : (""));
            // line 23
            echo "    ";
            if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array())))) {
                // line 24
                echo "        ";
                $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), "filter", array())) . "&");
                // line 25
                echo "    ";
            } else {
                // line 26
                echo "        ";
                $context["filter"] = "";
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            $context["link"] = (("?" . (isset($context["filter"]) ? $context["filter"] : null)) . "order=");
            // line 30
            echo "    <tr>
        ";
            // line 31
            $this->displayBlock('listing_header', $context, $blocks);
            // line 50
            echo "    </tr>
";
        }
        // line 52
        echo "
<tr ";
        // line 53
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        echo " id=\"item_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 54
        $this->displayBlock('listing_id', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('listing_content', $context, $blocks);
        // line 83
        echo "
    ";
        // line 84
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            // line 85
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 104
            echo "    ";
        }
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 194
        echo "
</tr>
";
    }

    // line 8
    public function block_listing_columns($context, array $blocks = array())
    {
        echo "6";
    }

    // line 31
    public function block_listing_header($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["editable"]) ? $context["editable"] : null))) {
            // line 33
            echo "            <th class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\" title=\"";
            echo $this->env->getExtension('Bolt')->trans("Select all");
            echo "\" /></th>
        ";
        }
        // line 35
        echo "
        <th class=\"hidden-xs\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "id")) {
            echo "-";
        }
        echo "id\">
            ";
        // line 37
        echo $this->env->getExtension('Bolt')->trans("Id");
        echo "
        </a></th>

        <th style=\"width:80%\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method"))) {
            echo "-";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method"), "html", null, true);
        echo "\">
            ";
        // line 41
        echo $this->env->getExtension('Bolt')->trans("Title");
        echo " / ";
        echo $this->env->getExtension('Bolt')->trans("Excerpt");
        echo "
        </a></th>

        <th>&nbsp;</th>

        <th class=\"username hidden-xs\"><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "datecreated")) {
            echo "-";
        }
        echo "datecreated\">";
        echo $this->env->getExtension('Bolt')->trans("Meta");
        echo "</a></th>

        <th><a href=\"?\">";
        // line 48
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</a></th>
        ";
    }

    // line 54
    public function block_listing_id($context, array $blocks = array())
    {
        // line 55
        echo "
        ";
        // line 56
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["editable"]) ? $context["editable"] : null))) {
            echo "<td class=\"check hidden-xs\">";
            if ($this->env->getExtension('Bolt')->isAllowed("delete", (isset($context["contenttype"]) ? $context["contenttype"] : null))) {
                echo "<input type=\"checkbox\" name=\"checkRow\" />";
            }
            echo "</td>";
        }
        // line 57
        echo "        <td class=\"id hidden-xs\">№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "</td>

    ";
    }

    // line 61
    public function block_listing_content($context, array $blocks = array())
    {
        // line 62
        echo "        <td class=\"excerpt ";
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            echo "large";
        }
        echo "\"><span>
            <strong class=\"visible-xs\">№ ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo ". </strong>
            <strong>
                ";
        // line 65
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 66
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
            echo "\">
                        ";
            // line 67
            echo (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>")));
            echo "
                    </a>
                ";
        } else {
            // line 70
            echo "                     <strong>
                        ";
            // line 71
            echo (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>")));
            echo "
                    </strong>
                 ";
        }
        // line 74
        echo "            </strong>
            ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => (isset($context["excerptlength"]) ? $context["excerptlength"] : null)), "method"), "html", null, true);
        echo "
                        </span></td>
        <td class=\"listthumb\">
            ";
        // line 78
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()))) {
            // line 79
            echo "                ";
            echo $this->env->getExtension('Bolt')->popup($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), ((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75), "c");
            echo "
            ";
        }
        // line 81
        echo "        </td>
    ";
    }

    // line 85
    public function block_listing_meta($context, array $blocks = array())
    {
        // line 86
        echo "            <td class=\"username hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 88
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 89
            echo "                    ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                ";
        } else {
            // line 91
            echo "                    <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), "html", null, true);
            echo " </s>
                ";
        }
        // line 92
        echo "<br>
                ";
        // line 93
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "timed")) {
            // line 94
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "</time><br>
                ";
        } else {
            // line 96
            echo "                    <i class=\"fa fa-circle status-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
            echo " fa-fw\"></i> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "d/m/Y"), "html", null, true);
            echo "<br>
                ";
        }
        // line 98
        echo "
                ";
        // line 99
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true) &&  !($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array()) === false))) {
            // line 100
            echo "                    <span class=\"sorthandle\"><i class=\"fa fa-sort fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Order: %sort%", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array())));
            echo "</span> <br>
                ";
        }
        // line 102
        echo "            </td>
        ";
    }

    // line 106
    public function block_listing_actions($context, array $blocks = array())
    {
        // line 107
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 109
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 110
            echo "                <a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-edit\"></i> ";
            // line 111
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "
                </a>
                ";
        }
        // line 114
        echo "                <button class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">

                    <i class=\"fa fa-info-sign\"></i>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu pull-right\">
                ";
        // line 120
        if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "published") && $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array(), "any", true, true))) {
            // line 121
            echo "                    <li>
                        <a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                            <i class=\"fa fa-external-link-square\"></i> ";
            // line 123
            echo $this->env->getExtension('Bolt')->trans("View on site");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 127
        echo "                ";
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation", array())) {
            // line 128
            echo "                    <li>
                        <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-link\"></i> ";
            // line 130
            echo $this->env->getExtension('Bolt')->trans("View related content");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 134
        echo "

                ";
        // line 136
        $context["__internal_7dbed9c5db807c7bfd634a23654e2fc67717e488a57dcf9971db83f959bdb48b"] = $this;
        // line 137
        echo "                ";
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 138
            echo "                    ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
                // line 139
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed("publish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 140
                    echo "
                        <li>";
                    // line 141
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "publish", "fa-circle status-published", $this->env->getExtension('Bolt')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))));
                    echo "</li>
                        ";
                }
                // line 143
                echo "                    ";
            } else {
                // line 144
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed("depublish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 145
                    echo "                        <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "held", "fa-circle status-held", $this->env->getExtension('Bolt')->trans("Change status to 'held'"));
                    echo "</li>
                        <li>";
                    // line 146
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "draft", "fa-circle status-draft", $this->env->getExtension('Bolt')->trans("Change status to 'draft'"));
                    echo "</li>

                        ";
                }
                // line 149
                echo "                    ";
            }
            // line 150
            echo "                    ";
            if ($this->env->getExtension('Bolt')->isAllowed("create", (isset($context["content"]) ? $context["content"] : null))) {
                // line 151
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "duplicate" => 1)), "html", null, true);
                echo "\">
                        <i class=\"fa fa-copy\"></i> ";
                // line 152
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array())));
                echo "</a></li>
                    ";
            }
            // line 154
            echo "                    ";
            if ($this->env->getExtension('Bolt')->isAllowed("delete", (isset($context["content"]) ? $context["content"] : null))) {
                // line 155
                echo "                    <li>";
                echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "delete", "fa-trash", $this->env->getExtension('Bolt')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 157
(isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 158
(isset($context["content"]) ? $context["content"] : null), "getTitle", array())) . "'?"));
                echo "
                    </li>

                    ";
            }
            // line 162
            echo "                    <li class=\"divider\"></li>
                ";
        }
        // line 164
        echo "                    <li><a class=\"nolink\">";
        echo $this->env->getExtension('Bolt')->trans("Author:");
        echo " <strong><i class=\"fa fa-user\"></i>
                        ";
        // line 165
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 166
            echo "                            ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                        ";
        } else {
            // line 168
            echo "                            <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), "html", null, true);
            echo " </s>
                        ";
        }
        // line 169
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 170
        echo $this->env->getExtension('Bolt')->trans("Current status:");
        echo "
                        <strong>";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 172
        echo $this->env->getExtension('Bolt')->trans("Slug:");
        echo "
                        <code title=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), 24);
        echo "</code></a></li>
                    <li><a class=\"nolink\">";
        // line 174
        echo $this->env->getExtension('Bolt')->trans("Created on:");
        echo "
                        <i class=\"fa fa-asterisk\"></i> ";
        // line 175
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 176
        echo $this->env->getExtension('Bolt')->trans("Published on:");
        echo "
                        <i class=\"fa fa-calendar\"></i> ";
        // line 177
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 178
        echo $this->env->getExtension('Bolt')->trans("Last edited on:");
        echo "
                        <i class=\"fa fa-refresh\"></i> ";
        // line 179
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    ";
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array()));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 181
            echo "                        ";
            if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                // line 182
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 183
                echo $this->env->getExtension('Bolt')->trim(twig_join_filter($context["values"], ", "), 24);
                echo "</a></li>
                        ";
            } else {
                // line 185
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "singular_name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 186
                echo $this->env->getExtension('Bolt')->trim($this->env->getExtension('Bolt')->first($context["values"]), 24);
                echo "</a></li>
                        ";
            }
            // line 188
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                </ul>
            </div>

        </td>
    ";
    }

    public function getTemplateName()
    {
        return "_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 189,  588 => 188,  583 => 186,  578 => 185,  573 => 183,  568 => 182,  565 => 181,  561 => 180,  557 => 179,  553 => 178,  549 => 177,  545 => 176,  541 => 175,  537 => 174,  531 => 173,  527 => 172,  523 => 171,  519 => 170,  516 => 169,  510 => 168,  504 => 166,  502 => 165,  497 => 164,  493 => 162,  486 => 158,  485 => 157,  483 => 155,  480 => 154,  475 => 152,  470 => 151,  467 => 150,  464 => 149,  458 => 146,  453 => 145,  450 => 144,  447 => 143,  442 => 141,  439 => 140,  436 => 139,  433 => 138,  430 => 137,  428 => 136,  424 => 134,  417 => 130,  413 => 129,  410 => 128,  407 => 127,  400 => 123,  396 => 122,  393 => 121,  391 => 120,  383 => 114,  377 => 111,  372 => 110,  370 => 109,  366 => 107,  363 => 106,  358 => 102,  352 => 100,  350 => 99,  347 => 98,  339 => 96,  329 => 94,  327 => 93,  324 => 92,  318 => 91,  312 => 89,  310 => 88,  306 => 86,  303 => 85,  298 => 81,  292 => 79,  290 => 78,  284 => 75,  281 => 74,  275 => 71,  272 => 70,  266 => 67,  259 => 66,  257 => 65,  252 => 63,  245 => 62,  242 => 61,  234 => 57,  226 => 56,  223 => 55,  220 => 54,  214 => 48,  204 => 46,  194 => 41,  186 => 40,  180 => 37,  173 => 36,  170 => 35,  164 => 33,  161 => 32,  158 => 31,  152 => 8,  146 => 194,  144 => 106,  141 => 105,  138 => 104,  135 => 85,  133 => 84,  130 => 83,  128 => 61,  125 => 60,  123 => 54,  115 => 53,  112 => 52,  108 => 50,  106 => 31,  103 => 30,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  78 => 21,  75 => 19,  69 => 15,  63 => 13,  57 => 11,  55 => 10,  49 => 9,  45 => 8,  37 => 6,  32 => 5,  30 => 4,  27 => 2,  25 => 1,);
    }
}
