<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e59ac2125d2d94f84ee981b48a71bffe73ed32453f79d914dfdeef7293da4ad7 extends Twig_Template
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
        $__internal_50a4e061d26d3fb831ad472e650660410ce610cd67b0ac9404faa72801a510fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a4e061d26d3fb831ad472e650660410ce610cd67b0ac9404faa72801a510fe->enter($__internal_50a4e061d26d3fb831ad472e650660410ce610cd67b0ac9404faa72801a510fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ffcbae609aaf86a2c5f2477387bbe7a2158371de9a47c826eaf9881b16f10b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcbae609aaf86a2c5f2477387bbe7a2158371de9a47c826eaf9881b16f10b5c->enter($__internal_ffcbae609aaf86a2c5f2477387bbe7a2158371de9a47c826eaf9881b16f10b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_50a4e061d26d3fb831ad472e650660410ce610cd67b0ac9404faa72801a510fe->leave($__internal_50a4e061d26d3fb831ad472e650660410ce610cd67b0ac9404faa72801a510fe_prof);

        
        $__internal_ffcbae609aaf86a2c5f2477387bbe7a2158371de9a47c826eaf9881b16f10b5c->leave($__internal_ffcbae609aaf86a2c5f2477387bbe7a2158371de9a47c826eaf9881b16f10b5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
