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
        $__internal_ae8f4735da4f554c2ec185cfa3ec2678356b67f06887a11b9d88ead5d299ad70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8f4735da4f554c2ec185cfa3ec2678356b67f06887a11b9d88ead5d299ad70->enter($__internal_ae8f4735da4f554c2ec185cfa3ec2678356b67f06887a11b9d88ead5d299ad70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_cd9f4a1f7d0afd3cafa69fe4436689c3e7ddd0326fababac0db262eb3016d3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9f4a1f7d0afd3cafa69fe4436689c3e7ddd0326fababac0db262eb3016d3e3->enter($__internal_cd9f4a1f7d0afd3cafa69fe4436689c3e7ddd0326fababac0db262eb3016d3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_ae8f4735da4f554c2ec185cfa3ec2678356b67f06887a11b9d88ead5d299ad70->leave($__internal_ae8f4735da4f554c2ec185cfa3ec2678356b67f06887a11b9d88ead5d299ad70_prof);

        
        $__internal_cd9f4a1f7d0afd3cafa69fe4436689c3e7ddd0326fababac0db262eb3016d3e3->leave($__internal_cd9f4a1f7d0afd3cafa69fe4436689c3e7ddd0326fababac0db262eb3016d3e3_prof);

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
