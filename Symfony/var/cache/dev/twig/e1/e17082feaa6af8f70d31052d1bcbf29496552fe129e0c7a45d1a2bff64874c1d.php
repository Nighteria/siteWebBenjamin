<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_5dede5ef6ea93edb02df91f0000c5b93d31c367d04a0ea4c404d6387d39569a7 extends Twig_Template
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
        $__internal_d6288af379712e90ee90ddee346716f18a592f251a4bf98b03434ae19b42db55 = $this->env->getExtension("native_profiler");
        $__internal_d6288af379712e90ee90ddee346716f18a592f251a4bf98b03434ae19b42db55->enter($__internal_d6288af379712e90ee90ddee346716f18a592f251a4bf98b03434ae19b42db55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_d6288af379712e90ee90ddee346716f18a592f251a4bf98b03434ae19b42db55->leave($__internal_d6288af379712e90ee90ddee346716f18a592f251a4bf98b03434ae19b42db55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (false !== $label): ?>*/
/* <?php if ($required) { $label_attr['class'] = trim((isset($label_attr['class']) ? $label_attr['class'] : '').' required'); } ?>*/
/* <?php if (!$compound) { $label_attr['for'] = $id; } ?>*/
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <label <?php foreach ($label_attr as $k => $v) { printf('%s="%s" ', $view->escape($k), $view->escape($v)); } ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></label>*/
/* <?php endif ?>*/
/* */
