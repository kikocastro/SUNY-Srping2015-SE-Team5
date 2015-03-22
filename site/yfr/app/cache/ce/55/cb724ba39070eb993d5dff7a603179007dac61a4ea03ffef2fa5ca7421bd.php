<?php

/* extend/extend.twig */
class __TwigTemplate_ce55cb724ba39070eb993d5dff7a603179007dac61a4ea03ffef2fa5ca7421bd extends Twig_Template
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
        echo "ExtendBolt";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Extend %boltname%", array("%boltname%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/name"), "method")));
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
        echo "    ";
        $this->env->loadTemplate("extend/_package.twig")->display($context);
        // line 14
        echo "
    ";
        // line 15
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 16
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">
                    <button class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                echo "                        ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 27
        echo "
    <div class=\"row extend-bolt-container\">
        <div class=\"col-md-9\">

            ";
        // line 31
        if ( !(isset($context["writeable"]) ? $context["writeable"] : null)) {
            // line 32
            echo "            ";
            $context["msg"] = $this->env->getExtension('Bolt')->trans(((("The extensions directory (<code>%dir%</code>) does not exist, or it is not writable. " . "This means that you cannot manage Bolt extensions through the backend; consider ") . "managing extensions manually, or changing file permissions to allow Bolt ") . "write access to (<code>%dir%</code>)."), array("%dir%" =>             // line 35
(isset($context["extensionsPath"]) ? $context["extensionsPath"] : null)));
            // line 36
            echo "            <div class=\"alert alert-warning\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 38
            echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
            echo "
            </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if ( !(isset($context["enabled"]) ? $context["enabled"] : null)) {
            // line 43
            echo "            ";
            $context["msg"] = $this->env->getExtension('Bolt')->trans((("Extensions loading has been disabled by an administrator in the %config% file. " . "You may install, update and uninstall extensions but they will not load until this setting ") . "has been changed."), array("%config%" => $this->env->getExtension('Bolt')->ymllink("config.yml")));
            // line 46
            echo "            <div class=\"alert alert-warning\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 48
            echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
            echo "
            </div>
            ";
        }
        // line 51
        echo "
            ";
        // line 52
        $this->env->loadTemplate("_sub/_messages.twig")->display($context);
        // line 53
        echo "
            <div class=\"update-container hide-block\">
                <h3>";
        // line 55
        echo $this->env->getExtension('Bolt')->trans("Updates");
        echo "</h3>
                ";
        // line 56
        if ((isset($context["writeable"]) ? $context["writeable"] : null)) {
            // line 57
            echo "                <pre class=\"update-output console\">";
            echo $this->env->getExtension('Bolt')->trans("Checking for available updates (this may take up to 60 seconds)");
            echo "..</pre>
                ";
        } else {
            // line 59
            echo "                <pre class=\"update-output\">";
            echo $this->env->getExtension('Bolt')->trans("Cannot check for updates in read-only mode");
            echo "</pre>
                ";
        }
        // line 61
        echo "                <div class=\"update-list hide-block\">
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 65
        echo $this->env->getExtension('Bolt')->trans("Extension");
        echo "</th>
                                <th>";
        // line 66
        echo $this->env->getExtension('Bolt')->trans("Version");
        echo "</th>
                                <th>";
        // line 67
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"update-list-items\">

                        </tbody>
                    </table>
                </div>
            </div>
            <section class=\"installed-container\">
                <h2>";
        // line 77
        echo $this->env->getExtension('Bolt')->trans("Your Currently Installed Extensions");
        echo "</h2>
                ";
        // line 78
        if ((isset($context["writeable"]) ? $context["writeable"] : null)) {
            // line 79
            echo "                <pre class=\"installed console\" data-request=\"installed\">";
            echo $this->env->getExtension('Bolt')->trans("Checking installed packages");
            echo "..</pre>
                ";
        } else {
            // line 81
            echo "                <pre class=\"installed\">";
            echo $this->env->getExtension('Bolt')->trans("Cannot check installed packages in read-only mode");
            echo "</pre>
                ";
        }
        // line 83
        echo "                <div class=\"installed-list hide-block\">
                    <div class=\"installed-list-items\">

                    </div>
                </div>
            </section>

            <!-- Modal for readmes -->
            <div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                  </div>
                  <div class=\"modal-body\">
                    ...
                  </div>
                </div>
              </div>
            </div>

            <hr />
            <section>
                <h2>";
        // line 107
        echo $this->env->getExtension('Bolt')->trans("Install a new Extension");
        echo "</h2>
                <p>
                    ";
        // line 109
        if (((isset($context["writeable"]) ? $context["writeable"] : null) && (isset($context["online"]) ? $context["online"] : null))) {
            // line 110
            echo "                    ";
            echo $this->env->getExtension('Bolt')->trans("Add a new extension using the form below.");
            echo "
                    ";
        }
        // line 112
        echo "                    ";
        echo $this->env->getExtension('Bolt')->trans("You can discover new extensions by visiting");
        echo "
                    <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : null), "html", null, true);
        echo "</a>
                </p>
                ";
        // line 115
        if (((isset($context["writeable"]) ? $context["writeable"] : null) && (isset($context["online"]) ? $context["online"] : null))) {
            // line 116
            echo "                <div class=\"install-container\">
                        <div class=\"auto-search hide-block\"></div>
                        <input type=\"text\" name=\"check-package\" placeholder=\"Extension name eg: bolt/widget\">
                        <a class=\"btn btn-tertiary check-package\" data-request=\"check-package\" data-toggle=\"modal\" data-target=\"#installModal\">
                            <i class=\"icon-gears\"></i> ";
            // line 120
            echo $this->env->getExtension('Bolt')->trans("Browse Versions");
            echo "
                        </a>

                        <div class=\"modal fade\" id=\"installModal\" tabindex=\"-1\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    ";
            // line 126
            $this->env->loadTemplate("extend/install-package.twig")->display($context);
            // line 127
            echo "                                </div>
                            </div>
                        </div>
                </div>
                ";
        }
        // line 132
        echo "            </section>

        </div>

        <aside class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>Extensions Options</div>
                <div class=\"panel-body\">
                        <p><strong>";
        // line 140
        echo $this->env->getExtension('Bolt')->trans("Check for updates");
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary";
        // line 142
        if (( !(isset($context["writeable"]) ? $context["writeable"] : null) ||  !(isset($context["online"]) ? $context["online"] : null))) {
            echo " disabled";
        }
        echo "\" data-request=\"update-check\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 143
        echo $this->env->getExtension('Bolt')->trans("Run update check");
        echo "
                            </a>
                        </div>
                        <p>";
        // line 146
        echo $this->env->getExtension('Bolt')->trans("This won't install anything, just show you available updates");
        echo "</p>
                        <hr>
                        <p><strong>";
        // line 148
        echo $this->env->getExtension('Bolt')->trans("Install all updates");
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-primary";
        // line 150
        if (( !(isset($context["writeable"]) ? $context["writeable"] : null) ||  !(isset($context["online"]) ? $context["online"] : null))) {
            echo " disabled";
        }
        echo "\" data-request=\"update-run\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 151
        echo $this->env->getExtension('Bolt')->trans("Run all Updates");
        echo "
                            </a>
                        </div>
                        <p>";
        // line 154
        echo $this->env->getExtension('Bolt')->trans("This will install all available updates.");
        echo "</p>
                        <hr>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-primary";
        // line 157
        if (( !(isset($context["writeable"]) ? $context["writeable"] : null) ||  !(isset($context["online"]) ? $context["online"] : null))) {
            echo " disabled";
        }
        echo "\" data-request=\"install-run\">
                                <i class=\"fa fa-download fa-fw\"></i> ";
        // line 158
        echo $this->env->getExtension('Bolt')->trans("Install all Packages");
        echo "
                            </a>
                        </div>
                        <p>";
        // line 161
        echo $this->env->getExtension('Bolt')->trans("This will make sure all packages listed are installed. Use this if you've recently moved to a new server or if you have manually added an extension.");
        echo "</p>
                </div>
            </div>
        </aside>

    </div>

    <script>
        var site = '";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : null), "html", null, true);
        echo "';
        var baseurl = '";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "bolt", array()), "html", null, true);
        echo "extend/';
        var rootpath = '";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "rootpath", array()), "html", null, true);
        echo "';

        jQuery(document).ready(function(\$) {
            var boltExt = new BoltExtender();
            boltExt.setMessage('badJson', '";
        // line 175
        echo $this->env->getExtension('Bolt')->trans("Malformed JSON response. Ensure no debugging or other code is being added to the response");
        echo "' );
            boltExt.setMessage('confirmRemove', '";
        // line 176
        echo $this->env->getExtension('Bolt')->trans("Please confirm that you want to remove this extension?");
        echo "');
            boltExt.setMessage('copying', '";
        // line 177
        echo $this->env->getExtension('Bolt')->trans("Copying theme assets …");
        echo "');
            boltExt.setMessage('extError', '";
        // line 178
        echo twig_escape_filter($this->env, strtr($this->env->getExtension('Bolt')->trans("Bolt Extension could not be found. Please check at %site% to ensure correct name."), array("%site%" => (isset($context["site"]) ? $context["site"] : null))), "html", null, true);
        echo "' );
            boltExt.setMessage('installAll', '";
        // line 179
        echo $this->env->getExtension('Bolt')->trans("Running install of all packages …");
        echo "');
            boltExt.setMessage('installing', '";
        // line 180
        echo $this->env->getExtension('Bolt')->trans("Preparing to install package …");
        echo "');
            boltExt.setMessage('noStable', '";
        // line 181
        echo $this->env->getExtension('Bolt')->trans("No Stable Versions Available");
        echo "');
            boltExt.setMessage('noTest', '";
        // line 182
        echo $this->env->getExtension('Bolt')->trans("No Test Versions Available");
        echo "');
            boltExt.setMessage('nothtingInstalled', '";
        // line 183
        echo $this->env->getExtension('Bolt')->trans("No Bolt Extensions installed.");
        echo "');
            boltExt.setMessage('overwrite', '";
        // line 184
        echo $this->env->getExtension('Bolt')->trans("This will overwrite any existing files! Are you sure?");
        echo "');
            boltExt.setMessage('removing', '";
        // line 185
        echo $this->env->getExtension('Bolt')->trans("Preparing to remove package …");
        echo "');
            boltExt.setMessage('runningUpdate', '";
        // line 186
        echo $this->env->getExtension('Bolt')->trans("Running update …");
        echo "');
            boltExt.setMessage('updating', '";
        // line 187
        echo $this->env->getExtension('Bolt')->trans("Searching for available updates …");
        echo "');
            boltExt.setMessage('updated', '";
        // line 188
        echo $this->env->getExtension('Bolt')->trans("Everything is up to date!");
        echo "');
            boltExt.setPath('extensionsconfigpath', '";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "extensionsconfigpath", array()), "html", null, true);
        echo "');
            boltExt.setPath('extensionspath', '";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "extensionspath", array()), "html", null, true);
        echo "');
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "extend/extend.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 190,  431 => 189,  427 => 188,  423 => 187,  419 => 186,  415 => 185,  411 => 184,  407 => 183,  403 => 182,  399 => 181,  395 => 180,  391 => 179,  387 => 178,  383 => 177,  379 => 176,  375 => 175,  368 => 171,  364 => 170,  360 => 169,  349 => 161,  343 => 158,  337 => 157,  331 => 154,  325 => 151,  319 => 150,  314 => 148,  309 => 146,  303 => 143,  297 => 142,  292 => 140,  282 => 132,  275 => 127,  273 => 126,  264 => 120,  258 => 116,  256 => 115,  249 => 113,  244 => 112,  238 => 110,  236 => 109,  231 => 107,  205 => 83,  199 => 81,  193 => 79,  191 => 78,  187 => 77,  174 => 67,  170 => 66,  166 => 65,  160 => 61,  154 => 59,  148 => 57,  146 => 56,  142 => 55,  138 => 53,  136 => 52,  133 => 51,  127 => 48,  123 => 46,  120 => 43,  118 => 42,  115 => 41,  109 => 38,  105 => 36,  103 => 35,  101 => 32,  99 => 31,  93 => 27,  87 => 23,  78 => 21,  74 => 20,  68 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  51 => 10,  45 => 7,  39 => 5,  11 => 3,);
    }
}
