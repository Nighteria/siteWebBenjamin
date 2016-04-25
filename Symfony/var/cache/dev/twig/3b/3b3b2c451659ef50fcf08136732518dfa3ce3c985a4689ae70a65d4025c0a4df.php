<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f02cb19e0dfe4c4c42ab9fb4c7553f1e5297f6e7c1fa788c4bf3568227108c35 extends Twig_Template
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
        $__internal_3c5206766c8503cf1e1a7fe5799e46f212d37853342b843a7f20d3ccf92301da = $this->env->getExtension("native_profiler");
        $__internal_3c5206766c8503cf1e1a7fe5799e46f212d37853342b843a7f20d3ccf92301da->enter($__internal_3c5206766c8503cf1e1a7fe5799e46f212d37853342b843a7f20d3ccf92301da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3c5206766c8503cf1e1a7fe5799e46f212d37853342b843a7f20d3ccf92301da->leave($__internal_3c5206766c8503cf1e1a7fe5799e46f212d37853342b843a7f20d3ccf92301da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
