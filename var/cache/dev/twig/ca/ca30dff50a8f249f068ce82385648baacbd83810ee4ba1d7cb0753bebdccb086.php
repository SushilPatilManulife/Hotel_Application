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
        $__internal_f44a2b37c29762f8ef588d91fac4110e468190a46cd15a558f0a9d0f1ff4159d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44a2b37c29762f8ef588d91fac4110e468190a46cd15a558f0a9d0f1ff4159d->enter($__internal_f44a2b37c29762f8ef588d91fac4110e468190a46cd15a558f0a9d0f1ff4159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_0d0968ff698a52cf6a7359306020822afdd0bbe0b2bb0ac506b785ee94cea60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0968ff698a52cf6a7359306020822afdd0bbe0b2bb0ac506b785ee94cea60b->enter($__internal_0d0968ff698a52cf6a7359306020822afdd0bbe0b2bb0ac506b785ee94cea60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f44a2b37c29762f8ef588d91fac4110e468190a46cd15a558f0a9d0f1ff4159d->leave($__internal_f44a2b37c29762f8ef588d91fac4110e468190a46cd15a558f0a9d0f1ff4159d_prof);

        
        $__internal_0d0968ff698a52cf6a7359306020822afdd0bbe0b2bb0ac506b785ee94cea60b->leave($__internal_0d0968ff698a52cf6a7359306020822afdd0bbe0b2bb0ac506b785ee94cea60b_prof);

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
