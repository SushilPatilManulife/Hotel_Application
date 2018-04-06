<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0b06d401e79df4548ee4a3338669e644b9f12fc1cf08e4ab210e156e1245cf66 extends Twig_Template
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
        $__internal_7642ebceadae1d838600fb6d1b189ef8322614c5bda455d2e812640ff37463b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7642ebceadae1d838600fb6d1b189ef8322614c5bda455d2e812640ff37463b3->enter($__internal_7642ebceadae1d838600fb6d1b189ef8322614c5bda455d2e812640ff37463b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5f862323682b903c72222cae37cc6f13cd86360d38ab4569422c99d3b503ff68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f862323682b903c72222cae37cc6f13cd86360d38ab4569422c99d3b503ff68->enter($__internal_5f862323682b903c72222cae37cc6f13cd86360d38ab4569422c99d3b503ff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7642ebceadae1d838600fb6d1b189ef8322614c5bda455d2e812640ff37463b3->leave($__internal_7642ebceadae1d838600fb6d1b189ef8322614c5bda455d2e812640ff37463b3_prof);

        
        $__internal_5f862323682b903c72222cae37cc6f13cd86360d38ab4569422c99d3b503ff68->leave($__internal_5f862323682b903c72222cae37cc6f13cd86360d38ab4569422c99d3b503ff68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
