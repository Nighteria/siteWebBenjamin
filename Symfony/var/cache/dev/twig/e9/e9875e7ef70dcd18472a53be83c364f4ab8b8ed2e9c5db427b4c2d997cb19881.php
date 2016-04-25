<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9cb229d6edaea9042095269646dd2c348860bd6325ddb956c2aa3b644a4e213f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fab61142235f8cea31148e64807397ed5460fdc9d63fe25092662c27df299ac9 = $this->env->getExtension("native_profiler");
        $__internal_fab61142235f8cea31148e64807397ed5460fdc9d63fe25092662c27df299ac9->enter($__internal_fab61142235f8cea31148e64807397ed5460fdc9d63fe25092662c27df299ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fab61142235f8cea31148e64807397ed5460fdc9d63fe25092662c27df299ac9->leave($__internal_fab61142235f8cea31148e64807397ed5460fdc9d63fe25092662c27df299ac9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7885cc332c13173bda26279ce682aa9f0a70f78b85f7e4b7b038c7b8d2c90c53 = $this->env->getExtension("native_profiler");
        $__internal_7885cc332c13173bda26279ce682aa9f0a70f78b85f7e4b7b038c7b8d2c90c53->enter($__internal_7885cc332c13173bda26279ce682aa9f0a70f78b85f7e4b7b038c7b8d2c90c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7885cc332c13173bda26279ce682aa9f0a70f78b85f7e4b7b038c7b8d2c90c53->leave($__internal_7885cc332c13173bda26279ce682aa9f0a70f78b85f7e4b7b038c7b8d2c90c53_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
