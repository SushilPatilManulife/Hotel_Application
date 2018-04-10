<?php

/* base.html.twig */
class __TwigTemplate_6f7ccb0bd6f3d93de97dfc25e94ea49f669201ad9e1bef2aab772932f49b3b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae854d37f24ab3a4d1457e38cb8834b8bf86c336840842b24ec8606c83b9442e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae854d37f24ab3a4d1457e38cb8834b8bf86c336840842b24ec8606c83b9442e->enter($__internal_ae854d37f24ab3a4d1457e38cb8834b8bf86c336840842b24ec8606c83b9442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_63d10288d15ac5fc925f875cb81534d0b5d38976e3585416591d0f98a0712531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d10288d15ac5fc925f875cb81534d0b5d38976e3585416591d0f98a0712531->enter($__internal_63d10288d15ac5fc925f875cb81534d0b5d38976e3585416591d0f98a0712531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html data-whatinput=\"initial\" data-whatintent=\"mouse\" class=\" whatinput-types-initial\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"UTF-8\">
        <title>Landon Hotel App</title>
        ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 7
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
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
    <meta class=\"foundation-mq\"></head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu=\"49qhhm-dropdown-menu\" role=\"menubar\">
            <li role=\"menuitem\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li role=\"menuitem\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"";
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
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
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

        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
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
        
        $__internal_ae854d37f24ab3a4d1457e38cb8834b8bf86c336840842b24ec8606c83b9442e->leave($__internal_ae854d37f24ab3a4d1457e38cb8834b8bf86c336840842b24ec8606c83b9442e_prof);

        
        $__internal_63d10288d15ac5fc925f875cb81534d0b5d38976e3585416591d0f98a0712531->leave($__internal_63d10288d15ac5fc925f875cb81534d0b5d38976e3585416591d0f98a0712531_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0303b8185a1e4f7415f34ce05e71945443428e066fb6622448270ad3444a90a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0303b8185a1e4f7415f34ce05e71945443428e066fb6622448270ad3444a90a2->enter($__internal_0303b8185a1e4f7415f34ce05e71945443428e066fb6622448270ad3444a90a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4c232c954ab54455b4a2e995a684acd5e80b361f20c6ea7d5fd3f5012b3c1326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c232c954ab54455b4a2e995a684acd5e80b361f20c6ea7d5fd3f5012b3c1326->enter($__internal_4c232c954ab54455b4a2e995a684acd5e80b361f20c6ea7d5fd3f5012b3c1326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_4c232c954ab54455b4a2e995a684acd5e80b361f20c6ea7d5fd3f5012b3c1326->leave($__internal_4c232c954ab54455b4a2e995a684acd5e80b361f20c6ea7d5fd3f5012b3c1326_prof);

        
        $__internal_0303b8185a1e4f7415f34ce05e71945443428e066fb6622448270ad3444a90a2->leave($__internal_0303b8185a1e4f7415f34ce05e71945443428e066fb6622448270ad3444a90a2_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_d65612ca7ba74079962e19a66b1052a15d46efe04d9e3717084688cc2eac2825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65612ca7ba74079962e19a66b1052a15d46efe04d9e3717084688cc2eac2825->enter($__internal_d65612ca7ba74079962e19a66b1052a15d46efe04d9e3717084688cc2eac2825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ded13e45060ac8b7cd54b10c6de39aaddac824a6167e127b77a55097b6f2020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded13e45060ac8b7cd54b10c6de39aaddac824a6167e127b77a55097b6f2020->enter($__internal_7ded13e45060ac8b7cd54b10c6de39aaddac824a6167e127b77a55097b6f2020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_7ded13e45060ac8b7cd54b10c6de39aaddac824a6167e127b77a55097b6f2020->leave($__internal_7ded13e45060ac8b7cd54b10c6de39aaddac824a6167e127b77a55097b6f2020_prof);

        
        $__internal_d65612ca7ba74079962e19a66b1052a15d46efe04d9e3717084688cc2eac2825->leave($__internal_d65612ca7ba74079962e19a66b1052a15d46efe04d9e3717084688cc2eac2825_prof);

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
        return array (  163 => 32,  146 => 6,  123 => 53,  119 => 52,  115 => 51,  111 => 50,  107 => 49,  103 => 48,  86 => 33,  84 => 32,  71 => 22,  67 => 21,  63 => 20,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  27 => 1,);
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
<html data-whatinput=\"initial\" data-whatintent=\"mouse\" class=\" whatinput-types-initial\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"UTF-8\">
        <title>Landon Hotel App</title>
        {% block stylesheet %}{% endblock %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
            <link rel=\"stylesheet\" href=\"{{asset('css/foundation.css')}}\">
            <link rel=\"stylesheet\" href=\"{{asset('css/app.css')}}\">
            <link rel=\"stylesheet\" href=\"{{asset('pickadate/lib/themes/default.css')}}\">
            <link rel=\"stylesheet\" href=\"{{asset('pickadate/lib/themes/default.date.css')}}\">
    <meta class=\"foundation-mq\"></head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu=\"49qhhm-dropdown-menu\" role=\"menubar\">
            <li role=\"menuitem\"><a href=\"{{ path('home')}}\">Home</a></li>
            <li role=\"menuitem\"><a href=\"{{ path('index_clients')}}\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"{{ path('reservations')}}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>


    {% block body%} {% endblock%}




    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

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
