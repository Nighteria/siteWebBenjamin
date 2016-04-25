<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c8ea90fe472b42165688cbfeb1e0a32e469f42d246b751ab46bbc871debf024b extends Twig_Template
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
        $__internal_be07c6f3670b15a2481ed82719308685d590507f971ffa8ec8620e8e74f1bafa = $this->env->getExtension("native_profiler");
        $__internal_be07c6f3670b15a2481ed82719308685d590507f971ffa8ec8620e8e74f1bafa->enter($__internal_be07c6f3670b15a2481ed82719308685d590507f971ffa8ec8620e8e74f1bafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_be07c6f3670b15a2481ed82719308685d590507f971ffa8ec8620e8e74f1bafa->leave($__internal_be07c6f3670b15a2481ed82719308685d590507f971ffa8ec8620e8e74f1bafa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
