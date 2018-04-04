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
        $__internal_65daaa08f82cef63abccb196e3e2c3ac6fbff4c46d89515af620700226b80de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65daaa08f82cef63abccb196e3e2c3ac6fbff4c46d89515af620700226b80de1->enter($__internal_65daaa08f82cef63abccb196e3e2c3ac6fbff4c46d89515af620700226b80de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0c05e7f02de792a9f03bbcb0e94c881326d778319dfd11a3e7bf4fe0b7dd9fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c05e7f02de792a9f03bbcb0e94c881326d778319dfd11a3e7bf4fe0b7dd9fcb->enter($__internal_0c05e7f02de792a9f03bbcb0e94c881326d778319dfd11a3e7bf4fe0b7dd9fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_65daaa08f82cef63abccb196e3e2c3ac6fbff4c46d89515af620700226b80de1->leave($__internal_65daaa08f82cef63abccb196e3e2c3ac6fbff4c46d89515af620700226b80de1_prof);

        
        $__internal_0c05e7f02de792a9f03bbcb0e94c881326d778319dfd11a3e7bf4fe0b7dd9fcb->leave($__internal_0c05e7f02de792a9f03bbcb0e94c881326d778319dfd11a3e7bf4fe0b7dd9fcb_prof);

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
