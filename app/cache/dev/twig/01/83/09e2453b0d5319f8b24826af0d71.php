<?php

/* ::base.html.twig */
class __TwigTemplate_018309e2453b0d5319f8b24826af0d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'dinamico' => array($this, 'block_dinamico'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
            body{margin-top: 4.5em;}
        </style>
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\"><!--Barra superior-->
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">CableSoft</a>
            </div>
            <div class=\"navbar-collapse collapse\" id=\"administrar\">
              <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\" class=\"ajaxsimple\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("adminempleados");
        echo "\" class=\"ajaxsimple\">Administrar empleados</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li class=\"dropdown-header\">Nav header</li>
                    <li><a href=\"#\">Separated link</a></li>
                    <li><a href=\"#\">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"../navbar/\">Default</a></li>
                <li><a href=\"../navbar-static-top/\">Static top</a></li>
                <li class=\"active\"><a href=\"./\">Fixed top</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div><!--*************************Fin barra superior***********************-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col col-md-12 jumbotron\" id=\"dinamico\">
                    ";
        // line 53
        $this->displayBlock('dinamico', $context, $blocks);
        // line 54
        echo "                </div>
            </div>
        </div>
        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 53
    public function block_dinamico($context, array $blocks = array())
    {
        echo "<h1>Barra derecha</h1>";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cablesoft.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 60,  134 => 59,  129 => 58,  126 => 57,  120 => 53,  113 => 8,  110 => 7,  104 => 5,  98 => 62,  96 => 57,  91 => 54,  89 => 53,  65 => 32,  56 => 26,  36 => 10,  34 => 7,  29 => 5,  23 => 1,);
    }
}
