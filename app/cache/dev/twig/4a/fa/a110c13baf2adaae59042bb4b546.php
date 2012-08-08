<?php

/* OCWmOCWBundle::layout.html.twig */
class __TwigTemplate_4afaa110c13baf2adaae59042bb4b546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'mainmenu' => array($this, 'block_mainmenu'),
            'content' => array($this, 'block_content'),
            'bottombar' => array($this, 'block_bottombar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>:: OCWManager :: ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" />
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    </head>
    <body>
        <header>
            <div class=\"centro\">
                <div class=\"logo\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_02.jpg"), "html", null, true);
        echo "\" />
                </div>
                <nav>";
        // line 19
        $this->displayBlock('mainmenu', $context, $blocks);
        echo "</nav>
            </div>
            <div class=\"limpiar_float\"></div>
        </header>
        <div class=\"centro\">
            ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "        </div>
        ";
        // line 26
        $this->displayBlock('bottombar', $context, $blocks);
        // line 27
        echo "        <div class=\"centro\">
            ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "            <footer><strong>OCWManager</strong>. Copyright 2012. Universidad de córdoba. Todos los derechos reservados.</footer>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 19
    public function block_mainmenu($context, array $blocks = array())
    {
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    // line 26
    public function block_bottombar($context, array $blocks = array())
    {
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "OCWmOCWBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  106 => 26,  101 => 24,  96 => 19,  86 => 5,  78 => 29,  76 => 28,  73 => 27,  71 => 26,  68 => 25,  66 => 24,  58 => 19,  43 => 10,  40 => 9,  29 => 5,  23 => 1,  107 => 42,  104 => 41,  91 => 8,  65 => 12,  61 => 11,  57 => 10,  53 => 17,  50 => 7,  44 => 6,  38 => 8,  33 => 6,  30 => 2,);
    }
}
