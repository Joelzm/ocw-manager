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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
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
            <a class=\"signin\" href=\"#\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons_mainmenu_09.png"), "html", null, true);
        echo "\" /><span>Login</span></a>
            <div id=\"login\">
                <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
                    <table border=0 align=\"center\">
                        <tr>
                            <td align=\"right\"><label for=\"username\">Usuario:</label></td>
                            <td align=\"left\" width=\"147\"><input class=\"caja_texto\" type=\"text\" id=\"username\" name=\"_username\" value=\"\" /></td>
                        </tr>
                        <tr>
                            <td align=\"right\"><label for=\"password\">Contraseña:</label></td>
                            <td align=\"left\" width=\"147\"><input class=\"caja_texto\" type=\"password\" id=\"password\" name=\"_password\" /></td>
                        </tr>
                        <tr>
                            <td align=\"center\" colspan=\"2\"><input type=\"submit\" name=\"login\" value=\"Entrar\" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </li>
        
    </ul>
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".signin\").click(function(e) {  
                e.preventDefault();
                \$(\"div#login\").toggle();
\t\t\$(\".signin\").toggleClass(\"activo2\");
                \$(\"div#login\").toggleClass(\"activo\");
            });
\t\t\t
            \$(\"div#login\").mouseup(function() {
\t\treturn false
            });
            \$(document).mouseup(function(e) {
\t\tif(\$(e.target).parent(\".signin\").length==0) {
                    \$(\".signin\").removeClass(\"activo2\");
                    \$(\"div#login\").removeClass(\"activo\");
                    \$(\"div#login\").hide();
\t\t}
            });\t\t\t\t\t
        });
    </script>
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
        return array (  78 => 31,  75 => 30,  51 => 9,  46 => 7,  39 => 5,  33 => 4,  30 => 3,  27 => 2,);
    }
}
