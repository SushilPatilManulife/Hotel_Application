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
        $__internal_da17a176381db2d831a4ac041c81d0ceda13ff2c876c562c01d750217629911b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da17a176381db2d831a4ac041c81d0ceda13ff2c876c562c01d750217629911b->enter($__internal_da17a176381db2d831a4ac041c81d0ceda13ff2c876c562c01d750217629911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_155caba79a1330a79b042524d3036691947d3e0c8d5cc6ef49f673f48c88d43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155caba79a1330a79b042524d3036691947d3e0c8d5cc6ef49f673f48c88d43e->enter($__internal_155caba79a1330a79b042524d3036691947d3e0c8d5cc6ef49f673f48c88d43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da17a176381db2d831a4ac041c81d0ceda13ff2c876c562c01d750217629911b->leave($__internal_da17a176381db2d831a4ac041c81d0ceda13ff2c876c562c01d750217629911b_prof);

        
        $__internal_155caba79a1330a79b042524d3036691947d3e0c8d5cc6ef49f673f48c88d43e->leave($__internal_155caba79a1330a79b042524d3036691947d3e0c8d5cc6ef49f673f48c88d43e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4f4dbb923b02ed6fcb672eea23fc20f417e592ee28660662e32460c53d41ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f4dbb923b02ed6fcb672eea23fc20f417e592ee28660662e32460c53d41ceb->enter($__internal_b4f4dbb923b02ed6fcb672eea23fc20f417e592ee28660662e32460c53d41ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_684ef91c0311362812244b3b1ae75ede48f9d0630e2001893ac6470569971ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684ef91c0311362812244b3b1ae75ede48f9d0630e2001893ac6470569971ff0->enter($__internal_684ef91c0311362812244b3b1ae75ede48f9d0630e2001893ac6470569971ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_684ef91c0311362812244b3b1ae75ede48f9d0630e2001893ac6470569971ff0->leave($__internal_684ef91c0311362812244b3b1ae75ede48f9d0630e2001893ac6470569971ff0_prof);

        
        $__internal_b4f4dbb923b02ed6fcb672eea23fc20f417e592ee28660662e32460c53d41ceb->leave($__internal_b4f4dbb923b02ed6fcb672eea23fc20f417e592ee28660662e32460c53d41ceb_prof);

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
