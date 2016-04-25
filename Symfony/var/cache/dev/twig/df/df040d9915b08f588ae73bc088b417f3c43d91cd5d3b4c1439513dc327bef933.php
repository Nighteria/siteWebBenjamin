<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1b646002f19b3b74b6b96d497227fe68fb72b0478de473d7005d82055a75878c extends Twig_Template
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
        $__internal_a6b977449a84de711f427577bf9b9483b60648684589487526f2e98095f0f481 = $this->env->getExtension("native_profiler");
        $__internal_a6b977449a84de711f427577bf9b9483b60648684589487526f2e98095f0f481->enter($__internal_a6b977449a84de711f427577bf9b9483b60648684589487526f2e98095f0f481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a6b977449a84de711f427577bf9b9483b60648684589487526f2e98095f0f481->leave($__internal_a6b977449a84de711f427577bf9b9483b60648684589487526f2e98095f0f481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
