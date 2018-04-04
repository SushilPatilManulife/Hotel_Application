<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_07483b62e6c7eb55d62f6853f0429d92ee7e110056680a97daceb4f2a8b745df extends Twig_Template
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
        $__internal_94021d21ac34c3c72626989ae5c2cfe909b9a079c166207a213518755f25b492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94021d21ac34c3c72626989ae5c2cfe909b9a079c166207a213518755f25b492->enter($__internal_94021d21ac34c3c72626989ae5c2cfe909b9a079c166207a213518755f25b492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_0ffbcf2d12757aafbe24b3f969eaf571a266551b133e375ae3d3ae5b54f0553a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffbcf2d12757aafbe24b3f969eaf571a266551b133e375ae3d3ae5b54f0553a->enter($__internal_0ffbcf2d12757aafbe24b3f969eaf571a266551b133e375ae3d3ae5b54f0553a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_94021d21ac34c3c72626989ae5c2cfe909b9a079c166207a213518755f25b492->leave($__internal_94021d21ac34c3c72626989ae5c2cfe909b9a079c166207a213518755f25b492_prof);

        
        $__internal_0ffbcf2d12757aafbe24b3f969eaf571a266551b133e375ae3d3ae5b54f0553a->leave($__internal_0ffbcf2d12757aafbe24b3f969eaf571a266551b133e375ae3d3ae5b54f0553a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
