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
        $__internal_53796b56ee3ce46f006f0ef1a0f438290312b96d8330e42e25e0e77e8461d8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53796b56ee3ce46f006f0ef1a0f438290312b96d8330e42e25e0e77e8461d8cd->enter($__internal_53796b56ee3ce46f006f0ef1a0f438290312b96d8330e42e25e0e77e8461d8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_776ec8564088ed46c80084d229e25e2eb2ff09960d6f85aeb25266879c96d6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776ec8564088ed46c80084d229e25e2eb2ff09960d6f85aeb25266879c96d6c5->enter($__internal_776ec8564088ed46c80084d229e25e2eb2ff09960d6f85aeb25266879c96d6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_53796b56ee3ce46f006f0ef1a0f438290312b96d8330e42e25e0e77e8461d8cd->leave($__internal_53796b56ee3ce46f006f0ef1a0f438290312b96d8330e42e25e0e77e8461d8cd_prof);

        
        $__internal_776ec8564088ed46c80084d229e25e2eb2ff09960d6f85aeb25266879c96d6c5->leave($__internal_776ec8564088ed46c80084d229e25e2eb2ff09960d6f85aeb25266879c96d6c5_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_69d0e9a4cb6ed0a23411489cda56572e379d9fe85a3acd68dcd87a226f281da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d0e9a4cb6ed0a23411489cda56572e379d9fe85a3acd68dcd87a226f281da0->enter($__internal_69d0e9a4cb6ed0a23411489cda56572e379d9fe85a3acd68dcd87a226f281da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_1ac73561130de534133161ae2f2ca39a4a42f2c5fd6ac7eaed53cb52e0749794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac73561130de534133161ae2f2ca39a4a42f2c5fd6ac7eaed53cb52e0749794->enter($__internal_1ac73561130de534133161ae2f2ca39a4a42f2c5fd6ac7eaed53cb52e0749794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_1ac73561130de534133161ae2f2ca39a4a42f2c5fd6ac7eaed53cb52e0749794->leave($__internal_1ac73561130de534133161ae2f2ca39a4a42f2c5fd6ac7eaed53cb52e0749794_prof);

        
        $__internal_69d0e9a4cb6ed0a23411489cda56572e379d9fe85a3acd68dcd87a226f281da0->leave($__internal_69d0e9a4cb6ed0a23411489cda56572e379d9fe85a3acd68dcd87a226f281da0_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_181dcd37626d8dd9572fd026c3dc8135697a198ebaa13fa404d57fde707aa825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181dcd37626d8dd9572fd026c3dc8135697a198ebaa13fa404d57fde707aa825->enter($__internal_181dcd37626d8dd9572fd026c3dc8135697a198ebaa13fa404d57fde707aa825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19bb660a1ff467418986958290c89d7f0bab9ea1c3922effcc9135829024dc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bb660a1ff467418986958290c89d7f0bab9ea1c3922effcc9135829024dc07->enter($__internal_19bb660a1ff467418986958290c89d7f0bab9ea1c3922effcc9135829024dc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_19bb660a1ff467418986958290c89d7f0bab9ea1c3922effcc9135829024dc07->leave($__internal_19bb660a1ff467418986958290c89d7f0bab9ea1c3922effcc9135829024dc07_prof);

        
        $__internal_181dcd37626d8dd9572fd026c3dc8135697a198ebaa13fa404d57fde707aa825->leave($__internal_181dcd37626d8dd9572fd026c3dc8135697a198ebaa13fa404d57fde707aa825_prof);

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
