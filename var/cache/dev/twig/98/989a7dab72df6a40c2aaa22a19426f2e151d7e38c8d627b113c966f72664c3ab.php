<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d24b2ca38e8d23defa1881b47c68dc3818ee2e413505fb5bf9d9abd2cfbc1c80 extends Twig_Template
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
        $__internal_9cf1b8d0daef266e610513e6a362ca6d99cd120e7c846a1a2b973b193a3107d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf1b8d0daef266e610513e6a362ca6d99cd120e7c846a1a2b973b193a3107d8->enter($__internal_9cf1b8d0daef266e610513e6a362ca6d99cd120e7c846a1a2b973b193a3107d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8f8cedfe4b54a490c1fa2b1f87b71d1b5ef9cc8e64968f801b9d064ba2325720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8cedfe4b54a490c1fa2b1f87b71d1b5ef9cc8e64968f801b9d064ba2325720->enter($__internal_8f8cedfe4b54a490c1fa2b1f87b71d1b5ef9cc8e64968f801b9d064ba2325720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9cf1b8d0daef266e610513e6a362ca6d99cd120e7c846a1a2b973b193a3107d8->leave($__internal_9cf1b8d0daef266e610513e6a362ca6d99cd120e7c846a1a2b973b193a3107d8_prof);

        
        $__internal_8f8cedfe4b54a490c1fa2b1f87b71d1b5ef9cc8e64968f801b9d064ba2325720->leave($__internal_8f8cedfe4b54a490c1fa2b1f87b71d1b5ef9cc8e64968f801b9d064ba2325720_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
