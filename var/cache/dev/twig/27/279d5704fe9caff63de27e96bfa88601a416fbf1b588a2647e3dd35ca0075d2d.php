<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_016c21cd382c5445c01ae2ad5ab74a4b5ae67f6db15c1c3036bab54f7adf41f1 extends Twig_Template
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
        $__internal_c62740a50a5c24c0a3ab80a648c40b94ce7ee811e7e37c510634146abbc38b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62740a50a5c24c0a3ab80a648c40b94ce7ee811e7e37c510634146abbc38b80->enter($__internal_c62740a50a5c24c0a3ab80a648c40b94ce7ee811e7e37c510634146abbc38b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f852e2b3b9036d65274990f0acfb14570cd396f4b8cd8c2aa1290e296c78e305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f852e2b3b9036d65274990f0acfb14570cd396f4b8cd8c2aa1290e296c78e305->enter($__internal_f852e2b3b9036d65274990f0acfb14570cd396f4b8cd8c2aa1290e296c78e305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c62740a50a5c24c0a3ab80a648c40b94ce7ee811e7e37c510634146abbc38b80->leave($__internal_c62740a50a5c24c0a3ab80a648c40b94ce7ee811e7e37c510634146abbc38b80_prof);

        
        $__internal_f852e2b3b9036d65274990f0acfb14570cd396f4b8cd8c2aa1290e296c78e305->leave($__internal_f852e2b3b9036d65274990f0acfb14570cd396f4b8cd8c2aa1290e296c78e305_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
