<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ca14cc9e46bc5dda743fb30cf9ec751e09cd996fcee21589b25733e777815304 extends Twig_Template
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
        $__internal_55b803bf4f84afca47cf6884805e3a38abb3c89e11ecbe536f4b54c6789e72a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b803bf4f84afca47cf6884805e3a38abb3c89e11ecbe536f4b54c6789e72a0->enter($__internal_55b803bf4f84afca47cf6884805e3a38abb3c89e11ecbe536f4b54c6789e72a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c729be1518da2424829c04b8e6e7d03c17305bb763d5f4a6225af18900336141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c729be1518da2424829c04b8e6e7d03c17305bb763d5f4a6225af18900336141->enter($__internal_c729be1518da2424829c04b8e6e7d03c17305bb763d5f4a6225af18900336141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_55b803bf4f84afca47cf6884805e3a38abb3c89e11ecbe536f4b54c6789e72a0->leave($__internal_55b803bf4f84afca47cf6884805e3a38abb3c89e11ecbe536f4b54c6789e72a0_prof);

        
        $__internal_c729be1518da2424829c04b8e6e7d03c17305bb763d5f4a6225af18900336141->leave($__internal_c729be1518da2424829c04b8e6e7d03c17305bb763d5f4a6225af18900336141_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
