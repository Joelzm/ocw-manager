<?php

/* OCWmOCWBundle:OCW:index.html.twig */
class __TwigTemplate_9268167f5b55975dde51d1fe5b795291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OCWmOCWBundle::anonimo.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bottombar' => array($this, 'block_bottombar'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/orbit-1.2.3.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " Inicio ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"slider\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/arquitectura_16.jpg"), "html", null, true);
        echo "\" width=\"990\" height=\"351\"  data-caption=\"#c1\"/>
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/fotografia_16.jpg"), "html", null, true);
        echo "\" width=\"990\" height=\"351\" data-caption=\"#c2\"/>
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/suelos_16.jpg"), "html", null, true);
        echo "\" width=\"990\" height=\"351\" data-caption=\"#c3\"/>
    </div>
    <span class=\"orbit-caption\" id=\"c1\">
        <span class=\"titulo\">Arquitectura | <a class=\"ver-ocw\" href=\"#\">ver ocw</a></span>
        <span class=\"contenido\"><p>asdasdasdasdsad</p></span>
    </span>
    <span class=\"orbit-caption\" id=\"c2\">
    \t<span class=\"titulo\">Fotografía | <a class=\"ver-ocw\" href=\"#\">ver ocw</a></span>
        <span class=\"contenido\"><p>asdasdasdasdasd</p></span>
    </span>
    <span class=\"orbit-caption\" id=\"c3\">
    \t<span class=\"titulo\">Suelos | <a class=\"ver-ocw\" href=\"#\">ver ocw</a></span>
        <span class=\"contenido\"><p>asdasdasdasdasd</p></span>
    </span>

    <div>
        <div class=\"contenido izquierda\">
            <h2>¿Qué es <em>OCW Manager</em>?</h2>
            <p>Es una plataforma web de la Universidad de Córdoba que permite a sus docentes crear y publicar sus cursos en formato OCW segun los elementos descriptivos de los OCW publicados por el Institulo Tenológico de Massachusetts (MIT).<br/><br/> OCW Manager le permite al docente la gestión completa de sus cursos de forma colaborativa, facilitando aún más el proceso de producción.</p>
        </div>
        <div class=\"contenido derecha\">
            <h2>¿Qué es un OCW?</h2>
            <p>Un OCW (OpenCourseware) o Curso Virtual Abierto, según lo define el OCWConsortium, es una publicación digital libre y abierta de materiales educativos universitarios y colegios de alta calidad. Éstos materiales son organizados como cursos, y generalmente incluyen los materiales de estudios y herramientas de evaluación así como los contenidos temáticos.<br/><br/> Los OpenCourseWare son libres y de licencia abierta, accesibles cualquiera a través de internet.</p>
        </div>
        <div class=\"limpiar_float\"></div>
    </div>
";
    }

    // line 39
    public function block_bottombar($context, array $blocks = array())
    {
        echo "    
    <div class=\"cont-recientes\">
        <div class=\"recientes\">
            <div class=\"centro\">
                <h2>OCWs Recientes</h2>
                <ul>
                    <li>
                        <span class=\"titulo\">Glaciares</span><br/>
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/thumbs/thumbs_ocw_20.jpg"), "html", null, true);
        echo "\" /><br/>
                        <span class=\"descripcion\">
                            Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso.
                        </span>
                    </li>
                    <li>
                        <span class=\"titulo\">Suelos</span><br/>
                        <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/thumbs/thumbs_ocw_22.jpg"), "html", null, true);
        echo "\" /><br/>
                        <span class=\"descripcion\">
                            Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso.
                        </span>
                    </li>
                    <li>
                        <span class=\"titulo\">Sistemas Operativos</span><br/>
                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/thumbs/thumbs_ocw_24.jpg"), "html", null, true);
        echo "\" /><br/>
                        <span class=\"descripcion\">
                            Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso.
                        </span>
                    </li>
                    <li>
                        <span class=\"titulo\">Cultivo de peces</span><br/>
                        <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/thumbs/thumbs_ocw_26.jpg"), "html", null, true);
        echo "\" /><br/>
                        <span class=\"descripcion\">
                            Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso.
                        </span>
                    </li>
                    <li>
                        <span class=\"titulo\">Glaciares</span><br/>
                        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img_ocws/thumbs/thumbs_ocw_28.jpg"), "html", null, true);
        echo "\" /><br/>
                        <p class=\"descripcion\">
                            Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso. Esta es la descripción del curso.
                        </p>
                    </li>
                    <div class=\"limpiar_float\"></div>
                </ul>
            </div>
        </div>        
    </div>
";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.orbit-1.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    \$(window).load(function() {
        \$(\"#slider\").orbit({
            animation: \"fade\",
            bullets: true,
            directionalNav: false,
            timer: true,
            advanceSpeed: 5000,
            animationSpeed: 1200,
            captionAnimation: \"fade\",
            captionAnimationSpeed: 1000 
        });
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
        return array (  170 => 89,  165 => 88,  162 => 87,  147 => 75,  137 => 68,  127 => 61,  117 => 54,  107 => 47,  95 => 39,  64 => 11,  60 => 10,  56 => 9,  53 => 8,  50 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,);
    }
}
