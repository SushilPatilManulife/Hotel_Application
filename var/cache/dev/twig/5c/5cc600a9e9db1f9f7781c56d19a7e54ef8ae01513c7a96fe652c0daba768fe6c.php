<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_aece97d57c6cb2a6236aedd77646cac60942da4b83acd73642846f6c2067d6ac extends Twig_Template
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
        $__internal_9011231387e4217d5e24570bcb0ac95f471142926c2a6ba9e6b86b558d10413e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9011231387e4217d5e24570bcb0ac95f471142926c2a6ba9e6b86b558d10413e->enter($__internal_9011231387e4217d5e24570bcb0ac95f471142926c2a6ba9e6b86b558d10413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fdfb52861a89e802d955cfd97dc1cf0cf5dc77565e7af1bbf7ccba807c424540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfb52861a89e802d955cfd97dc1cf0cf5dc77565e7af1bbf7ccba807c424540->enter($__internal_fdfb52861a89e802d955cfd97dc1cf0cf5dc77565e7af1bbf7ccba807c424540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9011231387e4217d5e24570bcb0ac95f471142926c2a6ba9e6b86b558d10413e->leave($__internal_9011231387e4217d5e24570bcb0ac95f471142926c2a6ba9e6b86b558d10413e_prof);

        
        $__internal_fdfb52861a89e802d955cfd97dc1cf0cf5dc77565e7af1bbf7ccba807c424540->leave($__internal_fdfb52861a89e802d955cfd97dc1cf0cf5dc77565e7af1bbf7ccba807c424540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
