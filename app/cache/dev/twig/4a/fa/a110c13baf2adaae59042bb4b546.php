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
            'estilos' => array($this, 'block_estilos'),
            'mainmenu' => array($this, 'block_mainmenu'),
            'content' => array($this, 'block_content'),
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
        // line 7
        $this->displayBlock('estilos', $context, $blocks);
        // line 8
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <header>
            <div class=\"centro\">
                <div class=\"logo\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_02.jpg"), "html", null, true);
        echo "\" />
                </div>
                <nav>";
        // line 17
        $this->displayBlock('mainmenu', $context, $blocks);
        echo "</nav>
            </div>
            <div class=\"limpiar_float\"></div>
        </header>
        <div class=\"centro\">
            ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
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

    // line 7
    public function block_estilos($context, array $blocks = array())
    {
    }

    // line 17
    public function block_mainmenu($context, array $blocks = array())
    {
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
    }

    // line 23
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
        return array (  98 => 23,  93 => 22,  88 => 17,  83 => 7,  78 => 5,  70 => 24,  67 => 23,  65 => 22,  57 => 17,  52 => 15,  43 => 9,  38 => 8,  32 => 6,  28 => 5,  22 => 1,  36 => 7,  33 => 3,  27 => 2,);
    }
}
