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
        $__internal_942d96e5020096876d2d28768d91925a846b531c465eae57d2b7d6843c1731ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942d96e5020096876d2d28768d91925a846b531c465eae57d2b7d6843c1731ad->enter($__internal_942d96e5020096876d2d28768d91925a846b531c465eae57d2b7d6843c1731ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8eba4cd9b1ec1a5ad7f4e2589444e00d2fefb87fdb6251c8e77c944288699e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eba4cd9b1ec1a5ad7f4e2589444e00d2fefb87fdb6251c8e77c944288699e02->enter($__internal_8eba4cd9b1ec1a5ad7f4e2589444e00d2fefb87fdb6251c8e77c944288699e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_942d96e5020096876d2d28768d91925a846b531c465eae57d2b7d6843c1731ad->leave($__internal_942d96e5020096876d2d28768d91925a846b531c465eae57d2b7d6843c1731ad_prof);

        
        $__internal_8eba4cd9b1ec1a5ad7f4e2589444e00d2fefb87fdb6251c8e77c944288699e02->leave($__internal_8eba4cd9b1ec1a5ad7f4e2589444e00d2fefb87fdb6251c8e77c944288699e02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2f16f1beee02e9606189405e6a75a6fe631108a454169bbaaf74fef2c4180d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f16f1beee02e9606189405e6a75a6fe631108a454169bbaaf74fef2c4180d3->enter($__internal_c2f16f1beee02e9606189405e6a75a6fe631108a454169bbaaf74fef2c4180d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0dc465ebd1e6805afa9ea8dd3341ce5886ae1311985b4d7518411df37a358a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dc465ebd1e6805afa9ea8dd3341ce5886ae1311985b4d7518411df37a358a7->enter($__internal_e0dc465ebd1e6805afa9ea8dd3341ce5886ae1311985b4d7518411df37a358a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e0dc465ebd1e6805afa9ea8dd3341ce5886ae1311985b4d7518411df37a358a7->leave($__internal_e0dc465ebd1e6805afa9ea8dd3341ce5886ae1311985b4d7518411df37a358a7_prof);

        
        $__internal_c2f16f1beee02e9606189405e6a75a6fe631108a454169bbaaf74fef2c4180d3->leave($__internal_c2f16f1beee02e9606189405e6a75a6fe631108a454169bbaaf74fef2c4180d3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b2d1c5c0de8a109ce19d95ead4df0d7ee4c2badf08de068bdfc90978e558e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2d1c5c0de8a109ce19d95ead4df0d7ee4c2badf08de068bdfc90978e558e0b->enter($__internal_0b2d1c5c0de8a109ce19d95ead4df0d7ee4c2badf08de068bdfc90978e558e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66e6e0685e72b000a50926a76e2dff7f7df14e8d806c4f05be1822ad3f77ed51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e6e0685e72b000a50926a76e2dff7f7df14e8d806c4f05be1822ad3f77ed51->enter($__internal_66e6e0685e72b000a50926a76e2dff7f7df14e8d806c4f05be1822ad3f77ed51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66e6e0685e72b000a50926a76e2dff7f7df14e8d806c4f05be1822ad3f77ed51->leave($__internal_66e6e0685e72b000a50926a76e2dff7f7df14e8d806c4f05be1822ad3f77ed51_prof);

        
        $__internal_0b2d1c5c0de8a109ce19d95ead4df0d7ee4c2badf08de068bdfc90978e558e0b->leave($__internal_0b2d1c5c0de8a109ce19d95ead4df0d7ee4c2badf08de068bdfc90978e558e0b_prof);

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
