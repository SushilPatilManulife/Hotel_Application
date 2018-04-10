<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d45a8cd732f15b2daafc2ea9e39094917051ae6c61095a97845f89cf425c2757 extends Twig_Template
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
        $__internal_396f5675134754163c9e45486e1adc82a1be3e87c07b273b15ce190bed7dd629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396f5675134754163c9e45486e1adc82a1be3e87c07b273b15ce190bed7dd629->enter($__internal_396f5675134754163c9e45486e1adc82a1be3e87c07b273b15ce190bed7dd629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_7188586ae707bc269f9793b12459c124f65a3e00f9a79e81fda742a03feb0a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7188586ae707bc269f9793b12459c124f65a3e00f9a79e81fda742a03feb0a21->enter($__internal_7188586ae707bc269f9793b12459c124f65a3e00f9a79e81fda742a03feb0a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_396f5675134754163c9e45486e1adc82a1be3e87c07b273b15ce190bed7dd629->leave($__internal_396f5675134754163c9e45486e1adc82a1be3e87c07b273b15ce190bed7dd629_prof);

        
        $__internal_7188586ae707bc269f9793b12459c124f65a3e00f9a79e81fda742a03feb0a21->leave($__internal_7188586ae707bc269f9793b12459c124f65a3e00f9a79e81fda742a03feb0a21_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
