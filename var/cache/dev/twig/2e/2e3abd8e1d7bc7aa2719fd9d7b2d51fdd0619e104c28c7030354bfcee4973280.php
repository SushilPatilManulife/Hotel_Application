<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_af3ce4d7ff39540adbb581429121ccf8f8b91b8497507213eb8c7fb5765e931f extends Twig_Template
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
        $__internal_7bf133648dbb1a5c336fa25bbc47d93dc029f1cdbf98c7461bbc4736a4ee3355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf133648dbb1a5c336fa25bbc47d93dc029f1cdbf98c7461bbc4736a4ee3355->enter($__internal_7bf133648dbb1a5c336fa25bbc47d93dc029f1cdbf98c7461bbc4736a4ee3355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_0168418359a9af4da452350a177830b11e9700d47021d9bd957a072454ef6fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0168418359a9af4da452350a177830b11e9700d47021d9bd957a072454ef6fc1->enter($__internal_0168418359a9af4da452350a177830b11e9700d47021d9bd957a072454ef6fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7bf133648dbb1a5c336fa25bbc47d93dc029f1cdbf98c7461bbc4736a4ee3355->leave($__internal_7bf133648dbb1a5c336fa25bbc47d93dc029f1cdbf98c7461bbc4736a4ee3355_prof);

        
        $__internal_0168418359a9af4da452350a177830b11e9700d47021d9bd957a072454ef6fc1->leave($__internal_0168418359a9af4da452350a177830b11e9700d47021d9bd957a072454ef6fc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
