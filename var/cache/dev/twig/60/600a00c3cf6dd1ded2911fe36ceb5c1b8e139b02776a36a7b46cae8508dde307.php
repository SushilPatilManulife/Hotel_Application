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
        $__internal_4039ed4e636bce7becc3e9e127d6128e97f285937ac9bcd30b2947dfedb5b4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4039ed4e636bce7becc3e9e127d6128e97f285937ac9bcd30b2947dfedb5b4a4->enter($__internal_4039ed4e636bce7becc3e9e127d6128e97f285937ac9bcd30b2947dfedb5b4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2599b1b2a73748e5037c2a66e895056d09a4c0c76b481a3f42894939744eaa9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2599b1b2a73748e5037c2a66e895056d09a4c0c76b481a3f42894939744eaa9a->enter($__internal_2599b1b2a73748e5037c2a66e895056d09a4c0c76b481a3f42894939744eaa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4039ed4e636bce7becc3e9e127d6128e97f285937ac9bcd30b2947dfedb5b4a4->leave($__internal_4039ed4e636bce7becc3e9e127d6128e97f285937ac9bcd30b2947dfedb5b4a4_prof);

        
        $__internal_2599b1b2a73748e5037c2a66e895056d09a4c0c76b481a3f42894939744eaa9a->leave($__internal_2599b1b2a73748e5037c2a66e895056d09a4c0c76b481a3f42894939744eaa9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6acb4bd3fb5e612ca3fc3a725bced45147d7fdd32ca80792d2eac692da55c3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acb4bd3fb5e612ca3fc3a725bced45147d7fdd32ca80792d2eac692da55c3ef->enter($__internal_6acb4bd3fb5e612ca3fc3a725bced45147d7fdd32ca80792d2eac692da55c3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_59fa7df8620337a50db42236f41a47bfec9ca3ac5cd0620071bfc418df250e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fa7df8620337a50db42236f41a47bfec9ca3ac5cd0620071bfc418df250e36->enter($__internal_59fa7df8620337a50db42236f41a47bfec9ca3ac5cd0620071bfc418df250e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_59fa7df8620337a50db42236f41a47bfec9ca3ac5cd0620071bfc418df250e36->leave($__internal_59fa7df8620337a50db42236f41a47bfec9ca3ac5cd0620071bfc418df250e36_prof);

        
        $__internal_6acb4bd3fb5e612ca3fc3a725bced45147d7fdd32ca80792d2eac692da55c3ef->leave($__internal_6acb4bd3fb5e612ca3fc3a725bced45147d7fdd32ca80792d2eac692da55c3ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9064e2de2117ba69dbe87d62923aab53b39465dd33a5159d6fea78a734423a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9064e2de2117ba69dbe87d62923aab53b39465dd33a5159d6fea78a734423a84->enter($__internal_9064e2de2117ba69dbe87d62923aab53b39465dd33a5159d6fea78a734423a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5538b01b4f17774383e646217292216c1336517b4a1fdb3adb6284efd43096fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5538b01b4f17774383e646217292216c1336517b4a1fdb3adb6284efd43096fd->enter($__internal_5538b01b4f17774383e646217292216c1336517b4a1fdb3adb6284efd43096fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5538b01b4f17774383e646217292216c1336517b4a1fdb3adb6284efd43096fd->leave($__internal_5538b01b4f17774383e646217292216c1336517b4a1fdb3adb6284efd43096fd_prof);

        
        $__internal_9064e2de2117ba69dbe87d62923aab53b39465dd33a5159d6fea78a734423a84->leave($__internal_9064e2de2117ba69dbe87d62923aab53b39465dd33a5159d6fea78a734423a84_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f05389b3e23a8b004e77fd197dfaac21a076384de9ad2aecc957d541a481942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f05389b3e23a8b004e77fd197dfaac21a076384de9ad2aecc957d541a481942->enter($__internal_8f05389b3e23a8b004e77fd197dfaac21a076384de9ad2aecc957d541a481942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfb16ae64e0670788df4e37b63f2416426da57c5ee096932c95d6ed51f50e7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb16ae64e0670788df4e37b63f2416426da57c5ee096932c95d6ed51f50e7f7->enter($__internal_cfb16ae64e0670788df4e37b63f2416426da57c5ee096932c95d6ed51f50e7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cfb16ae64e0670788df4e37b63f2416426da57c5ee096932c95d6ed51f50e7f7->leave($__internal_cfb16ae64e0670788df4e37b63f2416426da57c5ee096932c95d6ed51f50e7f7_prof);

        
        $__internal_8f05389b3e23a8b004e77fd197dfaac21a076384de9ad2aecc957d541a481942->leave($__internal_8f05389b3e23a8b004e77fd197dfaac21a076384de9ad2aecc957d541a481942_prof);

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
