<?php

/* admin/index.html.twig */
class __TwigTemplate_da8a5278adb9734a6db7c1ded1578f13489213fb57626f175519236556bf4515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_e7331fd34987689b4c7572255e36dbd6285cc3ce04ec91e99c5a88667018fbc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7331fd34987689b4c7572255e36dbd6285cc3ce04ec91e99c5a88667018fbc2->enter($__internal_e7331fd34987689b4c7572255e36dbd6285cc3ce04ec91e99c5a88667018fbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_68816d8c744a212c8a3c93ccc8e8954c9d4c09255d3b6f1af4a9e0990afe87ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68816d8c744a212c8a3c93ccc8e8954c9d4c09255d3b6f1af4a9e0990afe87ad->enter($__internal_68816d8c744a212c8a3c93ccc8e8954c9d4c09255d3b6f1af4a9e0990afe87ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7331fd34987689b4c7572255e36dbd6285cc3ce04ec91e99c5a88667018fbc2->leave($__internal_e7331fd34987689b4c7572255e36dbd6285cc3ce04ec91e99c5a88667018fbc2_prof);

        
        $__internal_68816d8c744a212c8a3c93ccc8e8954c9d4c09255d3b6f1af4a9e0990afe87ad->leave($__internal_68816d8c744a212c8a3c93ccc8e8954c9d4c09255d3b6f1af4a9e0990afe87ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6245de86faac5ceef6d9b682ea78ea3d97fc948456bb2b086f1f4c5cba15d372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6245de86faac5ceef6d9b682ea78ea3d97fc948456bb2b086f1f4c5cba15d372->enter($__internal_6245de86faac5ceef6d9b682ea78ea3d97fc948456bb2b086f1f4c5cba15d372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc524a24be65add98bc9351bd6b7e4389ae14aac189cf009bf16d7a24b991c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc524a24be65add98bc9351bd6b7e4389ae14aac189cf009bf16d7a24b991c51->enter($__internal_fc524a24be65add98bc9351bd6b7e4389ae14aac189cf009bf16d7a24b991c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc524a24be65add98bc9351bd6b7e4389ae14aac189cf009bf16d7a24b991c51->leave($__internal_fc524a24be65add98bc9351bd6b7e4389ae14aac189cf009bf16d7a24b991c51_prof);

        
        $__internal_6245de86faac5ceef6d9b682ea78ea3d97fc948456bb2b086f1f4c5cba15d372->leave($__internal_6245de86faac5ceef6d9b682ea78ea3d97fc948456bb2b086f1f4c5cba15d372_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
", "admin/index.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
