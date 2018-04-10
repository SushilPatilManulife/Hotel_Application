<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_39d648410f33c09bfa71aa3b7ac9d9b72fd2da86f9812467b1f00c6ceb3ca601 extends Twig_Template
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
        $__internal_e6916e20f4386bdaffe38ef2bcba27597dc7f87b1d051cb43fbb049904ed8e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6916e20f4386bdaffe38ef2bcba27597dc7f87b1d051cb43fbb049904ed8e35->enter($__internal_e6916e20f4386bdaffe38ef2bcba27597dc7f87b1d051cb43fbb049904ed8e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7143a53a669e09c9f2e411279ab3e00136412b639e1ab64bbe592fbafde588ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7143a53a669e09c9f2e411279ab3e00136412b639e1ab64bbe592fbafde588ee->enter($__internal_7143a53a669e09c9f2e411279ab3e00136412b639e1ab64bbe592fbafde588ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e6916e20f4386bdaffe38ef2bcba27597dc7f87b1d051cb43fbb049904ed8e35->leave($__internal_e6916e20f4386bdaffe38ef2bcba27597dc7f87b1d051cb43fbb049904ed8e35_prof);

        
        $__internal_7143a53a669e09c9f2e411279ab3e00136412b639e1ab64bbe592fbafde588ee->leave($__internal_7143a53a669e09c9f2e411279ab3e00136412b639e1ab64bbe592fbafde588ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
