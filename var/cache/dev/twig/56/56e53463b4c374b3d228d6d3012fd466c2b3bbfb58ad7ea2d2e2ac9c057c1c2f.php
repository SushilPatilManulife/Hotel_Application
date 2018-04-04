<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fbb982b511b6e713863021d8fe6157e26a8a862a23abb077931328908cf6bddf extends Twig_Template
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
        $__internal_80ccc32f9866a74521bae99588a5ac4e8c2008b2753bd25194d78ae9ba46feaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ccc32f9866a74521bae99588a5ac4e8c2008b2753bd25194d78ae9ba46feaa->enter($__internal_80ccc32f9866a74521bae99588a5ac4e8c2008b2753bd25194d78ae9ba46feaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8244d49bff150d937829830817038ec743ae59107ac420e70bfa2e89e8013d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8244d49bff150d937829830817038ec743ae59107ac420e70bfa2e89e8013d51->enter($__internal_8244d49bff150d937829830817038ec743ae59107ac420e70bfa2e89e8013d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_80ccc32f9866a74521bae99588a5ac4e8c2008b2753bd25194d78ae9ba46feaa->leave($__internal_80ccc32f9866a74521bae99588a5ac4e8c2008b2753bd25194d78ae9ba46feaa_prof);

        
        $__internal_8244d49bff150d937829830817038ec743ae59107ac420e70bfa2e89e8013d51->leave($__internal_8244d49bff150d937829830817038ec743ae59107ac420e70bfa2e89e8013d51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
