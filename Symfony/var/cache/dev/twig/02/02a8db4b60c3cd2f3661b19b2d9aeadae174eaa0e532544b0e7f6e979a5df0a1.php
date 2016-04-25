<?php

/* ::base.html.twig */
class __TwigTemplate_a9dafdae8bd2563846e93911b2a83f33d8bccbf00a93264f4ea6e28a83a1f5f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65947e09625025dcc2458d49e1bbd3c1cbfec1a488844801686057f5fd4162a0 = $this->env->getExtension("native_profiler");
        $__internal_65947e09625025dcc2458d49e1bbd3c1cbfec1a488844801686057f5fd4162a0->enter($__internal_65947e09625025dcc2458d49e1bbd3c1cbfec1a488844801686057f5fd4162a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_65947e09625025dcc2458d49e1bbd3c1cbfec1a488844801686057f5fd4162a0->leave($__internal_65947e09625025dcc2458d49e1bbd3c1cbfec1a488844801686057f5fd4162a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c1e57de0d84d2cdb1c154e257f81b615973164bc12d5970c8168e03a2bc492d = $this->env->getExtension("native_profiler");
        $__internal_1c1e57de0d84d2cdb1c154e257f81b615973164bc12d5970c8168e03a2bc492d->enter($__internal_1c1e57de0d84d2cdb1c154e257f81b615973164bc12d5970c8168e03a2bc492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c1e57de0d84d2cdb1c154e257f81b615973164bc12d5970c8168e03a2bc492d->leave($__internal_1c1e57de0d84d2cdb1c154e257f81b615973164bc12d5970c8168e03a2bc492d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_959421aa69ba4db9ca58cfb52796b4b911f5950ce76117adeeff5cbe04c5635a = $this->env->getExtension("native_profiler");
        $__internal_959421aa69ba4db9ca58cfb52796b4b911f5950ce76117adeeff5cbe04c5635a->enter($__internal_959421aa69ba4db9ca58cfb52796b4b911f5950ce76117adeeff5cbe04c5635a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_959421aa69ba4db9ca58cfb52796b4b911f5950ce76117adeeff5cbe04c5635a->leave($__internal_959421aa69ba4db9ca58cfb52796b4b911f5950ce76117adeeff5cbe04c5635a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_88e9383d6703957ad443f4d2c3dc2cce0be184ccbbaa4156f30aab84ca4e0cae = $this->env->getExtension("native_profiler");
        $__internal_88e9383d6703957ad443f4d2c3dc2cce0be184ccbbaa4156f30aab84ca4e0cae->enter($__internal_88e9383d6703957ad443f4d2c3dc2cce0be184ccbbaa4156f30aab84ca4e0cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88e9383d6703957ad443f4d2c3dc2cce0be184ccbbaa4156f30aab84ca4e0cae->leave($__internal_88e9383d6703957ad443f4d2c3dc2cce0be184ccbbaa4156f30aab84ca4e0cae_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e09eec0b887f5dc6e8e7e81d0250872eddad7477c70808fa61ea017d4a5df91d = $this->env->getExtension("native_profiler");
        $__internal_e09eec0b887f5dc6e8e7e81d0250872eddad7477c70808fa61ea017d4a5df91d->enter($__internal_e09eec0b887f5dc6e8e7e81d0250872eddad7477c70808fa61ea017d4a5df91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e09eec0b887f5dc6e8e7e81d0250872eddad7477c70808fa61ea017d4a5df91d->leave($__internal_e09eec0b887f5dc6e8e7e81d0250872eddad7477c70808fa61ea017d4a5df91d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
