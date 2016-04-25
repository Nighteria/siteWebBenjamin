<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_16c95b5203bc54c5ea53b5b4788a8a89e302c682526875b8e7bbb146fa6a870c extends Twig_Template
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
        $__internal_50311e92ae201227d23fa144278fdb448c194797d5e6eead7a6a25415eae2a43 = $this->env->getExtension("native_profiler");
        $__internal_50311e92ae201227d23fa144278fdb448c194797d5e6eead7a6a25415eae2a43->enter($__internal_50311e92ae201227d23fa144278fdb448c194797d5e6eead7a6a25415eae2a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_50311e92ae201227d23fa144278fdb448c194797d5e6eead7a6a25415eae2a43->leave($__internal_50311e92ae201227d23fa144278fdb448c194797d5e6eead7a6a25415eae2a43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
