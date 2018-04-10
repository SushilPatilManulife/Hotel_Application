<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_76a0a61208d09a2e90faa27ebdf286130aabbd108e59cb8342499382ac4c8fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b509bc789af12a01b92fb7eeca5a787447539f5d97a34077ef8fa5d56768b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b509bc789af12a01b92fb7eeca5a787447539f5d97a34077ef8fa5d56768b46->enter($__internal_8b509bc789af12a01b92fb7eeca5a787447539f5d97a34077ef8fa5d56768b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e845325f1cce2e96bdfb7c241f382ef6b1137e91ddef8e5b07f782f9ee420bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e845325f1cce2e96bdfb7c241f382ef6b1137e91ddef8e5b07f782f9ee420bab->enter($__internal_e845325f1cce2e96bdfb7c241f382ef6b1137e91ddef8e5b07f782f9ee420bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b509bc789af12a01b92fb7eeca5a787447539f5d97a34077ef8fa5d56768b46->leave($__internal_8b509bc789af12a01b92fb7eeca5a787447539f5d97a34077ef8fa5d56768b46_prof);

        
        $__internal_e845325f1cce2e96bdfb7c241f382ef6b1137e91ddef8e5b07f782f9ee420bab->leave($__internal_e845325f1cce2e96bdfb7c241f382ef6b1137e91ddef8e5b07f782f9ee420bab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a90eefed00e117f6df51957d9ad7d0b3cd894c14c10fec01e4ab3731268cec18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90eefed00e117f6df51957d9ad7d0b3cd894c14c10fec01e4ab3731268cec18->enter($__internal_a90eefed00e117f6df51957d9ad7d0b3cd894c14c10fec01e4ab3731268cec18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7db184ca897fbcfe0988bfa0fc7d95b1dc1580ca16743d5cd5b98cfb61d981e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db184ca897fbcfe0988bfa0fc7d95b1dc1580ca16743d5cd5b98cfb61d981e9->enter($__internal_7db184ca897fbcfe0988bfa0fc7d95b1dc1580ca16743d5cd5b98cfb61d981e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7db184ca897fbcfe0988bfa0fc7d95b1dc1580ca16743d5cd5b98cfb61d981e9->leave($__internal_7db184ca897fbcfe0988bfa0fc7d95b1dc1580ca16743d5cd5b98cfb61d981e9_prof);

        
        $__internal_a90eefed00e117f6df51957d9ad7d0b3cd894c14c10fec01e4ab3731268cec18->leave($__internal_a90eefed00e117f6df51957d9ad7d0b3cd894c14c10fec01e4ab3731268cec18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e04205283cbd1751c0b178d03910919c3141968fbe45b530939c98baabd6322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e04205283cbd1751c0b178d03910919c3141968fbe45b530939c98baabd6322->enter($__internal_2e04205283cbd1751c0b178d03910919c3141968fbe45b530939c98baabd6322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7875b8873b5110b3a594662fd02a0a585127681ce3500c22f916f84374b2695d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7875b8873b5110b3a594662fd02a0a585127681ce3500c22f916f84374b2695d->enter($__internal_7875b8873b5110b3a594662fd02a0a585127681ce3500c22f916f84374b2695d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7875b8873b5110b3a594662fd02a0a585127681ce3500c22f916f84374b2695d->leave($__internal_7875b8873b5110b3a594662fd02a0a585127681ce3500c22f916f84374b2695d_prof);

        
        $__internal_2e04205283cbd1751c0b178d03910919c3141968fbe45b530939c98baabd6322->leave($__internal_2e04205283cbd1751c0b178d03910919c3141968fbe45b530939c98baabd6322_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_863f7f9aa1541123022925171e086da6d042cbeb774f9dcd64e0ac0372f51f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863f7f9aa1541123022925171e086da6d042cbeb774f9dcd64e0ac0372f51f66->enter($__internal_863f7f9aa1541123022925171e086da6d042cbeb774f9dcd64e0ac0372f51f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8577a617f6dbd8cca72bba5576978aed434037f043ae16b0c6e3c9883a695b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8577a617f6dbd8cca72bba5576978aed434037f043ae16b0c6e3c9883a695b6->enter($__internal_e8577a617f6dbd8cca72bba5576978aed434037f043ae16b0c6e3c9883a695b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8577a617f6dbd8cca72bba5576978aed434037f043ae16b0c6e3c9883a695b6->leave($__internal_e8577a617f6dbd8cca72bba5576978aed434037f043ae16b0c6e3c9883a695b6_prof);

        
        $__internal_863f7f9aa1541123022925171e086da6d042cbeb774f9dcd64e0ac0372f51f66->leave($__internal_863f7f9aa1541123022925171e086da6d042cbeb774f9dcd64e0ac0372f51f66_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
