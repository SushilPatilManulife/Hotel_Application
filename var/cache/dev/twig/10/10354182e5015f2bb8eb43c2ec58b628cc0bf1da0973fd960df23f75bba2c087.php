<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_38ae79ccf1f0e61c5e7458dfc5a7ea518c7ae171f54c416707a7082917e8eb74 extends Twig_Template
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
        $__internal_6d21771b016f0ca8262ddd8ddd0286d3c955ecb7e64e9e2830a9198678be6a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d21771b016f0ca8262ddd8ddd0286d3c955ecb7e64e9e2830a9198678be6a93->enter($__internal_6d21771b016f0ca8262ddd8ddd0286d3c955ecb7e64e9e2830a9198678be6a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e068f60046c4747b1b10633c134b2c9747e31d70bf5c529dded0ce21d11254b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e068f60046c4747b1b10633c134b2c9747e31d70bf5c529dded0ce21d11254b7->enter($__internal_e068f60046c4747b1b10633c134b2c9747e31d70bf5c529dded0ce21d11254b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6d21771b016f0ca8262ddd8ddd0286d3c955ecb7e64e9e2830a9198678be6a93->leave($__internal_6d21771b016f0ca8262ddd8ddd0286d3c955ecb7e64e9e2830a9198678be6a93_prof);

        
        $__internal_e068f60046c4747b1b10633c134b2c9747e31d70bf5c529dded0ce21d11254b7->leave($__internal_e068f60046c4747b1b10633c134b2c9747e31d70bf5c529dded0ce21d11254b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
