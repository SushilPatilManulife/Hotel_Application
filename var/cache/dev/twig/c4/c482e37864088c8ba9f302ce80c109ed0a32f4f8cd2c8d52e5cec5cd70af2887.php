<?php

/* :clients:form.html.twig */
class __TwigTemplate_6036370883ccad0d63cfc9451c136caa80c14c583d3c92b2ddb24d2d48bea747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":clients:form.html.twig", 1);
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
        $__internal_eff4572d9a313cbc1a64c1a9acc2a62b55e386cc98d65860dde0eb605659fe06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff4572d9a313cbc1a64c1a9acc2a62b55e386cc98d65860dde0eb605659fe06->enter($__internal_eff4572d9a313cbc1a64c1a9acc2a62b55e386cc98d65860dde0eb605659fe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $__internal_b08b788d0b07e022351523b59078b47ceeb43fce59a1209e8193eeba14b09cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08b788d0b07e022351523b59078b47ceeb43fce59a1209e8193eeba14b09cb3->enter($__internal_b08b788d0b07e022351523b59078b47ceeb43fce59a1209e8193eeba14b09cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eff4572d9a313cbc1a64c1a9acc2a62b55e386cc98d65860dde0eb605659fe06->leave($__internal_eff4572d9a313cbc1a64c1a9acc2a62b55e386cc98d65860dde0eb605659fe06_prof);

        
        $__internal_b08b788d0b07e022351523b59078b47ceeb43fce59a1209e8193eeba14b09cb3->leave($__internal_b08b788d0b07e022351523b59078b47ceeb43fce59a1209e8193eeba14b09cb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9283d2a48e5b03aa0b4481dbc79c2a330dd3d2cd4518e6d30b460c2d471ffd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9283d2a48e5b03aa0b4481dbc79c2a330dd3d2cd4518e6d30b460c2d471ffd6d->enter($__internal_9283d2a48e5b03aa0b4481dbc79c2a330dd3d2cd4518e6d30b460c2d471ffd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f4632524409b812fc2adc054829f9ec6c884acb7c8283b810b70aa92c13e7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4632524409b812fc2adc054829f9ec6c884acb7c8283b810b70aa92c13e7b8->enter($__internal_2f4632524409b812fc2adc054829f9ec6c884acb7c8283b810b70aa92c13e7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

";
        
        $__internal_2f4632524409b812fc2adc054829f9ec6c884acb7c8283b810b70aa92c13e7b8->leave($__internal_2f4632524409b812fc2adc054829f9ec6c884acb7c8283b810b70aa92c13e7b8_prof);

        
        $__internal_9283d2a48e5b03aa0b4481dbc79c2a330dd3d2cd4518e6d30b460c2d471ffd6d->leave($__internal_9283d2a48e5b03aa0b4481dbc79c2a330dd3d2cd4518e6d30b460c2d471ffd6d_prof);

    }

    public function getTemplateName()
    {
        return ":clients:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

{% endblock %}
", ":clients:form.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/clients/form.html.twig");
    }
}
