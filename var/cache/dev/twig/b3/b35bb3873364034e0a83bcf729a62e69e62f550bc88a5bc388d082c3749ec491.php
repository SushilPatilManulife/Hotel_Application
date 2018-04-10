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
        $__internal_80172d8e7d53f94a45ea0f3f681f1650dc686de7b5e94d184bfc681b9143d98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80172d8e7d53f94a45ea0f3f681f1650dc686de7b5e94d184bfc681b9143d98f->enter($__internal_80172d8e7d53f94a45ea0f3f681f1650dc686de7b5e94d184bfc681b9143d98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_bc16c25a65d4d55b6a9bd8087d53337cef162c97c357bf58d7d70c0dd1951337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc16c25a65d4d55b6a9bd8087d53337cef162c97c357bf58d7d70c0dd1951337->enter($__internal_bc16c25a65d4d55b6a9bd8087d53337cef162c97c357bf58d7d70c0dd1951337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_80172d8e7d53f94a45ea0f3f681f1650dc686de7b5e94d184bfc681b9143d98f->leave($__internal_80172d8e7d53f94a45ea0f3f681f1650dc686de7b5e94d184bfc681b9143d98f_prof);

        
        $__internal_bc16c25a65d4d55b6a9bd8087d53337cef162c97c357bf58d7d70c0dd1951337->leave($__internal_bc16c25a65d4d55b6a9bd8087d53337cef162c97c357bf58d7d70c0dd1951337_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6131229436f9dc308212642ceb8b345dcf21b6b61247076305394947a32f12ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6131229436f9dc308212642ceb8b345dcf21b6b61247076305394947a32f12ed->enter($__internal_6131229436f9dc308212642ceb8b345dcf21b6b61247076305394947a32f12ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3ed8a4b7151bd643f16ecd05190120bfab99a3a26c650a34f0795bf080fa6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ed8a4b7151bd643f16ecd05190120bfab99a3a26c650a34f0795bf080fa6a8->enter($__internal_c3ed8a4b7151bd643f16ecd05190120bfab99a3a26c650a34f0795bf080fa6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c3ed8a4b7151bd643f16ecd05190120bfab99a3a26c650a34f0795bf080fa6a8->leave($__internal_c3ed8a4b7151bd643f16ecd05190120bfab99a3a26c650a34f0795bf080fa6a8_prof);

        
        $__internal_6131229436f9dc308212642ceb8b345dcf21b6b61247076305394947a32f12ed->leave($__internal_6131229436f9dc308212642ceb8b345dcf21b6b61247076305394947a32f12ed_prof);

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
