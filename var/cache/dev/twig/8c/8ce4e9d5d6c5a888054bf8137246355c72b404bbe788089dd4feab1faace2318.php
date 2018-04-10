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
        $__internal_5bd9a801bf3308d199b0c5891c7976e1e0e4a9ca46ee08ff822a57f9aac840f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd9a801bf3308d199b0c5891c7976e1e0e4a9ca46ee08ff822a57f9aac840f3->enter($__internal_5bd9a801bf3308d199b0c5891c7976e1e0e4a9ca46ee08ff822a57f9aac840f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c6941c90e79b5106a4aff819b18a03bfed3c99699f6cd3b05edb49a14e46c3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6941c90e79b5106a4aff819b18a03bfed3c99699f6cd3b05edb49a14e46c3e5->enter($__internal_c6941c90e79b5106a4aff819b18a03bfed3c99699f6cd3b05edb49a14e46c3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_5bd9a801bf3308d199b0c5891c7976e1e0e4a9ca46ee08ff822a57f9aac840f3->leave($__internal_5bd9a801bf3308d199b0c5891c7976e1e0e4a9ca46ee08ff822a57f9aac840f3_prof);

        
        $__internal_c6941c90e79b5106a4aff819b18a03bfed3c99699f6cd3b05edb49a14e46c3e5->leave($__internal_c6941c90e79b5106a4aff819b18a03bfed3c99699f6cd3b05edb49a14e46c3e5_prof);

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
