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
        $__internal_01769cb8c2914f129e57c2da4b28f0ecfcfa7671b532e4e98528cbfda904f4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01769cb8c2914f129e57c2da4b28f0ecfcfa7671b532e4e98528cbfda904f4c2->enter($__internal_01769cb8c2914f129e57c2da4b28f0ecfcfa7671b532e4e98528cbfda904f4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_dbe86238472220304ed9eb18b0fddbcb02c825cce9dc21f91812437541ba8da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe86238472220304ed9eb18b0fddbcb02c825cce9dc21f91812437541ba8da5->enter($__internal_dbe86238472220304ed9eb18b0fddbcb02c825cce9dc21f91812437541ba8da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_01769cb8c2914f129e57c2da4b28f0ecfcfa7671b532e4e98528cbfda904f4c2->leave($__internal_01769cb8c2914f129e57c2da4b28f0ecfcfa7671b532e4e98528cbfda904f4c2_prof);

        
        $__internal_dbe86238472220304ed9eb18b0fddbcb02c825cce9dc21f91812437541ba8da5->leave($__internal_dbe86238472220304ed9eb18b0fddbcb02c825cce9dc21f91812437541ba8da5_prof);

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
