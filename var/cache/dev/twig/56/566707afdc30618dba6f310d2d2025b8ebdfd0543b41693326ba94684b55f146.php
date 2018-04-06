<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ff53047fabd68898161ba84eaf5ca248fea6827b760b4f174bdadef9913ab843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_915e512c9292dc7995b528666fdf2ec389c1e6162ea346671f50602de738ad06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915e512c9292dc7995b528666fdf2ec389c1e6162ea346671f50602de738ad06->enter($__internal_915e512c9292dc7995b528666fdf2ec389c1e6162ea346671f50602de738ad06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_858dc341cf8a77619127baea6ee2c370acef949ffd50862b0f54c98bfab05958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858dc341cf8a77619127baea6ee2c370acef949ffd50862b0f54c98bfab05958->enter($__internal_858dc341cf8a77619127baea6ee2c370acef949ffd50862b0f54c98bfab05958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_915e512c9292dc7995b528666fdf2ec389c1e6162ea346671f50602de738ad06->leave($__internal_915e512c9292dc7995b528666fdf2ec389c1e6162ea346671f50602de738ad06_prof);

        
        $__internal_858dc341cf8a77619127baea6ee2c370acef949ffd50862b0f54c98bfab05958->leave($__internal_858dc341cf8a77619127baea6ee2c370acef949ffd50862b0f54c98bfab05958_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_98fed1283ace7410d7447e44414272b2f9b05220acaf82f4bb8dd29614e00823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fed1283ace7410d7447e44414272b2f9b05220acaf82f4bb8dd29614e00823->enter($__internal_98fed1283ace7410d7447e44414272b2f9b05220acaf82f4bb8dd29614e00823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_175138cd71b31800c423b4975136202e7b2316080473d3c87458448b9ecab416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175138cd71b31800c423b4975136202e7b2316080473d3c87458448b9ecab416->enter($__internal_175138cd71b31800c423b4975136202e7b2316080473d3c87458448b9ecab416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_175138cd71b31800c423b4975136202e7b2316080473d3c87458448b9ecab416->leave($__internal_175138cd71b31800c423b4975136202e7b2316080473d3c87458448b9ecab416_prof);

        
        $__internal_98fed1283ace7410d7447e44414272b2f9b05220acaf82f4bb8dd29614e00823->leave($__internal_98fed1283ace7410d7447e44414272b2f9b05220acaf82f4bb8dd29614e00823_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
