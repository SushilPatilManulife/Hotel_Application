<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6cc923912a417f46fc32244461387fffac268674a115bde3f2282ce2df08c6fc extends Twig_Template
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
        $__internal_6ec4a31471a79da5db54e462a6bf373931ad532c84cc07f23534d3c25e55c535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec4a31471a79da5db54e462a6bf373931ad532c84cc07f23534d3c25e55c535->enter($__internal_6ec4a31471a79da5db54e462a6bf373931ad532c84cc07f23534d3c25e55c535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_89261716fa35e7b7f4b1baf2ecdc78d6f7438e45029dd84e259be7f41574ddc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89261716fa35e7b7f4b1baf2ecdc78d6f7438e45029dd84e259be7f41574ddc9->enter($__internal_89261716fa35e7b7f4b1baf2ecdc78d6f7438e45029dd84e259be7f41574ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6ec4a31471a79da5db54e462a6bf373931ad532c84cc07f23534d3c25e55c535->leave($__internal_6ec4a31471a79da5db54e462a6bf373931ad532c84cc07f23534d3c25e55c535_prof);

        
        $__internal_89261716fa35e7b7f4b1baf2ecdc78d6f7438e45029dd84e259be7f41574ddc9->leave($__internal_89261716fa35e7b7f4b1baf2ecdc78d6f7438e45029dd84e259be7f41574ddc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
