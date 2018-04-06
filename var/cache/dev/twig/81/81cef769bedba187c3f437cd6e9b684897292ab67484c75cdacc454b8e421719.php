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
        $__internal_b998470b14ab6cf4a650bb2f35e1eeb1cb24e301a8e31df42ad8f418b6603b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b998470b14ab6cf4a650bb2f35e1eeb1cb24e301a8e31df42ad8f418b6603b7b->enter($__internal_b998470b14ab6cf4a650bb2f35e1eeb1cb24e301a8e31df42ad8f418b6603b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_768acb680b928c6a4fed13019425cb8413f3161e3b4a88ffcaa7c98dda85f4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768acb680b928c6a4fed13019425cb8413f3161e3b4a88ffcaa7c98dda85f4fb->enter($__internal_768acb680b928c6a4fed13019425cb8413f3161e3b4a88ffcaa7c98dda85f4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b998470b14ab6cf4a650bb2f35e1eeb1cb24e301a8e31df42ad8f418b6603b7b->leave($__internal_b998470b14ab6cf4a650bb2f35e1eeb1cb24e301a8e31df42ad8f418b6603b7b_prof);

        
        $__internal_768acb680b928c6a4fed13019425cb8413f3161e3b4a88ffcaa7c98dda85f4fb->leave($__internal_768acb680b928c6a4fed13019425cb8413f3161e3b4a88ffcaa7c98dda85f4fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd128f2b311b5d41d9514fe82eea8cad3c7b07d489250ca43190e08c544c51cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd128f2b311b5d41d9514fe82eea8cad3c7b07d489250ca43190e08c544c51cb->enter($__internal_fd128f2b311b5d41d9514fe82eea8cad3c7b07d489250ca43190e08c544c51cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8730e290242028b2c0820f1ffc3c4053a3bd3ef4a38733bd2220104446774059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8730e290242028b2c0820f1ffc3c4053a3bd3ef4a38733bd2220104446774059->enter($__internal_8730e290242028b2c0820f1ffc3c4053a3bd3ef4a38733bd2220104446774059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8730e290242028b2c0820f1ffc3c4053a3bd3ef4a38733bd2220104446774059->leave($__internal_8730e290242028b2c0820f1ffc3c4053a3bd3ef4a38733bd2220104446774059_prof);

        
        $__internal_fd128f2b311b5d41d9514fe82eea8cad3c7b07d489250ca43190e08c544c51cb->leave($__internal_fd128f2b311b5d41d9514fe82eea8cad3c7b07d489250ca43190e08c544c51cb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b43d6fd3b3830db901a97743fda7c86ffb193934b3614e228b7c7e4e43afe1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b43d6fd3b3830db901a97743fda7c86ffb193934b3614e228b7c7e4e43afe1a->enter($__internal_5b43d6fd3b3830db901a97743fda7c86ffb193934b3614e228b7c7e4e43afe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94bd44aa1bbebe3b594c0fd52f0d266906e07c112417bab3b4394c30411fc691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bd44aa1bbebe3b594c0fd52f0d266906e07c112417bab3b4394c30411fc691->enter($__internal_94bd44aa1bbebe3b594c0fd52f0d266906e07c112417bab3b4394c30411fc691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_94bd44aa1bbebe3b594c0fd52f0d266906e07c112417bab3b4394c30411fc691->leave($__internal_94bd44aa1bbebe3b594c0fd52f0d266906e07c112417bab3b4394c30411fc691_prof);

        
        $__internal_5b43d6fd3b3830db901a97743fda7c86ffb193934b3614e228b7c7e4e43afe1a->leave($__internal_5b43d6fd3b3830db901a97743fda7c86ffb193934b3614e228b7c7e4e43afe1a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_000935672349e47eb328b945e743c8e01c8ed952ca8936828d9647372cc15c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000935672349e47eb328b945e743c8e01c8ed952ca8936828d9647372cc15c67->enter($__internal_000935672349e47eb328b945e743c8e01c8ed952ca8936828d9647372cc15c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2113b5ef39c03716e1fe312d1bacf5ac5fad430e52cda6fbdee23045426e747d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2113b5ef39c03716e1fe312d1bacf5ac5fad430e52cda6fbdee23045426e747d->enter($__internal_2113b5ef39c03716e1fe312d1bacf5ac5fad430e52cda6fbdee23045426e747d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2113b5ef39c03716e1fe312d1bacf5ac5fad430e52cda6fbdee23045426e747d->leave($__internal_2113b5ef39c03716e1fe312d1bacf5ac5fad430e52cda6fbdee23045426e747d_prof);

        
        $__internal_000935672349e47eb328b945e743c8e01c8ed952ca8936828d9647372cc15c67->leave($__internal_000935672349e47eb328b945e743c8e01c8ed952ca8936828d9647372cc15c67_prof);

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
