<?php

/* OCWmOCWBundle::anonimo.html.twig */
class __TwigTemplate_bc90206fc207d4d088daf5e9235e363c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OCWmOCWBundle::layout.html.twig");

        $this->blocks = array(
            'mainmenu' => array($this, 'block_mainmenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCWmOCWBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mainmenu($context, array $blocks = array())
    {
        // line 3
        echo "    <ul>
        <li><a href=\"#\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons_mainmenu_05.gif"), "html", null, true);
        echo "\" /><span>Inicio</span></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons_mainmenu_07.gif"), "html", null, true);
        echo "\" /><span>Buscar</span></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons_mainmenu_09.gif"), "html", null, true);
        echo "\" /><span>Login</span></a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "OCWmOCWBundle::anonimo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
