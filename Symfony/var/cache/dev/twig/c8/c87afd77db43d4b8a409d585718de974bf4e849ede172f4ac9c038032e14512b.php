<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_bc0a8f94123285b23e42221ca5b8c012fb840eeaac53e703aeb1e0ffe3ef533e extends Twig_Template
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
        $__internal_b2b5f897d0577db69f7b246b63f30cce22dafa8c52bcd4385a78019a5f65311b = $this->env->getExtension("native_profiler");
        $__internal_b2b5f897d0577db69f7b246b63f30cce22dafa8c52bcd4385a78019a5f65311b->enter($__internal_b2b5f897d0577db69f7b246b63f30cce22dafa8c52bcd4385a78019a5f65311b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b2b5f897d0577db69f7b246b63f30cce22dafa8c52bcd4385a78019a5f65311b->leave($__internal_b2b5f897d0577db69f7b246b63f30cce22dafa8c52bcd4385a78019a5f65311b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
