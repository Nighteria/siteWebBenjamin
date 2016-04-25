<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cd09afcfb5e357197188b0988fb238c0049f68dd2ad4ee0a2dd16f78f4d3608b extends Twig_Template
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
        $__internal_c2bf38191f99a8bc51fad169d5ce7ad822dd8ba321ffa0ab0339b54d2b240833 = $this->env->getExtension("native_profiler");
        $__internal_c2bf38191f99a8bc51fad169d5ce7ad822dd8ba321ffa0ab0339b54d2b240833->enter($__internal_c2bf38191f99a8bc51fad169d5ce7ad822dd8ba321ffa0ab0339b54d2b240833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c2bf38191f99a8bc51fad169d5ce7ad822dd8ba321ffa0ab0339b54d2b240833->leave($__internal_c2bf38191f99a8bc51fad169d5ce7ad822dd8ba321ffa0ab0339b54d2b240833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
