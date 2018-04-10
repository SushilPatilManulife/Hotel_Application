<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_5af08da7d73fde135ee0331fa8adf6aa62c5e2757e800b39009cf5bb0c59ab0f extends Twig_Template
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
        $__internal_9b8e046faa026e2739aa53a6f37807b8a1d1d62e1c6e8bf52389720038cac52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8e046faa026e2739aa53a6f37807b8a1d1d62e1c6e8bf52389720038cac52b->enter($__internal_9b8e046faa026e2739aa53a6f37807b8a1d1d62e1c6e8bf52389720038cac52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_83c25bf66a3bffd2e3a2651307d1336974f4d2cf7ee2f71d25b74aa60f3ec1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c25bf66a3bffd2e3a2651307d1336974f4d2cf7ee2f71d25b74aa60f3ec1e7->enter($__internal_83c25bf66a3bffd2e3a2651307d1336974f4d2cf7ee2f71d25b74aa60f3ec1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9b8e046faa026e2739aa53a6f37807b8a1d1d62e1c6e8bf52389720038cac52b->leave($__internal_9b8e046faa026e2739aa53a6f37807b8a1d1d62e1c6e8bf52389720038cac52b_prof);

        
        $__internal_83c25bf66a3bffd2e3a2651307d1336974f4d2cf7ee2f71d25b74aa60f3ec1e7->leave($__internal_83c25bf66a3bffd2e3a2651307d1336974f4d2cf7ee2f71d25b74aa60f3ec1e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
