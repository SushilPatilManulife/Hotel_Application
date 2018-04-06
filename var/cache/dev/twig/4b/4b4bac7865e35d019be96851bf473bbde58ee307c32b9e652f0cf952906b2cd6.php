<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_024288470377192888ead4199769bab088df020cd595f33fcbff42ccd29b7b8a extends Twig_Template
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
        $__internal_13e1213639b83a8691cae4f85981ce6615aed86ef89ae5a4a40021c091324246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e1213639b83a8691cae4f85981ce6615aed86ef89ae5a4a40021c091324246->enter($__internal_13e1213639b83a8691cae4f85981ce6615aed86ef89ae5a4a40021c091324246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fd66e54b9ba005371696bb213a4e5e946038e02923f903aa284d019a31317492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd66e54b9ba005371696bb213a4e5e946038e02923f903aa284d019a31317492->enter($__internal_fd66e54b9ba005371696bb213a4e5e946038e02923f903aa284d019a31317492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_13e1213639b83a8691cae4f85981ce6615aed86ef89ae5a4a40021c091324246->leave($__internal_13e1213639b83a8691cae4f85981ce6615aed86ef89ae5a4a40021c091324246_prof);

        
        $__internal_fd66e54b9ba005371696bb213a4e5e946038e02923f903aa284d019a31317492->leave($__internal_fd66e54b9ba005371696bb213a4e5e946038e02923f903aa284d019a31317492_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
