<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_30bef2716f1609924838ed278dde13564b270f305b22bd716160c13a4109e8b6 extends Twig_Template
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
        $__internal_7cdcfad06ba4a1aa3ed673566f9aa2388c802109f5ab85e2aca9ae8a8cbef876 = $this->env->getExtension("native_profiler");
        $__internal_7cdcfad06ba4a1aa3ed673566f9aa2388c802109f5ab85e2aca9ae8a8cbef876->enter($__internal_7cdcfad06ba4a1aa3ed673566f9aa2388c802109f5ab85e2aca9ae8a8cbef876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_7cdcfad06ba4a1aa3ed673566f9aa2388c802109f5ab85e2aca9ae8a8cbef876->leave($__internal_7cdcfad06ba4a1aa3ed673566f9aa2388c802109f5ab85e2aca9ae8a8cbef876_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
