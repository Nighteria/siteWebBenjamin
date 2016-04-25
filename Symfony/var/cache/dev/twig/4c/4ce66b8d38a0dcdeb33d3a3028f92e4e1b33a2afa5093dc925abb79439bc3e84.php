<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_07455af368f9a0f2deba1a55e919dd2d52920e46fe2dcfc519d14c97da706aaf extends Twig_Template
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
        $__internal_3b822b601fbae0e6aa2bc5acafb92529c0cd13c9c081a8dc828a99afb9db5488 = $this->env->getExtension("native_profiler");
        $__internal_3b822b601fbae0e6aa2bc5acafb92529c0cd13c9c081a8dc828a99afb9db5488->enter($__internal_3b822b601fbae0e6aa2bc5acafb92529c0cd13c9c081a8dc828a99afb9db5488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3b822b601fbae0e6aa2bc5acafb92529c0cd13c9c081a8dc828a99afb9db5488->leave($__internal_3b822b601fbae0e6aa2bc5acafb92529c0cd13c9c081a8dc828a99afb9db5488_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
