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
        $__internal_0fab6e8cb5f5c573058318f22c8de1a21adeee6815cfa7fb9f4f8c64b205ebb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fab6e8cb5f5c573058318f22c8de1a21adeee6815cfa7fb9f4f8c64b205ebb2->enter($__internal_0fab6e8cb5f5c573058318f22c8de1a21adeee6815cfa7fb9f4f8c64b205ebb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_dbe8a3a0ff923547ff1cb71dd014a23f8fe19e101fa8ba9694942db70d339ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe8a3a0ff923547ff1cb71dd014a23f8fe19e101fa8ba9694942db70d339ebf->enter($__internal_dbe8a3a0ff923547ff1cb71dd014a23f8fe19e101fa8ba9694942db70d339ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fab6e8cb5f5c573058318f22c8de1a21adeee6815cfa7fb9f4f8c64b205ebb2->leave($__internal_0fab6e8cb5f5c573058318f22c8de1a21adeee6815cfa7fb9f4f8c64b205ebb2_prof);

        
        $__internal_dbe8a3a0ff923547ff1cb71dd014a23f8fe19e101fa8ba9694942db70d339ebf->leave($__internal_dbe8a3a0ff923547ff1cb71dd014a23f8fe19e101fa8ba9694942db70d339ebf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbb746a9c454ec4edef6ca8ce978331d3a9a41353791afd1301f6a6999228826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb746a9c454ec4edef6ca8ce978331d3a9a41353791afd1301f6a6999228826->enter($__internal_dbb746a9c454ec4edef6ca8ce978331d3a9a41353791afd1301f6a6999228826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d7f3b17388d1f970dbc96a3172b685dc27c5a851ca9ab459c9e6d3c143659c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7f3b17388d1f970dbc96a3172b685dc27c5a851ca9ab459c9e6d3c143659c2->enter($__internal_9d7f3b17388d1f970dbc96a3172b685dc27c5a851ca9ab459c9e6d3c143659c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d7f3b17388d1f970dbc96a3172b685dc27c5a851ca9ab459c9e6d3c143659c2->leave($__internal_9d7f3b17388d1f970dbc96a3172b685dc27c5a851ca9ab459c9e6d3c143659c2_prof);

        
        $__internal_dbb746a9c454ec4edef6ca8ce978331d3a9a41353791afd1301f6a6999228826->leave($__internal_dbb746a9c454ec4edef6ca8ce978331d3a9a41353791afd1301f6a6999228826_prof);

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
