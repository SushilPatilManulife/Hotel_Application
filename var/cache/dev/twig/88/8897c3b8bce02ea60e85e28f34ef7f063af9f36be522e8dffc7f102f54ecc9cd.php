<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e9bfea78d66b244222afe09f3b901d42f5d4a51f34f90fdd1fe82db7b0a88682 extends Twig_Template
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
        $__internal_5f3739d266bf468a9585b24147d8df0f474b98e62919eb7700f76d3344c1ca05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3739d266bf468a9585b24147d8df0f474b98e62919eb7700f76d3344c1ca05->enter($__internal_5f3739d266bf468a9585b24147d8df0f474b98e62919eb7700f76d3344c1ca05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c9e1acc893f8869d3683caebf67fb67baba57764be2b1c4963ec6b0982b54497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e1acc893f8869d3683caebf67fb67baba57764be2b1c4963ec6b0982b54497->enter($__internal_c9e1acc893f8869d3683caebf67fb67baba57764be2b1c4963ec6b0982b54497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5f3739d266bf468a9585b24147d8df0f474b98e62919eb7700f76d3344c1ca05->leave($__internal_5f3739d266bf468a9585b24147d8df0f474b98e62919eb7700f76d3344c1ca05_prof);

        
        $__internal_c9e1acc893f8869d3683caebf67fb67baba57764be2b1c4963ec6b0982b54497->leave($__internal_c9e1acc893f8869d3683caebf67fb67baba57764be2b1c4963ec6b0982b54497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
