<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c08ac646b868fc5021a88b036bb370969dc8f1b5c3ce840222bba5169e70071f extends Twig_Template
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
        $__internal_cae63b0f302f53f68fd75d984833a2827f654cdc5d88a9802d879dc2de54753c = $this->env->getExtension("native_profiler");
        $__internal_cae63b0f302f53f68fd75d984833a2827f654cdc5d88a9802d879dc2de54753c->enter($__internal_cae63b0f302f53f68fd75d984833a2827f654cdc5d88a9802d879dc2de54753c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cae63b0f302f53f68fd75d984833a2827f654cdc5d88a9802d879dc2de54753c->leave($__internal_cae63b0f302f53f68fd75d984833a2827f654cdc5d88a9802d879dc2de54753c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
