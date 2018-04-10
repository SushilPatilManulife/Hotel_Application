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
        $__internal_6cbf0a1438260b2ac2289fbdb63ebcd6dcd5ea053d9d54411afd01b64ff58c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbf0a1438260b2ac2289fbdb63ebcd6dcd5ea053d9d54411afd01b64ff58c4f->enter($__internal_6cbf0a1438260b2ac2289fbdb63ebcd6dcd5ea053d9d54411afd01b64ff58c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6195e8a887fb3e458c59b72cdfe0bcab9d8ca4d9794e08c1e7490052109d6a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6195e8a887fb3e458c59b72cdfe0bcab9d8ca4d9794e08c1e7490052109d6a97->enter($__internal_6195e8a887fb3e458c59b72cdfe0bcab9d8ca4d9794e08c1e7490052109d6a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6cbf0a1438260b2ac2289fbdb63ebcd6dcd5ea053d9d54411afd01b64ff58c4f->leave($__internal_6cbf0a1438260b2ac2289fbdb63ebcd6dcd5ea053d9d54411afd01b64ff58c4f_prof);

        
        $__internal_6195e8a887fb3e458c59b72cdfe0bcab9d8ca4d9794e08c1e7490052109d6a97->leave($__internal_6195e8a887fb3e458c59b72cdfe0bcab9d8ca4d9794e08c1e7490052109d6a97_prof);

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
