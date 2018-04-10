<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e3fcb496d78d6ad74a08e9824ae51d83e460b3ac5828e4dcc72e379a43e8e9bb extends Twig_Template
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
        $__internal_ae58ffd63ab9f34ad34fdd538fe486b27a3a853674ecb1d644e1742e60a060c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae58ffd63ab9f34ad34fdd538fe486b27a3a853674ecb1d644e1742e60a060c5->enter($__internal_ae58ffd63ab9f34ad34fdd538fe486b27a3a853674ecb1d644e1742e60a060c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_804ea9914b571aa0543fa2824b6dc0d29cae85686cdfb6658391772c9c9ac104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804ea9914b571aa0543fa2824b6dc0d29cae85686cdfb6658391772c9c9ac104->enter($__internal_804ea9914b571aa0543fa2824b6dc0d29cae85686cdfb6658391772c9c9ac104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ae58ffd63ab9f34ad34fdd538fe486b27a3a853674ecb1d644e1742e60a060c5->leave($__internal_ae58ffd63ab9f34ad34fdd538fe486b27a3a853674ecb1d644e1742e60a060c5_prof);

        
        $__internal_804ea9914b571aa0543fa2824b6dc0d29cae85686cdfb6658391772c9c9ac104->leave($__internal_804ea9914b571aa0543fa2824b6dc0d29cae85686cdfb6658391772c9c9ac104_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
