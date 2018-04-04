<?php

/* clients/index.html.twig */
class __TwigTemplate_492dc8d34cf11cadda315871feaf207fdfff2a363ce7859e4c95c74b19584fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_b3186200ed691ca1e738b33943430a96ab92fb72b061c9d29636771d3f0a118b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3186200ed691ca1e738b33943430a96ab92fb72b061c9d29636771d3f0a118b->enter($__internal_b3186200ed691ca1e738b33943430a96ab92fb72b061c9d29636771d3f0a118b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_a977a8d05d2d73507ecbf515082c348def6b50339b419ad9ae5fef97cefc0176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a977a8d05d2d73507ecbf515082c348def6b50339b419ad9ae5fef97cefc0176->enter($__internal_a977a8d05d2d73507ecbf515082c348def6b50339b419ad9ae5fef97cefc0176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3186200ed691ca1e738b33943430a96ab92fb72b061c9d29636771d3f0a118b->leave($__internal_b3186200ed691ca1e738b33943430a96ab92fb72b061c9d29636771d3f0a118b_prof);

        
        $__internal_a977a8d05d2d73507ecbf515082c348def6b50339b419ad9ae5fef97cefc0176->leave($__internal_a977a8d05d2d73507ecbf515082c348def6b50339b419ad9ae5fef97cefc0176_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac60b8646a20f6b73b36fe89c62d94ddab20c289ee861926d56bc1f948600d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac60b8646a20f6b73b36fe89c62d94ddab20c289ee861926d56bc1f948600d7->enter($__internal_fac60b8646a20f6b73b36fe89c62d94ddab20c289ee861926d56bc1f948600d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_086144569024d044f2ab276dff0014ba4d40b4f36d884a3b7bccadbd73445780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086144569024d044f2ab276dff0014ba4d40b4f36d884a3b7bccadbd73445780->enter($__internal_086144569024d044f2ab276dff0014ba4d40b4f36d884a3b7bccadbd73445780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_086144569024d044f2ab276dff0014ba4d40b4f36d884a3b7bccadbd73445780->leave($__internal_086144569024d044f2ab276dff0014ba4d40b4f36d884a3b7bccadbd73445780_prof);

        
        $__internal_fac60b8646a20f6b73b36fe89c62d94ddab20c289ee861926d56bc1f948600d7->leave($__internal_fac60b8646a20f6b73b36fe89c62d94ddab20c289ee861926d56bc1f948600d7_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
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
", "clients/index.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app\\Resources\\views\\clients\\index.html.twig");
    }
}
