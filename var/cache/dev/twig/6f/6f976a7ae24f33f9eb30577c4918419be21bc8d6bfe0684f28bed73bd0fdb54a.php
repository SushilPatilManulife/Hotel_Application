<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_db5c037b811ba966ab5c051201723dc6321674472cefe89952fe3f41bcb71c1b extends Twig_Template
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
        $__internal_803f2907fd8552ab498c4490949006b05703b8a7e4486428f9cf59087b7c9c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803f2907fd8552ab498c4490949006b05703b8a7e4486428f9cf59087b7c9c6d->enter($__internal_803f2907fd8552ab498c4490949006b05703b8a7e4486428f9cf59087b7c9c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3342b26258741472aad5c9a80f6014a05723391317ee43d6d5f2406521e487d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3342b26258741472aad5c9a80f6014a05723391317ee43d6d5f2406521e487d2->enter($__internal_3342b26258741472aad5c9a80f6014a05723391317ee43d6d5f2406521e487d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_803f2907fd8552ab498c4490949006b05703b8a7e4486428f9cf59087b7c9c6d->leave($__internal_803f2907fd8552ab498c4490949006b05703b8a7e4486428f9cf59087b7c9c6d_prof);

        
        $__internal_3342b26258741472aad5c9a80f6014a05723391317ee43d6d5f2406521e487d2->leave($__internal_3342b26258741472aad5c9a80f6014a05723391317ee43d6d5f2406521e487d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
