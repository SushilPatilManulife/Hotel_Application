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
        $__internal_232741c1cff06305b7e48e0264917b09de098753d0a3970ebd168c9b07a2b053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232741c1cff06305b7e48e0264917b09de098753d0a3970ebd168c9b07a2b053->enter($__internal_232741c1cff06305b7e48e0264917b09de098753d0a3970ebd168c9b07a2b053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_778c521f64c5371cf751af4eda5074726416ecb63773b52232329fee3c3b2890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778c521f64c5371cf751af4eda5074726416ecb63773b52232329fee3c3b2890->enter($__internal_778c521f64c5371cf751af4eda5074726416ecb63773b52232329fee3c3b2890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_232741c1cff06305b7e48e0264917b09de098753d0a3970ebd168c9b07a2b053->leave($__internal_232741c1cff06305b7e48e0264917b09de098753d0a3970ebd168c9b07a2b053_prof);

        
        $__internal_778c521f64c5371cf751af4eda5074726416ecb63773b52232329fee3c3b2890->leave($__internal_778c521f64c5371cf751af4eda5074726416ecb63773b52232329fee3c3b2890_prof);

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
