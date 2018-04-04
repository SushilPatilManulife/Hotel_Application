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
        $__internal_4d2ffe85a701970b8bab5a4c22f76f54b006057e114a53c83853e0fd74c40777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2ffe85a701970b8bab5a4c22f76f54b006057e114a53c83853e0fd74c40777->enter($__internal_4d2ffe85a701970b8bab5a4c22f76f54b006057e114a53c83853e0fd74c40777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_bd8151b086091989fdcb08f1b6bb005fbd681319d16993cb97780f462f645fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8151b086091989fdcb08f1b6bb005fbd681319d16993cb97780f462f645fa8->enter($__internal_bd8151b086091989fdcb08f1b6bb005fbd681319d16993cb97780f462f645fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2ffe85a701970b8bab5a4c22f76f54b006057e114a53c83853e0fd74c40777->leave($__internal_4d2ffe85a701970b8bab5a4c22f76f54b006057e114a53c83853e0fd74c40777_prof);

        
        $__internal_bd8151b086091989fdcb08f1b6bb005fbd681319d16993cb97780f462f645fa8->leave($__internal_bd8151b086091989fdcb08f1b6bb005fbd681319d16993cb97780f462f645fa8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_883869dbc20f08af4d8e2f7a89133e3b215fb33aec574cd25e64a918042456ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883869dbc20f08af4d8e2f7a89133e3b215fb33aec574cd25e64a918042456ce->enter($__internal_883869dbc20f08af4d8e2f7a89133e3b215fb33aec574cd25e64a918042456ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91e9c7960b8e969e9d08b4f2839776dcd706ebb6d9c10311d514cff87dd0d5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e9c7960b8e969e9d08b4f2839776dcd706ebb6d9c10311d514cff87dd0d5c6->enter($__internal_91e9c7960b8e969e9d08b4f2839776dcd706ebb6d9c10311d514cff87dd0d5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_91e9c7960b8e969e9d08b4f2839776dcd706ebb6d9c10311d514cff87dd0d5c6->leave($__internal_91e9c7960b8e969e9d08b4f2839776dcd706ebb6d9c10311d514cff87dd0d5c6_prof);

        
        $__internal_883869dbc20f08af4d8e2f7a89133e3b215fb33aec574cd25e64a918042456ce->leave($__internal_883869dbc20f08af4d8e2f7a89133e3b215fb33aec574cd25e64a918042456ce_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_215c2fbb640195799188bed645ea9f371e4eaf950c3a86fc8a5c2d1d239f850e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215c2fbb640195799188bed645ea9f371e4eaf950c3a86fc8a5c2d1d239f850e->enter($__internal_215c2fbb640195799188bed645ea9f371e4eaf950c3a86fc8a5c2d1d239f850e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4325c52fa8e02c99235014ecf89206b77aeb98a53526260936d4319542c6dfa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4325c52fa8e02c99235014ecf89206b77aeb98a53526260936d4319542c6dfa3->enter($__internal_4325c52fa8e02c99235014ecf89206b77aeb98a53526260936d4319542c6dfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4325c52fa8e02c99235014ecf89206b77aeb98a53526260936d4319542c6dfa3->leave($__internal_4325c52fa8e02c99235014ecf89206b77aeb98a53526260936d4319542c6dfa3_prof);

        
        $__internal_215c2fbb640195799188bed645ea9f371e4eaf950c3a86fc8a5c2d1d239f850e->leave($__internal_215c2fbb640195799188bed645ea9f371e4eaf950c3a86fc8a5c2d1d239f850e_prof);

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
