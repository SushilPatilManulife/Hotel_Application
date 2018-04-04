<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_426c944d81bb0cddbf77f512f22dd39058cfc0c87171becb6444324fa107e8c4 extends Twig_Template
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
        $__internal_c8f2960a9990e0cfcd668478d66e5be463197564aef0743824e5f99ec97b5843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f2960a9990e0cfcd668478d66e5be463197564aef0743824e5f99ec97b5843->enter($__internal_c8f2960a9990e0cfcd668478d66e5be463197564aef0743824e5f99ec97b5843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_13eea22d603fc63b67969f0468b18b531833aac06fe222c285c5422f0b6d057d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13eea22d603fc63b67969f0468b18b531833aac06fe222c285c5422f0b6d057d->enter($__internal_13eea22d603fc63b67969f0468b18b531833aac06fe222c285c5422f0b6d057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c8f2960a9990e0cfcd668478d66e5be463197564aef0743824e5f99ec97b5843->leave($__internal_c8f2960a9990e0cfcd668478d66e5be463197564aef0743824e5f99ec97b5843_prof);

        
        $__internal_13eea22d603fc63b67969f0468b18b531833aac06fe222c285c5422f0b6d057d->leave($__internal_13eea22d603fc63b67969f0468b18b531833aac06fe222c285c5422f0b6d057d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
