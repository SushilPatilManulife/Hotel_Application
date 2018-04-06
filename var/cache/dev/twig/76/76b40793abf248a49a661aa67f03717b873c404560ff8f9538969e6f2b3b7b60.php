<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0d74118a87d1e285bed50f17458d2e8083e6935e5be41b82a9d39ab629a12f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6e9ef8515021ecd501111fdde280c516eae00f5d2eac7e0a21dbbf4be9cac67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e9ef8515021ecd501111fdde280c516eae00f5d2eac7e0a21dbbf4be9cac67->enter($__internal_e6e9ef8515021ecd501111fdde280c516eae00f5d2eac7e0a21dbbf4be9cac67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8cd1eb566e2a2d9b783af6266c476ef92352a35f891cd1353890b684a1438d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd1eb566e2a2d9b783af6266c476ef92352a35f891cd1353890b684a1438d0d->enter($__internal_8cd1eb566e2a2d9b783af6266c476ef92352a35f891cd1353890b684a1438d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e9ef8515021ecd501111fdde280c516eae00f5d2eac7e0a21dbbf4be9cac67->leave($__internal_e6e9ef8515021ecd501111fdde280c516eae00f5d2eac7e0a21dbbf4be9cac67_prof);

        
        $__internal_8cd1eb566e2a2d9b783af6266c476ef92352a35f891cd1353890b684a1438d0d->leave($__internal_8cd1eb566e2a2d9b783af6266c476ef92352a35f891cd1353890b684a1438d0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ddfb7f6bece7df2667d7c757edff89a876dd7db8ffae6b1e21e277c05da80e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfb7f6bece7df2667d7c757edff89a876dd7db8ffae6b1e21e277c05da80e7e->enter($__internal_ddfb7f6bece7df2667d7c757edff89a876dd7db8ffae6b1e21e277c05da80e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23bc71b472044039d169cf5a59925cba6667f02b8060cea1011721b1d45d73ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bc71b472044039d169cf5a59925cba6667f02b8060cea1011721b1d45d73ba->enter($__internal_23bc71b472044039d169cf5a59925cba6667f02b8060cea1011721b1d45d73ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_23bc71b472044039d169cf5a59925cba6667f02b8060cea1011721b1d45d73ba->leave($__internal_23bc71b472044039d169cf5a59925cba6667f02b8060cea1011721b1d45d73ba_prof);

        
        $__internal_ddfb7f6bece7df2667d7c757edff89a876dd7db8ffae6b1e21e277c05da80e7e->leave($__internal_ddfb7f6bece7df2667d7c757edff89a876dd7db8ffae6b1e21e277c05da80e7e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6bb098830a13e1cc570e1bc5ce02dbe8b8a2d41874a77dc806afd875c47ff5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6bb098830a13e1cc570e1bc5ce02dbe8b8a2d41874a77dc806afd875c47ff5c->enter($__internal_d6bb098830a13e1cc570e1bc5ce02dbe8b8a2d41874a77dc806afd875c47ff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11af2e0a1a38913eb4728164d0570559c764af3144b043d5c1546195ad417a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11af2e0a1a38913eb4728164d0570559c764af3144b043d5c1546195ad417a30->enter($__internal_11af2e0a1a38913eb4728164d0570559c764af3144b043d5c1546195ad417a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_11af2e0a1a38913eb4728164d0570559c764af3144b043d5c1546195ad417a30->leave($__internal_11af2e0a1a38913eb4728164d0570559c764af3144b043d5c1546195ad417a30_prof);

        
        $__internal_d6bb098830a13e1cc570e1bc5ce02dbe8b8a2d41874a77dc806afd875c47ff5c->leave($__internal_d6bb098830a13e1cc570e1bc5ce02dbe8b8a2d41874a77dc806afd875c47ff5c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
