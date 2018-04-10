<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f2a8df08792500d499f0260e6dd4e48c07d5c5d12020737e5852b752c1b93cd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26b2edc0502f7bb2d78363e40a9538a45d4f25824a1e27092111cc87996b849c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b2edc0502f7bb2d78363e40a9538a45d4f25824a1e27092111cc87996b849c->enter($__internal_26b2edc0502f7bb2d78363e40a9538a45d4f25824a1e27092111cc87996b849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_189309e9fb03d93cb6bd2282e76327e38bd196b3c2ab9b7cd1330de0c8dcec6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189309e9fb03d93cb6bd2282e76327e38bd196b3c2ab9b7cd1330de0c8dcec6d->enter($__internal_189309e9fb03d93cb6bd2282e76327e38bd196b3c2ab9b7cd1330de0c8dcec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26b2edc0502f7bb2d78363e40a9538a45d4f25824a1e27092111cc87996b849c->leave($__internal_26b2edc0502f7bb2d78363e40a9538a45d4f25824a1e27092111cc87996b849c_prof);

        
        $__internal_189309e9fb03d93cb6bd2282e76327e38bd196b3c2ab9b7cd1330de0c8dcec6d->leave($__internal_189309e9fb03d93cb6bd2282e76327e38bd196b3c2ab9b7cd1330de0c8dcec6d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_80180ab4f9e9947c6d6925acc48bbaaa11ed6982826f4a0c04b3612931e585a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80180ab4f9e9947c6d6925acc48bbaaa11ed6982826f4a0c04b3612931e585a2->enter($__internal_80180ab4f9e9947c6d6925acc48bbaaa11ed6982826f4a0c04b3612931e585a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_35d9e6d0b2e967d6c4de378bd1b20c7d137406c37209bb9a0fa759a1c8e6db66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d9e6d0b2e967d6c4de378bd1b20c7d137406c37209bb9a0fa759a1c8e6db66->enter($__internal_35d9e6d0b2e967d6c4de378bd1b20c7d137406c37209bb9a0fa759a1c8e6db66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_35d9e6d0b2e967d6c4de378bd1b20c7d137406c37209bb9a0fa759a1c8e6db66->leave($__internal_35d9e6d0b2e967d6c4de378bd1b20c7d137406c37209bb9a0fa759a1c8e6db66_prof);

        
        $__internal_80180ab4f9e9947c6d6925acc48bbaaa11ed6982826f4a0c04b3612931e585a2->leave($__internal_80180ab4f9e9947c6d6925acc48bbaaa11ed6982826f4a0c04b3612931e585a2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bdca3b9453a91c2def876c7b60b79798ebc2e804edf633ed7d79f898f75d140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdca3b9453a91c2def876c7b60b79798ebc2e804edf633ed7d79f898f75d140->enter($__internal_3bdca3b9453a91c2def876c7b60b79798ebc2e804edf633ed7d79f898f75d140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52c267434e96f5b126d3ab770aec3c8fefec39ce12985e67dcd394c0ee967804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c267434e96f5b126d3ab770aec3c8fefec39ce12985e67dcd394c0ee967804->enter($__internal_52c267434e96f5b126d3ab770aec3c8fefec39ce12985e67dcd394c0ee967804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_52c267434e96f5b126d3ab770aec3c8fefec39ce12985e67dcd394c0ee967804->leave($__internal_52c267434e96f5b126d3ab770aec3c8fefec39ce12985e67dcd394c0ee967804_prof);

        
        $__internal_3bdca3b9453a91c2def876c7b60b79798ebc2e804edf633ed7d79f898f75d140->leave($__internal_3bdca3b9453a91c2def876c7b60b79798ebc2e804edf633ed7d79f898f75d140_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
