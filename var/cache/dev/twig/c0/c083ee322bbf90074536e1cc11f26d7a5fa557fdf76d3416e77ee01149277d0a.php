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
        $__internal_6bb48c4e1eb97f2d6daa8d075bbfbb328e81373c840f7e266ac35f02570a6f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb48c4e1eb97f2d6daa8d075bbfbb328e81373c840f7e266ac35f02570a6f35->enter($__internal_6bb48c4e1eb97f2d6daa8d075bbfbb328e81373c840f7e266ac35f02570a6f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6272585933581dbe7ea40eed9cba80312d09823b5cadffc208fbdc7ada01d8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6272585933581dbe7ea40eed9cba80312d09823b5cadffc208fbdc7ada01d8c2->enter($__internal_6272585933581dbe7ea40eed9cba80312d09823b5cadffc208fbdc7ada01d8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6bb48c4e1eb97f2d6daa8d075bbfbb328e81373c840f7e266ac35f02570a6f35->leave($__internal_6bb48c4e1eb97f2d6daa8d075bbfbb328e81373c840f7e266ac35f02570a6f35_prof);

        
        $__internal_6272585933581dbe7ea40eed9cba80312d09823b5cadffc208fbdc7ada01d8c2->leave($__internal_6272585933581dbe7ea40eed9cba80312d09823b5cadffc208fbdc7ada01d8c2_prof);

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
