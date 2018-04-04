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
        $__internal_9cdb51a48b7a6c37e31d9f8a8bf7a9ad7a6945b6e505ea26eed50adc1bbf4f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdb51a48b7a6c37e31d9f8a8bf7a9ad7a6945b6e505ea26eed50adc1bbf4f15->enter($__internal_9cdb51a48b7a6c37e31d9f8a8bf7a9ad7a6945b6e505ea26eed50adc1bbf4f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ce17618003cc51c414029359be11ffd83e187e8c7ab70dc14d68771de65fdbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce17618003cc51c414029359be11ffd83e187e8c7ab70dc14d68771de65fdbb7->enter($__internal_ce17618003cc51c414029359be11ffd83e187e8c7ab70dc14d68771de65fdbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9cdb51a48b7a6c37e31d9f8a8bf7a9ad7a6945b6e505ea26eed50adc1bbf4f15->leave($__internal_9cdb51a48b7a6c37e31d9f8a8bf7a9ad7a6945b6e505ea26eed50adc1bbf4f15_prof);

        
        $__internal_ce17618003cc51c414029359be11ffd83e187e8c7ab70dc14d68771de65fdbb7->leave($__internal_ce17618003cc51c414029359be11ffd83e187e8c7ab70dc14d68771de65fdbb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db8848c87267291604d073598afbc92b87dc5870a86c58c90b8bd5f23526a81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8848c87267291604d073598afbc92b87dc5870a86c58c90b8bd5f23526a81c->enter($__internal_db8848c87267291604d073598afbc92b87dc5870a86c58c90b8bd5f23526a81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0804c80b880e08c0a5edda0ff78c37b13e16e4524ac662a4f94860eb4c6ca8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0804c80b880e08c0a5edda0ff78c37b13e16e4524ac662a4f94860eb4c6ca8ac->enter($__internal_0804c80b880e08c0a5edda0ff78c37b13e16e4524ac662a4f94860eb4c6ca8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_0804c80b880e08c0a5edda0ff78c37b13e16e4524ac662a4f94860eb4c6ca8ac->leave($__internal_0804c80b880e08c0a5edda0ff78c37b13e16e4524ac662a4f94860eb4c6ca8ac_prof);

        
        $__internal_db8848c87267291604d073598afbc92b87dc5870a86c58c90b8bd5f23526a81c->leave($__internal_db8848c87267291604d073598afbc92b87dc5870a86c58c90b8bd5f23526a81c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_434deb475f09a51ec612ba071b91e693c14cf779222667690e273a5bd5bc8cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434deb475f09a51ec612ba071b91e693c14cf779222667690e273a5bd5bc8cfc->enter($__internal_434deb475f09a51ec612ba071b91e693c14cf779222667690e273a5bd5bc8cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_51127465d9c7a28f9c359725ef36e2b9f30bfb71ea2745d95ac9ae78828e32a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51127465d9c7a28f9c359725ef36e2b9f30bfb71ea2745d95ac9ae78828e32a1->enter($__internal_51127465d9c7a28f9c359725ef36e2b9f30bfb71ea2745d95ac9ae78828e32a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_51127465d9c7a28f9c359725ef36e2b9f30bfb71ea2745d95ac9ae78828e32a1->leave($__internal_51127465d9c7a28f9c359725ef36e2b9f30bfb71ea2745d95ac9ae78828e32a1_prof);

        
        $__internal_434deb475f09a51ec612ba071b91e693c14cf779222667690e273a5bd5bc8cfc->leave($__internal_434deb475f09a51ec612ba071b91e693c14cf779222667690e273a5bd5bc8cfc_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_87ef106406ce1f7387a4f0082666cdcd2c03ccb95ebcf314c7e9a4818f2cc5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ef106406ce1f7387a4f0082666cdcd2c03ccb95ebcf314c7e9a4818f2cc5fc->enter($__internal_87ef106406ce1f7387a4f0082666cdcd2c03ccb95ebcf314c7e9a4818f2cc5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f66f356fa7d6aac791f3753d57d15ca1d5a1b159317d09331a6d9ba27127fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f66f356fa7d6aac791f3753d57d15ca1d5a1b159317d09331a6d9ba27127fc1->enter($__internal_9f66f356fa7d6aac791f3753d57d15ca1d5a1b159317d09331a6d9ba27127fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f66f356fa7d6aac791f3753d57d15ca1d5a1b159317d09331a6d9ba27127fc1->leave($__internal_9f66f356fa7d6aac791f3753d57d15ca1d5a1b159317d09331a6d9ba27127fc1_prof);

        
        $__internal_87ef106406ce1f7387a4f0082666cdcd2c03ccb95ebcf314c7e9a4818f2cc5fc->leave($__internal_87ef106406ce1f7387a4f0082666cdcd2c03ccb95ebcf314c7e9a4818f2cc5fc_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f541c202886509033f3758f5a84afcfd33ad19eeb1e5e5571c1b64312cfe91ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f541c202886509033f3758f5a84afcfd33ad19eeb1e5e5571c1b64312cfe91ab->enter($__internal_f541c202886509033f3758f5a84afcfd33ad19eeb1e5e5571c1b64312cfe91ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3b983b960c7f57a9edd07dd42411771930c9b271bd8ae8f87c6e79b6e1ef9dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b983b960c7f57a9edd07dd42411771930c9b271bd8ae8f87c6e79b6e1ef9dc4->enter($__internal_3b983b960c7f57a9edd07dd42411771930c9b271bd8ae8f87c6e79b6e1ef9dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b983b960c7f57a9edd07dd42411771930c9b271bd8ae8f87c6e79b6e1ef9dc4->leave($__internal_3b983b960c7f57a9edd07dd42411771930c9b271bd8ae8f87c6e79b6e1ef9dc4_prof);

        
        $__internal_f541c202886509033f3758f5a84afcfd33ad19eeb1e5e5571c1b64312cfe91ab->leave($__internal_f541c202886509033f3758f5a84afcfd33ad19eeb1e5e5571c1b64312cfe91ab_prof);

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
