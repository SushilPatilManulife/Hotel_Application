<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c3b4d60b6d243754341faed43ad16c6a25bc19b18d75acbf9ccbe1f79bf37356 extends Twig_Template
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
        $__internal_52d4c134a87e0b9affca0ec811b8cee7b393efcb24f53cd80dfdff7af4b6a86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d4c134a87e0b9affca0ec811b8cee7b393efcb24f53cd80dfdff7af4b6a86d->enter($__internal_52d4c134a87e0b9affca0ec811b8cee7b393efcb24f53cd80dfdff7af4b6a86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_45dc39e92e4b64dc8703c7b11ec29f791e3cc68e0e5be5b6b8fe2f4504ccab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dc39e92e4b64dc8703c7b11ec29f791e3cc68e0e5be5b6b8fe2f4504ccab2c->enter($__internal_45dc39e92e4b64dc8703c7b11ec29f791e3cc68e0e5be5b6b8fe2f4504ccab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_52d4c134a87e0b9affca0ec811b8cee7b393efcb24f53cd80dfdff7af4b6a86d->leave($__internal_52d4c134a87e0b9affca0ec811b8cee7b393efcb24f53cd80dfdff7af4b6a86d_prof);

        
        $__internal_45dc39e92e4b64dc8703c7b11ec29f791e3cc68e0e5be5b6b8fe2f4504ccab2c->leave($__internal_45dc39e92e4b64dc8703c7b11ec29f791e3cc68e0e5be5b6b8fe2f4504ccab2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
