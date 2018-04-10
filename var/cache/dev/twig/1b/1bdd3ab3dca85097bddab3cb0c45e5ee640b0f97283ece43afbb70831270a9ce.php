<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5ef5fdcbd8e59e41d8e204de695fae57b99b330299ee5af075e3080585f2d041 extends Twig_Template
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
        $__internal_a70bbc6b43e3692e7d62954776c4af93ce252a4796b73568593f580110271d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70bbc6b43e3692e7d62954776c4af93ce252a4796b73568593f580110271d83->enter($__internal_a70bbc6b43e3692e7d62954776c4af93ce252a4796b73568593f580110271d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3eeb3a41b74ecd7c620f2785de83c4381b510ca9dc41a25750bd9ebeadfd7910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eeb3a41b74ecd7c620f2785de83c4381b510ca9dc41a25750bd9ebeadfd7910->enter($__internal_3eeb3a41b74ecd7c620f2785de83c4381b510ca9dc41a25750bd9ebeadfd7910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a70bbc6b43e3692e7d62954776c4af93ce252a4796b73568593f580110271d83->leave($__internal_a70bbc6b43e3692e7d62954776c4af93ce252a4796b73568593f580110271d83_prof);

        
        $__internal_3eeb3a41b74ecd7c620f2785de83c4381b510ca9dc41a25750bd9ebeadfd7910->leave($__internal_3eeb3a41b74ecd7c620f2785de83c4381b510ca9dc41a25750bd9ebeadfd7910_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
