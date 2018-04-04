<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_eb6d8ba9d4503f5263a8e414502f52dc84d57cfa131d6273f7393a79a8c620a3 extends Twig_Template
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
        $__internal_a7465200cd50a1f9cff32367a27efd06c9545d2b76f1cdee62a0e43854eef23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7465200cd50a1f9cff32367a27efd06c9545d2b76f1cdee62a0e43854eef23e->enter($__internal_a7465200cd50a1f9cff32367a27efd06c9545d2b76f1cdee62a0e43854eef23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9cfa9d87140464eb1710fc4d4f8e59c4157de665c83c27bd8ed0dabd2dd4573e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfa9d87140464eb1710fc4d4f8e59c4157de665c83c27bd8ed0dabd2dd4573e->enter($__internal_9cfa9d87140464eb1710fc4d4f8e59c4157de665c83c27bd8ed0dabd2dd4573e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a7465200cd50a1f9cff32367a27efd06c9545d2b76f1cdee62a0e43854eef23e->leave($__internal_a7465200cd50a1f9cff32367a27efd06c9545d2b76f1cdee62a0e43854eef23e_prof);

        
        $__internal_9cfa9d87140464eb1710fc4d4f8e59c4157de665c83c27bd8ed0dabd2dd4573e->leave($__internal_9cfa9d87140464eb1710fc4d4f8e59c4157de665c83c27bd8ed0dabd2dd4573e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
