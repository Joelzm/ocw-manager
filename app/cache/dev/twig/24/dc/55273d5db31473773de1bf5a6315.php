<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_24dc55273d5db31473773de1bf5a6315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "message"));
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 90,  164 => 89,  149 => 77,  119 => 56,  65 => 12,  61 => 11,  106 => 26,  101 => 24,  68 => 25,  66 => 24,  36 => 6,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 49,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 30,  80 => 31,  60 => 16,  52 => 12,  97 => 41,  95 => 21,  88 => 29,  78 => 30,  71 => 26,  25 => 4,  72 => 16,  64 => 15,  53 => 8,  34 => 5,  92 => 20,  86 => 5,  79 => 40,  19 => 2,  42 => 10,  40 => 9,  29 => 5,  26 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 4,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 20,  63 => 18,  58 => 19,  49 => 11,  43 => 10,  37 => 8,  20 => 2,  139 => 70,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 19,  91 => 8,  82 => 27,  77 => 25,  75 => 24,  57 => 10,  50 => 10,  46 => 9,  44 => 6,  39 => 9,  33 => 5,  30 => 2,  27 => 3,  135 => 50,  129 => 63,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 26,  73 => 27,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 12,  51 => 13,  48 => 10,  41 => 7,  38 => 4,  35 => 7,  31 => 4,  28 => 3,);
    }
}
