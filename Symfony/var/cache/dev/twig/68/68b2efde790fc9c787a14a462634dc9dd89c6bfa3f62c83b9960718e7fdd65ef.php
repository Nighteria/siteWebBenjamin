<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0e94314c9c6963736f136785bc46d1d456f22a0d380bcbc7ae4bd508ab407a8f extends Twig_Template
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
        $__internal_4f3cfb019569e62051b8cf666546b79b5191a1b8d1e8d85cb9fa2850852ba9cc = $this->env->getExtension("native_profiler");
        $__internal_4f3cfb019569e62051b8cf666546b79b5191a1b8d1e8d85cb9fa2850852ba9cc->enter($__internal_4f3cfb019569e62051b8cf666546b79b5191a1b8d1e8d85cb9fa2850852ba9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4f3cfb019569e62051b8cf666546b79b5191a1b8d1e8d85cb9fa2850852ba9cc->leave($__internal_4f3cfb019569e62051b8cf666546b79b5191a1b8d1e8d85cb9fa2850852ba9cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
