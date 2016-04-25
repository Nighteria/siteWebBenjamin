<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_07cd6b50febb688af3476856c5a71be684fd5255c229a8c9343f8e52e5ea3f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_b6c33321a0f609c18c320a8bee2eefbcc0781b7dd589170f12861ceaf61c247d = $this->env->getExtension("native_profiler");
        $__internal_b6c33321a0f609c18c320a8bee2eefbcc0781b7dd589170f12861ceaf61c247d->enter($__internal_b6c33321a0f609c18c320a8bee2eefbcc0781b7dd589170f12861ceaf61c247d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c33321a0f609c18c320a8bee2eefbcc0781b7dd589170f12861ceaf61c247d->leave($__internal_b6c33321a0f609c18c320a8bee2eefbcc0781b7dd589170f12861ceaf61c247d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15d8180eef171bafd938b29464a586622e5f5f18d4caa3f4733f17d5eb57ab7e = $this->env->getExtension("native_profiler");
        $__internal_15d8180eef171bafd938b29464a586622e5f5f18d4caa3f4733f17d5eb57ab7e->enter($__internal_15d8180eef171bafd938b29464a586622e5f5f18d4caa3f4733f17d5eb57ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_15d8180eef171bafd938b29464a586622e5f5f18d4caa3f4733f17d5eb57ab7e->leave($__internal_15d8180eef171bafd938b29464a586622e5f5f18d4caa3f4733f17d5eb57ab7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c5710ceae9f6ba0f2e5b87680cc1ff85e988b73eea69c324dbf2ce416f64a9b = $this->env->getExtension("native_profiler");
        $__internal_0c5710ceae9f6ba0f2e5b87680cc1ff85e988b73eea69c324dbf2ce416f64a9b->enter($__internal_0c5710ceae9f6ba0f2e5b87680cc1ff85e988b73eea69c324dbf2ce416f64a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c5710ceae9f6ba0f2e5b87680cc1ff85e988b73eea69c324dbf2ce416f64a9b->leave($__internal_0c5710ceae9f6ba0f2e5b87680cc1ff85e988b73eea69c324dbf2ce416f64a9b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b2e408c81caaf53238c516c63ce7867f3648bbea852ab89065a3370786d1fa0 = $this->env->getExtension("native_profiler");
        $__internal_2b2e408c81caaf53238c516c63ce7867f3648bbea852ab89065a3370786d1fa0->enter($__internal_2b2e408c81caaf53238c516c63ce7867f3648bbea852ab89065a3370786d1fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2b2e408c81caaf53238c516c63ce7867f3648bbea852ab89065a3370786d1fa0->leave($__internal_2b2e408c81caaf53238c516c63ce7867f3648bbea852ab89065a3370786d1fa0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
