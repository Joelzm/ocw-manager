<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_335e13a56b12a061b5c25781c262bf0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World")), "html", null, true);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World")), "html", null, true);
        echo "\">Access the secured area</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_login"), "html", null, true);
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  114 => 30,  85 => 43,  21 => 1,  167 => 90,  164 => 89,  149 => 77,  119 => 56,  65 => 12,  61 => 23,  106 => 26,  101 => 24,  68 => 25,  66 => 24,  36 => 6,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 49,  93 => 33,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 31,  60 => 16,  52 => 12,  97 => 41,  95 => 47,  88 => 29,  78 => 30,  71 => 26,  25 => 4,  72 => 16,  64 => 24,  53 => 8,  34 => 5,  92 => 20,  86 => 5,  79 => 39,  19 => 2,  42 => 10,  40 => 7,  29 => 3,  26 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 10,  32 => 4,  24 => 9,  22 => 3,  23 => 1,  17 => 1,  69 => 20,  63 => 18,  58 => 19,  49 => 11,  43 => 8,  37 => 8,  20 => 2,  139 => 70,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 19,  91 => 8,  82 => 27,  77 => 25,  75 => 37,  57 => 13,  50 => 10,  46 => 9,  44 => 6,  39 => 9,  33 => 5,  30 => 2,  27 => 5,  135 => 50,  129 => 63,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 27,  67 => 19,  62 => 24,  59 => 22,  55 => 12,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 5,  31 => 6,  28 => 3,);
    }
}
