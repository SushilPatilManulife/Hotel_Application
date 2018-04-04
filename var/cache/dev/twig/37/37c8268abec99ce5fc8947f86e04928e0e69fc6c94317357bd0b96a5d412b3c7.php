<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10af3e8dfb849655d5659a8116e20e1b3c95f3f1eec3d1c21fe079b5a54e3e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_357220e413ba34867607d5bdf2487d3300a4ef51ee60451ef016893563e69205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357220e413ba34867607d5bdf2487d3300a4ef51ee60451ef016893563e69205->enter($__internal_357220e413ba34867607d5bdf2487d3300a4ef51ee60451ef016893563e69205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2a6a7230a0129a796d05d0fd90837da1c37bcf9beab1cc74c8c0666e7debb6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6a7230a0129a796d05d0fd90837da1c37bcf9beab1cc74c8c0666e7debb6af->enter($__internal_2a6a7230a0129a796d05d0fd90837da1c37bcf9beab1cc74c8c0666e7debb6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_357220e413ba34867607d5bdf2487d3300a4ef51ee60451ef016893563e69205->leave($__internal_357220e413ba34867607d5bdf2487d3300a4ef51ee60451ef016893563e69205_prof);

        
        $__internal_2a6a7230a0129a796d05d0fd90837da1c37bcf9beab1cc74c8c0666e7debb6af->leave($__internal_2a6a7230a0129a796d05d0fd90837da1c37bcf9beab1cc74c8c0666e7debb6af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec89f0a6442fbd7f4e45ec650a4a1edf0302468f51cb8b53f62e39ea03aebe0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec89f0a6442fbd7f4e45ec650a4a1edf0302468f51cb8b53f62e39ea03aebe0b->enter($__internal_ec89f0a6442fbd7f4e45ec650a4a1edf0302468f51cb8b53f62e39ea03aebe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58c1296fe4cfc26fe5542066bb93c883f0e9527032c7a7c72ff4f4655261e957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c1296fe4cfc26fe5542066bb93c883f0e9527032c7a7c72ff4f4655261e957->enter($__internal_58c1296fe4cfc26fe5542066bb93c883f0e9527032c7a7c72ff4f4655261e957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58c1296fe4cfc26fe5542066bb93c883f0e9527032c7a7c72ff4f4655261e957->leave($__internal_58c1296fe4cfc26fe5542066bb93c883f0e9527032c7a7c72ff4f4655261e957_prof);

        
        $__internal_ec89f0a6442fbd7f4e45ec650a4a1edf0302468f51cb8b53f62e39ea03aebe0b->leave($__internal_ec89f0a6442fbd7f4e45ec650a4a1edf0302468f51cb8b53f62e39ea03aebe0b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bd4b67c17c86443b1f1f8c8de67f5605e29a1eaef6ebd038c6d1eaef4995742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd4b67c17c86443b1f1f8c8de67f5605e29a1eaef6ebd038c6d1eaef4995742->enter($__internal_7bd4b67c17c86443b1f1f8c8de67f5605e29a1eaef6ebd038c6d1eaef4995742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0cb4d3c941f8c85460b6ab0a9c95d8ec9a44fb7d16f5dae1cbb4b0037135a1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb4d3c941f8c85460b6ab0a9c95d8ec9a44fb7d16f5dae1cbb4b0037135a1fb->enter($__internal_0cb4d3c941f8c85460b6ab0a9c95d8ec9a44fb7d16f5dae1cbb4b0037135a1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cb4d3c941f8c85460b6ab0a9c95d8ec9a44fb7d16f5dae1cbb4b0037135a1fb->leave($__internal_0cb4d3c941f8c85460b6ab0a9c95d8ec9a44fb7d16f5dae1cbb4b0037135a1fb_prof);

        
        $__internal_7bd4b67c17c86443b1f1f8c8de67f5605e29a1eaef6ebd038c6d1eaef4995742->leave($__internal_7bd4b67c17c86443b1f1f8c8de67f5605e29a1eaef6ebd038c6d1eaef4995742_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c4a759eae16732cc59d78665c2b36af2218c3faf2c59e551180b8aac815ff3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4a759eae16732cc59d78665c2b36af2218c3faf2c59e551180b8aac815ff3f->enter($__internal_1c4a759eae16732cc59d78665c2b36af2218c3faf2c59e551180b8aac815ff3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef53f1dd3b3cc9639cd36d5b0f590c747f3e99276d8b6360d0920644c4726cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef53f1dd3b3cc9639cd36d5b0f590c747f3e99276d8b6360d0920644c4726cf9->enter($__internal_ef53f1dd3b3cc9639cd36d5b0f590c747f3e99276d8b6360d0920644c4726cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef53f1dd3b3cc9639cd36d5b0f590c747f3e99276d8b6360d0920644c4726cf9->leave($__internal_ef53f1dd3b3cc9639cd36d5b0f590c747f3e99276d8b6360d0920644c4726cf9_prof);

        
        $__internal_1c4a759eae16732cc59d78665c2b36af2218c3faf2c59e551180b8aac815ff3f->leave($__internal_1c4a759eae16732cc59d78665c2b36af2218c3faf2c59e551180b8aac815ff3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
