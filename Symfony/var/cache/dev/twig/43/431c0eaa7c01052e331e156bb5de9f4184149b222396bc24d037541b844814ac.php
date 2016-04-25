<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_754d4496c6772d7e5abd8fb9da8a54ff1866c2a9dceeeb1e6cf2a9a1a6f8edcc extends Twig_Template
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
        $__internal_fc0b83a6d97778e58d0d00aa3f4432174708b82cb1ccc2c38ed4a5b1388879fe = $this->env->getExtension("native_profiler");
        $__internal_fc0b83a6d97778e58d0d00aa3f4432174708b82cb1ccc2c38ed4a5b1388879fe->enter($__internal_fc0b83a6d97778e58d0d00aa3f4432174708b82cb1ccc2c38ed4a5b1388879fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fc0b83a6d97778e58d0d00aa3f4432174708b82cb1ccc2c38ed4a5b1388879fe->leave($__internal_fc0b83a6d97778e58d0d00aa3f4432174708b82cb1ccc2c38ed4a5b1388879fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
