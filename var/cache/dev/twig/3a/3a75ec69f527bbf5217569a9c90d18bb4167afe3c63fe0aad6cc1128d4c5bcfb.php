<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_eaeab935bc4448855620744d685b9fb6ed83ae3857aad54f5bb6d1aec109cc2c extends Twig_Template
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
        $__internal_0537bd090d5ce96be2e0e42f6cffc8534b42ba9dd45161278cde56cc5ce6cad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0537bd090d5ce96be2e0e42f6cffc8534b42ba9dd45161278cde56cc5ce6cad9->enter($__internal_0537bd090d5ce96be2e0e42f6cffc8534b42ba9dd45161278cde56cc5ce6cad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6f28fee8964373c40952239659da3a75064ff0b883c0227e1ff5ad349ece2444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f28fee8964373c40952239659da3a75064ff0b883c0227e1ff5ad349ece2444->enter($__internal_6f28fee8964373c40952239659da3a75064ff0b883c0227e1ff5ad349ece2444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0537bd090d5ce96be2e0e42f6cffc8534b42ba9dd45161278cde56cc5ce6cad9->leave($__internal_0537bd090d5ce96be2e0e42f6cffc8534b42ba9dd45161278cde56cc5ce6cad9_prof);

        
        $__internal_6f28fee8964373c40952239659da3a75064ff0b883c0227e1ff5ad349ece2444->leave($__internal_6f28fee8964373c40952239659da3a75064ff0b883c0227e1ff5ad349ece2444_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
