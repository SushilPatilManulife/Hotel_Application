<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_fadd9553f8752b9570f1f10896dcfc98d8558a9247f02108222c028791d0a7cf extends Twig_Template
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
        $__internal_d5b2b28fe4d901badf5aef89c65b7e95e3a2ed674f6f6ce676e176f45b082003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b2b28fe4d901badf5aef89c65b7e95e3a2ed674f6f6ce676e176f45b082003->enter($__internal_d5b2b28fe4d901badf5aef89c65b7e95e3a2ed674f6f6ce676e176f45b082003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_f1e10bad7ae383a82cc6e110861969c8044e57ec5db9745990f5bb63489d2a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e10bad7ae383a82cc6e110861969c8044e57ec5db9745990f5bb63489d2a63->enter($__internal_f1e10bad7ae383a82cc6e110861969c8044e57ec5db9745990f5bb63489d2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d5b2b28fe4d901badf5aef89c65b7e95e3a2ed674f6f6ce676e176f45b082003->leave($__internal_d5b2b28fe4d901badf5aef89c65b7e95e3a2ed674f6f6ce676e176f45b082003_prof);

        
        $__internal_f1e10bad7ae383a82cc6e110861969c8044e57ec5db9745990f5bb63489d2a63->leave($__internal_f1e10bad7ae383a82cc6e110861969c8044e57ec5db9745990f5bb63489d2a63_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
