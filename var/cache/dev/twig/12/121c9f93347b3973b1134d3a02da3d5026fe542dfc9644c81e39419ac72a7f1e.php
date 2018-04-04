<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a1c76547b3cd64bbfdceef6528c3aef8c7c333c49062de0a455abb7581ab8c65 extends Twig_Template
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
        $__internal_51a95c12c3734cd31105b80707e1e4cfc5c4aa753491afb985d19df14222b8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a95c12c3734cd31105b80707e1e4cfc5c4aa753491afb985d19df14222b8b1->enter($__internal_51a95c12c3734cd31105b80707e1e4cfc5c4aa753491afb985d19df14222b8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_fdfc2766843781e35249959a529a237708f0d977ea7942d643da13e5d05e2ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfc2766843781e35249959a529a237708f0d977ea7942d643da13e5d05e2ecf->enter($__internal_fdfc2766843781e35249959a529a237708f0d977ea7942d643da13e5d05e2ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_51a95c12c3734cd31105b80707e1e4cfc5c4aa753491afb985d19df14222b8b1->leave($__internal_51a95c12c3734cd31105b80707e1e4cfc5c4aa753491afb985d19df14222b8b1_prof);

        
        $__internal_fdfc2766843781e35249959a529a237708f0d977ea7942d643da13e5d05e2ecf->leave($__internal_fdfc2766843781e35249959a529a237708f0d977ea7942d643da13e5d05e2ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
