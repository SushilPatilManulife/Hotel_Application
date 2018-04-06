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
        $__internal_8b2820b5aaa6b93844895f3b98c1aef4f0f655df7461616bfe6e4f679b89412b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2820b5aaa6b93844895f3b98c1aef4f0f655df7461616bfe6e4f679b89412b->enter($__internal_8b2820b5aaa6b93844895f3b98c1aef4f0f655df7461616bfe6e4f679b89412b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $__internal_bd9041b4db94cfd983180ebace20d1ec891693fcfe92b3994c31d9d2a262d121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9041b4db94cfd983180ebace20d1ec891693fcfe92b3994c31d9d2a262d121->enter($__internal_bd9041b4db94cfd983180ebace20d1ec891693fcfe92b3994c31d9d2a262d121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b2820b5aaa6b93844895f3b98c1aef4f0f655df7461616bfe6e4f679b89412b->leave($__internal_8b2820b5aaa6b93844895f3b98c1aef4f0f655df7461616bfe6e4f679b89412b_prof);

        
        $__internal_bd9041b4db94cfd983180ebace20d1ec891693fcfe92b3994c31d9d2a262d121->leave($__internal_bd9041b4db94cfd983180ebace20d1ec891693fcfe92b3994c31d9d2a262d121_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c822dceaefbdd9148011b5bad4d7e21263c9b177a1e6cf43fa19d633adaa11cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c822dceaefbdd9148011b5bad4d7e21263c9b177a1e6cf43fa19d633adaa11cb->enter($__internal_c822dceaefbdd9148011b5bad4d7e21263c9b177a1e6cf43fa19d633adaa11cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_028f50dee41a5594bbe159edb70d71c349b64c00f02d8bf5409be224a79e8077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028f50dee41a5594bbe159edb70d71c349b64c00f02d8bf5409be224a79e8077->enter($__internal_028f50dee41a5594bbe159edb70d71c349b64c00f02d8bf5409be224a79e8077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_028f50dee41a5594bbe159edb70d71c349b64c00f02d8bf5409be224a79e8077->leave($__internal_028f50dee41a5594bbe159edb70d71c349b64c00f02d8bf5409be224a79e8077_prof);

        
        $__internal_c822dceaefbdd9148011b5bad4d7e21263c9b177a1e6cf43fa19d633adaa11cb->leave($__internal_c822dceaefbdd9148011b5bad4d7e21263c9b177a1e6cf43fa19d633adaa11cb_prof);

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
