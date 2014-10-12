<?php

/* AdminBundle:Admin:admin.html.twig */
class __TwigTemplate_c825c563acb874e74a97092e2873127b6a610a17145785aeb544b431c9a786c4 extends Twig_Template
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
\t\t<meta name=\"author\" content=\"DevOOPS\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">
\t\t<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/xcharts/xcharts.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"http://getbootstrap.com/docs-assets/js/html5shiv.js\"></script>
\t\t\t\t<script src=\"http://getbootstrap.com/docs-assets/js/respond.min.js\"></script>
\t\t<![endif]-->
\t</head>
<body>
<!--Start Header-->
<div id=\"screensaver\">
\t<canvas id=\"canvas\"></canvas>
\t<i class=\"fa fa-lock\" id=\"screen_unlock\"></i>
</div>
<div id=\"modalbox\">
\t<div class=\"devoops-modal\">
\t\t<div class=\"devoops-modal-header\">
\t\t\t<div class=\"modal-header-name\">
\t\t\t\t<span>Basic table</span>
\t\t\t</div>
\t\t\t<div class=\"box-icons\">
\t\t\t\t<a class=\"close-link\">
\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"devoops-modal-inner\">
\t\t</div>
\t\t<div class=\"devoops-modal-bottom\">
\t\t</div>
\t</div>
</div>
<header class=\"navbar\">
\t<div class=\"container-fluid expanded-panel\">
\t\t<div class=\"row\">
\t\t\t<div id=\"logo\" class=\"col-xs-12 col-sm-2\">
\t\t\t\t<a href=\"index.html\">DevOOPS</a>
\t\t\t</div>
\t\t\t<div id=\"top-panel\" class=\"col-xs-12 col-sm-10\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-8 col-sm-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-sidebar\">
\t\t\t\t\t\t  <i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"search\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Buscar...\"/>
\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 col-sm-8 top-panel-right\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav pull-right panel-menu\">
\t\t\t\t\t\t\t<li class=\"hidden-xs\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"modal-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"badge\">7</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"hidden-xs\">
\t\t\t\t\t\t\t\t<a class=\"ajax-link\" href=\"ajax/calendar.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"badge\">7</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"hidden-xs\">
\t\t\t\t\t\t\t\t<a href=\"ajax/page_messages.html\" class=\"ajax-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"badge\">7</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle account\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"avatar\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down pull-right\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"user-mini pull-right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"welcome\">Welcome,</span>
\t\t\t\t\t\t\t\t\t\t<span>Jane Devoops</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"ajax/page_messages.html\" class=\"ajax-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Messages</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"ajax/gallery_simple.html\" class=\"ajax-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Albums</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"ajax/calendar.html\" class=\"ajax-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Tasks</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-power-off\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Logout</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id=\"main\" class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div id=\"sidebar-left\" class=\"col-xs-2 col-sm-2\">
\t\t\t<ul class=\"nav main-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"ajax/dashboard.html\" class=\"active ajax-link\">
\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t<span class=\"hidden-xs\">Inicio</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"ajax/dashboard.html\" class=\"active ajax-link\">
\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t<span class=\"hidden-xs\">Secciones</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"fa fa-bar-chart-o\"></i>
\t\t\t\t\t\t<span class=\"hidden-xs\">Charts</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/charts_xcharts.html\">xCharts</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/charts_flot.html\">Flot Charts</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/charts_google.html\">Google Charts</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/charts_morris.html\">Morris Charts</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/charts_coindesk.html\">CoinDesk realtime</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"fa fa-table\"></i>
\t\t\t\t\t\t <span class=\"hidden-xs\">Tables</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/tables_simple.html\">Simple Tables</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/tables_datatables.html\">Data Tables</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/tables_beauty.html\">Beauty Tables</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"fa fa-pencil-square-o\"></i>
\t\t\t\t\t\t <span class=\"hidden-xs\">Forms</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/forms_elements.html\">Elements</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/forms_layouts.html\">Layouts</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/forms_file_uploader.html\">File Uploader</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"fa fa-desktop\"></i>
\t\t\t\t\t\t <span class=\"hidden-xs\">UI Elements</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/ui_grid.html\">Grid</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/ui_buttons.html\">Buttons</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/ui_progressbars.html\">Progress Bars</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/ui_jquery-ui.html\">Jquery UI</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/ui_icons.html\">Icons</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"fa fa-list\"></i>
\t\t\t\t\t\t <span class=\"hidden-xs\">Pages</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"ajax/page_login.html\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"ajax/page_register.html\">Register</a></li>
\t\t\t\t\t\t<li><a id=\"locked-screen\" class=\"submenu\" href=\"ajax/page_locked.html\">Locked Screen</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/page_contacts.html\">Contacts</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/page_feed.html\">Feed</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link add-full\" href=\"ajax/page_messages.html\">Messages</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/page_pricing.html\">Pricing</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/page_invoice.html\">Invoice</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/page_search.html\">Search Results</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/page_404.html\">Error 404</a></li>
\t\t\t\t\t\t<li><a href=\"ajax/page_500.html\">Error 500</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t<span class=\"hidden-xs\">Maps</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/maps.html\">OpenStreetMap</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/map_fullscreen.html\">Fullscreen map</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t <span class=\"hidden-xs\">Gallery</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/gallery_simple.html\">Simple Gallery</a></li>
\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"ajax/gallery_flickr.html\">Flickr Gallery</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t <a class=\"ajax-link\" href=\"ajax/typography.html\">
\t\t\t\t\t\t <i class=\"fa fa-font\"></i>
\t\t\t\t\t\t <span class=\"hidden-xs\">Typography</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t <li>
\t\t\t\t\t<a class=\"ajax-link\" href=\"ajax/calendar.html\">
\t\t\t\t\t\t <i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t <span class=\"hidden-xs\">Calendar</span>
\t\t\t\t\t</a>
\t\t\t\t </li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t <span class=\"hidden-xs\">Multilevel menu</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"#\">First level menu</a></li>
\t\t\t\t\t\t<li><a href=\"#\">First level menu</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Second level menu group</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Second level menu</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Second level menu</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Three level menu group</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Three level menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Three level menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Four level menu group</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Four level menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Four level menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Five level menu group</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Five level menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Five level menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Six level menu group</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Six level menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Six level menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Three level menu</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<!--Start Content-->
\t\t<div id=\"content\" class=\"col-xs-12 col-sm-10\">
\t\t\t<div class=\"preloader\">
\t\t\t\t<img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/devoops_getdata.gif"), "html", null, true);
        echo "\" class=\"devoops-getdata\" alt=\"preloader\"/>
\t\t\t</div>
\t\t\t<div id=\"ajax-content\"></div>
\t\t</div>
\t\t<!--End Content-->
\t</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src=\"http://code.jquery.com/jquery.js\"></script>-->
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/justified-gallery/jquery.justifiedgallery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tinymce/jquery.tinymce.min.js"), "html", null, true);
        echo "\"></script>
<!-- All functions for this theme + document.ready processing -->
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/devoops.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 343,  403 => 341,  399 => 340,  395 => 339,  391 => 338,  386 => 336,  382 => 335,  369 => 325,  129 => 88,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  33 => 10,  29 => 9,  19 => 1,);
    }
}
