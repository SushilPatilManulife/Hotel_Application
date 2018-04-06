<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_919cb83f01a2218351eebc15876e3ff25c22db46699b6ba74cc09fc08c60448d extends Twig_Template
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
        $__internal_7940327d0215dfd3bbc2eaad48ae965f29b3327809c3e6d760b298e13c3ba88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7940327d0215dfd3bbc2eaad48ae965f29b3327809c3e6d760b298e13c3ba88d->enter($__internal_7940327d0215dfd3bbc2eaad48ae965f29b3327809c3e6d760b298e13c3ba88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_a9112af11eaced14a537a54293e1a6b707c794fae842901583fea65e28bdf370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9112af11eaced14a537a54293e1a6b707c794fae842901583fea65e28bdf370->enter($__internal_a9112af11eaced14a537a54293e1a6b707c794fae842901583fea65e28bdf370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_7940327d0215dfd3bbc2eaad48ae965f29b3327809c3e6d760b298e13c3ba88d->leave($__internal_7940327d0215dfd3bbc2eaad48ae965f29b3327809c3e6d760b298e13c3ba88d_prof);

        
        $__internal_a9112af11eaced14a537a54293e1a6b707c794fae842901583fea65e28bdf370->leave($__internal_a9112af11eaced14a537a54293e1a6b707c794fae842901583fea65e28bdf370_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
