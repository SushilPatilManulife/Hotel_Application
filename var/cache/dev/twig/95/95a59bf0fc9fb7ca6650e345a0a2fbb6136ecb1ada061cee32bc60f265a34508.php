<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_df80d6b36747686b85ed71b6baa500086f1c50c3ef9c4baa5c69d00e03a3a01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_a7905ab3e7051163b582663ffa85c04252f2f30ce754a226f9c02c72834f1972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7905ab3e7051163b582663ffa85c04252f2f30ce754a226f9c02c72834f1972->enter($__internal_a7905ab3e7051163b582663ffa85c04252f2f30ce754a226f9c02c72834f1972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_55006bfa3cfaf54d01d40528b8985b808839ec7143cbcceb65d65035971da823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55006bfa3cfaf54d01d40528b8985b808839ec7143cbcceb65d65035971da823->enter($__internal_55006bfa3cfaf54d01d40528b8985b808839ec7143cbcceb65d65035971da823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7905ab3e7051163b582663ffa85c04252f2f30ce754a226f9c02c72834f1972->leave($__internal_a7905ab3e7051163b582663ffa85c04252f2f30ce754a226f9c02c72834f1972_prof);

        
        $__internal_55006bfa3cfaf54d01d40528b8985b808839ec7143cbcceb65d65035971da823->leave($__internal_55006bfa3cfaf54d01d40528b8985b808839ec7143cbcceb65d65035971da823_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d33fe82af01fb1b83e2a27d46360a48f6a8ac796ad095532f21661866e9af159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33fe82af01fb1b83e2a27d46360a48f6a8ac796ad095532f21661866e9af159->enter($__internal_d33fe82af01fb1b83e2a27d46360a48f6a8ac796ad095532f21661866e9af159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cd6b2599ee7fc0334adda37602a41613ea1c68c8439ab61fff5a6b6c6f4292d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6b2599ee7fc0334adda37602a41613ea1c68c8439ab61fff5a6b6c6f4292d4->enter($__internal_cd6b2599ee7fc0334adda37602a41613ea1c68c8439ab61fff5a6b6c6f4292d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cd6b2599ee7fc0334adda37602a41613ea1c68c8439ab61fff5a6b6c6f4292d4->leave($__internal_cd6b2599ee7fc0334adda37602a41613ea1c68c8439ab61fff5a6b6c6f4292d4_prof);

        
        $__internal_d33fe82af01fb1b83e2a27d46360a48f6a8ac796ad095532f21661866e9af159->leave($__internal_d33fe82af01fb1b83e2a27d46360a48f6a8ac796ad095532f21661866e9af159_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_651ab9eb872a586bdd811f1b8a6217da5f99f8da1db926feb8a60f8ed221c079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651ab9eb872a586bdd811f1b8a6217da5f99f8da1db926feb8a60f8ed221c079->enter($__internal_651ab9eb872a586bdd811f1b8a6217da5f99f8da1db926feb8a60f8ed221c079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e3b8cbaa83d2f1a68d0472973de168a4c35f121a26f1f4c565999d2b181b7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3b8cbaa83d2f1a68d0472973de168a4c35f121a26f1f4c565999d2b181b7e9->enter($__internal_3e3b8cbaa83d2f1a68d0472973de168a4c35f121a26f1f4c565999d2b181b7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3e3b8cbaa83d2f1a68d0472973de168a4c35f121a26f1f4c565999d2b181b7e9->leave($__internal_3e3b8cbaa83d2f1a68d0472973de168a4c35f121a26f1f4c565999d2b181b7e9_prof);

        
        $__internal_651ab9eb872a586bdd811f1b8a6217da5f99f8da1db926feb8a60f8ed221c079->leave($__internal_651ab9eb872a586bdd811f1b8a6217da5f99f8da1db926feb8a60f8ed221c079_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
