<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7f6346e085aff589da08052b3741a617b9cecd465388e5e1d750c0c0866acee4 extends Twig_Template
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
        $__internal_c3ac77178b5d4e09f697dafe082f5efeea747c4255834e05a2d0ba2c4f6df4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ac77178b5d4e09f697dafe082f5efeea747c4255834e05a2d0ba2c4f6df4bf->enter($__internal_c3ac77178b5d4e09f697dafe082f5efeea747c4255834e05a2d0ba2c4f6df4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7c4fa3870bf1d5f38d42db9c33f47a5d3919f53bd55e9a57346a95af706c33fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4fa3870bf1d5f38d42db9c33f47a5d3919f53bd55e9a57346a95af706c33fd->enter($__internal_7c4fa3870bf1d5f38d42db9c33f47a5d3919f53bd55e9a57346a95af706c33fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c3ac77178b5d4e09f697dafe082f5efeea747c4255834e05a2d0ba2c4f6df4bf->leave($__internal_c3ac77178b5d4e09f697dafe082f5efeea747c4255834e05a2d0ba2c4f6df4bf_prof);

        
        $__internal_7c4fa3870bf1d5f38d42db9c33f47a5d3919f53bd55e9a57346a95af706c33fd->leave($__internal_7c4fa3870bf1d5f38d42db9c33f47a5d3919f53bd55e9a57346a95af706c33fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
