<?php

/* :reservations:book.html.twig */
class __TwigTemplate_a604af87614d5c0a99f939cf4957e876a39be131612d1702449d423178d1c3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservations:book.html.twig", 1);
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
        $__internal_1db1bfd65f170c325448cd12a8e9c1f0ac700343d5919c3cfa2cebc250bfd7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db1bfd65f170c325448cd12a8e9c1f0ac700343d5919c3cfa2cebc250bfd7a6->enter($__internal_1db1bfd65f170c325448cd12a8e9c1f0ac700343d5919c3cfa2cebc250bfd7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $__internal_98fa63909d3bcc80700ea284b21cbec3407e7477ee1c9df15cfbbb55c4a1236c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fa63909d3bcc80700ea284b21cbec3407e7477ee1c9df15cfbbb55c4a1236c->enter($__internal_98fa63909d3bcc80700ea284b21cbec3407e7477ee1c9df15cfbbb55c4a1236c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db1bfd65f170c325448cd12a8e9c1f0ac700343d5919c3cfa2cebc250bfd7a6->leave($__internal_1db1bfd65f170c325448cd12a8e9c1f0ac700343d5919c3cfa2cebc250bfd7a6_prof);

        
        $__internal_98fa63909d3bcc80700ea284b21cbec3407e7477ee1c9df15cfbbb55c4a1236c->leave($__internal_98fa63909d3bcc80700ea284b21cbec3407e7477ee1c9df15cfbbb55c4a1236c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1da8df230622422addcd045e3b824eecfc0217ba093500a8108f03d2550c9d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da8df230622422addcd045e3b824eecfc0217ba093500a8108f03d2550c9d45->enter($__internal_1da8df230622422addcd045e3b824eecfc0217ba093500a8108f03d2550c9d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51cc14721fb8cd0651ce485408ba777f4595349f07dde4299b2c9a6763f98a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51cc14721fb8cd0651ce485408ba777f4595349f07dde4299b2c9a6763f98a64->enter($__internal_51cc14721fb8cd0651ce485408ba777f4595349f07dde4299b2c9a6763f98a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51cc14721fb8cd0651ce485408ba777f4595349f07dde4299b2c9a6763f98a64->leave($__internal_51cc14721fb8cd0651ce485408ba777f4595349f07dde4299b2c9a6763f98a64_prof);

        
        $__internal_1da8df230622422addcd045e3b824eecfc0217ba093500a8108f03d2550c9d45->leave($__internal_1da8df230622422addcd045e3b824eecfc0217ba093500a8108f03d2550c9d45_prof);

    }

    public function getTemplateName()
    {
        return ":reservations:book.html.twig";
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
", ":reservations:book.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/reservations/book.html.twig");
    }
}
