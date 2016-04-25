<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_56f0adbb696e356a752fabeb28fa4cbbf33fd340f04a50b498cc662be00566fb extends Twig_Template
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
        $__internal_cc4c5727a07d5ad662ab30489e42bc81c72b443f4d1f0141e1821b6c0327e03f = $this->env->getExtension("native_profiler");
        $__internal_cc4c5727a07d5ad662ab30489e42bc81c72b443f4d1f0141e1821b6c0327e03f->enter($__internal_cc4c5727a07d5ad662ab30489e42bc81c72b443f4d1f0141e1821b6c0327e03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cc4c5727a07d5ad662ab30489e42bc81c72b443f4d1f0141e1821b6c0327e03f->leave($__internal_cc4c5727a07d5ad662ab30489e42bc81c72b443f4d1f0141e1821b6c0327e03f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
