<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_02ff7772e6e1765fb64da67c413a7224bb31a16f2809104fb06a9bb466ddb3a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c78c45d069c5e2bd32738f5639ff2a5a1f200afe55e52034ab93d192127becb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78c45d069c5e2bd32738f5639ff2a5a1f200afe55e52034ab93d192127becb4->enter($__internal_c78c45d069c5e2bd32738f5639ff2a5a1f200afe55e52034ab93d192127becb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e4726fafe28aa6e439a33a62001016bc037df554a7558084f1272705f49432e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4726fafe28aa6e439a33a62001016bc037df554a7558084f1272705f49432e3->enter($__internal_e4726fafe28aa6e439a33a62001016bc037df554a7558084f1272705f49432e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c78c45d069c5e2bd32738f5639ff2a5a1f200afe55e52034ab93d192127becb4->leave($__internal_c78c45d069c5e2bd32738f5639ff2a5a1f200afe55e52034ab93d192127becb4_prof);

        
        $__internal_e4726fafe28aa6e439a33a62001016bc037df554a7558084f1272705f49432e3->leave($__internal_e4726fafe28aa6e439a33a62001016bc037df554a7558084f1272705f49432e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c936e753be2568c3d290dc2ceff7a2d3a675fbc22ec8d52ef38748eb7ed8899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c936e753be2568c3d290dc2ceff7a2d3a675fbc22ec8d52ef38748eb7ed8899->enter($__internal_1c936e753be2568c3d290dc2ceff7a2d3a675fbc22ec8d52ef38748eb7ed8899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc9c8356b4bb47dfad8c753bdcee0279a8b0705374e29ecc59fbd34217be8632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9c8356b4bb47dfad8c753bdcee0279a8b0705374e29ecc59fbd34217be8632->enter($__internal_fc9c8356b4bb47dfad8c753bdcee0279a8b0705374e29ecc59fbd34217be8632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fc9c8356b4bb47dfad8c753bdcee0279a8b0705374e29ecc59fbd34217be8632->leave($__internal_fc9c8356b4bb47dfad8c753bdcee0279a8b0705374e29ecc59fbd34217be8632_prof);

        
        $__internal_1c936e753be2568c3d290dc2ceff7a2d3a675fbc22ec8d52ef38748eb7ed8899->leave($__internal_1c936e753be2568c3d290dc2ceff7a2d3a675fbc22ec8d52ef38748eb7ed8899_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
