<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_59f0b6dccc261654e557503cd002210ebdd8bd18d623d457c3dafd169b6611c8 extends Twig_Template
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
        $__internal_5f12f0fcd6f61d1392988eb358b0684d207f093128ca006539dc64d46e1bce6f = $this->env->getExtension("native_profiler");
        $__internal_5f12f0fcd6f61d1392988eb358b0684d207f093128ca006539dc64d46e1bce6f->enter($__internal_5f12f0fcd6f61d1392988eb358b0684d207f093128ca006539dc64d46e1bce6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5f12f0fcd6f61d1392988eb358b0684d207f093128ca006539dc64d46e1bce6f->leave($__internal_5f12f0fcd6f61d1392988eb358b0684d207f093128ca006539dc64d46e1bce6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
