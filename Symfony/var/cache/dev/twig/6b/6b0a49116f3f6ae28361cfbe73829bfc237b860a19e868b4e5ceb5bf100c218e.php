<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bc171288ec083c61fdea0cfc63a7a83b1c3db0a180518a49e25c25a6ec38a48b extends Twig_Template
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
        $__internal_6c98c3282d04f0181b323e907e3e7247acfb9b2bfe76df5bb18c07bba283305a = $this->env->getExtension("native_profiler");
        $__internal_6c98c3282d04f0181b323e907e3e7247acfb9b2bfe76df5bb18c07bba283305a->enter($__internal_6c98c3282d04f0181b323e907e3e7247acfb9b2bfe76df5bb18c07bba283305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6c98c3282d04f0181b323e907e3e7247acfb9b2bfe76df5bb18c07bba283305a->leave($__internal_6c98c3282d04f0181b323e907e3e7247acfb9b2bfe76df5bb18c07bba283305a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
