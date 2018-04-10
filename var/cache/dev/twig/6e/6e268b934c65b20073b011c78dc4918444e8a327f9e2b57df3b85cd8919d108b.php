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
        $__internal_0cdc902c43013a02d8da2ea264ec825c3fe96ae62368ad03ac3bf8f9b055e603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdc902c43013a02d8da2ea264ec825c3fe96ae62368ad03ac3bf8f9b055e603->enter($__internal_0cdc902c43013a02d8da2ea264ec825c3fe96ae62368ad03ac3bf8f9b055e603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fcadf19fa61e474583842245673df50d8cd0989e0b41a40fc9b0b679f20afb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcadf19fa61e474583842245673df50d8cd0989e0b41a40fc9b0b679f20afb56->enter($__internal_fcadf19fa61e474583842245673df50d8cd0989e0b41a40fc9b0b679f20afb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0cdc902c43013a02d8da2ea264ec825c3fe96ae62368ad03ac3bf8f9b055e603->leave($__internal_0cdc902c43013a02d8da2ea264ec825c3fe96ae62368ad03ac3bf8f9b055e603_prof);

        
        $__internal_fcadf19fa61e474583842245673df50d8cd0989e0b41a40fc9b0b679f20afb56->leave($__internal_fcadf19fa61e474583842245673df50d8cd0989e0b41a40fc9b0b679f20afb56_prof);

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
