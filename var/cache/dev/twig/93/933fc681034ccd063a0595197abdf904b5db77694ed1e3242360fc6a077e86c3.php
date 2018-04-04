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
        $__internal_7a0e347159bdcf79e0e596f0d772acba8028a3a7b4b772cf20e1ffcbd5668192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0e347159bdcf79e0e596f0d772acba8028a3a7b4b772cf20e1ffcbd5668192->enter($__internal_7a0e347159bdcf79e0e596f0d772acba8028a3a7b4b772cf20e1ffcbd5668192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1f5611e2f87a3087b618a2e28d2340186e7ecb43742b244cda6f144ca4188f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5611e2f87a3087b618a2e28d2340186e7ecb43742b244cda6f144ca4188f88->enter($__internal_1f5611e2f87a3087b618a2e28d2340186e7ecb43742b244cda6f144ca4188f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_7a0e347159bdcf79e0e596f0d772acba8028a3a7b4b772cf20e1ffcbd5668192->leave($__internal_7a0e347159bdcf79e0e596f0d772acba8028a3a7b4b772cf20e1ffcbd5668192_prof);

        
        $__internal_1f5611e2f87a3087b618a2e28d2340186e7ecb43742b244cda6f144ca4188f88->leave($__internal_1f5611e2f87a3087b618a2e28d2340186e7ecb43742b244cda6f144ca4188f88_prof);

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
