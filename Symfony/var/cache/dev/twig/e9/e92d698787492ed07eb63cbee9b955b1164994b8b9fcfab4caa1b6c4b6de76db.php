<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e30eac4d6801198f053fb947932973362fcb505e7c3ab547173b1581fb56db60 extends Twig_Template
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
        $__internal_1da6eef839ab831573ea5b4f2937f8835fc07a1fbf30f2ce6507b0e85556fc8f = $this->env->getExtension("native_profiler");
        $__internal_1da6eef839ab831573ea5b4f2937f8835fc07a1fbf30f2ce6507b0e85556fc8f->enter($__internal_1da6eef839ab831573ea5b4f2937f8835fc07a1fbf30f2ce6507b0e85556fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1da6eef839ab831573ea5b4f2937f8835fc07a1fbf30f2ce6507b0e85556fc8f->leave($__internal_1da6eef839ab831573ea5b4f2937f8835fc07a1fbf30f2ce6507b0e85556fc8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
