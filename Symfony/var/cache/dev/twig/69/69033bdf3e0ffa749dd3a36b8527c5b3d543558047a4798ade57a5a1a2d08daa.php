<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e56e671d24b2cbe1e273bc41f4372e046711bc9774087d225a795ec713f7572f extends Twig_Template
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
        $__internal_b89d34f5dd59d1a272197e3895fe3f946a900baec87e1a3abd0f6c37696c8802 = $this->env->getExtension("native_profiler");
        $__internal_b89d34f5dd59d1a272197e3895fe3f946a900baec87e1a3abd0f6c37696c8802->enter($__internal_b89d34f5dd59d1a272197e3895fe3f946a900baec87e1a3abd0f6c37696c8802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b89d34f5dd59d1a272197e3895fe3f946a900baec87e1a3abd0f6c37696c8802->leave($__internal_b89d34f5dd59d1a272197e3895fe3f946a900baec87e1a3abd0f6c37696c8802_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
