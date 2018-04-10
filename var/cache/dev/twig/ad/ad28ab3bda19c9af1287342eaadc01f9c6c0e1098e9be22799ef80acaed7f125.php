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
        $__internal_719450d154bb9cf755bc67c2d63e229e3e23cfec2f76e5d9ab8030c7b4bb67f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719450d154bb9cf755bc67c2d63e229e3e23cfec2f76e5d9ab8030c7b4bb67f9->enter($__internal_719450d154bb9cf755bc67c2d63e229e3e23cfec2f76e5d9ab8030c7b4bb67f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_883a0d4353d818d6f967177b1ef5f2055e01b12e3857b4d159b9edd1c3a608e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883a0d4353d818d6f967177b1ef5f2055e01b12e3857b4d159b9edd1c3a608e8->enter($__internal_883a0d4353d818d6f967177b1ef5f2055e01b12e3857b4d159b9edd1c3a608e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_719450d154bb9cf755bc67c2d63e229e3e23cfec2f76e5d9ab8030c7b4bb67f9->leave($__internal_719450d154bb9cf755bc67c2d63e229e3e23cfec2f76e5d9ab8030c7b4bb67f9_prof);

        
        $__internal_883a0d4353d818d6f967177b1ef5f2055e01b12e3857b4d159b9edd1c3a608e8->leave($__internal_883a0d4353d818d6f967177b1ef5f2055e01b12e3857b4d159b9edd1c3a608e8_prof);

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
