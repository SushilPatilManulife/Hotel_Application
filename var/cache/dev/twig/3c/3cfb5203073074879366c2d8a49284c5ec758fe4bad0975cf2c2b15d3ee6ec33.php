<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_72fd6300b4ddef4f6b4d0df648249a09444246f6b3e22c4be1227202c37bf0cf extends Twig_Template
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
        $__internal_2f4056cb4252698b4a3797a313b8de79079dad76f16e61b19f52c535a0c8e62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4056cb4252698b4a3797a313b8de79079dad76f16e61b19f52c535a0c8e62b->enter($__internal_2f4056cb4252698b4a3797a313b8de79079dad76f16e61b19f52c535a0c8e62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_69cf35baa31adb82a5c7f5c9130d03768d2ad8ae0014c6498e72b02345447a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cf35baa31adb82a5c7f5c9130d03768d2ad8ae0014c6498e72b02345447a99->enter($__internal_69cf35baa31adb82a5c7f5c9130d03768d2ad8ae0014c6498e72b02345447a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f4056cb4252698b4a3797a313b8de79079dad76f16e61b19f52c535a0c8e62b->leave($__internal_2f4056cb4252698b4a3797a313b8de79079dad76f16e61b19f52c535a0c8e62b_prof);

        
        $__internal_69cf35baa31adb82a5c7f5c9130d03768d2ad8ae0014c6498e72b02345447a99->leave($__internal_69cf35baa31adb82a5c7f5c9130d03768d2ad8ae0014c6498e72b02345447a99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
