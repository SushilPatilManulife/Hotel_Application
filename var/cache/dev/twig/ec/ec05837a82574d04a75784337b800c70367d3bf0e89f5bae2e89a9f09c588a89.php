<?php

/* base.html.twig */
class __TwigTemplate_6f7ccb0bd6f3d93de97dfc25e94ea49f669201ad9e1bef2aab772932f49b3b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe78264f424a27012e4d823e796cfb9e32df29336b8fb4ae684aa9a1c4490793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe78264f424a27012e4d823e796cfb9e32df29336b8fb4ae684aa9a1c4490793->enter($__internal_fe78264f424a27012e4d823e796cfb9e32df29336b8fb4ae684aa9a1c4490793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_12c1e5cf189c821a7198b10abd091da6e3d599578afec9cecc13ea8a891ba9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c1e5cf189c821a7198b10abd091da6e3d599578afec9cecc13ea8a891ba9ad->enter($__internal_12c1e5cf189c821a7198b10abd091da6e3d599578afec9cecc13ea8a891ba9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>

    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              {
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd'
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_fe78264f424a27012e4d823e796cfb9e32df29336b8fb4ae684aa9a1c4490793->leave($__internal_fe78264f424a27012e4d823e796cfb9e32df29336b8fb4ae684aa9a1c4490793_prof);

        
        $__internal_12c1e5cf189c821a7198b10abd091da6e3d599578afec9cecc13ea8a891ba9ad->leave($__internal_12c1e5cf189c821a7198b10abd091da6e3d599578afec9cecc13ea8a891ba9ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b21a2f569a2c301abe9b5ce029bf09d8e59e8a1bf152b82c9a822aa978f3f7f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21a2f569a2c301abe9b5ce029bf09d8e59e8a1bf152b82c9a822aa978f3f7f6->enter($__internal_b21a2f569a2c301abe9b5ce029bf09d8e59e8a1bf152b82c9a822aa978f3f7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8083f2d96725aee4b4ea847b6f84dc962f2729b56844d6cad02bd22333570945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8083f2d96725aee4b4ea847b6f84dc962f2729b56844d6cad02bd22333570945->enter($__internal_8083f2d96725aee4b4ea847b6f84dc962f2729b56844d6cad02bd22333570945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_8083f2d96725aee4b4ea847b6f84dc962f2729b56844d6cad02bd22333570945->leave($__internal_8083f2d96725aee4b4ea847b6f84dc962f2729b56844d6cad02bd22333570945_prof);

        
        $__internal_b21a2f569a2c301abe9b5ce029bf09d8e59e8a1bf152b82c9a822aa978f3f7f6->leave($__internal_b21a2f569a2c301abe9b5ce029bf09d8e59e8a1bf152b82c9a822aa978f3f7f6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd174fe590ae2608d4b635321d67a357102333eaf238afe07f3dcd8197bf765e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd174fe590ae2608d4b635321d67a357102333eaf238afe07f3dcd8197bf765e->enter($__internal_bd174fe590ae2608d4b635321d67a357102333eaf238afe07f3dcd8197bf765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_46666243efbed640b449601e8863b21611b47a7f172c020fe573046118e45d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46666243efbed640b449601e8863b21611b47a7f172c020fe573046118e45d45->enter($__internal_46666243efbed640b449601e8863b21611b47a7f172c020fe573046118e45d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_46666243efbed640b449601e8863b21611b47a7f172c020fe573046118e45d45->leave($__internal_46666243efbed640b449601e8863b21611b47a7f172c020fe573046118e45d45_prof);

        
        $__internal_bd174fe590ae2608d4b635321d67a357102333eaf238afe07f3dcd8197bf765e->leave($__internal_bd174fe590ae2608d4b635321d67a357102333eaf238afe07f3dcd8197bf765e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_612c3527146a41a19ed7505d639dc760428133d53ccc5e945b02106d1d5f6144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612c3527146a41a19ed7505d639dc760428133d53ccc5e945b02106d1d5f6144->enter($__internal_612c3527146a41a19ed7505d639dc760428133d53ccc5e945b02106d1d5f6144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93017550cb24073fbc321dfd722017138d8c95e59a1b0d278cead06567789e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93017550cb24073fbc321dfd722017138d8c95e59a1b0d278cead06567789e27->enter($__internal_93017550cb24073fbc321dfd722017138d8c95e59a1b0d278cead06567789e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93017550cb24073fbc321dfd722017138d8c95e59a1b0d278cead06567789e27->leave($__internal_93017550cb24073fbc321dfd722017138d8c95e59a1b0d278cead06567789e27_prof);

        
        $__internal_612c3527146a41a19ed7505d639dc760428133d53ccc5e945b02106d1d5f6144->leave($__internal_612c3527146a41a19ed7505d639dc760428133d53ccc5e945b02106d1d5f6144_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59f62330a37ea05e6153c05a994be33fdd8b5644658f9b5484de2129943dfdf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f62330a37ea05e6153c05a994be33fdd8b5644658f9b5484de2129943dfdf9->enter($__internal_59f62330a37ea05e6153c05a994be33fdd8b5644658f9b5484de2129943dfdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_884274a3f0f32f5fe192429daf5d385516ab0796340f3368835c471ee2b256eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884274a3f0f32f5fe192429daf5d385516ab0796340f3368835c471ee2b256eb->enter($__internal_884274a3f0f32f5fe192429daf5d385516ab0796340f3368835c471ee2b256eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_884274a3f0f32f5fe192429daf5d385516ab0796340f3368835c471ee2b256eb->leave($__internal_884274a3f0f32f5fe192429daf5d385516ab0796340f3368835c471ee2b256eb_prof);

        
        $__internal_59f62330a37ea05e6153c05a994be33fdd8b5644658f9b5484de2129943dfdf9->leave($__internal_59f62330a37ea05e6153c05a994be33fdd8b5644658f9b5484de2129943dfdf9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"{{path(\"home\")}}\">Home</a></li>
            <li><a href=\"{{path(\"index_clients\")}}\">Clients</a></li>
            <li><a href=\"{{path(\"reservations\")}}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>

    {% block body %}{% endblock %}


    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              {
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd'
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app\\Resources\\views\\base.html.twig");
    }
}
