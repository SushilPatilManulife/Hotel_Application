<?php

/* reservations/book.html.twig */
class __TwigTemplate_e7f5131381b2400df8fd5a63ce939ecf62fd36f61428f40be39dd322279bc3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_752bffd7dd5b009d11ccb4dfec6da6cb86c17d08c4e124ad10ab8b8a3ba30972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752bffd7dd5b009d11ccb4dfec6da6cb86c17d08c4e124ad10ab8b8a3ba30972->enter($__internal_752bffd7dd5b009d11ccb4dfec6da6cb86c17d08c4e124ad10ab8b8a3ba30972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_baf4efafc001a66cadc8e3142bf43bdf976362aaa40f5f405c37b633095dc685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf4efafc001a66cadc8e3142bf43bdf976362aaa40f5f405c37b633095dc685->enter($__internal_baf4efafc001a66cadc8e3142bf43bdf976362aaa40f5f405c37b633095dc685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_752bffd7dd5b009d11ccb4dfec6da6cb86c17d08c4e124ad10ab8b8a3ba30972->leave($__internal_752bffd7dd5b009d11ccb4dfec6da6cb86c17d08c4e124ad10ab8b8a3ba30972_prof);

        
        $__internal_baf4efafc001a66cadc8e3142bf43bdf976362aaa40f5f405c37b633095dc685->leave($__internal_baf4efafc001a66cadc8e3142bf43bdf976362aaa40f5f405c37b633095dc685_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8192c4f915f205f4c126de6804023af6216c622ae4299271191fac39ca78361d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8192c4f915f205f4c126de6804023af6216c622ae4299271191fac39ca78361d->enter($__internal_8192c4f915f205f4c126de6804023af6216c622ae4299271191fac39ca78361d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cde6de4462fb87ffd50bfa2c9e5a2508d5a94a1af869538c85ebc0e7eba9d28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde6de4462fb87ffd50bfa2c9e5a2508d5a94a1af869538c85ebc0e7eba9d28a->enter($__internal_cde6de4462fb87ffd50bfa2c9e5a2508d5a94a1af869538c85ebc0e7eba9d28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: ";
        // line 8
        echo twig_escape_filter($this->env, ($context["id_client"] ?? $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_cde6de4462fb87ffd50bfa2c9e5a2508d5a94a1af869538c85ebc0e7eba9d28a->leave($__internal_cde6de4462fb87ffd50bfa2c9e5a2508d5a94a1af869538c85ebc0e7eba9d28a_prof);

        
        $__internal_8192c4f915f205f4c126de6804023af6216c622ae4299271191fac39ca78361d->leave($__internal_8192c4f915f205f4c126de6804023af6216c622ae4299271191fac39ca78361d_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: {{id_client}}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app\\Resources\\views\\reservations\\book.html.twig");
    }
}
