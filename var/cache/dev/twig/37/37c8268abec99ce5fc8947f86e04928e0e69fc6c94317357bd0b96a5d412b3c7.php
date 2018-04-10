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
        $__internal_eca89a9dea27fa570476821ea85369c9fde3c64e6612b7599c18fdd4a8408491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca89a9dea27fa570476821ea85369c9fde3c64e6612b7599c18fdd4a8408491->enter($__internal_eca89a9dea27fa570476821ea85369c9fde3c64e6612b7599c18fdd4a8408491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4464bef2f23c4e1ebf2855f8edb46a470a844970e9a24f6cc53d2f8320dee624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4464bef2f23c4e1ebf2855f8edb46a470a844970e9a24f6cc53d2f8320dee624->enter($__internal_4464bef2f23c4e1ebf2855f8edb46a470a844970e9a24f6cc53d2f8320dee624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eca89a9dea27fa570476821ea85369c9fde3c64e6612b7599c18fdd4a8408491->leave($__internal_eca89a9dea27fa570476821ea85369c9fde3c64e6612b7599c18fdd4a8408491_prof);

        
        $__internal_4464bef2f23c4e1ebf2855f8edb46a470a844970e9a24f6cc53d2f8320dee624->leave($__internal_4464bef2f23c4e1ebf2855f8edb46a470a844970e9a24f6cc53d2f8320dee624_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51b305e1951571de624a461134131fe703bc026179db1586eec3ae2452006239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b305e1951571de624a461134131fe703bc026179db1586eec3ae2452006239->enter($__internal_51b305e1951571de624a461134131fe703bc026179db1586eec3ae2452006239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7c51ec4841e70ef1ef2fecd2bcd851a5bd92695be1fe113f3d80915397208d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c51ec4841e70ef1ef2fecd2bcd851a5bd92695be1fe113f3d80915397208d0->enter($__internal_c7c51ec4841e70ef1ef2fecd2bcd851a5bd92695be1fe113f3d80915397208d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7c51ec4841e70ef1ef2fecd2bcd851a5bd92695be1fe113f3d80915397208d0->leave($__internal_c7c51ec4841e70ef1ef2fecd2bcd851a5bd92695be1fe113f3d80915397208d0_prof);

        
        $__internal_51b305e1951571de624a461134131fe703bc026179db1586eec3ae2452006239->leave($__internal_51b305e1951571de624a461134131fe703bc026179db1586eec3ae2452006239_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6acd5824367142721340df5bb1ef134b8f968055909cf343d31a2a863a814a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acd5824367142721340df5bb1ef134b8f968055909cf343d31a2a863a814a04->enter($__internal_6acd5824367142721340df5bb1ef134b8f968055909cf343d31a2a863a814a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e96453a33f9acc2cbb8a46e8b1c5286023c0a85d931573ae274b37c94840f927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96453a33f9acc2cbb8a46e8b1c5286023c0a85d931573ae274b37c94840f927->enter($__internal_e96453a33f9acc2cbb8a46e8b1c5286023c0a85d931573ae274b37c94840f927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e96453a33f9acc2cbb8a46e8b1c5286023c0a85d931573ae274b37c94840f927->leave($__internal_e96453a33f9acc2cbb8a46e8b1c5286023c0a85d931573ae274b37c94840f927_prof);

        
        $__internal_6acd5824367142721340df5bb1ef134b8f968055909cf343d31a2a863a814a04->leave($__internal_6acd5824367142721340df5bb1ef134b8f968055909cf343d31a2a863a814a04_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9895593380b1ac753f9b764fe5eadd50764430c8bcb36a23f279931e06528e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9895593380b1ac753f9b764fe5eadd50764430c8bcb36a23f279931e06528e9->enter($__internal_e9895593380b1ac753f9b764fe5eadd50764430c8bcb36a23f279931e06528e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52780d4c882d719954aa1b5e59a1096f3292093d27938dae3ef9c7229512b585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52780d4c882d719954aa1b5e59a1096f3292093d27938dae3ef9c7229512b585->enter($__internal_52780d4c882d719954aa1b5e59a1096f3292093d27938dae3ef9c7229512b585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52780d4c882d719954aa1b5e59a1096f3292093d27938dae3ef9c7229512b585->leave($__internal_52780d4c882d719954aa1b5e59a1096f3292093d27938dae3ef9c7229512b585_prof);

        
        $__internal_e9895593380b1ac753f9b764fe5eadd50764430c8bcb36a23f279931e06528e9->leave($__internal_e9895593380b1ac753f9b764fe5eadd50764430c8bcb36a23f279931e06528e9_prof);

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
