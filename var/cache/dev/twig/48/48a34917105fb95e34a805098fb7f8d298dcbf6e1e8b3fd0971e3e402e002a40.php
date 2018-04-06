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
        $__internal_279de44c9eb3862032908ee765635482bd19bb95b803e427530367f2f0e519d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279de44c9eb3862032908ee765635482bd19bb95b803e427530367f2f0e519d3->enter($__internal_279de44c9eb3862032908ee765635482bd19bb95b803e427530367f2f0e519d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ea9695ed0670ccc34e16a03257059311128320b693889694d8d81bb0c2f85188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9695ed0670ccc34e16a03257059311128320b693889694d8d81bb0c2f85188->enter($__internal_ea9695ed0670ccc34e16a03257059311128320b693889694d8d81bb0c2f85188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_279de44c9eb3862032908ee765635482bd19bb95b803e427530367f2f0e519d3->leave($__internal_279de44c9eb3862032908ee765635482bd19bb95b803e427530367f2f0e519d3_prof);

        
        $__internal_ea9695ed0670ccc34e16a03257059311128320b693889694d8d81bb0c2f85188->leave($__internal_ea9695ed0670ccc34e16a03257059311128320b693889694d8d81bb0c2f85188_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b894a9f0761a56f949f545f6ac52cc0b46eaf52c07f2a8cb31ba94e986a9ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b894a9f0761a56f949f545f6ac52cc0b46eaf52c07f2a8cb31ba94e986a9ba4->enter($__internal_0b894a9f0761a56f949f545f6ac52cc0b46eaf52c07f2a8cb31ba94e986a9ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f989251277b3eb837c7879974256dee9fe7dbe5f2fbcc35504d59e17d713fb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f989251277b3eb837c7879974256dee9fe7dbe5f2fbcc35504d59e17d713fb6d->enter($__internal_f989251277b3eb837c7879974256dee9fe7dbe5f2fbcc35504d59e17d713fb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f989251277b3eb837c7879974256dee9fe7dbe5f2fbcc35504d59e17d713fb6d->leave($__internal_f989251277b3eb837c7879974256dee9fe7dbe5f2fbcc35504d59e17d713fb6d_prof);

        
        $__internal_0b894a9f0761a56f949f545f6ac52cc0b46eaf52c07f2a8cb31ba94e986a9ba4->leave($__internal_0b894a9f0761a56f949f545f6ac52cc0b46eaf52c07f2a8cb31ba94e986a9ba4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0eb0f76884d0621f9973488bfa8ce741e7d6f651d28d5dc8484a31abc73e158b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb0f76884d0621f9973488bfa8ce741e7d6f651d28d5dc8484a31abc73e158b->enter($__internal_0eb0f76884d0621f9973488bfa8ce741e7d6f651d28d5dc8484a31abc73e158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4aa7afe85f6034ac28f557f738dcb76c01e40fb38288af4e4cf26a792f279f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa7afe85f6034ac28f557f738dcb76c01e40fb38288af4e4cf26a792f279f57->enter($__internal_4aa7afe85f6034ac28f557f738dcb76c01e40fb38288af4e4cf26a792f279f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4aa7afe85f6034ac28f557f738dcb76c01e40fb38288af4e4cf26a792f279f57->leave($__internal_4aa7afe85f6034ac28f557f738dcb76c01e40fb38288af4e4cf26a792f279f57_prof);

        
        $__internal_0eb0f76884d0621f9973488bfa8ce741e7d6f651d28d5dc8484a31abc73e158b->leave($__internal_0eb0f76884d0621f9973488bfa8ce741e7d6f651d28d5dc8484a31abc73e158b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ae67d6fa0dd2369d4dae0fd29c888950c4b15c27471d51cf258e072277b9727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae67d6fa0dd2369d4dae0fd29c888950c4b15c27471d51cf258e072277b9727->enter($__internal_8ae67d6fa0dd2369d4dae0fd29c888950c4b15c27471d51cf258e072277b9727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e1978f6c25f41eaf767c246d250d846164349aa1b2b29c4cf65f31af16b2c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1978f6c25f41eaf767c246d250d846164349aa1b2b29c4cf65f31af16b2c3d->enter($__internal_4e1978f6c25f41eaf767c246d250d846164349aa1b2b29c4cf65f31af16b2c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e1978f6c25f41eaf767c246d250d846164349aa1b2b29c4cf65f31af16b2c3d->leave($__internal_4e1978f6c25f41eaf767c246d250d846164349aa1b2b29c4cf65f31af16b2c3d_prof);

        
        $__internal_8ae67d6fa0dd2369d4dae0fd29c888950c4b15c27471d51cf258e072277b9727->leave($__internal_8ae67d6fa0dd2369d4dae0fd29c888950c4b15c27471d51cf258e072277b9727_prof);

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
