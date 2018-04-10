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
        $__internal_76ed7c5569bec852749ebabed6eb2e3989cf99e0af1b30ef142057edfc9e4e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ed7c5569bec852749ebabed6eb2e3989cf99e0af1b30ef142057edfc9e4e16->enter($__internal_76ed7c5569bec852749ebabed6eb2e3989cf99e0af1b30ef142057edfc9e4e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a808a4c78861e3fcee8b5c96f3a8dc0401ca93f752ccfa101ca5432716ac0808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a808a4c78861e3fcee8b5c96f3a8dc0401ca93f752ccfa101ca5432716ac0808->enter($__internal_a808a4c78861e3fcee8b5c96f3a8dc0401ca93f752ccfa101ca5432716ac0808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ed7c5569bec852749ebabed6eb2e3989cf99e0af1b30ef142057edfc9e4e16->leave($__internal_76ed7c5569bec852749ebabed6eb2e3989cf99e0af1b30ef142057edfc9e4e16_prof);

        
        $__internal_a808a4c78861e3fcee8b5c96f3a8dc0401ca93f752ccfa101ca5432716ac0808->leave($__internal_a808a4c78861e3fcee8b5c96f3a8dc0401ca93f752ccfa101ca5432716ac0808_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63b834cfe633ef57f47e5081fe8f719633c312fdaed2670d032fbccd2c0234e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b834cfe633ef57f47e5081fe8f719633c312fdaed2670d032fbccd2c0234e2->enter($__internal_63b834cfe633ef57f47e5081fe8f719633c312fdaed2670d032fbccd2c0234e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ba20b7214872344a9f963da5b6af3cbd048d33b4bf79cc841319a223a7fba85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba20b7214872344a9f963da5b6af3cbd048d33b4bf79cc841319a223a7fba85->enter($__internal_7ba20b7214872344a9f963da5b6af3cbd048d33b4bf79cc841319a223a7fba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ba20b7214872344a9f963da5b6af3cbd048d33b4bf79cc841319a223a7fba85->leave($__internal_7ba20b7214872344a9f963da5b6af3cbd048d33b4bf79cc841319a223a7fba85_prof);

        
        $__internal_63b834cfe633ef57f47e5081fe8f719633c312fdaed2670d032fbccd2c0234e2->leave($__internal_63b834cfe633ef57f47e5081fe8f719633c312fdaed2670d032fbccd2c0234e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_33ce2b669944727b1fd90c1989b0dfe8411d61acd08ca4445140edd49d3fbbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ce2b669944727b1fd90c1989b0dfe8411d61acd08ca4445140edd49d3fbbd3->enter($__internal_33ce2b669944727b1fd90c1989b0dfe8411d61acd08ca4445140edd49d3fbbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fb35248335143ba7ec5a1b6b2c500ff024ffd4ebfc18f983cca2606af59d3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb35248335143ba7ec5a1b6b2c500ff024ffd4ebfc18f983cca2606af59d3fb->enter($__internal_1fb35248335143ba7ec5a1b6b2c500ff024ffd4ebfc18f983cca2606af59d3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fb35248335143ba7ec5a1b6b2c500ff024ffd4ebfc18f983cca2606af59d3fb->leave($__internal_1fb35248335143ba7ec5a1b6b2c500ff024ffd4ebfc18f983cca2606af59d3fb_prof);

        
        $__internal_33ce2b669944727b1fd90c1989b0dfe8411d61acd08ca4445140edd49d3fbbd3->leave($__internal_33ce2b669944727b1fd90c1989b0dfe8411d61acd08ca4445140edd49d3fbbd3_prof);

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
