<?php

/* clients/index.html.twig */
class __TwigTemplate_492dc8d34cf11cadda315871feaf207fdfff2a363ce7859e4c95c74b19584fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f419a071eda5c1893c7a5334b800651edec97e2a8d111b4126b34e1ee133dc28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f419a071eda5c1893c7a5334b800651edec97e2a8d111b4126b34e1ee133dc28->enter($__internal_f419a071eda5c1893c7a5334b800651edec97e2a8d111b4126b34e1ee133dc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_7bcfae77ddf5e151071e1ae21daac9c2b31b6c7f3db44ac25a4cef375a7bad52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcfae77ddf5e151071e1ae21daac9c2b31b6c7f3db44ac25a4cef375a7bad52->enter($__internal_7bcfae77ddf5e151071e1ae21daac9c2b31b6c7f3db44ac25a4cef375a7bad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f419a071eda5c1893c7a5334b800651edec97e2a8d111b4126b34e1ee133dc28->leave($__internal_f419a071eda5c1893c7a5334b800651edec97e2a8d111b4126b34e1ee133dc28_prof);

        
        $__internal_7bcfae77ddf5e151071e1ae21daac9c2b31b6c7f3db44ac25a4cef375a7bad52->leave($__internal_7bcfae77ddf5e151071e1ae21daac9c2b31b6c7f3db44ac25a4cef375a7bad52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0369afde50aa457a3b0c6f97911e75423cbbc512e964d5d15b9d211649ac08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0369afde50aa457a3b0c6f97911e75423cbbc512e964d5d15b9d211649ac08f->enter($__internal_b0369afde50aa457a3b0c6f97911e75423cbbc512e964d5d15b9d211649ac08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65cd01320af4af744c405c109d68dc3efff1bd313b87cdef6d0db6b8f7d496fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cd01320af4af744c405c109d68dc3efff1bd313b87cdef6d0db6b8f7d496fc->enter($__internal_65cd01320af4af744c405c109d68dc3efff1bd313b87cdef6d0db6b8f7d496fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 19
            echo "              <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "last_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => 1));
            echo "\">BOOK A ROOM</a>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_65cd01320af4af744c405c109d68dc3efff1bd313b87cdef6d0db6b8f7d496fc->leave($__internal_65cd01320af4af744c405c109d68dc3efff1bd313b87cdef6d0db6b8f7d496fc_prof);

        
        $__internal_b0369afde50aa457a3b0c6f97911e75423cbbc512e964d5d15b9d211649ac08f->leave($__internal_b0369afde50aa457a3b0c6f97911e75423cbbc512e964d5d15b9d211649ac08f_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  86 => 24,  80 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
            {% for client in clients%}
              <tr>
                <td>{{client.title | capitalize}}. {{client.name}} {{client.last_name}}</td>
                <td>{{client.email}}</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{path(\"booking\",{'id_client': 1})}}\">BOOK A ROOM</a>
                </td>
              </tr>
              {%endfor%}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app\\Resources\\views\\clients\\index.html.twig");
    }
}
