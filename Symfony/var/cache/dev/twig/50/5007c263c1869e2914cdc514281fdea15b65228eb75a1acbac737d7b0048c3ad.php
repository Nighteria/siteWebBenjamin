<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_74eec3e059c1c515a7971802a9970a2812ded915e95e44f371bd18d5126cddbb extends Twig_Template
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
        $__internal_a0ba866a1077e22390a5d7d8d8b6947ab51d989125a713655f4814f2f1aa018f = $this->env->getExtension("native_profiler");
        $__internal_a0ba866a1077e22390a5d7d8d8b6947ab51d989125a713655f4814f2f1aa018f->enter($__internal_a0ba866a1077e22390a5d7d8d8b6947ab51d989125a713655f4814f2f1aa018f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a0ba866a1077e22390a5d7d8d8b6947ab51d989125a713655f4814f2f1aa018f->leave($__internal_a0ba866a1077e22390a5d7d8d8b6947ab51d989125a713655f4814f2f1aa018f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
