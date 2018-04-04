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
        $__internal_e969f4ccc3fbd4856ab31c735ecb37cfaca85d71e9cb7b9aaea9764d3a7f30f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e969f4ccc3fbd4856ab31c735ecb37cfaca85d71e9cb7b9aaea9764d3a7f30f3->enter($__internal_e969f4ccc3fbd4856ab31c735ecb37cfaca85d71e9cb7b9aaea9764d3a7f30f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_3f3caf30230db1c247456d7de7e88df601c100bcf657dee4269e72ca346cdbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3caf30230db1c247456d7de7e88df601c100bcf657dee4269e72ca346cdbe8->enter($__internal_3f3caf30230db1c247456d7de7e88df601c100bcf657dee4269e72ca346cdbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e969f4ccc3fbd4856ab31c735ecb37cfaca85d71e9cb7b9aaea9764d3a7f30f3->leave($__internal_e969f4ccc3fbd4856ab31c735ecb37cfaca85d71e9cb7b9aaea9764d3a7f30f3_prof);

        
        $__internal_3f3caf30230db1c247456d7de7e88df601c100bcf657dee4269e72ca346cdbe8->leave($__internal_3f3caf30230db1c247456d7de7e88df601c100bcf657dee4269e72ca346cdbe8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0464f384fa008151b2aaaa21ddedca470ce616e08302ba5e5c54e99ae934d991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0464f384fa008151b2aaaa21ddedca470ce616e08302ba5e5c54e99ae934d991->enter($__internal_0464f384fa008151b2aaaa21ddedca470ce616e08302ba5e5c54e99ae934d991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90d6e5b7d8a19cb4e7e3fc1018c3b60c21965525185db9b7db876c0718729469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d6e5b7d8a19cb4e7e3fc1018c3b60c21965525185db9b7db876c0718729469->enter($__internal_90d6e5b7d8a19cb4e7e3fc1018c3b60c21965525185db9b7db876c0718729469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90d6e5b7d8a19cb4e7e3fc1018c3b60c21965525185db9b7db876c0718729469->leave($__internal_90d6e5b7d8a19cb4e7e3fc1018c3b60c21965525185db9b7db876c0718729469_prof);

        
        $__internal_0464f384fa008151b2aaaa21ddedca470ce616e08302ba5e5c54e99ae934d991->leave($__internal_0464f384fa008151b2aaaa21ddedca470ce616e08302ba5e5c54e99ae934d991_prof);

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
