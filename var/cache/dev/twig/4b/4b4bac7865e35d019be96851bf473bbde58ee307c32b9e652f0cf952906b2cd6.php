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
        $__internal_d1b81e22b1a273675dc8510a1522ad0fecffe67fd7c217659b8e20c875a8bf69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b81e22b1a273675dc8510a1522ad0fecffe67fd7c217659b8e20c875a8bf69->enter($__internal_d1b81e22b1a273675dc8510a1522ad0fecffe67fd7c217659b8e20c875a8bf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b80186dcfcd0d7035225e2f75b50da587d9a923ad3068fcef420d23ee6a69aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80186dcfcd0d7035225e2f75b50da587d9a923ad3068fcef420d23ee6a69aaf->enter($__internal_b80186dcfcd0d7035225e2f75b50da587d9a923ad3068fcef420d23ee6a69aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d1b81e22b1a273675dc8510a1522ad0fecffe67fd7c217659b8e20c875a8bf69->leave($__internal_d1b81e22b1a273675dc8510a1522ad0fecffe67fd7c217659b8e20c875a8bf69_prof);

        
        $__internal_b80186dcfcd0d7035225e2f75b50da587d9a923ad3068fcef420d23ee6a69aaf->leave($__internal_b80186dcfcd0d7035225e2f75b50da587d9a923ad3068fcef420d23ee6a69aaf_prof);

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
