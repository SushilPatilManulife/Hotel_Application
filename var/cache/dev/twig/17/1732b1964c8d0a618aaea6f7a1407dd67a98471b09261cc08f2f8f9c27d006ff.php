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
        $__internal_67b954ec0d659aa1f1d30f9585ff555a228eecbcc5e5a8f4b2d3ceb6aa8b8cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b954ec0d659aa1f1d30f9585ff555a228eecbcc5e5a8f4b2d3ceb6aa8b8cfd->enter($__internal_67b954ec0d659aa1f1d30f9585ff555a228eecbcc5e5a8f4b2d3ceb6aa8b8cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_8e6134fc9b174086ae36b03a39478b376c70d2eb6422c3acef353c5c6fb96444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6134fc9b174086ae36b03a39478b376c70d2eb6422c3acef353c5c6fb96444->enter($__internal_8e6134fc9b174086ae36b03a39478b376c70d2eb6422c3acef353c5c6fb96444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67b954ec0d659aa1f1d30f9585ff555a228eecbcc5e5a8f4b2d3ceb6aa8b8cfd->leave($__internal_67b954ec0d659aa1f1d30f9585ff555a228eecbcc5e5a8f4b2d3ceb6aa8b8cfd_prof);

        
        $__internal_8e6134fc9b174086ae36b03a39478b376c70d2eb6422c3acef353c5c6fb96444->leave($__internal_8e6134fc9b174086ae36b03a39478b376c70d2eb6422c3acef353c5c6fb96444_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_616d442e178a99837a02d38698c75951138e8ef2a6ed53a2daf0bd6e5b2f11af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616d442e178a99837a02d38698c75951138e8ef2a6ed53a2daf0bd6e5b2f11af->enter($__internal_616d442e178a99837a02d38698c75951138e8ef2a6ed53a2daf0bd6e5b2f11af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26a22ec65efd162c3505911f227dd67f19ee573dcd9e8cb882141369b97c2944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a22ec65efd162c3505911f227dd67f19ee573dcd9e8cb882141369b97c2944->enter($__internal_26a22ec65efd162c3505911f227dd67f19ee573dcd9e8cb882141369b97c2944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26a22ec65efd162c3505911f227dd67f19ee573dcd9e8cb882141369b97c2944->leave($__internal_26a22ec65efd162c3505911f227dd67f19ee573dcd9e8cb882141369b97c2944_prof);

        
        $__internal_616d442e178a99837a02d38698c75951138e8ef2a6ed53a2daf0bd6e5b2f11af->leave($__internal_616d442e178a99837a02d38698c75951138e8ef2a6ed53a2daf0bd6e5b2f11af_prof);

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
