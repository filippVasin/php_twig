<?php

/* login.html */
class __TwigTemplate_0b91ad4745005688b8748a09e74c78b1662132649ffa8e632c5c416801057903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "login.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
<form action=\"check.php\" method=\"post\">
    <div class=\"form-group\">
        <label> Логин </label>
        <input type=\"text\"  class=\"form-control\"s name=\"name\" value=
        ";
        // line 9
        if (($this->getAttribute(($context["old"] ?? null), "name", array()) != null)) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "name", array()), "html", null, true);
            echo "
        ";
        }
        // line 12
        echo "        >
    </div>
    <div class=\"form-group\">
        <label> Пароль </label>
        <input type=\"text\"  class=\"form-control\" name=\"password\" value=
        ";
        // line 17
        if (($this->getAttribute(($context["old"] ?? null), "password", array()) != null)) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "password", array()), "html", null, true);
            echo "
        ";
        }
        // line 19
        echo ">
    </div>
    <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-primary\">Отправить</button>
    </div>
</form>

";
        // line 26
        $this->loadTemplate("errors.html", "login.html", 26)->display($context);
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  72 => 26,  63 => 19,  57 => 18,  55 => 17,  48 => 12,  42 => 10,  40 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html", "/var/www/html/views/login.html");
    }
}
