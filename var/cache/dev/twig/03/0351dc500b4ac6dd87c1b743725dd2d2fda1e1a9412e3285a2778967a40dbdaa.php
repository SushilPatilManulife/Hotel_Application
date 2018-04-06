<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b804de4e54e01b6ec1bce1e7cf8c8a1eee8bd710475101c6cea60bae47686054 extends Twig_Template
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
        $__internal_71474cc4c007400342871e1634ab8e0c60aaae93247433bd8813436330e4c1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71474cc4c007400342871e1634ab8e0c60aaae93247433bd8813436330e4c1d5->enter($__internal_71474cc4c007400342871e1634ab8e0c60aaae93247433bd8813436330e4c1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_06813cf770c5383d1bc0297847d032bf482b04239950a3126ed4fda434404d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06813cf770c5383d1bc0297847d032bf482b04239950a3126ed4fda434404d7d->enter($__internal_06813cf770c5383d1bc0297847d032bf482b04239950a3126ed4fda434404d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_71474cc4c007400342871e1634ab8e0c60aaae93247433bd8813436330e4c1d5->leave($__internal_71474cc4c007400342871e1634ab8e0c60aaae93247433bd8813436330e4c1d5_prof);

        
        $__internal_06813cf770c5383d1bc0297847d032bf482b04239950a3126ed4fda434404d7d->leave($__internal_06813cf770c5383d1bc0297847d032bf482b04239950a3126ed4fda434404d7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
