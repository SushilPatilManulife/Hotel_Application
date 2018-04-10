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
        $__internal_b5592ab433572b8dd776f0132f605582d0979487e1a56fba4a9fc540457fc8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5592ab433572b8dd776f0132f605582d0979487e1a56fba4a9fc540457fc8db->enter($__internal_b5592ab433572b8dd776f0132f605582d0979487e1a56fba4a9fc540457fc8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_fa06d5d691bc44eb4f254fd46cb372faaf44ff147cc03fbf99c7fc019c31a206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa06d5d691bc44eb4f254fd46cb372faaf44ff147cc03fbf99c7fc019c31a206->enter($__internal_fa06d5d691bc44eb4f254fd46cb372faaf44ff147cc03fbf99c7fc019c31a206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5592ab433572b8dd776f0132f605582d0979487e1a56fba4a9fc540457fc8db->leave($__internal_b5592ab433572b8dd776f0132f605582d0979487e1a56fba4a9fc540457fc8db_prof);

        
        $__internal_fa06d5d691bc44eb4f254fd46cb372faaf44ff147cc03fbf99c7fc019c31a206->leave($__internal_fa06d5d691bc44eb4f254fd46cb372faaf44ff147cc03fbf99c7fc019c31a206_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ef85c03b94f8ac473093e29d8a33f2c511819b09dd7ab2f4743e2b1c9ae4139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef85c03b94f8ac473093e29d8a33f2c511819b09dd7ab2f4743e2b1c9ae4139->enter($__internal_4ef85c03b94f8ac473093e29d8a33f2c511819b09dd7ab2f4743e2b1c9ae4139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1524b477034e3e1109d815c192b42c73a7d0c2ab2562423c2c6956c412c031b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1524b477034e3e1109d815c192b42c73a7d0c2ab2562423c2c6956c412c031b3->enter($__internal_1524b477034e3e1109d815c192b42c73a7d0c2ab2562423c2c6956c412c031b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1524b477034e3e1109d815c192b42c73a7d0c2ab2562423c2c6956c412c031b3->leave($__internal_1524b477034e3e1109d815c192b42c73a7d0c2ab2562423c2c6956c412c031b3_prof);

        
        $__internal_4ef85c03b94f8ac473093e29d8a33f2c511819b09dd7ab2f4743e2b1c9ae4139->leave($__internal_4ef85c03b94f8ac473093e29d8a33f2c511819b09dd7ab2f4743e2b1c9ae4139_prof);

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
