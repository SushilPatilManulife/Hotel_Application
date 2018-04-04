<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6b8390fe225700581b42c2e1d8e7ebc9280a35037d61228c35e2457b24dab60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d86f0baea8d0c6a5a803f6b278700b8ff5ac9174b59396c750f8a1db7aca2b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86f0baea8d0c6a5a803f6b278700b8ff5ac9174b59396c750f8a1db7aca2b0e->enter($__internal_d86f0baea8d0c6a5a803f6b278700b8ff5ac9174b59396c750f8a1db7aca2b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7b8a0c955cfa99354f6809abf74c97f4f4ae60a2d142420133779a1f8824b5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8a0c955cfa99354f6809abf74c97f4f4ae60a2d142420133779a1f8824b5b9->enter($__internal_7b8a0c955cfa99354f6809abf74c97f4f4ae60a2d142420133779a1f8824b5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d86f0baea8d0c6a5a803f6b278700b8ff5ac9174b59396c750f8a1db7aca2b0e->leave($__internal_d86f0baea8d0c6a5a803f6b278700b8ff5ac9174b59396c750f8a1db7aca2b0e_prof);

        
        $__internal_7b8a0c955cfa99354f6809abf74c97f4f4ae60a2d142420133779a1f8824b5b9->leave($__internal_7b8a0c955cfa99354f6809abf74c97f4f4ae60a2d142420133779a1f8824b5b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1d823a04b50b7416d791380a0ee3a199de4fa0e24bb27d5a1fd608ba0cff161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d823a04b50b7416d791380a0ee3a199de4fa0e24bb27d5a1fd608ba0cff161->enter($__internal_c1d823a04b50b7416d791380a0ee3a199de4fa0e24bb27d5a1fd608ba0cff161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8681603fb0232cad8bc13dd9abf5d51c23ddd0ae7f3a0806bc5c69b2d7dd243f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8681603fb0232cad8bc13dd9abf5d51c23ddd0ae7f3a0806bc5c69b2d7dd243f->enter($__internal_8681603fb0232cad8bc13dd9abf5d51c23ddd0ae7f3a0806bc5c69b2d7dd243f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8681603fb0232cad8bc13dd9abf5d51c23ddd0ae7f3a0806bc5c69b2d7dd243f->leave($__internal_8681603fb0232cad8bc13dd9abf5d51c23ddd0ae7f3a0806bc5c69b2d7dd243f_prof);

        
        $__internal_c1d823a04b50b7416d791380a0ee3a199de4fa0e24bb27d5a1fd608ba0cff161->leave($__internal_c1d823a04b50b7416d791380a0ee3a199de4fa0e24bb27d5a1fd608ba0cff161_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_23e66c6244c3daad224955724192eb420848ff2d21418315b0d80ef1e8d413a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e66c6244c3daad224955724192eb420848ff2d21418315b0d80ef1e8d413a7->enter($__internal_23e66c6244c3daad224955724192eb420848ff2d21418315b0d80ef1e8d413a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4524bbab83ededc39245afd10b5629e1c95846f9c82f52b17d94eccb56234d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4524bbab83ededc39245afd10b5629e1c95846f9c82f52b17d94eccb56234d44->enter($__internal_4524bbab83ededc39245afd10b5629e1c95846f9c82f52b17d94eccb56234d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4524bbab83ededc39245afd10b5629e1c95846f9c82f52b17d94eccb56234d44->leave($__internal_4524bbab83ededc39245afd10b5629e1c95846f9c82f52b17d94eccb56234d44_prof);

        
        $__internal_23e66c6244c3daad224955724192eb420848ff2d21418315b0d80ef1e8d413a7->leave($__internal_23e66c6244c3daad224955724192eb420848ff2d21418315b0d80ef1e8d413a7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d2aaefde75e59851a7a195c251e2a4577a2d3c2bc854b1264bcc48db1cfdeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2aaefde75e59851a7a195c251e2a4577a2d3c2bc854b1264bcc48db1cfdeb7->enter($__internal_6d2aaefde75e59851a7a195c251e2a4577a2d3c2bc854b1264bcc48db1cfdeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_324ea088364a0d6a9ff2f5c27e4a569f4c7c5a6d1651cbea97596990809f6511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324ea088364a0d6a9ff2f5c27e4a569f4c7c5a6d1651cbea97596990809f6511->enter($__internal_324ea088364a0d6a9ff2f5c27e4a569f4c7c5a6d1651cbea97596990809f6511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_324ea088364a0d6a9ff2f5c27e4a569f4c7c5a6d1651cbea97596990809f6511->leave($__internal_324ea088364a0d6a9ff2f5c27e4a569f4c7c5a6d1651cbea97596990809f6511_prof);

        
        $__internal_6d2aaefde75e59851a7a195c251e2a4577a2d3c2bc854b1264bcc48db1cfdeb7->leave($__internal_6d2aaefde75e59851a7a195c251e2a4577a2d3c2bc854b1264bcc48db1cfdeb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
