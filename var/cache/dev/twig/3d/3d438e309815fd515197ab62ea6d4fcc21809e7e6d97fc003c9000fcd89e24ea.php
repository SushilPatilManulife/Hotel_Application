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
        $__internal_76e298dabedad9330eca1e379ce5825137e4b436bdc48bffcc5b430e24b7d313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e298dabedad9330eca1e379ce5825137e4b436bdc48bffcc5b430e24b7d313->enter($__internal_76e298dabedad9330eca1e379ce5825137e4b436bdc48bffcc5b430e24b7d313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_526f072fa620ce0fd849b83fe8a6b3fd0d5c83718b57d6968ef445dbe477baab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526f072fa620ce0fd849b83fe8a6b3fd0d5c83718b57d6968ef445dbe477baab->enter($__internal_526f072fa620ce0fd849b83fe8a6b3fd0d5c83718b57d6968ef445dbe477baab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_76e298dabedad9330eca1e379ce5825137e4b436bdc48bffcc5b430e24b7d313->leave($__internal_76e298dabedad9330eca1e379ce5825137e4b436bdc48bffcc5b430e24b7d313_prof);

        
        $__internal_526f072fa620ce0fd849b83fe8a6b3fd0d5c83718b57d6968ef445dbe477baab->leave($__internal_526f072fa620ce0fd849b83fe8a6b3fd0d5c83718b57d6968ef445dbe477baab_prof);

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
