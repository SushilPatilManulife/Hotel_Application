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
        $__internal_b087c4e13112d0738314fd892a2db95914565656c9f232ba4635eedda4c0af62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b087c4e13112d0738314fd892a2db95914565656c9f232ba4635eedda4c0af62->enter($__internal_b087c4e13112d0738314fd892a2db95914565656c9f232ba4635eedda4c0af62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b8765fe17e486bbd87e1f86d8cf70d0e8247bea3e8693baae934044026f3a4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8765fe17e486bbd87e1f86d8cf70d0e8247bea3e8693baae934044026f3a4e2->enter($__internal_b8765fe17e486bbd87e1f86d8cf70d0e8247bea3e8693baae934044026f3a4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b087c4e13112d0738314fd892a2db95914565656c9f232ba4635eedda4c0af62->leave($__internal_b087c4e13112d0738314fd892a2db95914565656c9f232ba4635eedda4c0af62_prof);

        
        $__internal_b8765fe17e486bbd87e1f86d8cf70d0e8247bea3e8693baae934044026f3a4e2->leave($__internal_b8765fe17e486bbd87e1f86d8cf70d0e8247bea3e8693baae934044026f3a4e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d8223d3cb9bf91ed829fcdd1ab291ab4c96963c11ee6cf6ce42b341d1e6b657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8223d3cb9bf91ed829fcdd1ab291ab4c96963c11ee6cf6ce42b341d1e6b657->enter($__internal_4d8223d3cb9bf91ed829fcdd1ab291ab4c96963c11ee6cf6ce42b341d1e6b657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1268a97c7b48424fcc2834bd3fe463c7ce3ca86691e83c2e49a3af08dc58980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1268a97c7b48424fcc2834bd3fe463c7ce3ca86691e83c2e49a3af08dc58980c->enter($__internal_1268a97c7b48424fcc2834bd3fe463c7ce3ca86691e83c2e49a3af08dc58980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1268a97c7b48424fcc2834bd3fe463c7ce3ca86691e83c2e49a3af08dc58980c->leave($__internal_1268a97c7b48424fcc2834bd3fe463c7ce3ca86691e83c2e49a3af08dc58980c_prof);

        
        $__internal_4d8223d3cb9bf91ed829fcdd1ab291ab4c96963c11ee6cf6ce42b341d1e6b657->leave($__internal_4d8223d3cb9bf91ed829fcdd1ab291ab4c96963c11ee6cf6ce42b341d1e6b657_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ad67436010a77d4a713560dec629e69b0d135c9d222c17216f4827ae6cb683e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad67436010a77d4a713560dec629e69b0d135c9d222c17216f4827ae6cb683e->enter($__internal_5ad67436010a77d4a713560dec629e69b0d135c9d222c17216f4827ae6cb683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da075b5b9f99ec62c10da36ad15d42aed256bda14640431ec80f7d3e1c361705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da075b5b9f99ec62c10da36ad15d42aed256bda14640431ec80f7d3e1c361705->enter($__internal_da075b5b9f99ec62c10da36ad15d42aed256bda14640431ec80f7d3e1c361705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da075b5b9f99ec62c10da36ad15d42aed256bda14640431ec80f7d3e1c361705->leave($__internal_da075b5b9f99ec62c10da36ad15d42aed256bda14640431ec80f7d3e1c361705_prof);

        
        $__internal_5ad67436010a77d4a713560dec629e69b0d135c9d222c17216f4827ae6cb683e->leave($__internal_5ad67436010a77d4a713560dec629e69b0d135c9d222c17216f4827ae6cb683e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085f2979f2eac1575c5b6d58051f6cb9a405048d88d272e4e8165f379d37fd77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085f2979f2eac1575c5b6d58051f6cb9a405048d88d272e4e8165f379d37fd77->enter($__internal_085f2979f2eac1575c5b6d58051f6cb9a405048d88d272e4e8165f379d37fd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0460364ed53335c4e1d18380662adb4453589d715370bc8e3e48ba63e238b210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0460364ed53335c4e1d18380662adb4453589d715370bc8e3e48ba63e238b210->enter($__internal_0460364ed53335c4e1d18380662adb4453589d715370bc8e3e48ba63e238b210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0460364ed53335c4e1d18380662adb4453589d715370bc8e3e48ba63e238b210->leave($__internal_0460364ed53335c4e1d18380662adb4453589d715370bc8e3e48ba63e238b210_prof);

        
        $__internal_085f2979f2eac1575c5b6d58051f6cb9a405048d88d272e4e8165f379d37fd77->leave($__internal_085f2979f2eac1575c5b6d58051f6cb9a405048d88d272e4e8165f379d37fd77_prof);

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
