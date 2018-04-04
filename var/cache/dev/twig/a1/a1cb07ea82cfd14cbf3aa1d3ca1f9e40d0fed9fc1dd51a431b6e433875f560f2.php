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
        $__internal_9f6b138b55d61387f0629a2bb8569f4fa40066c01a43e823a061bdcf05fd8cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6b138b55d61387f0629a2bb8569f4fa40066c01a43e823a061bdcf05fd8cdd->enter($__internal_9f6b138b55d61387f0629a2bb8569f4fa40066c01a43e823a061bdcf05fd8cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_baa04c7850650169c4926a746b82483edbfbe6b29ed60e43a120a83345f1d48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa04c7850650169c4926a746b82483edbfbe6b29ed60e43a120a83345f1d48c->enter($__internal_baa04c7850650169c4926a746b82483edbfbe6b29ed60e43a120a83345f1d48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9f6b138b55d61387f0629a2bb8569f4fa40066c01a43e823a061bdcf05fd8cdd->leave($__internal_9f6b138b55d61387f0629a2bb8569f4fa40066c01a43e823a061bdcf05fd8cdd_prof);

        
        $__internal_baa04c7850650169c4926a746b82483edbfbe6b29ed60e43a120a83345f1d48c->leave($__internal_baa04c7850650169c4926a746b82483edbfbe6b29ed60e43a120a83345f1d48c_prof);

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
