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
        $__internal_7749d72eb5b9206575357d269656e7b009e0ca0439c1ff69bf17283f1616e1ed = $this->env->getExtension("native_profiler");
        $__internal_7749d72eb5b9206575357d269656e7b009e0ca0439c1ff69bf17283f1616e1ed->enter($__internal_7749d72eb5b9206575357d269656e7b009e0ca0439c1ff69bf17283f1616e1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7749d72eb5b9206575357d269656e7b009e0ca0439c1ff69bf17283f1616e1ed->leave($__internal_7749d72eb5b9206575357d269656e7b009e0ca0439c1ff69bf17283f1616e1ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb06dcd5e07c88f309c7fd5cb7c138fd57a8c0fc0ccb73926303a32e8877a050 = $this->env->getExtension("native_profiler");
        $__internal_eb06dcd5e07c88f309c7fd5cb7c138fd57a8c0fc0ccb73926303a32e8877a050->enter($__internal_eb06dcd5e07c88f309c7fd5cb7c138fd57a8c0fc0ccb73926303a32e8877a050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eb06dcd5e07c88f309c7fd5cb7c138fd57a8c0fc0ccb73926303a32e8877a050->leave($__internal_eb06dcd5e07c88f309c7fd5cb7c138fd57a8c0fc0ccb73926303a32e8877a050_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a361c4447edd89b553baf505389f0f28a74dd8a36a574fd5486280bbcb7b6c1c = $this->env->getExtension("native_profiler");
        $__internal_a361c4447edd89b553baf505389f0f28a74dd8a36a574fd5486280bbcb7b6c1c->enter($__internal_a361c4447edd89b553baf505389f0f28a74dd8a36a574fd5486280bbcb7b6c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a361c4447edd89b553baf505389f0f28a74dd8a36a574fd5486280bbcb7b6c1c->leave($__internal_a361c4447edd89b553baf505389f0f28a74dd8a36a574fd5486280bbcb7b6c1c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_127703701dfb77c9c0d32e961f4a3596f6a62932af26fd3d0ba0cbe14f4a5931 = $this->env->getExtension("native_profiler");
        $__internal_127703701dfb77c9c0d32e961f4a3596f6a62932af26fd3d0ba0cbe14f4a5931->enter($__internal_127703701dfb77c9c0d32e961f4a3596f6a62932af26fd3d0ba0cbe14f4a5931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_127703701dfb77c9c0d32e961f4a3596f6a62932af26fd3d0ba0cbe14f4a5931->leave($__internal_127703701dfb77c9c0d32e961f4a3596f6a62932af26fd3d0ba0cbe14f4a5931_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76ff01c6824d9a5734b4472011b01e54dc819dc61a952279c1b25bac7affe945 = $this->env->getExtension("native_profiler");
        $__internal_76ff01c6824d9a5734b4472011b01e54dc819dc61a952279c1b25bac7affe945->enter($__internal_76ff01c6824d9a5734b4472011b01e54dc819dc61a952279c1b25bac7affe945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_76ff01c6824d9a5734b4472011b01e54dc819dc61a952279c1b25bac7affe945->leave($__internal_76ff01c6824d9a5734b4472011b01e54dc819dc61a952279c1b25bac7affe945_prof);

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
