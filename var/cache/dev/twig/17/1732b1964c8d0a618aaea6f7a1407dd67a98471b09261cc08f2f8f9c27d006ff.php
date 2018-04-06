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
        $__internal_a1654e1101de2f6c33512971a3d6249baf00d23e2d4369cbd55fc64b830eeeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1654e1101de2f6c33512971a3d6249baf00d23e2d4369cbd55fc64b830eeeb1->enter($__internal_a1654e1101de2f6c33512971a3d6249baf00d23e2d4369cbd55fc64b830eeeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_7959116353c7d9c5950bfa17be8240d1c0bfd5ae97eeebb92427bbab72043f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7959116353c7d9c5950bfa17be8240d1c0bfd5ae97eeebb92427bbab72043f72->enter($__internal_7959116353c7d9c5950bfa17be8240d1c0bfd5ae97eeebb92427bbab72043f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1654e1101de2f6c33512971a3d6249baf00d23e2d4369cbd55fc64b830eeeb1->leave($__internal_a1654e1101de2f6c33512971a3d6249baf00d23e2d4369cbd55fc64b830eeeb1_prof);

        
        $__internal_7959116353c7d9c5950bfa17be8240d1c0bfd5ae97eeebb92427bbab72043f72->leave($__internal_7959116353c7d9c5950bfa17be8240d1c0bfd5ae97eeebb92427bbab72043f72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_507bac66ddcf1b5d16aee7d43e8d2fa8918a4eb468e1f01b34cc5c4d34677196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507bac66ddcf1b5d16aee7d43e8d2fa8918a4eb468e1f01b34cc5c4d34677196->enter($__internal_507bac66ddcf1b5d16aee7d43e8d2fa8918a4eb468e1f01b34cc5c4d34677196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ab4454a0b0b4ffec3fd3701b959b2b9b17c38d28b15fd3a5c99cb02bc8f42bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab4454a0b0b4ffec3fd3701b959b2b9b17c38d28b15fd3a5c99cb02bc8f42bb->enter($__internal_1ab4454a0b0b4ffec3fd3701b959b2b9b17c38d28b15fd3a5c99cb02bc8f42bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ab4454a0b0b4ffec3fd3701b959b2b9b17c38d28b15fd3a5c99cb02bc8f42bb->leave($__internal_1ab4454a0b0b4ffec3fd3701b959b2b9b17c38d28b15fd3a5c99cb02bc8f42bb_prof);

        
        $__internal_507bac66ddcf1b5d16aee7d43e8d2fa8918a4eb468e1f01b34cc5c4d34677196->leave($__internal_507bac66ddcf1b5d16aee7d43e8d2fa8918a4eb468e1f01b34cc5c4d34677196_prof);

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
