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
        $__internal_928727f0dafacc483f5ba76e4e1d730ca30c2e0e77ffd83daebfa2e923deb248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928727f0dafacc483f5ba76e4e1d730ca30c2e0e77ffd83daebfa2e923deb248->enter($__internal_928727f0dafacc483f5ba76e4e1d730ca30c2e0e77ffd83daebfa2e923deb248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_1c0aee36ca9ec1f0e4c91dfa887bcf75c99d00c58ef78d6c485cb5ed3388fa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0aee36ca9ec1f0e4c91dfa887bcf75c99d00c58ef78d6c485cb5ed3388fa1d->enter($__internal_1c0aee36ca9ec1f0e4c91dfa887bcf75c99d00c58ef78d6c485cb5ed3388fa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928727f0dafacc483f5ba76e4e1d730ca30c2e0e77ffd83daebfa2e923deb248->leave($__internal_928727f0dafacc483f5ba76e4e1d730ca30c2e0e77ffd83daebfa2e923deb248_prof);

        
        $__internal_1c0aee36ca9ec1f0e4c91dfa887bcf75c99d00c58ef78d6c485cb5ed3388fa1d->leave($__internal_1c0aee36ca9ec1f0e4c91dfa887bcf75c99d00c58ef78d6c485cb5ed3388fa1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26fdf6cb9eeecb4d8cbadf1a3b2ba7acb15e94f3d48e6dc6d4aaf64247fd2a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fdf6cb9eeecb4d8cbadf1a3b2ba7acb15e94f3d48e6dc6d4aaf64247fd2a2c->enter($__internal_26fdf6cb9eeecb4d8cbadf1a3b2ba7acb15e94f3d48e6dc6d4aaf64247fd2a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39d1ff88d928b9ef673393fe57ba325812cd6894c2eac2998085b459de13a6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d1ff88d928b9ef673393fe57ba325812cd6894c2eac2998085b459de13a6bc->enter($__internal_39d1ff88d928b9ef673393fe57ba325812cd6894c2eac2998085b459de13a6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_39d1ff88d928b9ef673393fe57ba325812cd6894c2eac2998085b459de13a6bc->leave($__internal_39d1ff88d928b9ef673393fe57ba325812cd6894c2eac2998085b459de13a6bc_prof);

        
        $__internal_26fdf6cb9eeecb4d8cbadf1a3b2ba7acb15e94f3d48e6dc6d4aaf64247fd2a2c->leave($__internal_26fdf6cb9eeecb4d8cbadf1a3b2ba7acb15e94f3d48e6dc6d4aaf64247fd2a2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11deb74dd7724bc81990e7f5d371e1b9dedea23a52324a80f66a95ae8a47fbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11deb74dd7724bc81990e7f5d371e1b9dedea23a52324a80f66a95ae8a47fbf6->enter($__internal_11deb74dd7724bc81990e7f5d371e1b9dedea23a52324a80f66a95ae8a47fbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5ab6eb284e6a098cc8c7980d15f85a2653bf9dfcf53f4b6cb4412bef7a1668c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ab6eb284e6a098cc8c7980d15f85a2653bf9dfcf53f4b6cb4412bef7a1668c->enter($__internal_d5ab6eb284e6a098cc8c7980d15f85a2653bf9dfcf53f4b6cb4412bef7a1668c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d5ab6eb284e6a098cc8c7980d15f85a2653bf9dfcf53f4b6cb4412bef7a1668c->leave($__internal_d5ab6eb284e6a098cc8c7980d15f85a2653bf9dfcf53f4b6cb4412bef7a1668c_prof);

        
        $__internal_11deb74dd7724bc81990e7f5d371e1b9dedea23a52324a80f66a95ae8a47fbf6->leave($__internal_11deb74dd7724bc81990e7f5d371e1b9dedea23a52324a80f66a95ae8a47fbf6_prof);

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
