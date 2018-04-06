<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9d753e070cb5816253c694b73641954dd3725a2a3433df09d41682fb9360e6eb extends Twig_Template
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
        $__internal_b621eff5082114427812632c7026878527ba317634ab8ad34d202e6004fe253b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b621eff5082114427812632c7026878527ba317634ab8ad34d202e6004fe253b->enter($__internal_b621eff5082114427812632c7026878527ba317634ab8ad34d202e6004fe253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_cae829c9b0020d57899b849655a8507ee69788868523ba997cde1dca1d17ea70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae829c9b0020d57899b849655a8507ee69788868523ba997cde1dca1d17ea70->enter($__internal_cae829c9b0020d57899b849655a8507ee69788868523ba997cde1dca1d17ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b621eff5082114427812632c7026878527ba317634ab8ad34d202e6004fe253b->leave($__internal_b621eff5082114427812632c7026878527ba317634ab8ad34d202e6004fe253b_prof);

        
        $__internal_cae829c9b0020d57899b849655a8507ee69788868523ba997cde1dca1d17ea70->leave($__internal_cae829c9b0020d57899b849655a8507ee69788868523ba997cde1dca1d17ea70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
