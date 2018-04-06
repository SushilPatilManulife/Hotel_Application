<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_593c59a9d3475c7c69ee73389518fefc7612ea5c552d8dd79e9b828f394ba6fa extends Twig_Template
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
        $__internal_00a64d90327e20750a66bcb4c11c5f86cb57cdca5637f169ff66d3ee3921b063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a64d90327e20750a66bcb4c11c5f86cb57cdca5637f169ff66d3ee3921b063->enter($__internal_00a64d90327e20750a66bcb4c11c5f86cb57cdca5637f169ff66d3ee3921b063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1d7eeda91bd237c3f46ae159e67b65b12b7280383f5b8d0dfb912f517f734790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7eeda91bd237c3f46ae159e67b65b12b7280383f5b8d0dfb912f517f734790->enter($__internal_1d7eeda91bd237c3f46ae159e67b65b12b7280383f5b8d0dfb912f517f734790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_00a64d90327e20750a66bcb4c11c5f86cb57cdca5637f169ff66d3ee3921b063->leave($__internal_00a64d90327e20750a66bcb4c11c5f86cb57cdca5637f169ff66d3ee3921b063_prof);

        
        $__internal_1d7eeda91bd237c3f46ae159e67b65b12b7280383f5b8d0dfb912f517f734790->leave($__internal_1d7eeda91bd237c3f46ae159e67b65b12b7280383f5b8d0dfb912f517f734790_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
