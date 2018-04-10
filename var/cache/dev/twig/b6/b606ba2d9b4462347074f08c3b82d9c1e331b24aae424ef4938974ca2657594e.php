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
        $__internal_6202b4e4ca9998e29167d8c61095076b9b15cea5c0d78c9b13176a68c4c3e9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6202b4e4ca9998e29167d8c61095076b9b15cea5c0d78c9b13176a68c4c3e9d1->enter($__internal_6202b4e4ca9998e29167d8c61095076b9b15cea5c0d78c9b13176a68c4c3e9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6b9b680293d133eee8b292522887f8e3af9027afe0525f511d6b5c380e9642f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9b680293d133eee8b292522887f8e3af9027afe0525f511d6b5c380e9642f9->enter($__internal_6b9b680293d133eee8b292522887f8e3af9027afe0525f511d6b5c380e9642f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6202b4e4ca9998e29167d8c61095076b9b15cea5c0d78c9b13176a68c4c3e9d1->leave($__internal_6202b4e4ca9998e29167d8c61095076b9b15cea5c0d78c9b13176a68c4c3e9d1_prof);

        
        $__internal_6b9b680293d133eee8b292522887f8e3af9027afe0525f511d6b5c380e9642f9->leave($__internal_6b9b680293d133eee8b292522887f8e3af9027afe0525f511d6b5c380e9642f9_prof);

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
