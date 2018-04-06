<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_29330f5329cacdf55c03aecbfa6987e545b3846e23f9c87b7c1926b227df6fc2 extends Twig_Template
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
        $__internal_38a1d9fe0c36969595e5e85bd4b9fef7a994927e63d0fdd3e719626223b2059c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a1d9fe0c36969595e5e85bd4b9fef7a994927e63d0fdd3e719626223b2059c->enter($__internal_38a1d9fe0c36969595e5e85bd4b9fef7a994927e63d0fdd3e719626223b2059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ea3b6e4edaa0a6422f0c44d24b7b119964c2c17f6c1ea3c8461f39446053e9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3b6e4edaa0a6422f0c44d24b7b119964c2c17f6c1ea3c8461f39446053e9fe->enter($__internal_ea3b6e4edaa0a6422f0c44d24b7b119964c2c17f6c1ea3c8461f39446053e9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_38a1d9fe0c36969595e5e85bd4b9fef7a994927e63d0fdd3e719626223b2059c->leave($__internal_38a1d9fe0c36969595e5e85bd4b9fef7a994927e63d0fdd3e719626223b2059c_prof);

        
        $__internal_ea3b6e4edaa0a6422f0c44d24b7b119964c2c17f6c1ea3c8461f39446053e9fe->leave($__internal_ea3b6e4edaa0a6422f0c44d24b7b119964c2c17f6c1ea3c8461f39446053e9fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
