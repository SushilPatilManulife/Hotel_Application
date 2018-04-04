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
        $__internal_b2c7d8c4aa18bbc0bb86db3b88779f26b59f215c1114a56817d8d2babbff211c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c7d8c4aa18bbc0bb86db3b88779f26b59f215c1114a56817d8d2babbff211c->enter($__internal_b2c7d8c4aa18bbc0bb86db3b88779f26b59f215c1114a56817d8d2babbff211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_4cdad73e6ad5cfa227ab8109993793fa51498de722936f61155368f31e9b54fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdad73e6ad5cfa227ab8109993793fa51498de722936f61155368f31e9b54fd->enter($__internal_4cdad73e6ad5cfa227ab8109993793fa51498de722936f61155368f31e9b54fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_b2c7d8c4aa18bbc0bb86db3b88779f26b59f215c1114a56817d8d2babbff211c->leave($__internal_b2c7d8c4aa18bbc0bb86db3b88779f26b59f215c1114a56817d8d2babbff211c_prof);

        
        $__internal_4cdad73e6ad5cfa227ab8109993793fa51498de722936f61155368f31e9b54fd->leave($__internal_4cdad73e6ad5cfa227ab8109993793fa51498de722936f61155368f31e9b54fd_prof);

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
