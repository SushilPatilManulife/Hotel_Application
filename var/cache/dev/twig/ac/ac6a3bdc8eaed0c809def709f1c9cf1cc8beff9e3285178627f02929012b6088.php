<?php

/* :admin:index.html.twig */
class __TwigTemplate_f816057ddadc0abb622ed53bb6933dbb1f8c8c1cc41d672e8050d1126a9ff577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_251ae853e04101da477f43204c966e1f3a8600db3361ecbc279a0cc1a87145eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251ae853e04101da477f43204c966e1f3a8600db3361ecbc279a0cc1a87145eb->enter($__internal_251ae853e04101da477f43204c966e1f3a8600db3361ecbc279a0cc1a87145eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_8fea7b9f1d6466261f68d0b259fc3642c227850419a9ac67377ab291594544cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fea7b9f1d6466261f68d0b259fc3642c227850419a9ac67377ab291594544cc->enter($__internal_8fea7b9f1d6466261f68d0b259fc3642c227850419a9ac67377ab291594544cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251ae853e04101da477f43204c966e1f3a8600db3361ecbc279a0cc1a87145eb->leave($__internal_251ae853e04101da477f43204c966e1f3a8600db3361ecbc279a0cc1a87145eb_prof);

        
        $__internal_8fea7b9f1d6466261f68d0b259fc3642c227850419a9ac67377ab291594544cc->leave($__internal_8fea7b9f1d6466261f68d0b259fc3642c227850419a9ac67377ab291594544cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a4959f5fbf3c699b67acc250c2950bb79b22d0626998f02ba2d8fc13a2afdc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4959f5fbf3c699b67acc250c2950bb79b22d0626998f02ba2d8fc13a2afdc5->enter($__internal_8a4959f5fbf3c699b67acc250c2950bb79b22d0626998f02ba2d8fc13a2afdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2fffcb2ebee0cc605efd497a3e43b546a7977106be36ce6d9862bf30a2047d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fffcb2ebee0cc605efd497a3e43b546a7977106be36ce6d9862bf30a2047d3->enter($__internal_f2fffcb2ebee0cc605efd497a3e43b546a7977106be36ce6d9862bf30a2047d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_f2fffcb2ebee0cc605efd497a3e43b546a7977106be36ce6d9862bf30a2047d3->leave($__internal_f2fffcb2ebee0cc605efd497a3e43b546a7977106be36ce6d9862bf30a2047d3_prof);

        
        $__internal_8a4959f5fbf3c699b67acc250c2950bb79b22d0626998f02ba2d8fc13a2afdc5->leave($__internal_8a4959f5fbf3c699b67acc250c2950bb79b22d0626998f02ba2d8fc13a2afdc5_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", ":admin:index.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/admin/index.html.twig");
    }
}
