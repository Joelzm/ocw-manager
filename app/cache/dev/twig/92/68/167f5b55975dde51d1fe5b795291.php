<?php

/* OCWmOCWBundle:OCW:index.html.twig */
class __TwigTemplate_9268167f5b55975dde51d1fe5b795291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OCWmOCWBundle::anonimo.html.twig");

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCWmOCWBundle::anonimo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_estilos($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\" type=\"text/css'\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/nivo-slider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
    <!--<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nivo/demo/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />-->
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " Inicio ";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"slider-wrapper theme-default\">
        <div id=\"slider\" class=\"nivoSlider\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/arquitectura_16.jpg"), "html", null, true);
        echo "\" data-thumb=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/arquitectura_16.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"#arquitectura_caption\"/>
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/fotografia_16.jpg"), "html", null, true);
        echo "\" data-thumb=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/fotografia_16.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"#fotografia_caption\" />
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/suelos_16.jpg"), "html", null, true);
        echo "\" data-thumb=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/suelos_16.jpg"), "html", null, true);
        echo "\" alt=\"\" data-transition=\"#suelos_caption\" />
        </div>
        <div id=\"arquitectura_caption\" class=\"nivo-html-caption\">
            <strong>This</strong> | ver ocw <br/>
            Is an example of a <em>HTML</em> caption with <a href=\"#\">a link</a>. 
        </div>
        <div id=\"fotografia_caption\" class=\"nivo-html-caption\">
            <strong>This</strong> | ver ocw <br/>
            Is an example of a <em>HTML</em> caption with <a href=\"#\">a link</a>.
        </div>
        <div id=\"suelos_caption\" class=\"nivo-html-caption\">
            <strong>This</strong> | ver ocw <br/>
            Is an example of a <em>HTML</em> caption with <a href=\"#\">a link</a>.
        </div>
    </div>
    <div>Esto es un texto y lo pongo porque me da la gana!</div>
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nivo/jquery.nivo.slider.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    \$(window).load(function() {
        \$('#slider').nivoSlider();
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OCWmOCWBundle:OCW:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  95 => 30,  72 => 13,  66 => 12,  60 => 11,  56 => 9,  53 => 8,  47 => 7,  41 => 5,  37 => 4,  32 => 3,  29 => 2,);
    }
}
