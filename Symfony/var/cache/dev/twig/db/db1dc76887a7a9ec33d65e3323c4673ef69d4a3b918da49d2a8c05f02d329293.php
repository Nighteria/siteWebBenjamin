<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ba83673b60cd1a2919747d7971333f123cb5ffd99e5b8f8f558212187b2887af extends Twig_Template
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
        $__internal_ce768ea7f80454ebc2186d2e882a50bf1b0ef452c68ed47df1f354e50fa9c21c = $this->env->getExtension("native_profiler");
        $__internal_ce768ea7f80454ebc2186d2e882a50bf1b0ef452c68ed47df1f354e50fa9c21c->enter($__internal_ce768ea7f80454ebc2186d2e882a50bf1b0ef452c68ed47df1f354e50fa9c21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ce768ea7f80454ebc2186d2e882a50bf1b0ef452c68ed47df1f354e50fa9c21c->leave($__internal_ce768ea7f80454ebc2186d2e882a50bf1b0ef452c68ed47df1f354e50fa9c21c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d7fe86dd72370d5568bab6c3de1f91f31b2996f39da994e3e21be027bc9a332 = $this->env->getExtension("native_profiler");
        $__internal_9d7fe86dd72370d5568bab6c3de1f91f31b2996f39da994e3e21be027bc9a332->enter($__internal_9d7fe86dd72370d5568bab6c3de1f91f31b2996f39da994e3e21be027bc9a332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9d7fe86dd72370d5568bab6c3de1f91f31b2996f39da994e3e21be027bc9a332->leave($__internal_9d7fe86dd72370d5568bab6c3de1f91f31b2996f39da994e3e21be027bc9a332_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
