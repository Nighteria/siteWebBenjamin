<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_7afac5f8cc28cbfb7fa386ff7ee0a032fec8065f1f3663b2ff6e5059589d290b extends Twig_Template
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
        $__internal_1e8fa796b78240ab47bde992443d6ee212284247348ef8f1a42411597af9259f = $this->env->getExtension("native_profiler");
        $__internal_1e8fa796b78240ab47bde992443d6ee212284247348ef8f1a42411597af9259f->enter($__internal_1e8fa796b78240ab47bde992443d6ee212284247348ef8f1a42411597af9259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1e8fa796b78240ab47bde992443d6ee212284247348ef8f1a42411597af9259f->leave($__internal_1e8fa796b78240ab47bde992443d6ee212284247348ef8f1a42411597af9259f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
