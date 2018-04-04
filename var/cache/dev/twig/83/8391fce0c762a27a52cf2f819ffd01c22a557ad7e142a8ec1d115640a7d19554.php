<?php

/* ::base.html.twig */
class __TwigTemplate_ec727907c8bdfa3c9dc59c7f231ee189d362f5e842b51aa91957bdf575b84e7a extends Twig_Template
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
        $__internal_a889a8caef4c349b8bdfcae933df87cf2ad97371163442381d1105ee7858d6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a889a8caef4c349b8bdfcae933df87cf2ad97371163442381d1105ee7858d6c0->enter($__internal_a889a8caef4c349b8bdfcae933df87cf2ad97371163442381d1105ee7858d6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f16c92ede40bc2daf4616d5cb92da20bdd58abfa9799f84fbf2e31be63181e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16c92ede40bc2daf4616d5cb92da20bdd58abfa9799f84fbf2e31be63181e2f->enter($__internal_f16c92ede40bc2daf4616d5cb92da20bdd58abfa9799f84fbf2e31be63181e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a889a8caef4c349b8bdfcae933df87cf2ad97371163442381d1105ee7858d6c0->leave($__internal_a889a8caef4c349b8bdfcae933df87cf2ad97371163442381d1105ee7858d6c0_prof);

        
        $__internal_f16c92ede40bc2daf4616d5cb92da20bdd58abfa9799f84fbf2e31be63181e2f->leave($__internal_f16c92ede40bc2daf4616d5cb92da20bdd58abfa9799f84fbf2e31be63181e2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_deee17ede14a23f542480756af1c21b920867607767ee324cc8ca1da292ef9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deee17ede14a23f542480756af1c21b920867607767ee324cc8ca1da292ef9be->enter($__internal_deee17ede14a23f542480756af1c21b920867607767ee324cc8ca1da292ef9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14867aa4b95b96717e1474af7275ca87e20c948f811b80c584aa9575f51c5974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14867aa4b95b96717e1474af7275ca87e20c948f811b80c584aa9575f51c5974->enter($__internal_14867aa4b95b96717e1474af7275ca87e20c948f811b80c584aa9575f51c5974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_14867aa4b95b96717e1474af7275ca87e20c948f811b80c584aa9575f51c5974->leave($__internal_14867aa4b95b96717e1474af7275ca87e20c948f811b80c584aa9575f51c5974_prof);

        
        $__internal_deee17ede14a23f542480756af1c21b920867607767ee324cc8ca1da292ef9be->leave($__internal_deee17ede14a23f542480756af1c21b920867607767ee324cc8ca1da292ef9be_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_116ee94bef890943c3f62e79a1fc79175bbc8255710e29d0292d1c31b243e5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116ee94bef890943c3f62e79a1fc79175bbc8255710e29d0292d1c31b243e5c6->enter($__internal_116ee94bef890943c3f62e79a1fc79175bbc8255710e29d0292d1c31b243e5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce78dd2d2a34bbd0ab1729a778e70d69b5be458135c7ddd878af6bc25029a982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce78dd2d2a34bbd0ab1729a778e70d69b5be458135c7ddd878af6bc25029a982->enter($__internal_ce78dd2d2a34bbd0ab1729a778e70d69b5be458135c7ddd878af6bc25029a982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce78dd2d2a34bbd0ab1729a778e70d69b5be458135c7ddd878af6bc25029a982->leave($__internal_ce78dd2d2a34bbd0ab1729a778e70d69b5be458135c7ddd878af6bc25029a982_prof);

        
        $__internal_116ee94bef890943c3f62e79a1fc79175bbc8255710e29d0292d1c31b243e5c6->leave($__internal_116ee94bef890943c3f62e79a1fc79175bbc8255710e29d0292d1c31b243e5c6_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef51d575bda7436ff40fb6cddc032a6eaee1cb7e94346754f42d9f2f9657dcca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef51d575bda7436ff40fb6cddc032a6eaee1cb7e94346754f42d9f2f9657dcca->enter($__internal_ef51d575bda7436ff40fb6cddc032a6eaee1cb7e94346754f42d9f2f9657dcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5eeb94151646eb9384660de46928e5a8ddc419b9198a85f03fe3944898ffe94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eeb94151646eb9384660de46928e5a8ddc419b9198a85f03fe3944898ffe94b->enter($__internal_5eeb94151646eb9384660de46928e5a8ddc419b9198a85f03fe3944898ffe94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5eeb94151646eb9384660de46928e5a8ddc419b9198a85f03fe3944898ffe94b->leave($__internal_5eeb94151646eb9384660de46928e5a8ddc419b9198a85f03fe3944898ffe94b_prof);

        
        $__internal_ef51d575bda7436ff40fb6cddc032a6eaee1cb7e94346754f42d9f2f9657dcca->leave($__internal_ef51d575bda7436ff40fb6cddc032a6eaee1cb7e94346754f42d9f2f9657dcca_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad171c845fc4655b4e247efae87c2b105777cb9dbac26fcca1fd12a4d5a23df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad171c845fc4655b4e247efae87c2b105777cb9dbac26fcca1fd12a4d5a23df5->enter($__internal_ad171c845fc4655b4e247efae87c2b105777cb9dbac26fcca1fd12a4d5a23df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e5a9d789ac25cf009d1068ca5c1ca26ca430db07b1761b33c6f08e1b52ea4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5a9d789ac25cf009d1068ca5c1ca26ca430db07b1761b33c6f08e1b52ea4b9->enter($__internal_4e5a9d789ac25cf009d1068ca5c1ca26ca430db07b1761b33c6f08e1b52ea4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4e5a9d789ac25cf009d1068ca5c1ca26ca430db07b1761b33c6f08e1b52ea4b9->leave($__internal_4e5a9d789ac25cf009d1068ca5c1ca26ca430db07b1761b33c6f08e1b52ea4b9_prof);

        
        $__internal_ad171c845fc4655b4e247efae87c2b105777cb9dbac26fcca1fd12a4d5a23df5->leave($__internal_ad171c845fc4655b4e247efae87c2b105777cb9dbac26fcca1fd12a4d5a23df5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/base.html.twig");
    }
}
