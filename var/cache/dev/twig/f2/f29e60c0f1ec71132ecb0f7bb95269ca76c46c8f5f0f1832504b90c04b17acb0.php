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
        $__internal_4e79341ae22a6734805a663336bd4cc6d8193564ec60d22a534c87ba6bad7949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e79341ae22a6734805a663336bd4cc6d8193564ec60d22a534c87ba6bad7949->enter($__internal_4e79341ae22a6734805a663336bd4cc6d8193564ec60d22a534c87ba6bad7949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_48a31384549bdd27bb03c05f9c199dc54898a2b30ceb9fd835a7ca4a004e126e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a31384549bdd27bb03c05f9c199dc54898a2b30ceb9fd835a7ca4a004e126e->enter($__internal_48a31384549bdd27bb03c05f9c199dc54898a2b30ceb9fd835a7ca4a004e126e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e79341ae22a6734805a663336bd4cc6d8193564ec60d22a534c87ba6bad7949->leave($__internal_4e79341ae22a6734805a663336bd4cc6d8193564ec60d22a534c87ba6bad7949_prof);

        
        $__internal_48a31384549bdd27bb03c05f9c199dc54898a2b30ceb9fd835a7ca4a004e126e->leave($__internal_48a31384549bdd27bb03c05f9c199dc54898a2b30ceb9fd835a7ca4a004e126e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_042673b8b87b8625cba9de717e3d4c24159b382764501b72d198d12857df15ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042673b8b87b8625cba9de717e3d4c24159b382764501b72d198d12857df15ee->enter($__internal_042673b8b87b8625cba9de717e3d4c24159b382764501b72d198d12857df15ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3413405b771a618bbfa87ff22439cdbe3d1c4d29d1ded211a7153d873722d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3413405b771a618bbfa87ff22439cdbe3d1c4d29d1ded211a7153d873722d1a->enter($__internal_c3413405b771a618bbfa87ff22439cdbe3d1c4d29d1ded211a7153d873722d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c3413405b771a618bbfa87ff22439cdbe3d1c4d29d1ded211a7153d873722d1a->leave($__internal_c3413405b771a618bbfa87ff22439cdbe3d1c4d29d1ded211a7153d873722d1a_prof);

        
        $__internal_042673b8b87b8625cba9de717e3d4c24159b382764501b72d198d12857df15ee->leave($__internal_042673b8b87b8625cba9de717e3d4c24159b382764501b72d198d12857df15ee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_81511299d8e30ac81522acc6805da71f1c8cee22dfa6dc547c884a0a8aed8365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81511299d8e30ac81522acc6805da71f1c8cee22dfa6dc547c884a0a8aed8365->enter($__internal_81511299d8e30ac81522acc6805da71f1c8cee22dfa6dc547c884a0a8aed8365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_118269461c7292d24ced8b127cb058e96f03f83131561d5b701906b93a84320d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118269461c7292d24ced8b127cb058e96f03f83131561d5b701906b93a84320d->enter($__internal_118269461c7292d24ced8b127cb058e96f03f83131561d5b701906b93a84320d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_118269461c7292d24ced8b127cb058e96f03f83131561d5b701906b93a84320d->leave($__internal_118269461c7292d24ced8b127cb058e96f03f83131561d5b701906b93a84320d_prof);

        
        $__internal_81511299d8e30ac81522acc6805da71f1c8cee22dfa6dc547c884a0a8aed8365->leave($__internal_81511299d8e30ac81522acc6805da71f1c8cee22dfa6dc547c884a0a8aed8365_prof);

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
