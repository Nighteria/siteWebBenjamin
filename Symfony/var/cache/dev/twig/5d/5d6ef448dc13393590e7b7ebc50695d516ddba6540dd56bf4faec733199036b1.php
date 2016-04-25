<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_211007d1117c1cb66f9b9a8f5baf5e79db4e451922087f39f5262e340d06e29d extends Twig_Template
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
        $__internal_b1f8fe3b78568c5025933a4c1b53e82ddef354afa7bb5e6d84ab5fc2d6ba8bfd = $this->env->getExtension("native_profiler");
        $__internal_b1f8fe3b78568c5025933a4c1b53e82ddef354afa7bb5e6d84ab5fc2d6ba8bfd->enter($__internal_b1f8fe3b78568c5025933a4c1b53e82ddef354afa7bb5e6d84ab5fc2d6ba8bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b1f8fe3b78568c5025933a4c1b53e82ddef354afa7bb5e6d84ab5fc2d6ba8bfd->leave($__internal_b1f8fe3b78568c5025933a4c1b53e82ddef354afa7bb5e6d84ab5fc2d6ba8bfd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
