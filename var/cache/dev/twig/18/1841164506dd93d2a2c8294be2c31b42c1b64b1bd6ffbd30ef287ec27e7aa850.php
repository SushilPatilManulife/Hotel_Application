<?php

/* :reservations:index.html.twig */
class __TwigTemplate_8f61d5a7b989fbff95404a12a0fbc89d17259525b3f4eba87e1a5e8da2fbe0f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservations:index.html.twig", 1);
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
        $__internal_e7a5c056292deffa415c53199a02164a063aa8931f83f883ff22f255e3ad10b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a5c056292deffa415c53199a02164a063aa8931f83f883ff22f255e3ad10b2->enter($__internal_e7a5c056292deffa415c53199a02164a063aa8931f83f883ff22f255e3ad10b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $__internal_1ecd113fc0f50e2a127d72ff863b51d642071ee196e42ad48cf650e1f720cdb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecd113fc0f50e2a127d72ff863b51d642071ee196e42ad48cf650e1f720cdb5->enter($__internal_1ecd113fc0f50e2a127d72ff863b51d642071ee196e42ad48cf650e1f720cdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7a5c056292deffa415c53199a02164a063aa8931f83f883ff22f255e3ad10b2->leave($__internal_e7a5c056292deffa415c53199a02164a063aa8931f83f883ff22f255e3ad10b2_prof);

        
        $__internal_1ecd113fc0f50e2a127d72ff863b51d642071ee196e42ad48cf650e1f720cdb5->leave($__internal_1ecd113fc0f50e2a127d72ff863b51d642071ee196e42ad48cf650e1f720cdb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12cbc8557efba3b6b22c40a73a4769b7a53d5661a02c4ddbcfb432710a8622bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cbc8557efba3b6b22c40a73a4769b7a53d5661a02c4ddbcfb432710a8622bf->enter($__internal_12cbc8557efba3b6b22c40a73a4769b7a53d5661a02c4ddbcfb432710a8622bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d342c945d798c8fa1e46e7827e9b43182dc0b28e67722b45bf233581124ba611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d342c945d798c8fa1e46e7827e9b43182dc0b28e67722b45bf233581124ba611->enter($__internal_d342c945d798c8fa1e46e7827e9b43182dc0b28e67722b45bf233581124ba611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d342c945d798c8fa1e46e7827e9b43182dc0b28e67722b45bf233581124ba611->leave($__internal_d342c945d798c8fa1e46e7827e9b43182dc0b28e67722b45bf233581124ba611_prof);

        
        $__internal_12cbc8557efba3b6b22c40a73a4769b7a53d5661a02c4ddbcfb432710a8622bf->leave($__internal_12cbc8557efba3b6b22c40a73a4769b7a53d5661a02c4ddbcfb432710a8622bf_prof);

    }

    public function getTemplateName()
    {
        return ":reservations:index.html.twig";
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
", ":reservations:index.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/reservations/index.html.twig");
    }
}
