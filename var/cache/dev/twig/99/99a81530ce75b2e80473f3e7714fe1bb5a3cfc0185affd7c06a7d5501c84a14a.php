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
        $__internal_2fe14c2706e953facc982cbfb0d93a102c9758741a8ef000c1f65717fe7f38bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe14c2706e953facc982cbfb0d93a102c9758741a8ef000c1f65717fe7f38bc->enter($__internal_2fe14c2706e953facc982cbfb0d93a102c9758741a8ef000c1f65717fe7f38bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d43361ba8cc23575d57a49316e5354400921aeedd757062f7d46b7f5e44607d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43361ba8cc23575d57a49316e5354400921aeedd757062f7d46b7f5e44607d7->enter($__internal_d43361ba8cc23575d57a49316e5354400921aeedd757062f7d46b7f5e44607d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe14c2706e953facc982cbfb0d93a102c9758741a8ef000c1f65717fe7f38bc->leave($__internal_2fe14c2706e953facc982cbfb0d93a102c9758741a8ef000c1f65717fe7f38bc_prof);

        
        $__internal_d43361ba8cc23575d57a49316e5354400921aeedd757062f7d46b7f5e44607d7->leave($__internal_d43361ba8cc23575d57a49316e5354400921aeedd757062f7d46b7f5e44607d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c308e47cde71040bcfb1df0ef33ba6f2697082a042b3e064023cc858fa414b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c308e47cde71040bcfb1df0ef33ba6f2697082a042b3e064023cc858fa414b7->enter($__internal_3c308e47cde71040bcfb1df0ef33ba6f2697082a042b3e064023cc858fa414b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50052e23507bbec051129d2b650c403c32582e3155fd4d7eac7fe1540c881808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50052e23507bbec051129d2b650c403c32582e3155fd4d7eac7fe1540c881808->enter($__internal_50052e23507bbec051129d2b650c403c32582e3155fd4d7eac7fe1540c881808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_50052e23507bbec051129d2b650c403c32582e3155fd4d7eac7fe1540c881808->leave($__internal_50052e23507bbec051129d2b650c403c32582e3155fd4d7eac7fe1540c881808_prof);

        
        $__internal_3c308e47cde71040bcfb1df0ef33ba6f2697082a042b3e064023cc858fa414b7->leave($__internal_3c308e47cde71040bcfb1df0ef33ba6f2697082a042b3e064023cc858fa414b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59cc0a14bdc6012a434f3a96f58af362aada593cafbd48c5092fd7cc5527faa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59cc0a14bdc6012a434f3a96f58af362aada593cafbd48c5092fd7cc5527faa1->enter($__internal_59cc0a14bdc6012a434f3a96f58af362aada593cafbd48c5092fd7cc5527faa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8132194987e9874c5105bc96b5b0cc135667c2d01a84f4664fdcffdf554d51b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8132194987e9874c5105bc96b5b0cc135667c2d01a84f4664fdcffdf554d51b8->enter($__internal_8132194987e9874c5105bc96b5b0cc135667c2d01a84f4664fdcffdf554d51b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8132194987e9874c5105bc96b5b0cc135667c2d01a84f4664fdcffdf554d51b8->leave($__internal_8132194987e9874c5105bc96b5b0cc135667c2d01a84f4664fdcffdf554d51b8_prof);

        
        $__internal_59cc0a14bdc6012a434f3a96f58af362aada593cafbd48c5092fd7cc5527faa1->leave($__internal_59cc0a14bdc6012a434f3a96f58af362aada593cafbd48c5092fd7cc5527faa1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_614f943077e6f24fc990aef91246737cad2ed98b5bb90d04af19dc0d39269f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614f943077e6f24fc990aef91246737cad2ed98b5bb90d04af19dc0d39269f28->enter($__internal_614f943077e6f24fc990aef91246737cad2ed98b5bb90d04af19dc0d39269f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fcec5a3050c2f32dd4bad81fa119c59283ce2f779899d25e3d0919c1d61e0b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcec5a3050c2f32dd4bad81fa119c59283ce2f779899d25e3d0919c1d61e0b71->enter($__internal_fcec5a3050c2f32dd4bad81fa119c59283ce2f779899d25e3d0919c1d61e0b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fcec5a3050c2f32dd4bad81fa119c59283ce2f779899d25e3d0919c1d61e0b71->leave($__internal_fcec5a3050c2f32dd4bad81fa119c59283ce2f779899d25e3d0919c1d61e0b71_prof);

        
        $__internal_614f943077e6f24fc990aef91246737cad2ed98b5bb90d04af19dc0d39269f28->leave($__internal_614f943077e6f24fc990aef91246737cad2ed98b5bb90d04af19dc0d39269f28_prof);

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
