<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_73c1781f5235fde3fa65cb05fb4b89a91660ca2ffbfa090a62cc63218c5677bc extends Twig_Template
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
        $__internal_225c16f1944e191feb8ddadbe6e115586caf934ab7cbfad09e01fd07dd76775c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225c16f1944e191feb8ddadbe6e115586caf934ab7cbfad09e01fd07dd76775c->enter($__internal_225c16f1944e191feb8ddadbe6e115586caf934ab7cbfad09e01fd07dd76775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_05060f4d905bd92ca9926b1b0d9645564c4d01cdaa9a794ec0e86c0bef5bb7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05060f4d905bd92ca9926b1b0d9645564c4d01cdaa9a794ec0e86c0bef5bb7eb->enter($__internal_05060f4d905bd92ca9926b1b0d9645564c4d01cdaa9a794ec0e86c0bef5bb7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_225c16f1944e191feb8ddadbe6e115586caf934ab7cbfad09e01fd07dd76775c->leave($__internal_225c16f1944e191feb8ddadbe6e115586caf934ab7cbfad09e01fd07dd76775c_prof);

        
        $__internal_05060f4d905bd92ca9926b1b0d9645564c4d01cdaa9a794ec0e86c0bef5bb7eb->leave($__internal_05060f4d905bd92ca9926b1b0d9645564c4d01cdaa9a794ec0e86c0bef5bb7eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
