<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1653f8929433ea471ee4f02305a7f78244636ea533fdd32b4484ad4bfb78b14e extends Twig_Template
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
        $__internal_fe99553053b93bb00f66cea8cce622444bb77ab623e9ffc0a80847d9a9d0ce07 = $this->env->getExtension("native_profiler");
        $__internal_fe99553053b93bb00f66cea8cce622444bb77ab623e9ffc0a80847d9a9d0ce07->enter($__internal_fe99553053b93bb00f66cea8cce622444bb77ab623e9ffc0a80847d9a9d0ce07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fe99553053b93bb00f66cea8cce622444bb77ab623e9ffc0a80847d9a9d0ce07->leave($__internal_fe99553053b93bb00f66cea8cce622444bb77ab623e9ffc0a80847d9a9d0ce07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
