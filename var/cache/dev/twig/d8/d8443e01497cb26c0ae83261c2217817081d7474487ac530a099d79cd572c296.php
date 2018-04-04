<?php

/* reservations/index.html.twig */
class __TwigTemplate_a20e88cb6a3bdb4f4543365f38f82cbd5b884d11f1bca7cb15cf3eda05d1d715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_38a69aa113a22481465efc57782e9d5415c7470e31c85d2c1609657822d89c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a69aa113a22481465efc57782e9d5415c7470e31c85d2c1609657822d89c08->enter($__internal_38a69aa113a22481465efc57782e9d5415c7470e31c85d2c1609657822d89c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_8a7faa6384360898c19518c2857620aa3c64c49e5d57f2a032fd04ba21c7ae95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7faa6384360898c19518c2857620aa3c64c49e5d57f2a032fd04ba21c7ae95->enter($__internal_8a7faa6384360898c19518c2857620aa3c64c49e5d57f2a032fd04ba21c7ae95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a69aa113a22481465efc57782e9d5415c7470e31c85d2c1609657822d89c08->leave($__internal_38a69aa113a22481465efc57782e9d5415c7470e31c85d2c1609657822d89c08_prof);

        
        $__internal_8a7faa6384360898c19518c2857620aa3c64c49e5d57f2a032fd04ba21c7ae95->leave($__internal_8a7faa6384360898c19518c2857620aa3c64c49e5d57f2a032fd04ba21c7ae95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_267cdb046c3753a1e8f9475a808d9d9d10c8be531de62ab73defed098540b429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267cdb046c3753a1e8f9475a808d9d9d10c8be531de62ab73defed098540b429->enter($__internal_267cdb046c3753a1e8f9475a808d9d9d10c8be531de62ab73defed098540b429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05598c5d0f4e8c73bfad2435766856b2e8b5e5bc9b7d9362c2fef90ee112dfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05598c5d0f4e8c73bfad2435766856b2e8b5e5bc9b7d9362c2fef90ee112dfbc->enter($__internal_05598c5d0f4e8c73bfad2435766856b2e8b5e5bc9b7d9362c2fef90ee112dfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_05598c5d0f4e8c73bfad2435766856b2e8b5e5bc9b7d9362c2fef90ee112dfbc->leave($__internal_05598c5d0f4e8c73bfad2435766856b2e8b5e5bc9b7d9362c2fef90ee112dfbc_prof);

        
        $__internal_267cdb046c3753a1e8f9475a808d9d9d10c8be531de62ab73defed098540b429->leave($__internal_267cdb046c3753a1e8f9475a808d9d9d10c8be531de62ab73defed098540b429_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
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
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app\\Resources\\views\\reservations\\index.html.twig");
    }
}
