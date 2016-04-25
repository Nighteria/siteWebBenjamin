<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_fe19151b31c552cfdf03c9c1a477cf3b5d02362e29a4b84160153919126ffb07 extends Twig_Template
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
        $__internal_3a23a81e3369a1162b01af78251bb634d1e20ba2e131ab5b08d065b74bd3f486 = $this->env->getExtension("native_profiler");
        $__internal_3a23a81e3369a1162b01af78251bb634d1e20ba2e131ab5b08d065b74bd3f486->enter($__internal_3a23a81e3369a1162b01af78251bb634d1e20ba2e131ab5b08d065b74bd3f486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3a23a81e3369a1162b01af78251bb634d1e20ba2e131ab5b08d065b74bd3f486->leave($__internal_3a23a81e3369a1162b01af78251bb634d1e20ba2e131ab5b08d065b74bd3f486_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
