<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3fb81558513f6066d7b63b7ecf9415790259abbc8214200a27f054820484b9b2 extends Twig_Template
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
        $__internal_ec9ba09ce974aad244986a5256daac81f1ccefff4cff05d9ff94bf9c37e9b8eb = $this->env->getExtension("native_profiler");
        $__internal_ec9ba09ce974aad244986a5256daac81f1ccefff4cff05d9ff94bf9c37e9b8eb->enter($__internal_ec9ba09ce974aad244986a5256daac81f1ccefff4cff05d9ff94bf9c37e9b8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ec9ba09ce974aad244986a5256daac81f1ccefff4cff05d9ff94bf9c37e9b8eb->leave($__internal_ec9ba09ce974aad244986a5256daac81f1ccefff4cff05d9ff94bf9c37e9b8eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
