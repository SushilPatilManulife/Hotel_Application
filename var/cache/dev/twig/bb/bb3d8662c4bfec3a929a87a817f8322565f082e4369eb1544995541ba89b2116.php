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
        $__internal_8c1d27a908117bf10e0cab397d0170081133752d3b350b2122e4aa43850a8ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1d27a908117bf10e0cab397d0170081133752d3b350b2122e4aa43850a8ca0->enter($__internal_8c1d27a908117bf10e0cab397d0170081133752d3b350b2122e4aa43850a8ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c57efa02804525d2205495abfda96f7794f701d177f6257b0c76c8758448f676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57efa02804525d2205495abfda96f7794f701d177f6257b0c76c8758448f676->enter($__internal_c57efa02804525d2205495abfda96f7794f701d177f6257b0c76c8758448f676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8c1d27a908117bf10e0cab397d0170081133752d3b350b2122e4aa43850a8ca0->leave($__internal_8c1d27a908117bf10e0cab397d0170081133752d3b350b2122e4aa43850a8ca0_prof);

        
        $__internal_c57efa02804525d2205495abfda96f7794f701d177f6257b0c76c8758448f676->leave($__internal_c57efa02804525d2205495abfda96f7794f701d177f6257b0c76c8758448f676_prof);

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
