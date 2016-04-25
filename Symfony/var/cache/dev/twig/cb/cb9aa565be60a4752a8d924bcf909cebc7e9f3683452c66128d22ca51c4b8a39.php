<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_76d6214160bf4bd9ca84f24b0f4d5c0a6eb5ba66f97d073daa09b5e7ffa44fec extends Twig_Template
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
        $__internal_fb0996b48612965fc5aceaf280e5dc5bde51cab7fdce0ecbcf65d4cbd38685cd = $this->env->getExtension("native_profiler");
        $__internal_fb0996b48612965fc5aceaf280e5dc5bde51cab7fdce0ecbcf65d4cbd38685cd->enter($__internal_fb0996b48612965fc5aceaf280e5dc5bde51cab7fdce0ecbcf65d4cbd38685cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fb0996b48612965fc5aceaf280e5dc5bde51cab7fdce0ecbcf65d4cbd38685cd->leave($__internal_fb0996b48612965fc5aceaf280e5dc5bde51cab7fdce0ecbcf65d4cbd38685cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
