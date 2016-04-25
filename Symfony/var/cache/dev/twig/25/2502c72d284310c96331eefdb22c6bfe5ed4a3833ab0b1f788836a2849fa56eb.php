<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6a55b4622ee050a7712f8e58b319ee7a14f99fdcaac1f6963225c3dbc06b44b1 extends Twig_Template
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
        $__internal_1fa6f352404f2f86c25c4ee8fb768479bb12b69054f68c9c8e69fc5526e419bc = $this->env->getExtension("native_profiler");
        $__internal_1fa6f352404f2f86c25c4ee8fb768479bb12b69054f68c9c8e69fc5526e419bc->enter($__internal_1fa6f352404f2f86c25c4ee8fb768479bb12b69054f68c9c8e69fc5526e419bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1fa6f352404f2f86c25c4ee8fb768479bb12b69054f68c9c8e69fc5526e419bc->leave($__internal_1fa6f352404f2f86c25c4ee8fb768479bb12b69054f68c9c8e69fc5526e419bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
