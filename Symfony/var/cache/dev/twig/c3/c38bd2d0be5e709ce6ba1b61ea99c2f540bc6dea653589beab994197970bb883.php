<?php

/* base.html.twig */
class __TwigTemplate_3f1872c0c3bd37ae2aabb79b61286f70493466a7b5cf4e383e939166e68df048 extends Twig_Template
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
        $__internal_6ec28b43e54b998c240f5c45388c2fe77e327b8461832e6cf3272514da23992f = $this->env->getExtension("native_profiler");
        $__internal_6ec28b43e54b998c240f5c45388c2fe77e327b8461832e6cf3272514da23992f->enter($__internal_6ec28b43e54b998c240f5c45388c2fe77e327b8461832e6cf3272514da23992f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6ec28b43e54b998c240f5c45388c2fe77e327b8461832e6cf3272514da23992f->leave($__internal_6ec28b43e54b998c240f5c45388c2fe77e327b8461832e6cf3272514da23992f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_842e32d52ef079b80b0f88dc6bdc800806b1051d5a1c9dfb6c56edf8baac7fbe = $this->env->getExtension("native_profiler");
        $__internal_842e32d52ef079b80b0f88dc6bdc800806b1051d5a1c9dfb6c56edf8baac7fbe->enter($__internal_842e32d52ef079b80b0f88dc6bdc800806b1051d5a1c9dfb6c56edf8baac7fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_842e32d52ef079b80b0f88dc6bdc800806b1051d5a1c9dfb6c56edf8baac7fbe->leave($__internal_842e32d52ef079b80b0f88dc6bdc800806b1051d5a1c9dfb6c56edf8baac7fbe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e25d1cff82b70332ff7d9e9ffb1c0e5415951f415f8919c70a67efea03f55115 = $this->env->getExtension("native_profiler");
        $__internal_e25d1cff82b70332ff7d9e9ffb1c0e5415951f415f8919c70a67efea03f55115->enter($__internal_e25d1cff82b70332ff7d9e9ffb1c0e5415951f415f8919c70a67efea03f55115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e25d1cff82b70332ff7d9e9ffb1c0e5415951f415f8919c70a67efea03f55115->leave($__internal_e25d1cff82b70332ff7d9e9ffb1c0e5415951f415f8919c70a67efea03f55115_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a51a1db18c463662d524ad698ed04eca1d2d659b05ac697cbcc92c6d140b034 = $this->env->getExtension("native_profiler");
        $__internal_3a51a1db18c463662d524ad698ed04eca1d2d659b05ac697cbcc92c6d140b034->enter($__internal_3a51a1db18c463662d524ad698ed04eca1d2d659b05ac697cbcc92c6d140b034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3a51a1db18c463662d524ad698ed04eca1d2d659b05ac697cbcc92c6d140b034->leave($__internal_3a51a1db18c463662d524ad698ed04eca1d2d659b05ac697cbcc92c6d140b034_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e29fb2697b388b9b54e6bdc804ca6f337775fe1fc7a2f2ede3a396c929de763a = $this->env->getExtension("native_profiler");
        $__internal_e29fb2697b388b9b54e6bdc804ca6f337775fe1fc7a2f2ede3a396c929de763a->enter($__internal_e29fb2697b388b9b54e6bdc804ca6f337775fe1fc7a2f2ede3a396c929de763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e29fb2697b388b9b54e6bdc804ca6f337775fe1fc7a2f2ede3a396c929de763a->leave($__internal_e29fb2697b388b9b54e6bdc804ca6f337775fe1fc7a2f2ede3a396c929de763a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
