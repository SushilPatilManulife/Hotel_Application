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
        $__internal_48f9559457815a490f1636380136af36384e4ffee7dec9467e83b3fa94430d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f9559457815a490f1636380136af36384e4ffee7dec9467e83b3fa94430d4b->enter($__internal_48f9559457815a490f1636380136af36384e4ffee7dec9467e83b3fa94430d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d482658f10c3a32002260abcea8060f624d0713dd3d0d1cba1d077692c2a6ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d482658f10c3a32002260abcea8060f624d0713dd3d0d1cba1d077692c2a6ef6->enter($__internal_d482658f10c3a32002260abcea8060f624d0713dd3d0d1cba1d077692c2a6ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f9559457815a490f1636380136af36384e4ffee7dec9467e83b3fa94430d4b->leave($__internal_48f9559457815a490f1636380136af36384e4ffee7dec9467e83b3fa94430d4b_prof);

        
        $__internal_d482658f10c3a32002260abcea8060f624d0713dd3d0d1cba1d077692c2a6ef6->leave($__internal_d482658f10c3a32002260abcea8060f624d0713dd3d0d1cba1d077692c2a6ef6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2acd7fa10724b13967eaa29fad5e3f5b934ba2abf8fd41c0b84eca4c98daf21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acd7fa10724b13967eaa29fad5e3f5b934ba2abf8fd41c0b84eca4c98daf21f->enter($__internal_2acd7fa10724b13967eaa29fad5e3f5b934ba2abf8fd41c0b84eca4c98daf21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea9297595a4ba99ac1698b3df419dc9e998d4ed6f61a66a756a09c3783512ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9297595a4ba99ac1698b3df419dc9e998d4ed6f61a66a756a09c3783512ea0->enter($__internal_ea9297595a4ba99ac1698b3df419dc9e998d4ed6f61a66a756a09c3783512ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea9297595a4ba99ac1698b3df419dc9e998d4ed6f61a66a756a09c3783512ea0->leave($__internal_ea9297595a4ba99ac1698b3df419dc9e998d4ed6f61a66a756a09c3783512ea0_prof);

        
        $__internal_2acd7fa10724b13967eaa29fad5e3f5b934ba2abf8fd41c0b84eca4c98daf21f->leave($__internal_2acd7fa10724b13967eaa29fad5e3f5b934ba2abf8fd41c0b84eca4c98daf21f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_202d9f8508078759f7dbe7d2a14a109fe9d50fd2de4d732e94b39ed882f52d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202d9f8508078759f7dbe7d2a14a109fe9d50fd2de4d732e94b39ed882f52d94->enter($__internal_202d9f8508078759f7dbe7d2a14a109fe9d50fd2de4d732e94b39ed882f52d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_322ff87e915993c1b131ea114c4c1089bcb48dd3daf6896e935b9e55fbcbfc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322ff87e915993c1b131ea114c4c1089bcb48dd3daf6896e935b9e55fbcbfc48->enter($__internal_322ff87e915993c1b131ea114c4c1089bcb48dd3daf6896e935b9e55fbcbfc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_322ff87e915993c1b131ea114c4c1089bcb48dd3daf6896e935b9e55fbcbfc48->leave($__internal_322ff87e915993c1b131ea114c4c1089bcb48dd3daf6896e935b9e55fbcbfc48_prof);

        
        $__internal_202d9f8508078759f7dbe7d2a14a109fe9d50fd2de4d732e94b39ed882f52d94->leave($__internal_202d9f8508078759f7dbe7d2a14a109fe9d50fd2de4d732e94b39ed882f52d94_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca2fdde22d8c0af0f4af92eeb5845e06332e625a56a1d4e2f67dbdbc5af530f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2fdde22d8c0af0f4af92eeb5845e06332e625a56a1d4e2f67dbdbc5af530f6->enter($__internal_ca2fdde22d8c0af0f4af92eeb5845e06332e625a56a1d4e2f67dbdbc5af530f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77e5aa510e81389c09ad21200cb78c994d82aefe0afd4dab2355c9883a1f19ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e5aa510e81389c09ad21200cb78c994d82aefe0afd4dab2355c9883a1f19ca->enter($__internal_77e5aa510e81389c09ad21200cb78c994d82aefe0afd4dab2355c9883a1f19ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_77e5aa510e81389c09ad21200cb78c994d82aefe0afd4dab2355c9883a1f19ca->leave($__internal_77e5aa510e81389c09ad21200cb78c994d82aefe0afd4dab2355c9883a1f19ca_prof);

        
        $__internal_ca2fdde22d8c0af0f4af92eeb5845e06332e625a56a1d4e2f67dbdbc5af530f6->leave($__internal_ca2fdde22d8c0af0f4af92eeb5845e06332e625a56a1d4e2f67dbdbc5af530f6_prof);

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
