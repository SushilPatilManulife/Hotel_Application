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
        $__internal_8066f31f1572ae65bd3634d2551fc850a983300877c06466ae49404a5779c108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8066f31f1572ae65bd3634d2551fc850a983300877c06466ae49404a5779c108->enter($__internal_8066f31f1572ae65bd3634d2551fc850a983300877c06466ae49404a5779c108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e2f27c89e5c605ccd87c6f4e0496163413eef8b63118c36248257f09c570f9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f27c89e5c605ccd87c6f4e0496163413eef8b63118c36248257f09c570f9e4->enter($__internal_e2f27c89e5c605ccd87c6f4e0496163413eef8b63118c36248257f09c570f9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_8066f31f1572ae65bd3634d2551fc850a983300877c06466ae49404a5779c108->leave($__internal_8066f31f1572ae65bd3634d2551fc850a983300877c06466ae49404a5779c108_prof);

        
        $__internal_e2f27c89e5c605ccd87c6f4e0496163413eef8b63118c36248257f09c570f9e4->leave($__internal_e2f27c89e5c605ccd87c6f4e0496163413eef8b63118c36248257f09c570f9e4_prof);

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
