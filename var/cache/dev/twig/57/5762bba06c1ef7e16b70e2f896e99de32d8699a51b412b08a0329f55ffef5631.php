<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_47e6449fa531eec7caf6a00904f2b0a99b64ef38972347cc9cd79cb27e2953cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_f8967b2a93cb04cc2a7c694c910ed7f1dc4669761822bad03c5cb53953d34fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8967b2a93cb04cc2a7c694c910ed7f1dc4669761822bad03c5cb53953d34fa1->enter($__internal_f8967b2a93cb04cc2a7c694c910ed7f1dc4669761822bad03c5cb53953d34fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6ec4108bc304bbf767cebbaba1f3599eb2c93c41b82125d9540e27e80528da0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec4108bc304bbf767cebbaba1f3599eb2c93c41b82125d9540e27e80528da0a->enter($__internal_6ec4108bc304bbf767cebbaba1f3599eb2c93c41b82125d9540e27e80528da0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8967b2a93cb04cc2a7c694c910ed7f1dc4669761822bad03c5cb53953d34fa1->leave($__internal_f8967b2a93cb04cc2a7c694c910ed7f1dc4669761822bad03c5cb53953d34fa1_prof);

        
        $__internal_6ec4108bc304bbf767cebbaba1f3599eb2c93c41b82125d9540e27e80528da0a->leave($__internal_6ec4108bc304bbf767cebbaba1f3599eb2c93c41b82125d9540e27e80528da0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5b8301660f44f42f398787df667cab2c41d26e61c4d16864d393a06f9fcc12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b8301660f44f42f398787df667cab2c41d26e61c4d16864d393a06f9fcc12f->enter($__internal_b5b8301660f44f42f398787df667cab2c41d26e61c4d16864d393a06f9fcc12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d17c8d633c399461a90db7b65e5f3054deca2b0bfb8464102782fdb111570ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d17c8d633c399461a90db7b65e5f3054deca2b0bfb8464102782fdb111570ba->enter($__internal_9d17c8d633c399461a90db7b65e5f3054deca2b0bfb8464102782fdb111570ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9d17c8d633c399461a90db7b65e5f3054deca2b0bfb8464102782fdb111570ba->leave($__internal_9d17c8d633c399461a90db7b65e5f3054deca2b0bfb8464102782fdb111570ba_prof);

        
        $__internal_b5b8301660f44f42f398787df667cab2c41d26e61c4d16864d393a06f9fcc12f->leave($__internal_b5b8301660f44f42f398787df667cab2c41d26e61c4d16864d393a06f9fcc12f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
