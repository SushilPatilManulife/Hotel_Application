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
        $__internal_c8a05aaf910a71300f7b93ec2fb9ad4f803b1ef6c041de2980bcff12ee7e2374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a05aaf910a71300f7b93ec2fb9ad4f803b1ef6c041de2980bcff12ee7e2374->enter($__internal_c8a05aaf910a71300f7b93ec2fb9ad4f803b1ef6c041de2980bcff12ee7e2374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0cbb31802f7a197adae91a564b0b6a1ee3b62a9b4bc32d265e071f8e18ed041b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbb31802f7a197adae91a564b0b6a1ee3b62a9b4bc32d265e071f8e18ed041b->enter($__internal_0cbb31802f7a197adae91a564b0b6a1ee3b62a9b4bc32d265e071f8e18ed041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c8a05aaf910a71300f7b93ec2fb9ad4f803b1ef6c041de2980bcff12ee7e2374->leave($__internal_c8a05aaf910a71300f7b93ec2fb9ad4f803b1ef6c041de2980bcff12ee7e2374_prof);

        
        $__internal_0cbb31802f7a197adae91a564b0b6a1ee3b62a9b4bc32d265e071f8e18ed041b->leave($__internal_0cbb31802f7a197adae91a564b0b6a1ee3b62a9b4bc32d265e071f8e18ed041b_prof);

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
