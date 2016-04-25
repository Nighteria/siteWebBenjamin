<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c37bb4c9a66fe6f3e034db5cde6287ecf152c00c30be9c84e56afc63a86fb2d9 extends Twig_Template
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
        $__internal_fb58f84e03195781f6e00da9ba40a78e030da89a7d5bf7863547115f7e490317 = $this->env->getExtension("native_profiler");
        $__internal_fb58f84e03195781f6e00da9ba40a78e030da89a7d5bf7863547115f7e490317->enter($__internal_fb58f84e03195781f6e00da9ba40a78e030da89a7d5bf7863547115f7e490317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fb58f84e03195781f6e00da9ba40a78e030da89a7d5bf7863547115f7e490317->leave($__internal_fb58f84e03195781f6e00da9ba40a78e030da89a7d5bf7863547115f7e490317_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
