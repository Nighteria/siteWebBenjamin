<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9ceb6662cb9db1d317792c2e1c200d80127a666d05f1ba76a7efc56edbb6afea extends Twig_Template
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
        $__internal_d3ddf144a6bba6d4e8521d210a90ca46734cfb0ce57bb590017c04565538a49a = $this->env->getExtension("native_profiler");
        $__internal_d3ddf144a6bba6d4e8521d210a90ca46734cfb0ce57bb590017c04565538a49a->enter($__internal_d3ddf144a6bba6d4e8521d210a90ca46734cfb0ce57bb590017c04565538a49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d3ddf144a6bba6d4e8521d210a90ca46734cfb0ce57bb590017c04565538a49a->leave($__internal_d3ddf144a6bba6d4e8521d210a90ca46734cfb0ce57bb590017c04565538a49a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
