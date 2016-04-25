<?php

/* BENaccueilBundle:Advert:index.html.twig */
class __TwigTemplate_d34f290de2dfa4983e69262016de5be2926ba61246a4927aa51859b46ce55946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>


<html>
    <head>

        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../css/fond.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>
\t
    <body>

        <h1>Bonjour ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo " ! </h1>
        
        <p>
\t\t\t\tBienvenue sur le site de Reiki.fr :D
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "BENaccueilBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  29 => 10,  19 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* */
/* */
/* <html>*/
/*     <head>*/
/* */
/*         <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/*     <link href="{{ asset('../css/fond.css') }}" rel="stylesheet">*/
/* */
/*     </head>*/
/* 	*/
/*     <body>*/
/* */
/*         <h1>Bonjour {{ nom }} ! </h1>*/
/*         */
/*         <p>*/
/* 				Bienvenue sur le site de Reiki.fr :D*/
/*         </p>*/
/*     </body>*/
/* </html>*/
