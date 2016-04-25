<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9b6d4ffbe99bff52c52d492e2c1033d3dca22def0245f6b6a066a958672b2ce1 extends Twig_Template
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
        $__internal_077f687a877f114b5f607e4782fb2320dd9ad324fda7b6a261d9156e8ec24810 = $this->env->getExtension("native_profiler");
        $__internal_077f687a877f114b5f607e4782fb2320dd9ad324fda7b6a261d9156e8ec24810->enter($__internal_077f687a877f114b5f607e4782fb2320dd9ad324fda7b6a261d9156e8ec24810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_077f687a877f114b5f607e4782fb2320dd9ad324fda7b6a261d9156e8ec24810->leave($__internal_077f687a877f114b5f607e4782fb2320dd9ad324fda7b6a261d9156e8ec24810_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
