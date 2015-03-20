<?php

/* login/login.twig */
class __TwigTemplate_56d4f975f6256e6653f0b2da97eaaa09581cbcf3aaea828da010ccdb7791ad5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("_base/_page-no_nav.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-no_nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["form_class"] = "login-block center-block";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("page.login.title");
    }

    // line 8
    public function block_page_main($context, array $blocks = array())
    {
        // line 9
        echo "
    <form method=\"post\" role=\"form\">

        <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 13
        echo $this->env->getExtension('Bolt')->trans("page.login.label.username");
        echo "</label>
            <div class=\"input-group\">
                <label for=\"username\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-user\"></i></label>
                <input id=\"username\" class=\"form-control\" type=\"text\" autofocus=\"true\" name=\"username\" placeholder=\"";
        // line 16
        echo $this->env->getExtension('Bolt')->trans("page.login.placeholder.password");
        echo " …\" ";
        if (array_key_exists("username", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
            echo "\"";
        }
        echo " required>
            </div>
        </div>

        <div class=\"form-group password-group\">
            <label for=\"password\" class=\"control-label\">
                ";
        // line 22
        echo $this->env->getExtension('Bolt')->trans("page.login.label.password");
        echo " &nbsp;
                <span class=\"togglepass show-password\"><i class=\"fa fa-fw fa-eye\"></i> ";
        // line 23
        echo $this->env->getExtension('Bolt')->trans("page.login.password-show");
        echo "</span>
                <span class=\"togglepass hide-password\"><i class=\"fa fa-fw fa-eye-slash\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt')->trans("page.login.password-hide");
        echo "</span>
            </label>
            <div class=\"input-group\">
                <label for=\"password\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-key\"></i></label>
                <input id=\"password\" class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"";
        // line 28
        echo $this->env->getExtension('Bolt')->trans("users.your-password");
        echo " …\">
            </div>
        </div>

        <p class=\"login-group\">
            <button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"login\"><i class=\"icon-signin\"></i> ";
        // line 33
        echo $this->env->getExtension('Bolt')->trans("page.login.button.log-on");
        echo "</button>
            <button type=\"button\" class=\"btn btn-link login-forgot\"> ";
        // line 34
        echo $this->env->getExtension('Bolt')->trans("page.login.button.forgot-password");
        echo "</button>
        </p>
        <p style=\"display: none;\" class=\"reset-group\">
            <button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"reset\"><i class=\"icon-envelope\"></i> ";
        // line 37
        echo $this->env->getExtension('Bolt')->trans("page.login.button.reset-password");
        echo "</button>
            <button type=\"button\" class=\"btn btn-link login-remembered\"> ";
        // line 38
        echo $this->env->getExtension('Bolt')->trans("page.login.button.back");
        echo "</button>
        </p>

        <p class=\"cookie-notice alert alert-danger\">
            ";
        // line 42
        echo $this->env->getExtension('Bolt')->trans("page.login.cookies-required");
        echo "
        </p>

    </form>

";
    }

    public function getTemplateName()
    {
        return "login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  113 => 38,  109 => 37,  103 => 34,  99 => 33,  91 => 28,  84 => 24,  80 => 23,  76 => 22,  61 => 16,  55 => 13,  49 => 9,  46 => 8,  40 => 6,  36 => 2,  34 => 4,  11 => 2,);
    }
}
