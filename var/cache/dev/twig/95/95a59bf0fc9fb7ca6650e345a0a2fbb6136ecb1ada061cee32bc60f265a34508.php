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
        $__internal_4118b1f73b5f2d3228ba438b2034e1f999229e985c29c5260b901b61098c8082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4118b1f73b5f2d3228ba438b2034e1f999229e985c29c5260b901b61098c8082->enter($__internal_4118b1f73b5f2d3228ba438b2034e1f999229e985c29c5260b901b61098c8082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0b61e580dd27c84e0c7079308f5161da95cb4d2cf206bbc298b413f0c39d7978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b61e580dd27c84e0c7079308f5161da95cb4d2cf206bbc298b413f0c39d7978->enter($__internal_0b61e580dd27c84e0c7079308f5161da95cb4d2cf206bbc298b413f0c39d7978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4118b1f73b5f2d3228ba438b2034e1f999229e985c29c5260b901b61098c8082->leave($__internal_4118b1f73b5f2d3228ba438b2034e1f999229e985c29c5260b901b61098c8082_prof);

        
        $__internal_0b61e580dd27c84e0c7079308f5161da95cb4d2cf206bbc298b413f0c39d7978->leave($__internal_0b61e580dd27c84e0c7079308f5161da95cb4d2cf206bbc298b413f0c39d7978_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5603fba5965e6a547e57d203727a8804869df30769f4c1dfcbd9ba835261a3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5603fba5965e6a547e57d203727a8804869df30769f4c1dfcbd9ba835261a3aa->enter($__internal_5603fba5965e6a547e57d203727a8804869df30769f4c1dfcbd9ba835261a3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fcf80f1ec775fa5d885194ac140d5372bd55c1d46e6194cc610f745516b73255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf80f1ec775fa5d885194ac140d5372bd55c1d46e6194cc610f745516b73255->enter($__internal_fcf80f1ec775fa5d885194ac140d5372bd55c1d46e6194cc610f745516b73255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_fcf80f1ec775fa5d885194ac140d5372bd55c1d46e6194cc610f745516b73255->leave($__internal_fcf80f1ec775fa5d885194ac140d5372bd55c1d46e6194cc610f745516b73255_prof);

        
        $__internal_5603fba5965e6a547e57d203727a8804869df30769f4c1dfcbd9ba835261a3aa->leave($__internal_5603fba5965e6a547e57d203727a8804869df30769f4c1dfcbd9ba835261a3aa_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acf128f7ee2b5e7c030adb6c50dc204b3b7a17cd5700f55e7bf721819ea38b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf128f7ee2b5e7c030adb6c50dc204b3b7a17cd5700f55e7bf721819ea38b2f->enter($__internal_acf128f7ee2b5e7c030adb6c50dc204b3b7a17cd5700f55e7bf721819ea38b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e28068a9c392357533e7102c5c5390092beec5909efbe4d6a97d02e4f562e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e28068a9c392357533e7102c5c5390092beec5909efbe4d6a97d02e4f562e0c->enter($__internal_7e28068a9c392357533e7102c5c5390092beec5909efbe4d6a97d02e4f562e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7e28068a9c392357533e7102c5c5390092beec5909efbe4d6a97d02e4f562e0c->leave($__internal_7e28068a9c392357533e7102c5c5390092beec5909efbe4d6a97d02e4f562e0c_prof);

        
        $__internal_acf128f7ee2b5e7c030adb6c50dc204b3b7a17cd5700f55e7bf721819ea38b2f->leave($__internal_acf128f7ee2b5e7c030adb6c50dc204b3b7a17cd5700f55e7bf721819ea38b2f_prof);

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
