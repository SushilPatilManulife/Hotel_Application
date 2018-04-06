<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_02ff7772e6e1765fb64da67c413a7224bb31a16f2809104fb06a9bb466ddb3a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21e5cbd860aaef5bc4a70accfcffa93a0d2770419b241b74ca5fa340b2263260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e5cbd860aaef5bc4a70accfcffa93a0d2770419b241b74ca5fa340b2263260->enter($__internal_21e5cbd860aaef5bc4a70accfcffa93a0d2770419b241b74ca5fa340b2263260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_07aadd549754619a46cf537b5d475b16fac69b2f6fddc0b09b0bc45dd742c7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07aadd549754619a46cf537b5d475b16fac69b2f6fddc0b09b0bc45dd742c7c3->enter($__internal_07aadd549754619a46cf537b5d475b16fac69b2f6fddc0b09b0bc45dd742c7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_21e5cbd860aaef5bc4a70accfcffa93a0d2770419b241b74ca5fa340b2263260->leave($__internal_21e5cbd860aaef5bc4a70accfcffa93a0d2770419b241b74ca5fa340b2263260_prof);

        
        $__internal_07aadd549754619a46cf537b5d475b16fac69b2f6fddc0b09b0bc45dd742c7c3->leave($__internal_07aadd549754619a46cf537b5d475b16fac69b2f6fddc0b09b0bc45dd742c7c3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed1f26d84175f96670357d2d30f6a8d07d806f1c8eb3ae615593fe49da7b3860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1f26d84175f96670357d2d30f6a8d07d806f1c8eb3ae615593fe49da7b3860->enter($__internal_ed1f26d84175f96670357d2d30f6a8d07d806f1c8eb3ae615593fe49da7b3860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3459de79b0e5de5cd3c916ee15c304b0679dbe148ce189c42bda9616968cd2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3459de79b0e5de5cd3c916ee15c304b0679dbe148ce189c42bda9616968cd2cd->enter($__internal_3459de79b0e5de5cd3c916ee15c304b0679dbe148ce189c42bda9616968cd2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3459de79b0e5de5cd3c916ee15c304b0679dbe148ce189c42bda9616968cd2cd->leave($__internal_3459de79b0e5de5cd3c916ee15c304b0679dbe148ce189c42bda9616968cd2cd_prof);

        
        $__internal_ed1f26d84175f96670357d2d30f6a8d07d806f1c8eb3ae615593fe49da7b3860->leave($__internal_ed1f26d84175f96670357d2d30f6a8d07d806f1c8eb3ae615593fe49da7b3860_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
