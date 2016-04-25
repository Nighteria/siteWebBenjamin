<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9c7d2427e5770831b6fff4adfc45138388e0c494ea00c6f5578af32003ae08f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_acd04d3d286adbf310e52742baa0dbfe451a78f812f78092e6ff874030a5fc8d = $this->env->getExtension("native_profiler");
        $__internal_acd04d3d286adbf310e52742baa0dbfe451a78f812f78092e6ff874030a5fc8d->enter($__internal_acd04d3d286adbf310e52742baa0dbfe451a78f812f78092e6ff874030a5fc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acd04d3d286adbf310e52742baa0dbfe451a78f812f78092e6ff874030a5fc8d->leave($__internal_acd04d3d286adbf310e52742baa0dbfe451a78f812f78092e6ff874030a5fc8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_deca5cb22e54ae33006894447254f757cd2dc734c426263f9ed54c81a920734d = $this->env->getExtension("native_profiler");
        $__internal_deca5cb22e54ae33006894447254f757cd2dc734c426263f9ed54c81a920734d->enter($__internal_deca5cb22e54ae33006894447254f757cd2dc734c426263f9ed54c81a920734d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_deca5cb22e54ae33006894447254f757cd2dc734c426263f9ed54c81a920734d->leave($__internal_deca5cb22e54ae33006894447254f757cd2dc734c426263f9ed54c81a920734d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a026fb3586d840a8b2c377b1d539611a92ccaf1b3f108172d829072c75bbba0b = $this->env->getExtension("native_profiler");
        $__internal_a026fb3586d840a8b2c377b1d539611a92ccaf1b3f108172d829072c75bbba0b->enter($__internal_a026fb3586d840a8b2c377b1d539611a92ccaf1b3f108172d829072c75bbba0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a026fb3586d840a8b2c377b1d539611a92ccaf1b3f108172d829072c75bbba0b->leave($__internal_a026fb3586d840a8b2c377b1d539611a92ccaf1b3f108172d829072c75bbba0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c11cbedee4cd50c6fedfdb6b93299dc3a83cab505d3873d38efeab98d5b65282 = $this->env->getExtension("native_profiler");
        $__internal_c11cbedee4cd50c6fedfdb6b93299dc3a83cab505d3873d38efeab98d5b65282->enter($__internal_c11cbedee4cd50c6fedfdb6b93299dc3a83cab505d3873d38efeab98d5b65282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c11cbedee4cd50c6fedfdb6b93299dc3a83cab505d3873d38efeab98d5b65282->leave($__internal_c11cbedee4cd50c6fedfdb6b93299dc3a83cab505d3873d38efeab98d5b65282_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
