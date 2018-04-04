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
        $__internal_4d53eb972d2e6bf23e5af6593668bd01c03b1027b05a75c9f7768ba6bac52435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d53eb972d2e6bf23e5af6593668bd01c03b1027b05a75c9f7768ba6bac52435->enter($__internal_4d53eb972d2e6bf23e5af6593668bd01c03b1027b05a75c9f7768ba6bac52435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_cbe551af2e2a67b7fa1fb62e090e94302ad738b4f055dfced3130079ab189c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe551af2e2a67b7fa1fb62e090e94302ad738b4f055dfced3130079ab189c95->enter($__internal_cbe551af2e2a67b7fa1fb62e090e94302ad738b4f055dfced3130079ab189c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4d53eb972d2e6bf23e5af6593668bd01c03b1027b05a75c9f7768ba6bac52435->leave($__internal_4d53eb972d2e6bf23e5af6593668bd01c03b1027b05a75c9f7768ba6bac52435_prof);

        
        $__internal_cbe551af2e2a67b7fa1fb62e090e94302ad738b4f055dfced3130079ab189c95->leave($__internal_cbe551af2e2a67b7fa1fb62e090e94302ad738b4f055dfced3130079ab189c95_prof);

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
