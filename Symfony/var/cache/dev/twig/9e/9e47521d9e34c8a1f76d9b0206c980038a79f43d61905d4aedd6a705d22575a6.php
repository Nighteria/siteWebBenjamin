<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_4d188771e963c312a5749fb26c2688fac3fb3b112af46717b32c226d6bfa77bd extends Twig_Template
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
        $__internal_0dfba7339d9bc0a7d66ac4ef06a24fa57f01f2226134e59c5e7c102db35f5834 = $this->env->getExtension("native_profiler");
        $__internal_0dfba7339d9bc0a7d66ac4ef06a24fa57f01f2226134e59c5e7c102db35f5834->enter($__internal_0dfba7339d9bc0a7d66ac4ef06a24fa57f01f2226134e59c5e7c102db35f5834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0dfba7339d9bc0a7d66ac4ef06a24fa57f01f2226134e59c5e7c102db35f5834->leave($__internal_0dfba7339d9bc0a7d66ac4ef06a24fa57f01f2226134e59c5e7c102db35f5834_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
