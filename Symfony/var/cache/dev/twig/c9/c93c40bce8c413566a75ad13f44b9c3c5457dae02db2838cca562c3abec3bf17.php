<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_3d1328399541ec11b8f71b5ba6fc30a8ad0eaf235f49697dfee47c61d6fafa94 extends Twig_Template
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
        $__internal_b2c9186188a73fa688fe5ee2ae6b7664b9c770eb20772c6f9f266989eb6e2447 = $this->env->getExtension("native_profiler");
        $__internal_b2c9186188a73fa688fe5ee2ae6b7664b9c770eb20772c6f9f266989eb6e2447->enter($__internal_b2c9186188a73fa688fe5ee2ae6b7664b9c770eb20772c6f9f266989eb6e2447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b2c9186188a73fa688fe5ee2ae6b7664b9c770eb20772c6f9f266989eb6e2447->leave($__internal_b2c9186188a73fa688fe5ee2ae6b7664b9c770eb20772c6f9f266989eb6e2447_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
