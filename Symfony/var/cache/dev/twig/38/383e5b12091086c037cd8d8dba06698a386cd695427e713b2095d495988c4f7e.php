<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_16736ca76989f8687b4b8fcdb79924c3de7fded1e0e690aad4bff4697fffb050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_c09d3adef73c615d76f1125d5d6665c4ec661f4595212c068164015f7f4ef9b3 = $this->env->getExtension("native_profiler");
        $__internal_c09d3adef73c615d76f1125d5d6665c4ec661f4595212c068164015f7f4ef9b3->enter($__internal_c09d3adef73c615d76f1125d5d6665c4ec661f4595212c068164015f7f4ef9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c09d3adef73c615d76f1125d5d6665c4ec661f4595212c068164015f7f4ef9b3->leave($__internal_c09d3adef73c615d76f1125d5d6665c4ec661f4595212c068164015f7f4ef9b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f63dacd3e2c70374e1b7bc60be67ba90fd6f77cedbcce1c3e16c2caaad89579 = $this->env->getExtension("native_profiler");
        $__internal_0f63dacd3e2c70374e1b7bc60be67ba90fd6f77cedbcce1c3e16c2caaad89579->enter($__internal_0f63dacd3e2c70374e1b7bc60be67ba90fd6f77cedbcce1c3e16c2caaad89579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0f63dacd3e2c70374e1b7bc60be67ba90fd6f77cedbcce1c3e16c2caaad89579->leave($__internal_0f63dacd3e2c70374e1b7bc60be67ba90fd6f77cedbcce1c3e16c2caaad89579_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_804a697153de1f3df4735e33a6f1cfb527120613f363569dd553738eed28ed4a = $this->env->getExtension("native_profiler");
        $__internal_804a697153de1f3df4735e33a6f1cfb527120613f363569dd553738eed28ed4a->enter($__internal_804a697153de1f3df4735e33a6f1cfb527120613f363569dd553738eed28ed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_804a697153de1f3df4735e33a6f1cfb527120613f363569dd553738eed28ed4a->leave($__internal_804a697153de1f3df4735e33a6f1cfb527120613f363569dd553738eed28ed4a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
