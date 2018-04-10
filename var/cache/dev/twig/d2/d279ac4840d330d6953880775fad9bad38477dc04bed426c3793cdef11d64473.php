<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c3b4d60b6d243754341faed43ad16c6a25bc19b18d75acbf9ccbe1f79bf37356 extends Twig_Template
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
        $__internal_344bdaa4bc79d7f28ff0ac2f5e1544c2281d9f17446ef29dcc1c9382eba5b981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344bdaa4bc79d7f28ff0ac2f5e1544c2281d9f17446ef29dcc1c9382eba5b981->enter($__internal_344bdaa4bc79d7f28ff0ac2f5e1544c2281d9f17446ef29dcc1c9382eba5b981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_cf584edc18d945928d0b6f9aaa4c29b2a6243cbb1a811168412a494c676dc208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf584edc18d945928d0b6f9aaa4c29b2a6243cbb1a811168412a494c676dc208->enter($__internal_cf584edc18d945928d0b6f9aaa4c29b2a6243cbb1a811168412a494c676dc208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_344bdaa4bc79d7f28ff0ac2f5e1544c2281d9f17446ef29dcc1c9382eba5b981->leave($__internal_344bdaa4bc79d7f28ff0ac2f5e1544c2281d9f17446ef29dcc1c9382eba5b981_prof);

        
        $__internal_cf584edc18d945928d0b6f9aaa4c29b2a6243cbb1a811168412a494c676dc208->leave($__internal_cf584edc18d945928d0b6f9aaa4c29b2a6243cbb1a811168412a494c676dc208_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
