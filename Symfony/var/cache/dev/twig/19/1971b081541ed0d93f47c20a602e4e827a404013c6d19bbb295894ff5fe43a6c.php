<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0287245d506de100298d48e3a432e18df9479b017f170275cfb8f0aab430845a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4dc5e4fc1c6714d147117ae8b2ca89b593b36e02ba3c34be95610a34d4196b5 = $this->env->getExtension("native_profiler");
        $__internal_b4dc5e4fc1c6714d147117ae8b2ca89b593b36e02ba3c34be95610a34d4196b5->enter($__internal_b4dc5e4fc1c6714d147117ae8b2ca89b593b36e02ba3c34be95610a34d4196b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4dc5e4fc1c6714d147117ae8b2ca89b593b36e02ba3c34be95610a34d4196b5->leave($__internal_b4dc5e4fc1c6714d147117ae8b2ca89b593b36e02ba3c34be95610a34d4196b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e49f2f57e6464b459d3694f14064db42da0afbb2a7c2065d2aece162696e834 = $this->env->getExtension("native_profiler");
        $__internal_1e49f2f57e6464b459d3694f14064db42da0afbb2a7c2065d2aece162696e834->enter($__internal_1e49f2f57e6464b459d3694f14064db42da0afbb2a7c2065d2aece162696e834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e49f2f57e6464b459d3694f14064db42da0afbb2a7c2065d2aece162696e834->leave($__internal_1e49f2f57e6464b459d3694f14064db42da0afbb2a7c2065d2aece162696e834_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5776fbe8c7e289c13a5269f6b9725c44304080c265b41c85089a792aa610e49d = $this->env->getExtension("native_profiler");
        $__internal_5776fbe8c7e289c13a5269f6b9725c44304080c265b41c85089a792aa610e49d->enter($__internal_5776fbe8c7e289c13a5269f6b9725c44304080c265b41c85089a792aa610e49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5776fbe8c7e289c13a5269f6b9725c44304080c265b41c85089a792aa610e49d->leave($__internal_5776fbe8c7e289c13a5269f6b9725c44304080c265b41c85089a792aa610e49d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30217e7dafa4139f14f1b3caac124aaaceb2bf12eab8a7439ad5591537a81c4 = $this->env->getExtension("native_profiler");
        $__internal_c30217e7dafa4139f14f1b3caac124aaaceb2bf12eab8a7439ad5591537a81c4->enter($__internal_c30217e7dafa4139f14f1b3caac124aaaceb2bf12eab8a7439ad5591537a81c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c30217e7dafa4139f14f1b3caac124aaaceb2bf12eab8a7439ad5591537a81c4->leave($__internal_c30217e7dafa4139f14f1b3caac124aaaceb2bf12eab8a7439ad5591537a81c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
