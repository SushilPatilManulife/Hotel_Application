<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_632f9f88fc2145d97c17c0c07658eb07e73ac0d3b4780be9b40dedf3ed13f378 extends Twig_Template
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
        $__internal_bd9f4a44e5d462e2b159084dd620907fdb801c5da31b2475af93730d92d236fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9f4a44e5d462e2b159084dd620907fdb801c5da31b2475af93730d92d236fb->enter($__internal_bd9f4a44e5d462e2b159084dd620907fdb801c5da31b2475af93730d92d236fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_279e751d4db063605ca45bfc468d1da7be6c57dd89a0fae1d3f8de4bec575eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279e751d4db063605ca45bfc468d1da7be6c57dd89a0fae1d3f8de4bec575eee->enter($__internal_279e751d4db063605ca45bfc468d1da7be6c57dd89a0fae1d3f8de4bec575eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd9f4a44e5d462e2b159084dd620907fdb801c5da31b2475af93730d92d236fb->leave($__internal_bd9f4a44e5d462e2b159084dd620907fdb801c5da31b2475af93730d92d236fb_prof);

        
        $__internal_279e751d4db063605ca45bfc468d1da7be6c57dd89a0fae1d3f8de4bec575eee->leave($__internal_279e751d4db063605ca45bfc468d1da7be6c57dd89a0fae1d3f8de4bec575eee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
