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
        $__internal_3cb63946c1e4a2801592d93fb04b4095164612018704a27214444313c559cd4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb63946c1e4a2801592d93fb04b4095164612018704a27214444313c559cd4b->enter($__internal_3cb63946c1e4a2801592d93fb04b4095164612018704a27214444313c559cd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $__internal_891196765e3b39a4c4c611da1ff4fba1ab19062f1186fabe65583ff2fa4f7a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891196765e3b39a4c4c611da1ff4fba1ab19062f1186fabe65583ff2fa4f7a8c->enter($__internal_891196765e3b39a4c4c611da1ff4fba1ab19062f1186fabe65583ff2fa4f7a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb63946c1e4a2801592d93fb04b4095164612018704a27214444313c559cd4b->leave($__internal_3cb63946c1e4a2801592d93fb04b4095164612018704a27214444313c559cd4b_prof);

        
        $__internal_891196765e3b39a4c4c611da1ff4fba1ab19062f1186fabe65583ff2fa4f7a8c->leave($__internal_891196765e3b39a4c4c611da1ff4fba1ab19062f1186fabe65583ff2fa4f7a8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dee3241f5907bbe4be64d0ed94f89077d0b0036fcaeb3daeb893e594be17563e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee3241f5907bbe4be64d0ed94f89077d0b0036fcaeb3daeb893e594be17563e->enter($__internal_dee3241f5907bbe4be64d0ed94f89077d0b0036fcaeb3daeb893e594be17563e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b75cb730d679b3e7a339324bb5da8595d93dad31587e75592d6ad59b33b5256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b75cb730d679b3e7a339324bb5da8595d93dad31587e75592d6ad59b33b5256->enter($__internal_5b75cb730d679b3e7a339324bb5da8595d93dad31587e75592d6ad59b33b5256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b75cb730d679b3e7a339324bb5da8595d93dad31587e75592d6ad59b33b5256->leave($__internal_5b75cb730d679b3e7a339324bb5da8595d93dad31587e75592d6ad59b33b5256_prof);

        
        $__internal_dee3241f5907bbe4be64d0ed94f89077d0b0036fcaeb3daeb893e594be17563e->leave($__internal_dee3241f5907bbe4be64d0ed94f89077d0b0036fcaeb3daeb893e594be17563e_prof);

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
