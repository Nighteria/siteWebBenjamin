<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_95f75088508cbcb92dc3d1bc560101b171dd55d415d30f58aa904b9dccc4f0d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78a1a4abb990bde90f7e77f9000897e677d5d186123656e784210f19e99d21a7 = $this->env->getExtension("native_profiler");
        $__internal_78a1a4abb990bde90f7e77f9000897e677d5d186123656e784210f19e99d21a7->enter($__internal_78a1a4abb990bde90f7e77f9000897e677d5d186123656e784210f19e99d21a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78a1a4abb990bde90f7e77f9000897e677d5d186123656e784210f19e99d21a7->leave($__internal_78a1a4abb990bde90f7e77f9000897e677d5d186123656e784210f19e99d21a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b28b38d3567e30da93757053188cd0c8917086f700da607c4fc0f1ea5e39f862 = $this->env->getExtension("native_profiler");
        $__internal_b28b38d3567e30da93757053188cd0c8917086f700da607c4fc0f1ea5e39f862->enter($__internal_b28b38d3567e30da93757053188cd0c8917086f700da607c4fc0f1ea5e39f862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b28b38d3567e30da93757053188cd0c8917086f700da607c4fc0f1ea5e39f862->leave($__internal_b28b38d3567e30da93757053188cd0c8917086f700da607c4fc0f1ea5e39f862_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa2acb53196d2da8649c86aecf7ffa37be03f450a0252c09dedb1546d2a43d01 = $this->env->getExtension("native_profiler");
        $__internal_fa2acb53196d2da8649c86aecf7ffa37be03f450a0252c09dedb1546d2a43d01->enter($__internal_fa2acb53196d2da8649c86aecf7ffa37be03f450a0252c09dedb1546d2a43d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa2acb53196d2da8649c86aecf7ffa37be03f450a0252c09dedb1546d2a43d01->leave($__internal_fa2acb53196d2da8649c86aecf7ffa37be03f450a0252c09dedb1546d2a43d01_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a8cb167a40139a793d95e919532dd0d4b6f928a8a6ae3aa30347b3c61e6bf15 = $this->env->getExtension("native_profiler");
        $__internal_7a8cb167a40139a793d95e919532dd0d4b6f928a8a6ae3aa30347b3c61e6bf15->enter($__internal_7a8cb167a40139a793d95e919532dd0d4b6f928a8a6ae3aa30347b3c61e6bf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7a8cb167a40139a793d95e919532dd0d4b6f928a8a6ae3aa30347b3c61e6bf15->leave($__internal_7a8cb167a40139a793d95e919532dd0d4b6f928a8a6ae3aa30347b3c61e6bf15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
