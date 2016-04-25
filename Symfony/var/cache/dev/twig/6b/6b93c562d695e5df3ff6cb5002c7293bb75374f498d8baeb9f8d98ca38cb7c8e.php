<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_971935302ed5af28d6511546bf3ec5582fc70c4b277f28ad968435e98a163400 extends Twig_Template
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
        $__internal_70ca3a9b02d3ae808327aabe7a90a06b0cc5adbb85bf6f23ce27cba9127af8da = $this->env->getExtension("native_profiler");
        $__internal_70ca3a9b02d3ae808327aabe7a90a06b0cc5adbb85bf6f23ce27cba9127af8da->enter($__internal_70ca3a9b02d3ae808327aabe7a90a06b0cc5adbb85bf6f23ce27cba9127af8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_70ca3a9b02d3ae808327aabe7a90a06b0cc5adbb85bf6f23ce27cba9127af8da->leave($__internal_70ca3a9b02d3ae808327aabe7a90a06b0cc5adbb85bf6f23ce27cba9127af8da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
