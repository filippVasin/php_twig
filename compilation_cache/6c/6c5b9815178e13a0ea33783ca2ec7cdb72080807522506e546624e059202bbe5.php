<?php

/* list.html */
class __TwigTemplate_7f25049f3825fa5d7c09636769f2f4767736a48526f24ce95511e979d1cce3df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "list.html", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"row\">
    <div class=\"col\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"col-md-auto\">

    </div>
    <div class=\"col col-lg-2\">
        <a href=\"logout.php\">Выйти</a>
    </div>
</div>

<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\" >
    <input type=\"file\" name=\"image\">
    <button type=\"submit\" class=\"btn btn-primary\">Загрузить картинку</button>
</form>

";
        // line 21
        $this->loadTemplate("errors.html", "list.html", 21)->display($context);
        // line 22
        $this->loadTemplate("message.html", "list.html", 22)->display($context);
        // line 23
        echo "
<table class=\"table table-borderless\">
    <thead>
    <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Имя</th>
        <th scope=\"col\">user_id</th>
        <th scope=\"col\">Действие</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 35
            echo "         <tr>
            <th scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "</th>
            <th scope=\"row\"><a class=\"fancybox\" rel=\"group\" href=\"upload/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array()), "html", null, true);
            echo "\"><img src=\"upload/min_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array()), "html", null, true);
            echo "\" alt=\"\" /></a></th>
            <th scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "user_id", array()), "html", null, true);
            echo "</th>
            <th scope=\"row\"><a href=\"delete.php?id=";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "\">Удалить</a></th>
         </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </tbody>
</table>


<!--<script type=\"text/javascript\">-->
    <!--\$(document).ready(function() {-->
        <!--\$(\".fancybox\").fancybox();-->
    <!--});-->
<!--</script>-->

<script src=\"//code.jquery.com/jquery-3.3.1.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css\" />
<script src=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  92 => 39,  88 => 38,  82 => 37,  78 => 36,  75 => 35,  71 => 34,  58 => 23,  56 => 22,  54 => 21,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list.html", "/var/www/html/views/list.html");
    }
}
