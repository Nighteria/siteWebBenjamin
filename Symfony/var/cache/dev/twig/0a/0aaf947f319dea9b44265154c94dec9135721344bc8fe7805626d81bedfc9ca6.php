<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c67f30d778ab9724eb06cd2b41d9aa6ea343c9c3d6f0048d7298a784dcf3e3a0 extends Twig_Template
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
        $__internal_dad23dfe5ce4ea6fd85b844351a743eeb36b2a629563aa5adba7bee431078a71 = $this->env->getExtension("native_profiler");
        $__internal_dad23dfe5ce4ea6fd85b844351a743eeb36b2a629563aa5adba7bee431078a71->enter($__internal_dad23dfe5ce4ea6fd85b844351a743eeb36b2a629563aa5adba7bee431078a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dad23dfe5ce4ea6fd85b844351a743eeb36b2a629563aa5adba7bee431078a71->leave($__internal_dad23dfe5ce4ea6fd85b844351a743eeb36b2a629563aa5adba7bee431078a71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
