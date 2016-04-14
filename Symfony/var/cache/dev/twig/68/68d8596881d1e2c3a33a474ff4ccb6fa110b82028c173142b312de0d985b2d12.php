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
        $__internal_f5684ccd7f778c83f89bdeedab9fcc989d3c8cdbae4b50a4ed8e7432f590da57 = $this->env->getExtension("native_profiler");
        $__internal_f5684ccd7f778c83f89bdeedab9fcc989d3c8cdbae4b50a4ed8e7432f590da57->enter($__internal_f5684ccd7f778c83f89bdeedab9fcc989d3c8cdbae4b50a4ed8e7432f590da57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5684ccd7f778c83f89bdeedab9fcc989d3c8cdbae4b50a4ed8e7432f590da57->leave($__internal_f5684ccd7f778c83f89bdeedab9fcc989d3c8cdbae4b50a4ed8e7432f590da57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c43ffb798b748b00491133135ce1f097c07983dde996f8f24f79515d20daf8b = $this->env->getExtension("native_profiler");
        $__internal_5c43ffb798b748b00491133135ce1f097c07983dde996f8f24f79515d20daf8b->enter($__internal_5c43ffb798b748b00491133135ce1f097c07983dde996f8f24f79515d20daf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c43ffb798b748b00491133135ce1f097c07983dde996f8f24f79515d20daf8b->leave($__internal_5c43ffb798b748b00491133135ce1f097c07983dde996f8f24f79515d20daf8b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7760a50ef447b9d276e0c21308e37ab3cd7bda0e7de564583441766afa451c74 = $this->env->getExtension("native_profiler");
        $__internal_7760a50ef447b9d276e0c21308e37ab3cd7bda0e7de564583441766afa451c74->enter($__internal_7760a50ef447b9d276e0c21308e37ab3cd7bda0e7de564583441766afa451c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7760a50ef447b9d276e0c21308e37ab3cd7bda0e7de564583441766afa451c74->leave($__internal_7760a50ef447b9d276e0c21308e37ab3cd7bda0e7de564583441766afa451c74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aeb6e5a6c2f7ab340689c7043aa775e8d80bc7dc25d5d7e6418764a3569d77cc = $this->env->getExtension("native_profiler");
        $__internal_aeb6e5a6c2f7ab340689c7043aa775e8d80bc7dc25d5d7e6418764a3569d77cc->enter($__internal_aeb6e5a6c2f7ab340689c7043aa775e8d80bc7dc25d5d7e6418764a3569d77cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aeb6e5a6c2f7ab340689c7043aa775e8d80bc7dc25d5d7e6418764a3569d77cc->leave($__internal_aeb6e5a6c2f7ab340689c7043aa775e8d80bc7dc25d5d7e6418764a3569d77cc_prof);

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
