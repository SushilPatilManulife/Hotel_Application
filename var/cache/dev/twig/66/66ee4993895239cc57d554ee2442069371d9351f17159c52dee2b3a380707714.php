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
        $__internal_ea26075a476fe9e2a2e92adc5437432574abf30eb7d8158dc0a30c808e7abcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea26075a476fe9e2a2e92adc5437432574abf30eb7d8158dc0a30c808e7abcd9->enter($__internal_ea26075a476fe9e2a2e92adc5437432574abf30eb7d8158dc0a30c808e7abcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ae178f5bcf04cc23520b095229fe8b41ae07179888a16f726da3dcd110485a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae178f5bcf04cc23520b095229fe8b41ae07179888a16f726da3dcd110485a0a->enter($__internal_ae178f5bcf04cc23520b095229fe8b41ae07179888a16f726da3dcd110485a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ea26075a476fe9e2a2e92adc5437432574abf30eb7d8158dc0a30c808e7abcd9->leave($__internal_ea26075a476fe9e2a2e92adc5437432574abf30eb7d8158dc0a30c808e7abcd9_prof);

        
        $__internal_ae178f5bcf04cc23520b095229fe8b41ae07179888a16f726da3dcd110485a0a->leave($__internal_ae178f5bcf04cc23520b095229fe8b41ae07179888a16f726da3dcd110485a0a_prof);

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
