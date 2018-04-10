<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c389575e7055ccbf18f6c0dee6289ce0bc536427eb8c9c9cfd89f29c902f3228 extends Twig_Template
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
        $__internal_a49f058ea55f7f214d88a4227c9b0f50a35f503fa1e946911c58d9e5c8fc5af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49f058ea55f7f214d88a4227c9b0f50a35f503fa1e946911c58d9e5c8fc5af4->enter($__internal_a49f058ea55f7f214d88a4227c9b0f50a35f503fa1e946911c58d9e5c8fc5af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_37faf8138978cfc569d993fc9f0b736ab3bcfd92bfc2e741a5d7ad87ddd60026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37faf8138978cfc569d993fc9f0b736ab3bcfd92bfc2e741a5d7ad87ddd60026->enter($__internal_37faf8138978cfc569d993fc9f0b736ab3bcfd92bfc2e741a5d7ad87ddd60026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a49f058ea55f7f214d88a4227c9b0f50a35f503fa1e946911c58d9e5c8fc5af4->leave($__internal_a49f058ea55f7f214d88a4227c9b0f50a35f503fa1e946911c58d9e5c8fc5af4_prof);

        
        $__internal_37faf8138978cfc569d993fc9f0b736ab3bcfd92bfc2e741a5d7ad87ddd60026->leave($__internal_37faf8138978cfc569d993fc9f0b736ab3bcfd92bfc2e741a5d7ad87ddd60026_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
