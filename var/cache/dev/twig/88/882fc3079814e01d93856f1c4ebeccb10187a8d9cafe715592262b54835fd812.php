<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_46e7f47eab00ff1f202ef6819f44261259ca9bcda702291bffcbcea27e745c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df9911c2b7519d2586d35fd855752564a3a3e9674790f4a7804b1b45a2de6a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9911c2b7519d2586d35fd855752564a3a3e9674790f4a7804b1b45a2de6a0d->enter($__internal_df9911c2b7519d2586d35fd855752564a3a3e9674790f4a7804b1b45a2de6a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1e5c631c990e77ce78917cd7f49d3a2a04d98c596f91f1a5b59fce38b2d51d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5c631c990e77ce78917cd7f49d3a2a04d98c596f91f1a5b59fce38b2d51d53->enter($__internal_1e5c631c990e77ce78917cd7f49d3a2a04d98c596f91f1a5b59fce38b2d51d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df9911c2b7519d2586d35fd855752564a3a3e9674790f4a7804b1b45a2de6a0d->leave($__internal_df9911c2b7519d2586d35fd855752564a3a3e9674790f4a7804b1b45a2de6a0d_prof);

        
        $__internal_1e5c631c990e77ce78917cd7f49d3a2a04d98c596f91f1a5b59fce38b2d51d53->leave($__internal_1e5c631c990e77ce78917cd7f49d3a2a04d98c596f91f1a5b59fce38b2d51d53_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a6dae42a16a1bb0f6e895f84907e401c06c6e192ea20029558034719a133dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6dae42a16a1bb0f6e895f84907e401c06c6e192ea20029558034719a133dcf->enter($__internal_8a6dae42a16a1bb0f6e895f84907e401c06c6e192ea20029558034719a133dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a88823d1c44f9126feed5bd362cb8d7ef5b7132cbc91e62dcff6b6292c845c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88823d1c44f9126feed5bd362cb8d7ef5b7132cbc91e62dcff6b6292c845c73->enter($__internal_a88823d1c44f9126feed5bd362cb8d7ef5b7132cbc91e62dcff6b6292c845c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a88823d1c44f9126feed5bd362cb8d7ef5b7132cbc91e62dcff6b6292c845c73->leave($__internal_a88823d1c44f9126feed5bd362cb8d7ef5b7132cbc91e62dcff6b6292c845c73_prof);

        
        $__internal_8a6dae42a16a1bb0f6e895f84907e401c06c6e192ea20029558034719a133dcf->leave($__internal_8a6dae42a16a1bb0f6e895f84907e401c06c6e192ea20029558034719a133dcf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
