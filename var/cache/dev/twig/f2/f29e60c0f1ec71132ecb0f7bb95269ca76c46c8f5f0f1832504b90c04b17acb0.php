<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_81ef424db05918f4c6b72b1b28bc5f50e15a3422231199c6952d74eae0343a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_1ab835c353b490e9d566a5e45f04e16f6569ca500b107f18c35a7895d33c8cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab835c353b490e9d566a5e45f04e16f6569ca500b107f18c35a7895d33c8cbf->enter($__internal_1ab835c353b490e9d566a5e45f04e16f6569ca500b107f18c35a7895d33c8cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_816cdf4b37a3b22d10caf58a485cef695e1bc895b2b6d8e501ddc1d9590f5e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816cdf4b37a3b22d10caf58a485cef695e1bc895b2b6d8e501ddc1d9590f5e35->enter($__internal_816cdf4b37a3b22d10caf58a485cef695e1bc895b2b6d8e501ddc1d9590f5e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab835c353b490e9d566a5e45f04e16f6569ca500b107f18c35a7895d33c8cbf->leave($__internal_1ab835c353b490e9d566a5e45f04e16f6569ca500b107f18c35a7895d33c8cbf_prof);

        
        $__internal_816cdf4b37a3b22d10caf58a485cef695e1bc895b2b6d8e501ddc1d9590f5e35->leave($__internal_816cdf4b37a3b22d10caf58a485cef695e1bc895b2b6d8e501ddc1d9590f5e35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51efb6ea21addfaafb30c1d72b7bd9859291bb7c28893fffde8693b134a8a821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51efb6ea21addfaafb30c1d72b7bd9859291bb7c28893fffde8693b134a8a821->enter($__internal_51efb6ea21addfaafb30c1d72b7bd9859291bb7c28893fffde8693b134a8a821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2892ed9856f104721b465408bb907616284262733ce079a7ebb3caf69c2e8064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2892ed9856f104721b465408bb907616284262733ce079a7ebb3caf69c2e8064->enter($__internal_2892ed9856f104721b465408bb907616284262733ce079a7ebb3caf69c2e8064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2892ed9856f104721b465408bb907616284262733ce079a7ebb3caf69c2e8064->leave($__internal_2892ed9856f104721b465408bb907616284262733ce079a7ebb3caf69c2e8064_prof);

        
        $__internal_51efb6ea21addfaafb30c1d72b7bd9859291bb7c28893fffde8693b134a8a821->leave($__internal_51efb6ea21addfaafb30c1d72b7bd9859291bb7c28893fffde8693b134a8a821_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_60811e1604d4561ffc6169b4e93e1d550a357fce85dfb08497cd9c6d8b497f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60811e1604d4561ffc6169b4e93e1d550a357fce85dfb08497cd9c6d8b497f11->enter($__internal_60811e1604d4561ffc6169b4e93e1d550a357fce85dfb08497cd9c6d8b497f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3528968e89130ee8b643775f70c2879176f90754c5977167d1db0bc51d7bf9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3528968e89130ee8b643775f70c2879176f90754c5977167d1db0bc51d7bf9c9->enter($__internal_3528968e89130ee8b643775f70c2879176f90754c5977167d1db0bc51d7bf9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3528968e89130ee8b643775f70c2879176f90754c5977167d1db0bc51d7bf9c9->leave($__internal_3528968e89130ee8b643775f70c2879176f90754c5977167d1db0bc51d7bf9c9_prof);

        
        $__internal_60811e1604d4561ffc6169b4e93e1d550a357fce85dfb08497cd9c6d8b497f11->leave($__internal_60811e1604d4561ffc6169b4e93e1d550a357fce85dfb08497cd9c6d8b497f11_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
