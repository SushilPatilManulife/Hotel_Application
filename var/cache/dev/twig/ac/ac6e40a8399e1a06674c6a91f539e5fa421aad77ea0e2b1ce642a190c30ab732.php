<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a4ed5c1dd93f32de86ec215b91aacb7225a0d163b1c8f18254f588827efcf8b2 extends Twig_Template
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
        $__internal_7abdeb9b2718c7130c02fdb75f677e9a5ab64408c47ae56be294edc838b9a254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abdeb9b2718c7130c02fdb75f677e9a5ab64408c47ae56be294edc838b9a254->enter($__internal_7abdeb9b2718c7130c02fdb75f677e9a5ab64408c47ae56be294edc838b9a254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_ac23b826d51635de2d7756ce12f045317c543409f376078112e317cef7c9a8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac23b826d51635de2d7756ce12f045317c543409f376078112e317cef7c9a8ed->enter($__internal_ac23b826d51635de2d7756ce12f045317c543409f376078112e317cef7c9a8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7abdeb9b2718c7130c02fdb75f677e9a5ab64408c47ae56be294edc838b9a254->leave($__internal_7abdeb9b2718c7130c02fdb75f677e9a5ab64408c47ae56be294edc838b9a254_prof);

        
        $__internal_ac23b826d51635de2d7756ce12f045317c543409f376078112e317cef7c9a8ed->leave($__internal_ac23b826d51635de2d7756ce12f045317c543409f376078112e317cef7c9a8ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
