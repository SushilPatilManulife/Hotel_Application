<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b7d60be5ea8f1af226549a3c55ade80587b71ee711e11ac2ab69a11fc64d696f extends Twig_Template
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
        $__internal_57abf54d2250edfbdbaed3c832c94e9c406aba742f22529942ce8ad3351e6dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57abf54d2250edfbdbaed3c832c94e9c406aba742f22529942ce8ad3351e6dc1->enter($__internal_57abf54d2250edfbdbaed3c832c94e9c406aba742f22529942ce8ad3351e6dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2a61dacdf42672eaab2746cd371c6374c8750a69ddf038b314ad219c2391e0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a61dacdf42672eaab2746cd371c6374c8750a69ddf038b314ad219c2391e0c5->enter($__internal_2a61dacdf42672eaab2746cd371c6374c8750a69ddf038b314ad219c2391e0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_57abf54d2250edfbdbaed3c832c94e9c406aba742f22529942ce8ad3351e6dc1->leave($__internal_57abf54d2250edfbdbaed3c832c94e9c406aba742f22529942ce8ad3351e6dc1_prof);

        
        $__internal_2a61dacdf42672eaab2746cd371c6374c8750a69ddf038b314ad219c2391e0c5->leave($__internal_2a61dacdf42672eaab2746cd371c6374c8750a69ddf038b314ad219c2391e0c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
