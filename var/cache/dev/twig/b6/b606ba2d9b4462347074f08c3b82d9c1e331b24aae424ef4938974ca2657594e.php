<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e06caeb0ad801761b224feb40ea526fe3eb6460ddbc23d7e91d273e6aeca1dfe extends Twig_Template
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
        $__internal_bd6158f421cc38dbf1a1b7e4f5f35df01f6440dbc736d4f9fe245c3a9e0cacd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6158f421cc38dbf1a1b7e4f5f35df01f6440dbc736d4f9fe245c3a9e0cacd5->enter($__internal_bd6158f421cc38dbf1a1b7e4f5f35df01f6440dbc736d4f9fe245c3a9e0cacd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0d7f8b29ef5b1364469aadc579b7e72fa0b7a9b7b216ba4fd3e90ac15e609ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7f8b29ef5b1364469aadc579b7e72fa0b7a9b7b216ba4fd3e90ac15e609ffe->enter($__internal_0d7f8b29ef5b1364469aadc579b7e72fa0b7a9b7b216ba4fd3e90ac15e609ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bd6158f421cc38dbf1a1b7e4f5f35df01f6440dbc736d4f9fe245c3a9e0cacd5->leave($__internal_bd6158f421cc38dbf1a1b7e4f5f35df01f6440dbc736d4f9fe245c3a9e0cacd5_prof);

        
        $__internal_0d7f8b29ef5b1364469aadc579b7e72fa0b7a9b7b216ba4fd3e90ac15e609ffe->leave($__internal_0d7f8b29ef5b1364469aadc579b7e72fa0b7a9b7b216ba4fd3e90ac15e609ffe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
