<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9dbc17076a0d7bef24cb521ec4ba59552c6d6fbf4241a7b5a37169db99effab3 extends Twig_Template
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
        $__internal_ff936942bb237a66ee826f95bad32fc886d59471136495425bad745fe4a27d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff936942bb237a66ee826f95bad32fc886d59471136495425bad745fe4a27d5d->enter($__internal_ff936942bb237a66ee826f95bad32fc886d59471136495425bad745fe4a27d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8fd64189e91f3ec1d6be27fd2d47c5413864d899105fda4df57e8878a3356916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd64189e91f3ec1d6be27fd2d47c5413864d899105fda4df57e8878a3356916->enter($__internal_8fd64189e91f3ec1d6be27fd2d47c5413864d899105fda4df57e8878a3356916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ff936942bb237a66ee826f95bad32fc886d59471136495425bad745fe4a27d5d->leave($__internal_ff936942bb237a66ee826f95bad32fc886d59471136495425bad745fe4a27d5d_prof);

        
        $__internal_8fd64189e91f3ec1d6be27fd2d47c5413864d899105fda4df57e8878a3356916->leave($__internal_8fd64189e91f3ec1d6be27fd2d47c5413864d899105fda4df57e8878a3356916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
