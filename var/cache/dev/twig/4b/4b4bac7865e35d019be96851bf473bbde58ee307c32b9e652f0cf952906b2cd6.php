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
        $__internal_97cf765d27aff5f8d83aa7dee88d7b00dd361cbe6a39327309e680bda267f106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cf765d27aff5f8d83aa7dee88d7b00dd361cbe6a39327309e680bda267f106->enter($__internal_97cf765d27aff5f8d83aa7dee88d7b00dd361cbe6a39327309e680bda267f106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2ac812db2b58e49d5092ba9e696644957d5ebe7b9e773eadd89e870030ba90e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac812db2b58e49d5092ba9e696644957d5ebe7b9e773eadd89e870030ba90e1->enter($__internal_2ac812db2b58e49d5092ba9e696644957d5ebe7b9e773eadd89e870030ba90e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_97cf765d27aff5f8d83aa7dee88d7b00dd361cbe6a39327309e680bda267f106->leave($__internal_97cf765d27aff5f8d83aa7dee88d7b00dd361cbe6a39327309e680bda267f106_prof);

        
        $__internal_2ac812db2b58e49d5092ba9e696644957d5ebe7b9e773eadd89e870030ba90e1->leave($__internal_2ac812db2b58e49d5092ba9e696644957d5ebe7b9e773eadd89e870030ba90e1_prof);

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
