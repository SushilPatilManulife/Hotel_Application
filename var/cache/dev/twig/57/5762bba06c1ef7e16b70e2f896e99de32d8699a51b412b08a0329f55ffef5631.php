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
        $__internal_704a523c5afeefae4be4277618ffa6ce453c1f641a60951e96addfee4578e81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704a523c5afeefae4be4277618ffa6ce453c1f641a60951e96addfee4578e81f->enter($__internal_704a523c5afeefae4be4277618ffa6ce453c1f641a60951e96addfee4578e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_cab6cbc78cb1354a2230a212f9b9e09cd5ad4543aba437b7e375e899500a369a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab6cbc78cb1354a2230a212f9b9e09cd5ad4543aba437b7e375e899500a369a->enter($__internal_cab6cbc78cb1354a2230a212f9b9e09cd5ad4543aba437b7e375e899500a369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_704a523c5afeefae4be4277618ffa6ce453c1f641a60951e96addfee4578e81f->leave($__internal_704a523c5afeefae4be4277618ffa6ce453c1f641a60951e96addfee4578e81f_prof);

        
        $__internal_cab6cbc78cb1354a2230a212f9b9e09cd5ad4543aba437b7e375e899500a369a->leave($__internal_cab6cbc78cb1354a2230a212f9b9e09cd5ad4543aba437b7e375e899500a369a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f46f57694be0bd9cf61e37c3c590c0a4518930aaac7d882e7d58510cda1ffea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46f57694be0bd9cf61e37c3c590c0a4518930aaac7d882e7d58510cda1ffea3->enter($__internal_f46f57694be0bd9cf61e37c3c590c0a4518930aaac7d882e7d58510cda1ffea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_43c1778af83d595d42d59dd8c5f1d94483594416203336660300f45f0d4dc47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c1778af83d595d42d59dd8c5f1d94483594416203336660300f45f0d4dc47f->enter($__internal_43c1778af83d595d42d59dd8c5f1d94483594416203336660300f45f0d4dc47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_43c1778af83d595d42d59dd8c5f1d94483594416203336660300f45f0d4dc47f->leave($__internal_43c1778af83d595d42d59dd8c5f1d94483594416203336660300f45f0d4dc47f_prof);

        
        $__internal_f46f57694be0bd9cf61e37c3c590c0a4518930aaac7d882e7d58510cda1ffea3->leave($__internal_f46f57694be0bd9cf61e37c3c590c0a4518930aaac7d882e7d58510cda1ffea3_prof);

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
