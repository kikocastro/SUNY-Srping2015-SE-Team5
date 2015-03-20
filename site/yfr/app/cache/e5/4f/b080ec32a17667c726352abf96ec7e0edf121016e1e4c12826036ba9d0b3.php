<?php

/* email/firstuser.twig */
class __TwigTemplate_e54fb080ec32a17667c726352abf96ec7e0edf121016e1e4c12826036ba9d0b3 extends Twig_Template
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
        echo "<p style=\"color: #204460;\"><strong>Congratulations! Bolt Set-up Complete</strong></p>
<p></p>
<p>
    If you have recived this e-mail, your new Bolt site '";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["sitename"]) ? $context["sitename"] : null), "html", null, true);
        echo "' is up
    and running and your outbound e-mail settings are correct.
</p>
<p></p>
<p>
    Thank you from all of the people that contribute to creating Bolt, we
    welcome your new site and hope that you enjoy using it as much as we enjoy
    creating it!
</p>
";
    }

    public function getTemplateName()
    {
        return "email/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
