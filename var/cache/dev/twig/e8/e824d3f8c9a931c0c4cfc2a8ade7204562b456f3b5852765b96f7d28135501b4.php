<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b582cbaebbfe667b9c66b107ae123257a5b71c03bd6512ef3abc124ee66d5dfc extends Twig_Template
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
        $__internal_8ce87edeb85852c4185f216e8fce0c92aa19b06c80f26f3634caacbbc27606fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce87edeb85852c4185f216e8fce0c92aa19b06c80f26f3634caacbbc27606fe->enter($__internal_8ce87edeb85852c4185f216e8fce0c92aa19b06c80f26f3634caacbbc27606fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_424f421ba84a39e7af79ae7bc6d5d7ae6e91c25592e35ad143befd01e139fa6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424f421ba84a39e7af79ae7bc6d5d7ae6e91c25592e35ad143befd01e139fa6b->enter($__internal_424f421ba84a39e7af79ae7bc6d5d7ae6e91c25592e35ad143befd01e139fa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_8ce87edeb85852c4185f216e8fce0c92aa19b06c80f26f3634caacbbc27606fe->leave($__internal_8ce87edeb85852c4185f216e8fce0c92aa19b06c80f26f3634caacbbc27606fe_prof);

        
        $__internal_424f421ba84a39e7af79ae7bc6d5d7ae6e91c25592e35ad143befd01e139fa6b->leave($__internal_424f421ba84a39e7af79ae7bc6d5d7ae6e91c25592e35ad143befd01e139fa6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
