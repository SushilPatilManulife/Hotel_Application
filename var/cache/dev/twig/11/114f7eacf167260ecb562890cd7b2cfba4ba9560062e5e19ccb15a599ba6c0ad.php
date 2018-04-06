<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_07483b62e6c7eb55d62f6853f0429d92ee7e110056680a97daceb4f2a8b745df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0c6ebbbaed201eb8ab6125ad265ab0e3f8ad5aea98fcd1f4ba646ea7d00d1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c6ebbbaed201eb8ab6125ad265ab0e3f8ad5aea98fcd1f4ba646ea7d00d1fd->enter($__internal_b0c6ebbbaed201eb8ab6125ad265ab0e3f8ad5aea98fcd1f4ba646ea7d00d1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_01ba7479df9dc5699479ba7e9b432590b71467a65762f3397e0e1ce396b9b61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ba7479df9dc5699479ba7e9b432590b71467a65762f3397e0e1ce396b9b61f->enter($__internal_01ba7479df9dc5699479ba7e9b432590b71467a65762f3397e0e1ce396b9b61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b0c6ebbbaed201eb8ab6125ad265ab0e3f8ad5aea98fcd1f4ba646ea7d00d1fd->leave($__internal_b0c6ebbbaed201eb8ab6125ad265ab0e3f8ad5aea98fcd1f4ba646ea7d00d1fd_prof);

        
        $__internal_01ba7479df9dc5699479ba7e9b432590b71467a65762f3397e0e1ce396b9b61f->leave($__internal_01ba7479df9dc5699479ba7e9b432590b71467a65762f3397e0e1ce396b9b61f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
