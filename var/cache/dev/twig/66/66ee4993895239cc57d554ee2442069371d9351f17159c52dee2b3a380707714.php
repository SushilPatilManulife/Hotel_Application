<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5096ebed9ce20c0997546982a19b2afde6c8402ec1aa13039992c892897caa01 extends Twig_Template
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
        $__internal_4d1960e8e503fafcac7b76541a6f33f8f959cef1bf8e76a09d343c2f70a021a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1960e8e503fafcac7b76541a6f33f8f959cef1bf8e76a09d343c2f70a021a6->enter($__internal_4d1960e8e503fafcac7b76541a6f33f8f959cef1bf8e76a09d343c2f70a021a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6cd443153cc2f045d72be05f3b229f92fe648a0ddef7a9db012a3a943ef41d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd443153cc2f045d72be05f3b229f92fe648a0ddef7a9db012a3a943ef41d78->enter($__internal_6cd443153cc2f045d72be05f3b229f92fe648a0ddef7a9db012a3a943ef41d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4d1960e8e503fafcac7b76541a6f33f8f959cef1bf8e76a09d343c2f70a021a6->leave($__internal_4d1960e8e503fafcac7b76541a6f33f8f959cef1bf8e76a09d343c2f70a021a6_prof);

        
        $__internal_6cd443153cc2f045d72be05f3b229f92fe648a0ddef7a9db012a3a943ef41d78->leave($__internal_6cd443153cc2f045d72be05f3b229f92fe648a0ddef7a9db012a3a943ef41d78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
