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
        $__internal_b1c3fedadf4b0769ea4bff2633e5910801fd320e14cd0ef5210125b2d4625a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c3fedadf4b0769ea4bff2633e5910801fd320e14cd0ef5210125b2d4625a4c->enter($__internal_b1c3fedadf4b0769ea4bff2633e5910801fd320e14cd0ef5210125b2d4625a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a0d2477605a087a37af1280660875d1750003fe896918ac8793fa952d35ac3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d2477605a087a37af1280660875d1750003fe896918ac8793fa952d35ac3ef->enter($__internal_a0d2477605a087a37af1280660875d1750003fe896918ac8793fa952d35ac3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c3fedadf4b0769ea4bff2633e5910801fd320e14cd0ef5210125b2d4625a4c->leave($__internal_b1c3fedadf4b0769ea4bff2633e5910801fd320e14cd0ef5210125b2d4625a4c_prof);

        
        $__internal_a0d2477605a087a37af1280660875d1750003fe896918ac8793fa952d35ac3ef->leave($__internal_a0d2477605a087a37af1280660875d1750003fe896918ac8793fa952d35ac3ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ddf20d775eb009072cbdf26fa6cd53efafbbeccdae6dffe69d8eae7f937c34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddf20d775eb009072cbdf26fa6cd53efafbbeccdae6dffe69d8eae7f937c34a->enter($__internal_6ddf20d775eb009072cbdf26fa6cd53efafbbeccdae6dffe69d8eae7f937c34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85672f546ba1d1675771ae3764a1e38bd7f823cca4de316bdefa65c356bcf8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85672f546ba1d1675771ae3764a1e38bd7f823cca4de316bdefa65c356bcf8a7->enter($__internal_85672f546ba1d1675771ae3764a1e38bd7f823cca4de316bdefa65c356bcf8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_85672f546ba1d1675771ae3764a1e38bd7f823cca4de316bdefa65c356bcf8a7->leave($__internal_85672f546ba1d1675771ae3764a1e38bd7f823cca4de316bdefa65c356bcf8a7_prof);

        
        $__internal_6ddf20d775eb009072cbdf26fa6cd53efafbbeccdae6dffe69d8eae7f937c34a->leave($__internal_6ddf20d775eb009072cbdf26fa6cd53efafbbeccdae6dffe69d8eae7f937c34a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8272180ec6e8dd0161350d512a204ac1eaebdcf7dfba904d7945e479b07efa5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8272180ec6e8dd0161350d512a204ac1eaebdcf7dfba904d7945e479b07efa5f->enter($__internal_8272180ec6e8dd0161350d512a204ac1eaebdcf7dfba904d7945e479b07efa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd9becb3b0593c337896c357dd917984785e8cf883f149373af24a58f5ff012a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9becb3b0593c337896c357dd917984785e8cf883f149373af24a58f5ff012a->enter($__internal_bd9becb3b0593c337896c357dd917984785e8cf883f149373af24a58f5ff012a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bd9becb3b0593c337896c357dd917984785e8cf883f149373af24a58f5ff012a->leave($__internal_bd9becb3b0593c337896c357dd917984785e8cf883f149373af24a58f5ff012a_prof);

        
        $__internal_8272180ec6e8dd0161350d512a204ac1eaebdcf7dfba904d7945e479b07efa5f->leave($__internal_8272180ec6e8dd0161350d512a204ac1eaebdcf7dfba904d7945e479b07efa5f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fff2cbc5ee874c986925d84b67b580049743e4cb79b32c908c2ab13fcb78b388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff2cbc5ee874c986925d84b67b580049743e4cb79b32c908c2ab13fcb78b388->enter($__internal_fff2cbc5ee874c986925d84b67b580049743e4cb79b32c908c2ab13fcb78b388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67bce9010be3e5bdd6e2a17ddfb343551985495a55f264f508c39734a0a60d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bce9010be3e5bdd6e2a17ddfb343551985495a55f264f508c39734a0a60d50->enter($__internal_67bce9010be3e5bdd6e2a17ddfb343551985495a55f264f508c39734a0a60d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_67bce9010be3e5bdd6e2a17ddfb343551985495a55f264f508c39734a0a60d50->leave($__internal_67bce9010be3e5bdd6e2a17ddfb343551985495a55f264f508c39734a0a60d50_prof);

        
        $__internal_fff2cbc5ee874c986925d84b67b580049743e4cb79b32c908c2ab13fcb78b388->leave($__internal_fff2cbc5ee874c986925d84b67b580049743e4cb79b32c908c2ab13fcb78b388_prof);

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
