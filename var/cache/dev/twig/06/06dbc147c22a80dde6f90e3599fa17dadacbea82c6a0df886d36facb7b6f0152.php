<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b9f3b5559f0b4c1da2be86a8701e18c41d6f662219d33658f2d1c6e4fa978707 extends Twig_Template
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
        $__internal_b72d9ad1270a58ba103b3b88bafa411ef435acc3aea74ebc45858ce766914ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72d9ad1270a58ba103b3b88bafa411ef435acc3aea74ebc45858ce766914ed1->enter($__internal_b72d9ad1270a58ba103b3b88bafa411ef435acc3aea74ebc45858ce766914ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_28139cadba1892d331bf800ddc50773073a58024478f4d7d1875a19e6d58e140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28139cadba1892d331bf800ddc50773073a58024478f4d7d1875a19e6d58e140->enter($__internal_28139cadba1892d331bf800ddc50773073a58024478f4d7d1875a19e6d58e140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b72d9ad1270a58ba103b3b88bafa411ef435acc3aea74ebc45858ce766914ed1->leave($__internal_b72d9ad1270a58ba103b3b88bafa411ef435acc3aea74ebc45858ce766914ed1_prof);

        
        $__internal_28139cadba1892d331bf800ddc50773073a58024478f4d7d1875a19e6d58e140->leave($__internal_28139cadba1892d331bf800ddc50773073a58024478f4d7d1875a19e6d58e140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
