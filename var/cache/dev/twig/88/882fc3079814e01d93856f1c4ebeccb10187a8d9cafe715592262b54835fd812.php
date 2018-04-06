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
        $__internal_327e9150149b69e56cd73ddde762f58334aa55af448476ac4c23bc14cb5098ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327e9150149b69e56cd73ddde762f58334aa55af448476ac4c23bc14cb5098ce->enter($__internal_327e9150149b69e56cd73ddde762f58334aa55af448476ac4c23bc14cb5098ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6eecc8fcf50006a5cafbf7fe1530023b7003abca14d5dd14e9f5c3cefa6f7311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eecc8fcf50006a5cafbf7fe1530023b7003abca14d5dd14e9f5c3cefa6f7311->enter($__internal_6eecc8fcf50006a5cafbf7fe1530023b7003abca14d5dd14e9f5c3cefa6f7311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327e9150149b69e56cd73ddde762f58334aa55af448476ac4c23bc14cb5098ce->leave($__internal_327e9150149b69e56cd73ddde762f58334aa55af448476ac4c23bc14cb5098ce_prof);

        
        $__internal_6eecc8fcf50006a5cafbf7fe1530023b7003abca14d5dd14e9f5c3cefa6f7311->leave($__internal_6eecc8fcf50006a5cafbf7fe1530023b7003abca14d5dd14e9f5c3cefa6f7311_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_572336e7231f9572a74c5cb36a805f248beff8ff84e26c86e3bb44fc6b3b51bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572336e7231f9572a74c5cb36a805f248beff8ff84e26c86e3bb44fc6b3b51bc->enter($__internal_572336e7231f9572a74c5cb36a805f248beff8ff84e26c86e3bb44fc6b3b51bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9db85c81030ff29804164321c8293910aafc1d83103e16e34694a896f9ead2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db85c81030ff29804164321c8293910aafc1d83103e16e34694a896f9ead2e9->enter($__internal_9db85c81030ff29804164321c8293910aafc1d83103e16e34694a896f9ead2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9db85c81030ff29804164321c8293910aafc1d83103e16e34694a896f9ead2e9->leave($__internal_9db85c81030ff29804164321c8293910aafc1d83103e16e34694a896f9ead2e9_prof);

        
        $__internal_572336e7231f9572a74c5cb36a805f248beff8ff84e26c86e3bb44fc6b3b51bc->leave($__internal_572336e7231f9572a74c5cb36a805f248beff8ff84e26c86e3bb44fc6b3b51bc_prof);

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
