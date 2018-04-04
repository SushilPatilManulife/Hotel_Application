<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1b2c0339cf4efe5c9f34697c00d35736bde5e1d0ca692668997c71cf77a7c1a0 extends Twig_Template
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
        $__internal_6890017c54ca1e88bad473041a3a1726de49ebe493742da030d43ef81400a359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6890017c54ca1e88bad473041a3a1726de49ebe493742da030d43ef81400a359->enter($__internal_6890017c54ca1e88bad473041a3a1726de49ebe493742da030d43ef81400a359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5dc1c6bb5ea3b87adeff21d13a61bc8a1ce5e885909783d80a0a7b97fea677ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc1c6bb5ea3b87adeff21d13a61bc8a1ce5e885909783d80a0a7b97fea677ff->enter($__internal_5dc1c6bb5ea3b87adeff21d13a61bc8a1ce5e885909783d80a0a7b97fea677ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6890017c54ca1e88bad473041a3a1726de49ebe493742da030d43ef81400a359->leave($__internal_6890017c54ca1e88bad473041a3a1726de49ebe493742da030d43ef81400a359_prof);

        
        $__internal_5dc1c6bb5ea3b87adeff21d13a61bc8a1ce5e885909783d80a0a7b97fea677ff->leave($__internal_5dc1c6bb5ea3b87adeff21d13a61bc8a1ce5e885909783d80a0a7b97fea677ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
