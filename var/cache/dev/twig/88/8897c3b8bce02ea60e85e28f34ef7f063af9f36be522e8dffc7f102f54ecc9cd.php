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
        $__internal_6e9728ff4d11009ad67aad05d061479197615502055082b85bff22212a805f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9728ff4d11009ad67aad05d061479197615502055082b85bff22212a805f6d->enter($__internal_6e9728ff4d11009ad67aad05d061479197615502055082b85bff22212a805f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e3eb86aab9e47f01c443ba0929637bb4beb8db7b361414c699ee23c6158f9744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3eb86aab9e47f01c443ba0929637bb4beb8db7b361414c699ee23c6158f9744->enter($__internal_e3eb86aab9e47f01c443ba0929637bb4beb8db7b361414c699ee23c6158f9744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6e9728ff4d11009ad67aad05d061479197615502055082b85bff22212a805f6d->leave($__internal_6e9728ff4d11009ad67aad05d061479197615502055082b85bff22212a805f6d_prof);

        
        $__internal_e3eb86aab9e47f01c443ba0929637bb4beb8db7b361414c699ee23c6158f9744->leave($__internal_e3eb86aab9e47f01c443ba0929637bb4beb8db7b361414c699ee23c6158f9744_prof);

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
