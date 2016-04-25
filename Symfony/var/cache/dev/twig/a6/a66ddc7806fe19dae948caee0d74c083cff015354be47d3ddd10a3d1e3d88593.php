<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_bbb40c7cc0b18f63d880ae426e54f1c34769f7be6ae396161092c41591c7adac extends Twig_Template
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
        $__internal_2ca7b58b380f6de17ecb9f34c8672625882e0de12dd79716bc45ece22f582941 = $this->env->getExtension("native_profiler");
        $__internal_2ca7b58b380f6de17ecb9f34c8672625882e0de12dd79716bc45ece22f582941->enter($__internal_2ca7b58b380f6de17ecb9f34c8672625882e0de12dd79716bc45ece22f582941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2ca7b58b380f6de17ecb9f34c8672625882e0de12dd79716bc45ece22f582941->leave($__internal_2ca7b58b380f6de17ecb9f34c8672625882e0de12dd79716bc45ece22f582941_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
