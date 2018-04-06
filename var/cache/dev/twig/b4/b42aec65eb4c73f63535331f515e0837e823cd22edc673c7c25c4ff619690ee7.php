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
        $__internal_e45df1fdd38ca151fb7e79569b97ff2b0aa4c888e37e03d0a54617edee1f7c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45df1fdd38ca151fb7e79569b97ff2b0aa4c888e37e03d0a54617edee1f7c83->enter($__internal_e45df1fdd38ca151fb7e79569b97ff2b0aa4c888e37e03d0a54617edee1f7c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_814383c03a47f88c74c4d7149e75fc802230bd207e4b23315a76a7821fe6174c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814383c03a47f88c74c4d7149e75fc802230bd207e4b23315a76a7821fe6174c->enter($__internal_814383c03a47f88c74c4d7149e75fc802230bd207e4b23315a76a7821fe6174c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e45df1fdd38ca151fb7e79569b97ff2b0aa4c888e37e03d0a54617edee1f7c83->leave($__internal_e45df1fdd38ca151fb7e79569b97ff2b0aa4c888e37e03d0a54617edee1f7c83_prof);

        
        $__internal_814383c03a47f88c74c4d7149e75fc802230bd207e4b23315a76a7821fe6174c->leave($__internal_814383c03a47f88c74c4d7149e75fc802230bd207e4b23315a76a7821fe6174c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b568bf140cd02a0ce6aaa51cc17ec11fa08246017538a7fdec10bcba9eaccce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b568bf140cd02a0ce6aaa51cc17ec11fa08246017538a7fdec10bcba9eaccce->enter($__internal_7b568bf140cd02a0ce6aaa51cc17ec11fa08246017538a7fdec10bcba9eaccce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_168b2ba3b3eccd7e74dea2bc2db7a1a872955e5c34b3935dc1d6ff5de650048e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168b2ba3b3eccd7e74dea2bc2db7a1a872955e5c34b3935dc1d6ff5de650048e->enter($__internal_168b2ba3b3eccd7e74dea2bc2db7a1a872955e5c34b3935dc1d6ff5de650048e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_168b2ba3b3eccd7e74dea2bc2db7a1a872955e5c34b3935dc1d6ff5de650048e->leave($__internal_168b2ba3b3eccd7e74dea2bc2db7a1a872955e5c34b3935dc1d6ff5de650048e_prof);

        
        $__internal_7b568bf140cd02a0ce6aaa51cc17ec11fa08246017538a7fdec10bcba9eaccce->leave($__internal_7b568bf140cd02a0ce6aaa51cc17ec11fa08246017538a7fdec10bcba9eaccce_prof);

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
