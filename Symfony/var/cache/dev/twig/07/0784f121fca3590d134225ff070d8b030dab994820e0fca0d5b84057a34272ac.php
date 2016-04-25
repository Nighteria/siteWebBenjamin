<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_36e30c439695aacb062860fa331f190e39e64da333641f24377feb7a80592c3e extends Twig_Template
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
        $__internal_2815a36892c44b484ee2cc660f39cb3ed5c1bd6a05f5c70de96a5b16d4ee3a3a = $this->env->getExtension("native_profiler");
        $__internal_2815a36892c44b484ee2cc660f39cb3ed5c1bd6a05f5c70de96a5b16d4ee3a3a->enter($__internal_2815a36892c44b484ee2cc660f39cb3ed5c1bd6a05f5c70de96a5b16d4ee3a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2815a36892c44b484ee2cc660f39cb3ed5c1bd6a05f5c70de96a5b16d4ee3a3a->leave($__internal_2815a36892c44b484ee2cc660f39cb3ed5c1bd6a05f5c70de96a5b16d4ee3a3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
