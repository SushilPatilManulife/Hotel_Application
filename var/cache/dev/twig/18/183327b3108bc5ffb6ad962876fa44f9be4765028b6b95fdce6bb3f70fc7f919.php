<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7431e024b2747fc2255f44fff69cb872022d366d1139592eeccf736f3b9b1cc8 extends Twig_Template
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
        $__internal_15b0ed663bdad4321cc1eddd317b67b9d2f45aa9349dde9b1d7f80e74e566444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b0ed663bdad4321cc1eddd317b67b9d2f45aa9349dde9b1d7f80e74e566444->enter($__internal_15b0ed663bdad4321cc1eddd317b67b9d2f45aa9349dde9b1d7f80e74e566444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d1c0e75e013292c9c38ea1efcb3d51f53ad0f2256108540073a570128f615fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c0e75e013292c9c38ea1efcb3d51f53ad0f2256108540073a570128f615fa9->enter($__internal_d1c0e75e013292c9c38ea1efcb3d51f53ad0f2256108540073a570128f615fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_15b0ed663bdad4321cc1eddd317b67b9d2f45aa9349dde9b1d7f80e74e566444->leave($__internal_15b0ed663bdad4321cc1eddd317b67b9d2f45aa9349dde9b1d7f80e74e566444_prof);

        
        $__internal_d1c0e75e013292c9c38ea1efcb3d51f53ad0f2256108540073a570128f615fa9->leave($__internal_d1c0e75e013292c9c38ea1efcb3d51f53ad0f2256108540073a570128f615fa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
