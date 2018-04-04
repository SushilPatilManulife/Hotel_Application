<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6b839115c7369d8dd77960fbace20ba958d3555c37a7562ddb2b722358d13fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a98e0f70a4843e36f74631d79b0abad881f517d2c35541e355bed1bc6303c89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98e0f70a4843e36f74631d79b0abad881f517d2c35541e355bed1bc6303c89b->enter($__internal_a98e0f70a4843e36f74631d79b0abad881f517d2c35541e355bed1bc6303c89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8bf0c5eaa4d51acd752ba586eb998d702645e20735ff53bd493899dff8fabcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf0c5eaa4d51acd752ba586eb998d702645e20735ff53bd493899dff8fabcaa->enter($__internal_8bf0c5eaa4d51acd752ba586eb998d702645e20735ff53bd493899dff8fabcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98e0f70a4843e36f74631d79b0abad881f517d2c35541e355bed1bc6303c89b->leave($__internal_a98e0f70a4843e36f74631d79b0abad881f517d2c35541e355bed1bc6303c89b_prof);

        
        $__internal_8bf0c5eaa4d51acd752ba586eb998d702645e20735ff53bd493899dff8fabcaa->leave($__internal_8bf0c5eaa4d51acd752ba586eb998d702645e20735ff53bd493899dff8fabcaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d89568746c1d6ca008ea5bca69a6125ccfdceb5b0eb49b0c86b911b138a9c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d89568746c1d6ca008ea5bca69a6125ccfdceb5b0eb49b0c86b911b138a9c57->enter($__internal_0d89568746c1d6ca008ea5bca69a6125ccfdceb5b0eb49b0c86b911b138a9c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c80555793930f6624fbc3292f06136eb3dc420b8f47cf549105630386f5242d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80555793930f6624fbc3292f06136eb3dc420b8f47cf549105630386f5242d1->enter($__internal_c80555793930f6624fbc3292f06136eb3dc420b8f47cf549105630386f5242d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c80555793930f6624fbc3292f06136eb3dc420b8f47cf549105630386f5242d1->leave($__internal_c80555793930f6624fbc3292f06136eb3dc420b8f47cf549105630386f5242d1_prof);

        
        $__internal_0d89568746c1d6ca008ea5bca69a6125ccfdceb5b0eb49b0c86b911b138a9c57->leave($__internal_0d89568746c1d6ca008ea5bca69a6125ccfdceb5b0eb49b0c86b911b138a9c57_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74553e72252ad912bb588b3a1f919549ad8329768b016f7c10683f09176840af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74553e72252ad912bb588b3a1f919549ad8329768b016f7c10683f09176840af->enter($__internal_74553e72252ad912bb588b3a1f919549ad8329768b016f7c10683f09176840af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb8dccf8f90df2ae56cc1460802823d3907e4f1b6f8c25a553e90c35e95b65a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8dccf8f90df2ae56cc1460802823d3907e4f1b6f8c25a553e90c35e95b65a3->enter($__internal_fb8dccf8f90df2ae56cc1460802823d3907e4f1b6f8c25a553e90c35e95b65a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fb8dccf8f90df2ae56cc1460802823d3907e4f1b6f8c25a553e90c35e95b65a3->leave($__internal_fb8dccf8f90df2ae56cc1460802823d3907e4f1b6f8c25a553e90c35e95b65a3_prof);

        
        $__internal_74553e72252ad912bb588b3a1f919549ad8329768b016f7c10683f09176840af->leave($__internal_74553e72252ad912bb588b3a1f919549ad8329768b016f7c10683f09176840af_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90b01e28a9f3e99ef3b006c2692be0ed204057f58c73c1f080b7df8e9c1f06a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b01e28a9f3e99ef3b006c2692be0ed204057f58c73c1f080b7df8e9c1f06a9->enter($__internal_90b01e28a9f3e99ef3b006c2692be0ed204057f58c73c1f080b7df8e9c1f06a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1272daa18cfbfadac21bddc6fd0b51cd0d5c42dac519b5234c1202c26ee1e08e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1272daa18cfbfadac21bddc6fd0b51cd0d5c42dac519b5234c1202c26ee1e08e->enter($__internal_1272daa18cfbfadac21bddc6fd0b51cd0d5c42dac519b5234c1202c26ee1e08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1272daa18cfbfadac21bddc6fd0b51cd0d5c42dac519b5234c1202c26ee1e08e->leave($__internal_1272daa18cfbfadac21bddc6fd0b51cd0d5c42dac519b5234c1202c26ee1e08e_prof);

        
        $__internal_90b01e28a9f3e99ef3b006c2692be0ed204057f58c73c1f080b7df8e9c1f06a9->leave($__internal_90b01e28a9f3e99ef3b006c2692be0ed204057f58c73c1f080b7df8e9c1f06a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
