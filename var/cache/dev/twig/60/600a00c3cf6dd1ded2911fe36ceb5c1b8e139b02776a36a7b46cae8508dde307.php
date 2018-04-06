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
        $__internal_c51bfa610b681a899d66aa2a357d97af27061cac3eea0c35797f4f519bb2cde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51bfa610b681a899d66aa2a357d97af27061cac3eea0c35797f4f519bb2cde5->enter($__internal_c51bfa610b681a899d66aa2a357d97af27061cac3eea0c35797f4f519bb2cde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_434a0d6e88c1b015eafea86af7de5d816a466919584a369d6aba1785bfe8d5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434a0d6e88c1b015eafea86af7de5d816a466919584a369d6aba1785bfe8d5da->enter($__internal_434a0d6e88c1b015eafea86af7de5d816a466919584a369d6aba1785bfe8d5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c51bfa610b681a899d66aa2a357d97af27061cac3eea0c35797f4f519bb2cde5->leave($__internal_c51bfa610b681a899d66aa2a357d97af27061cac3eea0c35797f4f519bb2cde5_prof);

        
        $__internal_434a0d6e88c1b015eafea86af7de5d816a466919584a369d6aba1785bfe8d5da->leave($__internal_434a0d6e88c1b015eafea86af7de5d816a466919584a369d6aba1785bfe8d5da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cb0d096eba767f3e0a5a3eeb3b04044006e43ca2a922bb4d00cd7f4663854fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb0d096eba767f3e0a5a3eeb3b04044006e43ca2a922bb4d00cd7f4663854fe->enter($__internal_6cb0d096eba767f3e0a5a3eeb3b04044006e43ca2a922bb4d00cd7f4663854fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce51dc33378e16b2ad7efcbb97c3e5990ea5efd1b0d7ae99a23a168bd8b3a835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce51dc33378e16b2ad7efcbb97c3e5990ea5efd1b0d7ae99a23a168bd8b3a835->enter($__internal_ce51dc33378e16b2ad7efcbb97c3e5990ea5efd1b0d7ae99a23a168bd8b3a835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ce51dc33378e16b2ad7efcbb97c3e5990ea5efd1b0d7ae99a23a168bd8b3a835->leave($__internal_ce51dc33378e16b2ad7efcbb97c3e5990ea5efd1b0d7ae99a23a168bd8b3a835_prof);

        
        $__internal_6cb0d096eba767f3e0a5a3eeb3b04044006e43ca2a922bb4d00cd7f4663854fe->leave($__internal_6cb0d096eba767f3e0a5a3eeb3b04044006e43ca2a922bb4d00cd7f4663854fe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5dad75e2c7bc502af0b615ce99ddc63ff2d2f047dd53114c1c44d702aab44a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dad75e2c7bc502af0b615ce99ddc63ff2d2f047dd53114c1c44d702aab44a05->enter($__internal_5dad75e2c7bc502af0b615ce99ddc63ff2d2f047dd53114c1c44d702aab44a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47e8fc645be603aa3b5e25d24eed9c48693fc1d1c29ad346e12d4eb74e1710d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e8fc645be603aa3b5e25d24eed9c48693fc1d1c29ad346e12d4eb74e1710d7->enter($__internal_47e8fc645be603aa3b5e25d24eed9c48693fc1d1c29ad346e12d4eb74e1710d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_47e8fc645be603aa3b5e25d24eed9c48693fc1d1c29ad346e12d4eb74e1710d7->leave($__internal_47e8fc645be603aa3b5e25d24eed9c48693fc1d1c29ad346e12d4eb74e1710d7_prof);

        
        $__internal_5dad75e2c7bc502af0b615ce99ddc63ff2d2f047dd53114c1c44d702aab44a05->leave($__internal_5dad75e2c7bc502af0b615ce99ddc63ff2d2f047dd53114c1c44d702aab44a05_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20599918838a251c439e3746c9e3f3a8f75bd2a732ce692e2a394248dd7673a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20599918838a251c439e3746c9e3f3a8f75bd2a732ce692e2a394248dd7673a8->enter($__internal_20599918838a251c439e3746c9e3f3a8f75bd2a732ce692e2a394248dd7673a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f467d1c4617fae7f0de5057aab2a3fd38cc79166d0bf46a8db012b376c15cf84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f467d1c4617fae7f0de5057aab2a3fd38cc79166d0bf46a8db012b376c15cf84->enter($__internal_f467d1c4617fae7f0de5057aab2a3fd38cc79166d0bf46a8db012b376c15cf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f467d1c4617fae7f0de5057aab2a3fd38cc79166d0bf46a8db012b376c15cf84->leave($__internal_f467d1c4617fae7f0de5057aab2a3fd38cc79166d0bf46a8db012b376c15cf84_prof);

        
        $__internal_20599918838a251c439e3746c9e3f3a8f75bd2a732ce692e2a394248dd7673a8->leave($__internal_20599918838a251c439e3746c9e3f3a8f75bd2a732ce692e2a394248dd7673a8_prof);

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
