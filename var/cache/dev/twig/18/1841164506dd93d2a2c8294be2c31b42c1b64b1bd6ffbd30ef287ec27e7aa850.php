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
        $__internal_afe1c189258f81b076d4a76eb8722e7cc8069a2afad0460fca13b7884c7cd90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe1c189258f81b076d4a76eb8722e7cc8069a2afad0460fca13b7884c7cd90f->enter($__internal_afe1c189258f81b076d4a76eb8722e7cc8069a2afad0460fca13b7884c7cd90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $__internal_f30110498e507d86a6652a4d6ebc3e260a786b2c49bac930005753e80a96d2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30110498e507d86a6652a4d6ebc3e260a786b2c49bac930005753e80a96d2de->enter($__internal_f30110498e507d86a6652a4d6ebc3e260a786b2c49bac930005753e80a96d2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afe1c189258f81b076d4a76eb8722e7cc8069a2afad0460fca13b7884c7cd90f->leave($__internal_afe1c189258f81b076d4a76eb8722e7cc8069a2afad0460fca13b7884c7cd90f_prof);

        
        $__internal_f30110498e507d86a6652a4d6ebc3e260a786b2c49bac930005753e80a96d2de->leave($__internal_f30110498e507d86a6652a4d6ebc3e260a786b2c49bac930005753e80a96d2de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b753f0eb84647f28a618a5bc2b04b13e17f8c208c5a28a29c950bfcd8d0c47ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b753f0eb84647f28a618a5bc2b04b13e17f8c208c5a28a29c950bfcd8d0c47ba->enter($__internal_b753f0eb84647f28a618a5bc2b04b13e17f8c208c5a28a29c950bfcd8d0c47ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_391208c8c0a267e47920db90a32bd297b02cfbf9f936cf5a10a4111c589036ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391208c8c0a267e47920db90a32bd297b02cfbf9f936cf5a10a4111c589036ea->enter($__internal_391208c8c0a267e47920db90a32bd297b02cfbf9f936cf5a10a4111c589036ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_391208c8c0a267e47920db90a32bd297b02cfbf9f936cf5a10a4111c589036ea->leave($__internal_391208c8c0a267e47920db90a32bd297b02cfbf9f936cf5a10a4111c589036ea_prof);

        
        $__internal_b753f0eb84647f28a618a5bc2b04b13e17f8c208c5a28a29c950bfcd8d0c47ba->leave($__internal_b753f0eb84647f28a618a5bc2b04b13e17f8c208c5a28a29c950bfcd8d0c47ba_prof);

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
