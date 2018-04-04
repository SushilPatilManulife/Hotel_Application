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
        $__internal_9be593ba72889ccf607220562794e4e91df0094c80cfef7106e3a95415495345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be593ba72889ccf607220562794e4e91df0094c80cfef7106e3a95415495345->enter($__internal_9be593ba72889ccf607220562794e4e91df0094c80cfef7106e3a95415495345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b12ba94b1d523c4c090bd547476e34fceb03ad01faffe5fcd742d6d53f856564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12ba94b1d523c4c090bd547476e34fceb03ad01faffe5fcd742d6d53f856564->enter($__internal_b12ba94b1d523c4c090bd547476e34fceb03ad01faffe5fcd742d6d53f856564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be593ba72889ccf607220562794e4e91df0094c80cfef7106e3a95415495345->leave($__internal_9be593ba72889ccf607220562794e4e91df0094c80cfef7106e3a95415495345_prof);

        
        $__internal_b12ba94b1d523c4c090bd547476e34fceb03ad01faffe5fcd742d6d53f856564->leave($__internal_b12ba94b1d523c4c090bd547476e34fceb03ad01faffe5fcd742d6d53f856564_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12863b0bbd008b7e520f6f8fb13c66457d24c45cdcdb0bcc9979d7be65ca5192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12863b0bbd008b7e520f6f8fb13c66457d24c45cdcdb0bcc9979d7be65ca5192->enter($__internal_12863b0bbd008b7e520f6f8fb13c66457d24c45cdcdb0bcc9979d7be65ca5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e682e82feb0fbfd25bbeee275490f6aee13bdabfbdfa035fe294111c317727b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e682e82feb0fbfd25bbeee275490f6aee13bdabfbdfa035fe294111c317727b1->enter($__internal_e682e82feb0fbfd25bbeee275490f6aee13bdabfbdfa035fe294111c317727b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e682e82feb0fbfd25bbeee275490f6aee13bdabfbdfa035fe294111c317727b1->leave($__internal_e682e82feb0fbfd25bbeee275490f6aee13bdabfbdfa035fe294111c317727b1_prof);

        
        $__internal_12863b0bbd008b7e520f6f8fb13c66457d24c45cdcdb0bcc9979d7be65ca5192->leave($__internal_12863b0bbd008b7e520f6f8fb13c66457d24c45cdcdb0bcc9979d7be65ca5192_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8cc75fe1d8ecd063077fe22629372036cad107aba058a6ea8ee67b5286aa596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cc75fe1d8ecd063077fe22629372036cad107aba058a6ea8ee67b5286aa596->enter($__internal_f8cc75fe1d8ecd063077fe22629372036cad107aba058a6ea8ee67b5286aa596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4aa74df694489cded46e1f76860a320f886cf5207122cc8cd44b3d0806fa3a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa74df694489cded46e1f76860a320f886cf5207122cc8cd44b3d0806fa3a82->enter($__internal_4aa74df694489cded46e1f76860a320f886cf5207122cc8cd44b3d0806fa3a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4aa74df694489cded46e1f76860a320f886cf5207122cc8cd44b3d0806fa3a82->leave($__internal_4aa74df694489cded46e1f76860a320f886cf5207122cc8cd44b3d0806fa3a82_prof);

        
        $__internal_f8cc75fe1d8ecd063077fe22629372036cad107aba058a6ea8ee67b5286aa596->leave($__internal_f8cc75fe1d8ecd063077fe22629372036cad107aba058a6ea8ee67b5286aa596_prof);

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
