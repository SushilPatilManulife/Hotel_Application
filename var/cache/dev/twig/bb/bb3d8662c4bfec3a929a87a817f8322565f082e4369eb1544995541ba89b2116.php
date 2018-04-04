<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_aa21744b1f031ce717416b02a00132d333fc4e1effa93895c9a8caab3e5ce0c4 extends Twig_Template
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
        $__internal_ec3e70b45916eb23deb4e9f247913f4e6f75cc5934199683255cbec57647d5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3e70b45916eb23deb4e9f247913f4e6f75cc5934199683255cbec57647d5e0->enter($__internal_ec3e70b45916eb23deb4e9f247913f4e6f75cc5934199683255cbec57647d5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_95b286db7e38e968f0731f5940972ec982724526e5ecf4c42c1c4dc0f19149f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b286db7e38e968f0731f5940972ec982724526e5ecf4c42c1c4dc0f19149f8->enter($__internal_95b286db7e38e968f0731f5940972ec982724526e5ecf4c42c1c4dc0f19149f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ec3e70b45916eb23deb4e9f247913f4e6f75cc5934199683255cbec57647d5e0->leave($__internal_ec3e70b45916eb23deb4e9f247913f4e6f75cc5934199683255cbec57647d5e0_prof);

        
        $__internal_95b286db7e38e968f0731f5940972ec982724526e5ecf4c42c1c4dc0f19149f8->leave($__internal_95b286db7e38e968f0731f5940972ec982724526e5ecf4c42c1c4dc0f19149f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
