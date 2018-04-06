<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_086e28e525053bc9243d5390d75067602d0e6e32047cb59d3010d05fe9437d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_0caf460bf2745d916b215e8b71b3b9fba31aadf95b186dc0807b007a32d2d8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0caf460bf2745d916b215e8b71b3b9fba31aadf95b186dc0807b007a32d2d8e5->enter($__internal_0caf460bf2745d916b215e8b71b3b9fba31aadf95b186dc0807b007a32d2d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_74bb8372ce8d28077359986d215c843293f896847a18ad51c0fcfcac06f7d322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bb8372ce8d28077359986d215c843293f896847a18ad51c0fcfcac06f7d322->enter($__internal_74bb8372ce8d28077359986d215c843293f896847a18ad51c0fcfcac06f7d322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0caf460bf2745d916b215e8b71b3b9fba31aadf95b186dc0807b007a32d2d8e5->leave($__internal_0caf460bf2745d916b215e8b71b3b9fba31aadf95b186dc0807b007a32d2d8e5_prof);

        
        $__internal_74bb8372ce8d28077359986d215c843293f896847a18ad51c0fcfcac06f7d322->leave($__internal_74bb8372ce8d28077359986d215c843293f896847a18ad51c0fcfcac06f7d322_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38db0ca36d0f14f454eef689f573b3afb25b0dd4cdbbcf9790669e0ff04070e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38db0ca36d0f14f454eef689f573b3afb25b0dd4cdbbcf9790669e0ff04070e4->enter($__internal_38db0ca36d0f14f454eef689f573b3afb25b0dd4cdbbcf9790669e0ff04070e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_348bf8cce0aacdb06b89576414ea69214b78ba8b91ec8993d636e74cf6e8b151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348bf8cce0aacdb06b89576414ea69214b78ba8b91ec8993d636e74cf6e8b151->enter($__internal_348bf8cce0aacdb06b89576414ea69214b78ba8b91ec8993d636e74cf6e8b151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_348bf8cce0aacdb06b89576414ea69214b78ba8b91ec8993d636e74cf6e8b151->leave($__internal_348bf8cce0aacdb06b89576414ea69214b78ba8b91ec8993d636e74cf6e8b151_prof);

        
        $__internal_38db0ca36d0f14f454eef689f573b3afb25b0dd4cdbbcf9790669e0ff04070e4->leave($__internal_38db0ca36d0f14f454eef689f573b3afb25b0dd4cdbbcf9790669e0ff04070e4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48da09de2d469846228b5b48ae0b857bf0d5d6bb166bb0850c64598b084471c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48da09de2d469846228b5b48ae0b857bf0d5d6bb166bb0850c64598b084471c3->enter($__internal_48da09de2d469846228b5b48ae0b857bf0d5d6bb166bb0850c64598b084471c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4519821ea7f006fb0a230371c8909f7682e0788dc97f7017b9f6451b9fb3d4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4519821ea7f006fb0a230371c8909f7682e0788dc97f7017b9f6451b9fb3d4dd->enter($__internal_4519821ea7f006fb0a230371c8909f7682e0788dc97f7017b9f6451b9fb3d4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4519821ea7f006fb0a230371c8909f7682e0788dc97f7017b9f6451b9fb3d4dd->leave($__internal_4519821ea7f006fb0a230371c8909f7682e0788dc97f7017b9f6451b9fb3d4dd_prof);

        
        $__internal_48da09de2d469846228b5b48ae0b857bf0d5d6bb166bb0850c64598b084471c3->leave($__internal_48da09de2d469846228b5b48ae0b857bf0d5d6bb166bb0850c64598b084471c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91c8e1f92c71e0e63c0c8c6ae27fa38dfa202ebdc5ab7b68af19e1bd23097cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c8e1f92c71e0e63c0c8c6ae27fa38dfa202ebdc5ab7b68af19e1bd23097cd1->enter($__internal_91c8e1f92c71e0e63c0c8c6ae27fa38dfa202ebdc5ab7b68af19e1bd23097cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c91bc6d919e30432fbdb6a0ba4cb876e94244ec6ee0341abb317ca6bb35d948c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91bc6d919e30432fbdb6a0ba4cb876e94244ec6ee0341abb317ca6bb35d948c->enter($__internal_c91bc6d919e30432fbdb6a0ba4cb876e94244ec6ee0341abb317ca6bb35d948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c91bc6d919e30432fbdb6a0ba4cb876e94244ec6ee0341abb317ca6bb35d948c->leave($__internal_c91bc6d919e30432fbdb6a0ba4cb876e94244ec6ee0341abb317ca6bb35d948c_prof);

        
        $__internal_91c8e1f92c71e0e63c0c8c6ae27fa38dfa202ebdc5ab7b68af19e1bd23097cd1->leave($__internal_91c8e1f92c71e0e63c0c8c6ae27fa38dfa202ebdc5ab7b68af19e1bd23097cd1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
