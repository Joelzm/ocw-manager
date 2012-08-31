<?php

/* OCWmOCWBundle:Security:login.html.twig */
class __TwigTemplate_500d0e112008a0e1196db29f22550bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OCWmOCWBundle::anonimo.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " Inicio de sesión ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"login\">
        <h3>Iniciar sesión</h3>
        ";
        // line 9
        if ($this->getContext($context, "error")) {
            // line 10
            echo "            <div> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo " </div>
        ";
        }
        // line 12
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
            <table border=0 align=\"center\">
                <tr>
                    <td align=\"right\"><label for=\"username\">Usuario:</label></td>
                    <td align=\"left\" width=\"155\"><input class=\"caja_texto\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" /></td>
                </tr>
                <tr>
                    <td align=\"right\"><label for=\"password\">Contraseña:</label></td>
                    <td align=\"left\" width=\"155\"><input class=\"caja_texto\" type=\"password\" id=\"password\" name=\"_password\" /></td>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"2\"><input type=\"submit\" name=\"login\" value=\"Entrar\" /></td>
                </tr>
            </table>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OCWmOCWBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  59 => 12,  53 => 10,  51 => 9,  47 => 7,  44 => 6,  37 => 4,  34 => 3,  28 => 2,);
    }
}
