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
        $__internal_8f6e0fcb523962732a338154385bc1c08e6845b4d38fc38f19879e692c2ec875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6e0fcb523962732a338154385bc1c08e6845b4d38fc38f19879e692c2ec875->enter($__internal_8f6e0fcb523962732a338154385bc1c08e6845b4d38fc38f19879e692c2ec875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $__internal_e4eb0784959aa5980fd90dc8747b34b29613681396cc4da2247972e2555f925e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4eb0784959aa5980fd90dc8747b34b29613681396cc4da2247972e2555f925e->enter($__internal_e4eb0784959aa5980fd90dc8747b34b29613681396cc4da2247972e2555f925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f6e0fcb523962732a338154385bc1c08e6845b4d38fc38f19879e692c2ec875->leave($__internal_8f6e0fcb523962732a338154385bc1c08e6845b4d38fc38f19879e692c2ec875_prof);

        
        $__internal_e4eb0784959aa5980fd90dc8747b34b29613681396cc4da2247972e2555f925e->leave($__internal_e4eb0784959aa5980fd90dc8747b34b29613681396cc4da2247972e2555f925e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59351159d18ce8f4626c6fa895bf55291dc8e12fcaa06416e34b510c60bbf690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59351159d18ce8f4626c6fa895bf55291dc8e12fcaa06416e34b510c60bbf690->enter($__internal_59351159d18ce8f4626c6fa895bf55291dc8e12fcaa06416e34b510c60bbf690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f7977f76ff0903080d242a064d31e24af152ccbec203be0eeef4155c4d58190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7977f76ff0903080d242a064d31e24af152ccbec203be0eeef4155c4d58190->enter($__internal_4f7977f76ff0903080d242a064d31e24af152ccbec203be0eeef4155c4d58190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4f7977f76ff0903080d242a064d31e24af152ccbec203be0eeef4155c4d58190->leave($__internal_4f7977f76ff0903080d242a064d31e24af152ccbec203be0eeef4155c4d58190_prof);

        
        $__internal_59351159d18ce8f4626c6fa895bf55291dc8e12fcaa06416e34b510c60bbf690->leave($__internal_59351159d18ce8f4626c6fa895bf55291dc8e12fcaa06416e34b510c60bbf690_prof);

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
