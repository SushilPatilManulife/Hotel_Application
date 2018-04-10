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
        $__internal_2ffb5cd67957ed31f0ad9271262f58f1422bf7656c26025645a8779a93a42bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffb5cd67957ed31f0ad9271262f58f1422bf7656c26025645a8779a93a42bcb->enter($__internal_2ffb5cd67957ed31f0ad9271262f58f1422bf7656c26025645a8779a93a42bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4b50dc60fa5cf2016471e6a5c60a93aca5eddeeca655787eeef5e96352e9ccb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b50dc60fa5cf2016471e6a5c60a93aca5eddeeca655787eeef5e96352e9ccb5->enter($__internal_4b50dc60fa5cf2016471e6a5c60a93aca5eddeeca655787eeef5e96352e9ccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ffb5cd67957ed31f0ad9271262f58f1422bf7656c26025645a8779a93a42bcb->leave($__internal_2ffb5cd67957ed31f0ad9271262f58f1422bf7656c26025645a8779a93a42bcb_prof);

        
        $__internal_4b50dc60fa5cf2016471e6a5c60a93aca5eddeeca655787eeef5e96352e9ccb5->leave($__internal_4b50dc60fa5cf2016471e6a5c60a93aca5eddeeca655787eeef5e96352e9ccb5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67d222354bdca86f3dd41dfb0b698c78fb8190c4ad6c203758063e0918be3133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d222354bdca86f3dd41dfb0b698c78fb8190c4ad6c203758063e0918be3133->enter($__internal_67d222354bdca86f3dd41dfb0b698c78fb8190c4ad6c203758063e0918be3133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e058503914eaa365ac0288f7e74187ce4f1305288e74648157a445db113d556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e058503914eaa365ac0288f7e74187ce4f1305288e74648157a445db113d556->enter($__internal_6e058503914eaa365ac0288f7e74187ce4f1305288e74648157a445db113d556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e058503914eaa365ac0288f7e74187ce4f1305288e74648157a445db113d556->leave($__internal_6e058503914eaa365ac0288f7e74187ce4f1305288e74648157a445db113d556_prof);

        
        $__internal_67d222354bdca86f3dd41dfb0b698c78fb8190c4ad6c203758063e0918be3133->leave($__internal_67d222354bdca86f3dd41dfb0b698c78fb8190c4ad6c203758063e0918be3133_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90417002b0964d890b7529c183b3bf71109a53ca0fdc258b6ce256c2a9a7dd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90417002b0964d890b7529c183b3bf71109a53ca0fdc258b6ce256c2a9a7dd5f->enter($__internal_90417002b0964d890b7529c183b3bf71109a53ca0fdc258b6ce256c2a9a7dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de1cd5fee1784038defbb224c85996301288e2654b22af77091081cb9f684f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1cd5fee1784038defbb224c85996301288e2654b22af77091081cb9f684f7e->enter($__internal_de1cd5fee1784038defbb224c85996301288e2654b22af77091081cb9f684f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de1cd5fee1784038defbb224c85996301288e2654b22af77091081cb9f684f7e->leave($__internal_de1cd5fee1784038defbb224c85996301288e2654b22af77091081cb9f684f7e_prof);

        
        $__internal_90417002b0964d890b7529c183b3bf71109a53ca0fdc258b6ce256c2a9a7dd5f->leave($__internal_90417002b0964d890b7529c183b3bf71109a53ca0fdc258b6ce256c2a9a7dd5f_prof);

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
