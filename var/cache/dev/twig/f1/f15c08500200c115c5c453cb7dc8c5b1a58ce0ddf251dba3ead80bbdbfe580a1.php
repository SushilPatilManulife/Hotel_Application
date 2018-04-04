<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_593c59a9d3475c7c69ee73389518fefc7612ea5c552d8dd79e9b828f394ba6fa extends Twig_Template
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
        $__internal_787d9469b9a929e216f45d74554a204338bb1f62b259f7569bdaeec1aa2b66a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787d9469b9a929e216f45d74554a204338bb1f62b259f7569bdaeec1aa2b66a1->enter($__internal_787d9469b9a929e216f45d74554a204338bb1f62b259f7569bdaeec1aa2b66a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c9c827d0f7e10add6a00541bdf7ae01c528302e253d18d70680d8bdbb4e79fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c827d0f7e10add6a00541bdf7ae01c528302e253d18d70680d8bdbb4e79fc5->enter($__internal_c9c827d0f7e10add6a00541bdf7ae01c528302e253d18d70680d8bdbb4e79fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_787d9469b9a929e216f45d74554a204338bb1f62b259f7569bdaeec1aa2b66a1->leave($__internal_787d9469b9a929e216f45d74554a204338bb1f62b259f7569bdaeec1aa2b66a1_prof);

        
        $__internal_c9c827d0f7e10add6a00541bdf7ae01c528302e253d18d70680d8bdbb4e79fc5->leave($__internal_c9c827d0f7e10add6a00541bdf7ae01c528302e253d18d70680d8bdbb4e79fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
