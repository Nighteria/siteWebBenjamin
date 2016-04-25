<?php

/* @BENaccueil/Advert/index.html.twig */
class __TwigTemplate_df641d29d2f2b62e5b6bedd6edf3d9969e8577e7a6d72817cbd98dcded8b3b24 extends Twig_Template
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
        $__internal_4d667ef3e996e3f4317feda95fce5395d11f65037fdd35cd1de3acf0c6caf25c = $this->env->getExtension("native_profiler");
        $__internal_4d667ef3e996e3f4317feda95fce5395d11f65037fdd35cd1de3acf0c6caf25c->enter($__internal_4d667ef3e996e3f4317feda95fce5395d11f65037fdd35cd1de3acf0c6caf25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BENaccueil/Advert/index.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " ! </h1>
        
        <p>
\t\t\t\tBienvenue sur le site de Reiki.fr :D
        </p>
    </body>
</html>";
        
        $__internal_4d667ef3e996e3f4317feda95fce5395d11f65037fdd35cd1de3acf0c6caf25c->leave($__internal_4d667ef3e996e3f4317feda95fce5395d11f65037fdd35cd1de3acf0c6caf25c_prof);

    }

    public function getTemplateName()
    {
        return "@BENaccueil/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 16,  32 => 10,  22 => 2,);
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
