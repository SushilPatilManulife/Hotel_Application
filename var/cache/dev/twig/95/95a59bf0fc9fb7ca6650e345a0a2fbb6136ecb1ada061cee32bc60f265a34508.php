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
        $__internal_b0b1e49cf51e0ae90b398a36020bf6318ecf04efe9a8ae7adc9803d1ce1e5b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b1e49cf51e0ae90b398a36020bf6318ecf04efe9a8ae7adc9803d1ce1e5b9f->enter($__internal_b0b1e49cf51e0ae90b398a36020bf6318ecf04efe9a8ae7adc9803d1ce1e5b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a1b9732ca589ecafc3826f67b3caf84e36e54d2ebfd216645231317dfd9253bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b9732ca589ecafc3826f67b3caf84e36e54d2ebfd216645231317dfd9253bb->enter($__internal_a1b9732ca589ecafc3826f67b3caf84e36e54d2ebfd216645231317dfd9253bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b1e49cf51e0ae90b398a36020bf6318ecf04efe9a8ae7adc9803d1ce1e5b9f->leave($__internal_b0b1e49cf51e0ae90b398a36020bf6318ecf04efe9a8ae7adc9803d1ce1e5b9f_prof);

        
        $__internal_a1b9732ca589ecafc3826f67b3caf84e36e54d2ebfd216645231317dfd9253bb->leave($__internal_a1b9732ca589ecafc3826f67b3caf84e36e54d2ebfd216645231317dfd9253bb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_016e1d672fe3d1ad1450fbe9e7739bd1cbe7ba803fa6b7ef0c532d3f3c46cba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016e1d672fe3d1ad1450fbe9e7739bd1cbe7ba803fa6b7ef0c532d3f3c46cba6->enter($__internal_016e1d672fe3d1ad1450fbe9e7739bd1cbe7ba803fa6b7ef0c532d3f3c46cba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9a4804040ea899f4f9926b4d1f2f896a4ced529fe54e28dbba961559b21fb148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4804040ea899f4f9926b4d1f2f896a4ced529fe54e28dbba961559b21fb148->enter($__internal_9a4804040ea899f4f9926b4d1f2f896a4ced529fe54e28dbba961559b21fb148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9a4804040ea899f4f9926b4d1f2f896a4ced529fe54e28dbba961559b21fb148->leave($__internal_9a4804040ea899f4f9926b4d1f2f896a4ced529fe54e28dbba961559b21fb148_prof);

        
        $__internal_016e1d672fe3d1ad1450fbe9e7739bd1cbe7ba803fa6b7ef0c532d3f3c46cba6->leave($__internal_016e1d672fe3d1ad1450fbe9e7739bd1cbe7ba803fa6b7ef0c532d3f3c46cba6_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e0280442418ab5f8436bcb83c58f9d58bb29c94a8f5412bd6feff7133487ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0280442418ab5f8436bcb83c58f9d58bb29c94a8f5412bd6feff7133487ec2->enter($__internal_6e0280442418ab5f8436bcb83c58f9d58bb29c94a8f5412bd6feff7133487ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82e772acb22f6d7c23e6dddef32ad99110862a9b6c67c64abf7a54dcd4c7d5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e772acb22f6d7c23e6dddef32ad99110862a9b6c67c64abf7a54dcd4c7d5a0->enter($__internal_82e772acb22f6d7c23e6dddef32ad99110862a9b6c67c64abf7a54dcd4c7d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_82e772acb22f6d7c23e6dddef32ad99110862a9b6c67c64abf7a54dcd4c7d5a0->leave($__internal_82e772acb22f6d7c23e6dddef32ad99110862a9b6c67c64abf7a54dcd4c7d5a0_prof);

        
        $__internal_6e0280442418ab5f8436bcb83c58f9d58bb29c94a8f5412bd6feff7133487ec2->leave($__internal_6e0280442418ab5f8436bcb83c58f9d58bb29c94a8f5412bd6feff7133487ec2_prof);

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
