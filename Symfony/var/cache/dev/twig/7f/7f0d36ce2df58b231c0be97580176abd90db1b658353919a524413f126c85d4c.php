<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_97858afce0489b4175a0a0f02758d1454510df3e00900c14d60d2f0516e4ea63 extends Twig_Template
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
        $__internal_42210219d0c0e29fe5364a664638975b709226eddd315650bdab739669f21851 = $this->env->getExtension("native_profiler");
        $__internal_42210219d0c0e29fe5364a664638975b709226eddd315650bdab739669f21851->enter($__internal_42210219d0c0e29fe5364a664638975b709226eddd315650bdab739669f21851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_42210219d0c0e29fe5364a664638975b709226eddd315650bdab739669f21851->leave($__internal_42210219d0c0e29fe5364a664638975b709226eddd315650bdab739669f21851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
