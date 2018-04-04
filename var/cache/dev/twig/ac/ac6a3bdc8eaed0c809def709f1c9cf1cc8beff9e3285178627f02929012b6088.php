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
        $__internal_0dfc0f6cda3010b112e1e05645eb7be624690938aaba626842a77a0a249489aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dfc0f6cda3010b112e1e05645eb7be624690938aaba626842a77a0a249489aa->enter($__internal_0dfc0f6cda3010b112e1e05645eb7be624690938aaba626842a77a0a249489aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_b5a7015bbe30465ebe156b49171298ddf4de39d66aceb67588dec16492bf647f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a7015bbe30465ebe156b49171298ddf4de39d66aceb67588dec16492bf647f->enter($__internal_b5a7015bbe30465ebe156b49171298ddf4de39d66aceb67588dec16492bf647f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dfc0f6cda3010b112e1e05645eb7be624690938aaba626842a77a0a249489aa->leave($__internal_0dfc0f6cda3010b112e1e05645eb7be624690938aaba626842a77a0a249489aa_prof);

        
        $__internal_b5a7015bbe30465ebe156b49171298ddf4de39d66aceb67588dec16492bf647f->leave($__internal_b5a7015bbe30465ebe156b49171298ddf4de39d66aceb67588dec16492bf647f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a8677ddd07c1a907ae10fa1ec1865fb2ef124d58a10c5f23f6e9d21cc0564cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8677ddd07c1a907ae10fa1ec1865fb2ef124d58a10c5f23f6e9d21cc0564cf->enter($__internal_0a8677ddd07c1a907ae10fa1ec1865fb2ef124d58a10c5f23f6e9d21cc0564cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e85b1f8430a9d1d0afbd16e2c7fe949b785f3aa25f719dcce6adbfaa13963224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85b1f8430a9d1d0afbd16e2c7fe949b785f3aa25f719dcce6adbfaa13963224->enter($__internal_e85b1f8430a9d1d0afbd16e2c7fe949b785f3aa25f719dcce6adbfaa13963224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e85b1f8430a9d1d0afbd16e2c7fe949b785f3aa25f719dcce6adbfaa13963224->leave($__internal_e85b1f8430a9d1d0afbd16e2c7fe949b785f3aa25f719dcce6adbfaa13963224_prof);

        
        $__internal_0a8677ddd07c1a907ae10fa1ec1865fb2ef124d58a10c5f23f6e9d21cc0564cf->leave($__internal_0a8677ddd07c1a907ae10fa1ec1865fb2ef124d58a10c5f23f6e9d21cc0564cf_prof);

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
