<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b9f3b5559f0b4c1da2be86a8701e18c41d6f662219d33658f2d1c6e4fa978707 extends Twig_Template
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
        $__internal_fc6bfc199223efdc414269c5a4bbc85aced62fad347b01a2c63781226d6bb88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6bfc199223efdc414269c5a4bbc85aced62fad347b01a2c63781226d6bb88b->enter($__internal_fc6bfc199223efdc414269c5a4bbc85aced62fad347b01a2c63781226d6bb88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b7d28ba9b84cf3200c94a713f86efc53783a0a2d1e07ff66aacb8c9c6e61ef8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d28ba9b84cf3200c94a713f86efc53783a0a2d1e07ff66aacb8c9c6e61ef8c->enter($__internal_b7d28ba9b84cf3200c94a713f86efc53783a0a2d1e07ff66aacb8c9c6e61ef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fc6bfc199223efdc414269c5a4bbc85aced62fad347b01a2c63781226d6bb88b->leave($__internal_fc6bfc199223efdc414269c5a4bbc85aced62fad347b01a2c63781226d6bb88b_prof);

        
        $__internal_b7d28ba9b84cf3200c94a713f86efc53783a0a2d1e07ff66aacb8c9c6e61ef8c->leave($__internal_b7d28ba9b84cf3200c94a713f86efc53783a0a2d1e07ff66aacb8c9c6e61ef8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
