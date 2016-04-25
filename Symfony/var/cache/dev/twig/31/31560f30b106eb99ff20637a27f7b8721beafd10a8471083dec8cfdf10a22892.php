<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a2ad0289e8ad1ab00bf7cdaed1d4cb1456477998b39af15fbaf6abbdfb718dd1 extends Twig_Template
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
        $__internal_bb3234d7b56a4415e6a86af8296f5d7e2b0b5c388c43952307cc22adbf508578 = $this->env->getExtension("native_profiler");
        $__internal_bb3234d7b56a4415e6a86af8296f5d7e2b0b5c388c43952307cc22adbf508578->enter($__internal_bb3234d7b56a4415e6a86af8296f5d7e2b0b5c388c43952307cc22adbf508578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_bb3234d7b56a4415e6a86af8296f5d7e2b0b5c388c43952307cc22adbf508578->leave($__internal_bb3234d7b56a4415e6a86af8296f5d7e2b0b5c388c43952307cc22adbf508578_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
