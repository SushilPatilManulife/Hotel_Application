<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_46e7f47eab00ff1f202ef6819f44261259ca9bcda702291bffcbcea27e745c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a49632059a0e93d966a3ab8bcf3834d386d66357f0de72720ae8813d619d54b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49632059a0e93d966a3ab8bcf3834d386d66357f0de72720ae8813d619d54b8->enter($__internal_a49632059a0e93d966a3ab8bcf3834d386d66357f0de72720ae8813d619d54b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3e6eb266c04b991d61ffe0304de3e5024164a3e1fb245c6fa5f720ede68ae1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6eb266c04b991d61ffe0304de3e5024164a3e1fb245c6fa5f720ede68ae1c1->enter($__internal_3e6eb266c04b991d61ffe0304de3e5024164a3e1fb245c6fa5f720ede68ae1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49632059a0e93d966a3ab8bcf3834d386d66357f0de72720ae8813d619d54b8->leave($__internal_a49632059a0e93d966a3ab8bcf3834d386d66357f0de72720ae8813d619d54b8_prof);

        
        $__internal_3e6eb266c04b991d61ffe0304de3e5024164a3e1fb245c6fa5f720ede68ae1c1->leave($__internal_3e6eb266c04b991d61ffe0304de3e5024164a3e1fb245c6fa5f720ede68ae1c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b77cbbfa5c3f2221a196afaa2e4527b4e939caebcad6b5c7ecbad1ec814f67c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77cbbfa5c3f2221a196afaa2e4527b4e939caebcad6b5c7ecbad1ec814f67c6->enter($__internal_b77cbbfa5c3f2221a196afaa2e4527b4e939caebcad6b5c7ecbad1ec814f67c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e08169620e2d96ea3b456406e851399aa436cc5302952ec58f087dc8ce74e0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08169620e2d96ea3b456406e851399aa436cc5302952ec58f087dc8ce74e0f6->enter($__internal_e08169620e2d96ea3b456406e851399aa436cc5302952ec58f087dc8ce74e0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e08169620e2d96ea3b456406e851399aa436cc5302952ec58f087dc8ce74e0f6->leave($__internal_e08169620e2d96ea3b456406e851399aa436cc5302952ec58f087dc8ce74e0f6_prof);

        
        $__internal_b77cbbfa5c3f2221a196afaa2e4527b4e939caebcad6b5c7ecbad1ec814f67c6->leave($__internal_b77cbbfa5c3f2221a196afaa2e4527b4e939caebcad6b5c7ecbad1ec814f67c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
