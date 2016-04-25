<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a6b1c9067b7453f1f1fe8253c6c9cd577ec5602d72e3e9710ef23040b564f1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_92592009d2fda58f74ad96dbd49dc4fe892bd9319c5b8250212853f1d1d86c4f = $this->env->getExtension("native_profiler");
        $__internal_92592009d2fda58f74ad96dbd49dc4fe892bd9319c5b8250212853f1d1d86c4f->enter($__internal_92592009d2fda58f74ad96dbd49dc4fe892bd9319c5b8250212853f1d1d86c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92592009d2fda58f74ad96dbd49dc4fe892bd9319c5b8250212853f1d1d86c4f->leave($__internal_92592009d2fda58f74ad96dbd49dc4fe892bd9319c5b8250212853f1d1d86c4f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65a491d960a3d8928af37dd238e73eea46d177c9ddb72097bc5ecb2360736a5e = $this->env->getExtension("native_profiler");
        $__internal_65a491d960a3d8928af37dd238e73eea46d177c9ddb72097bc5ecb2360736a5e->enter($__internal_65a491d960a3d8928af37dd238e73eea46d177c9ddb72097bc5ecb2360736a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_65a491d960a3d8928af37dd238e73eea46d177c9ddb72097bc5ecb2360736a5e->leave($__internal_65a491d960a3d8928af37dd238e73eea46d177c9ddb72097bc5ecb2360736a5e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dfcb812576175471e1fb31897636b36517aa1dc8ee5d2063d07beb4b6469696 = $this->env->getExtension("native_profiler");
        $__internal_0dfcb812576175471e1fb31897636b36517aa1dc8ee5d2063d07beb4b6469696->enter($__internal_0dfcb812576175471e1fb31897636b36517aa1dc8ee5d2063d07beb4b6469696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0dfcb812576175471e1fb31897636b36517aa1dc8ee5d2063d07beb4b6469696->leave($__internal_0dfcb812576175471e1fb31897636b36517aa1dc8ee5d2063d07beb4b6469696_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
