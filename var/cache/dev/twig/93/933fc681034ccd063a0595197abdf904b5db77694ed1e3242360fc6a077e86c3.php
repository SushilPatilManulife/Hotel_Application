<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d3249949efd92eab2e58e65911b102977a230a0d21703f1972ae0160fa8a71e9 extends Twig_Template
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
        $__internal_807d1b3dfe9b95418acb9d962b22eb72cca2838dd8b961cbb758ee0877019858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807d1b3dfe9b95418acb9d962b22eb72cca2838dd8b961cbb758ee0877019858->enter($__internal_807d1b3dfe9b95418acb9d962b22eb72cca2838dd8b961cbb758ee0877019858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_7b97052a033fe232ed7e31a8b2cb12e79bb7d847d765c0388eea9e18220145be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b97052a033fe232ed7e31a8b2cb12e79bb7d847d765c0388eea9e18220145be->enter($__internal_7b97052a033fe232ed7e31a8b2cb12e79bb7d847d765c0388eea9e18220145be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_807d1b3dfe9b95418acb9d962b22eb72cca2838dd8b961cbb758ee0877019858->leave($__internal_807d1b3dfe9b95418acb9d962b22eb72cca2838dd8b961cbb758ee0877019858_prof);

        
        $__internal_7b97052a033fe232ed7e31a8b2cb12e79bb7d847d765c0388eea9e18220145be->leave($__internal_7b97052a033fe232ed7e31a8b2cb12e79bb7d847d765c0388eea9e18220145be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
