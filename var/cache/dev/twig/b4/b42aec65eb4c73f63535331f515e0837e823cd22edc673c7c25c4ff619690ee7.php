<?php

/* clients/form.html.twig */
class __TwigTemplate_0a01fa4495e2c2ae7eb8e40276693071b53ac6261691ccf70ce2668b169c69dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_21a30552a3d340fa2a866c2446b0ad4f0dd764cb1e0b63752005a06f8ea6595e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a30552a3d340fa2a866c2446b0ad4f0dd764cb1e0b63752005a06f8ea6595e->enter($__internal_21a30552a3d340fa2a866c2446b0ad4f0dd764cb1e0b63752005a06f8ea6595e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_0d7ae2e1d1dc35275deda77d55d7dcbce9139ad85a083c51a286510d31ee8bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7ae2e1d1dc35275deda77d55d7dcbce9139ad85a083c51a286510d31ee8bdd->enter($__internal_0d7ae2e1d1dc35275deda77d55d7dcbce9139ad85a083c51a286510d31ee8bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a30552a3d340fa2a866c2446b0ad4f0dd764cb1e0b63752005a06f8ea6595e->leave($__internal_21a30552a3d340fa2a866c2446b0ad4f0dd764cb1e0b63752005a06f8ea6595e_prof);

        
        $__internal_0d7ae2e1d1dc35275deda77d55d7dcbce9139ad85a083c51a286510d31ee8bdd->leave($__internal_0d7ae2e1d1dc35275deda77d55d7dcbce9139ad85a083c51a286510d31ee8bdd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af0e589472584a66cdd3d5e9bbd19f96ad7b25a2e30b4959c9351f6cbb26325b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0e589472584a66cdd3d5e9bbd19f96ad7b25a2e30b4959c9351f6cbb26325b->enter($__internal_af0e589472584a66cdd3d5e9bbd19f96ad7b25a2e30b4959c9351f6cbb26325b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a28b394053b0a78482f195b493d4652fb27f30eedc9045d5bd72d66d629ec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a28b394053b0a78482f195b493d4652fb27f30eedc9045d5bd72d66d629ec42->enter($__internal_3a28b394053b0a78482f195b493d4652fb27f30eedc9045d5bd72d66d629ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a28b394053b0a78482f195b493d4652fb27f30eedc9045d5bd72d66d629ec42->leave($__internal_3a28b394053b0a78482f195b493d4652fb27f30eedc9045d5bd72d66d629ec42_prof);

        
        $__internal_af0e589472584a66cdd3d5e9bbd19f96ad7b25a2e30b4959c9351f6cbb26325b->leave($__internal_af0e589472584a66cdd3d5e9bbd19f96ad7b25a2e30b4959c9351f6cbb26325b_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
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
", "clients/form.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app\\Resources\\views\\clients\\form.html.twig");
    }
}
