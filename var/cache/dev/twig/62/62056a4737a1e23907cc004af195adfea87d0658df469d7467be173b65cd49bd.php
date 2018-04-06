<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_a8a0ab53a66ad43fd50cb486a4d1fb5c893bd613a9fcfa4f70ca83e573030ba2 extends Twig_Template
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
        $__internal_2a6e98c1900edfdf2368cce6586f6c36805ea9e05cf9e77d5d24ad21a304a78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6e98c1900edfdf2368cce6586f6c36805ea9e05cf9e77d5d24ad21a304a78a->enter($__internal_2a6e98c1900edfdf2368cce6586f6c36805ea9e05cf9e77d5d24ad21a304a78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_e06d5a45eb53d09cb61bbc7ba0dfbfc0377813f3fc7c66608562eb1ff5ee2b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06d5a45eb53d09cb61bbc7ba0dfbfc0377813f3fc7c66608562eb1ff5ee2b25->enter($__internal_e06d5a45eb53d09cb61bbc7ba0dfbfc0377813f3fc7c66608562eb1ff5ee2b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_2a6e98c1900edfdf2368cce6586f6c36805ea9e05cf9e77d5d24ad21a304a78a->leave($__internal_2a6e98c1900edfdf2368cce6586f6c36805ea9e05cf9e77d5d24ad21a304a78a_prof);

        
        $__internal_e06d5a45eb53d09cb61bbc7ba0dfbfc0377813f3fc7c66608562eb1ff5ee2b25->leave($__internal_e06d5a45eb53d09cb61bbc7ba0dfbfc0377813f3fc7c66608562eb1ff5ee2b25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
