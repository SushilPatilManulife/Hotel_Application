<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9bb8697cd97b2a074db35f3e5f95ecd0ea59134ba88babab37440978aa446dc0 extends Twig_Template
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
        $__internal_e3cf8a6174bb62a8ca6b2562ec28cf015ef9e753d5972c4fb8ba37a315a02846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cf8a6174bb62a8ca6b2562ec28cf015ef9e753d5972c4fb8ba37a315a02846->enter($__internal_e3cf8a6174bb62a8ca6b2562ec28cf015ef9e753d5972c4fb8ba37a315a02846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ef53b1504532d06c73d93dfe0b29788611f6dd97130e506bb1723e04f10e761d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef53b1504532d06c73d93dfe0b29788611f6dd97130e506bb1723e04f10e761d->enter($__internal_ef53b1504532d06c73d93dfe0b29788611f6dd97130e506bb1723e04f10e761d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e3cf8a6174bb62a8ca6b2562ec28cf015ef9e753d5972c4fb8ba37a315a02846->leave($__internal_e3cf8a6174bb62a8ca6b2562ec28cf015ef9e753d5972c4fb8ba37a315a02846_prof);

        
        $__internal_ef53b1504532d06c73d93dfe0b29788611f6dd97130e506bb1723e04f10e761d->leave($__internal_ef53b1504532d06c73d93dfe0b29788611f6dd97130e506bb1723e04f10e761d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
