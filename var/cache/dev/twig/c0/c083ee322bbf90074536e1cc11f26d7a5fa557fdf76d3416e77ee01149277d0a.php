<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9dbc17076a0d7bef24cb521ec4ba59552c6d6fbf4241a7b5a37169db99effab3 extends Twig_Template
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
        $__internal_22dde7595b09df50a6e7d7e5e70569655088a1f7c39fc6d4192332b58dca70ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22dde7595b09df50a6e7d7e5e70569655088a1f7c39fc6d4192332b58dca70ea->enter($__internal_22dde7595b09df50a6e7d7e5e70569655088a1f7c39fc6d4192332b58dca70ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c7bbb71d69e1d8c649b9425b209f001ace063c7279583ae9c2a17cd6327841c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bbb71d69e1d8c649b9425b209f001ace063c7279583ae9c2a17cd6327841c2->enter($__internal_c7bbb71d69e1d8c649b9425b209f001ace063c7279583ae9c2a17cd6327841c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_22dde7595b09df50a6e7d7e5e70569655088a1f7c39fc6d4192332b58dca70ea->leave($__internal_22dde7595b09df50a6e7d7e5e70569655088a1f7c39fc6d4192332b58dca70ea_prof);

        
        $__internal_c7bbb71d69e1d8c649b9425b209f001ace063c7279583ae9c2a17cd6327841c2->leave($__internal_c7bbb71d69e1d8c649b9425b209f001ace063c7279583ae9c2a17cd6327841c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
