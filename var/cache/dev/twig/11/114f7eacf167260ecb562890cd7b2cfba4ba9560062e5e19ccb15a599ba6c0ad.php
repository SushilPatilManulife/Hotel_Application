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
        $__internal_05cfdc94fcad7a1c7ef611cc05b6265f508ee0c6aa19cb5644172c6c6d607f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cfdc94fcad7a1c7ef611cc05b6265f508ee0c6aa19cb5644172c6c6d607f10->enter($__internal_05cfdc94fcad7a1c7ef611cc05b6265f508ee0c6aa19cb5644172c6c6d607f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_95c8c69880c6e65f6ee210edc3bb4b6f6074b4a44daf7213eb324388eb3219e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c8c69880c6e65f6ee210edc3bb4b6f6074b4a44daf7213eb324388eb3219e3->enter($__internal_95c8c69880c6e65f6ee210edc3bb4b6f6074b4a44daf7213eb324388eb3219e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_05cfdc94fcad7a1c7ef611cc05b6265f508ee0c6aa19cb5644172c6c6d607f10->leave($__internal_05cfdc94fcad7a1c7ef611cc05b6265f508ee0c6aa19cb5644172c6c6d607f10_prof);

        
        $__internal_95c8c69880c6e65f6ee210edc3bb4b6f6074b4a44daf7213eb324388eb3219e3->leave($__internal_95c8c69880c6e65f6ee210edc3bb4b6f6074b4a44daf7213eb324388eb3219e3_prof);

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
