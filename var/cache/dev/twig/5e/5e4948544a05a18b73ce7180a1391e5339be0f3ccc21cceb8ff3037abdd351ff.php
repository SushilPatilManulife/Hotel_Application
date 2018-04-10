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
        $__internal_5eda12d071336666ac706393c343f802df780d80aa2b3e9cfcc5a99a9f4b7224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eda12d071336666ac706393c343f802df780d80aa2b3e9cfcc5a99a9f4b7224->enter($__internal_5eda12d071336666ac706393c343f802df780d80aa2b3e9cfcc5a99a9f4b7224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_afa5680b650c263bb067fdfc5c3d6f6a43ee89db86a9b94a7b78c7a29f5245ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa5680b650c263bb067fdfc5c3d6f6a43ee89db86a9b94a7b78c7a29f5245ad->enter($__internal_afa5680b650c263bb067fdfc5c3d6f6a43ee89db86a9b94a7b78c7a29f5245ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_5eda12d071336666ac706393c343f802df780d80aa2b3e9cfcc5a99a9f4b7224->leave($__internal_5eda12d071336666ac706393c343f802df780d80aa2b3e9cfcc5a99a9f4b7224_prof);

        
        $__internal_afa5680b650c263bb067fdfc5c3d6f6a43ee89db86a9b94a7b78c7a29f5245ad->leave($__internal_afa5680b650c263bb067fdfc5c3d6f6a43ee89db86a9b94a7b78c7a29f5245ad_prof);

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
