<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e4beda9215c84e7b40a336acbfe1f164a69ba1f3151aa9360e8c1be384e87980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4f510d549be75961c35aafb0b3a5a4039f76614cfb26d8881951bfa8442e2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f510d549be75961c35aafb0b3a5a4039f76614cfb26d8881951bfa8442e2e3->enter($__internal_d4f510d549be75961c35aafb0b3a5a4039f76614cfb26d8881951bfa8442e2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b413dedbadd1b9b0f7058ce2a9141333faa29eea1043db66d8da3ea08f7b986e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b413dedbadd1b9b0f7058ce2a9141333faa29eea1043db66d8da3ea08f7b986e->enter($__internal_b413dedbadd1b9b0f7058ce2a9141333faa29eea1043db66d8da3ea08f7b986e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f510d549be75961c35aafb0b3a5a4039f76614cfb26d8881951bfa8442e2e3->leave($__internal_d4f510d549be75961c35aafb0b3a5a4039f76614cfb26d8881951bfa8442e2e3_prof);

        
        $__internal_b413dedbadd1b9b0f7058ce2a9141333faa29eea1043db66d8da3ea08f7b986e->leave($__internal_b413dedbadd1b9b0f7058ce2a9141333faa29eea1043db66d8da3ea08f7b986e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4b03a6cfb3105430741b1851262c8fc94336d46d3f9b49051d0c1b7b5852d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b03a6cfb3105430741b1851262c8fc94336d46d3f9b49051d0c1b7b5852d03->enter($__internal_a4b03a6cfb3105430741b1851262c8fc94336d46d3f9b49051d0c1b7b5852d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e5701f6b0cd1a0fda8cb17443cf3acccbe3ce53928cf5009b22a74663eccb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5701f6b0cd1a0fda8cb17443cf3acccbe3ce53928cf5009b22a74663eccb70->enter($__internal_7e5701f6b0cd1a0fda8cb17443cf3acccbe3ce53928cf5009b22a74663eccb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7e5701f6b0cd1a0fda8cb17443cf3acccbe3ce53928cf5009b22a74663eccb70->leave($__internal_7e5701f6b0cd1a0fda8cb17443cf3acccbe3ce53928cf5009b22a74663eccb70_prof);

        
        $__internal_a4b03a6cfb3105430741b1851262c8fc94336d46d3f9b49051d0c1b7b5852d03->leave($__internal_a4b03a6cfb3105430741b1851262c8fc94336d46d3f9b49051d0c1b7b5852d03_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_661af8f1df298907a57ca415161f06a083f4bb9253047373f7384775ff5b542c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661af8f1df298907a57ca415161f06a083f4bb9253047373f7384775ff5b542c->enter($__internal_661af8f1df298907a57ca415161f06a083f4bb9253047373f7384775ff5b542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e3ab6f80ea7fd451821140c1d1af37bce874fb3311eae0eeead6579d1c5cf3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3ab6f80ea7fd451821140c1d1af37bce874fb3311eae0eeead6579d1c5cf3a->enter($__internal_8e3ab6f80ea7fd451821140c1d1af37bce874fb3311eae0eeead6579d1c5cf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8e3ab6f80ea7fd451821140c1d1af37bce874fb3311eae0eeead6579d1c5cf3a->leave($__internal_8e3ab6f80ea7fd451821140c1d1af37bce874fb3311eae0eeead6579d1c5cf3a_prof);

        
        $__internal_661af8f1df298907a57ca415161f06a083f4bb9253047373f7384775ff5b542c->leave($__internal_661af8f1df298907a57ca415161f06a083f4bb9253047373f7384775ff5b542c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
