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
        $__internal_56cd5f15369e9af03262d92c455130ce43e039a5128f687499b38c1027b5faa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56cd5f15369e9af03262d92c455130ce43e039a5128f687499b38c1027b5faa8->enter($__internal_56cd5f15369e9af03262d92c455130ce43e039a5128f687499b38c1027b5faa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0440efd61f8fff543924564b4bc7933bc47448c78d555af0593ebb495f285439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0440efd61f8fff543924564b4bc7933bc47448c78d555af0593ebb495f285439->enter($__internal_0440efd61f8fff543924564b4bc7933bc47448c78d555af0593ebb495f285439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_56cd5f15369e9af03262d92c455130ce43e039a5128f687499b38c1027b5faa8->leave($__internal_56cd5f15369e9af03262d92c455130ce43e039a5128f687499b38c1027b5faa8_prof);

        
        $__internal_0440efd61f8fff543924564b4bc7933bc47448c78d555af0593ebb495f285439->leave($__internal_0440efd61f8fff543924564b4bc7933bc47448c78d555af0593ebb495f285439_prof);

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
