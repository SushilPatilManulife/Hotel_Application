<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ff53047fabd68898161ba84eaf5ca248fea6827b760b4f174bdadef9913ab843 extends Twig_Template
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
        $__internal_1a98c66d85bc98c8677fb4eb227c727f8f2fea67f219a49c4f540f05e4404ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a98c66d85bc98c8677fb4eb227c727f8f2fea67f219a49c4f540f05e4404ffa->enter($__internal_1a98c66d85bc98c8677fb4eb227c727f8f2fea67f219a49c4f540f05e4404ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8a315ff2c00d871fa67559921e8fe67d3599a9871123bdb6535910e0d957ecf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a315ff2c00d871fa67559921e8fe67d3599a9871123bdb6535910e0d957ecf1->enter($__internal_8a315ff2c00d871fa67559921e8fe67d3599a9871123bdb6535910e0d957ecf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a98c66d85bc98c8677fb4eb227c727f8f2fea67f219a49c4f540f05e4404ffa->leave($__internal_1a98c66d85bc98c8677fb4eb227c727f8f2fea67f219a49c4f540f05e4404ffa_prof);

        
        $__internal_8a315ff2c00d871fa67559921e8fe67d3599a9871123bdb6535910e0d957ecf1->leave($__internal_8a315ff2c00d871fa67559921e8fe67d3599a9871123bdb6535910e0d957ecf1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdf8e89ffa180b9bf2d9b9326bdc6754a3173c2f82d9872c792285cfdb936aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf8e89ffa180b9bf2d9b9326bdc6754a3173c2f82d9872c792285cfdb936aac->enter($__internal_cdf8e89ffa180b9bf2d9b9326bdc6754a3173c2f82d9872c792285cfdb936aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f2f216b484a26b0084662f427b266f781f2780b89588f8ed786d71c1ecb8a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2f216b484a26b0084662f427b266f781f2780b89588f8ed786d71c1ecb8a48->enter($__internal_7f2f216b484a26b0084662f427b266f781f2780b89588f8ed786d71c1ecb8a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7f2f216b484a26b0084662f427b266f781f2780b89588f8ed786d71c1ecb8a48->leave($__internal_7f2f216b484a26b0084662f427b266f781f2780b89588f8ed786d71c1ecb8a48_prof);

        
        $__internal_cdf8e89ffa180b9bf2d9b9326bdc6754a3173c2f82d9872c792285cfdb936aac->leave($__internal_cdf8e89ffa180b9bf2d9b9326bdc6754a3173c2f82d9872c792285cfdb936aac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
