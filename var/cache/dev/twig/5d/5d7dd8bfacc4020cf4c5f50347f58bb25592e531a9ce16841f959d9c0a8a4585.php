<?php

/* :clients:index.html.twig */
class __TwigTemplate_5259bfdb9c62ee39795eac145e588c05771b25441a9850dc44afc64ddf2db64a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":clients:index.html.twig", 1);
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
        $__internal_d198c499206f9ca135549fac9e9286933aa34d022f2a879bbbee3857ee64b894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d198c499206f9ca135549fac9e9286933aa34d022f2a879bbbee3857ee64b894->enter($__internal_d198c499206f9ca135549fac9e9286933aa34d022f2a879bbbee3857ee64b894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:index.html.twig"));

        $__internal_f9462371851a95389f6778649f5ff52ec9ddc1c898fbfdd33fd251e87b3c91af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9462371851a95389f6778649f5ff52ec9ddc1c898fbfdd33fd251e87b3c91af->enter($__internal_f9462371851a95389f6778649f5ff52ec9ddc1c898fbfdd33fd251e87b3c91af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d198c499206f9ca135549fac9e9286933aa34d022f2a879bbbee3857ee64b894->leave($__internal_d198c499206f9ca135549fac9e9286933aa34d022f2a879bbbee3857ee64b894_prof);

        
        $__internal_f9462371851a95389f6778649f5ff52ec9ddc1c898fbfdd33fd251e87b3c91af->leave($__internal_f9462371851a95389f6778649f5ff52ec9ddc1c898fbfdd33fd251e87b3c91af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_401609024b23d060a04371e6ad8ea31d90a455f7f634270ad8ac4abc960de482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401609024b23d060a04371e6ad8ea31d90a455f7f634270ad8ac4abc960de482->enter($__internal_401609024b23d060a04371e6ad8ea31d90a455f7f634270ad8ac4abc960de482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95d4733d77f56c3adcc726aa77e0769d3ec826f8bc22fa8c2c49e51cd1d83e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d4733d77f56c3adcc726aa77e0769d3ec826f8bc22fa8c2c49e51cd1d83e0b->enter($__internal_95d4733d77f56c3adcc726aa77e0769d3ec826f8bc22fa8c2c49e51cd1d83e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => 1));
        echo "\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_95d4733d77f56c3adcc726aa77e0769d3ec826f8bc22fa8c2c49e51cd1d83e0b->leave($__internal_95d4733d77f56c3adcc726aa77e0769d3ec826f8bc22fa8c2c49e51cd1d83e0b_prof);

        
        $__internal_401609024b23d060a04371e6ad8ea31d90a455f7f634270ad8ac4abc960de482->leave($__internal_401609024b23d060a04371e6ad8ea31d90a455f7f634270ad8ac4abc960de482_prof);

    }

    public function getTemplateName()
    {
        return ":clients:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{path(\"booking\",{'id_client': 1})}}\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", ":clients:index.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/clients/index.html.twig");
    }
}
