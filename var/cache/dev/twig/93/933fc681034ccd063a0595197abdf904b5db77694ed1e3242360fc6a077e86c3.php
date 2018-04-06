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
        $__internal_afff2ae78c71119280ccb0621dc3df2d97a70fc4a3ebefd27248d110e48f41c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afff2ae78c71119280ccb0621dc3df2d97a70fc4a3ebefd27248d110e48f41c5->enter($__internal_afff2ae78c71119280ccb0621dc3df2d97a70fc4a3ebefd27248d110e48f41c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_3daf687ac095038c7263bd59ed51c351f06b04bda70e60c0dd7b19e05693ff3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3daf687ac095038c7263bd59ed51c351f06b04bda70e60c0dd7b19e05693ff3d->enter($__internal_3daf687ac095038c7263bd59ed51c351f06b04bda70e60c0dd7b19e05693ff3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_afff2ae78c71119280ccb0621dc3df2d97a70fc4a3ebefd27248d110e48f41c5->leave($__internal_afff2ae78c71119280ccb0621dc3df2d97a70fc4a3ebefd27248d110e48f41c5_prof);

        
        $__internal_3daf687ac095038c7263bd59ed51c351f06b04bda70e60c0dd7b19e05693ff3d->leave($__internal_3daf687ac095038c7263bd59ed51c351f06b04bda70e60c0dd7b19e05693ff3d_prof);

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
