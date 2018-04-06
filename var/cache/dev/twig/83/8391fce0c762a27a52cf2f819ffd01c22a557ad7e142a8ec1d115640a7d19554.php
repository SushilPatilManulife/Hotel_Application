<?php

/* ::base.html.twig */
class __TwigTemplate_ec727907c8bdfa3c9dc59c7f231ee189d362f5e842b51aa91957bdf575b84e7a extends Twig_Template
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
        $__internal_9f4d7b0cfd8b9a835ac0256745f5e66e9d1f83fdfdc8ab067ff70f8b2ee79f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4d7b0cfd8b9a835ac0256745f5e66e9d1f83fdfdc8ab067ff70f8b2ee79f13->enter($__internal_9f4d7b0cfd8b9a835ac0256745f5e66e9d1f83fdfdc8ab067ff70f8b2ee79f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_52c434253708067c9642e3d36f9b908514458afc39f274331619b89e7e90edb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c434253708067c9642e3d36f9b908514458afc39f274331619b89e7e90edb0->enter($__internal_52c434253708067c9642e3d36f9b908514458afc39f274331619b89e7e90edb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            <li role=\"menuitem\"><a href=\"./home.html\">Home</a></li>
            <li role=\"menuitem\"><a href=\"./clients.html\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"./reservations.html\">Reservations</a></li>
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
        
        $__internal_9f4d7b0cfd8b9a835ac0256745f5e66e9d1f83fdfdc8ab067ff70f8b2ee79f13->leave($__internal_9f4d7b0cfd8b9a835ac0256745f5e66e9d1f83fdfdc8ab067ff70f8b2ee79f13_prof);

        
        $__internal_52c434253708067c9642e3d36f9b908514458afc39f274331619b89e7e90edb0->leave($__internal_52c434253708067c9642e3d36f9b908514458afc39f274331619b89e7e90edb0_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0cd492741fdc5fe2726fc10e3a45ef992c9d9b093fc4f85358f84909956a8013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd492741fdc5fe2726fc10e3a45ef992c9d9b093fc4f85358f84909956a8013->enter($__internal_0cd492741fdc5fe2726fc10e3a45ef992c9d9b093fc4f85358f84909956a8013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_8d2f539719c57d555a2d9d4a0c000da214f5d80d0f60391c4d8c068c337e096d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2f539719c57d555a2d9d4a0c000da214f5d80d0f60391c4d8c068c337e096d->enter($__internal_8d2f539719c57d555a2d9d4a0c000da214f5d80d0f60391c4d8c068c337e096d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_8d2f539719c57d555a2d9d4a0c000da214f5d80d0f60391c4d8c068c337e096d->leave($__internal_8d2f539719c57d555a2d9d4a0c000da214f5d80d0f60391c4d8c068c337e096d_prof);

        
        $__internal_0cd492741fdc5fe2726fc10e3a45ef992c9d9b093fc4f85358f84909956a8013->leave($__internal_0cd492741fdc5fe2726fc10e3a45ef992c9d9b093fc4f85358f84909956a8013_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_d278730586bc159d33a9b4b04c10d3f33a61e497d44f0249f9e07693a1f01f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d278730586bc159d33a9b4b04c10d3f33a61e497d44f0249f9e07693a1f01f0b->enter($__internal_d278730586bc159d33a9b4b04c10d3f33a61e497d44f0249f9e07693a1f01f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02ae0507f2f2d4ff0ba93d6956af2ded0619067a993f0201713ba6856ef4f3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ae0507f2f2d4ff0ba93d6956af2ded0619067a993f0201713ba6856ef4f3e3->enter($__internal_02ae0507f2f2d4ff0ba93d6956af2ded0619067a993f0201713ba6856ef4f3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_02ae0507f2f2d4ff0ba93d6956af2ded0619067a993f0201713ba6856ef4f3e3->leave($__internal_02ae0507f2f2d4ff0ba93d6956af2ded0619067a993f0201713ba6856ef4f3e3_prof);

        
        $__internal_d278730586bc159d33a9b4b04c10d3f33a61e497d44f0249f9e07693a1f01f0b->leave($__internal_d278730586bc159d33a9b4b04c10d3f33a61e497d44f0249f9e07693a1f01f0b_prof);

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
        return array (  154 => 32,  137 => 6,  114 => 53,  110 => 52,  106 => 51,  102 => 50,  98 => 49,  94 => 48,  77 => 33,  75 => 32,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  27 => 1,);
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
            <li role=\"menuitem\"><a href=\"./home.html\">Home</a></li>
            <li role=\"menuitem\"><a href=\"./clients.html\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"./reservations.html\">Reservations</a></li>
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
", "::base.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/base.html.twig");
    }
}
