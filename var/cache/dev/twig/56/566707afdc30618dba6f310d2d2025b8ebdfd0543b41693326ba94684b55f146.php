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
        $__internal_24571bda4626ca927ee4437ba843359957066aba258fd98aad3ef177587ef46a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24571bda4626ca927ee4437ba843359957066aba258fd98aad3ef177587ef46a->enter($__internal_24571bda4626ca927ee4437ba843359957066aba258fd98aad3ef177587ef46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6a12b563bdf666c7e4f5f9065430a5150103a814cecf9f3ed13fb6c02cdcd6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a12b563bdf666c7e4f5f9065430a5150103a814cecf9f3ed13fb6c02cdcd6b2->enter($__internal_6a12b563bdf666c7e4f5f9065430a5150103a814cecf9f3ed13fb6c02cdcd6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_24571bda4626ca927ee4437ba843359957066aba258fd98aad3ef177587ef46a->leave($__internal_24571bda4626ca927ee4437ba843359957066aba258fd98aad3ef177587ef46a_prof);

        
        $__internal_6a12b563bdf666c7e4f5f9065430a5150103a814cecf9f3ed13fb6c02cdcd6b2->leave($__internal_6a12b563bdf666c7e4f5f9065430a5150103a814cecf9f3ed13fb6c02cdcd6b2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_97c92d8925bac9d7208e44e5a500cccd1287945fcd7cd76171977521ce7c2dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c92d8925bac9d7208e44e5a500cccd1287945fcd7cd76171977521ce7c2dc3->enter($__internal_97c92d8925bac9d7208e44e5a500cccd1287945fcd7cd76171977521ce7c2dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f2d265a82a630399239fee662b0db8145752307de1f8038778620a74d435e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2d265a82a630399239fee662b0db8145752307de1f8038778620a74d435e11->enter($__internal_4f2d265a82a630399239fee662b0db8145752307de1f8038778620a74d435e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4f2d265a82a630399239fee662b0db8145752307de1f8038778620a74d435e11->leave($__internal_4f2d265a82a630399239fee662b0db8145752307de1f8038778620a74d435e11_prof);

        
        $__internal_97c92d8925bac9d7208e44e5a500cccd1287945fcd7cd76171977521ce7c2dc3->leave($__internal_97c92d8925bac9d7208e44e5a500cccd1287945fcd7cd76171977521ce7c2dc3_prof);

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
