<?php

/* BENaccueilBundle:Advert:index.html.twig */
class __TwigTemplate_df9da1f7a65cf1b7ccde236af78a84d70008d0bdf3f416c6af67770bbffea060 extends Twig_Template
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
        $__internal_945a2e68baacdda6ca96e528e6726bc877fb012cef67257fefab610770f26fc3 = $this->env->getExtension("native_profiler");
        $__internal_945a2e68baacdda6ca96e528e6726bc877fb012cef67257fefab610770f26fc3->enter($__internal_945a2e68baacdda6ca96e528e6726bc877fb012cef67257fefab610770f26fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BENaccueilBundle:Advert:index.html.twig"));

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
        
        $__internal_945a2e68baacdda6ca96e528e6726bc877fb012cef67257fefab610770f26fc3->leave($__internal_945a2e68baacdda6ca96e528e6726bc877fb012cef67257fefab610770f26fc3_prof);

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
