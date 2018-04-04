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
        $__internal_5dc34565b5ac0a68af270279dd0c1260c56e5b13db7e6942404f44f1a8909b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc34565b5ac0a68af270279dd0c1260c56e5b13db7e6942404f44f1a8909b5e->enter($__internal_5dc34565b5ac0a68af270279dd0c1260c56e5b13db7e6942404f44f1a8909b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f5d597f4566da35e6ec69f308a970b1b3e5c0364d66ed4cbcdf1e7189dc6a6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d597f4566da35e6ec69f308a970b1b3e5c0364d66ed4cbcdf1e7189dc6a6cc->enter($__internal_f5d597f4566da35e6ec69f308a970b1b3e5c0364d66ed4cbcdf1e7189dc6a6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5dc34565b5ac0a68af270279dd0c1260c56e5b13db7e6942404f44f1a8909b5e->leave($__internal_5dc34565b5ac0a68af270279dd0c1260c56e5b13db7e6942404f44f1a8909b5e_prof);

        
        $__internal_f5d597f4566da35e6ec69f308a970b1b3e5c0364d66ed4cbcdf1e7189dc6a6cc->leave($__internal_f5d597f4566da35e6ec69f308a970b1b3e5c0364d66ed4cbcdf1e7189dc6a6cc_prof);

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
