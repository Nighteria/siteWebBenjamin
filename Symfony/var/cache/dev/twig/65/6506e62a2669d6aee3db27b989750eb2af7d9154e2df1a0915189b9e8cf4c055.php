<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2e3b3ecf527f45a049857a597fae90179eb9e8299e7d4b74dde4f57358390659 extends Twig_Template
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
        $__internal_309168b4192ddbc77df6d877b0d00eba01a606dc30d3ee95f12f43b536562ba9 = $this->env->getExtension("native_profiler");
        $__internal_309168b4192ddbc77df6d877b0d00eba01a606dc30d3ee95f12f43b536562ba9->enter($__internal_309168b4192ddbc77df6d877b0d00eba01a606dc30d3ee95f12f43b536562ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_309168b4192ddbc77df6d877b0d00eba01a606dc30d3ee95f12f43b536562ba9->leave($__internal_309168b4192ddbc77df6d877b0d00eba01a606dc30d3ee95f12f43b536562ba9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
