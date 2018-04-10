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
        $__internal_fc06531681dd2b497fbf6217d7cfdeba9eae5aef92a10f7aa6efdbcb8f6c7f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc06531681dd2b497fbf6217d7cfdeba9eae5aef92a10f7aa6efdbcb8f6c7f6f->enter($__internal_fc06531681dd2b497fbf6217d7cfdeba9eae5aef92a10f7aa6efdbcb8f6c7f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_5856219129a5bddb2ced2b36f30bcc8d81167cf37c37da393b8d9b01b68b80b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5856219129a5bddb2ced2b36f30bcc8d81167cf37c37da393b8d9b01b68b80b4->enter($__internal_5856219129a5bddb2ced2b36f30bcc8d81167cf37c37da393b8d9b01b68b80b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc06531681dd2b497fbf6217d7cfdeba9eae5aef92a10f7aa6efdbcb8f6c7f6f->leave($__internal_fc06531681dd2b497fbf6217d7cfdeba9eae5aef92a10f7aa6efdbcb8f6c7f6f_prof);

        
        $__internal_5856219129a5bddb2ced2b36f30bcc8d81167cf37c37da393b8d9b01b68b80b4->leave($__internal_5856219129a5bddb2ced2b36f30bcc8d81167cf37c37da393b8d9b01b68b80b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb9a972d8f8d8c7ca18e7a1937a51a365c2a4ae57ba74fa4e8d610d28d328063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9a972d8f8d8c7ca18e7a1937a51a365c2a4ae57ba74fa4e8d610d28d328063->enter($__internal_eb9a972d8f8d8c7ca18e7a1937a51a365c2a4ae57ba74fa4e8d610d28d328063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4b6b8adaec71415b712452c525fa6d6b5643faa7023ffa3709dee1fa284d046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b6b8adaec71415b712452c525fa6d6b5643faa7023ffa3709dee1fa284d046->enter($__internal_f4b6b8adaec71415b712452c525fa6d6b5643faa7023ffa3709dee1fa284d046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                  <a class=\"hollow button\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_clients", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
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
        
        $__internal_f4b6b8adaec71415b712452c525fa6d6b5643faa7023ffa3709dee1fa284d046->leave($__internal_f4b6b8adaec71415b712452c525fa6d6b5643faa7023ffa3709dee1fa284d046_prof);

        
        $__internal_eb9a972d8f8d8c7ca18e7a1937a51a365c2a4ae57ba74fa4e8d610d28d328063->leave($__internal_eb9a972d8f8d8c7ca18e7a1937a51a365c2a4ae57ba74fa4e8d610d28d328063_prof);

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
        return array (  99 => 28,  89 => 24,  85 => 23,  80 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
                  <a class=\"hollow button\" href=\"{{path(\"modify_clients\",{'id_client':client.id})}}\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{path(\"booking\",{'id_client': client.id})}}\">BOOK A ROOM</a>
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
