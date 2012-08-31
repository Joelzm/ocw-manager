<?php

/* OCWmOCWBundle::logueado.html.twig */
class __TwigTemplate_5f9e731ad7fedd066fff5ca1f990d3a2 extends Twig_Template
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
        <li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons_mainmenu_05.png"), "html", null, true);
        echo "\" /><span>Inicio</span></a></li>
        <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buscar"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons_mainmenu_07.png"), "html", null, true);
        echo "\" /><span>Buscar</span></a></li>
        <li>
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon_user_09.png"), "html", null, true);
        echo "\" /><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</span></a>
            <ul class=\"options_user\">
                <li><a href=\"\">Ver perfil</a></li>
                <li><a href=\"\">Mis OCWs</a></li>
                <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">Salir</a></li>
            </ul>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "OCWmOCWBundle::logueado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  45 => 7,  38 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
