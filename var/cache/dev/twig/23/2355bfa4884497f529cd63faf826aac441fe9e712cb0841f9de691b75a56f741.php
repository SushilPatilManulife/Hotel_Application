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
        $__internal_c5c6cb4a987dfd23e82cc953091fe32ae298d354df10525a0475170c1241c53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c6cb4a987dfd23e82cc953091fe32ae298d354df10525a0475170c1241c53a->enter($__internal_c5c6cb4a987dfd23e82cc953091fe32ae298d354df10525a0475170c1241c53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a78ce433b4a3e42bf5e1114c4e6029fde0d308083bec46f8e2ff60da28c74bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78ce433b4a3e42bf5e1114c4e6029fde0d308083bec46f8e2ff60da28c74bdd->enter($__internal_a78ce433b4a3e42bf5e1114c4e6029fde0d308083bec46f8e2ff60da28c74bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c5c6cb4a987dfd23e82cc953091fe32ae298d354df10525a0475170c1241c53a->leave($__internal_c5c6cb4a987dfd23e82cc953091fe32ae298d354df10525a0475170c1241c53a_prof);

        
        $__internal_a78ce433b4a3e42bf5e1114c4e6029fde0d308083bec46f8e2ff60da28c74bdd->leave($__internal_a78ce433b4a3e42bf5e1114c4e6029fde0d308083bec46f8e2ff60da28c74bdd_prof);

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
