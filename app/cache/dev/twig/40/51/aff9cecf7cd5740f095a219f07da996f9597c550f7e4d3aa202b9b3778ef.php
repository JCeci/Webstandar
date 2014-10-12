<?php

/* AdminBundle:Admin:login.html.twig */
class __TwigTemplate_4051aff9cecf7cd5740f095a219f07da996f9597c550f7e4d3aa202b9b3778ef extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>DevOOPS</title>
\t\t<meta name=\"description\" content=\"description\">
\t\t<meta name=\"author\" content=\"Evgeniya\">
\t\t<meta name=\"keyword\" content=\"keywords\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">
\t\t<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"http://getbootstrap.com/docs-assets/js/html5shiv.js\"></script>
\t\t\t\t<script src=\"http://getbootstrap.com/docs-assets/js/respond.min.js\"></script>
\t\t<![endif]-->
\t</head>
<body>
<div class=\"container-fluid\">
\t<div id=\"page-login\" class=\"row\">
\t\t<div class=\"col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3\">
\t\t\t<div class=\"text-right\">
\t\t\t\t<a href=\"page_register.html\" class=\"txt-default\">Need an account?</a>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h3 class=\"page-header\">DevOOPS Login Page</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label\">Usuario</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label\">Password</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a href=\"../index.html\" class=\"btn btn-primary\">Entrar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  30 => 10,  19 => 1,);
    }
}
