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
        $__internal_d6a04c0a2c6ff1497a77a6e2e49ca2d585cfaf8b88d1e17dfbd742a2615b13f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a04c0a2c6ff1497a77a6e2e49ca2d585cfaf8b88d1e17dfbd742a2615b13f3->enter($__internal_d6a04c0a2c6ff1497a77a6e2e49ca2d585cfaf8b88d1e17dfbd742a2615b13f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1fe1fad430a1cfedc5038ed45522421bbe530ebcc64bfe1058a236ff840a3655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe1fad430a1cfedc5038ed45522421bbe530ebcc64bfe1058a236ff840a3655->enter($__internal_1fe1fad430a1cfedc5038ed45522421bbe530ebcc64bfe1058a236ff840a3655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d6a04c0a2c6ff1497a77a6e2e49ca2d585cfaf8b88d1e17dfbd742a2615b13f3->leave($__internal_d6a04c0a2c6ff1497a77a6e2e49ca2d585cfaf8b88d1e17dfbd742a2615b13f3_prof);

        
        $__internal_1fe1fad430a1cfedc5038ed45522421bbe530ebcc64bfe1058a236ff840a3655->leave($__internal_1fe1fad430a1cfedc5038ed45522421bbe530ebcc64bfe1058a236ff840a3655_prof);

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
