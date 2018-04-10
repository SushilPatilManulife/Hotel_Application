<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a1c76547b3cd64bbfdceef6528c3aef8c7c333c49062de0a455abb7581ab8c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ea4eac405d53f9c6d29b3f6caaf8a99eaab629aa186065974e63961d1343d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea4eac405d53f9c6d29b3f6caaf8a99eaab629aa186065974e63961d1343d7a->enter($__internal_5ea4eac405d53f9c6d29b3f6caaf8a99eaab629aa186065974e63961d1343d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e036fc831d8b3a5dd2744498d874a1e2e248e4a3bc85aaa98936c7fe02fae10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e036fc831d8b3a5dd2744498d874a1e2e248e4a3bc85aaa98936c7fe02fae10d->enter($__internal_e036fc831d8b3a5dd2744498d874a1e2e248e4a3bc85aaa98936c7fe02fae10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5ea4eac405d53f9c6d29b3f6caaf8a99eaab629aa186065974e63961d1343d7a->leave($__internal_5ea4eac405d53f9c6d29b3f6caaf8a99eaab629aa186065974e63961d1343d7a_prof);

        
        $__internal_e036fc831d8b3a5dd2744498d874a1e2e248e4a3bc85aaa98936c7fe02fae10d->leave($__internal_e036fc831d8b3a5dd2744498d874a1e2e248e4a3bc85aaa98936c7fe02fae10d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
