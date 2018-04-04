<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a570501dfc324ce5dc28f5c23d265313af36c6d5346504601b1e0f1f460642ef extends Twig_Template
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
        $__internal_6edb73b09728a8aadf3369a1174b6025ef0ac220ab8149afe1ec5de7e2fd1119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edb73b09728a8aadf3369a1174b6025ef0ac220ab8149afe1ec5de7e2fd1119->enter($__internal_6edb73b09728a8aadf3369a1174b6025ef0ac220ab8149afe1ec5de7e2fd1119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2d98b4dbd7a713f78888940c00944af5daca33aefbe67fb1324bfbdf3a20dba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d98b4dbd7a713f78888940c00944af5daca33aefbe67fb1324bfbdf3a20dba3->enter($__internal_2d98b4dbd7a713f78888940c00944af5daca33aefbe67fb1324bfbdf3a20dba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6edb73b09728a8aadf3369a1174b6025ef0ac220ab8149afe1ec5de7e2fd1119->leave($__internal_6edb73b09728a8aadf3369a1174b6025ef0ac220ab8149afe1ec5de7e2fd1119_prof);

        
        $__internal_2d98b4dbd7a713f78888940c00944af5daca33aefbe67fb1324bfbdf3a20dba3->leave($__internal_2d98b4dbd7a713f78888940c00944af5daca33aefbe67fb1324bfbdf3a20dba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
