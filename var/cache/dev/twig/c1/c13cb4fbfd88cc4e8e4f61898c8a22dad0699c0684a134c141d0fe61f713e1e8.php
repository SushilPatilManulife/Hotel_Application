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
        $__internal_9139d0cd9858b9cfaba9850dd66a301a5d2a3a4d350af33c4146bb48691b3cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9139d0cd9858b9cfaba9850dd66a301a5d2a3a4d350af33c4146bb48691b3cdd->enter($__internal_9139d0cd9858b9cfaba9850dd66a301a5d2a3a4d350af33c4146bb48691b3cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a250140ea5963485f6afa70d8d62b47a3a99cec5caa0e9a8863e82f4f81cff4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a250140ea5963485f6afa70d8d62b47a3a99cec5caa0e9a8863e82f4f81cff4a->enter($__internal_a250140ea5963485f6afa70d8d62b47a3a99cec5caa0e9a8863e82f4f81cff4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_9139d0cd9858b9cfaba9850dd66a301a5d2a3a4d350af33c4146bb48691b3cdd->leave($__internal_9139d0cd9858b9cfaba9850dd66a301a5d2a3a4d350af33c4146bb48691b3cdd_prof);

        
        $__internal_a250140ea5963485f6afa70d8d62b47a3a99cec5caa0e9a8863e82f4f81cff4a->leave($__internal_a250140ea5963485f6afa70d8d62b47a3a99cec5caa0e9a8863e82f4f81cff4a_prof);

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
