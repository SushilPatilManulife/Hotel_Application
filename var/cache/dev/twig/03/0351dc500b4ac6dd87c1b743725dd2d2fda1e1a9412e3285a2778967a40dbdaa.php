<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b804de4e54e01b6ec1bce1e7cf8c8a1eee8bd710475101c6cea60bae47686054 extends Twig_Template
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
        $__internal_c5dacff80ce0096ec0696288734bcd39a083a90fc7f233a2f21467e46f79e856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5dacff80ce0096ec0696288734bcd39a083a90fc7f233a2f21467e46f79e856->enter($__internal_c5dacff80ce0096ec0696288734bcd39a083a90fc7f233a2f21467e46f79e856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f7ebbba77723708fb11ca6fb57cc61ef2fe717488f7047b50fcd05a760019b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ebbba77723708fb11ca6fb57cc61ef2fe717488f7047b50fcd05a760019b85->enter($__internal_f7ebbba77723708fb11ca6fb57cc61ef2fe717488f7047b50fcd05a760019b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c5dacff80ce0096ec0696288734bcd39a083a90fc7f233a2f21467e46f79e856->leave($__internal_c5dacff80ce0096ec0696288734bcd39a083a90fc7f233a2f21467e46f79e856_prof);

        
        $__internal_f7ebbba77723708fb11ca6fb57cc61ef2fe717488f7047b50fcd05a760019b85->leave($__internal_f7ebbba77723708fb11ca6fb57cc61ef2fe717488f7047b50fcd05a760019b85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
