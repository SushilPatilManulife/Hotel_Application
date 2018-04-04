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
        $__internal_a30f1d23ad11bc81ca3c11ad9432f07fcd90d7bfc6ed4a5a7bcd910a8f2c3741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30f1d23ad11bc81ca3c11ad9432f07fcd90d7bfc6ed4a5a7bcd910a8f2c3741->enter($__internal_a30f1d23ad11bc81ca3c11ad9432f07fcd90d7bfc6ed4a5a7bcd910a8f2c3741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_585ee8af3ccf38d667d3461ee3c89e436da84712ec58b3bd75a19977cf81b900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585ee8af3ccf38d667d3461ee3c89e436da84712ec58b3bd75a19977cf81b900->enter($__internal_585ee8af3ccf38d667d3461ee3c89e436da84712ec58b3bd75a19977cf81b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a30f1d23ad11bc81ca3c11ad9432f07fcd90d7bfc6ed4a5a7bcd910a8f2c3741->leave($__internal_a30f1d23ad11bc81ca3c11ad9432f07fcd90d7bfc6ed4a5a7bcd910a8f2c3741_prof);

        
        $__internal_585ee8af3ccf38d667d3461ee3c89e436da84712ec58b3bd75a19977cf81b900->leave($__internal_585ee8af3ccf38d667d3461ee3c89e436da84712ec58b3bd75a19977cf81b900_prof);

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
