<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10af3e8dfb849655d5659a8116e20e1b3c95f3f1eec3d1c21fe079b5a54e3e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_35ed71d85f38ce2823d5b4bb65805351151fca7cbc3d6613126ac5c6077f12f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ed71d85f38ce2823d5b4bb65805351151fca7cbc3d6613126ac5c6077f12f5->enter($__internal_35ed71d85f38ce2823d5b4bb65805351151fca7cbc3d6613126ac5c6077f12f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_728380c0a04c30d045eeb69ee6f0e16d4e2467d3cfcee2b87ad4940d9a094fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728380c0a04c30d045eeb69ee6f0e16d4e2467d3cfcee2b87ad4940d9a094fc4->enter($__internal_728380c0a04c30d045eeb69ee6f0e16d4e2467d3cfcee2b87ad4940d9a094fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ed71d85f38ce2823d5b4bb65805351151fca7cbc3d6613126ac5c6077f12f5->leave($__internal_35ed71d85f38ce2823d5b4bb65805351151fca7cbc3d6613126ac5c6077f12f5_prof);

        
        $__internal_728380c0a04c30d045eeb69ee6f0e16d4e2467d3cfcee2b87ad4940d9a094fc4->leave($__internal_728380c0a04c30d045eeb69ee6f0e16d4e2467d3cfcee2b87ad4940d9a094fc4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e968a11e401e7ebee757ecc3093b1f3c5d837cb135938fe4771611b368ed457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e968a11e401e7ebee757ecc3093b1f3c5d837cb135938fe4771611b368ed457->enter($__internal_6e968a11e401e7ebee757ecc3093b1f3c5d837cb135938fe4771611b368ed457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6533f63dbd30a2fd38ff9982050c0d7cabe2b33de6d9aa3d72f5f9167fadfe04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6533f63dbd30a2fd38ff9982050c0d7cabe2b33de6d9aa3d72f5f9167fadfe04->enter($__internal_6533f63dbd30a2fd38ff9982050c0d7cabe2b33de6d9aa3d72f5f9167fadfe04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6533f63dbd30a2fd38ff9982050c0d7cabe2b33de6d9aa3d72f5f9167fadfe04->leave($__internal_6533f63dbd30a2fd38ff9982050c0d7cabe2b33de6d9aa3d72f5f9167fadfe04_prof);

        
        $__internal_6e968a11e401e7ebee757ecc3093b1f3c5d837cb135938fe4771611b368ed457->leave($__internal_6e968a11e401e7ebee757ecc3093b1f3c5d837cb135938fe4771611b368ed457_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d8c9981997061d62dabc31530a7e935e499b442fd1e3a09eee1a21f7972dd62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8c9981997061d62dabc31530a7e935e499b442fd1e3a09eee1a21f7972dd62->enter($__internal_0d8c9981997061d62dabc31530a7e935e499b442fd1e3a09eee1a21f7972dd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bc5e6b74e6f5b6ec9d19f3bac56ddbec10fe875ac542bfffc1604b6bdc7cdf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5e6b74e6f5b6ec9d19f3bac56ddbec10fe875ac542bfffc1604b6bdc7cdf14->enter($__internal_bc5e6b74e6f5b6ec9d19f3bac56ddbec10fe875ac542bfffc1604b6bdc7cdf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc5e6b74e6f5b6ec9d19f3bac56ddbec10fe875ac542bfffc1604b6bdc7cdf14->leave($__internal_bc5e6b74e6f5b6ec9d19f3bac56ddbec10fe875ac542bfffc1604b6bdc7cdf14_prof);

        
        $__internal_0d8c9981997061d62dabc31530a7e935e499b442fd1e3a09eee1a21f7972dd62->leave($__internal_0d8c9981997061d62dabc31530a7e935e499b442fd1e3a09eee1a21f7972dd62_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c4eff4bae1c8d90e2b6db3550ba6b2da2eeb48f4703ab4dc7cc04b239930211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4eff4bae1c8d90e2b6db3550ba6b2da2eeb48f4703ab4dc7cc04b239930211->enter($__internal_8c4eff4bae1c8d90e2b6db3550ba6b2da2eeb48f4703ab4dc7cc04b239930211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9a8227a647040a58e4d612c4789416663da8e55f2b1b13d15cb6b867e8ea1805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8227a647040a58e4d612c4789416663da8e55f2b1b13d15cb6b867e8ea1805->enter($__internal_9a8227a647040a58e4d612c4789416663da8e55f2b1b13d15cb6b867e8ea1805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a8227a647040a58e4d612c4789416663da8e55f2b1b13d15cb6b867e8ea1805->leave($__internal_9a8227a647040a58e4d612c4789416663da8e55f2b1b13d15cb6b867e8ea1805_prof);

        
        $__internal_8c4eff4bae1c8d90e2b6db3550ba6b2da2eeb48f4703ab4dc7cc04b239930211->leave($__internal_8c4eff4bae1c8d90e2b6db3550ba6b2da2eeb48f4703ab4dc7cc04b239930211_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
