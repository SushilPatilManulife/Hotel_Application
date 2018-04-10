<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b582cbaebbfe667b9c66b107ae123257a5b71c03bd6512ef3abc124ee66d5dfc extends Twig_Template
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
        $__internal_424d8909ad7dd17b7ae4f7b6b61cf73b23f884bda2ab9ddd0a1e84811790f067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424d8909ad7dd17b7ae4f7b6b61cf73b23f884bda2ab9ddd0a1e84811790f067->enter($__internal_424d8909ad7dd17b7ae4f7b6b61cf73b23f884bda2ab9ddd0a1e84811790f067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_3648fcbb12e8b83e21360afe9bc1089d0b8bb07f801fb929138bb9afeb90ae1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3648fcbb12e8b83e21360afe9bc1089d0b8bb07f801fb929138bb9afeb90ae1c->enter($__internal_3648fcbb12e8b83e21360afe9bc1089d0b8bb07f801fb929138bb9afeb90ae1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_424d8909ad7dd17b7ae4f7b6b61cf73b23f884bda2ab9ddd0a1e84811790f067->leave($__internal_424d8909ad7dd17b7ae4f7b6b61cf73b23f884bda2ab9ddd0a1e84811790f067_prof);

        
        $__internal_3648fcbb12e8b83e21360afe9bc1089d0b8bb07f801fb929138bb9afeb90ae1c->leave($__internal_3648fcbb12e8b83e21360afe9bc1089d0b8bb07f801fb929138bb9afeb90ae1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
