<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_47e6449fa531eec7caf6a00904f2b0a99b64ef38972347cc9cd79cb27e2953cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f24ce41e6d1f23e64a57db2f0ac7ab198da7e22073b7aefca7b66b1d9deab09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f24ce41e6d1f23e64a57db2f0ac7ab198da7e22073b7aefca7b66b1d9deab09->enter($__internal_6f24ce41e6d1f23e64a57db2f0ac7ab198da7e22073b7aefca7b66b1d9deab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e233324b8c7df9eeb5288744f648bfc9120a17f8d60ce8363e8e05986faccfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e233324b8c7df9eeb5288744f648bfc9120a17f8d60ce8363e8e05986faccfec->enter($__internal_e233324b8c7df9eeb5288744f648bfc9120a17f8d60ce8363e8e05986faccfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f24ce41e6d1f23e64a57db2f0ac7ab198da7e22073b7aefca7b66b1d9deab09->leave($__internal_6f24ce41e6d1f23e64a57db2f0ac7ab198da7e22073b7aefca7b66b1d9deab09_prof);

        
        $__internal_e233324b8c7df9eeb5288744f648bfc9120a17f8d60ce8363e8e05986faccfec->leave($__internal_e233324b8c7df9eeb5288744f648bfc9120a17f8d60ce8363e8e05986faccfec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f5d1ad902781726ee08d04c200f35e7db5bf1954b3f078ab4fc79becbff5dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5d1ad902781726ee08d04c200f35e7db5bf1954b3f078ab4fc79becbff5dfc->enter($__internal_3f5d1ad902781726ee08d04c200f35e7db5bf1954b3f078ab4fc79becbff5dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a778d36f26c8462240b23a37705b4a63840ac911a2e9cdd2536c348a6cb40a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a778d36f26c8462240b23a37705b4a63840ac911a2e9cdd2536c348a6cb40a27->enter($__internal_a778d36f26c8462240b23a37705b4a63840ac911a2e9cdd2536c348a6cb40a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a778d36f26c8462240b23a37705b4a63840ac911a2e9cdd2536c348a6cb40a27->leave($__internal_a778d36f26c8462240b23a37705b4a63840ac911a2e9cdd2536c348a6cb40a27_prof);

        
        $__internal_3f5d1ad902781726ee08d04c200f35e7db5bf1954b3f078ab4fc79becbff5dfc->leave($__internal_3f5d1ad902781726ee08d04c200f35e7db5bf1954b3f078ab4fc79becbff5dfc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
