<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f9efb80e3e40c92c1aad02e8609e13dbb097d1f37f071f075dd4a951173f3107 extends Twig_Template
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
        $__internal_c6eb7dab9c170d2b19d778e6c903b5302f68d3b9d7fc58179731f73771ec756b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6eb7dab9c170d2b19d778e6c903b5302f68d3b9d7fc58179731f73771ec756b->enter($__internal_c6eb7dab9c170d2b19d778e6c903b5302f68d3b9d7fc58179731f73771ec756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2eada6c70126b23091dd06e8465ad12b9f7f4d364322e9b6af330d13821a783b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eada6c70126b23091dd06e8465ad12b9f7f4d364322e9b6af330d13821a783b->enter($__internal_2eada6c70126b23091dd06e8465ad12b9f7f4d364322e9b6af330d13821a783b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c6eb7dab9c170d2b19d778e6c903b5302f68d3b9d7fc58179731f73771ec756b->leave($__internal_c6eb7dab9c170d2b19d778e6c903b5302f68d3b9d7fc58179731f73771ec756b_prof);

        
        $__internal_2eada6c70126b23091dd06e8465ad12b9f7f4d364322e9b6af330d13821a783b->leave($__internal_2eada6c70126b23091dd06e8465ad12b9f7f4d364322e9b6af330d13821a783b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
