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
        $__internal_3f22065a818703679a48ace0e31e600a64b1880e8a02333736d078f894e237b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f22065a818703679a48ace0e31e600a64b1880e8a02333736d078f894e237b8->enter($__internal_3f22065a818703679a48ace0e31e600a64b1880e8a02333736d078f894e237b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_89041a1111c7f86f7e2565054cd0af5849b751b65075b7230b4cc4e374efa72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89041a1111c7f86f7e2565054cd0af5849b751b65075b7230b4cc4e374efa72b->enter($__internal_89041a1111c7f86f7e2565054cd0af5849b751b65075b7230b4cc4e374efa72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3f22065a818703679a48ace0e31e600a64b1880e8a02333736d078f894e237b8->leave($__internal_3f22065a818703679a48ace0e31e600a64b1880e8a02333736d078f894e237b8_prof);

        
        $__internal_89041a1111c7f86f7e2565054cd0af5849b751b65075b7230b4cc4e374efa72b->leave($__internal_89041a1111c7f86f7e2565054cd0af5849b751b65075b7230b4cc4e374efa72b_prof);

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
