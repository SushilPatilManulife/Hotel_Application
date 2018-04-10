<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ff804ee1f59aa8cb5de628266e9935dc071259a9cd12296413aa104edfb49f82 extends Twig_Template
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
        $__internal_646369de3be74df8997d5a3bbe411780cae590ada5c9e536935d050496d5030f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646369de3be74df8997d5a3bbe411780cae590ada5c9e536935d050496d5030f->enter($__internal_646369de3be74df8997d5a3bbe411780cae590ada5c9e536935d050496d5030f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2ae0b45d8fa2e0388684918b08ae3945b676d9f5749b2bc918754bcaffbd6422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae0b45d8fa2e0388684918b08ae3945b676d9f5749b2bc918754bcaffbd6422->enter($__internal_2ae0b45d8fa2e0388684918b08ae3945b676d9f5749b2bc918754bcaffbd6422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_646369de3be74df8997d5a3bbe411780cae590ada5c9e536935d050496d5030f->leave($__internal_646369de3be74df8997d5a3bbe411780cae590ada5c9e536935d050496d5030f_prof);

        
        $__internal_2ae0b45d8fa2e0388684918b08ae3945b676d9f5749b2bc918754bcaffbd6422->leave($__internal_2ae0b45d8fa2e0388684918b08ae3945b676d9f5749b2bc918754bcaffbd6422_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
