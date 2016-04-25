<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3067a6b137090d574a53498c3b35803a09ea353fee0824ec6ab1c6be33e1f1bb extends Twig_Template
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
        $__internal_44e10cdfb21d18a8dbac217abd8cfccacd9c48b80a2920ae9a8186cfb254bebe = $this->env->getExtension("native_profiler");
        $__internal_44e10cdfb21d18a8dbac217abd8cfccacd9c48b80a2920ae9a8186cfb254bebe->enter($__internal_44e10cdfb21d18a8dbac217abd8cfccacd9c48b80a2920ae9a8186cfb254bebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_44e10cdfb21d18a8dbac217abd8cfccacd9c48b80a2920ae9a8186cfb254bebe->leave($__internal_44e10cdfb21d18a8dbac217abd8cfccacd9c48b80a2920ae9a8186cfb254bebe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
