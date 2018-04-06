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
        $__internal_e607619d564ce31772e9846f4083c6f57a0f81ab5f7105147c379b7c30d4da29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e607619d564ce31772e9846f4083c6f57a0f81ab5f7105147c379b7c30d4da29->enter($__internal_e607619d564ce31772e9846f4083c6f57a0f81ab5f7105147c379b7c30d4da29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ec03f1c2cd02930e7c609d48ed596bb0ff22d55b21fc6644b5b1225d61f4bd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec03f1c2cd02930e7c609d48ed596bb0ff22d55b21fc6644b5b1225d61f4bd7b->enter($__internal_ec03f1c2cd02930e7c609d48ed596bb0ff22d55b21fc6644b5b1225d61f4bd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e607619d564ce31772e9846f4083c6f57a0f81ab5f7105147c379b7c30d4da29->leave($__internal_e607619d564ce31772e9846f4083c6f57a0f81ab5f7105147c379b7c30d4da29_prof);

        
        $__internal_ec03f1c2cd02930e7c609d48ed596bb0ff22d55b21fc6644b5b1225d61f4bd7b->leave($__internal_ec03f1c2cd02930e7c609d48ed596bb0ff22d55b21fc6644b5b1225d61f4bd7b_prof);

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
