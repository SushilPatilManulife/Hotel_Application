<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_29b4e57361ba5018a993461564b6994a78a3c88f753dbb02f82a94100b19bd61 extends Twig_Template
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
        $__internal_c5c024c98b370e4b855c7235217fd147f095eef9b9951c5c72f8cd20cf0e0d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c024c98b370e4b855c7235217fd147f095eef9b9951c5c72f8cd20cf0e0d49->enter($__internal_c5c024c98b370e4b855c7235217fd147f095eef9b9951c5c72f8cd20cf0e0d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5938b0149560c9920f680a6754ea158a070327a8b4d5548d6c456a0be6860a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5938b0149560c9920f680a6754ea158a070327a8b4d5548d6c456a0be6860a59->enter($__internal_5938b0149560c9920f680a6754ea158a070327a8b4d5548d6c456a0be6860a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c5c024c98b370e4b855c7235217fd147f095eef9b9951c5c72f8cd20cf0e0d49->leave($__internal_c5c024c98b370e4b855c7235217fd147f095eef9b9951c5c72f8cd20cf0e0d49_prof);

        
        $__internal_5938b0149560c9920f680a6754ea158a070327a8b4d5548d6c456a0be6860a59->leave($__internal_5938b0149560c9920f680a6754ea158a070327a8b4d5548d6c456a0be6860a59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
