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
        $__internal_5e3dba4f5252d0d3a58abceabf491af4b3582e21b0a92e1f42314227715b166f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3dba4f5252d0d3a58abceabf491af4b3582e21b0a92e1f42314227715b166f->enter($__internal_5e3dba4f5252d0d3a58abceabf491af4b3582e21b0a92e1f42314227715b166f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_c395c29abf5364457cf5029e32c1488217a3052e395bbbf2876e5e71095c47bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c395c29abf5364457cf5029e32c1488217a3052e395bbbf2876e5e71095c47bd->enter($__internal_c395c29abf5364457cf5029e32c1488217a3052e395bbbf2876e5e71095c47bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e3dba4f5252d0d3a58abceabf491af4b3582e21b0a92e1f42314227715b166f->leave($__internal_5e3dba4f5252d0d3a58abceabf491af4b3582e21b0a92e1f42314227715b166f_prof);

        
        $__internal_c395c29abf5364457cf5029e32c1488217a3052e395bbbf2876e5e71095c47bd->leave($__internal_c395c29abf5364457cf5029e32c1488217a3052e395bbbf2876e5e71095c47bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63d5f26fc97c959fc42533eaf98601a9f9bd1123abbe009728f29e65287f3e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d5f26fc97c959fc42533eaf98601a9f9bd1123abbe009728f29e65287f3e86->enter($__internal_63d5f26fc97c959fc42533eaf98601a9f9bd1123abbe009728f29e65287f3e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf875360b3d17b36e7049ea046cbcf2fcd798c8f0d99f11ef1a7e00a42998340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf875360b3d17b36e7049ea046cbcf2fcd798c8f0d99f11ef1a7e00a42998340->enter($__internal_cf875360b3d17b36e7049ea046cbcf2fcd798c8f0d99f11ef1a7e00a42998340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf875360b3d17b36e7049ea046cbcf2fcd798c8f0d99f11ef1a7e00a42998340->leave($__internal_cf875360b3d17b36e7049ea046cbcf2fcd798c8f0d99f11ef1a7e00a42998340_prof);

        
        $__internal_63d5f26fc97c959fc42533eaf98601a9f9bd1123abbe009728f29e65287f3e86->leave($__internal_63d5f26fc97c959fc42533eaf98601a9f9bd1123abbe009728f29e65287f3e86_prof);

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
