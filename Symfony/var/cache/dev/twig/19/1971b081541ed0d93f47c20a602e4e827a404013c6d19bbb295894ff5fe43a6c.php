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
        $__internal_b961fa5a1ca0b5647a927c84c0cc66981ecf9b888ce196a4a2e8681fd30b2342 = $this->env->getExtension("native_profiler");
        $__internal_b961fa5a1ca0b5647a927c84c0cc66981ecf9b888ce196a4a2e8681fd30b2342->enter($__internal_b961fa5a1ca0b5647a927c84c0cc66981ecf9b888ce196a4a2e8681fd30b2342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b961fa5a1ca0b5647a927c84c0cc66981ecf9b888ce196a4a2e8681fd30b2342->leave($__internal_b961fa5a1ca0b5647a927c84c0cc66981ecf9b888ce196a4a2e8681fd30b2342_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7eca0052306e7c29423d9d209a51cbfa655a11ad8b1fd349fbf6617667fa5f3 = $this->env->getExtension("native_profiler");
        $__internal_e7eca0052306e7c29423d9d209a51cbfa655a11ad8b1fd349fbf6617667fa5f3->enter($__internal_e7eca0052306e7c29423d9d209a51cbfa655a11ad8b1fd349fbf6617667fa5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e7eca0052306e7c29423d9d209a51cbfa655a11ad8b1fd349fbf6617667fa5f3->leave($__internal_e7eca0052306e7c29423d9d209a51cbfa655a11ad8b1fd349fbf6617667fa5f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78262e22b53b1f59314c4596dd4d83609874cf56cc9d65a722df9ff935c24f7d = $this->env->getExtension("native_profiler");
        $__internal_78262e22b53b1f59314c4596dd4d83609874cf56cc9d65a722df9ff935c24f7d->enter($__internal_78262e22b53b1f59314c4596dd4d83609874cf56cc9d65a722df9ff935c24f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78262e22b53b1f59314c4596dd4d83609874cf56cc9d65a722df9ff935c24f7d->leave($__internal_78262e22b53b1f59314c4596dd4d83609874cf56cc9d65a722df9ff935c24f7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1a0128331497dbda7749285658a08bdcb768ab183017dc83df0025f1483a8be = $this->env->getExtension("native_profiler");
        $__internal_a1a0128331497dbda7749285658a08bdcb768ab183017dc83df0025f1483a8be->enter($__internal_a1a0128331497dbda7749285658a08bdcb768ab183017dc83df0025f1483a8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a1a0128331497dbda7749285658a08bdcb768ab183017dc83df0025f1483a8be->leave($__internal_a1a0128331497dbda7749285658a08bdcb768ab183017dc83df0025f1483a8be_prof);

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
