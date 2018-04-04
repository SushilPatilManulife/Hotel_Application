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
        $__internal_ca5eab8061932b71ea2a56c159dbedafba542e192f8a615c35b51080808c8952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5eab8061932b71ea2a56c159dbedafba542e192f8a615c35b51080808c8952->enter($__internal_ca5eab8061932b71ea2a56c159dbedafba542e192f8a615c35b51080808c8952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4993b1fa3cd7fc9cb526fe59960d278ae2b229656acd9ffb1f0af1e3b7678af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4993b1fa3cd7fc9cb526fe59960d278ae2b229656acd9ffb1f0af1e3b7678af7->enter($__internal_4993b1fa3cd7fc9cb526fe59960d278ae2b229656acd9ffb1f0af1e3b7678af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ca5eab8061932b71ea2a56c159dbedafba542e192f8a615c35b51080808c8952->leave($__internal_ca5eab8061932b71ea2a56c159dbedafba542e192f8a615c35b51080808c8952_prof);

        
        $__internal_4993b1fa3cd7fc9cb526fe59960d278ae2b229656acd9ffb1f0af1e3b7678af7->leave($__internal_4993b1fa3cd7fc9cb526fe59960d278ae2b229656acd9ffb1f0af1e3b7678af7_prof);

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
