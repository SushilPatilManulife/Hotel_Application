<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e3c89a017546225be6ff802d4cbb543366caccaec2504cc84da88bf50151e186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_48722a1b5d5254d30eaa763e7078c3a59d8559d5a46fca691a08059fff2a7f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48722a1b5d5254d30eaa763e7078c3a59d8559d5a46fca691a08059fff2a7f8d->enter($__internal_48722a1b5d5254d30eaa763e7078c3a59d8559d5a46fca691a08059fff2a7f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c5c9e82aa3b42b10a9c849d3811499fa56c56cd0fc82c010124a29c6d96508ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c9e82aa3b42b10a9c849d3811499fa56c56cd0fc82c010124a29c6d96508ba->enter($__internal_c5c9e82aa3b42b10a9c849d3811499fa56c56cd0fc82c010124a29c6d96508ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48722a1b5d5254d30eaa763e7078c3a59d8559d5a46fca691a08059fff2a7f8d->leave($__internal_48722a1b5d5254d30eaa763e7078c3a59d8559d5a46fca691a08059fff2a7f8d_prof);

        
        $__internal_c5c9e82aa3b42b10a9c849d3811499fa56c56cd0fc82c010124a29c6d96508ba->leave($__internal_c5c9e82aa3b42b10a9c849d3811499fa56c56cd0fc82c010124a29c6d96508ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_293ad751b839fbb41943364b74b0590ce2f359290c39d91cb188f17157ad75e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293ad751b839fbb41943364b74b0590ce2f359290c39d91cb188f17157ad75e7->enter($__internal_293ad751b839fbb41943364b74b0590ce2f359290c39d91cb188f17157ad75e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7af710b3efd5726cd453b532603c2b942f2e20941ac27980a1dd17ccf7c0c6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af710b3efd5726cd453b532603c2b942f2e20941ac27980a1dd17ccf7c0c6f3->enter($__internal_7af710b3efd5726cd453b532603c2b942f2e20941ac27980a1dd17ccf7c0c6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7af710b3efd5726cd453b532603c2b942f2e20941ac27980a1dd17ccf7c0c6f3->leave($__internal_7af710b3efd5726cd453b532603c2b942f2e20941ac27980a1dd17ccf7c0c6f3_prof);

        
        $__internal_293ad751b839fbb41943364b74b0590ce2f359290c39d91cb188f17157ad75e7->leave($__internal_293ad751b839fbb41943364b74b0590ce2f359290c39d91cb188f17157ad75e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9dba888ca056fdb8f4fb2330446a6935d8e6c3a1df43af45d77293bcfec5514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9dba888ca056fdb8f4fb2330446a6935d8e6c3a1df43af45d77293bcfec5514->enter($__internal_b9dba888ca056fdb8f4fb2330446a6935d8e6c3a1df43af45d77293bcfec5514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4ac0bb398409453d7fdd8cfe3bd912ac7c5a7ff6a3136c8f63d75c462a70896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ac0bb398409453d7fdd8cfe3bd912ac7c5a7ff6a3136c8f63d75c462a70896->enter($__internal_c4ac0bb398409453d7fdd8cfe3bd912ac7c5a7ff6a3136c8f63d75c462a70896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4ac0bb398409453d7fdd8cfe3bd912ac7c5a7ff6a3136c8f63d75c462a70896->leave($__internal_c4ac0bb398409453d7fdd8cfe3bd912ac7c5a7ff6a3136c8f63d75c462a70896_prof);

        
        $__internal_b9dba888ca056fdb8f4fb2330446a6935d8e6c3a1df43af45d77293bcfec5514->leave($__internal_b9dba888ca056fdb8f4fb2330446a6935d8e6c3a1df43af45d77293bcfec5514_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
