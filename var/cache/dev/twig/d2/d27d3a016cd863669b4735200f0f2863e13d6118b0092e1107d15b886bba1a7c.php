<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_037d6c50af9d45dcf9d9d11de524c6241f192176b137f690f22fffefe21c3c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_47b140256e2b31916d2a77a9f095b2bd1da6140e616cf7e68342886059e50e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b140256e2b31916d2a77a9f095b2bd1da6140e616cf7e68342886059e50e2a->enter($__internal_47b140256e2b31916d2a77a9f095b2bd1da6140e616cf7e68342886059e50e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5d81dd103f884fc505074a71ac24fc7d200599864ae699d05c2d390e62559dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d81dd103f884fc505074a71ac24fc7d200599864ae699d05c2d390e62559dfb->enter($__internal_5d81dd103f884fc505074a71ac24fc7d200599864ae699d05c2d390e62559dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b140256e2b31916d2a77a9f095b2bd1da6140e616cf7e68342886059e50e2a->leave($__internal_47b140256e2b31916d2a77a9f095b2bd1da6140e616cf7e68342886059e50e2a_prof);

        
        $__internal_5d81dd103f884fc505074a71ac24fc7d200599864ae699d05c2d390e62559dfb->leave($__internal_5d81dd103f884fc505074a71ac24fc7d200599864ae699d05c2d390e62559dfb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_394ef2a03daca6b79e2e1b0224c2d47cf186688d6118f7f5106d81e3807b57d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394ef2a03daca6b79e2e1b0224c2d47cf186688d6118f7f5106d81e3807b57d1->enter($__internal_394ef2a03daca6b79e2e1b0224c2d47cf186688d6118f7f5106d81e3807b57d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e5f47a597a6b3588e22678297c0ade817b51e2f1394cdb4d25413ede258fe695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f47a597a6b3588e22678297c0ade817b51e2f1394cdb4d25413ede258fe695->enter($__internal_e5f47a597a6b3588e22678297c0ade817b51e2f1394cdb4d25413ede258fe695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e5f47a597a6b3588e22678297c0ade817b51e2f1394cdb4d25413ede258fe695->leave($__internal_e5f47a597a6b3588e22678297c0ade817b51e2f1394cdb4d25413ede258fe695_prof);

        
        $__internal_394ef2a03daca6b79e2e1b0224c2d47cf186688d6118f7f5106d81e3807b57d1->leave($__internal_394ef2a03daca6b79e2e1b0224c2d47cf186688d6118f7f5106d81e3807b57d1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb4b0bca8f6926d26a9b7d90525c518ce8916bc683511aaa428438f8c7955634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4b0bca8f6926d26a9b7d90525c518ce8916bc683511aaa428438f8c7955634->enter($__internal_fb4b0bca8f6926d26a9b7d90525c518ce8916bc683511aaa428438f8c7955634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3cf5c985e260e85b724a7233e3ebed3172b72ff4909fd6d33e4495317ab4c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cf5c985e260e85b724a7233e3ebed3172b72ff4909fd6d33e4495317ab4c6a->enter($__internal_a3cf5c985e260e85b724a7233e3ebed3172b72ff4909fd6d33e4495317ab4c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3cf5c985e260e85b724a7233e3ebed3172b72ff4909fd6d33e4495317ab4c6a->leave($__internal_a3cf5c985e260e85b724a7233e3ebed3172b72ff4909fd6d33e4495317ab4c6a_prof);

        
        $__internal_fb4b0bca8f6926d26a9b7d90525c518ce8916bc683511aaa428438f8c7955634->leave($__internal_fb4b0bca8f6926d26a9b7d90525c518ce8916bc683511aaa428438f8c7955634_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cc84a36a879eaa2666d6ca6d58afae2c2d7efb9c98f99355cbe70a645849128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc84a36a879eaa2666d6ca6d58afae2c2d7efb9c98f99355cbe70a645849128->enter($__internal_2cc84a36a879eaa2666d6ca6d58afae2c2d7efb9c98f99355cbe70a645849128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7fcef39aec6fcd347036b50ef87adc8965a1d0cf34250693b384ae6f63395d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fcef39aec6fcd347036b50ef87adc8965a1d0cf34250693b384ae6f63395d9->enter($__internal_f7fcef39aec6fcd347036b50ef87adc8965a1d0cf34250693b384ae6f63395d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f7fcef39aec6fcd347036b50ef87adc8965a1d0cf34250693b384ae6f63395d9->leave($__internal_f7fcef39aec6fcd347036b50ef87adc8965a1d0cf34250693b384ae6f63395d9_prof);

        
        $__internal_2cc84a36a879eaa2666d6ca6d58afae2c2d7efb9c98f99355cbe70a645849128->leave($__internal_2cc84a36a879eaa2666d6ca6d58afae2c2d7efb9c98f99355cbe70a645849128_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
