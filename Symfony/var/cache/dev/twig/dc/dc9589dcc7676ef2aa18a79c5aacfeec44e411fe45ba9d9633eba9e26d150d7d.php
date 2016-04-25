<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c8c2af735adf8e22efe102d8287c81b9bcca3d7433393aa15381a5d5002df310 extends Twig_Template
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
        $__internal_ce01420cda31dd0750b3a07850019baa193976d687115b06cf4adeb0782c3b23 = $this->env->getExtension("native_profiler");
        $__internal_ce01420cda31dd0750b3a07850019baa193976d687115b06cf4adeb0782c3b23->enter($__internal_ce01420cda31dd0750b3a07850019baa193976d687115b06cf4adeb0782c3b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ce01420cda31dd0750b3a07850019baa193976d687115b06cf4adeb0782c3b23->leave($__internal_ce01420cda31dd0750b3a07850019baa193976d687115b06cf4adeb0782c3b23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
