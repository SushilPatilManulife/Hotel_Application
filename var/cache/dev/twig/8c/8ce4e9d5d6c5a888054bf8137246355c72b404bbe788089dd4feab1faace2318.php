<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_83437b431eda0c2c3504c3bfaf67c9170cbbdd688dae065ac739c3e475fb9098 extends Twig_Template
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
        $__internal_bb506ec26079256f938fd59ac099ec6d3cfe6ee58f7d72ab1a9f65e0fbbae4b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb506ec26079256f938fd59ac099ec6d3cfe6ee58f7d72ab1a9f65e0fbbae4b6->enter($__internal_bb506ec26079256f938fd59ac099ec6d3cfe6ee58f7d72ab1a9f65e0fbbae4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_211bcd1ef6bf972e380e15bf7dc8cf4ad8db13760e99075f16e44d3e9c5fdab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211bcd1ef6bf972e380e15bf7dc8cf4ad8db13760e99075f16e44d3e9c5fdab4->enter($__internal_211bcd1ef6bf972e380e15bf7dc8cf4ad8db13760e99075f16e44d3e9c5fdab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bb506ec26079256f938fd59ac099ec6d3cfe6ee58f7d72ab1a9f65e0fbbae4b6->leave($__internal_bb506ec26079256f938fd59ac099ec6d3cfe6ee58f7d72ab1a9f65e0fbbae4b6_prof);

        
        $__internal_211bcd1ef6bf972e380e15bf7dc8cf4ad8db13760e99075f16e44d3e9c5fdab4->leave($__internal_211bcd1ef6bf972e380e15bf7dc8cf4ad8db13760e99075f16e44d3e9c5fdab4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
