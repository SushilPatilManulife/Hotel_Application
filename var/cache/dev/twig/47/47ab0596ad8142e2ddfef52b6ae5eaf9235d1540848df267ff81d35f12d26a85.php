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
        $__internal_68eceac5fe9a0a9531022092f445c9b69b1bfb4de87684eed846f5e0fe3cd933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68eceac5fe9a0a9531022092f445c9b69b1bfb4de87684eed846f5e0fe3cd933->enter($__internal_68eceac5fe9a0a9531022092f445c9b69b1bfb4de87684eed846f5e0fe3cd933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bbd19ad8b09c96bb2835600e24d1f9ae8e5b594468c9af1d0ec9e24685c8e007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd19ad8b09c96bb2835600e24d1f9ae8e5b594468c9af1d0ec9e24685c8e007->enter($__internal_bbd19ad8b09c96bb2835600e24d1f9ae8e5b594468c9af1d0ec9e24685c8e007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_68eceac5fe9a0a9531022092f445c9b69b1bfb4de87684eed846f5e0fe3cd933->leave($__internal_68eceac5fe9a0a9531022092f445c9b69b1bfb4de87684eed846f5e0fe3cd933_prof);

        
        $__internal_bbd19ad8b09c96bb2835600e24d1f9ae8e5b594468c9af1d0ec9e24685c8e007->leave($__internal_bbd19ad8b09c96bb2835600e24d1f9ae8e5b594468c9af1d0ec9e24685c8e007_prof);

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
