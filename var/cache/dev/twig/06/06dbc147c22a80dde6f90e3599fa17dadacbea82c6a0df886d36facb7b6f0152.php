<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b9f3b5559f0b4c1da2be86a8701e18c41d6f662219d33658f2d1c6e4fa978707 extends Twig_Template
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
        $__internal_ec7f8cb1f83cf3e12cde85ef24f0a62632124d7cb0efd2e7f9871af7c6453974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7f8cb1f83cf3e12cde85ef24f0a62632124d7cb0efd2e7f9871af7c6453974->enter($__internal_ec7f8cb1f83cf3e12cde85ef24f0a62632124d7cb0efd2e7f9871af7c6453974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_33a8d261913c6732a562d129f845bb2b50cb1b179b3c2d5aad7a16a7f77b8de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a8d261913c6732a562d129f845bb2b50cb1b179b3c2d5aad7a16a7f77b8de6->enter($__internal_33a8d261913c6732a562d129f845bb2b50cb1b179b3c2d5aad7a16a7f77b8de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ec7f8cb1f83cf3e12cde85ef24f0a62632124d7cb0efd2e7f9871af7c6453974->leave($__internal_ec7f8cb1f83cf3e12cde85ef24f0a62632124d7cb0efd2e7f9871af7c6453974_prof);

        
        $__internal_33a8d261913c6732a562d129f845bb2b50cb1b179b3c2d5aad7a16a7f77b8de6->leave($__internal_33a8d261913c6732a562d129f845bb2b50cb1b179b3c2d5aad7a16a7f77b8de6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
