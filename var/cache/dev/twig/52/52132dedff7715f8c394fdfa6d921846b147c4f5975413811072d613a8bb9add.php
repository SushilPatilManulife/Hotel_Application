<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f4e34cc37e4c4251f0a9bda15d6521051090c1b474933d742c3f9a941a3b30c3 extends Twig_Template
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
        $__internal_8cedd315134d0a7988e33173de7f91493393eb60ff14b0d05d94623c9bb71d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cedd315134d0a7988e33173de7f91493393eb60ff14b0d05d94623c9bb71d52->enter($__internal_8cedd315134d0a7988e33173de7f91493393eb60ff14b0d05d94623c9bb71d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_181abde0a497897b3726ef779a155690fd993525228ab2fd46ea4f2a7a9bd7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181abde0a497897b3726ef779a155690fd993525228ab2fd46ea4f2a7a9bd7d5->enter($__internal_181abde0a497897b3726ef779a155690fd993525228ab2fd46ea4f2a7a9bd7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8cedd315134d0a7988e33173de7f91493393eb60ff14b0d05d94623c9bb71d52->leave($__internal_8cedd315134d0a7988e33173de7f91493393eb60ff14b0d05d94623c9bb71d52_prof);

        
        $__internal_181abde0a497897b3726ef779a155690fd993525228ab2fd46ea4f2a7a9bd7d5->leave($__internal_181abde0a497897b3726ef779a155690fd993525228ab2fd46ea4f2a7a9bd7d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
