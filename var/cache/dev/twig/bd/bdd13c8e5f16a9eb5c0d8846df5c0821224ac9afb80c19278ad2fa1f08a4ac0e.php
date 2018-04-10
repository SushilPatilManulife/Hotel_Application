<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7f6346e085aff589da08052b3741a617b9cecd465388e5e1d750c0c0866acee4 extends Twig_Template
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
        $__internal_69a8076feaec6e9fc61f857906baa8685a671bb5586aab069776f1d5575af1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a8076feaec6e9fc61f857906baa8685a671bb5586aab069776f1d5575af1e3->enter($__internal_69a8076feaec6e9fc61f857906baa8685a671bb5586aab069776f1d5575af1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e826d9e1813b58950fb61c02aed125265bbd26a276e24ab67097fb01cc1835ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e826d9e1813b58950fb61c02aed125265bbd26a276e24ab67097fb01cc1835ad->enter($__internal_e826d9e1813b58950fb61c02aed125265bbd26a276e24ab67097fb01cc1835ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_69a8076feaec6e9fc61f857906baa8685a671bb5586aab069776f1d5575af1e3->leave($__internal_69a8076feaec6e9fc61f857906baa8685a671bb5586aab069776f1d5575af1e3_prof);

        
        $__internal_e826d9e1813b58950fb61c02aed125265bbd26a276e24ab67097fb01cc1835ad->leave($__internal_e826d9e1813b58950fb61c02aed125265bbd26a276e24ab67097fb01cc1835ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
