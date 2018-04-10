<?php

/* :clients:index.html.twig */
class __TwigTemplate_5259bfdb9c62ee39795eac145e588c05771b25441a9850dc44afc64ddf2db64a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":clients:index.html.twig", 1);
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
        $__internal_4ea6710a65c3d3231f948f98d482e937858a43468c7c24138358b0c24667b2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea6710a65c3d3231f948f98d482e937858a43468c7c24138358b0c24667b2f6->enter($__internal_4ea6710a65c3d3231f948f98d482e937858a43468c7c24138358b0c24667b2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:index.html.twig"));

        $__internal_d8eed254e97e5cf937b3722e349b2d8f142b048b6dc70cdd5c17840c000b09ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8eed254e97e5cf937b3722e349b2d8f142b048b6dc70cdd5c17840c000b09ec->enter($__internal_d8eed254e97e5cf937b3722e349b2d8f142b048b6dc70cdd5c17840c000b09ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ea6710a65c3d3231f948f98d482e937858a43468c7c24138358b0c24667b2f6->leave($__internal_4ea6710a65c3d3231f948f98d482e937858a43468c7c24138358b0c24667b2f6_prof);

        
        $__internal_d8eed254e97e5cf937b3722e349b2d8f142b048b6dc70cdd5c17840c000b09ec->leave($__internal_d8eed254e97e5cf937b3722e349b2d8f142b048b6dc70cdd5c17840c000b09ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09758bf7c24da42155e3eb8c0b3495fb5708fc8125de870e500a11fc60112cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09758bf7c24da42155e3eb8c0b3495fb5708fc8125de870e500a11fc60112cdb->enter($__internal_09758bf7c24da42155e3eb8c0b3495fb5708fc8125de870e500a11fc60112cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc6dc77c92e09f6c2b2cb1c7462ba98f409be74511e7e9503389c6ef9ded4536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6dc77c92e09f6c2b2cb1c7462ba98f409be74511e7e9503389c6ef9ded4536->enter($__internal_bc6dc77c92e09f6c2b2cb1c7462ba98f409be74511e7e9503389c6ef9ded4536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bc6dc77c92e09f6c2b2cb1c7462ba98f409be74511e7e9503389c6ef9ded4536->leave($__internal_bc6dc77c92e09f6c2b2cb1c7462ba98f409be74511e7e9503389c6ef9ded4536_prof);

        
        $__internal_09758bf7c24da42155e3eb8c0b3495fb5708fc8125de870e500a11fc60112cdb->leave($__internal_09758bf7c24da42155e3eb8c0b3495fb5708fc8125de870e500a11fc60112cdb_prof);

    }

    public function getTemplateName()
    {
        return ":clients:index.html.twig";
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
", ":clients:index.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/clients/index.html.twig");
    }
}
