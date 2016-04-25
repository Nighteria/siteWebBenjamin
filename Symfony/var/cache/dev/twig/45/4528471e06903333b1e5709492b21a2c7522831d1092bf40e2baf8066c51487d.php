<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_49d0d370a56a5544836cfa0c47682a40f32145e3987e9d6cb6c694973d156237 extends Twig_Template
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
        $__internal_3a9a40b4b19a7351d2fd03b8920e0707a37fe69be9d4199d0686032143733177 = $this->env->getExtension("native_profiler");
        $__internal_3a9a40b4b19a7351d2fd03b8920e0707a37fe69be9d4199d0686032143733177->enter($__internal_3a9a40b4b19a7351d2fd03b8920e0707a37fe69be9d4199d0686032143733177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3a9a40b4b19a7351d2fd03b8920e0707a37fe69be9d4199d0686032143733177->leave($__internal_3a9a40b4b19a7351d2fd03b8920e0707a37fe69be9d4199d0686032143733177_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
