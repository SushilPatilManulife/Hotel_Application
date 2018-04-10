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
        $__internal_408139dea2c1dd3b2ec724aa33bcbe1b0da641afcd580b181c48b6983ebf1faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408139dea2c1dd3b2ec724aa33bcbe1b0da641afcd580b181c48b6983ebf1faa->enter($__internal_408139dea2c1dd3b2ec724aa33bcbe1b0da641afcd580b181c48b6983ebf1faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_03b9ee17c7efbbab4820b450a3402d4e8ae41289db75c0c368253f247879a841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b9ee17c7efbbab4820b450a3402d4e8ae41289db75c0c368253f247879a841->enter($__internal_03b9ee17c7efbbab4820b450a3402d4e8ae41289db75c0c368253f247879a841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_408139dea2c1dd3b2ec724aa33bcbe1b0da641afcd580b181c48b6983ebf1faa->leave($__internal_408139dea2c1dd3b2ec724aa33bcbe1b0da641afcd580b181c48b6983ebf1faa_prof);

        
        $__internal_03b9ee17c7efbbab4820b450a3402d4e8ae41289db75c0c368253f247879a841->leave($__internal_03b9ee17c7efbbab4820b450a3402d4e8ae41289db75c0c368253f247879a841_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_640ebb5af7dcb950822adf39e45c5240540e5d0cbe94289917617c4e77191b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640ebb5af7dcb950822adf39e45c5240540e5d0cbe94289917617c4e77191b20->enter($__internal_640ebb5af7dcb950822adf39e45c5240540e5d0cbe94289917617c4e77191b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2d21c250b0cc016a8070920c389f023018eb3193717c8b2d7cb10b563a623f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d21c250b0cc016a8070920c389f023018eb3193717c8b2d7cb10b563a623f7->enter($__internal_d2d21c250b0cc016a8070920c389f023018eb3193717c8b2d7cb10b563a623f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d2d21c250b0cc016a8070920c389f023018eb3193717c8b2d7cb10b563a623f7->leave($__internal_d2d21c250b0cc016a8070920c389f023018eb3193717c8b2d7cb10b563a623f7_prof);

        
        $__internal_640ebb5af7dcb950822adf39e45c5240540e5d0cbe94289917617c4e77191b20->leave($__internal_640ebb5af7dcb950822adf39e45c5240540e5d0cbe94289917617c4e77191b20_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad1921f2a708be6f7a8f954b168566d89b8654d3a6408ddc723912fe151086e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1921f2a708be6f7a8f954b168566d89b8654d3a6408ddc723912fe151086e9->enter($__internal_ad1921f2a708be6f7a8f954b168566d89b8654d3a6408ddc723912fe151086e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e62f64bd844a102a82c70c6a2c7fa671b5e3d7da9e1d7061f089a14dc0099cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62f64bd844a102a82c70c6a2c7fa671b5e3d7da9e1d7061f089a14dc0099cee->enter($__internal_e62f64bd844a102a82c70c6a2c7fa671b5e3d7da9e1d7061f089a14dc0099cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e62f64bd844a102a82c70c6a2c7fa671b5e3d7da9e1d7061f089a14dc0099cee->leave($__internal_e62f64bd844a102a82c70c6a2c7fa671b5e3d7da9e1d7061f089a14dc0099cee_prof);

        
        $__internal_ad1921f2a708be6f7a8f954b168566d89b8654d3a6408ddc723912fe151086e9->leave($__internal_ad1921f2a708be6f7a8f954b168566d89b8654d3a6408ddc723912fe151086e9_prof);

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
