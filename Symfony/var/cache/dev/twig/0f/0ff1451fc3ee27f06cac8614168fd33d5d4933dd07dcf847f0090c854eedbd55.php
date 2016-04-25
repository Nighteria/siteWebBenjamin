<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d48c2af157ce36a36259078ac97276ec36e5def97b1573e1f8b616295ed58b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_82c7eb3f923040e0ca783fe5b284a898e51fedd3ba6eefbc95936541a171ba4d = $this->env->getExtension("native_profiler");
        $__internal_82c7eb3f923040e0ca783fe5b284a898e51fedd3ba6eefbc95936541a171ba4d->enter($__internal_82c7eb3f923040e0ca783fe5b284a898e51fedd3ba6eefbc95936541a171ba4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c7eb3f923040e0ca783fe5b284a898e51fedd3ba6eefbc95936541a171ba4d->leave($__internal_82c7eb3f923040e0ca783fe5b284a898e51fedd3ba6eefbc95936541a171ba4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f041f45fd6d48a5c7708fc3726f89204566761d5fbdb47b9e6815268d877250 = $this->env->getExtension("native_profiler");
        $__internal_9f041f45fd6d48a5c7708fc3726f89204566761d5fbdb47b9e6815268d877250->enter($__internal_9f041f45fd6d48a5c7708fc3726f89204566761d5fbdb47b9e6815268d877250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9f041f45fd6d48a5c7708fc3726f89204566761d5fbdb47b9e6815268d877250->leave($__internal_9f041f45fd6d48a5c7708fc3726f89204566761d5fbdb47b9e6815268d877250_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c66cc66ad9e436947dd505bf2cab05e9550bae0c383567ae0d56115a9d6b9f4 = $this->env->getExtension("native_profiler");
        $__internal_3c66cc66ad9e436947dd505bf2cab05e9550bae0c383567ae0d56115a9d6b9f4->enter($__internal_3c66cc66ad9e436947dd505bf2cab05e9550bae0c383567ae0d56115a9d6b9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3c66cc66ad9e436947dd505bf2cab05e9550bae0c383567ae0d56115a9d6b9f4->leave($__internal_3c66cc66ad9e436947dd505bf2cab05e9550bae0c383567ae0d56115a9d6b9f4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a193e1e83022afb51b13ad4d0a63b4b7e775d8f2e50ebb0b5908bcbe6a17a3b1 = $this->env->getExtension("native_profiler");
        $__internal_a193e1e83022afb51b13ad4d0a63b4b7e775d8f2e50ebb0b5908bcbe6a17a3b1->enter($__internal_a193e1e83022afb51b13ad4d0a63b4b7e775d8f2e50ebb0b5908bcbe6a17a3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a193e1e83022afb51b13ad4d0a63b4b7e775d8f2e50ebb0b5908bcbe6a17a3b1->leave($__internal_a193e1e83022afb51b13ad4d0a63b4b7e775d8f2e50ebb0b5908bcbe6a17a3b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
