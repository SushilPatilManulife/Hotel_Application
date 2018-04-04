<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4ef4bf3aeedbd5d179425263683cd01e243fad4bddba6edd7796772dff232c0b extends Twig_Template
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
        $__internal_b2c8f014af493921b717c84e4495e15938fa758b4f124ca06822749180b332eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c8f014af493921b717c84e4495e15938fa758b4f124ca06822749180b332eb->enter($__internal_b2c8f014af493921b717c84e4495e15938fa758b4f124ca06822749180b332eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2cb89adb48082b8f6490989e8d77adcc735944c6125493c710997640ad2c60b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb89adb48082b8f6490989e8d77adcc735944c6125493c710997640ad2c60b8->enter($__internal_2cb89adb48082b8f6490989e8d77adcc735944c6125493c710997640ad2c60b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_b2c8f014af493921b717c84e4495e15938fa758b4f124ca06822749180b332eb->leave($__internal_b2c8f014af493921b717c84e4495e15938fa758b4f124ca06822749180b332eb_prof);

        
        $__internal_2cb89adb48082b8f6490989e8d77adcc735944c6125493c710997640ad2c60b8->leave($__internal_2cb89adb48082b8f6490989e8d77adcc735944c6125493c710997640ad2c60b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
